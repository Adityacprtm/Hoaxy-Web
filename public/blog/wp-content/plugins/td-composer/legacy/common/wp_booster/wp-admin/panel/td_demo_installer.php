<?php
/**
 * Created by ra on 5/15/2015.
 */
class td_demo_installer {



	public $templates;


    function __construct() {
        //AJAX VIEW PANEL LOADING
        add_action( 'wp_ajax_td_ajax_demo_install', array( $this, 'ajax_demos_controller' ) );

        $this->templates = [];
    }


    function ajax_demos_controller() {



		// die if request is fake
	    check_ajax_referer('td-demo-install', 'td_magic_token');

        if (!current_user_can('switch_themes')) {
            die;
        }

        // try to extend the time limit
        @set_time_limit(240);


        $td_demo_action = td_util::get_http_post_val('td_demo_action');
        $td_demo_id = td_util::get_http_post_val('td_demo_id');



        /*  ----------------------------------------------------------------------------
            Uninstall button - do uninstall with content
         */
        if ($td_demo_action == 'uninstall_demo') {
            // remove our content
            td_demo_media::remove();
            td_demo_content::remove();
            td_demo_category::remove();
            td_demo_menus::remove();
            td_demo_widgets::remove();

            // restore all settings to the state before a demo was loaded
            $td_demo_history = new td_demo_history();
            $td_demo_history->restore_all();

            // update our state - no stack installed
            td_demo_state::update_state('', '');
        }




        /*  ----------------------------------------------------------------------------
            remove content before stack install
        */



        /*  ----------------------------------------------------------------------------
           Install content only - remove old settings
       */
        else if ($td_demo_action == 'remove_content_before_install_no_content') {

            // save the history - this class will save the history only when going from user settings -> stack
            $td_demo_history = new td_demo_history();
            $td_demo_history->save_all();



            // clean the user settings
            td_demo_media::remove();
            td_demo_content::remove();
            td_demo_category::remove();
            td_demo_menus::remove();
            td_demo_widgets::remove();

            // change our state
            td_demo_state::update_state($td_demo_id, 'no_content');

            // load panel settings
            $this->import_panel_settings(td_global::$demo_list[$td_demo_id]['folder'] . 'td_panel_settings.txt', false);
        }

        /*  ----------------------------------------------------------------------------
            Install with no content
        */
        else if ($td_demo_action == 'install_no_content_demo') {
            td_demo_state::update_state($td_demo_id, 'no_content');
            // load panel settings - this will also recompile the css
            $this->import_panel_settings(td_global::$demo_list[$td_demo_id]['folder'] . 'td_panel_settings.txt', false);
        }





        // step 1
        else if ($td_demo_action == 'remove_content_before_install') {

            // save the history - this class will save the history only when going from user settings -> stack
            $td_demo_history = new td_demo_history();
            $td_demo_history->save_all();



            // clean the user settings
            td_demo_media::remove();
            td_demo_content::remove();
            td_demo_category::remove();
            td_demo_menus::remove();
            td_demo_widgets::remove();

            // change our state
            td_demo_state::update_state($td_demo_id, 'full');

            // load panel settings
            $this->import_panel_settings(td_global::$demo_list[$td_demo_id]['folder'] . 'td_panel_settings.txt', true);
        }
        /*  ----------------------------------------------------------------------------
            install Full
        */
        else if ($td_demo_action == 'td_media_1') {


            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_1.php');
        }


        else if ($td_demo_action == 'td_media_2') {
	        //echo 'sss';
            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_2.php');
        }
        else if ($td_demo_action == 'td_media_3') {

            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_3.php');
        }
        else if ($td_demo_action == 'td_media_4') {
            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_4.php');
        }
        else if ($td_demo_action == 'td_media_5') {
            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_5.php');
        }
        else if ($td_demo_action == 'td_media_6') {
            // load the media import script
            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_media_6.php');
        }
        else if ($td_demo_action == 'td_import')  {

        	$api_url = 'https://cloud.tagdiv.com/demos/' . TD_THEME_NAME . '/' . $td_demo_id . '/pages/';
	        $api_index_url = $api_url . 'index';

            $api_response = td_remote_http::get_page( $api_index_url, __CLASS__);

            //check response
            if ($api_response === false) {

                td_log::log(__FILE__, __FUNCTION__, 'Failed to get demo settings', $api_index_url);

            } else {

	            $template_files = explode( "\n", $api_response );

	            foreach ( $template_files as $template_file ) {
	            	$template_file = trim( $template_file );
		            $current_url      = $api_url . $template_file;

		            $current_response = td_remote_http::get_page( $current_url, __CLASS__ );

		            if ( $current_response === false ) {
			            td_log::log( __FILE__, __FUNCTION__, 'Failed to get demo settings', $current_url );
		            } else {
		            	$this->templates[$template_file] = $current_response;
		            }
	            }
            }

            require_once(td_global::$demo_list[$td_demo_id]['folder'] . 'td_import.php');

            $this->register_demo($td_demo_id);

        } else if ( file_exists(td_global::$demo_list[$td_demo_id]['folder'] . $td_demo_action . '.php')) {

        	if ( 0 === strpos( $td_demo_action, 'td_import_' )) {

		        $api_url       = 'https://cloud.tagdiv.com/demos/' . TD_THEME_NAME . '/' . $td_demo_id . '/pages/';
		        $api_index_url = $api_url . 'index';

		        $api_response = td_remote_http::get_page( $api_index_url, __CLASS__ );

		        //check response
		        if ( $api_response === false ) {

			        td_log::log( __FILE__, __FUNCTION__, 'Failed to get demo settings', $api_index_url );

		        } else {

			        $template_files = explode( "\n", $api_response );

			        foreach ( $template_files as $template_file ) {
				        $template_file = trim( $template_file );
				        $current_url   = $api_url . $template_file;

				        $current_response = td_remote_http::get_page( $current_url, __CLASS__ );

				        if ( $current_response === false ) {
					        td_log::log( __FILE__, __FUNCTION__, 'Failed to get demo settings', $current_url );
				        } else {
				        	$this->templates[ $template_file ] = $current_response;
				        }
			        }
		        }

		        $this->register_demo($td_demo_id);
	        }

        	require_once(td_global::$demo_list[$td_demo_id]['folder'] . $td_demo_action . '.php');
        }
    }


