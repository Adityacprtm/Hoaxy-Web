<?php

class td_global_mob {
	static $get_parent_template_directory = '';
	static $get_parent_template_directory_uri = '';

	static $js_files = array();
	static $js_files_main = array();
	static $js_mob_files_for_admin = array (
		'tdBlocksEditorAssets' => 	'/mobile/includes/js_dev/tdBlocksEditorAssets.js'
	);
	static $typography_settings_list = array();
}

td_global_mob::$get_parent_template_directory = td_mobile_theme::$main_dir_path;
td_global_mob::$get_parent_template_directory_uri = td_mobile_theme::$main_uri_path;