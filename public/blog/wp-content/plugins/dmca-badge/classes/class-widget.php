<?php

class DMCA_Badge_Widget extends WP_Widget {
    
    function __construct() {
		
        parent::__construct( 
            'dmca_widget_badge', 
            __('DMCA Website Protection Badge', 'dmca-badge'), 
            array( 
                'description' => __( 'Display your chosen DMCA Website Protection Badge in any widget area of your site.', 'dmca-badge' ), 
            ) );
	}

	function widget( $args, $instance ){
		echo $args['before_widget'];
		echo DMCA_Badge_Plugin::this()->get_badge_html();
		echo $args['after_widget'];
	}

}
