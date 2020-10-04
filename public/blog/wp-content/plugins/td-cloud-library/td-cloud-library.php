<?php
/*
Plugin Name: tagDiv Cloud Library
Plugin URI: http://tagdiv.com
Description: Access a huge collection of pre-made templates you can import on your website and customize on the frontend using the tagDiv Composer plugin.
Author: tagDiv
Version: 1.5 | built on 03.08.2020 12:34
Author URI: http://tagdiv.com
*/

//td_cloud location (local or live) - it's set to live automatically on deploy
define('TDB_CLOUD_LOCATION', 'live');

//hash
define('TD_CLOUD_LIBRARY', '65cef19a395d126a22dc75f80542df4b');

// the deploy mode: dev or deploy  - it's set to deploy automatically on deploy
define('TDB_DEPLOY_MODE', 'deploy');


define('TDB_TEMPLATE_BUILDER_DIR', dirname( __FILE__ ));
define('TDB_URL', plugins_url('td-cloud-library'));

//version check
require_once('tdb_version_check.php');

add_action('td_global_after', 'tdb_hook_td_global_after');
function tdb_hook_td_global_after() {

	//check active theme and automatically disable the plugin if the active theme doesn't support it
	if ( tdb_version_check::is_active_theme_compatible() === false ) {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}

	//check PHP version
	if (tdb_version_check::is_php_compatible() === false) {
		return;
	}

	//check theme version
	if (tdb_version_check::is_theme_compatible() === false) {
		return;
	}

	add_action('tdc_init', 'tdb_on_init_template_builder');
	function tdb_on_init_template_builder() {
		require_once( 'includes/tdb_functions.php' );
	}

}

add_action( 'admin_head', 'tdb_on_admin_head' );
function tdb_on_admin_head() {
	echo '<script type="text/javascript">var tdbPluginUrl = "' . TDB_URL . '"</script>';
}


add_action( 'wp_head', 'tdb_on_admin_head1' );
function tdb_on_admin_head1() {
    if (is_user_logged_in()) {
        echo '<script type="text/javascript">var tdbPluginUrl = "' . TDB_URL . '"</script>';
    }
}

/**
 *  Add 'tdb-template-type' input hidden field to the edit page.
 *  It's used by composer
 */
add_action( 'edit_form_top', 'tdc_on_edit_form_top' );
function tdc_on_edit_form_top() {
	global $post;
	$tdb_template_type = get_post_meta($post->ID, 'tdb_template_type', true);
	if ( empty( $tdb_template_type ) ) {
		$tdb_template_type = 'page';
	}
    echo '<input type="hidden" id="tdb-template-type" name="tdb-template-type" value="' . $tdb_template_type . '" />';
}

/**
 * register the custom post type CPT - this should happen regardless if we have the composer or not to maintain correct wp cpt
 */
add_action('init', 'tdb_on_init_cpt');
function tdb_on_init_cpt() {

	/**
	 * add the tdb_templates custom post type
	 * https://codex.wordpress.org/Function_Reference/register_post_type
	 */

    $labels = array(
        'name'               => 'Cloud Templates',
        'singular_name'      => 'Cloud Template',
        'menu_name'          => 'Cloud Templates',
        'name_admin_bar'     => 'Cloud Template',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Template',
        'new_item'           => 'New Template',
        'edit_item'          => 'Edit Template',
        'view_item'          => 'View Template',
        'all_items'          => 'All Templates',
        'search_items'       => 'Search Templates',
        'not_found'          => 'No templates found.',
        'not_found_in_trash' => 'No templates found in Trash.'
    );

	$args = array(
		'public' => true,
//		'label'  => 'Cloud Templates',
        'labels'  => $labels,
		'supports' => array( // here we specify what the taxonomy supports
			'title',
			'editor',
			'revisions'
		),
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'tdb_templates', $args );
}



/**
 * Flush permalinks
 */
register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
register_activation_hook( __FILE__, 'tdb_on_register_activation_hook' );
function tdb_on_register_activation_hook() {
	tdb_on_init_cpt();      // register the cpt
	flush_rewrite_rules();  // and... flush
}



// add the load template button on the welcome screen of td-composer - last (11 priority)
add_action('tdc_welcome_panel_text', function() {
    if (tdc_util::get_get_val('tdbTemplateType') !== false) {
        ?>
        <div class="tdc-sidebar-w-button tdc-zone-button">Website Manager</div>
        <?php
    }
}, 11);

// remove wpml translation metabox for tdb_templates
add_action( 'admin_head', function() {
	remove_meta_box('icl_div_config', 'tdb_templates', 'normal');
}, 11);


if (class_exists('SitePress')) {

    // set tdb_templates post types to default language, otherwise they can't be used in translations
    add_action('save_post_tdb_templates', 'tdb_on_save_post', 10, 2);
    function tdb_on_save_post($post_id, $post){

        $flag = 'NEW_CLOUD_TEMPLATE';
        $post_title = get_the_title( $post_id);

        if ( 0 === strpos( $post_title, $flag ) ) {
            $post->post_title = str_replace($flag, '', $post_title);
            remove_action( 'save_post_tdb_templates', 'tdb_on_save_post');
            wp_update_post($post);

            $wpml_element_has_translations = apply_filters( 'wpml_element_has_translations', NULL, $post_id, 'tdb_templates' );

            if ( ! $wpml_element_has_translations) {

                global $sitepress;
                $wpml_default_language = $sitepress->get_default_language();

                $wpml_element_type = apply_filters( 'wpml_element_type', 'tdb_templates' );

                $set_language_args = array(
                    'element_id'    => $post_id,
                    'element_type'  => $wpml_element_type,
                    'trid'          => $post_id,
                    'language_code' => $wpml_default_language,
                );

                do_action( 'wpml_set_element_language_details', $set_language_args );
            }
        }
    }


    // 1. set tdb_template_type meta for translations of tdb templates, to be known as valid tdb templates recognized by composer
    // 2. copy the existing meta of the translated post to the translation
    add_action('wpml_pro_translation_completed', function($new_post_id, $data_fields, $job) {

        if ( ! empty( $job->original_doc_id )) {

            $post_type = get_post_type($job->original_doc_id);

            // set tdb_template_type meta for translations of tdb templates, to be known as valid tdb templates recognized by composer
            if ( 'tdb_templates' === $post_type ) {
                $tdb_template_type = get_post_meta( $job->original_doc_id, 'tdb_template_type', true );

                if ( ! empty( $tdb_template_type ) ) {
                    update_post_meta($new_post_id, 'tdb_template_type', $tdb_template_type );
                }
            }


            // copy the existing meta of the translated post to the translation
            $existing_meta = get_post_meta($new_post_id, 'td_post_theme_settings', true);

            if ( ! empty( $existing_meta ) ) {

                $td_post_theme_settings = get_post_meta( $job->original_doc_id, 'td_post_theme_settings', true );
                update_post_meta($new_post_id, 'td_post_theme_settings', $td_post_theme_settings );
            }
        }

    }, 10, 3);
}



