<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 07.03.2019
 * Time: 16:15
 */

class td_config_legacy {



	static function init() {

        require_once('includes/widgets/td_page_builder_widgets.php'); // widgets

		// do not load button shortcode on mobile theme, the mobile theme loads its own button shortcode
		if ( ! td_util::is_mobile_theme() ) {
			require_once('includes/shortcodes/td_misc_shortcodes.php');
		}

        require_once('includes/td_css_generator.php');


	}


}

td_config_legacy::init();