<?php
/**
 * WP gutenberg blocks editor support
 * enqueue theme gutenberg blocks editor css/js/hooks assets.
 */

/**
 * Enqueue Gutenberg blocks assets for both frontend + backend.
 *
 * Assets enqueued:
 * 1. td_guten_blocks_styles.css - Frontend + Backend.
 * 2. td_guten_blocks_editor.css - Backend.
 * 3. js_files_for_guten_blocks_editor.js - Backend.
 */
function td_guten_blocks_assets() {

	// Enqueue block styles for both frontend + backend.
	// Not used
//	wp_enqueue_style(
//		'td-guten-blocks-style-css',
//		TDC_URL_LEGACY . '/assets/css/td_guten_blocks_styles.css', // Block style CSS.
//		array( 'wp-editor' ), // Dependency to include the CSS after it.
//		TD_COMPOSER
//	);

	// Enqueue block editor styles for backend.
	if ( TDC_DEPLOY_MODE == 'dev' ) {
		wp_enqueue_style(
			'td-guten-blocks-editor-less',
			TDC_URL_LEGACY . '/td_less_style.css.php?part=guten-editor-styles',
			array( 'wp-edit-blocks' ),
			TD_COMPOSER
		);
	} else {
		wp_enqueue_style(
			'td-guten-blocks-editor-css',
			TDC_URL_LEGACY . '/assets/css/td_guten_blocks_editor.css', // Block editor CSS.
			array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
			TD_COMPOSER
		);
	}

	// Enqueue blocks editor script for backend.
	if ( TDC_DEPLOY_MODE == 'dev' ) {
		wp_enqueue_script(
			'td-guten-blocks-js',
			TDC_URL_LEGACY . '/includes/js_files/tdGutenBlocksEditor.js',
			array(
				'wp-blocks',
				'wp-i18n',
				'wp-dom-ready',
				'wp-element',
				'wp-editor',
				'wp-rich-text',
				'wp-components',
				'wp-date',
				'wp-compose',
				'wp-hooks'
			), // Dependencies, defined above.
			TD_COMPOSER,
			true
		);
	} else {
		wp_enqueue_script(
			'td_js_for_guten_blocks_editor',
			TDC_URL_LEGACY . '/js/td_js_for_guten_blocks_editor.min.js',
			array(
				'wp-blocks',
				'wp-i18n',
				'wp-element',
				'wp-editor',
				'wp-rich-text',
				'wp-components',
				'wp-date',
				'wp-compose',
				'wp-hooks'
			), // Dependencies, defined above.
			TD_COMPOSER,
			true
		);
	}
}

// Hook: Blocks Editor Assets.
add_action( 'enqueue_block_editor_assets', 'td_guten_blocks_assets' );

// Hook: Gutenberg Blocks Categories: adds a new gut blocks editor > blocks category
add_filter( 'block_categories', function ( $categories, $post ){
	if ( $post->post_type !== 'post' ) {
		return $categories;
	}
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'td-category',
				'title' => __( 'tagDiv Blocks', TD_THEME_NAME ),
				'icon'  => 'wordpress',
			),
		)
	);
}, 10, 2 );
























