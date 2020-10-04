<?php

/**
 * Class td_single_author_box
 */
class tdb_single_author_box extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @box_padding */
                .$unique_block_class {
                    padding: @box_padding;
                }
                /* @all_border_width */
                .$unique_block_class {
                    border: @all_border_width @all_border_style @all_border_color;
                }
                
                /* @display_columns */
                .$unique_block_class .tdb-author-info {
                    width: auto;
                }
                /* @display_row */
                .$unique_block_class .tdb-author-photo {
                    display: inline-block;
                }
                .$unique_block_class .tdb-author-info {
                    display: inline-block;
                    width: 100%;
                }
                /* @align_vert_center */
                .$unique_block_class .tdb-author-photo,
                .$unique_block_class .tdb-author-info {
                    vertical-align: middle;
                }
                /* @align_vert_bottom */
                .$unique_block_class .tdb-author-photo,
                .$unique_block_class .tdb-author-info {
                    vertical-align: bottom;
                }
                /* @align_horiz_center */
                .$unique_block_class .tdb-block-inner {
                    text-align: center;
                }
                /* @align_horiz_right */
                .$unique_block_class .tdb-block-inner {
                    text-align: right;
                }
                
                
                
                /* @photo_size */
                .$unique_block_class .tdb-author-photo {
                    width: @photo_size;
                }
                /* @photo_space_right */
                .$unique_block_class .tdb-author-info {
                    padding-bottom: 0;
                    padding-left: @photo_space_right;
                }
                .$unique_block_class .tdb-author-photo {
                    transform: translateZ(0);
                    -webkit-transform: translateZ(0);
                }
                /* @photo_space_bottom */
                .$unique_block_class .tdb-author-info {
                    padding-top: @photo_space_bottom;
                    padding-left: 0;
                }
                .$unique_block_class .tdb-author-photo {
                    transform: translateZ(0);
                    -webkit-transform: translateZ(0);
                }
                /* @photo_radius */
                .$unique_block_class .avatar,
                .$unique_block_class .tdb-author-photo:before,
                .$unique_block_class .tdb-author-photo:after {
                    border-radius: @photo_radius;
                }
                
                
                
                /* @auth_color */
                .$unique_block_class .tdb-author-name {
                    color: @auth_color;
                }
                /* @add_name_margin */
                .$unique_block_class .tdb-author-name {
                    margin: @add_name_margin;
                }
                /* @auth_h_color */
                .$unique_block_class .tdb-author-name:hover {
                    color: @auth_h_color;
                }
                /* @url_color */
                .$unique_block_class .tdb-author-url {
                    color: @url_color;
                }
                /* @url_h_color */
                .$unique_block_class .tdb-author-url:hover {
                    color: @url_h_color;
                }
                /* @descr_color */
                .$unique_block_class .tdb-author-descr {
                    color: @descr_color;
                }
                /* @add_description_margin */
                .$unique_block_class .tdb-author-descr {
                    margin: @add_description_margin;
                }
                
                
                
                
                /* @icons_size */
				.$unique_block_class .tdb-social-item i {
					font-size: @icons_size;
					vertical-align: middle;
				}
				.$unique_block_class .tdb-social-item i.td-icon-twitter,
				.$unique_block_class .tdb-social-item i.td-icon-linkedin,
				.$unique_block_class .tdb-social-item i.td-icon-pinterest,
				.$unique_block_class .tdb-social-item i.td-icon-blogger,
				.$unique_block_class .tdb-social-item i.td-icon-vimeo {
					font-size: @icons_size_fix;
				}
				/* @icons_padding */
				.$unique_block_class .tdb-social-item {
					min-width: @icons_padding;
					height: @icons_padding;
				}
				.$unique_block_class .tdb-social-item i {
					line-height: @icons_padding;
				}
				/* @icons_margin_right */
				.$unique_block_class .tdb-social-item {
				    margin: @icons_margin_top_bottom @icons_margin_right @icons_margin_top_bottom 0;
				}
				
				/* @icons_color */
				.$unique_block_class .tdb-social-item i {
					color: @icons_color;
				}
				/* @icons_h_color */
				.$unique_block_class .tdb-social-item:hover i {
					color: @icons_h_color;
				}
				/* @icons_bg */
				.$unique_block_class .tdb-social-item {
					background-color: @icons_bg;
				}
				/* @icons_h_bg */
				.$unique_block_class .tdb-social-item:hover {
					background-color: @icons_h_bg;
				}
				
				/* @icons_border_radius */
				.$unique_block_class .tdb-social-item {
					border-radius: @icons_border_radius;
				}
				


				/* @f_auth */
				.$unique_block_class .tdb-author-name {
					@f_auth
				}
				/* @f_url */
				.$unique_block_class .tdb-author-url {
					@f_url
				}
				/* @f_descr */
				.$unique_block_class .tdb-author-descr {
					@f_descr
				}     
				
				/* @mix_type */
                .$unique_block_class .tdb-author-photo:before {
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
                    left: 0;
                }
                /* @color */
                .$unique_block_class .tdb-author-photo:before {
                    background: @color;
                }
                /* @mix_gradient */
                .$unique_block_class .tdb-author-photo:before {
                    @mix_gradient;
                }
                
                
                /* @mix_type_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .tdb-author-photo:after {
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
                        left: 0;
                    }
                    .$unique_block_class .tdb-author-photo:hover:after {
                        opacity: 1;
                    }
                    .$unique_block_class .tdb-author-photo {
                        pointer-events: auto;
                    }
                }
                
                /* @color_h */
                .$unique_block_class .tdb-author-photo:after {
                    background: @color_h;
                }
                /* @mix_gradient_h */
                .$unique_block_class .tdb-author-photo:after {
                    @mix_gradient_h;
                }
                /* @mix_type_off */
                .$unique_block_class .tdb-author-photo:hover:before {
                    opacity: 0;
                }
                .$unique_block_class .tdb-author-photo {
                    pointer-events: auto;
                }
                    
                /* @effect_on */
                .$unique_block_class .avatar {
                    filter: @fe_brightness @fe_contrast @fe_saturate;
                    transition: all 1s ease;
                    -webkit-transition: all 1s ease;
                }
                /* @effect_on_h */
                @media (min-width: 1141px) {
                    .$unique_block_class .tdb-author-photo:hover .avatar {
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

        // box padding
        $box_padding = $res_ctx->get_shortcode_att( 'box_padding' );
        $res_ctx->load_settings_raw( 'box_padding', $box_padding );
        if( $box_padding == '' ) {
            $res_ctx->load_settings_raw( 'box_padding', '21px' );
        } else if( $box_padding != '' && is_numeric( $box_padding )  ) {
            $res_ctx->load_settings_raw( 'box_padding', $box_padding . 'px' );
        }

        // border width
        $border_width = $res_ctx->get_shortcode_att( 'all_border_width' );
        $res_ctx->load_settings_raw( 'all_border_width', '1px' );
        if( $border_width != '' && is_numeric( $border_width ) ) {
            $res_ctx->load_settings_raw( 'all_border_width', $border_width . 'px' );
        }
        // border style
        $border_style = $res_ctx->get_shortcode_att( 'all_border_style' );
        $res_ctx->load_settings_raw( 'all_border_style', 'solid' );
        if( $border_style != '' ) {
            $res_ctx->load_settings_raw( 'all_border_style', $border_style );
        }

        // display
        $display = $res_ctx->get_shortcode_att( 'display' );
        // vertical align
        $align_vert = $res_ctx->get_shortcode_att('align_vert');
        // horizontal align
        $align_horiz = $res_ctx->get_shortcode_att('align_horiz');
        if( $display == '' ) {
            $res_ctx->load_settings_raw( 'display_columns', 1 );

            if( $align_vert == 'content-vert-center' ) {
                $res_ctx->load_settings_raw( 'align_vert_center', 1 );
            } else if ( $align_vert == 'content-vert-bottom' ) {
                $res_ctx->load_settings_raw( 'align_vert_bottom', 1 );
            }
        } else if( $display == 'row' ) {
            $res_ctx->load_settings_raw( 'display_row', 1 );

            if( $align_horiz == 'content-horiz-center' ) {
                $res_ctx->load_settings_raw( 'align_horiz_center', 1 );
            } else if ( $align_horiz == 'content-horiz-right' ) {
                $res_ctx->load_settings_raw( 'align_horiz_right', 1 );
            }
        }



        /*-- AUTHOR PHOTO -- */
        // author photo size
        $photo_size = $res_ctx->get_shortcode_att( 'photo_size' );
        $res_ctx->load_settings_raw( 'photo_size', '96px' );
        if( $photo_size != '' && is_numeric( $photo_size ) ) {
            $res_ctx->load_settings_raw( 'photo_size', $photo_size . 'px' );
        }

        // author photo space
        $photo_space = $res_ctx->get_shortcode_att( 'photo_space' );
        if( $display == '' ) {
            $res_ctx->load_settings_raw( 'photo_space_right', '21px' );
            if( $photo_space != '' && is_numeric( $photo_space ) ) {
                $res_ctx->load_settings_raw('photo_space_right', $photo_space . 'px');
            }
        } else if ( $display == 'row' ) {
            $res_ctx->load_settings_raw( 'photo_space_bottom', '21px' );
            if( $photo_space != '' && is_numeric( $photo_space ) ) {
                $res_ctx->load_settings_raw('photo_space_bottom', $photo_space . 'px');
            }
        }

        //author photo border radius
        $photo_radius = $res_ctx->get_shortcode_att( 'photo_radius' );
        $res_ctx->load_settings_raw( 'photo_radius', $photo_radius );
        if( $photo_radius != '' && is_numeric( $photo_radius ) ) {
            $res_ctx->load_settings_raw( 'photo_radius', $photo_radius . 'px' );
        }


        // border color
        $border_color = $res_ctx->get_shortcode_att( 'all_border_color' );
        $res_ctx->load_settings_raw( 'all_border_color', '#ededed' );
        if( $border_color != '' ) {
            $res_ctx->load_settings_raw( 'all_border_color', $border_color );
        }



        /*-- META INFO -- */
        // add name margin
        $add_name_margin = $res_ctx->get_shortcode_att( 'add_name_margin' );
        $res_ctx->load_settings_raw( 'add_name_margin', $add_name_margin );
        if( $add_name_margin != '' && is_numeric( $add_name_margin )  ) {
            $res_ctx->load_settings_raw( 'add_name_margin', $add_name_margin . 'px' );
        }

        // add description margin
        $add_description_margin = $res_ctx->get_shortcode_att( 'add_description_margin' );
        $res_ctx->load_settings_raw( 'add_description_margin', $add_description_margin );
        if( $add_description_margin != '' && is_numeric( $add_description_margin )  ) {
            $res_ctx->load_settings_raw( 'add_description_margin', $add_description_margin . 'px' );
        }



        /*-- SOCIAL ICONS -- */
        // icons size
        $icons_size = $res_ctx->get_shortcode_att( 'icons_size' );
        $res_ctx->load_settings_raw( 'icons_size',  $icons_size . 'px' );
        $res_ctx->load_settings_raw(  'icons_size_fix', $icons_size * 0.8  . 'px');

        // icons padding
        $res_ctx->load_settings_raw( 'icons_padding', $icons_size * $res_ctx->get_shortcode_att( 'icons_padding' ) . 'px' );

        // icons spacing
        $icons_spacing = $res_ctx->get_shortcode_att( 'icons_spacing' );
        if( $icons_spacing != '' ) {
            if ( is_numeric( $icons_spacing ) ) {
                $res_ctx->load_settings_raw( 'icons_margin_right',  $icons_spacing . 'px' );
                $res_ctx->load_settings_raw( 'icons_margin_top_bottom',  $icons_spacing / 2 . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'icons_margin_right', '14px' );
            $res_ctx->load_settings_raw( 'icons_margin_top_bottom', '7px' );
        }

        //icons border radius
        $icons_border_radius = $res_ctx->get_shortcode_att( 'icons_border_radius' );
        $res_ctx->load_settings_raw( 'icons_border_radius', $icons_border_radius );
        if( $icons_border_radius != '' && is_numeric( $icons_border_radius ) ) {
            $res_ctx->load_settings_raw( 'icons_border_radius', $icons_border_radius . 'px' );
        }



        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'auth_color', $res_ctx->get_shortcode_att( 'auth_color' ) );
        $res_ctx->load_settings_raw( 'auth_h_color', $res_ctx->get_shortcode_att( 'auth_h_color' ) );
        $res_ctx->load_settings_raw( 'url_color', $res_ctx->get_shortcode_att( 'url_color' ) );
        $res_ctx->load_settings_raw( 'url_h_color', $res_ctx->get_shortcode_att( 'url_h_color' ) );
        $res_ctx->load_settings_raw( 'descr_color', $res_ctx->get_shortcode_att( 'descr_color' ) );

        $res_ctx->load_settings_raw( 'icons_color', $res_ctx->get_shortcode_att( 'icons_color' ) );
        $res_ctx->load_settings_raw( 'icons_bg', $res_ctx->get_shortcode_att( 'icons_bg' ) );
        $res_ctx->load_settings_raw( 'icons_h_color', $res_ctx->get_shortcode_att( 'icons_h_color' ) );
        $res_ctx->load_settings_raw( 'icons_h_bg', $res_ctx->get_shortcode_att( 'icons_h_bg' ) );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_auth' );
        $res_ctx->load_font_settings( 'f_url' );
        $res_ctx->load_font_settings( 'f_descr' );

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
        parent::render( $atts ); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

        global $tdb_state_single;

        $author_box_data = $tdb_state_single->post_author_box->__invoke($atts);

        $additional_classes = array();

        // add target attribute if the block configuration is set to open in new window
        $td_target = '';
        $open_in_new_window = $this->get_att( 'open_in_new_window' );
        if ( !empty( $open_in_new_window ) ) {
            $td_target = ' target="_blank" ';
        }

        $content_align_vertical = $this->get_att('align_vert');
        if( !empty( $content_align_vertical ) ) {
            $additional_classes[] = 'tdb-' . $content_align_vertical;
        }


        $buffy = ''; //output buffer

        $buffy .= '<div class="tdb-author-box ' . $this->get_block_classes($additional_classes)  . '" ' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            $buffy .= '<div class="tdb-block-inner td-fix-index">';
                $buffy .= '<a href="' . $author_box_data['author_url'] . '" class="tdb-author-photo">' . $author_box_data['author_avatar'] . '</a>';

                $buffy .= '<div class="tdb-author-info">';
                    $buffy .= '<a href="' . $author_box_data['author_url'] . '" class="tdb-author-name">' . $author_box_data['author_name'] . '</a>' ;

                    $buffy .= '<a href="' . $author_box_data['user_url'] . '" ' . $td_target . ' class="tdb-author-url">' . $author_box_data['user_url'] . '</a>';

                    $buffy .= '<div class="tdb-author-descr">' . $author_box_data['description'] . '</div>';

                    $buffy .= '<div class="tdb-author-social">';
                        if ( !empty( $author_box_data['author_social_icons'] ) ) {
                            foreach ( $author_box_data['author_social_icons'] as $td_social_icon ) {
                                $buffy .= '<a href="' . $td_social_icon['social_link'] . '" target="_blank" title="' . $td_social_icon['social_id'] . '" class="tdb-social-item">';
                                    $buffy .= '<i class="td-icon-font td-icon-' . $td_social_icon['social_id'] . '"></i>';
                                $buffy .= '</a>';
                            }
                        }
                    $buffy .= '</div>';
                $buffy .= '</div>';
            $buffy .= '</div>';

        $buffy .= '</div>';

        return $buffy;
    }
}

