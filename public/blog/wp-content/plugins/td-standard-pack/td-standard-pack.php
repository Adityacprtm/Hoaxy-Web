<?php
/*
Plugin Name: tagDiv Standard Pack
Plugin URI: http://tagdiv.com
Description: tagDiv Standard Pack Support
Author: tagDiv
Version: 1.0 BETA | built on 10.08.2020 14:58
Author URI: http://tagdiv.com
*/

//hash
define('TD_STANDARD_PACK', 'f0bb15f19d923f80d074525b9859334c');

// don't run anything else in the plugin, if the tagDiv Composer plugin is not active
if ( ! defined('TD_COMPOSER' ) ) {

    add_action( 'admin_notices', function (){
        ?>
        <div class="notice notice-error is-dismissible td-plugins-deactivated-notice">
            <p style="font-size: 15px; font-weight: 600; color: red; margin-bottom: 5px;">The tagDiv Standard Pack plugin requires the tagDiv Composer plugin!</p>
            <br>Please check the theme plugins section to update/install/activate theme plugins.</p>
            <p><a class="button button-secondary" href="admin.php?page=td_theme_plugins">Go to Theme Plugins</a></p>
        </div>
        <?php
    });

    return;
}

// the deploy mode: dev or deploy - it's set to deploy automatically on deploy
define("TD_STANDARD_PACK_DEPLOY_MODE", 'deploy');
define("TD_STANDARD_PACK_USE_LESS", false);

define('TDSP_URL', plugins_url('td-standard-pack'));
define('TSP_PATH', dirname( __FILE__ ));

//version check
require_once('tdsp_version_check.php');

add_action('td_wp_booster_legacy', function() {
    define('TDSP_THEME_URL', TDSP_URL . '/' . TD_THEME_NAME);
    define('TDSP_THEME_PATH', TSP_PATH . '/' . TD_THEME_NAME);

    define('TDSP_COMMON_URL', TDSP_URL . '/common');
    define('TDSP_COMMON_PATH', TSP_PATH . '/common');
    require_once(TD_THEME_NAME . '/functions.php');
}, 9); // priority set to 9 so it can run before composer

// load the wp booster
add_action('td_global_after', function () {
    require_once "common/common.php";
});


add_filter( 'body_class', function($classes) {
	$classes[] = 'td-standard-pack';
	return $classes;
});
add_filter( 'admin_body_class', function($classes) {
    return  "$classes td-standard-pack";
});