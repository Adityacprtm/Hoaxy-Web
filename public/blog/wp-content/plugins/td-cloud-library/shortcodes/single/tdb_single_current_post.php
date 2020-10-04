<?php

class tdb_single_current_post extends td_block {

	function render( $atts, $content = null ) {
        parent::render( $atts ); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

	    global $tdb_state_single;

        $atts = shortcode_atts(
			array(
				'content_general' => base64_encode( __('Html code here! Even shortcodes! Replace this with your code and that\'s it.', 'td_composer' ) ),
				'el_class' => '',
			), $atts, 'tdb_current_post' );

		if ( is_null( $content ) || empty( $content ) ) {
			$content = $atts[ 'content_general' ];
		}

		$content = rawurldecode( base64_decode( strip_tags( $content ) ) );

        $buffy = '<div class="wpb_wrapper ' . $this->get_wrapper_class() . ' ' . $this->get_block_classes( array( $atts['el_class'] ) ) . '">';

        $buffy .= $this->get_block_css();

		$template_wp_query = $tdb_state_single->get_wp_query();
        if ( ! empty( $template_wp_query ) ) {
        	global $post;
        	global $wp_query;
        	$local_post = $post;
        	$local_wp_query = $wp_query;
        	$post = $template_wp_query->post;
        	$wp_query = $template_wp_query;
        }

        $buffy .= '<div class="td-fix-index">' . do_shortcode( shortcode_unautop( $content ) ) . '</div>';

        if ( ! empty( $local_wp_query ) ) {
        	global $wp_query;
        	$wp_query = $local_wp_query;

        	if ( ! empty( $local_post ) ) {
	            global $post;
	            $post = $local_post;
	        }
        }

        $buffy .= '</div>';

        return $buffy;
    }

}
