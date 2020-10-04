<?php

do_action( 'td_wp_booster_legacy' );


/**
 * Admin notices
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-admin-notices.php' );

/**
 * The global state of the theme. All globals are here
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-global.php' );

/*
 * Set theme configuration
 */
tagdiv_config::on_tagdiv_global_after_config();

/**
 * Add theme options.
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-options.php' );

/**
 * Add theme utility.
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-util.php' );

/**
 * Add theme http request ability.
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-log.php' );

/**
 * Add theme http request ability.
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/tagdiv-remote-http.php' );

/**
 * ----------------------------------------------------------------------------
 * Redirect to Welcome page on theme activation
 */
if( !function_exists('tagdiv_after_theme_is_activate' ) ) {
	function tagdiv_after_theme_is_activate() {

		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
			wp_redirect( admin_url( 'admin.php?page=td_theme_welcome' ) );
			exit;
		}
	}
	tagdiv_after_theme_is_activate();
}


/**
 * ----------------------------------------------------------------------------
 * Load theme check & deactivate for old theme plugins
 *
 * the check is done using existing classes defined by plugins
 * at this point all plugins should be hooked in!
 */
require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/plugins/class-tagdiv-old-plugins-deactivation.php' );

require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/plugins/class-tagdiv-current-plugins-deactivation.php' );

/**
 * ----------------------------------------------------------------------------
 * Theme Resources
 */

/**
 * Enqueue front styles.
 */
