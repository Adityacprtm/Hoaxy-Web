<?php

require_once(TDC_PATH . '/legacy/common/wp_booster/td_video_playlist_render.php');

//class for youtube playlist shortcode
class td_block_video_youtube extends td_block {

	/**
	 * Disable loop block features. This block does not use a loop and it doesn't need to run a query.
	 */
	function __construct() {
		parent::disable_loop_block_features();
	}

    function render($atts, $content = null) {
        return td_video_playlist_render::render_generic( $atts, 'youtube' );
    }
}