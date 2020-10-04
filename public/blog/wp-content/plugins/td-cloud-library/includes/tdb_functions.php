<?php


/**
 * globals to hold the state for all pages
 */
global $tdb_state_single_page, $tdb_state_single, $tdb_state_category, $tdb_state_author, $tdb_state_search, $tdb_state_date, $tdb_state_tag, $tdb_state_attachment, $tdb_state_dark_mode;

// load the config
require_once "tdb_util.php";
require_once "tdb_config.php";
add_action('tdc_loaded', array('tdb_config', 'on_tdc_loaded'), 10); //the theme runs on 9 priority... so we can change stuff if we want


require_once "tdb_state_base.php";
require_once "tdb_state_template.php";
require_once "tdb_state_content.php";
require_once "tdb_state.php"; // state for the cloud template plugin, used on single post templates > autoload(inf) posts feature.
require_once "tdb_global_wp_query.php";


require_once "tdb_module.php";
require_once "tdb_ajax.php";
require_once "tdb_cpt.php"; // load the cpt things
require_once "tdb_menu.php"; // load the td menu shortcode support

// make the page state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/page/tdb_state_single_page.php";
$tdb_state_single_page = new tdb_state_single_page();

// make the single post state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/single/tdb_state_single.php";
$tdb_state_single = new tdb_state_single(); // the state already comes with default data

// the category state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/category/tdb_state_category.php";
$tdb_state_category = new tdb_state_category(); // the state already comes with default data

// the author state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/author/tdb_state_author.php";
$tdb_state_author = new tdb_state_author(); // the state already comes with default data

// the search state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/search/tdb_state_search.php";
$tdb_state_search = new tdb_state_search(); // the state already comes with default data

// the date state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/date/tdb_state_date.php";
$tdb_state_date = new tdb_state_date(); // the state already comes with default data

// the tag state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/tag/tdb_state_tag.php";
$tdb_state_tag = new tdb_state_tag(); // the state already comes with default data

// the attachment state
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/attachment/tdb_state_attachment.php";
$tdb_state_attachment = new tdb_state_attachment(); // the state already comes with default data

// theme panel vue endpoint
require_once  TDB_TEMPLATE_BUILDER_DIR . "/includes/panel/tdb_panel_vue.php";

/**
 * Load the single state for now
 * - template_include runs after template_redirect!
 */
require_once  TDB_TEMPLATE_BUILDER_DIR . "/state/tdb_state_loader.php";
add_action('template_redirect', array('tdb_state_loader', 'on_template_redirect_load_state')); // we use this for front end. (we need the global wp_query)
add_action('tdc_loaded', array('tdb_state_loader', 'on_tdc_loaded_load_state')); // we use this for ajax and composer iframe. (we don't have the global wp_query while editing)

/**
 * Set the tdb_state
 */
$tdb_action = tdb_util::get_get_val( 'tdb_action' );
if ( false === $tdb_action ) {
    tdb_state::set_is_ajax( false );
} else {
    tdb_state::set_is_ajax( true );
}

/**
 * Modify the main query for wp templates pages
 * - we need to do this to set the shortcode posts limit and get the right pagination
 * - we need this on 'tdc_loaded' beacuse we need to use the is_live_editor_ajax/is_live_editor_iframe methods to check for composer's iframe and ajax rendering blocks @see tdc_state
 * - on tdc_init hook where this functions file is loaded we're to early to use this methods
 */
