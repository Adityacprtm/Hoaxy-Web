<?php

/**
 * Class td_single_featured_image
 */


class tdb_category_bg_image extends td_block {
    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
    
                    /* @image */
                    .$unique_block_class .tdb-featured-image-bg {
                        background: url('@image');
                        background-size: cover;
                        background-repeat: no-repeat;
                    }
                    /* @image_alignment */
                    .$unique_block_class .tdb-featured-image-bg {
                        background-position: @image_alignment;
                    }
                    
                    /* @block_height */
                    .$unique_block_class .tdb-featured-image-bg {
                        padding-bottom: @block_height;
                    }
                    
                    /* @img_circle */
                    .$unique_block_class .tdb-featured-image-bg {
                        border-radius: 100%;
                        padding-bottom: 0;
                        overflow: hidden;
                        height: @img_circle;
                        width: @img_circle;
                    }
                    .$unique_block_class:after {
                        border-radius: 100%;
                    }
                    
                    /* @overlay_color */
                    .$unique_block_class:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: @overlay_color;
                    }
                    /* @overlay_gradient */
                    .$unique_block_class:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        @overlay_gradient
                    }
                    
                    /* @mix_type */
                    .$unique_block_class .tdb-featured-image-bg:before {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        opacity: 1;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type;
                        left: 0;
                    }
                    /* @color */
                    .$unique_block_class .tdb-featured-image-bg:before {
                        background: @color;
                    }
                    /* @mix_gradient */
                    .$unique_block_class .tdb-featured-image-bg:before {
                        @mix_gradient;
                    }
                    
                    
                    /* @mix_type_h */
                    @media (min-width: 1141px) {
                        .$unique_block_class .tdb-featured-image-bg:after {
                            content: '';
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            opacity: 0;
                            transition: opacity 1s ease;
                            -webkit-transition: opacity 1s ease;
                            mix-blend-mode: @mix_type_h;
                        }
                        .$unique_block_class:hover .tdb-featured-image-bg:after {
                            opacity: 1;
                        }
                    }
                    
                    /* @color_h */
                    .$unique_block_class .tdb-featured-image-bg:after {
                        background: @color_h;
                    }
                    /* @mix_gradient_h */
                    .$unique_block_class .tdb-featured-image-bg:after {
                        @mix_gradient_h;
                    }
                    /* @mix_type_off */
                    .$unique_block_class:hover .tdb-featured-image-bg:before {
                        opacity: 0;
                    }
                        
                    /* @effect_on */
                    .$unique_block_class .tdb-featured-image-bg {
                        filter: @fe_brightness @fe_contrast @fe_saturate;
                        transition: all 1s ease;
                        -webkit-transition: all 1s ease;
                    }
                    /* @effect_on_h */
                    @media (min-width: 1141px) {
                        .$unique_block_class:hover .tdb-featured-image-bg {
                            filter: @fe_brightness_h @fe_contrast_h @fe_saturate_h;
                        }
                    }
                    
                </style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        global $tdb_state_category;

	    // image size
        $category_image = $tdb_state_category->category_image->__invoke();
        $res_ctx->load_settings_raw( 'image', $category_image['background_image_src'] );

        // image alignment
        $image_alignment = $res_ctx->get_shortcode_att( 'image_alignment' );
        $res_ctx->load_settings_raw( 'image_alignment', 'top' );
        if( $image_alignment != '' ) {
            $res_ctx->load_settings_raw( 'image_alignment', $image_alignment );
        }

        // block height
        $block_height = $res_ctx->get_shortcode_att( 'block_height' );
	    $img_height = $block_height;
        $res_ctx->load_settings_raw( 'block_height', $block_height );
        if( $block_height != '' ) {
            if ( is_numeric( $block_height ) ) {
                $res_ctx->load_settings_raw( 'block_height', $block_height . 'px' );
	            $img_height = $block_height . 'px';
            }
        } else {
            $res_ctx->load_settings_raw( 'block_height', '600px' );
	        $img_height = '600px';
        }

	    /*-- circle image -- */
	    $img_circle = $res_ctx->get_shortcode_att( 'img_circle' );
	    if ($img_circle == true) {
		    $res_ctx->load_settings_raw( 'img_circle', $img_height );
	    }

        // overlay color
        $res_ctx->load_color_settings( 'overlay', 'overlay_color', 'overlay_gradient', '', '' );

        // mix blend
        $mix_type = $res_ctx->get_shortcode_att('mix_type');
        if ( $mix_type != '' ) {
            $res_ctx->load_settings_raw('mix_type', $res_ctx->get_shortcode_att('mix_type'));
        }
        $res_ctx->load_color_settings( 'mix_color', 'color', 'mix_gradient', '', '' );

        $mix_type_h = $res_ctx->get_shortcode_att('mix_type_h');
        if ( $mix_type_h != '' ) {
            $res_ctx->load_settings_raw('mix_type_h', $res_ctx->get_shortcode_att('mix_type_h'));
        } else {
            $res_ctx->load_settings_raw('mix_type_off', 1);
        }
        $res_ctx->load_color_settings( 'mix_color_h', 'color_h', 'mix_gradient_h', '', '' );

        // effects
        $res_ctx->load_settings_raw('fe_brightness', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate', 'saturate(1)');

        $fe_brightness = $res_ctx->get_shortcode_att('fe_brightness');
        if ($fe_brightness != '1') {
            $res_ctx->load_settings_raw('fe_brightness', 'brightness(' . $fe_brightness . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_contrast = $res_ctx->get_shortcode_att('fe_contrast');
        if ($fe_contrast != '1') {
            $res_ctx->load_settings_raw('fe_contrast', 'contrast(' . $fe_contrast . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        $fe_saturate = $res_ctx->get_shortcode_att('fe_saturate');
        if ($fe_saturate != '1') {
            $res_ctx->load_settings_raw('fe_saturate', 'saturate(' . $fe_saturate . ')');
            $res_ctx->load_settings_raw('effect_on', 1);
        }

        // effects hover
        $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(1)');
        $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(1)');
        $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(1)');

        $fe_brightness_h = $res_ctx->get_shortcode_att('fe_brightness_h');
        $fe_contrast_h = $res_ctx->get_shortcode_att('fe_contrast_h');
        $fe_saturate_h = $res_ctx->get_shortcode_att('fe_saturate_h');

        if ($fe_brightness_h != '1') {
            $res_ctx->load_settings_raw('fe_brightness_h', 'brightness(' . $fe_brightness_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_contrast_h != '1') {
            $res_ctx->load_settings_raw('fe_contrast_h', 'contrast(' . $fe_contrast_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        if ($fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('fe_saturate_h', 'saturate(' . $fe_saturate_h . ')');
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }
        // make hover to work
        if ($fe_brightness_h != '1' || $fe_contrast_h != '1' || $fe_saturate_h != '1') {
            $res_ctx->load_settings_raw('effect_on', 1);
        }
        if ($fe_brightness != '1' || $fe_contrast != '1' || $fe_saturate != '1') {
            $res_ctx->load_settings_raw('effect_on_h', 1);
        }

    }

    /**
     * Disable loop block features. This block does not use a loop and it doesn't need to run a query.
     */
    function __construct() {
        parent::disable_loop_block_features();
    }


    function render( $atts, $content = null ) {
        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        global $tdb_state_category;
        $category_image = $tdb_state_category->category_image->__invoke();


        $buffy = ''; //output buffer

        if( $category_image['background_image_src'] != '' ) {
            $buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

                //get the block css
                $buffy .= $this->get_block_css();

                //get the js for this block
                $buffy .= $this->get_block_js();


                $buffy .= '<div class="tdb-featured-image-bg"></div>';

            $buffy .= '</div>';
        }

        return $buffy;
    }

}