<?php

class td_block_instagram extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>
                /* @general_style */
                .td-instagram-element {
                    position: relative;
                    float: left;
                }
                .td-instagram-element a {
                    position: relative;
                    display: block;
                    height: 0;
                    padding-bottom: 100%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center center;
                }
                .td-instagram-element a:before {
                    content: '';
                    width: 94%;
                    height: 94%;
                    border: 1px solid #fff;
                    opacity: 0;
                    position: absolute;
                    top: 0;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    margin: auto;
                    -webkit-transition: opacity 0.3s ease 0s;
                    transition: opacity 0.3s ease 0s;
                }
                .td-instagram-element a:after {
                    content: '';
                    width: 100%;
                    height: 100%;
                    opacity: 0;
                    position: absolute;
                    top: 0;
                    left: 0;
                    background-color: #fff;
                    -webkit-transition: opacity 0.3s ease 0s;
                    transition: opacity 0.3s ease 0s;
                }
                .td-instagram-element:hover a:before {
                    opacity: 0.4;
                }
                .td-instagram-element:hover a:after {
                    opacity: 0.1;
                }
                .td-images-on-row-1 .td-instagram-element {
                    width: 100%;
                }
                .td-images-on-row-2 .td-instagram-element {
                    width: 50%;
                }
                .td-images-on-row-3 .td-instagram-element {
                    width: 33.33333333%;
                }  
                .td-images-on-row-4 .td-instagram-element {
                    width: 25%;
                }
                .td-images-on-row-5 .td-instagram-element {
                    width: 20%;
                }
                .td-images-on-row-6 .td-instagram-element {
                    width: 16.66666667%;
                }
                .td-images-on-row-7 .td-instagram-element {
                    width: 14.28571428571429%;
                }
                .td-images-on-row-8 .td-instagram-element {
                    width: 12.5%;
                }
                @media (max-width: 767px) {    
                    .td-images-on-row-6 .td-instagram-element {
                        width: 33.33333333%;
                    }
                }
                @media (max-width: 767px) {    
                    .td-images-on-row-4 .td-instagram-element,
                    .td-images-on-row-5 .td-instagram-element,
                    .td-images-on-row-7 .td-instagram-element,
                    .td-images-on-row-8 .td-instagram-element {
                        width: 50%;
                    }
                }
                .td-image-gap-2 {
                    margin: 0 -2px;
                }
                .td-image-gap-2 .td-instagram-element {
                    padding: 0 2px 4px;
                }
                .td-image-gap-5 {
                    margin: 0 -5px;
                }
                .td-image-gap-5 .td-instagram-element {
                    padding: 0 5px 10px;
                }
                .td_block_instagram .td-video-play-ico {
                    pointer-events: none;
                }
                .td_block_instagram .td-icon-insta-carousel {
                    left: 50%;
                }
                @media (max-width: 767px) {  
                    .td_block_instagram .td-instagram-element .td-video-play-ico {
                        width: 24px;
                        height: 24px;
                        font-size: 24px;
                    }
                }
                .td-instagram-header {
                    display: flex;
                    align-items: center;
                    position: relative;
                    margin-bottom: 16px;
                }
                .td-instagram-profile-image {
                    position: relative;
                    width: 60px;
                    height: 60px;
                    border-radius: 60px;
                    overflow: hidden;
                    margin-right: 12px;
                    float: left;
                }
                .td-instagram-profile-image-elem {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                }
                .td-instagram-meta {
                    margin-top: -2px;
                    font-size: 13px;
                    color: #000;
                }
                .td-instagram-button {
                    position: absolute;
                    top: 14px;
                    right: 0;
                    padding: 8px 14px 9px;
                    border: 1px solid #ededed;
                    line-height: 1;
                    font-size: 13px;
                    color: #444;
                    -webkit-transition: all 0.2s ease 0s;
                    transition: all 0.2s ease 0s;
                }
                .td-instagram-button:hover {
                    border-color: #ccc;
                    text-decoration: none !important;
                }
                .td-instagram-user {
                    font-size: 15px;
                    font-weight: 600;
                }
                .td-instagram-user a {
                    line-height: 26px;
                    color: #4db2ec;
                }
                .td-instagram-user a:hover {
                    text-decoration: none !important;
                }
                .td-instagram-followers span {
                    font-weight: 600;
                }
                .td_block_instagram .td-column-1 .td-images-on-row-3 .td-video-play-ico,
                .td_block_instagram .td-column-1 .td-images-on-row-4 .td-video-play-ico,
                .td_block_instagram .td-column-1 .td-images-on-row-5 .td-video-play-ico,
                .td_block_instagram .td-column-1 .td-images-on-row-6 .td-video-play-ico,
                .td_block_instagram .td-column-1 .td-images-on-row-7 .td-video-play-ico,
                .td_block_instagram .td-column-1 .td-images-on-row-8 .td-video-play-ico {
                    width: 24px;
                    height: 24px;
                    font-size: 24px;
                }
                @media (min-width: 768px) and (max-width: 1018px) {
                    .td_block_instagram .td-column-1 .td-instagram-button {
                        display: none;
                    }
                }
                .td_block_instagram .td-column-2 .td-images-on-row-5 .td-video-play-ico,
                .td_block_instagram .td-column-2 .td-images-on-row-6 .td-video-play-ico,
                .td_block_instagram .td-column-2 .td-images-on-row-7 .td-video-play-ico,
                .td_block_instagram .td-column-2 .td-images-on-row-8 .td-video-play-ico {
                    width: 24px;
                    height: 24px;
                    font-size: 24px;
                }
                .td_block_instagram .td-column-3 .td-images-on-row-7 .td-video-play-ico,
                .td_block_instagram .td-column-3 .td-images-on-row-8 .td-video-play-ico {
                    width: 24px;
                    height: 24px;
                    font-size: 24px;
                }
                .td_block_instagram .td-instagram-user a {
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    max-width: 100%;
                    display: block;
                    margin-right: 80px;
                }
            
            

                /* @handle_color */
				.$unique_block_class .td-instagram-user a {
					color: @handle_color;
				}
				/* @followers_color */
				.$unique_block_class .td-instagram-followers {
					color: @followers_color;
				}
				
				
				/* @btn_color */
				.$unique_block_class .td-instagram-button {
					color: @btn_color;
				}
				/* @btn_border_color */
				.$unique_block_class .td-instagram-button {
					border-color: @btn_border_color;
				}



				/* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_handle */
				.$unique_block_class .td-instagram-user a {
					@f_handle
				}
				/* @f_followers */
				.$unique_block_class .td-instagram-followers {
					@f_followers
				}
				/* @f_btn_text */
				.$unique_block_class .td-instagram-button {
					@f_btn_text
				}
				
				/* @mix_type */
                .$unique_block_class .td-instagram-element:before {
                    content: '';
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    opacity: 1;
                    transition: opacity 1s ease;
                    -webkit-transition: opacity 1s ease;
                    mix-blend-mode: @mix_type;
                    z-index: 1;
                    top: 0;
                }
                /* @color */
                .$unique_block_class .td-instagram-element:before {
                    background: @color;
                }
                /* @mix_gradient */
                .$unique_block_class .td-instagram-element:before {
                    @mix_gradient;
                }
                
                
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .td-instagram-element:after {
                        content: '';
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        opacity: 0;
                        transition: opacity 1s ease;
                        -webkit-transition: opacity 1s ease;
                        mix-blend-mode: @mix_type_h;
                        z-index: 1;
                        top: 0;
                    }
                    .$unique_block_class .td-instagram-element:hover:after {
                        opacity: 1;
                    }
                }
                
                /* @color_h */
                .$unique_block_class .td-instagram-element:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                .$unique_block_class .td-instagram-element:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                .$unique_block_class .td-instagram-element:hover:before {
                    opacity: 0;
                }
                    
                /* @effect_on */
                .$unique_block_class .td-instagram-element {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
                    -webkit-transition: all 1s ease;
                }
                /* @effect_on_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .td-instagram-element:hover {
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

        /*-- GENERAL -- */
        $res_ctx->load_settings_raw( 'general_style', 1 );




        // heading text color
        $res_ctx->load_settings_raw( 'handle_color', $res_ctx->get_shortcode_att('handle_color') );

        // heading background color
        $res_ctx->load_settings_raw( 'followers_color', $res_ctx->get_shortcode_att('followers_color') );



        /*-- BUTTON -- */
        // currency name color
        $res_ctx->load_settings_raw( 'btn_color', $res_ctx->get_shortcode_att('btn_color') );

        // currency value color
        $res_ctx->load_settings_raw( 'btn_border_color', $res_ctx->get_shortcode_att('btn_border_color') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_handle' );
        $res_ctx->load_font_settings( 'f_followers' );
        $res_ctx->load_font_settings( 'f_btn_text' );

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
     * Disable loop block features. This block does not use a loop and it dosn't need to run a query.
     */
    function __construct() {
        parent::disable_loop_block_features();
    }


    function render($atts, $content = null) {

        parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        if (empty($td_column_number)) {
            $td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
        }

        $buffy = ''; //output buffer
        $buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

        //get the block js
        $buffy .= $this->get_block_css();

        // block title wrap
        $buffy .= '<div class="td-block-title-wrap">';
        $buffy .= $this->get_block_title();
        $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
        $buffy .= '</div>';

        $buffy .= '<div id=' . $this->block_uid . ' class="td-instagram-wrap td_block_inner td-column-' . $td_column_number . '">';
        $buffy.= td_instagram::render_generic($atts);
        $buffy .= '</div>';
        $buffy .= '</div>';
        return $buffy;
    }
}