function tagdiv_theme_css() {

	if ( TD_DEBUG_USE_LESS ) {

		wp_enqueue_style( 'td-theme', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=style.css_v2',  '', TD_THEME_VERSION, 'all' );

		// bbPress style
		if ( class_exists( 'bbPress', false ) ) {
			wp_enqueue_style( 'td-theme-bbpress', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=bbpress', array(), wp_get_theme()->get( 'Version' ) );
		}

		// WooCommerce style
//        if( TD_THEME_NAME == 'Newsmag' ) {
            if ( class_exists( 'WooCommerce', false ) ) {
                wp_enqueue_style( 'td-theme-woo', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=woocommerce', array(), wp_get_theme()->get( 'Version' ) );
            }
//        }

		// Buddypress
		if ( class_exists( 'Buddypress', false ) ) {
			wp_enqueue_style( 'td-theme-buddypress', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=buddypress', array(), wp_get_theme()->get( 'Version' ) );
		}


	} else {

		wp_enqueue_style( 'td-theme', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

		// bbPress style
		if ( class_exists( 'bbPress', false ) ) {
			wp_enqueue_style( 'td-theme-bbpress', TAGDIV_ROOT . '/style-bbpress.css', array(), wp_get_theme()->get( 'Version' ) );
		}

		// WooCommerce style
//        if( TD_THEME_NAME == 'Newsmag' ) {
            if (class_exists('WooCommerce', false)) {
                wp_enqueue_style('td-theme-woo', TAGDIV_ROOT . '/style-woocommerce.css', array(), wp_get_theme()->get('Version'));
            }
//        }

		// Buddypress
		if ( class_exists( 'Buddypress', false ) ) {
			wp_enqueue_style( 'td-theme-buddypress', TAGDIV_ROOT . '/style-buddypress.css', array(), wp_get_theme()->get( 'Version' ) );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'tagdiv_theme_css', 11 );


/**
 * Enqueue admin styles.
 */
function tagdiv_theme_admin_css() {

	if ( TD_DEPLOY_MODE == 'dev' ) {
		wp_enqueue_style('td-theme-admin', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=wp-admin.css', false, TD_THEME_VERSION, 'all' );
        if ('Newspaper' == TD_THEME_NAME) {
            wp_enqueue_style( 'font-newspaper', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=font-newspaper', false, TD_THEME_VERSION, 'all' );
        }
	} else {
		wp_enqueue_style('td-theme-admin', TAGDIV_ROOT . '/includes/wp-booster/wp-admin/css/wp-admin.css', false, TD_THEME_VERSION, 'all' );
        if ('Newspaper' == TD_THEME_NAME) {
            wp_enqueue_style('font-newspaper', TAGDIV_ROOT . '/font-newspaper.css', false, TD_THEME_VERSION, 'all');
        }
	}

}
add_action( 'admin_enqueue_scripts', 'tagdiv_theme_admin_css' );


/**
 * Enqueue theme front scripts.
 */
if( !function_exists('load_front_js') ) {
	function tagdiv_theme_js() {

		// Load main theme js
		if ( TD_DEPLOY_MODE == 'dev' ) {
			wp_enqueue_script('tagdiv-theme-js', TAGDIV_ROOT . '/includes/js/tagdiv-theme.js', array('jquery'), TD_THEME_VERSION, true);
		} else {
			wp_enqueue_script('tagdiv-theme-js', TAGDIV_ROOT . '/includes/js/tagdiv-theme.min.js', array('jquery'), TD_THEME_VERSION, true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'tagdiv_theme_js' );
}



/*
 * Theme blocks editor styles
 */
if( !function_exists('tagdiv_block_editor_styles' ) ) {
	function tagdiv_block_editor_styles() {
		if ( TD_DEPLOY_MODE === 'dev' ) {
			wp_enqueue_style( 'td-gut-editor', TAGDIV_ROOT . '/tagdiv-less-style.css.php?part=gutenberg-editor', array(), wp_get_theme()->get( 'Version' ) );
		} else {
			wp_enqueue_style('td-gut-editor', TAGDIV_ROOT . '/gutenberg-editor.css', array(), wp_get_theme()->get( 'Version' ) );
		}
	}
	add_action( 'enqueue_block_editor_assets', 'tagdiv_block_editor_styles' );
}


/*
 * bbPress change avatar size to 40px
 */
if( !function_exists('tagdiv_bbp_change_avatar_size') ) {

	function tagdiv_bbp_change_avatar_size( $author_avatar, $topic_id, $size ) {
		$author_avatar = '';
		if ($size == 14) {
			$size = 40;
		}
		$topic_id = bbp_get_topic_id( $topic_id );
		if ( !empty( $topic_id ) ) {
			if ( !bbp_is_topic_anonymous( $topic_id ) ) {
				$author_avatar = get_avatar( bbp_get_topic_author_id( $topic_id ), $size );
			} else {
				$author_avatar = get_avatar( get_post_meta( $topic_id, '_bbp_anonymous_email', true ), $size );
			}
		}
		return $author_avatar;
	}
	add_filter('bbp_get_topic_author_avatar', 'tagdiv_bbp_change_avatar_size', 20, 3);
	add_filter('bbp_get_reply_author_avatar', 'tagdiv_bbp_change_avatar_size', 20, 3);
	add_filter('bbp_get_current_user_avatar', 'tagdiv_bbp_change_avatar_size', 20, 3);
}




/* ----------------------------------------------------------------------------
 * FILTER - the_content_more_link - read more - ?
 */
if ( ! function_exists( 'tagdiv_remove_more_link_scroll' )) {

	function tagdiv_remove_more_link_scroll($link) {
		$link = preg_replace('|#more-[0-9]+|', '', $link);
		$link = '<div class="more-link-wrap">' . $link . '</div>';
		return $link;
	}
	add_filter('the_content_more_link', 'tagdiv_remove_more_link_scroll');
}


/**
 * get theme versions and set the transient
 */
if ( ! function_exists( 'tagdiv_check_theme_version' )) {

	function tagdiv_check_theme_version() {

		// When it will be the next check
        set_transient( 'td_update_theme_' . TD_THEME_NAME, '1', 3 * HOUR_IN_SECONDS );

        tagdiv_util::update_option( 'theme_update_latest_version', '' );
        tagdiv_util::update_option( 'theme_update_versions', '' );

        $response = tagdiv_remote_http::get_page( 'https://cloud.tagdiv.com/wp-json/wp/v2/media?search=.zip' );

        if ( false !== $response ) {
            $zip_resources = json_decode( $response, true );
            $latest_version = [];
            $versions = [];

            usort( $zip_resources, function( $val_1, $val_2) {
            	$val_1 = trim( str_replace( [ TD_THEME_NAME, " " ], "", $val_1['title']['rendered'] ) );
            	$val_2 = trim( str_replace( [ TD_THEME_NAME, " " ], "", $val_2['title']['rendered'] ) );
                return version_compare($val_2, $val_1 );
            });

            foreach ( $zip_resources as $index => $zip_resource ) {
            	if ( ! empty( $zip_resource['title']['rendered'] ) && ! empty( $zip_resource['source_url'] ) && false !== strpos( $zip_resource['title']['rendered'], TD_THEME_NAME ) ) {
                    $current_version = trim( str_replace( [ TD_THEME_NAME, " " ], "", $zip_resource['title']['rendered'] ) );

                    if ( 0 === $index ) {
                        $latest_version = array(
                            $current_version => $zip_resource['source_url']
                        );
                    }
                    $versions[] = array(
                        $current_version => $zip_resource['source_url']
                    );
                }
            }

            if ( ! empty( $versions ) ) {
                tagdiv_util::update_option( 'theme_update_latest_version', json_encode( $latest_version ) );
                tagdiv_util::update_option( 'theme_update_versions', json_encode( $versions ) );

                if ( ! empty( $latest_version ) && is_array( $latest_version ) && count( $latest_version )) {
                    $latest_version_keys = array_keys( $latest_version );
                    if ( is_array( $latest_version_keys ) && count( $latest_version_keys ) ) {
                        $latest_version_serial = $latest_version_keys[0];

                        if ( 1 == version_compare( $latest_version_serial, TD_THEME_VERSION ) ) {

                            set_transient( 'td_update_theme_latest_version_' . TD_THEME_NAME, 1 );

                            add_filter( 'pre_set_site_transient_update_themes', function( $transient ) {

                                $latest_version = tagdiv_util::get_option( 'theme_update_latest_version' );
                                if ( ! empty( $latest_version ) ) {
                                    $args = array();
                                    $latest_version = json_decode( $latest_version, true );

                                    $latest_version_keys = array_keys( $latest_version );
                                    if ( is_array( $latest_version_keys ) && count( $latest_version_keys ) ) {
                                        $latest_version_serial = $latest_version_keys[ 0 ];
                                        $latest_version_url = $latest_version[$latest_version_serial];
                                        $theme_slug = get_template();

                                        $transient->response[ $theme_slug ] = array(
                                            'theme' => $theme_slug,
                                            'new_version' => $latest_version_serial,
                                            'url' => "https://tagdiv.com/" . TD_THEME_NAME,
                                            'clear_destination' => true,
                                            'package' => add_query_arg( $args, $latest_version_url ),
                                        );
                                    }
                                }

                                return $transient;
                            });
                            delete_site_transient('update_themes');
                        }
                    }
                }
            }

            return $versions;
        }

        return false;
	}
}





/* ----------------------------------------------------------------------------
 * Admin
 */
if ( is_admin() ) {

	/**
	 * Theme plugins.
	 */
	require_once TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/plugins/class-tgm-plugin-activation.php';

	add_action('tgmpa_register', 'tagdiv_required_plugins');

	if( !function_exists('tagdiv_required_plugins') ) {
		function tagdiv_required_plugins() {

			$config = array(
				'domain' => wp_get_theme()->get('Name'),    // Text domain - likely want to be the same as your theme.
				'default_path' => '',                       // Default absolute path to pre-packaged plugins
				//'parent_menu_slug' => 'themes.php',       // DEPRECATED from v2.4.0 - Default parent menu slug
				//'parent_url_slug' => 'themes.php',        // DEPRECATED from v2.4.0 - Default parent URL slug
				'parent_slug'  => 'themes.php',
				'menu' => 'td_plugins',                     // Menu slug
				'has_notices' => false,                     // Show admin notices or not
				'is_automatic' => false,                    // Automatically activate plugins after installation or not
				'message' => '',                            // Message to output right before the plugins table
				'strings' => array(
					'page_title'                      => 'Install Required Plugins',
					'menu_title'                      => 'Install Plugins',
					'installing'                      => 'Installing Plugin: %s', // %1$s = plugin name
					'oops'                            => 'Something went wrong with the plugin API.',
					'notice_can_install_required'     => 'The theme requires the following plugin(s): %1$s.',
					'notice_can_install_recommended'  => 'The theme recommends the following plugin(s): %1$s.',
					'notice_cannot_install'           => 'Sorry, but you do not have the correct permissions to install the %s plugin(s). Contact the administrator of this site for help on getting the plugin installed.',
					'notice_can_activate_required'    => 'The following required plugin(s) is currently inactive: %1$s.',
					'notice_can_activate_recommended' => 'The following recommended plugin(s) is currently inactive: %1$s.',
					'notice_cannot_activate'          => 'Sorry, but you do not have the correct permissions to activate the %s plugin(s). Contact the administrator of this site for help on getting the plugin activated.',
					'notice_ask_to_update'            => 'The following plugin(s) needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
					'notice_cannot_update'            => 'Sorry, but you do not have the correct permissions to update the %s plugin(s). Contact the administrator of this site for help on getting the plugin updated.',
					'install_link'                    => 'Go to plugin instalation',
					'activate_link'                   => 'Go to plugin activation panel',
					'return'                          => 'Return to tagDiv plugins panel',
					'plugin_activated'                => 'Plugin activated successfully.',
					'complete'                        => 'All plugins installed and activated successfully. %s', // %1$s = dashboard link
					'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
				)
			);

			tgmpa( tagdiv_global::$theme_plugins_list, $config );
		}
	}

	if ( current_user_can( 'switch_themes' ) ) {

		// add panel to the wp-admin menu on the left
		add_action( 'admin_menu', function() {

			/* wp doc: add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position ); */
			add_menu_page('Theme panel', TD_THEME_NAME, "edit_posts", "td_theme_welcome", function (){
				require_once TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/tagdiv-view-welcome.php';
			}, null, 3);

			if ( current_user_can( 'activate_plugins' ) ) {
				add_submenu_page("td_theme_welcome", 'Plugins', 'Plugins', 'edit_posts', 'td_theme_plugins',
					function (){
						require_once TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/tagdiv-view-theme-plugins.php';
					}
				);
			}

			add_submenu_page( "td_theme_welcome", 'Support', 'Support', 'edit_posts', 'td_theme_support',  function (){
				require_once TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/tagdiv-view-support.php';
			});


			global $submenu;
			$submenu['td_theme_welcome'][0][0] = 'Welcome';


		});

		// add the theme setup(install plugins) panel
		if ( ! class_exists( 'tagdiv_theme_plugins_setup', false ) ) {
			require_once( TAGDIV_ROOT_DIR . '/includes/wp-booster/wp-admin/plugins/class-tagdiv-theme-plugins-setup.php' );
		}

		add_action( 'after_setup_theme', function (){
			tagdiv_theme_plugins_setup::get_instance();
		});

		add_action('admin_enqueue_scripts', function() {
			add_editor_style(); // add the default style
		});

		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		WP_Filesystem();
	}
}