add_action('tdc_loaded', function() {

	/**
	 * DISQUS plugin compatibility
	 * this prevents disqus from loading on composer iframe/ajax requests and on autoloaded posts or if posts autoload feature is enabled
	 */
	if ( tdc_state::is_live_editor_iframe() ||
         tdc_state::is_live_editor_ajax() ||
         tdb_state::is_ajax()
    ) {
		add_filter( 'dsq_can_load', '__return_false' );
	}

	/**
     * DISQUS plugin compatibility
	 * this hook determines if a cloud single post template uses the 'tdb_single_comments' shortcode
     * ..and prevents disqus from trying to load if it doesn't use the 'tdb_single_comments' comments
	 */
	add_action( 'pre_get_posts', function( $query ) {

		if ( is_admin() ||
             ! $query->is_main_query() ||
             tdc_state::is_live_editor_ajax() ||
             tdc_state::is_live_editor_iframe() ||
             td_util::is_mobile_theme()
		)
			return;

		if ( is_single() ) {
		    //print_r($query);

			if ( isset( $query->query['post_type'] ) && $query->query['post_type'] !== 'post' ) {
			    return;
            }

			if ( isset( $query->query['name'] ) ) {
				$post_obj = get_page_by_path( $query->query['name'], OBJECT, 'post' );
			}

			$post_id = '';
			if ( !empty( $post_obj ) ) {
				$post_id = $post_obj->ID;
			}

			// check if we have a specific template set on the current post
			$td_post_theme_settings = td_util::get_post_meta_array( $post_id, 'td_post_theme_settings' );

			$tdb_template_id = '';

			if ( !empty( $td_post_theme_settings['td_post_template'] ) ) {
				$single_template_id = $td_post_theme_settings['td_post_template'];

				if ( td_global::is_tdb_template( $single_template_id ) ) {

					// make sure the template exists, maybe it was deleted or something
					if ( td_global::is_tdb_template( $single_template_id, true ) ) {

						$tdb_template_id = td_global::tdb_get_template_id($single_template_id);

					} else {
						// just reset the post template here, the panel default post template will kick in and load, if available
						$td_post_theme_settings['td_post_template'] = '';
						update_post_meta( $post_id, 'td_post_theme_settings', $td_post_theme_settings );
					}
				}
			} else {

                // read the global setting
                $default_template_id = td_util::get_option('td_default_site_post_template');

                // check the default template
                if ( td_global::is_tdb_template( $default_template_id ) ) {

                    // make sure the template exists, maybe it was deleted or something
                    if ( td_global::is_tdb_template( $default_template_id, true ) ) {

                        // load the default tdb template
                        $tdb_template_id = td_global::tdb_get_template_id($default_template_id);

                    } else {

                        // if we have an non-existent cloud template update the default site wide post template
                        td_util::update_option('td_default_site_post_template', '' );
                    }

                }
            }

			if ( !empty( $tdb_template_id ) ) {

				// load the cloud template
				$wp_query_template = new WP_Query( array(
						'p' => $tdb_template_id,
						'post_type' => 'tdb_templates',
					)
				);
			}

			// if we have a template look for the 'tdb_single_comments' shortcode
			if ( !empty( $wp_query_template ) && $wp_query_template->have_posts() ) {
				$tdb_single_comments = tdb_util::get_shortcode( $wp_query_template->post->post_content, 'tdb_single_comments' );

				if ( ! $tdb_single_comments || td_util::get_option('tdb_p_autoload_status', 'off') === 'on' ) {
					add_filter( 'dsq_can_load', '__return_false' );
				}
			}

		}

	});

	/**
	 * the autoload(infinite) posts script.
	 * it's needed and loaded just on frontend
	 */
	if ( !tdb_state::is_ajax() && !tdc_state::is_live_editor_ajax() && !tdc_state::is_live_editor_iframe() && !td_util::is_mobile_theme() ) {
		add_filter('wp_enqueue_scripts', function(){
			if ( TDB_DEPLOY_MODE == 'dev' ) {
				wp_enqueue_script( 'tdbAutoload', TDB_URL . '/assets/js/tdbAutoload.js', array( 'jquery', 'underscore' ), TD_CLOUD_LIBRARY, true);
			} else {
				wp_enqueue_script( 'tdb_js_posts_autoload', TDB_URL . '/assets/js/js_posts_autoload.min.js', array( 'jquery', 'underscore' ), TD_CLOUD_LIBRARY, true );
			}
		});
	}

	add_action( 'pre_get_posts', function( $query ) {
		if ( ! is_admin() && ! $query->is_main_query() )
			return;

		$orderby = $query->get('orderby');

		if ( 'tdb_template_type' == $orderby ) {
			$query->set( 'meta_key', 'tdb_template_type' );
		}

		$template_type = $query->get('template_type');

		if ( ! empty( $template_type ) ) {
			$query->set( 'meta_key', 'tdb_template_type' );
			$query->set( 'meta_value', $template_type );
		}
	});

    /**
     * - filter 'wpseo_title' is used by WordPress SEO plugin and, by default, it returns a seo title that hasn't the page number inside of it,
     * when it's used on td pages [those who have a custom pagination]. At that seo title is added the page info, and just for pages greater than 1
     */
    add_action( 'pre_get_posts', function($query) {

        if( is_page() && $query->is_main_query() ){

            $page_id = isset($query->queried_object) ? $query->queried_object->ID : $query->query_vars['page_id'];

            // load the page template
            $page_template = new WP_Query(array(
                    'p' => $page_id,
                    'post_type' => 'page',
                )
            );

            if (!empty($page_template)) {

                // get the page template
                $_wp_page_template = get_post_meta($page_id, '_wp_page_template', true);

                $tdb_is_loop = tdb_util::get_shortcode($page_template->post->post_content, 'tdb_loop');
                $tdb_is_loop_2 = tdb_util::get_shortcode($page_template->post->post_content, 'tdb_loop_2');

                // don't apply on page-pagebuilder-latest.php
                if ( 'page-pagebuilder-latest.php' !== $_wp_page_template & $tdb_is_loop === true || $tdb_is_loop_2 === true ) {
                    add_filter('wpseo_title', 'td_wpseo_title_for_loop', 11, 1);

                    function td_wpseo_title_for_loop($seo_title){

                        $td_page = (get_query_var('page')) ? get_query_var('page') : 1; //rewrite the global var
                        $td_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //rewrite the global var

                        if ($td_paged > $td_page) {
                            $local_paged = $td_paged;
                        } else {
                            $local_paged = $td_page;
                        }

                        // the custom title is when the pagination is greater than 1
                        if ($local_paged > 1) {
                            return $seo_title . ' - ' . __td('Page', TD_THEME_NAME) . ' ' . $local_paged;
                        }

                        return $seo_title;
                    }
                }
            }

        }

    } );

    /**
     * Head canonical links on pages with numbered pagination (loop shortcode).
     *
     */
    add_action( 'wp_head', function() {

        global $tdb_state_single_page;

        if( is_main_query() && is_page() ){

            global $wp_query;

            $page_id = isset($wp_query->queried_object) ? $wp_query->queried_object->ID : $wp_query->query_vars['page_id'];

            // load the page template
            $page_template = new WP_Query(array(
                    'p' => $page_id,
                    'post_type' => 'page',
                )
            );

            if (! empty($page_template)) {

                // get the page template
                $_wp_page_template = get_post_meta($page_id, '_wp_page_template', true);

                $tdb_is_loop_pagination = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop','ajax_pagination');
                $tdb_is_loop_2_pagination = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop_2','ajax_pagination');

                // don't apply on page-pagebuilder-latest.php
                if ( 'page-pagebuilder-latest.php' !== $_wp_page_template && $tdb_is_loop_pagination === 'numbered' ) {

                    $atts = array();

                    $limit = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop', 'limit');
                    if (!empty($limit)) {
                        $atts['post_ids'] = $limit;
                    }
                    $offset = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop', 'offset');
                    if (!empty($offset)) {
                        $atts['post_ids'] = $offset;
                    }
                    $post_ids = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop', 'post_ids');
                    if (!empty($post_ids)) {
                        $atts['post_ids'] = $post_ids;
                    }

                    $atts = array(
                        'limit' => $limit,
                        'offset' => $offset,
                        'post_ids' => $post_ids
                    );

                    $loop_data = $tdb_state_single_page->loop->__invoke($atts);

                }

                // don't apply on page-pagebuilder-latest.php
                if ( 'page-pagebuilder-latest.php' !== $_wp_page_template && $tdb_is_loop_2_pagination === 'numbered' ) {

                    $atts = array();

                    $limit = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop_2', 'limit');
                    if (!empty($limit)) {
                        $atts['post_ids'] = $limit;
                    }
                    $offset = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop_2', 'offset');
                    if (!empty($offset)) {
                        $atts['post_ids'] = $offset;
                    }
                    $post_ids = tdb_util::get_shortcode_att($page_template->post->post_content, 'tdb_loop_2', 'post_ids');
                    if (!empty($post_ids)) {
                        $atts['post_ids'] = $post_ids;
                    }

                    $atts = array(
                        'limit' => $limit,
                        'offset' => $offset,
                        'post_ids' => $post_ids
                    );

                    $loop_data = $tdb_state_single_page->loop->__invoke($atts);

                }

                if (!empty($loop_data)) {

                    $max_page = (int)$loop_data ["loop_pagination"]['max_page'];

                    $td_page = get_query_var('page') ? get_query_var('page') : 1; //rewrite the global var
                    $td_paged = get_query_var('paged') ? get_query_var('paged') : 1; //rewrite the global var

                    $td_page = intval($td_page);
                    $td_paged = intval($td_paged);

                    //paged works on single pages, page - works on homepage
                    if ($td_paged > $td_page) {
                        $paged = $td_paged;
                    } else {
                        $paged = $td_page;
                    }

                    // Remove the wp action links
                    remove_action('wp_head', 'rel_canonical');
                    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

                    if (class_exists('WPSEO_Frontend')) {
                        // Remove the canonical action of the Yoast SEO plugin
                        add_filter( 'wpseo_canonical', '__return_false' );
                    }

                    $td_current_page = '<link rel="canonical" href="' . get_pagenum_link($paged) . '"/>';
                    $td_prev_page = '<link rel="prev" href="' . get_pagenum_link($paged - 1) . '"/>';
                    $td_next_page = '<link rel="next" href="' . get_pagenum_link($paged + 1) . '"/>';

                    if ( td_util::is_amp() ){
                        $td_current_page = str_replace( '?amp', "", $td_current_page);
                        $td_prev_page = str_replace( '?amp', "", $td_prev_page);
                        $td_next_page = str_replace( '?amp', "", $td_next_page);
                    }

                    echo $td_current_page;

                    if ($paged > 1) {
                        echo $td_prev_page;
                    }
                    if ($paged < $max_page) {
                        echo $td_next_page;
                    }

                }

            }
        }
    }, 1);


    add_action( 'pre_get_posts', 'tdb_modify_main_query_for_wp_templates_page' );
    function tdb_modify_main_query_for_wp_templates_page( $query ) {

        // checking for main query ONLY ON frontend - Does not run on ajax or TDC iFrame!!!
        if( ( !is_admin() && $query->is_main_query() && !tdc_state::is_live_editor_ajax() && !tdc_state::is_live_editor_iframe()) ) {

            $template_id = '';

            if ( is_category() && ! td_util::is_mobile_theme() ) {

                $current_category_obj = '';
                $current_category_id = '';

                if ( isset( $query->query['cat'] ) ) {
                    $current_category_obj = get_category( $query->query['cat'] );
                } elseif( isset( $query->query_vars['category_name'] ) ) {
                    $current_category_obj = get_category_by_slug( $query->query_vars['category_name'] );
                }

                if ( !empty( $current_category_obj ) ) {
                    $current_category_id = $current_category_obj->cat_ID;
                }

                // read the individual cat template
                $tdb_individual_category_template = td_util::get_category_option( $current_category_id, 'tdb_category_template' );

                $option_id = 'tdb_category_template';
                if (class_exists('SitePress', false )) {
                    global $sitepress;
                    $sitepress_settings = $sitepress->get_settings();
                    $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                    if ( 1 === $translation_mode ) {
                        $option_id .= $sitepress->get_current_language();
                    }
                }

                // read the global template
                $tdb_category_template = td_options::get( $option_id );

//                if ( !empty( $tdb_individual_category_template ) && td_global::is_tdb_template( $tdb_individual_category_template, true ) ) {
//                    $template_id = td_global::tdb_get_template_id( $tdb_individual_category_template );
//                } else {
//                    if ( td_global::is_tdb_template( $tdb_category_template, true ) ) {
//                        $template_id = td_global::tdb_get_template_id( $tdb_category_template );
//                    }
//                }

                if ( empty($tdb_individual_category_template)) {
                    //get global option if individual is not tdb
                    if ( td_global::is_tdb_template( $tdb_category_template, true )) {
                        $template_id = td_global::tdb_get_template_id( $tdb_category_template );
                    }
                } else if ( td_global::is_tdb_template( $tdb_individual_category_template, true ) ) {
                    $template_id = td_global::tdb_get_template_id( $tdb_individual_category_template );
                }


            } elseif ( is_author() && ! td_util::is_mobile_theme() ) {

                $option_id = 'tdb_author_templates';
                if ( class_exists( 'SitePress', false ) ) {
                    global $sitepress;
                    $sitepress_settings = $sitepress->get_settings();
                    $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                    if ( 1 === $translation_mode ) {
                        $option_id .= $sitepress->get_current_language();
                    }
                }

	            // user templates
	            $tdb_author_templates = td_util::get_option( $option_id );
	            // author id
	            $author_id = '';
                if (!empty($query->query_vars['author'])) {
	                $author_id = $query->query_vars['author'];
                } else if(!empty($query->query_vars['author_name'])) {
                    $user = get_user_by('slug', $query->query_vars['author_name']);
                    if( $user ){
                        $author_id = $user->ID;
                    }
                }

                if ( !empty( $tdb_author_templates[$author_id] ) && td_global::is_tdb_template( $tdb_author_templates[$author_id], true ) ) {
	                // individual author template
	                $template_id = td_global::tdb_get_template_id( $tdb_author_templates[$author_id] );
                } else {
                    $option_id = 'tdb_author_template';
                    if ( class_exists( 'SitePress', false ) ) {
                        global $sitepress;
                        $sitepress_settings = $sitepress->get_settings();
                        $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                        if ( 1 === $translation_mode ) {
                            $option_id .= $sitepress->get_current_language();
                        }
                    }
                    // default template
                    $tdb_author_template = td_options::get( $option_id );
                    if ( td_global::is_tdb_template( $tdb_author_template, true ) ) {
                        $template_id = td_global::tdb_get_template_id( $tdb_author_template );
                    }
                }

            } elseif ( is_search() && ! td_util::is_mobile_theme() ) {

                $option_id = 'tdb_search_template';
                if ( class_exists( 'SitePress', false ) ) {
                    global $sitepress;
                    $sitepress_settings = $sitepress->get_settings();
                    $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                    if ( 1 === $translation_mode ) {
                        $option_id .= $sitepress->get_current_language();
                    }
                }

                // read the template
                $tdb_search_template = td_options::get( $option_id );
                if ( td_global::is_tdb_template( $tdb_search_template, true ) ) {
                    $template_id = td_global::tdb_get_template_id( $tdb_search_template );
                }

            } elseif ( is_date() && ! td_util::is_mobile_theme() ) {

                $option_id = 'tdb_date_template';
                if ( class_exists( 'SitePress', false ) ) {
                    global $sitepress;
                    $sitepress_settings = $sitepress->get_settings();
                    $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                    if ( 1 === $translation_mode ) {
                        $option_id .= $sitepress->get_current_language();
                    }
                }

                // read the template
                $tdb_date_template = td_options::get( $option_id );
                if ( td_global::is_tdb_template( $tdb_date_template, true ) ) {
                    $template_id = td_global::tdb_get_template_id( $tdb_date_template );
                }

            } elseif ( is_tag() && ! td_util::is_mobile_theme() ) {

                $template_found = false;

                $option_id = 'tdb_tag_templates';
                if ( class_exists( 'SitePress', false ) ) {
                    global $sitepress;
                    $sitepress_settings = $sitepress->get_settings();
                    $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                    if ( 1 === $translation_mode ) {
                        $option_id .= $sitepress->get_current_language();
                    }
                }

                $tdb_tag_templates = td_options::get( $option_id );
                if ( is_array($tdb_tag_templates)) {
                    $queried_object = get_queried_object();
                    foreach ( $tdb_tag_templates as $tdb_tag_template_id => $tags ) {

                        if ( false !== strpos( $tags, $queried_object->slug) && td_global::is_tdb_template( $tdb_tag_template_id, true )) {
                            $template_found = true;
                            $template_id = td_global::tdb_get_template_id( $tdb_tag_template_id );
                        }
                    }
                }

                if ( ! $template_found ) {

                    $option_id = 'tdb_tag_template';
                    if ( class_exists( 'SitePress', false ) ) {
                        global $sitepress;
                        $sitepress_settings = $sitepress->get_settings();
                        $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
                        if ( 1 === $translation_mode ) {
                            $option_id .= $sitepress->get_current_language();
                        }
                    }

	                // read the default tag template
	                $tdb_tag_template = td_options::get( $option_id );

                    if ( td_global::is_tdb_template( $tdb_tag_template, true ) ) {
		                $template_id = td_global::tdb_get_template_id( $tdb_tag_template );
	                }
                }

            } elseif ( is_page() && ! td_util::is_mobile_theme() ) {

                $page_id = isset($query->queried_object) ? $query->queried_object->ID : $query->query_vars['page_id'];

                // load the page template
                $page_template = new WP_Query( array(
                        'p' => $page_id,
                        'post_type' => 'page',
                    )
                );

                if ( !empty( $page_template ) && $page_template->have_posts() ) {
                    $offset = tdb_util::get_shortcode_att( $page_template->post->post_content, 'tdb_loop','offset' );
                    tdb_state_template::set_template_loop_offset( (int)$offset );
                }
            }

            if ( !empty( $template_id ) ) {

                // load the tdb template
                $wp_query_template = new WP_Query( array(
                        'p' => $template_id,
                        'post_type' => 'tdb_templates',
                    )
                );
            }

            // if we have a template
            if ( !empty( $wp_query_template ) && $wp_query_template->have_posts() ) {

                /**
                 * set the tdb_template_overwrite filter
                 * this runs in the theme and is used by plugins to tell the theme not to do the default modifications for the main query on category pages
                 * @see td_modify_main_query_for_category_page in ..\theme\includes\wp_booster\td_wp_booster_functions.php
                 */
                add_filter( 'tdb_category_template_query_overwrite', function() {
                    return true;
                });

                // set the template query
                tdb_state_template::set_wp_query( $wp_query_template );

                $limit = tdb_util::get_shortcode_att( $wp_query_template->post->post_content, 'tdb_loop','limit' );

                if ( empty($limit) )
                    $limit = get_option('posts_per_page');

                $offset = tdb_util::get_shortcode_att( $wp_query_template->post->post_content, 'tdb_loop','offset' );
                tdb_state_template::set_template_loop_offset( intval($offset) );

                // detect and handle pagination
                if ( $query->is_paged ) {

                    // if we have an offset, manually determine page query offset (offset + current page (minus one) x posts per page)
                    if ( !empty($offset) )
                        $offset = $offset + ( ($query->query_vars['paged']-1) * $limit );
                }

                // exclude certain posts or pages from your posts loop
                $post_ids = tdb_util::get_shortcode_att( $wp_query_template->post->post_content, 'tdb_loop','post_ids' );

                if ( !empty($post_ids) ) {

                    // split posts ids string
                    $post_ids_array = explode (',', $post_ids);
                    $posts_not_in = array();
                    $posts_in = array();

                    // split ids
                    foreach ($post_ids_array as $post_id) {
                        $post_id = trim($post_id);

                        // check if the ID is actually a number
                        if (is_numeric($post_id)) {
                            if (intval($post_id) < 0) {
                                $posts_not_in[] = str_replace('-', '', $post_id);
                            } else {
                                $posts_in[] = $post_id;
                            }
                        }
                    }

                    // don't pass an empty post__in because it will return has_posts()
                    if (!empty($posts_in)) {
                        $query->set( 'post__in', $posts_in );
                        $query->set( 'orderby', 'post__in' );
                    }

                    // set the posts to exclude if any
                    if (!empty($posts_not_in)) {
                        $query->set( 'post__not_in', $posts_not_in );
                    }
                }

                $sort = tdb_util::get_shortcode_att( $wp_query_template->post->post_content, 'tdb_loop','sort' );
                switch ($sort) {
                    case 'oldest_posts':
                        $query->set( 'order', 'ASC' );
                        break;

                    case 'modified_date':
                        $query->set( 'orderby', 'post_modified' );
                        break;

                    case 'alphabetical_order':
                        $query->set( 'orderby', 'title' );
                        $query->set( 'order', 'ASC' );
                        break;

                    case 'popular':
                        $query->set( 'meta_key', td_page_views::$post_view_counter_key );
                        $query->set( 'orderby', 'meta_value_num' );
                        $query->set( 'order', 'DESC' );
                        break;

                    case 'popular7':
                        $query->set( 'meta_query', array(
                            'relation' => 'AND',
                            array(
                                'key'     => td_page_views::$post_view_counter_7_day_total,
                                'type'    => 'numeric'
                            ),
                            array(
                                'key'     => td_page_views::$post_view_counter_7_day_last_date,
                                'value'   => (date('U') - 604800), // current date minus 7 days
                                'type'    => 'numeric',
                                'compare' => '>'
                            )
                        ) );
                        $query->set( 'orderby', td_page_views::$post_view_counter_7_day_total );
                        $query->set( 'order', 'DESC' );
                        break;

                    case 'review_high':
                        $query->set( 'meta_key', 'td_review_key' );
                        $query->set( 'orderby', 'meta_value_num' );
                        $query->set( 'order',  'DESC' );
                        break;

                    case 'comment_count':
                        $query->set( 'orderby', 'comment_count' );
                        $query->set( 'order', 'DESC' );
                        break;
                }

                // set the query limit/offset/sort
                $query->set( 'main_query_offset', true );
                $query->set( 'offset', $offset );
                $query->set( 'posts_per_page', $limit );
            }
        }
    }

    add_filter( 'found_posts', 'tdb_on_found_posts_adjust_offset_pagination', 10, 2 );
    function tdb_on_found_posts_adjust_offset_pagination( $found_posts, $query ) {

        if( $query->get('main_query_offset') ) {
            $offset = tdb_state_template::get_template_loop_offset();
            return $found_posts - $offset;
        }

        return $found_posts;
    }

});


