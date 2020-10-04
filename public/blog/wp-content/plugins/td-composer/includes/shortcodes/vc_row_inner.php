<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 16.02.2016
 * Time: 13:55
 */

class vc_row_inner extends tdc_composer_block {

	private $atts;

	public function get_custom_css() {
		// $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
		$unique_block_class = $this->get_att('tdc_css_class');
        $unique_block_id = $this->block_uid;

        $compiled_css = '';

		$raw_css =
			"<style>
                /* @gap */
                @media (min-width: 768px) {
	                .$unique_block_class {
	                    margin-left: -@gap;
	                    margin-right: -@gap;
	                }
	                .$unique_block_class .vc_column_inner {
	                    padding-left: @gap;
	                    padding-right: @gap;
	                }
                }

                /* @content_align_vertical */
                 @media (min-width: 767px) {
                    .$unique_block_class.tdc-row-content-vert-center,
                    .$unique_block_class.tdc-row-content-vert-center .tdc-inner-columns {
                        display: flex;
                        align-items: center;
                        flex: 1;
                    }
                    .$unique_block_class.tdc-row-content-vert-bottom,
                    .$unique_block_class.tdc-row-content-vert-bottom .tdc-inner-columns {
                        display: flex;
                        align-items: flex-end;
                        flex: 1;
                    }
                    .$unique_block_class.tdc-row-content-vert-center .td_block_wrap {
                        vertical-align: middle;
                    }
                    .$unique_block_class.tdc-row-content-vert-bottom .td_block_wrap {
                        vertical-align: bottom;
                    }
                }
                
                /* @inner_row_height */
                .$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
                    min-height: @inner_row_height;
                }
                
                /* @row_shadow */
                .$unique_block_class:before {
                    display: block;
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                    box-shadow: @row_shadow;
                    z-index: 20;
                    pointer-events: none;
                    top: 0;
                }
                
                /* @row_bg_solid */
                 .$unique_block_class > .td-element-style:after {
                    content: '' !important;
                    width: 100% !important;
                    height: 100% !important;
                    position: absolute !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 0 !important;
                    display: block !important;
                    background-color: @row_bg_solid !important;
                }
                /* @row_bg_gradient */
                 .$unique_block_class > .td-element-style:after {
                    content: '' !important;
                    width: 100% !important;
                    height: 100% !important;
                    position: absolute !important;
                    top: 0 !important;
                    left: 0 !important;
                    z-index: 0 !important;
                    display: block !important;
                    @row_bg_gradient;
                }
                
