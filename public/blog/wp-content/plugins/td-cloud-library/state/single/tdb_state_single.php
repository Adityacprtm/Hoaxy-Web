<?php


/**
 * Class tdb_state_single
 * @property tdb_method post_breadcrumbs
 * @property tdb_method post_categories
 * @property tdb_method post_title
 * @property tdb_method post_subtitle
 * @property tdb_method post_date
 * @property tdb_method post_modified
 * @property tdb_method post_author
 * @property tdb_method post_comments_count
 * @property tdb_method post_views
 * @property tdb_method post_socials
 * @property tdb_method post_featured_image
 * @property tdb_method post_bg_featured_image
 * @property tdb_method post_content
 * @property tdb_method post_author_box
 * @property tdb_method post_source
 * @property tdb_method post_via
 * @property tdb_method post_tags
 * @property tdb_method post_next_prev
 * @property tdb_method post_related
 * @property tdb_method post_comments
 * @property tdb_method post_smart_list
 * @property tdb_method post_review
 * @property tdb_method post_item_scope
 * @property tdb_method post_item_scope_meta
 * @property tdb_method menu
 *
 *
 *
 *
 *
 *
 */
class tdb_state_single extends tdb_state_base {

    private $post_theme_settings_meta = array ();
    private $post_video_meta = array ();
    private $post_audio_meta = array ();


    /**
     * we also load the post meta if we have a wp_query
     * @param WP_Query $wp_query
     */
    function set_wp_query($wp_query) {
        parent::set_wp_query($wp_query);
        $this->post_theme_settings_meta = get_post_meta( $this->get_wp_query()->post->ID, 'td_post_theme_settings', true );
        $this->post_video_meta = get_post_meta( $this->get_wp_query()->post->ID, 'td_post_video', true );
        $this->post_audio_meta = get_post_meta( $this->get_wp_query()->post->ID, 'td_post_audio', true );

    }