/**
 * resources loaded just on ajax autoloaded(infinite) posts
 */
if ( tdb_state::is_ajax() ) {

    // do not show the admin bar on autoload posts ajax calls
    add_filter('show_admin_bar', '__return_false');

    // enqueue for posts autoload(infinite) ajax loaded posts
    add_filter('wp_enqueue_scripts', function(){

        // load the js
        if ( TDB_DEPLOY_MODE == 'dev' ) {
            wp_enqueue_script( 'tdbAutoloadAjax', TDB_URL . '/assets/js/tdbAutoloadAjax.js', array( 'jquery' ), TD_CLOUD_LIBRARY, true);
        } else {
            wp_enqueue_script( 'tdb_js_posts_autoload_ajax', TDB_URL . '/assets/js/js_posts_autoload_ajax.min.js', array( 'jquery', 'underscore' ), TD_CLOUD_LIBRARY, true );
        }

        // load the css
        if ( TDB_DEPLOY_MODE == 'dev' ) {
            wp_enqueue_style( 'tdb_autoload_ajax', TDB_URL . '/td_less_style.css.php?part=less_ajax', false, TD_CLOUD_LIBRARY );
        } else {
            wp_enqueue_style( 'tdb_posts_autoload_ajax_style', TDB_URL . '/assets/css/tdb_less_ajax.css', false, TD_CLOUD_LIBRARY );
        }
    });

    // do not index '/?tdb_action=tdb_ajax' url - autoload article
    add_filter('wp_head', function(){
        echo '<meta name="robots" content="noindex, nofollow" />';
    },1);
}