                /* @absolute_position */
                .$unique_block_class {
                    position: absolute !important;
                    top: 0;
                    z-index: 1;
                }
                /* @absolute_align_center */
                .$unique_block_class {
                    top: 50%;
                    transform: translateY(-50%);
                    -webkit-transform: translateY(-50%);
                }
                /* @absolute_align_bottom */
                .$unique_block_class {
                    top: auto;
                    bottom: 0;
                }
                /* @relative_position */
                .$unique_block_class {
                    position: relative !important;
                    top: 0;
                    transform: none;
                    -webkit-transform: none;
                }
                
                
                /* @flex_display */
				.$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
				    display: @flex_display;
				}
				.$unique_block_class .tdc-inner-columns {
				    width: 100%;
				}
				/* @flex_layout */
				.$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
				    flex-direction: @flex_layout;
				}
				/* @flex_wrap */
				.$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
				    flex-wrap: @flex_wrap;
				}
				/* @flex_horiz_align */
				.$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
				    justify-content: @flex_horiz_align;
				}
				/* @flex_vert_align */
				.$unique_block_class,
				.$unique_block_class .tdc-inner-columns {
				    align-items: @flex_vert_align;
				}
				/* @flex_order_0 */
				#$unique_block_id {
				    order: 0;
				}
				/* @flex_order */
				#$unique_block_id {
				    order: @flex_order;
				}
				/* @flex_grow_enable */
				#$unique_block_id {
				    flex-grow: 1;
				}
				/* @flex_grow_disable */
				#$unique_block_id {
				    flex-grow: 0;
				}
                
			</style>";

        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->atts );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
	}

    static function cssMedia( $res_ctx ) {

	    // gap
        $gap = $res_ctx->get_shortcode_att('gap');
        $res_ctx->load_settings_raw( 'gap', $gap );
        if( $gap != '' && is_numeric( $gap ) ) {
            $res_ctx->load_settings_raw( 'gap', $gap . 'px' );
        }

        // content align vertical
		$content_align_vertical = $res_ctx->get_shortcode_att('content_align_vertical');
        if ( !empty($content_align_vertical) && 'content-vert-top' !== $res_ctx->get_shortcode_att('content_align_vertical') ) {
            $res_ctx->load_settings_raw('content_align_vertical', $content_align_vertical);
		}

        // height
        $inner_row_height = $res_ctx->get_shortcode_att('inner_row_height');
        $res_ctx->load_settings_raw( 'inner_row_height', $inner_row_height );
        if( $inner_row_height != '' && is_numeric( $inner_row_height ) ) {
            $res_ctx->load_settings_raw( 'inner_row_height', $inner_row_height . 'px' );
        }

        // background gradient
        $res_ctx->load_color_settings( 'row_bg_gradient', 'row_bg_solid', 'row_bg_gradient', '', '' );

        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 6, 0, 'rgba(0, 0, 0, 0.08)', 'row_shadow' );

        // absolute positioning
        $absolute_position = $res_ctx->get_shortcode_att('absolute_position');
		if( $absolute_position != '' ) {
            $res_ctx->load_settings_raw('absolute_position', 1);
        } else {
            $res_ctx->load_settings_raw('relative_position', 1);
		}

        $absolute_align = $res_ctx->get_shortcode_att('absolute_align');
		if( !empty($absolute_position) ) {
		    if( $absolute_align == 'center' ) {
                $res_ctx->load_settings_raw('absolute_align_center', 1);
            } else if( $absolute_align == 'bottom' ) {
                $res_ctx->load_settings_raw('absolute_align_bottom', 1);
            }
        }



        /*-- FLEX SETTINGS -- */
        $flex_layout = $res_ctx->get_shortcode_att( 'flex_layout' );

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

			'gap' => '',
			'content_align_vertical' => '',
            'inner_row_height' => '',
            'row_bg_gradient' => '',
            'row_shadow_shadow_size' => '',
            'row_shadow_shadow_offset_horizontal' => '',
            'row_shadow_shadow_offset_vertical' => '',
            'row_shadow_shadow_spread' => '',
            'row_shadow_shadow_color' => '',
            'absolute_position' => '',
            'absolute_align' => '',
            'absolute_width' => '',

            'flex_layout' => 'block',
            'flex_layout_reverse' => '',
            'flex_wrap' => '',
            'flex_horiz_align' => 'flex-start',
            'flex_vert_align' => 'flex-start',
            'flex_order' => '',
            'flex_grow' => ''

		), $atts);

		$block_classes = array('vc_row', 'vc_inner', 'wpb_row', 'td-pb-row');

		if ( !empty($this->atts['content_align_vertical']) && 'content-vert-top' !== $this->atts['content_align_vertical'] ) {
			$block_classes[] = 'tdc-row-' . $this->atts['content_align_vertical'];
		}

        $absolute_width = $this->atts['absolute_width'];
		if( !empty($this->atts['absolute_position']) ) {
		    if( $absolute_width != '' ) {
                $block_classes[] = $absolute_width;
            } else {
                $block_classes[] = 'absolute_inner_full';
            }
        }

        $inner_row_class = 'tdc-inner-row';

		if ( td_global::get_in_element() && ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) ) {
		    $inner_row_class .= '-composer';
        }

		td_global::set_in_inner_row(true);

		$buffy = '<div ' . $this->get_block_dom_id() . 'class="' . $this->get_block_classes($block_classes) . '" >';
			//get the block css
			$buffy .= $this->get_block_css();
			$buffy .= $this->do_shortcode($content);
		$buffy .= '</div>';

		if (tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax()) {
			$buffy = '<div id="' . $this->block_uid . '" class="' . $inner_row_class . '">' . $buffy . '</div>';
		}

		td_global::set_in_inner_row(false);

		// td-composer PLUGIN uses to add blockUid output param when this shortcode is retrieved with ajax (@see tdc_ajax)
		do_action( 'td_block_set_unique_id', array( &$this ) );

		return $buffy;
	}
}