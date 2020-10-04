<?php

/**
 * Class td_single_date
 */

class tdb_single_date extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @make_inline */
                .$unique_block_class {
                    display: inline-block;
                }
                /* @float_right */
                .$unique_block_class {
                    float: right;
                }
                
                /* @icon_size */
                .$unique_block_class i {
                    font-size: @icon_size;
                }
                /* @icon_space */
                .$unique_block_class i {
                    margin-right: @icon_space;
                }
				/* @icon_align */
				.$unique_block_class i {
					position: relative;
					top: @icon_align;
				}
                
                /* @date_color */
				.$unique_block_class {
					color: @date_color;
				}
                /* @icon_color */
				.$unique_block_class i {
					color: @icon_color;
				}
				
				/* @f_date */
				.$unique_block_class {
					@f_date
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        // make inline
        $res_ctx->load_settings_raw( 'make_inline', $res_ctx->get_shortcode_att('make_inline') );

        // float right
        $res_ctx->load_settings_raw( 'float_right', $res_ctx->get_shortcode_att('float_right') );



        /*-- ICON -- */
        // icon size
        $icon_size = $res_ctx->get_shortcode_att('icon_size');
        $res_ctx->load_settings_raw( 'icon_size', $icon_size );
        if( $icon_size != '' ) {
            if( is_numeric( $icon_size ) ) {
                $res_ctx->load_settings_raw( 'icon_size', $icon_size . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'icon_size', '14px' );
        }

        // icon space
        $icon_space = $res_ctx->get_shortcode_att('icon_space');
        $res_ctx->load_settings_raw( 'icon_space', $icon_space );
        if( $icon_space != '' ) {
            if( is_numeric( $icon_space ) ) {
                $res_ctx->load_settings_raw( 'icon_space', $icon_space . 'px' );
            }
        } else {
            $res_ctx->load_settings_raw( 'icon_space', '5px' );
        }

        // icon_align
        $icon_align = $res_ctx->get_shortcode_att('icon_align');
        if ( $icon_align != 0 || !empty($icon_align) ) {
            $res_ctx->load_settings_raw( 'icon_align', $icon_align . 'px' );
        }



        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'date_color', $res_ctx->get_shortcode_att('date_color') );
        $res_ctx->load_settings_raw( 'icon_color', $res_ctx->get_shortcode_att('icon_color') );



        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_date' );

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

        $post_date_data = $tdb_state_single->post_date->__invoke();

        $additional_text = $this->get_att( 'additional_text' );
        $additional_text_before = $this->get_att( 'additional_text_before' );
        $time_ago        = $this->get_att( 'time_ago' );

        $display_date = $post_date_data['time'];

        if ( $time_ago == true and !empty( $post_date_data['human_time_diff'] ) ) {
            
            $display_date = $post_date_data['human_time_diff'] . ' ' . $additional_text;

            if ($additional_text_before !== '') {
                $display_date = $additional_text . ' ' . $post_date_data['human_time_diff'];
            }
        }

        // date icon
        $date_icon = $this->get_att( 'tdicon' );


        $buffy = ''; //output buffer

        $buffy .= '<div class="' . $this->get_block_classes() . ' tdb-post-meta" ' . $this->get_block_html_atts() . '>';

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();


            $buffy .= '<div class="tdb-block-inner td-fix-index">';
                if( $date_icon != '' ) {
                    $buffy .= '<i class="' . $date_icon . '"></i>';
                }

                //In HTML documents we must use the ISO 8601 format
                $buffy .= '<time class="entry-date updated td-module-date" datetime="' . $post_date_data['date'] . '">' . $display_date . '</time>';

            $buffy .= '</div>';

        $buffy .= '</div> <!-- ./block -->';

        return $buffy;
    }

}