/**
 * when posting a comment on a ajax autoloaded posts make sure the redirect sets the ajax state
 */
add_filter('comment_post_redirect', function( $url ){

	if ( strpos( $_SERVER["HTTP_REFERER"], '?tdb_action=tdb_ajax' ) !== false ) {
		$url = add_query_arg( 'tdb_action', 'tdb_ajax', $url );
	}

	return $url;
});


/**
 *  redirect the view template
 * - template_include runs after template_redirect
 * - RUNS BEFORE the one that we have in the theme @see on_td_wp_booster_functions.php
 * - The theme does nothing on single pages when it detects a template builder template so we have to do all the work here
 */
add_filter( 'template_include', 'tdb_on_template_include' );
function tdb_on_template_include( $original_template ) {


    // we are viewing a single post template
    if ( is_singular( array( 'tdb_templates' ) ) && ! td_util::is_mobile_theme() ) {

        add_filter( 'the_content', function( $content ) {
            if ( td_util::is_template_header() ) {

                global $post;
                $tdb_template_type = get_post_meta( $post->ID, 'tdb_template_type', true );

                if ( 'header' === $tdb_template_type ) {
                    return '';
                }
                return $content;
            }
            return $content;
        });

        return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_template.php';
    }

    // we are viewing a single page template
    if ( is_singular( array( 'attachment' ) ) && ! td_util::is_mobile_theme() ) {

        $template_id = '';

        $option_id = 'tdb_attachment_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read template
        $tdb_attachment_template = td_options::get( $option_id );
        if ( td_global::is_tdb_template( $tdb_attachment_template, true ) ) {
            $template_id = td_global::tdb_get_template_id( $tdb_attachment_template );
        }

        if ( !empty( $template_id ) ) {

            // load the tdb template
            $wp_query_template = new WP_Query( array(
                    'p' => $template_id,
                    'post_type' => 'tdb_templates',
                )
            );
        }

        // do not redirect the theme template if we don't find the template
        // the template was probably deleted or something
        if ( empty( $wp_query_template ) || !$wp_query_template->have_posts() ) {
            return $original_template; // do nothing if the template is not found!
        }

        // save our template wp_query & load
        tdb_state_template::set_wp_query( $wp_query_template );

        // do the redirect
        return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_attachment.php';
    }

    // we are viewing a category template
    if ( is_category() && ! td_util::is_mobile_theme() ) {

        $template_id = '';
        $current_category_obj = '';

        $cat_query_var = get_query_var('cat');
        $category_name_query_var = get_query_var('category_name');
        $current_category_id = '';

        if ( !empty( $cat_query_var ) ) {
            $current_category_obj = get_category( $cat_query_var );
        } elseif( !empty( $category_name_query_var ) ) {
            $current_category_obj = get_category_by_slug( $category_name_query_var );
        }

        if ( !empty( $current_category_obj ) ) {
            $current_category_id = $current_category_obj->cat_ID;
        }

        // read the individual cat template
        $tdb_individual_category_template = td_util::get_category_option( $current_category_id, 'tdb_category_template' );

        $option_id = 'tdb_category_template';
        if (class_exists('SitePress', false )) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read the global template
        $tdb_category_template = td_options::get( $option_id );

        if ( empty( $tdb_individual_category_template ) ) {

            if ( td_global::is_tdb_template( $tdb_category_template, true ) ) {
                $template_id = td_global::tdb_get_template_id( $tdb_category_template );
            }

        } else {

            if ( td_global::is_tdb_template( $tdb_individual_category_template, true ) ) {
                $template_id = td_global::tdb_get_template_id( $tdb_individual_category_template );

            } else if ( 'theme_templates' === $tdb_individual_category_template ) {

                // do nothing if the template is not found!
                return $original_template;

            } else if ( td_global::is_tdb_template( $tdb_category_template, true ) ) {

	            // look and set the global cat cloud template if we have an individual category but it's not found
	            $template_id = td_global::tdb_get_template_id( $tdb_category_template );

            }
        }

        // if we don't have a template return the original temp
        if ( !empty( $template_id ) ) {

            // load the tdb template
            $wp_query_template = new WP_Query( array(
                    'p' => $template_id,
                    'post_type' => 'tdb_templates',
                )
            );
        }

        // do not redirect the theme template if we don't find the template
        // the template was probably deleted or something
        if ( empty( $wp_query_template ) || !$wp_query_template->have_posts() ) {
            return $original_template; // do nothing if the template is not found!
        }

        return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_category.php';
    }

    // we are viewing a author template
    if ( is_author() && ! td_util::is_mobile_theme() ) {

        $option_id = 'tdb_author_templates';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

	    // user templates
	    $tdb_author_templates = td_util::get_option( $option_id );
	    // author id
	    $author_query_var = get_query_var('author');
	    $author_name_query_var = get_query_var('author_name');
	    $author_id = '';
	    if (!empty($author_query_var)) {
		    $author_id = $author_query_var;
	    } else if(!empty($author_name_query_var)) {
		    $user = get_user_by('login', $author_name_query_var);
            if( $user ){
                $author_id = $user->ID;
            }
	    }

	    if ( !empty( $tdb_author_templates[$author_id] ) && td_global::is_tdb_template( $tdb_author_templates[$author_id], true ) ) {
		    return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_author.php';
	    }

        $option_id = 'tdb_author_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read template
        $template_id = td_options::get( $option_id );
        if (td_global::is_tdb_template($template_id, true)) {
            return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_author.php';
        }
    }

    // we are viewing a search template
    if ( is_search() && ! td_util::is_mobile_theme() ) {

        $option_id = 'tdb_search_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }


        // read template
        $tdb_search_template = td_options::get( $option_id );
        if ( td_global::is_tdb_template( $tdb_search_template, true ) ) {
            return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_search.php';
        }

    }

    // we are viewing a date template
    if ( is_date() && ! td_util::is_mobile_theme() ) {

        $option_id = 'tdb_date_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read template
        $tdb_date_template = td_options::get( $option_id );
        if ( td_global::is_tdb_template( $tdb_date_template, true ) ) {
            return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_date.php';
        }

    }

    // we are viewing a tag template
    if ( is_tag() && ! td_util::is_mobile_theme() ) {

        $option_id = 'tdb_tag_templates';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        $tdb_tag_templates = td_options::get( $option_id );
        if ( is_array($tdb_tag_templates)) {
            $queried_object = get_queried_object();
            foreach ( $tdb_tag_templates as $tdb_tag_template_id => $tags ) {

                if ( false !== strpos( $tags, $queried_object->slug) && td_global::is_tdb_template( $tdb_tag_template_id, true )) {
                    return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_tag.php';
                }
            }
        }

        $option_id = 'tdb_tag_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read template
        $tdb_tag_template = td_options::get( $option_id );
        if ( td_global::is_tdb_template( $tdb_tag_template, true ) ) {
            return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_tag.php';
        }

    }

    // we are viewing a 404 template
    if ( is_404() && ! td_util::is_mobile_theme() ) {

        $template_id = '';

        $option_id = 'tdb_404_template';
        if ( class_exists( 'SitePress', false ) ) {
            global $sitepress;
            $sitepress_settings = $sitepress->get_settings();
            $translation_mode = (int) $sitepress_settings['custom_posts_sync_option'][ 'tdb_templates'];
            if ( 1 === $translation_mode ) {
                $option_id .= $sitepress->get_current_language();
            }
        }

        // read template
        $tdb_404_template = td_options::get( $option_id );
        if ( td_global::is_tdb_template( $tdb_404_template, true ) ) {
            $template_id = td_global::tdb_get_template_id( $tdb_404_template );
        }

        if ( !empty( $template_id ) ) {

            // load the tdb template
            $wp_query_template = new WP_Query( array(
                    'p' => $template_id,
                    'post_type' => 'tdb_templates',
                )
            );
        }

        // do not redirect the theme template if we don't find the template
        // the template was probably deleted or something
        if ( empty( $wp_query_template ) || !$wp_query_template->have_posts() ) {
            return $original_template; // do nothing if the template is not found!
        }

        // save our template wp_query & load
        tdb_state_template::set_wp_query( $wp_query_template );

        // do the redirect
        return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_404.php';
    }

    return $original_template;
}


