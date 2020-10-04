<?php
abstract class td_module {
    var $post;

    var $title_attribute;
    var $title;             // by default the WordPress title is not escaped on twenty fifteen
    var $href;


    private $module_atts = array();

    /**
     * @var mixed the review metadata - we get it for each $post
     */
    protected $td_review;

	/**
	 * @var bool is true if we have a review for this $post
	 */
	protected $is_review = false;

    /**
     * @var int|null Contains the id of the current $post thumbnail. If no thumbnail is found, the value is NULL
     */
    protected $post_thumb_id = NULL;


    /**
     * @param $post WP_Post
     * @param array $module_atts
     */
    function __construct($post, $module_atts = array()) {

        $this->module_atts = $module_atts;

        if (gettype($post) != 'object' or get_class($post) != 'WP_Post') {
            td_util::error(__FILE__, 'td_module: ' . get_Class($this) . '($post): $post is not WP_Post');
        }


        //this filter is used by td_unique_posts.php - to add unique posts to the array for the datasource
        apply_filters("td_wp_booster_module_constructor", $this, $post);

        $this->post = $post;

        // by default the WordPress title is not escaped on twenty fifteen
        $this->title = get_the_title($post->ID);
        $this->title_attribute = esc_attr(strip_tags($this->title));
        $this->href = esc_url(get_permalink($post->ID));

        if (has_post_thumbnail($this->post->ID)) {
            $tmp_get_post_thumbnail_id = get_post_thumbnail_id($this->post->ID);
            if (!empty($tmp_get_post_thumbnail_id)) {
                // if we have a wrong id, leave the post_thumb_id NULL
                $this->post_thumb_id = $tmp_get_post_thumbnail_id;
            }
        }

        //get the review metadata
        //$this->td_review = get_post_meta($this->post->ID, 'td_review', true); !!!! $this->td_review variable name must be replaced and the 'get_quotes_on_blocks', 'get_category' methods also
	    $this->td_review = td_util::get_post_meta_array($this->post->ID, 'td_post_theme_settings');

	    if (!empty($this->td_review['has_review']) and (
			    !empty($this->td_review['p_review_stars']) or
			    !empty($this->td_review['p_review_percents']) or
			    !empty($this->td_review['p_review_points'])
		    )
	    ) {
		    $this->is_review = true;
	    }
    }


    /**
     * @deprecated - google changed the structured data requirements and we no longer use them on modules
     */
    function get_item_scope() {
        return '';
    }


    /**
     * @deprecated - google changed the structured data requirements and we no longer use them on modules
     */
    function get_item_scope_meta() {
        return '';
    }


    function get_module_classes($additional_classes_array = '') {
        //add the wrap and module id class
        $buffy = get_class($this);


	    // each module setting has a 'class' key to customize css
	    $module_class = td_api_module::get_key(get_class($this), 'class');

	    if ($module_class != '') {
		    $buffy .= ' ' . $module_class;
	    }


        //show no thumb only if no thumb is detected and image placeholders are disabled
        if (is_null($this->post_thumb_id) and td_util::get_option('tds_hide_featured_image_placeholder') == 'hide_placeholder') {
            $buffy .= ' td_module_no_thumb';
        }

        // fix the meta info space when all options are off
        if (td_util::get_option('tds_m_show_author_name') == 'hide' and td_util::get_option('tds_m_show_date') == 'hide' and td_util::get_option('tds_m_show_comments') == 'hide') {
            $buffy .= ' td-meta-info-hide';
        }

	    if ($additional_classes_array != '' && is_array($additional_classes_array)) {
		    $buffy .= ' ' . implode(' ', $additional_classes_array);
	    }

	    // the following case could not be checked
	    // $buffy = implode(' ', array_unique(explode(' ', $buffy)));

        return $buffy;
    }

	function get_author_photo() {
		$buffy = '';

		$buffy .= '<a href="' . get_author_posts_url($this->post->post_author) . '" class="td-author-photo">' . get_avatar( $this->post->post_author, '96' ) . '</a>';

		return $buffy;
	}

