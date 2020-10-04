<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 5/8/2019
 * Time: 4:35 PM
 */

class tagdiv_old_plugins_deactivate {

	public static $td_plugins_deactivated = array();

	function __construct() {
		self::td_deactivate_old_plugins();
		add_action( 'tgmpa_register', array( $this, 'td_deactivate_message' ), 12 );
	}

	static function td_deactivate_old_plugins() {

		if ( TD_DEPLOY_MODE === 'dev' || TD_DEPLOY_MODE === 'demo' ) {
			return;
		}

		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		$plugins_to_deactivate = array();
		$td_db_store_deactivated_plugins = array();

		foreach ( tagdiv_global::get_td_plugins() as $constant => $settings ) {
			$plugin_slug = strtolower( str_replace('_', '-', $constant ) );
			$plugin = $plugin_slug . '/' . $plugin_slug . '.php';

			//except AMP which is an external plugin
			if( $plugin == 'amp/amp.php' ) {
				continue;
			}

			// get the td_config plugin data array
			$config_plugin_data_array = array();

			foreach ( tagdiv_global::$theme_plugins_list as $theme_plugin ) {
				if ( $theme_plugin['td_class'] === $settings['class'] ) {
					$config_plugin_data_array = $theme_plugin;
				}
			}

			if ( ! empty( $config_plugin_data_array ) && tagdiv_util::is_active( $config_plugin_data_array ) ) {
				$plugin_version = null;
				if ( defined( $constant ) ) {
					$plugin_version = constant( $constant );
				}

				if ( $plugin_version === null || $plugin_version !== $settings[ 'version' ] ) {
					$plugins_to_deactivate[] = $plugin;
					self::$td_plugins_deactivated[$plugin_slug] = $plugin;

					$td_db_store_deactivated_plugins[$plugin_slug] = $settings['version'];
				}
			}
		}

		// store a list of plugins deactivated by theme
		if ( !empty( $td_db_store_deactivated_plugins ) ) {

			$theme_deactivated_plugins_array = tagdiv_options::get_array( 'td_theme_deactivated_plugins' );

			if ( empty( $theme_deactivated_plugins_array ) ) {
				tagdiv_options::update_array('td_theme_deactivated_plugins', $td_db_store_deactivated_plugins );
			} else {
				tagdiv_options::update_array('td_theme_deactivated_plugins', array_merge( $theme_deactivated_plugins_array, $td_db_store_deactivated_plugins ) );
			}

		}

		if ( !empty( $plugins_to_deactivate ) ) {

			if ( in_array('td-composer/td-composer.php', $plugins_to_deactivate ) ) {
				if ( class_exists( 'td_panel', false ) ) {
					remove_action( 'admin_menu', array( td_panel::get_instance(), 'register_theme_panel' ), 11 );
				}
				if ( class_exists( 'td_js', false ) ) {
					remove_action( 'admin_menu', array( td_js::get_instance(), 'td_js_register_panel' ), 12 );
				}
			}
			deactivate_plugins( $plugins_to_deactivate );
		}
	}

	function td_deactivate_message() {

		//don't display this notification on Welcome and Plugins page
		if ( isset( $_GET['page'] ) && ( $_GET['page'] === 'td_theme_welcome' || $_GET['page'] === 'td_theme_plugins' ) ) {
			return;
		}

		if ( !empty( self::$td_plugins_deactivated ) ) {
			$message = '<p style="font-size: 16px; font-weight: 600; color: red; text-transform: uppercase; margin-bottom: 5px;">Plugins disabled automatically</p><p>The following plugins were disabled because they are incompatible with this version of ' . TD_THEME_NAME . ':</p>';

			foreach ( self::$td_plugins_deactivated as $plugin_slug => $plugin ) {
				$plugin_data = get_plugin_data( ABSPATH . 'wp-content/plugins/' . $plugin );
				$message .= '<li>' . $plugin_data['Name'] . '</li>';
			}

			$message .= '<p>For update please check the <a class="button button-secondary" href="admin.php?page=td_theme_plugins">plugins section </a></p>';
			new tagdiv_admin_notices($message, array('notice-error', 'is-dismissible', 'td-plugins-deactivated-notice'));
		}
	}

}

new tagdiv_old_plugins_deactivate();