/**
 * This hook is in the theme, it allows us to provide a redirect for the single pages on the front end
 * we run it on the post template if set and on the global template if no post template is set. Not the best solution...
 * in: the template id
 * out: the new template path
 */
add_filter('td_single_override', function($template_id) {

	/*
	 * Code from wp get_posts (previous was with WP_Query). Diff from previous WP_Query is that wmpl hooks on query without default wp_parse_args. That's why wp get_posts inside code is used
	 */
    $args = array(
        'p' => $template_id,
        'post_type' => 'tdb_templates'
    );

	$defaults = array(
		'numberposts'      => 5,
		'category'         => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => array(),
		'exclude'          => array(),
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'suppress_filters' => true,
	);

	$parsed_args = wp_parse_args( $args, $defaults );
	if ( empty( $parsed_args['post_status'] ) ) {
		$parsed_args['post_status'] = ( 'attachment' == $parsed_args['post_type'] ) ? 'inherit' : 'publish';
	}
	if ( ! empty( $parsed_args['numberposts'] ) && empty( $parsed_args['posts_per_page'] ) ) {
		$parsed_args['posts_per_page'] = $parsed_args['numberposts'];
	}
	if ( ! empty( $parsed_args['category'] ) ) {
		$parsed_args['cat'] = $parsed_args['category'];
	}
	if ( ! empty( $parsed_args['include'] ) ) {
		$incposts                      = wp_parse_id_list( $parsed_args['include'] );
		$parsed_args['posts_per_page'] = count( $incposts );  // only the number of posts included
		$parsed_args['post__in']       = $incposts;
	} elseif ( ! empty( $parsed_args['exclude'] ) ) {
		$parsed_args['post__not_in'] = wp_parse_id_list( $parsed_args['exclude'] );
	}

	$parsed_args['ignore_sticky_posts'] = true;
	$parsed_args['no_found_rows']       = true;

	$wp_query_template = new WP_Query;
	$posts = $wp_query_template->query( $parsed_args );

    // do not redirect the theme template if we don't find the template
    // the template was probably deleted or something
    if (count($posts) === 0) {
	    return $template_id; // do nothing if the template is not found!
    }

    // save our template wp_query & load
    tdb_state_template::set_wp_query($wp_query_template);

    // do the redirect
    return TDB_TEMPLATE_BUILDER_DIR . '/wp_templates/tdb_view_single.php';
});


/**
 * JS: add tdb_globals to wp-admin
 */
add_filter('admin_head', function(){

    if ( td_util::is_mobile_theme() ) {
        return;
    }

    $tdb_globals = array (
        'wpRestNonce' => wp_create_nonce('wp_rest'),
        'wpRestUrl' => rest_url(),
        'permalinkStructure' => get_option('permalink_structure'),
        'tdbTemplateType' => tdc_util::get_get_val('tdbTemplateType'),
        'deployMode' => TDB_DEPLOY_MODE,

    );

    ?>
    <script>
        window.tdb_globals = <?php echo json_encode( $tdb_globals );?>;
    </script>

    <style>
        body.post-type-tdb_templates .page-title-action {
            display: none;
        }
    </style>
    <?php
});

/**
 * JS: add the tdb_globals for frontend also..
 * @note: this is need for autoload(infinite) posts ajax calls
 */
add_filter('wp_head', function (){

    if ( td_util::is_mobile_theme() ) {
        return;
    }

    $tdb_globals = array (
        'wpRestNonce' => wp_create_nonce('wp_rest'),
        'wpRestUrl' => rest_url(),
        'permalinkStructure' => get_option('permalink_structure'),
    );

    if ( ! tdb_state::is_ajax() ) {
        $tdb_globals['isAjax'] = false;
        $tdb_globals['isAdminBarShowing'] = is_admin_bar_showing();

        $tdb_p_autoload_scroll_percent = intval( td_util::get_option('tdb_p_autoload_scroll_percent', 50 ) );

        if ( tdb_util::check_in_range( $tdb_p_autoload_scroll_percent, 1, 100 ) ) {
	        $tdb_globals['autoloadScrollPercent'] = $tdb_p_autoload_scroll_percent;
        } else {
	        $tdb_globals['autoloadScrollPercent'] = 50;
        }

        global $post;

        if ( is_singular('post') ) {

	        $tdb_globals['postAutoloadStatus'] = td_util::get_option('tdb_p_autoload_status', 'off');

	        if ( !empty($post) ){
	            $tdb_globals['origPostEditUrl'] = get_edit_post_link($post->ID);
            }
        }

    } else {
	    $tdb_globals['isAjax'] = true;
    }

    ?>
    <script>
        window.tdb_globals = <?php echo json_encode( $tdb_globals );?>;
    </script>
    <?php
});


/**
 *  dark mode shortcode cookie check on init
 */
add_action('init', function (){

	if ( defined('DOING_AJAX') && DOING_AJAX ) {
	    return;
	}

    global $tdb_state_dark_mode;

	$tdb_state_dark_mode = 'off';

	if( isset( $_COOKIE['td_dark_mode_cookie'] ) ) {

		$td_dark_mode_cookie = $_COOKIE[ "td_dark_mode_cookie" ];
		$cookie_value = json_decode( base64_decode( $td_dark_mode_cookie, true ), true );

	    if ( is_array( $cookie_value ) ) {

	        if ( $cookie_value['status'] === 'on' ) {

	            $exp_time = $cookie_value['expiry'];
	            $cur_time = time();

	            if ( ( $cur_time - $exp_time ) < 10 ) {
		            $tdb_state_dark_mode = 'on';
	            }
            }
	    }

		/*
		 * add dark mode cookie body class
		 */
		add_filter( 'body_class', function ( $classes ){

			global $tdb_state_dark_mode;

			if ( $tdb_state_dark_mode === 'on' ) {
				$classes[] = 'td-dark-mode-on';
			}

			return $classes;

		});
    }
});


/**
 *  Get the template id to get icon fonts
 */
add_filter( 'tdc_filter_icon_fonts_post_id', function( $post_id ) {
	if ( tdb_state_template::has_wp_query() ) {
		return tdb_state_template::get_wp_query()->post->ID;
	}
	return $post_id;

}, 10, 1);


/**
 *  Get the template id to get google fonts
 */
add_filter( 'td_filter_google_fonts_post_id', function( $post_id ) {
	if ( tdb_state_template::has_wp_query() ) {
		return tdb_state_template::get_wp_query()->post->ID;
	}
	return $post_id;

}, 10, 1);


