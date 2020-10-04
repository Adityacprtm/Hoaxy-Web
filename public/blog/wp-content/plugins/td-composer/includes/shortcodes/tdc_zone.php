<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 16.10.2018
 * Time: 15:47
 */


class tdc_zone extends tdc_composer_block {

	private $atts;

	private static $suffix_class = '';

	public function get_custom_css() {
		// $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
		$unique_block_class = $this->get_att('tdc_css_class');
        $unique_block_id = $this->block_uid;

        $compiled_css = '';

		$raw_css =
			"<style>
                /* @row_full_height */
                .$unique_block_class {
                    min-height: 100vh;
                }
                /* @row_auto_height */
                .$unique_block_class {
                    min-height: 0;
                }

                /* @row_fixed */
                @media (min-width: 768px) {
	                .$unique_block_class > .td-element-style > .td-element-style-before {
	                    background-attachment: fixed;
	                }
	                .tdc-row[class*='stretch_row'] > .$unique_block_class.td-pb-row > .td-element-style {
	                    left: calc((-100vw + 100%)/2) !important;
	                    transform: none !important;
	                }
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
                    @row_bg_gradient
                }
                
                
                /* @zone_shadow */
                .$unique_block_class:before {
                    content: '';
                    display: block;
                    width: 100vw;
                    height: 100%;
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                    box-shadow: @zone_shadow;
                    z-index: 20;
                    pointer-events: none;
                }
                @media (max-width: 767px) {
                    .$unique_block_class:before {
                        width: 100%;
                    }
                }
                
                
                /* @h_display */
                .td-header-desktop-wrap {
                    position: @h_display;
                }
                /* @h_position_top */
                .td-header-desktop-wrap {
                    top: 0;
                    bottom: auto;
                }
                /* @h_position_bottom */
                .td-header-desktop-wrap {
                    top: auto;
                    bottom: 0;
                }
                
                
                /* @hs_opacity */
                .td-header-desktop-sticky-wrap.td-header-active {
                    opacity: @hs_opacity;
                }
                /* @hs_slide_down */
                .td-header-desktop-sticky-wrap {
                    transform: translateY(-120%);
                    -webkit-transform: translateY(-120%);
                    -moz-transform: translateY(-120%);
                    -ms-transform: translateY(-120%);
                    -o-transform: translateY(-120%);
                }
                .td-header-desktop-sticky-wrap.td-header-active {
                    transform: translateY(0);
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                }
                /* @hs_transitions_speed */
                .td-header-desktop-sticky-wrap {
                    -webkit-transition: all @hs_transitions_speed ease-in-out;
                    -moz-transition: all @hs_transitions_speed ease-in-out;
                    -o-transition: all @hs_transitions_speed ease-in-out;
                    transition: all @hs_transitions_speed ease-in-out;
                }
                
                
                /* @m_display */
                .td-header-mobile-wrap {
                    position: @m_display;
                    width: 100%;
                }
                /* @m_position_top */
                .td-header-mobile-wrap {
                    top: 0;
                    bottom: auto;
                }
                /* @m_position_bottom */
                .td-header-mobile-wrap {
                    top: auto;
                    bottom: 0;
                }
                
                
                /* @ms_opacity */
                .td-header-mobile-sticky-wrap.td-header-active {
                    opacity: @ms_opacity;
                }
                /* @ms_slide_down */
                .td-header-mobile-sticky-wrap {
                    transform: translateY(-120%);
                    -webkit-transform: translateY(-120%);
                    -moz-transform: translateY(-120%);
                    -ms-transform: translateY(-120%);
                    -o-transform: translateY(-120%);
                }
                .td-header-mobile-sticky-wrap.td-header-active {
                    transform: translateY(0);
                    -webkit-transform: translateY(0);
                    -moz-transform: translateY(0);
                    -ms-transform: translateY(0);
                    -o-transform: translateY(0);
                }
                /* @ms_transitions_speed */
                .td-header-mobile-sticky-wrap {
                    -webkit-transition: all @ms_transitions_speed ease-in-out;
                    -moz-transition: all @ms_transitions_speed ease-in-out;
                    -o-transition: all @ms_transitions_speed ease-in-out;
                    transition: all @ms_transitions_speed ease-in-out;
                }

			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->atts );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
	}

    static function cssMedia( $res_ctx ) {

        // full height
        $full_height = $res_ctx->get_shortcode_att('row_full_height');
        if( $full_height != '' ) {
            $res_ctx->load_settings_raw( 'row_full_height', 1 );
        } else {
            $res_ctx->load_settings_raw( 'row_auto_height', 1 );
        }

        // fixed background image
        $res_ctx->load_settings_raw( 'row_fixed', $res_ctx->get_shortcode_att('row_fixed') );

        // background gradient
        $res_ctx->load_color_settings( 'row_bg_gradient', 'row_bg_solid', 'row_bg_gradient', '', '' );

        // shadow
        $res_ctx->load_shadow_settings( 0, 0, 6, 0, 'rgba(0, 0, 0, 0.08)', 'zone_shadow' );




        $type = $res_ctx->get_shortcode_att('type');

        // Main menu
        if( $type == 'tdc_header_desktop' ) {
            $h_display = $res_ctx->get_shortcode_att('h_display');
            $res_ctx->load_settings_raw('h_display', 'relative');
            if( $h_display != '' ) {
                $res_ctx->load_settings_raw('h_display', $h_display);
            }

            if( $h_display == 'fixed' ) {
                $h_position = $res_ctx->get_shortcode_att('h_position');
                $res_ctx->load_settings_raw('h_position_top', 1);
                if( $h_position != '' ) {
                    $res_ctx->load_settings_raw('h_position_bottom', 1);
                }
            }
        }

        // Main menu sticky
        if( $type == 'tdc_header_desktop_sticky' ) {
            $hs_transition_effect = $res_ctx->get_shortcode_att('hs_transition_effect');
            if( $hs_transition_effect == 'opacity' || $hs_transition_effect == 'slide' ) {
                $res_ctx->load_settings_raw('hs_transitions_speed', $res_ctx->get_shortcode_att('hs_transitions_speed') . 's');
            }
            if( $hs_transition_effect == 'slide' ) {
                $res_ctx->load_settings_raw('hs_slide_down', 1);
            }

            // opacity
            $res_ctx->load_settings_raw('hs_opacity', $res_ctx->get_shortcode_att('hs_opacity'));
        }

        // Mobile menu
        if( $type == 'tdc_header_mobile' ) {
            $m_display = $res_ctx->get_shortcode_att('m_display');
            $res_ctx->load_settings_raw('m_display', 'relative');
            if( $m_display != '' ) {
                $res_ctx->load_settings_raw('m_display', $m_display);
            }

            if( $m_display == 'fixed' ) {
                $m_display = $res_ctx->get_shortcode_att('m_position');
                $res_ctx->load_settings_raw('m_position_top', 1);
                if( $m_display != '' ) {
                    $res_ctx->load_settings_raw('m_position_bottom', 1);
                }
            }
        }

        // Mobile menu sticky
        if( $type == 'tdc_header_mobile_sticky' ) {
            $ms_transition_effect = $res_ctx->get_shortcode_att('ms_transition_effect');
            if( $ms_transition_effect == 'opacity' || $ms_transition_effect == 'slide' ) {
                $res_ctx->load_settings_raw('ms_transitions_speed', $res_ctx->get_shortcode_att('ms_transitions_speed') . 's');
            }
            if( $ms_transition_effect == 'slide' ) {
                $res_ctx->load_settings_raw('ms_slide_down', 1);
            }

            // opacity
            $res_ctx->load_settings_raw('ms_opacity', $res_ctx->get_shortcode_att('ms_opacity'));
        }

    }


	function render($atts, $content = null) {
		parent::render($atts);

		$this->atts = shortcode_atts( array(

			'row_full_height' => '',
			'row_parallax' => '',
			'row_fixed' => '',
            'row_bg_gradient' => '',
            'zone_shadow_shadow_size' => '',
            'zone_shadow_shadow_offset_horizontal' => '',
            'zone_shadow_shadow_offset_vertical' => '',
            'zone_shadow_shadow_spread' => '',
            'zone_shadow_shadow_color' => '',
			'video_background' => '',
			'video_scale' => '',
			'video_opacity' => '',

            'h_display' => '',
            'h_position' => '',

            'hs_sticky_type' => '',
            'hs_sticky_offset' => '0',
            'hs_transition_effect' => '',
            'hs_opacity' => '1',
            'hs_transitions_speed' => '0.3',

            'm_display' => '',
            'm_position' => '',

            'ms_sticky_type' => '',
            'ms_sticky_offset' => '0',
            'ms_transition_effect' => '',
            'ms_opacity' => '1',
            'ms_transitions_speed' => '0.3',

            'type' => '',

		), $atts);

		$zone_class = 'tdc-zone';

		if ( td_global::get_in_element() && ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) ) {
		    $zone_class .= '-composer';
        }

		td_global::set_in_zone(true);

		$buffy = '';

        if ( 'Newspaper' === TD_THEME_NAME ) {
            $block_classes = array('wpb_row', 'td-pb-row');
        } else {
            $block_classes = '';
        }

		$addElementStyle = false;
		$css_elements = $this->get_block_css($clearfixColumns, $addElementStyle);

		if ( $addElementStyle ) {
			$block_classes[] = 'tdc-element-style';
		}

		$type = $this->atts['type'];

		$sticky_offset = '';
		if( $type == 'tdc_header_desktop_sticky' ) {
		    if( $this->atts['hs_sticky_type'] != '' ) {
                $block_classes[] = 'td-header-sticky-smart';
            }
            if( $this->atts['hs_sticky_offset'] != '' ) {
                $sticky_offset = 'data-sticky-offset="' . $this->atts['hs_sticky_offset'] . '"';
            }
        }
        if( $type == 'tdc_header_mobile_sticky' ) {
            if( $this->atts['ms_sticky_type'] != '' ) {
                $block_classes[] = 'td-header-sticky-smart';
            }
            if( $this->atts['ms_sticky_offset'] != '' ) {
                $sticky_offset = 'data-sticky-offset="' . $this->atts['ms_sticky_offset'] . '"';
            }
        }


		$buffy .= '<div ' . $this->get_block_dom_id() . 'class="' . $this->get_block_classes($block_classes) . '" ' . $sticky_offset . ' >';
		//get the block css

		// Flag used to know outside if the '.clearfix' element is added as last child in vc_row and vc_row_inner
		// '.clearfix' was necessary to apply '::after' css settings from TagDiv Composer (the '::after' element comes with absolute position and at the same time a 'clear' is necessary)
		$clearfixColumns = false;

		if ( ! empty( $this->atts['video_background'] ) ) {

			$output = '';

			$videos_info = td_remote_video::api_get_videos_info( array( $this->atts['video_background'] ), 'youtube');

			if ( is_array( $videos_info ) && count( $videos_info ) ) {
				$zone_class .= ' tdc-row-video-background';

				ob_start();
				?>

				<style>

					.tdc-row-video-background {
						position: relative;
					}
					.tdc-video-outer-wrapper {
						position: absolute;
						width: 100%;
						height: 100%;
						overflow: hidden;
						left: 0;
						right: 0;
						pointer-events: none;
						top: 0;
					}
					@media (max-width: 767px) {
						.tdc-video-outer-wrapper {
							width: 100vw;
							left: 50%;
							transform: translateX(-50%);
							-webkit-transform: translateX(-50%);
						}
					}

					.tdc-video-parallax-wrapper,
					.tdc-video-inner-wrapper {
						position: absolute;
						width: 100%;
						height: 100%;
						left: 0;
						right: 0;
					}

					.tdc-video-inner-wrapper iframe {
						opacity: 0;
						transition: opacity 0.4s;
						position: absolute;
						left: 50%;
						top: 50%;
						transform: translate3d(-50%, -50%, 0);
						-webkit-transform: translate3d(-50%, -50%, 0);
						-moz-transform: translate3d(-50%, -50%, 0);
						-ms-transform: translate3d(-50%, -50%, 0);
						-o-transform: translate3d(-50%, -50%, 0);
					}

					.tdc-video-inner-wrapper iframe.tdc-video-background-visible {
						opacity: 1 !important;
					}

					.tdc-row[class*="stretch_row"] .tdc-video-outer-wrapper {
						width: 100vw;
						left: 50%;
						transform: translateX(-50%);
						-webkit-transform: translateX(-50%);
						-moz-transform: translateX(-50%);
						-ms-transform: translateX(-50%);
						-o-transform: translateX(-50%);
					}

				</style>

				<?php
				$output = ob_get_clean();

				$output .= '<div class="tdc-video-outer-wrapper">';
				$output .= '<div class="tdc-video-parallax-wrapper">';
				$output .= '<div class="tdc-video-inner-wrapper" data-video-scale="' . $this->atts['video_scale'] . '" data-video-opacity="' . $this->atts['video_opacity'] . '">';

				foreach ( $videos_info as $video_id => $video_info ) {
					$output .= $videos_info[ $video_id ]['embedHtml'];
					break;
				}

				$output .= '</div>';
				$output .= '</div>';
				$output .= '</div>';

				ob_start();
				?>

				<script>

					jQuery(window).ready(function () {

						// We need timeout because the content must be rendered and interpreted on client
						setTimeout(function() {

							var $content = jQuery('body').find('#tdc-live-iframe'),
								refWindow = undefined;

							if ($content.length) {
								$content = $content.contents();
								refWindow = document.getElementById( 'tdc-live-iframe' ).contentWindow || document.getElementById( 'tdc-live-iframe' ).contentDocument;

							} else {
								$content = jQuery('body');
								refWindow = window;
							}

							var $tdcVideoInnerWrappers = $content.find('#<?php echo $this->block_uid ?> .tdc-video-inner-wrapper:first');



							$tdcVideoInnerWrappers.each(function() {
								var $wrapper = jQuery(this);

								var $iframe = $wrapper.find('iframe');

								if ('undefined' !== typeof $wrapper.data('video-scale')) {
									$wrapper.css({
										transform: 'scale(' + $wrapper.data('video-scale') + ')'
									});
								}
								if ('undefined' !== typeof $wrapper.data('video-opacity')) {
									$wrapper.css({
										opacity: $wrapper.data('video-opacity')
									});
								}

								if ( $iframe.length ) {

									if ('undefined' === typeof $iframe.data('src-src')) {
										$iframe.data('api-src', $iframe.attr('src'));
									}

									var iframeSettingsStr = '',
										iframeSettings = {
											autoplay: 1,
											loop: 1,
											mute: 1,
											showinfo: 0,
											controls: 0,
											start: 2,
											playlist: '<?php echo $this->atts['video_background'] ?>'
										};

									for (var prop in iframeSettings) {
										iframeSettingsStr += prop + '=' + iframeSettings[prop] + '&';
									}

									$iframe.attr('src', $iframe.data('api-src') + '?' + iframeSettingsStr);

									$iframe.load(function () {
										var $iframe = jQuery(this),
											iframeWidth = $iframe.width(),
											iframeHeight = $iframe.height(),
											iframeAspectRatio = iframeHeight / iframeWidth,
											wrapperWidth = $wrapper.width(),
											wrapperHeight = $wrapper.height(),
											wrapperAspectRatio = wrapperHeight / wrapperWidth;

										$iframe.attr( 'aspect-ratio', iframeAspectRatio );

										if (iframeAspectRatio < wrapperAspectRatio) {
											$iframe.css({
												width: wrapperHeight / iframeAspectRatio,
												height: wrapperHeight
											});
										} else if (iframeAspectRatio > wrapperAspectRatio) {
											$iframe.css({
												width: '100%',
												height: iframeAspectRatio * wrapperWidth
											});
										}

										setTimeout(function () {
											$iframe.addClass('tdc-video-background-visible');
										}, 100);

									});
								}

								return;
							});

						}, 200);
					});

				</script>

				<?php

				if ( defined( 'TD_SPEED_BOOSTER' ) ) {
					td_js_buffer::add_to_footer( td_util::remove_script_tag( ob_get_clean() ) );
				} else {
					$output .= ob_get_clean();
				}
			}

			$buffy .= $output;
		}

		$buffy .= $css_elements;

		$buffy .= $this->do_shortcode($content);

		// Add '.clearfix' element as last child in vc_row and vc_row_inner
		if ($clearfixColumns) {
			$buffy .= PHP_EOL . '<span class="clearfix"></span>';
		}

		$buffy .= '</div>';


		// The following commented code is for the new theme
		//if (tdc_state::is_live_editor_iframe() || tdc_state::is_live_editor_ajax()) {
		$buffy = '<div id="' . $this->block_uid . '" class="' . $zone_class . self::$suffix_class . '">' . $buffy . '</div>';
		//}


		ob_start();

		if ( defined( 'TD_SPEED_BOOSTER' ) ) {
			td_js_buffer::add_to_footer( td_util::remove_script_tag( ob_get_clean() ) );
		} else {
			$buffy .= ob_get_clean();
		}

		td_global::set_in_zone(false);

		// td-composer PLUGIN uses to add blockUid output param when this shortcode is retrieved with ajax (@see tdc_ajax)
		do_action( 'td_block_set_unique_id', array( &$this ) );

		return $buffy;
	}

	static function set_suffix_class( $suffix_class ) {
	    self::$suffix_class = $suffix_class;
    }

	/**
	 * Safe way to read $this->atts. It makes sure that you read them when they are ready and set!
	 * @param $att_name
	 * @return mixed
	 */
	protected function get_custom_att($att_name) {
		if ( !isset( $this->atts ) ) {
		    echo 'TD Composer Internal error: The atts are not set yet(AKA: the LOCAL render method was not called yet and the system tried to read an att)';
			die;
		}

		if ( !isset( $this->atts[$att_name] ) ) {
			var_dump($this->atts);
			echo 'TD Composer Internal error: The system tried to use an LOCAL att that does not exists! class_name: ' . get_class($this) . '  Att name: "' . $att_name . '" The list with available atts is in vc_row::render';
			die;
		}
		return $this->atts[$att_name];
	}

}