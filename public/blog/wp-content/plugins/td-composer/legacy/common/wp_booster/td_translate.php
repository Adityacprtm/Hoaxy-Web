<?php
/**
 * td_translate.php
 * no td_util loaded, no access to settings
 */
global $td_translation_map_user, $td_translation_map;


/**
 * @since Newsmag 1.5
 * use mb_strtolower to obtain UTF8 lowercases etc
 * @see http://php.net/manual/en/function.mb-strtoupper.php
 * @see http://php.net/manual/en/function.mb-strtolower.php
 *
 * for Capitalization of first letter, not yet decided on: http://stackoverflow.com/questions/2517947/ucfirst-function-for-multibyte-character-encodings
 */


// The 'SitePress' class is defined by WPML plugin. It's better using it instead of is_active_plugin( $plugin_file_path ) because the $plugin_file_path can vary (maybe the user changes the name of the plugin folder)
if (class_exists('SitePress', false)) {

	//read the user translations
	$td_translation_map_user = array();

	function td_on_translate_admin_notices() {
		?>
		<div class="notice notice-success is-dismissible">
			<p><?php echo 'WPML Plugin is active! When the plugin is active, the *.po - *.mo files are used instead of Theme Panel Translation.' ?></p>
		</div>
	<?php
	}

	add_action('admin_notices', 'td_on_translate_admin_notices');

	function td_on_add_wpml_class($classes) {
		$classes[] = 'td-wpml';
		return $classes;
	}

	add_filter('body_class','td_on_add_wpml_class');

} else {
	//read the user translations
	$td_translation_map_user = td_options::get_array('td_translation_map_user');
}




//the custom translation function
function __td($td_string, $td_domain = '') {
    global $td_translation_map_user, $td_translation_map;
    if (!empty($td_translation_map_user[$td_string])) {   //return the user translation
        return stripslashes($td_translation_map_user[$td_string]);
    } elseif (!empty($td_translation_map[$td_string])) { //return the default translation or from MO file
        return $td_translation_map[$td_string];
    } else {
        //no translation detected - return the string
        return $td_string;
    }
}


//echo custom translation function
function _etd($td_string, $td_domain = '') {
    echo __td($td_string, $td_domain);
}



/**
 * the Privacy Policy text is hardcoded in the new wp method
 * ONLY hook up if the user dosn't have another translation in po mo
 * @see get_the_privacy_policy_link
 */
add_filter('gettext', 'td_translate_privacy_policy', 10, 3);
function td_translate_privacy_policy($translation, $text, $domain) {
    if ($text == 'Privacy Policy' && $domain == 'default' && $translation == $text) {
        return __td('Privacy Policy');
    }
    return $translation;
}