    private function register_demo( $demo_id ) {

    	$server_addr = "https://cloud.tagdiv.com";
    	$token = td_remote_http::get_page( $server_addr . "/wp-json/td-register-install-demo/get_token/", __CLASS__);
        if ( ! empty( $token )) {
            td_remote_http::get_page( $server_addr . "/wp-json/td-register-install-demo/install_demo/?theme_name=" . TD_THEME_NAME . "&version=" . TD_THEME_VERSION . "&demo_id=$demo_id&_nonce=" . $token . "&host=" . $_SERVER['HTTP_HOST'], __CLASS__);
        }
    }


    public function import_panel_settings($file_path, $empty_ignored_settings = false) { //it's public only for testing
	    $td_options = &td_options::get_all_by_ref();

        // this settings will be "" out when any of the imports is runned
        $ignored_settings = array(
            'tds_logo_upload',
            'tds_logo_upload_r',
            'tds_favicon_upload',
            'tds_logo_menu_upload',
            'tds_logo_menu_upload_r',
            'tds_footer_logo_upload',
            'tds_footer_retina_logo_upload',
            'tds_site_background_image',
            'category_options',
            'td_ads',
            'sidebars'

        );

        $not_touchable = array(
        	'theme_update_versions',
	        'theme_update_to_version',
	        'theme_update_latest_version'
        );

        foreach ( $not_touchable as $item) {
        	$not_touchable[$item] = td_util::get_option($item);
        }


        //read the settings file
        $file_settings = apply_filters( 'td_demo_installer', $file_path );

        if ( ! td_util::tdc_is_installed() || ! is_array( $file_settings ) ) {
        	return;
        }

        //apply td_cake variables
        $dbks = array_keys(td_util::$e_keys);
        $dbk = td_handle::get_var($dbks[1]);
        $dbm = td_handle::get_var($dbks[0]);
        $file_settings[$dbm] = td_options::get($dbm);

        $file_settings[$dbk] = td_util::get_option_('td_cake_status');
        $file_settings[$dbk . 'tp'] = td_util::get_option_('td_cake_status_time');
        $file_settings[$dbk . 'ta'] = td_util::get_option_('td_cake_lp_status');

	    $file_settings['td_version'] = td_util::get_option('td_version');
        $file_settings['td_timestamp_install_plugins'] = td_util::get_option('td_timestamp_install_plugins');


        if ($empty_ignored_settings === true) {
            // we empty the ignored settings
	        $td_options = $file_settings;
            foreach ($ignored_settings as $setting) {
	            if (isset($td_options[$setting])) {
		            unset($td_options[$setting]);
	            }
                //td_global::$td_options[$setting] = '';
            }
        } else {
            // we leave the ignored settings alone
            foreach ($file_settings as $setting_id => $setting_value) {
                if (!in_array($setting_id, $ignored_settings)) {
	                $td_options[$setting_id] = $setting_value;
                }
            }
        }

        foreach ( $not_touchable as $item) {
        	$td_options[$item] = $not_touchable[$item];
        }

        $generated_css = td_css_generator();

        if (function_exists('tdsp_css_generator')) {
        	$generated_css .= tdsp_css_generator();
        }

        //compile user css if any
	    $td_options['tds_user_compile_css'] = $generated_css;
        //write the changes to the database
	    td_options::schedule_save();
        //update_option(TD_THEME_OPTIONS_NAME, td_global::$td_options);
    }

}

td_global::$td_demo_installer = new td_demo_installer();
