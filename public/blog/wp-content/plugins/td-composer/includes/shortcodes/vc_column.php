<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 16.02.2016
 * Time: 13:55
 */

class vc_column extends tdc_composer_block {

    private $atts;

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->get_att('tdc_css_class');

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @vertical_align */
                .$unique_block_class {
                    vertical-align: @vertical_align;
                }
                
                /* @column_height */
                .$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
                    min-height: @column_height;
                }
				
				
				/* @flex_display */
				.$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    display: @flex_display;
				}
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    width: 100%;
				}
				/* @flex_layout */
				.$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    flex-direction: @flex_layout;
				}
				/* @flex_full_height */
				.$unique_block_class .wpb_wrapper {
				    height: 100%;
				}
				/* @flex_auto_height */
				.$unique_block_class .wpb_wrapper {
				    height: auto;
				}
				/* @flex_wrap */
				.$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    flex-wrap: @flex_wrap;
				}
				/* @flex_horiz_align */
				.$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    justify-content: @flex_horiz_align;
				}
				/* @flex_vert_align */
				.$unique_block_class .wpb_wrapper,
				.$unique_block_class .wpb_wrapper .tdc-elements {
				    align-items: @flex_vert_align;
				}
				/* @flex_order_0 */
				.$unique_block_class {
				    order: 0;
				}
				/* @flex_order */
				.$unique_block_class {
				    order: @flex_order;
				}
				/* @flex_width */
				div.$unique_block_class {
				    width: @flex_width !important;
				}
				/* @flex_grow_enable */
				.$unique_block_class {
				    flex-grow: 1;
				}
				/* @flex_grow_disable */
				.$unique_block_class {
				    flex-grow: 0;
				}

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->atts );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        // vertical align
        $vertical_align = $res_ctx->get_shortcode_att('vertical_align');
        $res_ctx->load_settings_raw( 'vertical_align', 'baseline' );
        if( $vertical_align != '' ) {
            $res_ctx->load_settings_raw('vertical_align', $vertical_align);
        }

        // height
        $column_height = $res_ctx->get_shortcode_att('column_height');
        $res_ctx->load_settings_raw( 'column_height', $column_height );
        if( $column_height != '' && is_numeric( $column_height ) ) {
            $res_ctx->load_settings_raw( 'column_height', $column_height . 'px' );
        }



        /*-- FLEX SETTINGS -- */
        $flex_layout = $res_ctx->get_shortcode_att( 'flex_layout' );
        if( $flex_layout != 'block' ) {
            $res_ctx->load_settings_raw( 'flex_full_height', 1 );
        } else {
            $res_ctx->load_settings_raw( 'flex_auto_height', 1 );
        }

        if( $flex_layout != 'block' ) {

            $res_ctx->load_settings_raw( 'flex_display', 'flex' );

            // layout reverse
            $flex_layout_reverse = $res_ctx->get_shortcode_att( 'flex_layout_reverse' );
            if( $flex_layout_reverse != '' ) {
                if( $flex_layout == 'row' ) {
                    $res_ctx->load_settings_raw( 'flex_layout', 'row-reverse' );
                } else if ( $flex_layout == 'column' ) {
                    $res_ctx->load_settings_raw( 'flex_layout', 'column-reverse' );
                }
            } else {
                if( $flex_layout == 'row' ) {
                    $res_ctx->load_settings_raw( 'flex_layout', 'row' );
                } else if ( $flex_layout == 'column' ) {
                    $res_ctx->load_settings_raw( 'flex_layout', 'column' );
                }
            }

            // flex wrap
            $flex_wrap = $res_ctx->get_shortcode_att( 'flex_wrap' );
            if( $flex_wrap == '' ) {
                $res_ctx->load_settings_raw( 'flex_wrap', 'nowrap' );
            } else {
                $res_ctx->load_settings_raw( 'flex_wrap', 'wrap' );
            }


            // horizontal align
            $flex_horizontal_align = $res_ctx->get_shortcode_att( 'flex_horiz_align' );
            $res_ctx->load_settings_raw( 'flex_horiz_align', $flex_horizontal_align );

            // vertical align
            $flex_vertical_align = $res_ctx->get_shortcode_att( 'flex_vert_align' );
            $res_ctx->load_settings_raw('flex_vert_align', $flex_vertical_align);

        } else {
            $res_ctx->load_settings_raw( 'flex_display', 'block' );
        }

        // order
        $flex_order = $res_ctx->get_shortcode_att( 'flex_order' );
        if( $flex_order != '' && is_numeric( $flex_order ) ) {
            if( $flex_order == '0' ) {
                $res_ctx->load_settings_raw('flex_order_0', 1);
            } else {
                $res_ctx->load_settings_raw('flex_order', $flex_order);
            }
        }

        // width
        $flex_width = $res_ctx->get_shortcode_att( 'flex_width' );
        $res_ctx->load_settings_raw('flex_width', $flex_width);
        if( $flex_width != '' && is_numeric( $flex_width ) ) {
            $res_ctx->load_settings_raw('flex_width', $flex_width . 'px');
        }

        // grow
        $flex_grow = $res_ctx->get_shortcode_att( 'flex_grow' );
        if( $flex_grow == 'on' ) {
            $res_ctx->load_settings_raw('flex_grow_enable', 1);
        } else if( $flex_grow == 'off' ) {
            $res_ctx->load_settings_raw('flex_grow_disable', 1);
        }

    }

	function render($atts, $content = null) {
		parent::render($atts);

        $this->atts = shortcode_atts( array(
			'width' => '1/1',
			'is_sticky' => '',
            'vertical_align' => '',
            'column_height' => '',

            'flex_layout' => 'block',
            'flex_layout_reverse' => '',
            'flex_wrap' => '',
            'flex_horiz_align' => 'flex-start',
            'flex_vert_align' => 'flex-start',
            'flex_order' => '',
            'flex_width' => '',
            'flex_grow' => ''
		), $atts);


		// Set column width
		// For 'page_title_sidebar' template, modify the $atts['width']
		if ($this->atts['width'] === '1/1') {
			td_global::set_column_width($this->atts['width']);
		} else {
			td_global::set_column_width($this->atts['width']);
		}


		$td_pb_class = '';

		switch ($this->atts['width']) {
			case '1/1': //full
				$td_pb_class = 'td-pb-span12';
				break;
			case '2/3': //2 of 3
				$td_pb_class = 'td-pb-span8';
				break;
			case '1/3': // 1 of 3
				$td_pb_class = 'td-pb-span4';
				break;
			case '1/2': // 1 of 2
				$td_pb_class = 'td-pb-span6';
				break;
			case '1/4': // 1 of 4
				$td_pb_class = 'td-pb-span3';
				break;
			case '3/4': // 3 of 4
				$td_pb_class = 'td-pb-span9';
				break;
			case '7': // 7 of 12
				$td_pb_class = 'td-pb-span7';
				break;
			case '5': // 5 of 12
				$td_pb_class = 'td-pb-span5';
				break;
		}

		// The global $td_column_count must be set here
		// Usually it's set by vc_column template, but VC plugin is not active
		global $td_column_count;
		$td_column_count = $this->atts['width'];

		if ( ! empty( $this->atts['is_sticky'] ) ) {
			$td_pb_class .= ' td-is-sticky';
		}

		$column_class = 'tdc-column';

		if ( td_global::get_in_element() && ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) ) {
		    $column_class .= '-composer';
        }

        td_global::set_in_column( true );

		$buffy = '<div class="' . $this->get_block_classes(array('wpb_column', 'vc_column_container', $column_class, $td_pb_class)) . '">';

			// get_block_css is out of wpb_wrapper for FF
			$buffy .= $this->get_block_css();

				$buffy .= '<div class="wpb_wrapper">';
					$buffy .= $this->do_shortcode($content);
				$buffy .= '</div>';
		$buffy .= '</div>';

		td_global::set_in_column( false );


//		if (tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax()) {
//			$buffy = '<div class="tdc-column">' . $buffy . '</div>';
//		}

		return $buffy;


	}




}