    public function __construct() {


        // post title
        $this->post_title = function () {

            $dummy_data_array = array(
                'title' => 'Sample Post Title!',
                'class' => 'tdb-single-title'
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_title_array = array(
                'title' => '',
                'class' => 'tdb-single-title'
            );

            $post_title = get_the_title( $this->get_wp_query()->post->ID );

            if ( !empty( $post_title ) ) {
                $post_title_array['title'] = $post_title;
            } else {
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $post_title_array;
        };


        // post sub title
        $this->post_subtitle = function () {

            $dummy_data_array = array(
                'post_subtitle' => 'Sample Post Subtitle!'
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_subtitle_array = array();

            $post_subtitle = self::read_post_theme_settings_meta('td_subtitle');

            $post_subtitle_array['post_subtitle'] = $post_subtitle;

            if ( empty( $post_subtitle ) ) {

                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }

            }

            return $post_subtitle_array;
        };


        // post featured image
        $this->post_featured_image = function ( $atts, $shortcode = '' ) {

            $no_thumb_placeholder = TDB_URL . '/assets/images/td_meta_replacement.png';
            $no_thumb_video_placeholder = TDB_URL . '/assets/images/video_placeholder.png';
            $no_thumb_audio_placeholder = TDB_URL . '/assets/images/audio_placeholder.png';

            $dummy_data_array = array(
                'featured_image_full_size_src' => array(),
                'featured_image_id' => '',
                'featured_image_info' => array (
                    'alt' => '',
                    'caption' => '',
                    'description' => '',
                    'href' => '',
                    'src' => $no_thumb_placeholder,
                    'title' => '',
                    'width' => '',
                    'height' => ''
                ),
                'srcset_sizes' => '',
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $featured_image_array = array(
                'featured_image_full_size_src' => array(),
                'featured_image_id' => '',
                'featured_image_info' => array (
                    'alt' => '',
                    'caption' => '',
                    'description' => '',
                    'href' => '',
                    'src' => '',
                    'title' => '',
                    'width' => '',
                    'height' => ''
                ),
                'srcset_sizes' => '',
            );

            $post = $this->get_wp_query()->post;
            $post_thumb_id = NULL;

            if ( has_post_thumbnail( $post->ID ) ) {
                $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                if ( !empty( $post_thumbnail_id ) ) {
                    $post_thumb_id = $post_thumbnail_id;
                }
            }

            $featured_image_array['post_format'] = get_post_format( $post->ID );

            //handle video post format
            if ( get_post_format( $post->ID ) == 'video' ) {

                //if it's a video post..
                $td_post_video = self::read_post_video_meta( 'td_video' );

                //render the video if the post has a video in the featured video section of the post
                if ( !empty( $td_post_video ) ) {
                    $featured_image_array['video'] = td_video_support::render_video( $td_post_video );

                    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
	                    $dummy_data_array['featured_image_info']['src'] = $no_thumb_video_placeholder;
                        return $dummy_data_array;
                    }
                }
            } else if ( get_post_format( $post->ID ) == 'audio' ) {

                //if it's an audio post..
                $td_post_audio = self::read_post_audio_meta( 'td_audio' );

                //render the audio if the post has a audio in the featured audio section of the post
                if ( !empty( $td_post_audio ) ) {
                    $featured_image_array['audio'] = td_audio_support::render_audio( $td_post_audio );
                } else {
                    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                        $dummy_data_array['featured_image_info']['src'] = $no_thumb_audio_placeholder;
                        return $dummy_data_array;
                    }
                }

            } else {

                //if it's a normal post, show the default thumb
                if ( !is_null( $post_thumb_id ) ) {

                    // set the default image size
                    if ( $atts['image_size'] == '' ) {
                        $atts['image_size'] = 'td_696x0';
                    }


                    //get the featured image id + full info about the 640px wide one
                    $featured_image_id   = get_post_thumbnail_id( $post->ID );
                    $featured_image_info = td_util::attachment_get_full_info( $featured_image_id, $atts['image_size'] );

                    //retina image
                    $srcset_sizes = td_util::get_srcset_sizes(
                        $featured_image_id,
                        $atts['image_size'],
                        $featured_image_info['width'],
                        $featured_image_info['src']
                    );

                    //get the full size for the popup
                    $featured_image_full_size_src = td_util::attachment_get_src( $featured_image_id, 'full' );

                    $featured_image_array['featured_image_full_size_src'] = $featured_image_full_size_src;
                    $featured_image_array['featured_image_id']            = $featured_image_id;
                    $featured_image_array['featured_image_info']          = $featured_image_info;
                    $featured_image_array['srcset_sizes']                 = $srcset_sizes;

                } else {
                    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                        return $dummy_data_array;
                    }
                }
            }

            return $featured_image_array;
        };


        // post background featured image
        $this->post_bg_featured_image = function ($tdb_image_size = 'full') {

            $dummy_data_array = array(
                'featured_image_src' =>  TDB_URL . '/assets/images/td_meta_replacement.png'
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $data_array = array(
                'featured_image_src' => ''
            );

            $post              = $this->get_wp_query()->post;
            $post_thumb_id     = NULL;

            if ( has_post_thumbnail( $post->ID ) ) {
                $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                if ( !empty( $post_thumbnail_id ) ) {
                    $post_thumb_id = $post_thumbnail_id;
                }
            }

            if ( !is_null( $post_thumb_id ) ) {
                $data_array['featured_image_src'] = wp_get_attachment_image_src( $post_thumb_id, $tdb_image_size )[0];
            } else {
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $data_array;

        };


        // post content
        $this->post_content = function ( $atts, $read_more_text = 'Continue' ) {

            $dummy_data_array = array(
                'post_content' => '
                    <p><img class="aligncenter wp-image-15996 size-full" src="' . TDB_URL . '/assets/images/post_content_center_img.png" alt="" width="1600" height="620" /></p>

<p>Morbi libero lectus, laoreet elementum viverra vitae, sodales sit amet nisi. Vivamus dolor ipsum, ultrices in accumsan nec, viverra in nulla.</p>

<img class="wp-image-16000 alignleft" src="' . TDB_URL . '/assets/images/post_content_left_img.png" alt="" width="280" height="280" /> <p>Donec ligula sem, dignissim quis purus a, ultricies lacinia lectus. Aenean scelerisque, justo ac varius viverra, nisl arcu accumsan elit, quis laoreet metus ipsum vitae sem. Phasellus luctus imperdiet.</p>

<h3>Donec tortor ipsum</h3> <p>Pharetra ac malesuada in, sagittis ac nibh. Praesent mattis ullamcorper metus, imperdiet convallis eros bibendum nec. Praesent justo quam, sodales eu dui vel, iaculis feugiat nunc.</p>

<p>Pellentesque faucibus orci at lorem viverra, id venenatis <a href="#">justo pretium</a>. Nullam congue, arcu a molestie bibendum, sem orci lacinia dolor, ut congue dolor justo a odio.</p>

<img class=" wp-image-16001 alignright" src="' . TDB_URL . '/assets/images/post_content_right_img.png" alt="" width="280" height="280" /> <p>Duis odio neque, congue ut iaculis nec, pretium vitae libero. Cras eros ipsum, eleifend rhoncus quam at, euismod sollicitudin erat.</p>

<blockquote class="td_quote td_quote_left"><p>Fusce imperdiet, neque ut sodales dignissim, nulla dui. Nam vel tortor orci.</p></blockquote>
                ',
                'post_pagination' => ''
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_content_array = array(
                'post_content' => '',
                'post_pagination' => ''
            );


            /*
             * top ad
             */
            $top_ad = '';
            if ( isset( $atts['ad_top'] ) and $atts['ad_top'] != '' ) {
                $top_ad = $atts['ad_top'];
                $top_ad = rawurldecode( base64_decode( strip_tags( $top_ad ) ) );
            }

            $top_ad_title = '';
            if ( isset( $atts['ad_top_title'] ) and $atts['ad_top_title'] != '' ) {
                $top_ad_title = $atts['ad_top_title'];
            }


            /*
             * inline ads
             */
            $inline_ads = array();
            for( $i = 0; $i < 3; $i++ ) {
                $curr_inline_ad_nr = '';
                if( $i != 0 ) {
                    $curr_inline_ad_nr = $i;
                }

                // ad content
                $inline_ads[$i]['content'] = '';
                if( $atts['ad_inline' . $curr_inline_ad_nr] and $atts['ad_inline' . $curr_inline_ad_nr]) {
                    $inline_ads[$i]['content'] = rawurldecode( base64_decode( strip_tags( $atts['ad_inline' . $curr_inline_ad_nr] ) ) );
                }

                // ad paragraph
                $inline_ads[$i]['paragraph'] = 0;
                if ( isset( $atts['ad_inline_paragraph' . $curr_inline_ad_nr] ) and $atts['ad_inline_paragraph' . $curr_inline_ad_nr] != '' ) {
                    $inline_ads[$i]['paragraph'] = intval($atts['ad_inline_paragraph' . $curr_inline_ad_nr]);
                }

                // ad align
                $inline_ads[$i]['align'] = 'content-horiz-center';
                if ( isset( $atts['ad_inline_align' . $curr_inline_ad_nr] ) and $atts['ad_inline_align' . $curr_inline_ad_nr] != '' ) {
                    $inline_ads[$i]['align'] = $atts['ad_inline_align' . $curr_inline_ad_nr];
                }

                // ad title
                $inline_ads[$i]['title'] = '';
                if ( isset( $atts['ad_inline_title' . $curr_inline_ad_nr] ) and $atts['ad_inline_title' . $curr_inline_ad_nr] != '' ) {
                    $inline_ads[$i]['title'] = $atts['ad_inline_title' . $curr_inline_ad_nr];
                }

                $inline_ads[$i]['show_at_bottom'] = true;
            }


            /*
             * bottom ad
             */
            $bottom_ad = '';
            if ( isset( $atts['ad_bottom'] ) and $atts['ad_bottom'] != '' ) {
                $bottom_ad = $atts['ad_bottom'];
                $bottom_ad = rawurldecode( base64_decode( strip_tags( $bottom_ad ) ) );
            }

            $bottom_ad_title = '';
            if ( isset( $atts['ad_bottom_title'] ) and $atts['ad_bottom_title'] != '' ) {
                $bottom_ad_title = $atts['ad_bottom_title'];
            }

	        $content = '';

            global $wp_query;
            $template_wp_query = $wp_query;
            $wp_query = $this->get_wp_query();

	        if ( have_posts() ) {

		        while ( have_posts() ) {
			        the_post();

			        // td composer removes wp's automatic paragraphs from post content so we need to add it again here to keep the post format
			        add_filter( 'the_content', 'wpautop' );

			        $content = get_the_content( $read_more_text );
			        $content = apply_filters( 'the_content', $content );
			        $content = str_replace( ']]>', ']]&gt;', $content );

			        // show the inline ad at the last paragraph ( replacing the bottom ad )
			        // whenever there are not as many paragraphs mentioned in After Paragraph field ..and the article bottom ad is not active
			        //$show_inline_ad_at_bottom = false;

			        $content_buffer = ''; // we replace the content with this buffer at the end
			        $content_parts  = preg_split('/(<blockquote.*\/blockquote>)/Us', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

			        $p_open_tag_count = 0; // count how many <p> tags we have added to the buffer

			        foreach ( $content_parts as $content_part_index => $content_part_value ) {
				        if ( !empty( $content_part_value ) ) {

					        //skip <blockquote> parts - look for <p> in the other parts
					        if ( preg_match('/(<blockquote.*>)/U', $content_part_value) !== 1 ) {
						        $section_parts = preg_split('/(<p.*>)/U', $content_part_value, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );

						        foreach ( $section_parts as $section_part_index => $section_part_value ) {
							        if ( !empty( $section_part_value ) ) {
								        // Show the ad ONLY IF THE CURRENT PART IS A <p> opening tag and before the <p> -> so we will have <p>content</p>  ~ad~ <p>content</p>
								        // and prevent cases like <p> ~ad~ content</p>
								        if ( preg_match('/(<p.*>)/U', $section_part_value ) === 1 ) {
								            foreach ( $inline_ads as $inline_ad => &$inline_ad_params ) {
                                                if ( $inline_ad_params['paragraph'] === $p_open_tag_count ) {
                                                    $inline_ad_params['show_at_bottom'] = false;
                                                    $content_buffer .= $this->build_post_content_ad_spot( $inline_ad_params['content'], 'inline_ad' . $inline_ad, $inline_ad_params['title'], $inline_ad_params['align'] );
                                                }
                                            }

									        $p_open_tag_count ++;
								        }
								        //add section to buffer
								        $content_buffer .= $section_part_value;
							        }
						        }

					        } else {
						        //add <blockquote> to buffer
						        $content_buffer .= $content_part_value;
					        }
				        }
			        }
			        $content = $content_buffer;

			        // add the top ad
			        $content_top_ad = $this->build_post_content_ad_spot( $top_ad, 'top_ad', $top_ad_title, '' );
			        $content = $content_top_ad . $content;

			        // add the bottom ad
			        $content_bottom_ad = $this->build_post_content_ad_spot( $bottom_ad, 'bottom_ad', $bottom_ad_title, '' );

			        if ( !empty( $content_bottom_ad ) ) {
				        $content = $content . $content_bottom_ad;
			        } else {
                        foreach ( $inline_ads as $inline_ad => $inline_ad_params ) {
                            if ( $inline_ad_params['show_at_bottom'] === true ) {
                                $content = $content . $this->build_post_content_ad_spot( $inline_ad_params['content'], 'inline_ad' . $inline_ad, $inline_ad_params['title'], $inline_ad_params['align'] );
                            }
                        }
			        }

			        $post_content_array['post_content'] = $content;
			        $post_content_array['post_pagination'] = wp_link_pages(
				        array(
					        'before'           => '<div class="page-nav page-nav-post td-pb-padding-side">',
					        'after'            => '</div>',
					        'link_before'      => '<div>',
					        'link_after'       => '</div>',
					        'echo'             => false,
					        'nextpagelink'     => '<i class="td-icon-menu-right"></i>',
					        'previouspagelink' => '<i class="td-icon-menu-left"></i>'
				        )
			        );

		        }

	        }

	        $wp_query = $template_wp_query;

            if( $content == '' ) {
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $post_content_array;
        };


        // post breadcrumbs
        $this->post_breadcrumbs = function ( $atts ) {

            $dummy_data_array = array();
            $show_article = ( $atts['show_article'] != '' ) ? true : false;
            $show_parent = ( $atts['show_parent_cat'] != '' ) ? true : false;

            $p_cat_custom_title = ( $atts['parent_cat_custom_title'] != '' ) ? $atts['parent_cat_custom_title'] : 'Parent Category';
            $p_cat_custom_title_att = ( $atts['parent_cat_custom_title_att'] != '' ) ? $atts['parent_cat_custom_title_att'] :  'parent category title';
            $p_cat_custom_title_link = ( $atts['parent_cat_custom_link'] != '' ) ? $atts['parent_cat_custom_link'] :  '#';

            $c_cat_custom_title = ( $atts['child_cat_custom_title'] != '' ) ? $atts['child_cat_custom_title'] : 'Primary/Child Category';
            $c_cat_custom_title_att = ( $atts['child_cat_custom_title_att'] != '' ) ? $atts['child_cat_custom_title_att'] :  'primary/child category title';
            $c_cat_custom_title_link = ( $atts['child_cat_custom_link'] != '' ) ? $atts['child_cat_custom_link'] :  '#';

            if ( $show_parent ) {
                $dummy_data_array[] = array(
                    'title_attribute' => $p_cat_custom_title_att,
                    'url' => $p_cat_custom_title_link,
                    'display_name' => $p_cat_custom_title
                );
            }

            $dummy_data_array[] = array(
                'title_attribute' => $c_cat_custom_title_att,
                'url' => $c_cat_custom_title_link,
                'display_name' => $c_cat_custom_title
            );

            if ( $show_article ) {
                $article_title_excerpt = $atts['title_excerpt'] != '' ? td_util::excerpt( 'Article Title ...', $atts['title_excerpt'] ) : 'Article Title ...';
                $dummy_data_array[] = array(
                    'title_attribute' => 'article title',
                    'url' => '#',
                    'display_name' => $article_title_excerpt
                );
            }

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post = $this->get_wp_query()->post;

            $category_1_name = '';
            $category_1_url = '';
            $category_2_name = '';
            $category_2_url = '';

            $primary_category_id = $this->get_primary_category_id();
            $primary_category_obj = get_category( $primary_category_id );

            if ( !empty( $primary_category_obj ) ) {
                if ( !empty( $primary_category_obj->name ) ) {
                    $category_1_name = $primary_category_obj->name;
                } else {
                    $category_1_name = '';
                }

                if ( !empty( $primary_category_obj->cat_ID ) ) {
                    $category_1_url = get_category_link( $primary_category_obj->cat_ID );
                }

                if ( !empty( $primary_category_obj->parent ) and $primary_category_obj->parent != 0 ) {
                    $parent_category_obj = get_category( $primary_category_obj->parent );
                    if ( !empty( $parent_category_obj ) ) {
                        $category_2_name = $parent_category_obj->name;
                        $category_2_url = get_category_link( $parent_category_obj->cat_ID );
                    }
                }
            }

            $breadcrumbs_array = array();
            $post_title = $post->post_title;

            if ( !empty( $category_1_name ) ) {

                //parent category (only if we have one and if is set to show it)
                if ( !empty( $category_2_name ) and $show_parent ) {

                    $parent_cat_custom_title = ( $atts['parent_cat_custom_title'] != '' ) ? $atts['parent_cat_custom_title'] : $category_2_name;
                    $parent_cat_custom_link = ( $atts['parent_cat_custom_link'] != '' ) ? $atts['parent_cat_custom_link'] : $category_2_url;
                    $parent_cat_custom_title_att = ( $atts['parent_cat_custom_title_att'] != '' ) ? $atts['parent_cat_custom_title_att'] : __td( 'View all posts in', TD_THEME_NAME ) . ' ' . htmlspecialchars( $parent_cat_custom_title );

                    $breadcrumbs_array [] = array (
                        'title_attribute' => $parent_cat_custom_title_att,
                        'url' => esc_url( $parent_cat_custom_link ),
                        'display_name' => $parent_cat_custom_title
                    );
                }

                $child_cat_custom_title = ( $atts['child_cat_custom_title'] != '' ) ? $atts['child_cat_custom_title'] : $category_1_name;
                $child_cat_custom_link = ( $atts['child_cat_custom_link'] != '' ) ? $atts['child_cat_custom_link'] : $category_1_url;
                $child_cat_custom_title_att = ( $atts['child_cat_custom_title_att'] != '' ) ? $atts['child_cat_custom_title_att'] : __td( 'View all posts in', TD_THEME_NAME ) . ' ' . htmlspecialchars( $child_cat_custom_title );

                //child category
                $breadcrumbs_array [] = array (
                    'title_attribute' => $child_cat_custom_title_att,
                    'url' => esc_url( $child_cat_custom_link ),
                    'display_name' => $child_cat_custom_title
                );
            }

            //article title (only if is set to show it)
            if ( $show_article ) {
                $breadcrumbs_article_title_excerpt =
                    $atts['title_excerpt'] != '' ? td_util::excerpt( $post_title, $atts['title_excerpt'] ) : td_util::excerpt( $post_title, 13 );

                $breadcrumbs_array [] = array (
                    'title_attribute' => $post_title,
                    'url' => '',
                    'display_name' => $breadcrumbs_article_title_excerpt
                );
            }

            return $breadcrumbs_array;
        };


        // post author box
        $this->post_author_box = function ( $atts ) {

            $photo_size = (  isset( $atts['photo_size'] ) and $atts['photo_size'] != '' ) ? $atts['photo_size'] : '96';

            if ( !$this->has_wp_query() ) {

                return array(
                    'author_url'    => 'post-author-website.com',
                    'author_avatar' =>  get_avatar( get_the_author_meta( 'email', 1 ), $photo_size ),
                    'author_name'   => 'Post author name',
                    'user_url'      => 'Post author url',
                    'description'   => 'Post author biographical information.',
                    'author_social_icons'    => array(
                        array(
                            'social_id' => 'twitter',
                            'social_link' => '#'
                        ),
                        array(
                            'social_id' => 'pinterest',
                            'social_link' => '#'
                        ),
                        array(
                            'social_id' => 'facebook',
                            'social_link' => '#'
                        ),
                        array(
                            'social_id' => 'youtube',
                            'social_link' => '#'
                        )
                    ),
                );
            }
            $author_id = $this->get_wp_query()->post->post_author;

            $post_author_box_data_array = array();

            $post_author_box_data_array['author_url']    = get_author_posts_url( $author_id );
            $post_author_box_data_array['author_avatar'] = get_avatar( get_the_author_meta( 'email', $author_id ), $photo_size );
            $post_author_box_data_array['author_name']   = get_the_author_meta( 'display_name', $author_id );
            $post_author_box_data_array['user_url']      = get_the_author_meta( 'user_url', $author_id );
            $post_author_box_data_array['description']   = get_the_author_meta( 'description', $author_id );

            $post_author_box_data_array['author_social_icons'] = array();

            foreach ( td_social_icons::$td_social_icons_array as $td_social_id => $td_social_name ) {
                $author_meta = get_user_meta( $author_id, $td_social_id, true );

                if ( !empty( $author_meta ) ) {

                    //the theme can use the twitter id instead of the full url. This avoids problems with yoast plugin
                    if ( $td_social_id == 'twitter' ) {
                        if( filter_var( $author_meta, FILTER_VALIDATE_URL ) ){

                        } else {
                            $author_meta = str_replace('@', '', $author_meta );
                            $author_meta = 'http://twitter.com/' . $author_meta;
                        }
                    }

                    if ( $td_social_id == 'mail-1' and strpos( $author_meta, '@' ) !== false and strpos(strtolower($author_meta), 'mailto:' ) === false ) {
                        $author_meta = 'mailto:' . $author_meta;
                    }

                    $post_author_box_data_array['author_social_icons'][] = array(
                        'social_id' => $td_social_id,
                        'social_link' => $author_meta
                    );
                }
            }

            return $post_author_box_data_array;

        };


        // post categories
        $this->post_categories = function ( $atts ) {
            if ( !$this->has_wp_query() ) {

                return array(
                    'Category I' => array(
                        'color'        => '#a444bd',
                        'link'         => '#',
                        'hide_on_post' => '',
                    ),
                    'Category II' => array(
                        'color'        => '#3fbcd5',
                        'link'         => '#',
                        'hide_on_post' => '',
                    ),
                    'Category III' => array(
                        'color'        => '#e33a77',
                        'link'         => '#',
                        'hide_on_post' => '',
                    ),
                );
            }

            $post = $this->get_wp_query()->post;
            $categories_array = array();

            $post_categories = get_the_category( $post->ID );

            if ( !empty( $post_categories ) ) {
                foreach ( $post_categories as $post_category ) {
                    //if ( $post_category->name != TD_FEATURED_CAT ) { //ignore the featured category name
                        //get the parent of this cat
                        $td_parent_cat_obj = get_category( $post_category->category_parent );

                        //if we have a parent and the default category display is disabled show it first
                        if (
                            ! empty( $td_parent_cat_obj->name )
                            and isset( $atts['cat_order'] )
                            and $atts['cat_order'] != 'alphabetically'
                        ) {
                            $category_meta__color_parent        = td_util::get_category_option( $td_parent_cat_obj->cat_ID, 'tdc_color' );
                            $category_meta__hide_on_post_parent = td_util::get_category_option( $td_parent_cat_obj->cat_ID, 'tdc_hide_on_post' );
                            $categories_array[ $td_parent_cat_obj->name ] = array(
                                'color'        => $category_meta__color_parent,
                                'link'         => get_category_link( $td_parent_cat_obj->cat_ID ),
                                'hide_on_post' => $category_meta__hide_on_post_parent
                            );
                        }

                        //show the category, only if we didn't already showed the parent
                        $category_meta__color        = td_util::get_category_option( $post_category->cat_ID, 'tdc_color' );
                        $category_meta__hide_on_post = td_util::get_category_option( $post_category->cat_ID, 'tdc_hide_on_post' );
                        $categories_array[ $post_category->name ]  = array(
                            'color'        => $category_meta__color,
                            'link'         => get_category_link( $post_category->cat_ID ),
                            'hide_on_post' => $category_meta__hide_on_post
                        );
                    //}
                }
            }

            return $categories_array;
        };


        // post date
        $this->post_date = function () {

            $current_time = current_time( 'timestamp' );

            if ( !$this->has_wp_query() ) {
                return array(
                    'date'            => date( DATE_W3C, time() ),
                    'time'            => date( get_option( 'date_format' ), time() ),
                    'human_time_diff' => human_time_diff( strtotime(date( DATE_W3C, strtotime("-1 week") ) ), $current_time ),
                );
            }

            $post_date_array = array();
            $post = $this->get_wp_query()->post;

//            $post_date_array['date'] = date( DATE_W3C, get_the_time( 'U', $post->ID ) );

            global $wp_version;
            //old WP
            if (version_compare($wp_version, '5.3', '<')) {
                $post_date_array['date'] = date(DATE_W3C, get_the_time('U', $post->ID));
            } else { //get_post_datetime() is used from WP 5.3
                $td_article_datetime = get_post_datetime( $post, 'date', 'gmt' );
                if ( $td_article_datetime !== false ) {
                    $post_date_array['date'] = $td_article_datetime->format(DATE_W3C);
                }
            }

            $post_date_array['time'] = get_the_time( get_option( 'date_format' ), $post->ID );

            $post_time_u  = get_the_time('U', $post->ID );
            $diff = (int) abs( $current_time - $post_time_u );

            $post_date_array['human_time_diff'] = '';

            if ( $diff < WEEK_IN_SECONDS ) {
                $post_date_array['human_time_diff'] = human_time_diff( $post_time_u, $current_time );
            }

            return $post_date_array;
        };


        // post modified date
        $this->post_modified = function ( $atts ) {

            $current_time = current_time( 'timestamp' );

            if ( !$this->has_wp_query() ) {
                return array(
                    'date'            => date( DATE_W3C, time() ),
                    'modified_date' => date( get_option( 'date_format' ), time() ),
                    'human_time_diff' => human_time_diff( strtotime(date( DATE_W3C, strtotime("-1 week") ) ), $current_time ),
                );
            }

            $post_modified_date_data = array();
            $post = $this->get_wp_query()->post;

//            $post_modified_date_data['date'] = date( DATE_W3C, get_the_time( 'U', $post->ID ) );

            global $wp_version;
            //old WP
            if (version_compare($wp_version, '5.3', '<')) {
                $post_modified_date_data['date'] = date( DATE_W3C, get_the_time( 'U', $post->ID ) );
            } else { //get_post_datetime() is used from WP 5.3
                $td_article_modified_datetime = get_post_datetime( $post, 'modified', 'gmt' );
                if ( $td_article_modified_datetime !== false ) {
                    $post_modified_date_data['date'] = $td_article_modified_datetime->format(DATE_W3C);
                }
            }

            $post_modified_date_data['modified_date'] = get_the_modified_date(get_option('date_format'), $post->ID);

            $post_time_u  = get_the_modified_date('U', $post->ID );

            $diff = (int) abs( $current_time - $post_time_u );

            $post_modified_date_data['human_time_diff'] = '';

            if ( $diff < WEEK_IN_SECONDS ) {
                $post_modified_date_data['human_time_diff'] = human_time_diff( $post_time_u, $current_time );
            } else {
                if ( isset( $atts['hide_date'] ) ) {
                    $post_modified_date_data['human_time_diff'] =  'hide';

                    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                        $post_modified_date_data['human_time_diff'] = $post_modified_date_data['modified_date'];
                    }
                }
            }

            return $post_modified_date_data;
        };


        // post author
        $this->post_author = function () {
            if ( !$this->has_wp_query() ) {

                return array(
                    'author_name'    => 'Author Name',
                    'author_url'     => '#',
                    'author_avatar'  => get_avatar( get_the_author_meta( 'email', 1 ), '96' ),
                );
            }

            $post_author_array = array();
            $post = $this->get_wp_query()->post;

            $post_author_array['author_name'] = get_the_author_meta( 'display_name', $post->post_author );
            $post_author_array['author_url']  = get_author_posts_url( $post->post_author );
            $post_author_array['author_avatar']  = get_avatar( get_the_author_meta( 'email', $post->post_author ), '96' );

            return $post_author_array;
        };


        // post comments count
        $this->post_comments_count = function () {
            if ( !$this->has_wp_query() ) {

                return array(
                    'comments_link'   => '#',
                    'comments_number' => '123',
                );
            }

            $post_comm_array = array();
            $post = $this->get_wp_query()->post;

            $post_comm_array['comments_link']    = get_comments_link( $post->ID );
            $post_comm_array['comments_number']  = get_comments_number( $post->ID );

            return $post_comm_array;
        };


        // post views
        $this->post_views = function () {
            if ( !$this->has_wp_query() ) {

                return array(
                    'post_id'             => '123',
                    'wp_post_views_nr'    => '1234',
                    'theme_post_views_nr' => '5678',
                );
            }

            $post_views_array = array();
            $post = $this->get_wp_query()->post;

            $post_views_array['post_id'] = $post->ID;

            // WP-Post Views Counter
            if ( function_exists('the_views') ) {
                $post_views_array['wp_post_views_nr'] = the_views( false );
            }
            // Default Theme Views Counter
            $post_views_array['theme_post_views_nr'] = td_page_views::get_page_views( $post->ID );

            return $post_views_array;
        };


        // post social sharing
        $this->post_socials = function ( $atts ) {
            if ( !$this->has_wp_query() ) {

                return array(
                    'post_permalink' => '#',
                    'is_amp'         => false,
                    'is_tdb_block'   => true,
                    'services'       => array(
                        'facebook',
                        'twitter',
                        'pinterest',
                        'whatsapp',
                        'linkedin',
                        'reddit',
                        'mail',
                        'print',
                        'tumblr',
                        'telegram',
                        'stumbleupon',
                        'vk',
                        'digg',
                        'line',
                        'viber',
                    ),
                    'share_text_show' => 'yes',
	                'style' => $atts['like_share_style']
                );
            }

            $post_socials_array = array();
            $post = $this->get_wp_query()->post;

	        $post_socials_array['is_tdb_block'] = true;
	        $post_socials_array['post_id'] = $post->ID;
            $post_socials_array['post_permalink'] = esc_url( get_permalink( $post->ID ) );
            $post_socials_array['is_amp']         = td_util::is_amp();

            $share_text_show = false;
            if ( $atts['like_share_text'] !== 'yes' ) {
                $share_text_show = true;
            }

            $enabled_services = td_api_social_sharing_styles::_helper_get_enabled_socials();

            if ( td_util::is_amp() ) {
                $post_socials_array['services']        = array_slice( $enabled_services, 0, 5);
                $post_socials_array['style']           = 'style1';
                $post_socials_array['share_text_show'] = false;
                $post_socials_array['el_class']        = '';
            } else {
                $post_socials_array['services']        = $enabled_services;
                $post_socials_array['style']           = $atts['like_share_style'];
                $post_socials_array['share_text_show'] = $share_text_show;
                $post_socials_array['el_class']        = '';
            }

            return $post_socials_array;
        };


        // post source
        $this->post_source = function () {

            $dummy_data_array = array(
                'source'     => 'Post Source',
                'source_url' => '#',
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_source_array = array();

            $post_source = $this->read_post_theme_settings_meta( 'td_source' );
            $post_source_url = $this->read_post_theme_settings_meta( 'td_source_url' );

            $post_source_array['source'] = $post_source;
            $post_source_array['source_url'] = '#';

            if ( empty( $post_source ) ) {

                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }

            } else {
                if ( !empty( $post_source_url ) ) {
                    $post_source_array['source_url'] = esc_url( $post_source_url );
                }
            }

            return $post_source_array;
        };


        // post via
        $this->post_via = function () {

            $dummy_data_array = array(
                'via'     => 'Google',
                'via_url' => '#',
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_via_array = array();

            $post_via = $this->read_post_theme_settings_meta( 'td_via' );
            $post_via_url = $this->read_post_theme_settings_meta( 'td_via_url' );

            $post_via_array['via'] = $post_via;
            $post_via_array['via_url'] = '#';

            if ( empty( $post_via ) ) {

                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }

            } else {
                if ( !empty( $post_via_url ) ) {
                    $post_via_array['via_url'] = esc_url( $post_via_url );
                }
            }

            return $post_via_array;
        };


        // post tags
        $this->post_tags = function () {

            $dummy_data_array = array(
                'art'       => array(
                    'url' => '#'
                ),
                'test'      => array(
                    'url' => '#'
                ),
                'wordpress' => array(
                    'url' => '#'
                ),
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_tags_array = array();
            $post = $this->get_wp_query()->post;

            $td_post_tags = wp_get_post_tags( $post->ID );

            if ( !empty( $td_post_tags ) ) {
                foreach ( $td_post_tags as $tag ) {
                    $post_tags_array[ $tag->name ] = array (
                        'url' => get_tag_link( $tag->term_id )
                    );
                }
            } else {
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $post_tags_array;
        };


        // post next/prev posts pagination
        $this->post_next_prev = function ( $atts ) {

            $dummy_data_array = array(
                'prev_post_url'   => '#',
                'prev_post_title' => 'Prev Post Title',
                'next_post_url'   => '#',
                'next_post_title' => 'Next Post Title',
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_next_prev_array = array();

            global $wp_query;
            $template_wp_query = $wp_query;
            $wp_query = $this->get_wp_query();

	        if ( have_posts() ) {

		        while ( have_posts() ) {
			        the_post();

                    $in_same_cat  = false;
                    if ( isset( $atts['same_cat_posts'] ) && $atts['same_cat_posts'] != '' ) {
                        $in_same_cat  = true;
                    }

			        $next_post = get_next_post( $in_same_cat );
			        $prev_post = get_previous_post( $in_same_cat );

			        $post_next_prev_array['prev_post_url']   = '';
			        $post_next_prev_array['prev_post_title'] = '';

			        $post_next_prev_array['next_post_url']   = '';
			        $post_next_prev_array['next_post_title'] = '';

			        if ( !empty( $next_post ) or !empty( $prev_post ) )  {
				        if ( !empty( $prev_post ) ) {
					        $post_next_prev_array['prev_post_url']   = esc_url( get_permalink( $prev_post->ID ) );
					        $post_next_prev_array['prev_post_title'] = get_the_title( $prev_post->ID );
				        }

				        if ( !empty( $next_post ) ) {
					        $post_next_prev_array['next_post_url']   = esc_url( get_permalink( $next_post->ID ) );
					        $post_next_prev_array['next_post_title'] = get_the_title( $next_post->ID );
				        }
			        } else {
				        if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
					        return $dummy_data_array;
				        }
			        }

		        }
	        }

            $wp_query = $template_wp_query;

            return $post_next_prev_array;
        };


        // post related posts
        $this->post_related = function ( $atts ) {

            $limit = 3;
            if ( isset( $atts['related_articles_posts_limit'] ) ) {
                $limit = $atts['related_articles_posts_limit'];
            }
            $offset = '';
            if ( isset( $atts['related_articles_posts_offset'] ) ) {
                $offset = $atts['related_articles_posts_offset'];
            }

            $dummy_data_array = array(
                'sample'                      => true,
                'sample_no_tags'              => false,
                'ajax_pagination'             => 'next_prev',
                'limit'                       => $limit,
                'offset'                      => 0,
                'live_filter'                 => '',
                'td_ajax_filter_type'         => '',
                'live_filter_cur_post_id'     => '',
                'live_filter_cur_post_author' => '',
            );

            for ( $i = 1; $i < $limit+1; $i++ ) {
                $dummy_data_array['sample_posts'][$i] = array(
                    'post_id' => '-' . $i, // negative post_id to avoid conflict with existent posts
                    'post_type' => 'sample',
                    'post_link' => '#',
                    'post_title' => 'Sample post title ' . $i,
                    'post_title_attribute' => esc_attr( 'Sample post title ' . $i ),
                    'post_excerpt' => 'Sample post no ' . $i .  ' excerpt.',
                    'post_content' => 'Sample post no ' . $i .  ' content.',
                    'post_date_unix' =>  get_the_time( 'U' ),
                    'post_date' => date( get_option( 'date_format' ), time() ),
                    'post_author_url' => '#',
                    'post_author_name' => 'Author name',
                    'post_author_email' => get_the_author_meta( 'email', 1 ),
                    'post_comments_no' => '11',
                    'post_comments_link' => '#',
                    'post_theme_settings' => array(
                        'td_primary_cat' => '1'
                    ),
                );
            }

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_related_articles_array = array();

            $post = $this->get_wp_query()->post;
            $post_related_articles_array['limit'] = $limit;
            $post_related_articles_array['offset'] = $offset;
            $post_related_articles_array['sample'] = false;

            if ( isset( $atts['related_articles_type'] ) and $atts['related_articles_type'] == 'by_tags' ) {
                $td_related_ajax_filter_type = 'cur_post_same_tags';
                $post_related_articles_array['current_post_tags'] = wp_get_post_tags($post->ID);
            } else {
                $td_related_ajax_filter_type = 'cur_post_same_categories';
            }

            if ( isset( $post_related_articles_array['current_post_tags'] ) and empty( $post_related_articles_array['current_post_tags'] ) ) {
                    $dummy_data_array['sample_no_tags'] = true;
                return $dummy_data_array;
            }

            $post_related_articles_array['live_filter'] = $td_related_ajax_filter_type;
            $post_related_articles_array['ajax_pagination'] = 'next_prev';
            $post_related_articles_array['td_ajax_filter_type'] = 'td_custom_related';
            $post_related_articles_array['live_filter_cur_post_id'] = $post->ID;
            $post_related_articles_array['live_filter_cur_post_author'] = $post->post_author;
            $post_related_articles_array['dummy_data_array'] = $dummy_data_array;


            return $post_related_articles_array;
        };


        // post comments
        $this->post_comments = function () {

            // create a fake WordPress post
            $post_id = -99; // negative ID, to avoid clash with a valid post

            $post = new stdClass();
            $post->ID = $post_id;
            $post->post_author = 1;
            $post->post_date = current_time( 'mysql' );
            $post->post_date_gmt = current_time( 'mysql', 1 );
            $post->post_title = 'Some title or other';
            $post->post_content = 'Whatever you want here. Maybe some cat pictures....';
            $post->post_status = 'publish';
            $post->comment_status = 'open';
            $post->ping_status = 'open';
            $post->post_name = 'fake-page-' . rand( 1, 99999 ); // append random number to avoid clash
            $post->post_type = 'post';
            $post->filter = 'raw'; // important

            // Convert to WP_Post object
            $wp_post = new WP_Post( $post );

            // Add the fake post to the cache
            wp_cache_add( $post_id, $wp_post, 'posts' );

            // Update globals
            global $wp;

            $GLOBALS['post'] = $wp_post;
            $wp->register_globals();

            $post_comments = array(
                new tdb_Sample_Comment((object)[
	                'comment_ID'      => '1',
	                'comment_post_ID' => $wp_post->ID,
	                'comment_author'  => 'sample comment author',
	                'comment_author_email' => '#',
	                'comment_author_url'   => '#',
	                'comment_author_IP'    => '',
	                'comment_date'         => date( get_option( 'date_format' ), time() ),
	                'comment_date_gmt'     => date( get_option( 'date_format' ), time() ),
	                'comment_content'      => 'Hi, this is a sample comment.',
	                'comment_karma'        => '0',
	                'comment_approved'     => '1',
	                'comment_agent'        => '',
	                'comment_type'         => '',
	                'comment_parent'       => '',
	                'user_id'              => '1',
	                'populated_children'   => true,
	                'post_fields'          => array(
		                'post_author',
		                'post_date',
		                'post_date_gmt',
		                'post_content',
		                'post_title',
		                'post_excerpt',
		                'post_status',
		                'comment_status',
		                'ping_status',
		                'post_name',
		                'to_ping',
		                'pinged',
		                'post_modified',
		                'post_modified_gmt',
		                'post_content_filtered',
		                'post_parent',
		                'guid',
		                'menu_order',
		                'post_type',
		                'post_mime_type',
		                'comment_count',
	                )
                ]),
                new tdb_Sample_Comment((object)[
	                'comment_ID'      => '2',
	                'comment_post_ID' => $wp_post->ID,
	                'comment_author'  => 'sample comment author 2',
	                'comment_author_email' => '#',
	                'comment_author_url'   => '#',
	                'comment_author_IP'    => '',
	                'comment_date'         => date( get_option( 'date_format' ), time() ),
	                'comment_date_gmt'     => date( get_option( 'date_format' ), time() ),
	                'comment_content'      => 'Hi, this is a sample comment. 2',
	                'comment_karma'        => '0',
	                'comment_approved'     => '1',
	                'comment_agent'        => '',
	                'comment_type'         => '',
	                'comment_parent'       => '1',
	                'user_id'              => '1',
	                'populated_children'   => true,
	                'post_fields'          => array(
		                'post_author',
		                'post_date',
		                'post_date_gmt',
		                'post_content',
		                'post_title',
		                'post_excerpt',
		                'post_status',
		                'comment_status',
		                'ping_status',
		                'post_name',
		                'to_ping',
		                'pinged',
		                'post_modified',
		                'post_modified_gmt',
		                'post_content_filtered',
		                'post_parent',
		                'guid',
		                'menu_order',
		                'post_type',
		                'post_mime_type',
		                'comment_count',
	                )
                ]),
            );

            $dummy_data_array = array(
                'post_comments_number' => count( $post_comments ),
                'post_comments'     => wp_list_comments(
	                array(
		                'callback' => array( $this, "tdb_comment" ),
		                'echo'     => false
	                ),
	                $post_comments
                ),
                'post_comments_reply_form' =>
                    '<div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">'. __td('LEAVE A REPLY', TD_THEME_NAME) . ' <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wp_011_video_pro/?p=35#respond" style="display:none;">Cancel reply</a></small></h3>
                        <form action="https://192.168.0.208/wp_011_video_pro/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                            <div class="clearfix"></div>
                            <div class="comment-form-input-wrap td-form-comment">
                                <textarea placeholder="Comment:" id="comment" name="comment" cols="45" rows="8" aria-required="true" style="border: 1px solid rgb(225, 225, 225);"></textarea>
                                <div class="td-warning-comment" style="">Please enter your comment!</div>
                            </div>
                            <div class="comment-form-input-wrap td-form-author">
                                <input class="" id="author" name="author" placeholder="Name:*" type="text" value="" size="30" aria-required="true">
                                <div class="td-warning-author">Please enter your name here</div>
                            </div>
                            <div class="comment-form-input-wrap td-form-email">
                                <input class="" id="email" name="email" placeholder="Email:*" type="text" value="" size="30" aria-required="true">
                                <div class="td-warning-email-error">You have entered an incorrect email address!</div>
                                <div class="td-warning-email">Please enter your email address here</div>
                            </div>
                            <div class="comment-form-input-wrap td-form-url">
                                <input class="" id="url" name="url" placeholder="Website:" type="text" value="" size="30">
                             </div>
                            <p class="comment-form-cookies-consent">
                                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                            </p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="35" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                        </form>
                    </div>'
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post = $this->get_wp_query()->post;
            $post_comments_number = $post->comment_count;

            $post_comments_array = array();

	        global $wp_query;
	        $template_wp_query = $wp_query;
	        $wp_query = $this->get_wp_query();

	        if ( have_posts() ) {

		        while ( have_posts() ) {
			        the_post();
			        ob_start();
			        add_filter( 'comments_template', array( $this, 'tdb_commnets_template' ));
			        comments_template( '', true );
			        remove_filter( 'comments_template', array( $this, 'tdb_commnets_template' ));
			        $post_comments_array['post_comments'] = ob_get_clean();
		        }
	        } else {
		        $post_comments_array['post_comments'] = 'we have no posts!';
            }

	        $wp_query = $template_wp_query;

            $post_comments_array['post_comments_number']   = $post_comments_number;

            if ( $post_comments_number == 0 ) {
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $post_comments_array;
        };


        // post smart_lists
        $this->post_smart_list = function ( $atts ) {

            $post_smart_list_array = array();

            /*
             * sm ad
             */
            $sm_ad_title = '';
            if ( isset( $atts['sm_ad_title'] ) and $atts['sm_ad_title'] != '' ) {
                $sm_ad_title = $atts['sm_ad_title'];
            }

            $sm_ad = '';
            if ( isset( $atts['sm_ad'] ) and $atts['sm_ad'] != '' ) {
                $sm_ad = $atts['sm_ad'];
                $sm_ad = rawurldecode( base64_decode( strip_tags( $sm_ad ) ) );
            }

            $atts['sm_ad'] = $this->build_post_content_ad_spot( $sm_ad, 'sm_ad', $sm_ad_title, '' );

            // prepare smart list settings
            $smart_list_type = 'tdb_smart_list_1';
            if ( isset( $atts['sm_type'] ) ) {
                $smart_list_type = $atts['sm_type'];
            }

            $smart_list_order = false;
            if ( isset( $atts['sm_order'] ) && $atts['sm_order'] == 'asc_1' ) {
                $smart_list_order = true;
            }

            $smart_list_h = 'h3';
            if ( isset( $atts['sm_h'] ) ) {
                $smart_list_h = $atts['sm_h'];
            }

            $smart_list_class = $smart_list_type;

            if ( !$this->has_wp_query() or ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) ) {

                // get sm attachments id
                $query = new WP_Query(
                    array(
                        'post_status' => 'any',
                        'post_type' => 'attachment',
                        'post_mime_type' => 'image/jpeg'
                    )
                );

                $id_1 = isset( $query->posts['5'] ) ? $query->posts['5']->ID : '';
                $id_2 = isset( $query->posts['6'] ) ? $query->posts['6']->ID : '';
                $id_3 = isset( $query->posts['3'] ) ? $query->posts['4']->ID : '';

                $post_content = '
                    <h3>Different Sweets</h3>
                        <figure id="attachment_1" class="wp-caption">
                            <a href="#" class="td-modal-image">
                                <img class="td-modal-image wp-image-' . $id_1 . '" src="#" alt="" width="" height="" />
                            </a>    
                        </figure>
                        <p>This is an incredibly beautiful record: the Lakes swims in woozy Americana, Repeating\'s celestially climatic caws are similar to fellow vessel of emotion Patrick Watson, and Cavalier\'s cries of \'I remember my first love\' produce a sensationally stirring moment.</p>
                    
                    <h3>Potatoes With Meat</h3>
                        <figure id="attachment_2" class="wp-caption">
                            <a href="#" class="td-modal-image">
                                <img class="wp-image-' . $id_2 . '" src="#" alt="" width="" height="" />
                            </a>
                        </figure>
                        <p>William Doyle offers up shimmering passages of systems-indebted music, like opener Glitter Recession these give way to stylishly observed club-facing workouts.</p>
                    
                    <h3>Perfect Sushi Selection</h3>
                        <figure id="attachment_2" class="wp-caption">
                            <a href="#" class="td-modal-image">
                                <img class="wp-image-' . $id_3 . '" src="#" alt="" width="" height="" />
                            </a>
                        </figure>
                        <p>The long, spaced-out fades of Under the Pressure and Disappearing provide dreamy interludes worthy of Tangerine Dream. The decaying guitars and analogue synthesisers create a crepuscular melancholy.</p>
                
                    [td_smart_list_end]
                
                    <p>Sample Content after smart list end..</p>
                ';

                $smart_list_obj = new $smart_list_class( $atts );
                $smart_list_settings = array(
                    'post_content'        => $post_content,
                    'counting_order_asc'  => $smart_list_order,
                    'td_smart_list_h'     => $smart_list_h,
                    'extract_first_image' => td_api_smart_list::get_key( $smart_list_type, 'extract_first_image' ),
                );

                $post_smart_list_array['smart_list_html'] = $smart_list_obj->render_from_post_content( $smart_list_settings );

                return $post_smart_list_array;
            }

            global $wp_query;
            $template_wp_query = $wp_query;
            $wp_query = $this->get_wp_query();

	        if ( have_posts() ) {

		        while ( have_posts() ) {
			        the_post();

			        // td composer removes wp's automatic paragraphs from post content so we need to add it again here to keep the post format
			        add_filter( 'the_content', 'wpautop' );
			        $content = get_the_content();
			        $content = apply_filters( 'the_content', $content );
			        $content = str_replace( ']]>', ']]&gt;', $content );

			        $smart_list_settings = array(
				        'post_content' => $content,
				        'counting_order_asc' => $smart_list_order,
				        'td_smart_list_h' => $smart_list_h,
				        'extract_first_image' => td_api_smart_list::get_key( $smart_list_type, 'extract_first_image' )
			        );

			        $smart_list_obj = new $smart_list_class( $atts );

			        $post_smart_list_array['smart_list_html'] = $smart_list_obj->render_from_post_content( $smart_list_settings );

		        }

	        } else {
		        $post_smart_list_array['smart_list_html'] = '';
	        }

            $wp_query = $template_wp_query;

            return $post_smart_list_array;

        };


        // post reviews
        $this->post_review = function () {
            $dummy_data_array = array(
                'review_meta'       => 'rate_stars',
                'review_description' => 'Sample post review description!',
                'review_meta_stars' => array(
                    array(
                        'desc' => 'Sample product review category',
                        'rate' => '4.5'
                    ),
                    array(
                        'desc' => 'Sample product review category',
                        'rate' => '4'
                    ),
                    array(
                        'desc' => 'Sample product review category',
                        'rate' => '3.5'
                    ),
                    array(
                        'desc' => 'Sample product review category',
                        'rate' => '1.5'
                    )
                ),
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $post_review_array = array();
            $post_review_array['review_meta'] = '';
            $post_review_array['review_meta_stars'] = '';
            $post_review_array['review_meta_percents'] = '';
            $post_review_array['review_meta_points'] = '';
            $post_review_array['review_description'] = '';

            if ( $this->post_has_review() ) {

                //get the review metadata
                $post_review_array['review_meta'] = $this->read_post_theme_settings_meta( 'has_review' );
                $post_review_array['review_description'] = $this->read_post_theme_settings_meta( 'review' );

                // if we don't have a review summary use the dummy data review description, just on composer's editor
                if ( empty( $post_review_array['review_description'] ) ) {

                    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                        $post_review_array['review_description'] = $dummy_data_array['review_description'];
                    }
                }

                $post_review_meta_stars    = $this->read_post_theme_settings_meta( 'p_review_stars' );
                $post_review_meta_percents = $this->read_post_theme_settings_meta( 'p_review_percents' );
                $post_review_meta_points   = $this->read_post_theme_settings_meta( 'p_review_points' );

                if ( !empty( $post_review_meta_stars ) ) {
                    $post_review_array['review_meta_stars'] = $post_review_meta_stars;
                }

                if ( !empty( $post_review_meta_percents ) ) {
                    $post_review_array['review_meta_percents'] = $post_review_meta_percents;
                }

                if ( !empty( $post_review_meta_points ) ) {
                    $post_review_array['review_meta_points'] = $post_review_meta_points;
                }

            } else {
                // show fake reviews
                if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
                    return $dummy_data_array;
                }
            }

            return $post_review_array;
        };


        // post item scope
        $this->post_item_scope = function () {

            if ( !$this->has_wp_query() ) {
                return '';
            }

            //show the review meta only on single posts that are reviews, the rest have to be article (in article lists)
            if ( $this->post_has_review() ) {
                return 'itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Review"';
            } elseif( td_util::get_option('tds_disable_article_schema') == '' ) {
                return 'itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Article"';
            } else {
                return '';
            }
        };


        // post item scope meta
        $this->post_item_scope_meta = function () {

            if ( is_preview() || !$this->has_wp_query() || ( td_util::get_option('tds_disable_article_schema') == 'yes' && !$this->post_has_review() ) ) {
                return '';
            }

            $post = $this->get_wp_query()->post;

            $post_author = get_the_author_meta( 'display_name', $post->post_author );
            $blog_name =  get_bloginfo( 'name' );

            // determine publisher name - use author name if there's no blog name
            $publisher_name = ( !empty( $blog_name ) ? $blog_name : $post_author );

            // determine publisher logo
            $publisher_logo = td_util::get_option( 'tds_logo_upload' );

            //added for text logo to fix structure data markup error
            if( $publisher_logo == ''){
                $publisher_logo = get_permalink($post->ID);
            }

            // post subtitle
            $post_subtitle = self::read_post_theme_settings_meta('td_subtitle' );

            $post_thumb_id = NULL;

            if ( has_post_thumbnail( $post->ID ) ) {
                $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                if ( !empty( $post_thumbnail_id ) ) {
                    $post_thumb_id = $post_thumbnail_id;
                }
            }

            // don't display meta on pages
            if ( ! $this->get_wp_query()->is_single() ) {
                return '';
            }

            $buffy = '';

            // author
            $buffy .= '<span class="td-page-meta" itemprop="author" itemscope itemtype="https://schema.org/Person">' ;
            $buffy .= '<meta itemprop="name" content="' . esc_attr( $post_author ) . '">' ;
            $buffy .= '</span>' ;

            global $wp_version;

            if (version_compare($wp_version, '5.3', '<')) {

                // datePublished
                $td_article_date_unix = get_the_time( 'U', $post->ID );
                $buffy .= '<meta itemprop="datePublished" content="' . date(DATE_W3C, $td_article_date_unix ) . '">';

                // dateModified - local time
                $td_article_modified_date_unix = get_the_modified_date('U', $post->ID);
                $buffy .= '<meta itemprop="dateModified" content="' . date(DATE_W3C, $td_article_modified_date_unix) . '">';

            } else { //get_post_datetime() is used from WP 5.3

                // datePublished
                $td_article_datetime = get_post_datetime($post, 'date', 'gmt');
                if ( $td_article_datetime !== false ) {
                    $buffy .= '<meta itemprop="datePublished" content="' . $td_article_datetime->format(DATE_W3C) . '">';
                }
                // dateModified - local time
                $td_article_modified_datetime = get_post_datetime($post, 'modified', 'gmt');
                if ( $td_article_modified_datetime !== false ) {
                    $buffy .= '<meta itemprop="dateModified" content="' . $td_article_modified_datetime->format(DATE_W3C) . '">';
                }
            }
            // mainEntityOfPage
            $buffy .= '<meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="' . get_permalink( $post->ID ) .'"/>';

            // publisher
            $buffy .= '<span class="td-page-meta" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">';
            $buffy .= '<span class="td-page-meta" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">';
            $buffy .= '<meta itemprop="url" content="' . $publisher_logo . '">';
            $buffy .= '</span>';
            $buffy .= '<meta itemprop="name" content="' . $publisher_name . '">';
            $buffy .= '</span>';

            // headline
            if ( !empty( $post_subtitle ) ) {
                $buffy .= '<meta itemprop="headline" content="' . esc_attr( $post_subtitle ) . '">';
            } else {
                $buffy .= '<meta itemprop="headline" content="' . esc_attr( $post->post_title ) . '">';
            }

            // featured image
            $featured_image = array();

            if ( !is_null( $post_thumb_id ) ) {
                /**
                 * from google documentation:
                 *  A URL, or list of URLs pointing to the representative image file(s).
                 *  Images must be at least 160x90 pixels and at most 1920x1080 pixels.
                 *  We recommend images in .jpg, .png, or. gif formats.
                 *  https://developers.google.com/structured-data/rich-snippets/articles
                 */
                $featured_image = wp_get_attachment_image_src( $post_thumb_id, 'full');

            } else {
                // when the post has no image use the placeholder
                $featured_image[0] = TDB_URL . '/assets/images/td_meta_replacement.png';
                $featured_image[1] = '1068';
                $featured_image[2] = '580';
            }

            // ImageObject meta
            if ( !empty( $featured_image[0] ) ) {
                $buffy .= '<span class="td-page-meta" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">';
                $buffy .= '<meta itemprop="url" content="' . $featured_image[0] . '">';
                $buffy .= '<meta itemprop="width" content="' . $featured_image[1] . '">';
                $buffy .= '<meta itemprop="height" content="' . $featured_image[2] . '">';
                $buffy .= '</span>';
            }

            // if we have a review, we must add additional stuff
            if ( $this->post_has_review() ) {

                // take rating count for aggregateRating meta
                $td_review = get_post_meta( $this->get_wp_query()->post->ID, 'td_post_theme_settings', true );
                if (!empty($td_review['has_review'])) {
                    switch ($td_review['has_review']) {
                        case 'rate_stars' :

                            $rating_count = count($td_review["p_review_stars"]);
                            break;
                        case 'rate_percent':
                            $rating_count = count($td_review["p_review_percents"]);
                            break;
                        case 'rate_point' :
                            $rating_count = count($td_review["p_review_points"]);
                            break;
                    }
                }

                // the item that is reviewed
                $buffy .= '<span class="td-page-meta" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Product">';
                $buffy .= '<meta itemprop="name" content="' . esc_attr( strip_tags( $post->post_title ) ) . '">';
                
                $buffy .= '<span class="td-page-meta" itemprop="brand" itemscope itemtype="https://schema.org/Organization">';
                $buffy .= '<meta itemprop="name " content = "' . $publisher_name . '">';
                $buffy .= '</span>';
                
                $read_post_theme_settings_meta = $this->read_post_theme_settings_meta( 'review' );
                if ( !empty( $read_post_theme_settings_meta ) ) {
                    $buffy .= '<meta itemprop="description" content="' . esc_attr( $read_post_theme_settings_meta ) . '">';
                } else {
                    //we have no review text :| get a excerpt for the about meta thing
                    if ( $post->post_excerpt != '' ) {
                        $post_excerpt = $post->post_excerpt;
                    } else {
                        $post_excerpt = td_util::excerpt( $post->post_content, 45);
                    }
                    $buffy .= '<meta itemprop="description" content="' . esc_attr( $post_excerpt ) . '">';
                }

                if ( !empty( $featured_image[0] ) ) {
                    $buffy .= '<meta itemprop="image " content = "' . $featured_image[0] . '">';
                }

                $buffy .= '<meta itemprop="sku " content = "' . $post->post_name . '">';
                $buffy .= '<meta itemprop="mpn " content = "' . $post->ID . '">';

                    $buffy .= '<span itemprop="aggregateRating" itemscope itemtype="https://schema.org/aggregateRating">';
                    $buffy .= '<meta itemprop="ratingValue" content = "' . $this->post_review_total_stars() . '">';
                    $buffy .= '<meta itemprop="ratingCount" content = "' . $rating_count  . '">';
                    $buffy .= '</span>';
                $buffy .= '</span>';

//                $read_post_theme_settings_meta = $this->read_post_theme_settings_meta( 'review' );
//                if ( !empty( $read_post_theme_settings_meta ) ) {
//                    $buffy .= '<meta itemprop="reviewBody" content="' . esc_attr( $read_post_theme_settings_meta ) . '">';
//                } else {
//                    //we have no review text :| get a excerpt for the about meta thing
//                    if ( $post->post_excerpt != '' ) {
//                        $post_excerpt = $post->post_excerpt;
//                    } else {
//                        $post_excerpt = td_util::excerpt( $post->post_content, 45);
//                    }
//                    $buffy .= '<meta itemprop="reviewBody" content="' . esc_attr( $post_excerpt ) . '">';
//                }

                // review rating
                $buffy .= '<span class="td-page-meta" itemprop="reviewRating" itemscope itemtype="' . td_global::$http_or_https . '://schema.org/Rating">';
                $buffy .= '<meta itemprop="worstRating" content = "1">';
                $buffy .= '<meta itemprop="bestRating" content = "5">';
                $buffy .= '<meta itemprop="ratingValue" content="' . $this->post_review_total_stars() . '">';
                $buffy .= ' </span>';
            }

            return $buffy;

        };


        // menu
        $this->menu = function ( $atts ) {

            // if we don't have a menu get the theme header menu
            $menu_id = ( isset( $atts['menu_id'] ) and $atts['menu_id'] != '' ) ? $atts['menu_id'] : ( ! empty(get_theme_mod('nav_menu_locations')['header-menu'] ) ? get_theme_mod('nav_menu_locations')['header-menu'] : '' );

            if ( !$this->has_wp_query() ) {
                $tdb_menu_instance = tdb_menu::get_instance( $atts );
                add_filter( 'wp_nav_menu_objects', array ( $tdb_menu_instance, 'hook_wp_nav_menu_objects' ), 10, 2 );
                $wp_nav_menu = wp_nav_menu(
                    array(
                        'menu' => $menu_id,
                        'menu_id' => '',
                        'container' => false,
                        'menu_class'=> 'tdb-block-menu tdb-menu tdb-menu-items-visible',
                        'walker' => new tdb_tagdiv_walker_nav_menu($atts),
                        'echo' => false,
                        'fallback_cb' => function(){
                            return 'No menu items!';
                        }
                    )
                );
                remove_filter( 'wp_nav_menu_objects', array ( $tdb_menu_instance, 'hook_wp_nav_menu_objects' ) );
                return $wp_nav_menu;
            }

            global $wp_query;
            $template_wp_query = $wp_query;
            $wp_query = $this->get_wp_query();

            $tdb_menu_instance = tdb_menu::get_instance( $atts );
            add_filter( 'wp_nav_menu_objects', array ( $tdb_menu_instance, 'hook_wp_nav_menu_objects' ), 10, 2 );
            $wp_nav_menu = wp_nav_menu(
                array(
                    'menu' => $menu_id,
                    'menu_id' => '',
                    'container' => false,
                    'menu_class'=> 'tdb-block-menu tdb-menu tdb-menu-items-visible',
                    'walker' => new tdb_tagdiv_walker_nav_menu($atts),
                    'echo' => false,
                    'fallback_cb' => function(){
                        return 'No menu items!';
                    }
                )
            );
            remove_filter( 'wp_nav_menu_objects', array ( $tdb_menu_instance, 'hook_wp_nav_menu_objects' ) );

            $wp_query = $template_wp_query;

            return $wp_nav_menu;
        };

        parent::lock_state_definition();
    }

    /**
     * Helper - read post theme settings meta
     * @param string $key
     * @param string $default the default value if we don't have one
     * @return mixed|string
     */
    private function read_post_theme_settings_meta($key, $default = '') {
        if ( !empty( $this->post_theme_settings_meta[$key] ) ) {
            return $this->post_theme_settings_meta[$key];
        }

        return $default;
    }

    /**
     * Helper - read all post theme meta
     *
     * @return array
     */
    private function post_theme_settings() {
            return $this->post_theme_settings_meta;
    }

    /**
     * Helper - read post video meta
     * @param string $key
     * @param string $default the default value if we don't have one
     * @return mixed|string
     */
    private function read_post_video_meta( $key, $default = '' ) {
        if ( !empty( $this->post_video_meta[$key] ) ) {
            return $this->post_video_meta[$key];
        }

        return $default;
    }

    /**
     * Helper - read post audio meta
     * @param string $key
     * @param string $default the default value if we don't have one
     * @return mixed|string
     */
    private function read_post_audio_meta( $key, $default = '' ) {
        if ( !empty( $this->post_audio_meta[$key] ) ) {
            return $this->post_audio_meta[$key];
        }

        return $default;
    }

    /**
     * Helper - build post content ad spot
     *
     * @param $ad_spot_ad_code - the ad spot ad code
     * @param $ad_spot_id
     * @param $ad_spot_title
     * @param $ad_spot_align
     * @return string
     */
    private function build_post_content_ad_spot( $ad_spot_ad_code, $ad_spot_id, $ad_spot_title, $ad_spot_align ) {

        if ( empty( $ad_spot_ad_code ) ) {
            return '';
        }

        //ad spot title
        $spot_title = '';
        if( !empty( $ad_spot_title ) ) {
            $spot_title = $ad_spot_title;
        }

        $buffy = '';

        if ( td_util::tdc_is_live_editor_iframe() || td_util::tdc_is_live_editor_ajax() ) {
            $buffy .= '<div class="td-a-ad tdc-a-ad td-spot-id-' . $ad_spot_id . ' ' . ( !empty( $ad_spot_align ) ? 'id_ad_' . $ad_spot_align : '') .  '"><span class="td-adspot-title">' . $spot_title . '</span><div class="tdc-placeholder-title"></div></div>';
        } else {
            $buffy .= '<div class="td-a-ad id_' . $ad_spot_id . ' ' . ( !empty( $ad_spot_align ) ? 'id_ad_' . $ad_spot_align : '') .  '">';
            $buffy .= '<span class="td-adspot-title">' . $spot_title . '</span>';
            $buffy .= do_shortcode( stripslashes( $ad_spot_ad_code ) );
            $buffy .= '</div>';
        }

        return $buffy;
    }

    /**
     * Helper - checks if a post has reviews
     *
     * @return bool
     */
    private function post_has_review() {

        //get the review metadata
        $post_review_meta          = $this->read_post_theme_settings_meta( 'has_review' );
        $post_review_meta_stars    = $this->read_post_theme_settings_meta( 'p_review_stars' );
        $post_review_meta_percents = $this->read_post_theme_settings_meta( 'p_review_percents' );
        $post_review_meta_points   = $this->read_post_theme_settings_meta( 'p_review_points' );

        if ( !empty( $post_review_meta ) and (
                !empty( $post_review_meta_stars ) or
                !empty( $post_review_meta_percents ) or
                !empty( $post_review_meta_points )
            )
        ) {
            return true;
        }

        return false;
    }

    /**
     * Helper - converts the rating to 0-5 to be used with stars
     * @return float|string
     */
    private function post_review_total_stars() {

        //get the review metadata
        $post_review_meta = $this->read_post_theme_settings_meta( 'has_review' );

        switch ( $post_review_meta ) {
            case 'rate_stars' :
                return round( $this->post_review_calculate_total( $post_review_meta ), 1);
                break;
            case 'rate_percent':
                return round( $this->post_review_calculate_total( $post_review_meta ) / 10 / 2, 1);
                break;
            case 'rate_point' :
                return round( $this->post_review_calculate_total( $post_review_meta ) / 2, 1);
                break;
        }

        return '';
    }

    /**
     * Helper - converts the rating to 0-5 to be used with stars
     * @param $review_type - the review type
     * @return float|int
     */
    function post_review_calculate_total( $review_type ) {

        $post_review_meta_stars    = $this->read_post_theme_settings_meta( 'p_review_stars' );
        $post_review_meta_percents = $this->read_post_theme_settings_meta( 'p_review_percents' );
        $post_review_meta_points   = $this->read_post_theme_settings_meta( 'p_review_points' );

        $total = 0;
        $cnt = 0;

        switch ( $review_type ) {
            case 'rate_stars' :
                if ( !empty( $post_review_meta_stars ) ) {
                    foreach ( $post_review_meta_stars as $section) {
                        if ( !empty( $section['desc'] ) and !empty( $section['rate'] ) ) {
                            $total = $total + $section['rate'];
                            $cnt++;
                        }
                    }
                }
                break;

            case 'rate_percent' :
                if ( !empty( $post_review_meta_percents ) ) {
                    foreach ( $post_review_meta_percents as $section ) {
                        if ( !empty( $section['desc'] ) and !empty( $section['rate'] ) ) {
                            $total = $total + $section['rate'];
                            $cnt++;
                        }
                    }
                }
                break;

            case 'rate_point' :
                if ( !empty( $post_review_meta_points ) ) {
                    foreach ( $post_review_meta_points as $section ) {
                        if ( !empty( $section['desc'] ) and !empty( $section['rate'] ) ) {
                            $total = $total + $section['rate'];
                            $cnt++;
                        }
                    }
                }
                break;
        }

        if ( $total == 0 ) {
            $result = 0;
        } else {
            $result = round( $total / $cnt, 1 );
        }

        return $result;
    }

    /**
     * Helper - gets the post primary category id
     *
     * @return string
     */
    private function get_primary_category_id() {

        $primary_category = $this->read_post_theme_settings_meta( 'td_primary_cat' );

        if ( !empty( $primary_category ) ) {
            return $primary_category;
        }

        $categories = get_the_category( $this->get_wp_query()->post->ID );
        foreach( $categories as $category ) {
            if ( $category->name != TD_FEATURED_CAT ) { //ignore the featured category
                $primary_category = $category->cat_ID;
                break;
            }
        }

        return $primary_category;
    }

	/**
     * Helper - this function loads the tdb-comments.php comments template
	 * @param $template
	 *
	 * @return string
	 */
    function tdb_commnets_template($template){
	    return TDB_TEMPLATE_BUILDER_DIR . '/parts/tdb-comments.php';
    }

	/**
	 * Callback for outputting comments
	 *
	 * @return void
	 * @author tagdiv
	 */
	function tdb_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;

		$td_isPingTrackbackClass = '';

		if($comment->comment_type == 'pingback') {
			$td_isPingTrackbackClass = 'pingback';
		}

		if($comment->comment_type == 'trackback') {
			$td_isPingTrackbackClass = 'trackback';
		}

		if (!empty($comment->comment_author_email)) {
			$td_comment_auth_email = $comment->comment_author_email;
		} else {
			$td_comment_auth_email = '';
		}

		$td_article_date_unix = @strtotime("{$comment->comment_date_gmt} GMT");
		//print_r($td_article_date_unix);


		?>
		<li class="comment <?php echo $td_isPingTrackbackClass ?>" id="comment-<?php comment_ID() ?>">
		<article>
			<footer>
				<?php
				//echo get_template_directory_uri() . "/images/avatar.jpg";
				//echo get_avatar($td_comment_auth_email, 50, get_template_directory_uri() . "/images/avatar.jpg");
				echo get_avatar($td_comment_auth_email, 50);
				?>
				<cite><?php comment_author_link() ?></cite>

				<a class="comment-link" href="#comment-<?php comment_ID() ?>">
                    <?php comment_date() ?>
                    <?php echo __td('At', TD_THEME_NAME); ?>
                    <?php comment_time() ?></time>
				</a>
			</footer>

			<div class="comment-content">
				<?php if ($comment->comment_approved == '0') { ?>
					<em><?php echo __td('Your comment is awaiting moderation', TD_THEME_NAME); ?></em>
				<?php }
				comment_text(); ?>
			</div>

			<div class="comment-meta" id="comment-<?php comment_ID() ?>">
				<?php comment_reply_link(array_merge( $args, array(
					'depth' => $depth,
					'max_depth' => $args['max_depth'],
					'reply_text' => __td('Reply', TD_THEME_NAME),
					'login_text' =>  __td('Log in to leave a comment', TD_THEME_NAME)
				)))
				?>
			</div>
		</article>

		<?php

	}
}

class tdb_Sample_Comment {
	public $comment_ID;
	public $comment_post_ID = 0;
	public $comment_author = '';
	public $comment_author_email = '';
	public $comment_author_url = '';
	public $comment_author_IP = '';
	public $comment_date = '0000-00-00 00:00:00';
	public $comment_date_gmt = '0000-00-00 00:00:00';
	public $comment_content;
	public $comment_karma = 0;
	public $comment_approved = '1';
	public $comment_agent = '';
	public $comment_type = '';
	public $comment_parent = 0;
	public $user_id = 0;
	protected $children;
	protected $populated_children = false;
	protected $post_fields = array( 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count' );

	public function __construct( $tdb_comment ) {
		foreach ( get_object_vars( $tdb_comment ) as $key => $value ) {
			$this->$key = $value;
		}
	}

	public function get_children(){
		return array();
	}
};