add_action('wp_before_admin_bar_render', 'tdb_on_before_admin_bar_render');
function tdb_on_before_admin_bar_render() {
    global $wp_admin_bar, $post, $wp_query;

    if ( td_util::is_mobile_theme() ) {
		return;
	}


	if ( is_user_logged_in() &&  current_user_can( 'switch_themes' ) && is_admin_bar_showing() ) {

	    if ( tdb_state_content::has_wp_query() ) {

            $tdbLoadDataFromId = '';
            switch ( tdb_state_template::get_template_type() ) {
                case 'single':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->post->ID;
                    break;

                case 'category':
                case 'woo_archive':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->queried_object_id;
                    break;

                case 'author':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->query_vars[ 'author' ];
                    break;

                case 'search':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->query_vars[ 's' ];
                    break;

                case 'date':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->query_vars[ 'year' ];
                    break;

                case 'tag':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->query_vars[ 'tag_id' ];
                    break;

                case 'woo_product':
                case 'attachment':
                    $tdbLoadDataFromId = tdb_state_content::get_wp_query()->queried_object->ID;
                    break;

            }

            if ( 'single' === tdb_state_template::get_template_type() ) {

                $td_post_theme_settings = td_util::get_post_meta_array( $tdbLoadDataFromId, 'td_post_theme_settings' );
                if ( empty( $td_post_theme_settings[ 'td_post_template' ] ) ) {

                    $default_template_id = td_util::get_option( 'td_default_site_post_template' );
                    if ( td_global::is_tdb_template( $default_template_id, true ) ) {
                        $default_template_id = td_global::tdb_get_template_id( $default_template_id );
                        $current_template    = '<span class="tdb-template-el-global-checked">Global</span> ' . get_the_title( $default_template_id );
                    } else {

                        if ( empty( $default_template_id ) ) {
                            $default_template_id = 'DEFAULT';
                        }
                        $current_template = '<span class="tdb-template-el-global-checked">Global</span> ' . $default_template_id;
                    }

                } else {
                    $current_template = get_the_title( tdb_state_template::get_wp_query()->post->ID );
                }

                $wp_admin_bar->add_menu(
                    array(
                        'id'    => 'tdb_template_single',
                        'title' => $current_template,
                        'href'  => '#',
                        'meta'  => array(
                            'title' => 'Current Single Template TDB',
                            'class' => 'singleid-' . $tdbLoadDataFromId
                        ),
                    )
                );

            } else if ( 'category' === tdb_state_template::get_template_type() ) {

                td_show_category_template_menu();

            } else if ( 'date' === tdb_state_template::get_template_type() ) {

                td_show_template_menu('date');

            } else if ( 'search' === tdb_state_template::get_template_type() ) {

                td_show_template_menu('search');

            } else if ( 'attachment' === tdb_state_template::get_template_type() ) {

                td_show_template_menu('attachment');

            } else if ( 'author' === tdb_state_template::get_template_type() ) {

                td_show_author_template_menu();

            } else if ( 'tag' === tdb_state_template::get_template_type() ) {

                td_show_tag_template_menu();

            }

            // Add cloud library menu link
            $class_menu_item = '';

            if ( 'single' === tdb_state_template::get_template_type() || 'single' === tdb_state_template::get_template_type() || is_singular( 'post' ) ) {
                $class_menu_item = 'singleid-' . $post->ID;
            } else if ( 'category' === tdb_state_template::get_template_type() || 'category' === tdb_state_template::get_template_type() || is_category() ) {
                $queried_object = get_queried_object();
                if ( $queried_object instanceof WP_Term ) {
                    $class_menu_item = 'categoryid-' . $queried_object->term_id;
                }
            } else if ( '404' === tdb_state_template::get_template_type() || '404' === tdb_state_template::get_template_type() || is_404() ) {
                $class_menu_item = '404';
            } else if ( 'date' === tdb_state_template::get_template_type() || 'date' === tdb_state_template::get_template_type() || is_date() ) {
                $class_menu_item = 'date';
            } else if ( 'search' === tdb_state_template::get_template_type() || 'search' === tdb_state_template::get_template_type() || is_search() ) {
                $class_menu_item = 'search';
            } else if ( 'attachment' === tdb_state_template::get_template_type() || 'attachment' === tdb_state_template::get_template_type() || is_singular( 'attachment' ) ) {
                $class_menu_item = 'attachment';
            } else if ( 'author' === tdb_state_template::get_template_type() || 'author' === tdb_state_template::get_template_type() || is_author() ) {
                $queried_object = get_queried_object();
                if ( $queried_object instanceof WP_User ) {
                    $class_menu_item = 'authorid-' . $queried_object->ID;
                }
            } else if ( 'tag' === tdb_state_template::get_template_type() || 'tag' === tdb_state_template::get_template_type() || is_tag() ) {
                $queried_object = get_queried_object();
                if ( $queried_object instanceof WP_Term ) {
                    $class_menu_item = 'tagid-' . $queried_object->term_id;
                }
            }

            if ( ! empty( $class_menu_item ) ) {
                $wp_admin_bar->add_menu(
                    array(
                        'id'    => 'tdb_template_load',
                        'title' => 'Cloud Library',
                        'href'  => '#',
                        'meta'  => array(
                            'title' => 'Load a template from TagDiv Cloud',
                            'class' => $class_menu_item
                        ),
                    )
                );
            }

            // edit single page
            $wp_admin_bar->add_menu(
                array(
                    'id'    => 'tdb_template_builder',
                    'title' => 'Edit template',
                    'href'  => admin_url( 'post.php?post_id=' . tdb_state_template::get_wp_query()->post->ID . '&td_action=tdc&tdbLoadDataFromId=' . $tdbLoadDataFromId . '&tdbTemplateType=' . tdb_state_template::get_template_type() . '&prev_url=' . rawurlencode( tdc_util::get_current_url() ) ),
                    'meta'  => array(
                        'title' => 'Edit the template!'
                    ),
                )
            );

        } elseif ( tdb_state_template::has_wp_query() ) {

            $tdb_template_type = get_post_meta($post->ID, 'tdb_template_type', true);
            if ( '404' === $tdb_template_type || is_404()) {

                td_show_template_menu('404');

                if ( is_404()) {
                    $wp_admin_bar->add_menu(
                        array(
                            'id'    => 'tdb_template_builder_disabled',
                            'title' => 'Edit template',
                            'href'  => '#',
                            'meta'  => array(
                                'title' => 'Please select a tagDiv Builder template.'
                            ),
                        )
                    );
                } else {
                    // edit template
                    $wp_admin_bar->add_menu(
                        array(
                            'id'    => 'tdb_template_builder',
                            'title' => 'Edit template',
                            'href'  => admin_url( 'post.php?post_id=' . tdb_state_template::get_wp_query()->post->ID . '&td_action=tdc&tdbTemplateType=' . tdb_state_template::get_template_type() . '&prev_url=' . rawurlencode( tdc_util::get_current_url() ) ),
                            'meta'  => array(
                                'title' => 'Edit the ' . tdb_state_template::get_template_type() . ' template.'
                            ),
                        )
                    );
                }

            } else if ( 'footer' !== $tdb_template_type ) {

	            // edit template
	            $wp_admin_bar->add_menu(
		            array(
			            'id'    => 'tdb_template_builder',
			            'title' => 'Edit template',
			            'href'  => admin_url( 'post.php?post_id=' . tdb_state_template::get_wp_query()->post->ID . '&td_action=tdc&tdbTemplateType=' . tdb_state_template::get_template_type() . '&prev_url=' . rawurlencode( tdc_util::get_current_url() ) ),
			            'meta'  => array(
				            'title' => 'Edit the ' . tdb_state_template::get_template_type() . ' template.'
			            ),
		            )
	            );
            }

        } elseif (
            ( is_singular( 'post' ) && ! is_admin() ) ||
            is_singular( 'attachment' ) ||
            ( is_category() && ! is_admin() ) ||
            ( is_author() && ! is_admin() ) ||
            ( is_search() && ! is_admin() ) ||
            ( is_date() && ! is_admin() ) ||
            ( is_tag() && ! is_admin() ) ||
            is_404()
        ) {

            if ( is_single()) {

                $current_template = '';

                $td_post_theme_settings = td_util::get_post_meta_array($post->ID, 'td_post_theme_settings');
                if (empty($td_post_theme_settings)) {
                    $current_template = '<span class="tdb-template-el-global-checked">Global</span> STANDARD - ';
                    $default_template_id = td_util::get_option( 'td_default_site_post_template' );
                    if ( empty($default_template_id )) {
                        $current_template .= 'DEFAULT';
                    } else {
                        $current_template .= $default_template_id;
                    }
                } else if ( !empty($td_post_theme_settings['td_post_template'])){
                    $current_template = $td_post_theme_settings['td_post_template'];
                }

                if ( !empty($current_template)) {

                    $wp_admin_bar->add_menu(
                        array(
                            'id'    => 'tdb_template_single',
                            'title' => $current_template,
                            'href'  => '#',
                            'meta'  => array(
                                'title' => 'Current Template STANDARD',
                                'class' => 'singleid-' . $post->ID
                            ),
                        )
                    );

                    $wp_admin_bar->add_menu(
                        array(
                            'id'    => 'tdb_template_load',
                            'title' => 'Cloud Library',
                            'href'  => '#',
                            'meta'  => array(
                                'title' => 'Load a template from TagDiv Cloud',
                                'class' => 'singleid-' . $post->ID
                            ),
                        )
                    );
                }

            } else if (is_category()) {
                td_show_category_template_menu();
            } else if (is_404()) {
                td_show_template_menu('404');
            } else if (is_date()) {
                td_show_template_menu('date');
            } else if (is_search()) {
                td_show_template_menu('search');
            } else if (is_attachment()) {
                td_show_template_menu('attachment');
            } else if (is_author()) {
                td_show_author_template_menu();
            } else if (is_tag()) {
                td_show_tag_template_menu();
            }
        }
    }
}

function td_show_category_template_menu() {
    global $wp_admin_bar;

    $global_title = '';
    $category_id = '';
    $is_global = false;
    $is_tdb_template = false;

    $template_id = td_api_category_template::get_current_category_template( $category_id,$is_global, $is_tdb_template );
    if ( $is_tdb_template ) {
        if ( $is_global ) {
            $global_title = '<span class="tdb-template-el-global-checked">Global</span> ';
        }
    } else {
        if ( $is_global ) {
            $global_title = '<span class="tdb-template-el-global-checked">Global</span> ';
        }
    }

    if (empty($template_id)) {
        $template_name = 'Category Template 1';
    } else if ( 0 === strpos($template_id, 'td_category_template_')) {
        $template_name = 'Category Template ' . str_replace('td_category_template_', '', $template_id);
    } else {
        $template_name = get_the_title( $template_id );
    }

    $current_template = $global_title . $template_name;

    if ( !empty($current_template)) {

        $wp_admin_bar->add_menu(
            array(
                'id'    => 'tdb_template_category',
                'title' => $current_template,
                'href'  => '#',
                'meta'  => array(
                    'title' => 'Current Template',
                    'class' => 'categoryid-' . $category_id
                ),
            )
        );

        $wp_admin_bar->add_menu(
            array(
                'id'    => 'tdb_template_load',
                'title' => 'Cloud Library',
                'href'  => '#',
                'meta'  => array(
                    'title' => 'Load a template from TagDiv Cloud',
                    'class' => 'categoryid-' . $category_id
                ),
            )
        );
    }
}


