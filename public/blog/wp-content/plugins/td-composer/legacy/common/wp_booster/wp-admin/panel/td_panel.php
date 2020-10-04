<?php
/**
 * the start of the panel
 */

class td_panel {

	private static $instance = null;

	public static function get_instance(){
		if ( is_null(self::$instance) ) {
			self::$instance = new td_panel();
		}
		return self::$instance;
	}

    function __construct() {

	    // add panel to the wp-admin menu on the left
	    add_action('admin_menu', array($this, 'register_theme_panel'), 11);

        if (isset($_GET['page']) and $_GET['page'] == 'td_theme_panel') {
            add_filter('admin_body_class', array($this, 'add_body_class'));
        }

        add_filter('upload_mimes', 'td_upload_types');
        function td_upload_types($mime_types){
            $mime_types['woff'] = 'application/x-font-woff';
            return $mime_types;
        }

    }


    function add_body_class($classes) {
        $classes .= ' td-theme-panel-body ';
        return $classes;
    }


	/**
	 * register our theme panel via the hook
	 */
	function register_theme_panel() {
		add_submenu_page( "td_theme_welcome", 'Install demos', 'Install demos', 'edit_posts', 'td_theme_demos',  array($this, "td_theme_demos") );
		add_submenu_page( "td_theme_welcome", 'System status', 'System status', 'edit_posts', 'td_system_status',  array($this, "td_system_status") );
		add_submenu_page( "td_theme_welcome", 'Updates', 'Updates', 'edit_posts', 'td_theme_updates',  array($this, "td_theme_updates") );

		add_submenu_page( "td_theme_welcome", 'Theme panel', 'Theme panel', 'edit_posts', 'td_theme_panel',  array($this, "td_theme_panel") );
	}

	function td_theme_demos() {
		require_once 'td_view_install_demos.php';
	}

	function td_system_status() {
		require_once 'td_view_system_status.php';
	}

	function td_theme_updates() {
		require_once 'td_view_updates.php';
	}

	function td_theme_panel() {

		if ( !empty( $_REQUEST['td_page'] ) ) {
			if ( $_REQUEST['td_page'] == 'td_view_import_export_settings' ) {
				include 'td_view_import_export_settings.php';
			}
		} else {
			// load the panel
			include 'td_view_panel.php';
		}
	}
}

td_panel::get_instance();

/*  ----------------------------------------------------------------------------
    change the value of the button used to return the picture into panel
    It only changes the text from insert into post to Use this image
    @deprecated !!!! - will have to deprecate this and put proper upload form in the panel
 */
function td_replace_upload_thickbox_button_text($text, $translated_text) {
    if ($text == 'Insert into Post') {
        $referer = strpos(wp_get_referer(), 'td_upload');
        if($referer != '') {
            return 'Use this image';
        }
    }

    //return the default text
    return $translated_text;
}

function td_upload_image_options() {
    global $pagenow;

    if($pagenow == 'media-upload.php' or $pagenow == 'async-upload.php') {
        add_filter('gettext', 'td_replace_upload_thickbox_button_text' , 1, 3);
    }
}
add_action('admin_init', 'td_upload_image_options');