    function get_author($show_when_review = false) {
        $buffy = '';

        if ($show_when_review or ($this->is_review === false or td_util::get_option('tds_m_show_review') == 'hide')) {
            if (td_util::get_option('tds_m_show_author_name') != 'hide') {
                $buffy .= '<span class="td-post-author-name">';
                $buffy .= '<a href="' . get_author_posts_url($this->post->post_author) . '">' . get_the_author_meta('display_name', $this->post->post_author) . '</a>' ;
                if (td_util::get_option('tds_m_show_author_name') != 'hide' and td_util::get_option('tds_m_show_date') != 'hide') {
                    $buffy .= ' <span>-</span> ';
                }
                $buffy .= '</span>';
            }
        }
        return $buffy;
    }

    function show_author() {
    	echo '<!-- author -->' . $this->get_author();
    }


    function get_date($modified_date = '', $show_when_review = false) {
        $visibility_class = '';
        if (td_util::get_option('tds_m_show_date') == 'hide') {
            $visibility_class = ' td-visibility-hidden';
        }

        $buffy = '';
        if (!$show_when_review and ( $this->is_review and td_util::get_option('tds_m_show_review') != 'hide' )) {
            //if review show stars
            $buffy .= '<span class="entry-review-stars">';
                $buffy .=  td_review::render_stars($this->td_review);
            $buffy .= '</span>';

        } else {
            if (td_util::get_option('tds_m_show_date') != 'hide') {

                global $wp_version;
                //old WP support
                if (version_compare($wp_version, '5.3', '<')) {
                    $td_article_date = date(DATE_W3C, get_the_time('U', $this->post->ID));
                    $td_article_modified_date = date(DATE_W3C, get_the_modified_date('U', $this->post->ID));
                } else {
                    // get_post_datetime() used from WP 5.3
                    $td_article_date = get_post_datetime($this->post->ID, 'date', 'gmt');
                    if ( $td_article_date !== false  ) {
                        $td_article_date = $td_article_date->format(DATE_W3C);
                    }
                    $td_article_modified_date = get_post_datetime($this->post->ID, 'modified', 'gmt');
                    if ( $td_article_modified_date !== false  ) {
                        $td_article_modified_date = $td_article_modified_date->format(DATE_W3C);
                    }
                }

                $buffy .= '<span class="td-post-date">';

                if ($modified_date == 'yes' || td_util::get_option('tds_m_show_modified_date') == 'yes') {
                    $buffy .= '<time class="entry-date updated td-module-date' . $visibility_class . '" datetime="' . $td_article_modified_date . '" >' . __td('Modified date:', TD_THEME_NAME) . ' ' . get_the_modified_date(get_option('date_format'), $this->post->ID) . '</time>';
                }
                else {
                    $buffy .= '<time class="entry-date updated td-module-date' . $visibility_class . '" datetime="' . $td_article_date . '" >' . get_the_time(get_option('date_format'), $this->post->ID) . '</time>';
                }

                $buffy .= '</span>';
            }
        }

        return $buffy;
    }


    function show_date($modified_date = '') {
    	echo '<!-- date -->' . $this->get_date( $modified_date );
    }

    function get_review() {
        $buffy = '';

        if( $this->is_review and td_util::get_option('tds_m_show_review') != 'hide' ) {
            $buffy .= '<span class="entry-review-stars">';
                $buffy .=  td_review::render_stars($this->td_review);
            $buffy .= '</span>';
        }

        return $buffy;
    }


    function get_comments() {
        $buffy = '';
        if (td_util::get_option('tds_m_show_comments') != 'hide') {
            $buffy .= '<span class="td-module-comments">';
                $buffy .= '<a href="' . get_comments_link($this->post->ID) . '">';
                    $buffy .= get_comments_number($this->post->ID);
                $buffy .= '</a>';
            $buffy .= '</span>';
        }

        return $buffy;
    }


    function show_comments() {
    	echo '<!-- comments -->' . $this->get_comments();
    }