function td_show_author_template_menu() {
    global $wp_admin_bar;

    $is_global = false;
    $is_tdb_template = false;

    $queried_object = get_queried_object();
    if ( $queried_object instanceof WP_User ) {

        $global_title = '';
        $author_id = $queried_object->ID;
        $tdb_author_templates = td_util::get_option( 'tdb_author_templates' );

        $tdb_individual_author_template = $tdb_author_templates[$author_id];

        if (empty($tdb_individual_author_template)) {
            $is_global = true;

            $tdb_author_template = td_util::get_option( 'tdb_author_template' );
            if ( ! empty( $tdb_author_template ) && td_global::is_tdb_template( $tdb_author_template, true ) ) {
                $is_tdb_template = true;
                $template_id = td_global::tdb_get_template_id( $tdb_author_template );
            } else {
                $template_id = td_util::get_option( 'tds_author_page_layout' );
            }

        } else {

            $is_tdb_template = true;
            $template_id = td_global::tdb_get_template_id( $tdb_individual_author_template );
        }


        if ( $is_global ) {
            $global_title = '<span class="tdb-template-el-global-checked">Global</span> ';
        }

        if ( $is_tdb_template) {
            $template_name = get_the_title( $template_id );
        } else {
            $template_name = 'Author Template ' . $template_id;
        }

        $current_template = $global_title . $template_name;

        if ( !empty($current_template)) {

            $wp_admin_bar->add_menu(
                array(
                    'id'    => 'tdb_template_author',
                    'title' => $current_template,
                    'href'  => '#',
                    'meta'  => array(
                        'title' => 'Current Template',
                        'class' => 'authorid-' . $author_id
                    ),
                )
            );

            $wp_admin_bar->add_menu(
                array(
                    'id'    => 'tdb_template_load',
                    'title' => 'Cloud Library',
                    'href'  => '#',
                    'meta'  => array(
                        'title' => 'Load a template from TagDiv Cloud',
                        'class' => 'authorid-' . $author_id
                    ),
                )
            );
        }
    }
}


function td_show_tag_template_menu() {
    global $wp_admin_bar;

    $is_global = false;
    $is_tdb_template = false;

    $queried_object = get_queried_object();
    if ( $queried_object instanceof WP_Term ) {

        $global_title = '';
        $option_id = 'tdb_tag_templates';

        $tdb_tag_templates = td_options::get( $option_id );
        if ( is_array($tdb_tag_templates)) {
            $queried_object = get_queried_object();
            foreach ( $tdb_tag_templates as $tdb_tag_template_id => $tags ) {

                if ( false !== strpos( $tags, $queried_object->slug) && td_global::is_tdb_template( $tdb_tag_template_id, true )) {
                    $is_tdb_template = true;
                    $template_id = td_global::tdb_get_template_id( $tdb_tag_template_id );
                }
            }
        }

        if ( empty($template_id) ) {

            $is_global = true;
            $option_id = 'tdb_tag_template';
            $tdb_tag_template = td_options::get( $option_id );

            if ( td_global::is_tdb_template( $tdb_tag_template, true ) ) {
                $is_tdb_template = true;
                $template_id = td_global::tdb_get_template_id( $tdb_tag_template );
            }
        }

        if ( empty( $template_id )) {
            $template_id = td_options::get('tds_tag_page_layout');
        }


        if ( $is_global ) {
            $global_title = '<span class="tdb-template-el-global-checked">Global</span> ';
        }

        if ( $is_tdb_template) {
            $template_name = get_the_title( $template_id );
        } else {
            $template_name = 'Tag Template ' . $template_id;
        }

        $current_template = $global_title . $template_name;

        if ( !empty($current_template)) {

            $wp_admin_bar->add_menu(
                array(
                    'id'    => 'tdb_template_tag',
                    'title' => $current_template,
                    'href'  => '#',
                    'meta'  => array(
                        'title' => 'Current Template',
                        'class' => 'tagid-' . $queried_object->term_id
                    ),
                )
            );

            $wp_admin_bar->add_menu(
                array(
                    'id'    => 'tdb_template_load',
                    'title' => 'Cloud Library',
                    'href'  => '#',
                    'meta'  => array(
                        'title' => 'Load a template from TagDiv Cloud',
                        'class' => 'tagid-' . $queried_object->term_id
                    ),
                )
            );
        }
    }
}

function td_show_template_menu($template_type) {
    global $wp_admin_bar;

    $global_title = '';
    $is_tdb_template = false;

    $tdb_option_key = 'tdb_' . $template_type . '_template';
    $tds_option_key = 'tds_' . $template_type . '_page_layout';

    $tdb_template = td_util::get_option( $tdb_option_key );

    if ( td_global::is_tdb_template( $tdb_template, true ) ) {
        $template_id = td_global::tdb_get_template_id( $tdb_template );
        $is_tdb_template = true;
    } else {
        $template_id = td_util::get_option( $tds_option_key );
    }

    if (empty($template_id)) {
        $template_name = ucfirst($template_type) . ' Template 1';
    } else {
        if ( $is_tdb_template ) {
            $template_name = get_the_title( $template_id );
        } else {
            $template_name = ucfirst($template_type) . ' Template ' . $template_id;
        }
    }

    $current_template = $global_title . $template_name;

    if ( !empty($current_template)) {

        $menu_template_id = '';
        if ($is_tdb_template) {
            $menu_template_id = $template_id;
        }

        $wp_admin_bar->add_menu(
            array(
                'id'    => 'tdb_template_' . $template_type,
                'title' => $current_template,
                'href'  => '#',
                'meta'  => array(
                    'title' => 'Current Template ' . ucfirst( $template_type ),
                    'class' => 'templateid-' . $menu_template_id
                ),
            )
        );

        $wp_admin_bar->add_menu(
            array(
                'id'    => 'tdb_template_load',
                'title' => 'Cloud Library',
                'href'  => '#',
                'meta'  => array(
                    'title' => 'Load a template from TagDiv Cloud',
                    'class' => $template_type
                ),
            )
        );
    }
}


// add the load template button on the welcome screen of td-composer
add_action('tdc_welcome_panel_text', function() {
    if (tdc_util::get_get_val('tdbTemplateType') !== false) {
	    ?>
        <div class="tdc-start-tips">
            <p>OR</p>
        </div>
        <div class="tdc-sidebar-w-button tdb-load-template" title="Import Pre-designed Templates from tagDiv Cloud Library">Load Template</div>
        <?php
    }
});



add_action('admin_footer', 'tdb_on_wp_admin_footer');
function tdb_on_wp_admin_footer () {
    include_once( plugin_dir_path(__FILE__) . 'tdb_template_import.php');
}

if (is_user_logged_in()) {
	add_action( 'wp_footer', 'tdb_on_wp_admin_footer1' );
	function tdb_on_wp_admin_footer1() {
		require_once( plugin_dir_path(__FILE__) . 'tdb_template_import.php' );
	}
}


$tdbTemplateType = @$_GET['tdbTemplateType'];
$post_type = @$_GET['post_type'];

if ( ! empty( $tdbTemplateType ) || ( ! empty( $post_type ) && 'tdb_templates' === $post_type ) ) {

    // enqueue for wp-admin
	add_action( 'admin_enqueue_scripts', function () {

		// load the css
		if ( TDB_DEPLOY_MODE == 'dev' ) {
			wp_enqueue_style( 'tdb_wp_admin', TDB_URL . '/td_less_style.css.php?part=wp_admin_main', false, TD_CLOUD_LIBRARY );
		} else {
			wp_enqueue_style( 'tdb_wp_admin', TDB_URL . '/assets/css/tdb_wp_admin.css', false, TD_CLOUD_LIBRARY );
		}

		// load the vue modal js
		if ( TDB_DEPLOY_MODE == 'dev' ) {
			tdb_util::enqueue_js_files_array( tdb_config::$js_files_vue_modals, array( 'jquery', 'underscore' ) );
		} else {
			wp_enqueue_script( 'tdb_js_files_vue_modals', TDB_URL . '/assets/js/js_files_vue_modals.min.js', array(
				'jquery',
				'underscore'
			), TD_CLOUD_LIBRARY, true );
		}

	}, 1011 ); // load them last after td-composer

    //enqueue files that must go at the end
    add_action( 'admin_enqueue_scripts', function () {

        if ( TDB_DEPLOY_MODE == 'dev' ) {
            tdb_util::enqueue_js_files_array( tdb_config::$js_files_vue_modals_last, array( 'jquery', 'underscore' ) );
        } else {
            wp_enqueue_script( 'js_files_vue_modals_last', TDB_URL . '/assets/js/js_files_vue_modals_last.min.js', array(
                'jquery',
                'underscore'
            ), TD_CLOUD_LIBRARY, true );
        }

    }, 1012 );
}



