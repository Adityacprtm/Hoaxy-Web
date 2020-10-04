<?php
/**
 * Mobile theme wp blocks editor support 
 */

/**
 * Enqueue wp blocks editor assets
 */
add_action( 'enqueue_block_editor_assets', function(){
	
	if (TDC_DEPLOY_MODE == 'deploy') {
		wp_enqueue_script(
			'tdBlocksEditorAssets',
			TDC_URL . '/mobile/js/js_mob_files_for_admin.min.js',
			array('wp-editor', 'wp-blocks', 'lodash', 'wp-i18n', 'wp-element', 'wp-components', 'wp-rich-text'),
			TD_COMPOSER,
			true
		);
	} else {
		wp_enqueue_script(
			'tdBlocksEditorAssets',
			TDC_URL . '/mobile/includes/js_dev/tdBlocksEditorAssets.js',
			array('wp-editor', 'wp-blocks', 'lodash', 'wp-i18n', 'wp-element', 'wp-components', 'wp-rich-text'),
			TD_COMPOSER,
			true
		);
	}

	wp_add_inline_script( 'tdBlocksEditorAssets',
		sprintf( 'var wpTdEditor = %s;', wp_json_encode( array(
			'possibleStates' => array( 'enabled', 'disabled' ),
			'defaultStatusMobTheme' => 'enabled',
			'defaultStatusPageGrid' => 'disabled'
		) ) ),
		'before'
	);
});

/**
 * Register the mobile theme status post meta
 */
add_action( 'wp_loaded', function() {
	register_meta(
		'post',
		'tdm_status',
		array(
			'sanitize_callback' => 'sanitize_status',
			'type'              => 'string',
			'description'       => 'tagDiv Mobile Theme Status for the current post.',
			'show_in_rest'      => true,
			'single'            => true,
		)
	);
	register_meta(
		'post',
		'tdm_grid_status',
		array(
			'sanitize_callback' => 'sanitize_status',
			'type'              => 'string',
			'description'       => 'tagDiv Mobile Theme Page Grid Status for the current page.',
			'show_in_rest'      => true,
			'single'            => true,
		)
	);
});

/**
 * Sanitize the mobile theme post meta status.
 *
 * @param string $status
 * @return string sanitized status, empty string when invalid.
 */
function sanitize_status( $status ) {
	$status = strtolower( trim( $status ) );
	if ( ! in_array( $status, array( 'enabled', 'disabled' ), true ) ) {
		$status = '';
	}
	return $status;
}