    /**
     * get image - v 3.0  23 ian 2015
     *  - v 4.0 - 12 oct 2018 - added support for lazy loading animation images
     * @param $thumbType
     * @param $css_image
     * @return string
     */
    function get_image($thumbType, $css_image = false) {
        $buffy = ''; //the output buffer
        $tds_hide_featured_image_placeholder = td_util::get_option('tds_hide_featured_image_placeholder');
        //retina image
        $srcset_sizes = '';

        // do we have a post thumb or a placeholder?
        if (!is_null($this->post_thumb_id) or ($tds_hide_featured_image_placeholder != 'hide_placeholder')) {

            if (!is_null($this->post_thumb_id)) {
                //if we have a thumb
                // check to see if the thumb size is enabled in the panel, we don't have to check for the default wordpress
                // thumbs (the default ones are already cut and we don't have  a panel setting for them)
                if (td_util::get_option('tds_thumb_' . $thumbType) != 'yes' and $thumbType != 'thumbnail' and $thumbType != 'medium_large') {
                    //the thumb is disabled, show a placeholder thumb from the theme with the "thumb disabled" message
                    global $_wp_additional_image_sizes;

                    if (empty($_wp_additional_image_sizes[$thumbType]['width'])) {
                        $td_temp_image_url[1] = '';
                    } else {
                        $td_temp_image_url[1] = $_wp_additional_image_sizes[$thumbType]['width'];
                    }

                    if (empty($_wp_additional_image_sizes[$thumbType]['height'])) {
                        $td_temp_image_url[2] = '';
                    } else {
                        $td_temp_image_url[2] = $_wp_additional_image_sizes[$thumbType]['height'];
                    }

					// For custom wordpress sizes (not 'thumbnail', 'medium', 'medium_large' or 'large'), get the image path using the api (no_image_path)
	                $thumb_disabled_path = td_global::$get_template_directory_uri;
	                if (strpos($thumbType, 'td_') === 0) {
			            $thumb_disabled_path = td_api_thumb::get_key($thumbType, 'no_image_path');
		            }
			        $td_temp_image_url[0] = $thumb_disabled_path . '/images/thumb-disabled/' . $thumbType . '.png';

                    $attachment_alt = 'alt=""';
                    $attachment_title = '';

                } else {
                    // the thumb is enabled from the panel, it's time to show the real thumb
                    $td_temp_image_url = wp_get_attachment_image_src($this->post_thumb_id, $thumbType);
                    $attachment_alt = get_post_meta($this->post_thumb_id, '_wp_attachment_image_alt', true );
                    $attachment_alt = ' alt="' . esc_attr(strip_tags($attachment_alt)) . '"';
                    $attachment_title = ' title="' . esc_attr(strip_tags($this->title)) . '"';

                    if (empty($td_temp_image_url[0])) {
                        $td_temp_image_url[0] = '';
                    }

                    if (empty($td_temp_image_url[1])) {
                        $td_temp_image_url[1] = '';
                    }

                    if (empty($td_temp_image_url[2])) {
                        $td_temp_image_url[2] = '';
                    }

                    //retina image
                    //don't display srcset_sizes on DEMO - it messes up Pagespeed score (8 March 2017)
                    if (TD_DEPLOY_MODE != 'demo') {
                        $srcset_sizes = td_util::get_srcset_sizes($this->post_thumb_id, $thumbType, $td_temp_image_url[1], $td_temp_image_url[0]);
                    }

                } // end panel thumb enabled check



            } else {
                //we have no thumb but the placeholder one is activated
                global $_wp_additional_image_sizes;

                if (empty($_wp_additional_image_sizes[$thumbType]['width'])) {
                    $td_temp_image_url[1] = '';
                } else {
                    $td_temp_image_url[1] = $_wp_additional_image_sizes[$thumbType]['width'];
                }

                if (empty($_wp_additional_image_sizes[$thumbType]['height'])) {
                    $td_temp_image_url[2] = '';
                } else {
                    $td_temp_image_url[2] = $_wp_additional_image_sizes[$thumbType]['height'];
                }

                /**
                 * get thumb height and width via api
                 * first we check the global in case a custom thumb is used
                 *
                 * The api thumb is checked only for additional sizes registered and if at least one of the settings (width or height) is empty.
                 * This should be enough to avoid getting a non existing id using api thumb.
                 */
	            if (!empty($_wp_additional_image_sizes) && array_key_exists($thumbType, $_wp_additional_image_sizes) && ($td_temp_image_url[1] == '' || $td_temp_image_url[2] == '')) {
                    $td_thumb_parameters = td_api_thumb::get_by_id($thumbType);
	                $td_temp_image_url[1] = $td_thumb_parameters['width'];
                    $td_temp_image_url[2] = $td_thumb_parameters['height'];
                }

	            $custom_placeholder = td_util::get_option('tds_thumb_placeholder');

                if ( $custom_placeholder != '' && !empty($_wp_additional_image_sizes) && array_key_exists($thumbType, $_wp_additional_image_sizes) ) {
                    global $wpdb;
                    $placeholder_id = $wpdb->get_col($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid='%s';", $custom_placeholder ));
                    $td_temp_image_url = wp_get_attachment_image_src($placeholder_id[0], $thumbType);
                } else if( $custom_placeholder != '' && $css_image === true ) {
                    $td_temp_image_url[0] = $custom_placeholder;
                } else {
	            	// For custom wordpress sizes (not 'thumbnail', 'medium', 'medium_large' or 'large'), get the image path using the api (no_image_path)
		            if (strpos($thumbType, 'td_') === 0) {
                        $no_thumb_path = rtrim(td_api_thumb::get_key($thumbType, 'no_image_path'), '/');
                        $td_temp_image_url[0] = $no_thumb_path . '/images/no-thumb/' . $thumbType . '.png';
                    } else {
                        $no_thumb_path = TDC_URL_LEGACY;
                        $td_temp_image_url[0] = $no_thumb_path . '/assets/images/no-thumb/' . $thumbType . '.png';
                    }
                }


                $attachment_alt = 'alt=""';
                $attachment_title = '';
            } //end    if ($this->post_has_thumb) {


            $buffy .= '<div class="td-module-thumb">';
                $post_type = get_post_format($this->post->ID);

                if ( current_user_can('edit_published_posts') ) {
                    $buffy .= '<a class="td-admin-edit" href="' . get_edit_post_link($this->post->ID) . '">edit</a>';
                }

                $video_popup_param_no = '';
                if ( get_class($this) == 'td_module_flex_3' ) {
                    $video_popup_param_no = '2';
                }
                if ( get_class($this) == 'td_module_flex_4' ) {
                    $video_popup_param_no = '3';
                }

                $td_show_video_modal = false;
                $td_global_video_modal = td_util::get_option('tds_m_show_modal_video');
                //general video modal used on Newsmag
                if ( TD_THEME_NAME == 'Newsmag' && $td_global_video_modal == '' ){
                        $td_show_video_modal = true;
                    
                } else { //when it is set on shortcode
                    if ( isset($this->module_atts['video_popup' . $video_popup_param_no]) && $this->module_atts['video_popup' . $video_popup_param_no] != '' ) {
                        $td_show_video_modal = true;
                    }
                }

                $video_popup_class = '';
                $video_popup_data = '';
                if ( $post_type == 'video' && $td_show_video_modal ) {

                    $video_url = get_post_meta($this->post->ID, 'td_post_video');

                    if( isset($video_url[0]['td_video']) && $video_url[0]['td_video'] != '' ) {
                        $video_source = td_video_support::detect_video_service($video_url[0]['td_video']);

                        $video_popup_class = 'td-module-video-modal';
                        $video_popup_data = 'data-video-source="' . $video_source . '" data-video-url="'. esc_url( $video_url[0]['td_video'] ) . '"';

                        $video_rec = '';
                        if( isset($this->module_atts['video_rec' . $video_popup_param_no]) ) {
                            $video_rec = rawurldecode( base64_decode( strip_tags( $this->module_atts['video_rec' . $video_popup_param_no] ) ) );
                        }
                        $video_rec_title = '';
                        if( isset($this->module_atts['video_rec_title' . $video_popup_param_no]) ) {
                            $video_rec_title = $this->module_atts['video_rec_title' . $video_popup_param_no];
                        }

                        $video_popup_ad = array(
                            'code' => $video_rec,
                            'title' => $video_rec_title
                        );

                        if( $video_popup_ad['code'] == '' ) {
                            $video_popup_ad['code'] = stripslashes( td_options::get( 'tds_modal_video_ad') );
                        }
                        if( $video_popup_ad['title'] == '' ) {
                            $video_popup_ad['title'] = td_options::get( 'tds_modal_video_ad_title');
                        }

                        if( $video_popup_ad['code'] != '' ) {
                            $video_popup_data .= 'data-video-rec="' . base64_encode( json_encode($video_popup_ad) ) . '"';
                        }
                    }
                }

                $buffy .= '<a href="' . $this->href . '" rel="bookmark" class="td-image-wrap ' . $video_popup_class . '" title="' . $this->title_attribute . '" ' . $video_popup_data . '>';

                    $tds_animation_stack = td_util::get_option('tds_animation_stack');
                    $tds_ajax_preloading = '';
                    if(isset($this->module_atts['td_ajax_preloading'])) {
                        $tds_ajax_preloading = $this->module_atts['td_ajax_preloading'];
                    }
                    // if we have the lazy loading animation on, we're not on an ajax call or on composer
                    if ( empty( $tds_animation_stack ) && empty($tds_ajax_preloading) && !wp_doing_ajax() && ! td_util::tdc_is_live_editor_ajax() && ! td_util::tdc_is_live_editor_iframe() && !td_util::is_mobile_theme() && !td_util::is_amp() ) {

                        // retina image
                        $retina_image = '';

                        // here we treat the normal img_tag retina ver
                        if ( td_util::get_option('tds_thumb_' . $thumbType . '_retina') == 'yes' && !empty( $td_temp_image_url[1] ) ) {
                            $retina_url = wp_get_attachment_image_src( $this->post_thumb_id, $thumbType . '_retina' );
                            if ( !empty( $retina_url[0] ) ) {
                                $retina_image = 'data-img-retina-url="' . $retina_url[0] . '"';
                            }
                        }

                        // css image
                        if ( $css_image === true ) {

                            // the css_image type
                            $buffy .= '<span class="entry-thumb td-thumb-css" data-type="css_image" data-img-url="' . $td_temp_image_url[0] . '" ' . $retina_image . ' ></span>';

                        // normal image
                        } else {

                            $base64 = '';
                            if ( strpos( $thumbType, 'td_' ) === 0 ) {
                                $thumbs = td_api_thumb::get_all();
                                foreach ($thumbs as $thumb_id => $thumb_data ) {
                                    if ( $thumb_id === $thumbType ) {
                                        if ( isset($thumb_data['b64_encoded'] ) ) {
                                            $base64 = td_api_thumb::get_key( $thumbType, 'b64_encoded' );
                                        }
                                    }
                                }
                            }

                            $src = 'src="' . $base64 . '"';

                            // the normal image_tag type
                            $buffy .= '<img class="entry-thumb" ' . $src . $attachment_alt . $attachment_title . ' data-type="image_tag" data-img-url="' . $td_temp_image_url[0] . '" ' . $retina_image . ' width="' . $td_temp_image_url[1] . '" height="' . $td_temp_image_url[2] . '" />';
                        }

                    } else {

                        // css image
                        if ( $css_image === true ) {

                            // retina image
                            $retina_uuid = '';

                            if ( td_util::get_option('tds_thumb_' . $thumbType . '_retina') == 'yes' && !empty( $td_temp_image_url[1] ) ) {
                                $retina_uuid = td_global::td_generate_unique_id();
                                $retina_url = wp_get_attachment_image_src( $this->post_thumb_id, $thumbType . '_retina' );
                                if ( !empty( $retina_url[0] ) ) {
                                    $buffy .= '
                                        <style>
                                              @media ( -webkit-max-device-pixel-ratio: 2 ) {
                                                  .td-thumb-css.' . $retina_uuid . ' {
                                                      background-image: url(' . $retina_url[0] . ');
                                                  }
                                              }
                                        </style>
                                    ';
                                }
                            }

                            $buffy .= '<span class="entry-thumb td-thumb-css ' . $retina_uuid . '" style="background-image: url(' . $td_temp_image_url[0] . ')" ></span>';

                        // normal image
                        } else {
                            $buffy .= '<img width="' . $td_temp_image_url[1] . '" height="' . $td_temp_image_url[2] . '" class="entry-thumb" src="' . $td_temp_image_url[0] . '" ' . $srcset_sizes . ' ' . $attachment_alt . $attachment_title . ' />';
                        }
                    }


                    // on video or audio type posts add the specific icon
                    if ($post_type == 'video' || $post_type == 'audio') {

                        $use_small_post_format_icon_size = false;
                        // search in all the thumbs for the one that we are currently using here and see if it has post_format_icon_size = small
                        foreach (td_api_thumb::get_all() as $thumb_from_thumb_list) {
                            if ($thumb_from_thumb_list['name'] == $thumbType and $thumb_from_thumb_list['post_format_icon_size'] == 'small') {
                                $use_small_post_format_icon_size = true;
                                break;
                            }
                        }

                        // load the small or medium play icon
                        if ($use_small_post_format_icon_size === true) {
                            $buffy .= '<span class="td-video-play-ico td-video-small"><i class="td-icon-' . $post_type . '-thumb-play"></i></span>';
                        } else {
                            $buffy .= '<span class="td-video-play-ico"><i class="td-icon-' . $post_type . '-thumb-play"></i></span>';
                        }
                    } // end on video if

                $buffy .= '</a>';
            $buffy .= '</div>'; //end wrapper

            return $buffy;
        }

        return $buffy;
    }
    


     /**
     * Display image
     * @param $thumbType
     * @param $css_image
     * @return string
     */
    function show_image($thumbType, $css_image = false) {
    	echo '<!-- image -->' . $this->get_image($thumbType, $css_image);
    }



    /**
     * This function returns the title with the appropriate markup.
     * @param string $cut_at - if provided, the method will just cut at that point
     * and it will cut after that. If not setting is in the database the function will cut at the default value
     * @return string
     */

    function get_title($cut_at = '') {
        $buffy = '';
        $buffy .= '<h3 class="entry-title td-module-title">';
        $buffy .='<a href="' . $this->href . '" rel="bookmark" title="' . $this->title_attribute . '">';

        //see if we have to cut the title and if we have the title lenght in the panel for ex: td_module_6__title_excerpt
        if ($cut_at != '') {
            //cut at the hard coded size
            $buffy .= td_util::excerpt($this->title, $cut_at, 'show_shortcodes');

        } else {
            $current_module_class = get_class($this);

            //see if we have a default setting for this module, and if so only apply it if we don't get other things form theme panel.
            if (td_api_module::_helper_check_excerpt_title($current_module_class)) {
                $db_title_excerpt = td_util::get_option($current_module_class . '_title_excerpt');
                if ($db_title_excerpt != '') {
                    //cut from the database settings
                    $buffy .= td_util::excerpt($this->title, $db_title_excerpt, 'show_shortcodes');
                } else {
                    //cut at the default size
                    $module_api = td_api_module::get_by_id($current_module_class);
                    $buffy .= td_util::excerpt($this->title, $module_api['excerpt_title'], 'show_shortcodes');
                }
            } else {
                /**
                 * no $cut_at provided and no setting in td_config -> return the full title
                 * @see td_global::$modules_list
                 */
                $buffy .= $this->title;
            }

        }
        $buffy .='</a>';
        $buffy .= '</h3>';
        return $buffy;
    }



    /**
     * Show the title with the appropriate markup.
     * @param string $cut_at - if provided, the method will just cut at that point
     * and it will cut after that. If not setting is in the database the function will cut at the default value
     * @return string
     */

    function show_title($cut_at = '') {
    	echo '' . $this->get_title( $cut_at );
    }


    /**
     * This method is used by modules to get content that has to be excerpted (cut)
     * IT RETURNS THE EXCERPT FROM THE POST IF IT'S ENTERED IN THE EXCERPT CUSTOM POST FIELD BY THE USER
     * @param string $cut_at - if provided the method will just cat at that point
     * @return string
     */
    function get_excerpt($cut_at = '') {

        //If the user supplied the excerpt in the post excerpt custom field, we just return that
        if ($this->post->post_excerpt != '') {
            return $this->post->post_excerpt;
        }

        $buffy = '';
        if ($cut_at != '') {
            // simple, $cut_at and return
            $buffy .= td_util::excerpt($this->post->post_content, $cut_at);
        } else {
            $current_module_class = get_class($this);

            //see if we have a default setting for this module, and if so only apply it if we don't get other things form theme panel.
            if (td_api_module::_helper_check_excerpt_content($current_module_class)) {
                $db_content_excerpt = td_util::get_option($current_module_class . '_content_excerpt');
                if ($db_content_excerpt != '') {
                    //cut from the database settings
                    $buffy .= td_util::excerpt($this->post->post_content, $db_content_excerpt);
                } else {
                    //cut at the default size
                    $module_api = td_api_module::get_by_id($current_module_class);
                    $buffy .= td_util::excerpt($this->post->post_content, $module_api['excerpt_content']);
                }
            } else {
                /**
                 * no $cut_at provided and no setting in td_config -> return the full $this->post->post_content
                 * @see td_global::$modules_list
                 */
                $buffy .= $this->post->post_content;
            }
        }
        return $buffy;
    }


    function show_excerpt($cut_at = '') {
    	echo '<!-- excerpt -->' . $this->get_excerpt( $cut_at );
    }


    /**
     * This method is used by modules to get the audio embed based on
     * the featured audio field
     * @return mixed|string
     */
    function get_audio_embed() {

        $buffy = '';

        if( get_post_format( $this->post->ID ) == 'audio' ) {
            $td_post_audio = td_util::get_post_meta_array($this->post->ID, 'td_post_audio');

            if( isset( $td_post_audio['td_audio'] ) && $td_post_audio['td_audio'] != '' ) {
                $buffy .= td_audio_support::render_audio($td_post_audio['td_audio']);
            }
        }

        return $buffy;

    }


    /**
     * This method is used by modules to get the featured video duration
     * @return string
     */
    function get_video_duration() {

        $buffy = '';

        if( get_post_format( $this->post->ID ) == 'video' ) {
            $video_url = get_post_meta($this->post->ID, 'td_post_video');

            if( isset($video_url[0]['td_video']) && $video_url[0]['td_video'] != '' ) {
                if ( metadata_exists('post', $this->post->ID, 'td_post_video_duration') && get_post_meta( $this->post->ID, 'td_post_video_duration', true ) != '' ) {
                    $video_duration = get_post_meta( $this->post->ID, 'td_post_video_duration', true );
                } else {
                    $video_duration = td_video_support::get_video_duration($video_url[0]['td_video']);

                    if ( $video_duration != '' ) {
                        update_post_meta($this->post->ID, 'td_post_video_duration', $video_duration);
                    }
                }

                if( $video_duration != '' ) {
                    $buffy .= '<div class="td-post-vid-time">' . $video_duration . '</div>';
                }
            }
        }

        return $buffy;

    }



    function get_category() {

        $buffy = '';
	    $selected_category_obj = '';
	    $selected_category_obj_id = '';
	    $selected_category_obj_name = '';

	    $current_post_type = get_post_type($this->post->ID);
	    $builtin_post_types = get_post_types(array('_builtin' => true));

	    if (array_key_exists($current_post_type, $builtin_post_types)) {

		    // default post type

		    //read the post meta to get the custom primary category
		    $td_post_theme_settings = td_util::get_post_meta_array($this->post->ID, 'td_post_theme_settings');
		    if (!empty($td_post_theme_settings['td_primary_cat'])) {
			    //we have a custom category selected
			    $selected_category_obj = get_category($td_post_theme_settings['td_primary_cat']);
		    } else {

			    //get one auto
			    $categories = get_the_category($this->post->ID);

			    if (is_category()) {
				    foreach ($categories as $category) {
					    if ($category->term_id == get_query_var('cat')) {
						    $selected_category_obj = $category;
						    break;
					    }
				    }
			    }

			    if (empty($selected_category_obj) and !empty($categories[0])) {
				    if ($categories[0]->name === TD_FEATURED_CAT and !empty($categories[1])) {
					    $selected_category_obj = $categories[1];
				    } else {
					    $selected_category_obj = $categories[0];
				    }
			    }
		    }

		    if (!empty($selected_category_obj)) {
			    $selected_category_obj_id = $selected_category_obj->cat_ID;
			    $selected_category_obj_name = $selected_category_obj->name;
		    }

	    } else {

		    // custom post type
            $td_post_theme_settings = td_util::get_post_meta_array($this->post->ID, 'td_post_theme_settings');
            // get primary taxonomy term if is set
            if (!empty($td_post_theme_settings['td_primary_cat'])) {
                //we have a custom category selected
                $selected_tax_id = $td_post_theme_settings['td_primary_cat'];
                $selected_category_obj = get_term($selected_tax_id);
                $selected_category_obj_id = $selected_category_obj->term_id;
                $selected_category_obj_name = $selected_category_obj->name;
            } else {

                // Validate that the current queried term is a term
                global $wp_query;
                $current_queried_term = $wp_query->get_queried_object();

                if ($current_queried_term instanceof WP_Term) {
                    $current_term = term_exists($current_queried_term->name, $current_queried_term->taxonomy);

                    if ($current_term !== 0 && $current_term !== null) {
                        $selected_category_obj = $current_queried_term;
                    }
                } else { //get one auto

                    $td_taxonomy_terms = array();
                    $post_type = get_post_type($this->post);
                    $td_taxonomies = get_object_taxonomies($post_type);

                    foreach ( $td_taxonomies as $td_taxonomy ) {
                        if ( ! is_taxonomy_hierarchical( $td_taxonomy ) ) {
                            continue;
                        }

                        $terms = get_the_terms($this->post, $td_taxonomy);

                        // needs to be an array
                        if( is_array($terms) ) {

                            foreach ($terms as $term) {
                                $td_taxonomy_terms[] = $term;
                            }
                        }
                    }

                    if(current($td_taxonomy_terms) !== false) {
                        $selected_category_obj = current($td_taxonomy_terms);
                    }

                }

                // Get and validate the custom taxonomy according to the validated queried term
                if (!empty($selected_category_obj)) {

                    $taxonomy_objects = get_object_taxonomies($this->post, 'objects');
                    $custom_taxonomy_object = '';

                    foreach ($taxonomy_objects as $taxonomy_object) {

                        if ($taxonomy_object->_builtin !== 1 && $taxonomy_object->name === $selected_category_obj->taxonomy) {
                            $custom_taxonomy_object = $taxonomy_object;
                            break;
                        }
                    }

                    // Invalid taxonomy
                    if (empty($custom_taxonomy_object)) {
                        return $buffy;
                    }

                    $selected_category_obj_id = $selected_category_obj->term_id;
                    $selected_category_obj_name = $selected_category_obj->name;
                }
            }
	    }

	    if (!empty($selected_category_obj_id) && !empty($selected_category_obj_name)) { //!!!! catch error here
		    $buffy .= '<a href="' . get_category_link($selected_category_obj_id) . '" class="td-post-category">'  . $selected_category_obj_name . '</a>' ;
	    }

        //return print_r($post, true);
        return $buffy;
    }


    function show_category() {
        echo '<!-- category -->' . $this->get_category();
    }


    //get quotes on blocks
    function get_quotes_on_blocks() {

        // do not show the quote on WordPress loops
        if (td_global::$is_wordpress_loop === true or td_global::vc_get_column_number() != 1) {
            return '';
        }


        //get quotes data from database
        $post_data_from_db = td_util::get_post_meta_array($this->post->ID, 'td_post_theme_settings');

        if(!empty($post_data_from_db['td_quote_on_blocks'])) {
            return '<div class="td_quote_on_blocks">' . $post_data_from_db['td_quote_on_blocks'] . '</div>';
        }
    }


    function show_quotes_on_blocks() {
    	echo '<!-- quotes on blocks -->' . $this->get_quotes_on_blocks();
    }


    /**
     * Gets a shortcode att but only if the module received them
     * @param $att_name
     * @return mixed|string
     */
    function get_shortcode_att($att_name) {
        // returns '' if not set - for loops and other places where modules are not in blocks

        if (empty($this->module_atts)) {
            return '';
        }
        if (!isset($this->module_atts[$att_name])) {
            td_util::error(__FILE__, $att_name . ' - Is not mapped in the shortcode that uses this module ( <strong>' . get_class($this) . '</strong>)', $this->module_atts);
            die;
        }

        return $this->module_atts[$att_name];
    }
}