if (is_user_logged_in()) {

    // enqueue for wp-admin
	add_action( 'wp_enqueue_scripts', function () {

		// load the css
		if ( TDB_DEPLOY_MODE == 'dev' ) {
			wp_enqueue_style( 'tdb_wp_admin', TDB_URL . '/td_less_style.css.php?part=wp_admin_main', false, TD_CLOUD_LIBRARY );
		} else {
			wp_enqueue_style( 'tdb_wp_admin', TDB_URL . '/assets/css/tdb_wp_admin.css', false, TD_CLOUD_LIBRARY );
		}

		// load the vue modal js
		if ( TDB_DEPLOY_MODE == 'dev' ) {
			tdb_util::enqueue_js_files_array( tdb_config::$js_files_vue_modals, array( 'jquery', 'underscore' ) );
		} else {
			wp_enqueue_script( 'tdb_js_files_vue_modals', TDB_URL . '/assets/js/js_files_vue_modals.min.js', array(
				'jquery',
				'underscore'
			), TD_CLOUD_LIBRARY, true );
		}

	}, 11 ); // load them last after td-composer

	//enqueue files that must go at the end
	add_action( 'wp_enqueue_scripts', function () {

		if ( TDB_DEPLOY_MODE == 'dev' ) {
			tdb_util::enqueue_js_files_array( tdb_config::$js_files_vue_modals_last, array( 'jquery', 'underscore' ) );
		} else {
			wp_enqueue_script( 'js_files_vue_modals_last', TDB_URL . '/assets/js/js_files_vue_modals_last.min.js', array(
				'jquery',
				'underscore'
			), TD_CLOUD_LIBRARY, true );
		}

	}, 12 );


    if ( is_admin_bar_showing() ) {

        add_action( 'wp_enqueue_scripts', function () {

            // load the css
            if ( TDB_DEPLOY_MODE == 'dev' ) {
                wp_enqueue_style( 'tdb_admin_bar_menu', TDB_URL . '/td_less_style.css.php?part=less_front_menu_admin_bar', false, TD_CLOUD_LIBRARY );
            } else {
                wp_enqueue_style( 'tdb_admin_bar_menu', TDB_URL . '/assets/css/tdb_menu_admin_bar.css', false, TD_CLOUD_LIBRARY );
            }

        });
    }
}


//enqueue files that must go at the end
add_action( 'admin_enqueue_scripts', function () {

    if ( TDB_DEPLOY_MODE == 'dev' ) {
        tdb_util::enqueue_js_files_array( tdb_config::$js_files_wp_admin, array( 'jquery', 'underscore' ) );
    } else {
        wp_enqueue_script( 'tdb_js_files_for_wp_admin', TDB_URL . '/assets/js/js_files_wp_admin.min.js', array(
            'jquery',
            'underscore'
        ), TD_CLOUD_LIBRARY, true );
    }

	// Vue files theme panel
	if (isset($_GET['page']) && $_GET['page'] === 'td_theme_panel') {
		if ( TDB_DEPLOY_MODE == 'dev' ) {
			tdb_util::enqueue_js_files_array( tdb_config::$js_files_vue_theme_panel, array( 'jquery', 'underscore' ) );
		} else {
			wp_enqueue_script( 'tdb_js_files_vue_theme_panel', TDB_URL . '/assets/js/js_files_vue_theme_panel.min.js', array(
				'jquery',
				'underscore'
			), TD_CLOUD_LIBRARY, true );
		}
	}

}, 1012 );


// enqueue for front
add_action( 'wp_enqueue_scripts', function () {

    if ( td_util::is_mobile_theme() ) {
        return;
    }

    // load the css
    if ( TDB_DEPLOY_MODE == 'dev' ) {
        wp_enqueue_style( 'tdb_front_style', TDB_URL . '/td_less_style.css.php?part=less_front', false, TD_CLOUD_LIBRARY );
    } else {
        wp_enqueue_style( 'tdb_front_style', TDB_URL . '/assets/css/tdb_less_front.css', false, TD_CLOUD_LIBRARY );
    }


    // load the js
    if ( TDB_DEPLOY_MODE == 'dev' ) {
        tdb_util::enqueue_js_files_array( tdb_config::$js_files_for_front, array( 'jquery' ) );
    } else {
        wp_enqueue_script( 'tdb_js_files_for_front', TDB_URL . '/assets/js/js_files_for_front.min.js', array( 'jquery' ), TD_CLOUD_LIBRARY, true );
    }

}, 1011 ); // load them last after td-composer


/**
 * Patch the theme panel and metaboxes with our builder templates.
 * Here we add the templates to the API so that we can see them in the panels
 */
function tdb_patch_panel() {
    if (is_admin()) {

        /**
         * patch single templates
         */
        $args = array(
            'post_type' => array('tdb_templates'),
            'meta_query' => array(
                array(
                    'key'     => 'tdb_template_type',
                    'value'   => 'single',
                ),
            ),
            'posts_per_page' => '-1'
        );

        if (class_exists('SitePress', false )) {

            // WPML bug - it doesn't use all the time 'suppress_filters' param (@see WPML forums)
            $args['suppress_filters'] = false;
        }

        /**
         * @var WP_Query
         */
        $wp_query_templates = new WP_Query( $args );

        if (!empty($wp_query_templates->posts)) {

            /**
             * @var $post WP_Post
             */
            foreach ($wp_query_templates->posts as $post) {

                if ( class_exists('SitePress', false )) {
                    global $sitepress;
                    $check = wpml_get_language_information( null, $post->ID );

                    if ( ! is_wp_error( $check )) {
	                    $post_language_code = substr( $check[ 'locale' ], 0, 2 );

	                    if ( $post_language_code != $sitepress->get_current_language() ) {
		                    continue;
	                    }
                    }
                }

                // tdb_ is used as a prefix to filter it out in theme panel and show it only on post settings
                // why? we have to use the prefix to identify templates even when this plugin is off to load the default theme template in that case
                td_api_single_template::add('tdb_template_' . $post->ID,
                    array(
                        'file' => '',
                        'text' => $post->post_title,
                        'img' => TDB_URL . '/assets/images/single_template_placeholder.png',
                        'template_id' => $post->ID, // this key is used only on custom templates
                        'show_featured_image_on_all_pages' => false,
                        'bg_disable_background' => false,          // disable the featured image
                        'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                        'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                        'exclude_ad_content_top' => false,
                    )
                );
            }
        }
    }
}
tdb_patch_panel();


/**
 * remove comment form nonce on composer frame
 * fix for console error on single post comments shortcode addition
 */
add_action( 'comment_form', function() {
    if ( tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax() ) {
        remove_action( 'comment_form', 'wp_comment_form_unfiltered_html_nonce' ); ;
    }
}, 9 );

if ( is_admin() ){
    add_filter( 'query_vars', function( $query_vars ) {

        $query_vars[] = 'meta_key';
        $query_vars[] = 'meta_value';
        $query_vars[] = 'template_type';

        return $query_vars;
    });
}

/**
 * this removes the wordpress 'hentry' class
 * we're quiting the 'hentry' microformat and rely on the json-ld(json linked data) format
 * @param $classes
 * @return array
 */
add_filter( 'post_class',function( $classes ){

    $classes = array_diff( $classes, array( 'hentry' ) );

    return $classes;
});

if ( td_global::$is_woocommerce_installed ) {
    add_filter('woocommerce_add_to_cart_fragments', 'tdb_woo_get_updated_menu_cart');
    function tdb_woo_get_updated_menu_cart( $fragments ) {

        global $woocommerce;
        $cart_count = $woocommerce->cart->cart_contents_count;
        $cart_subtotal = $woocommerce->cart->subtotal;
        if( $cart_subtotal == 0 ) {
            $cart_subtotal = '0,00 ' . get_woocommerce_currency();
        } else {
            $cart_subtotal .= ' ' . get_woocommerce_currency();
        }

        ob_start();
        woocommerce_mini_cart();
        $cart_contents = ob_get_clean();


        $fragments['.tdb-wmc-count'] = '<span class="tdb-wmc-count">' . $cart_count . '</span>';
        $fragments['.tdb-wmc-txt'] = '<span class="tdb-wmc-txt">' . $cart_subtotal . '</span>';
        $fragments['.tdb-wmc-widget-inner'] = '<div class="tdb-wmc-widget-inner">' . $cart_contents . '</span>';

        return $fragments;

    }
}


/**
 * Class tdb_method - fake callable for auto complete
 */
class tdb_method {
    /**
     * @param string $p1
     * @param string $p2
     * @param string $p3
     * @param string $p4
     * @return array | string
     */
    function __invoke($p1 = '', $p2 = '', $p3 = '', $p4 = '') {
        return '';
        // TODO: Implement __invoke() method.
    }
}
