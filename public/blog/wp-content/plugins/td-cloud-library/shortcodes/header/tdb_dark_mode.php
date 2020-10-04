<?php


class tdb_dark_mode extends td_block {

	public function get_custom_css() {
		// $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
		$unique_block_class = $this->block_uid;

		$compiled_css = '';

		$raw_css =
			"<style>


                
                /* @btn_icon_size */
                .$unique_block_class .wpb_button i {
                    font-size: @btn_icon_size;
                }
                
                .$unique_block_class .wpb_button {
                    background-color: transparent !important;
                }
                
                .$unique_block_class .wpb_button:focus {
                    outline: none !important;
                }



        </style>";

		$td_css_res_compiler = new td_css_res_compiler( $raw_css );
		$td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

		$compiled_css .= $td_css_res_compiler->compile_css();

		return $compiled_css;
	}

	static function cssMedia( $res_ctx ) {

		/*-- ICON -- */
		// button icon size
		$btn_icon_size = $res_ctx->get_shortcode_att('btn_icon_size');
		$res_ctx->load_settings_raw('btn_icon_size', $btn_icon_size);
		if ($btn_icon_size != '' && is_numeric($btn_icon_size)) {
			$res_ctx->load_settings_raw('btn_icon_size', $btn_icon_size . 'px');
		}

	}

	/**
	 * Disable loop block features. This block does not use a loop and it doesn't need to run a query.
	 */
	function __construct() {
		parent::disable_loop_block_features();
	}

	function render( $atts, $content = null ) {
		parent::render( $atts );

		$buffy = ''; //output buffer

		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

		// icons
		$btn_icon_pos = $this->get_att('btn_icon_pos');

		$btn_tdicon_switch_dark = $this->get_att('btn_tdicon_switch_dark');
		if( $btn_tdicon_switch_dark != '' ) {
			$btn_tdicon_switch_dark = '<i class="' . $this->get_att('btn_tdicon_switch_dark') . '"></i>';
		}

		$btn_tdicon_switch_light = $this->get_att('btn_tdicon_switch_light');
		if( $btn_tdicon_switch_light != '' ) {
			$btn_tdicon_switch_light = '<i class="' . $this->get_att('btn_tdicon_switch_light') . '"></i>';
		}

		// button text
		$btn_text = $this->get_att('btn_text');
		if( $btn_text != '' ) {
			$btn_text = '<span>' . $btn_text . '</span>';
		}

		//get the block css
		$buffy .= $this->get_block_css();

		//get the js for this block
		$buffy .= $this->get_block_js();

		$buffy .= '<div class="tdb-block-inner td-fix-index">';
		$buffy .= $this->inner();

		global $tdb_state_dark_mode;

		if ( $tdb_state_dark_mode === 'on' ) {
			$buffy .= '<button class="wpb_button wpb_btn-inverse td-mode-switch td-mode-dark" title="Switch to light mode!">';
			$buffy .= $btn_tdicon_switch_light;
//			$buffy .= $btn_text;

		} else {
			$buffy .= '<button class="wpb_button wpb_btn-inverse td-mode-switch td-mode-default" title="Switch to dark mode!">';
			$buffy .= $btn_tdicon_switch_dark;
//			$buffy .= $btn_text;
		}

		$buffy .= '</button>';
		$buffy .= '</div>';

		return $buffy;
	}

	function inner() {
		$buffy = '';

		$td_block_layout = new td_block_layout();

		global $tdb_state_dark_mode;

		// render the JS
		ob_start();
		?>
		<script>
            jQuery().ready( function () {

                var body = jQuery(document.body);
                var block = jQuery('.<?php echo $this->block_uid ?>');
                var icon_dark_cls = '<?php echo $this->get_att('btn_tdicon_switch_dark'); ?>';
                var icon_light_cls = '<?php echo $this->get_att('btn_tdicon_switch_light'); ?>';
                var $tdb_state_dark_mode = '<?php echo strtoupper($tdb_state_dark_mode); ?>';

                if ( $tdb_state_dark_mode === 'ON' ) {
                    console.log('%c dark mode is: ' + $tdb_state_dark_mode, 'color: #008000c2')
                }

                if ( $tdb_state_dark_mode === 'OFF' ) {
                    console.log('%c dark mode is: ' + $tdb_state_dark_mode, 'color: #dc2121c7')
                }

                // check for dark mode cookie cookie
                // var td_dark_mode_cookie = td_read_site_cookie('td_dark_mode_cookie');
                //
                // console.log(td_dark_mode_cookie);
                //
                // if ( td_dark_mode_cookie === 'on' ) {
                //     body.addClass('td-dark-mode-on');
                //
                //     jQuery('.tdb_dark_mode').each( function( index, element ) {
                //         var $this = jQuery(this);
                //
                //         $this.find('.td-mode-switch i').attr('class', 'tdc-font-oi tdc-font-oi-sun');
                //         $this.find('.td-mode-switch').attr('title', 'Switch to light mode!').addClass('td-mode-dark').removeClass('td-mode-default');
                //
                //     });
                // }
                //
                // if ( td_dark_mode_cookie === 'off' ) {
                //     body.removeClass('td-dark-mode-on');
                //
                //     jQuery('.tdb_dark_mode').each( function( index, element ) {
                //         var $this = jQuery(this);
                //
                //         $this.find('.td-mode-switch i').attr('class', 'tdc-font-oi tdc-font-oi-moon');
                //         $this.find('.td-mode-switch').attr('title', 'Switch to dark mode!').addClass('td-mode-default').removeClass('td-mode-dark');
                //
                //     });
                // }

                block.on( 'click', '.td-mode-switch', function () {
                    var $this = jQuery(this);

                    if( $this.hasClass('td-mode-default') ) {

                        body.toggleClass('td-dark-mode-on');
                        $this.addClass('td-mode-dark').removeClass('td-mode-default');
                        $this.attr('title', 'Switch to light mode!');
                        $this.find('i').attr('class', icon_light_cls);

                        // set cookie to 'on'
                        tdUpdateCookieStatus('on');

                    } else {

                        body.toggleClass('td-dark-mode-on');
                        $this.addClass('td-mode-default').removeClass('td-mode-dark');
                        $this.attr('title', 'Switch to dark mode!');
                        $this.find('i').attr('class', icon_dark_cls);

                        // set cookie to 'off'
                        tdUpdateCookieStatus('off');
                    }

                });

                function tdUpdateCookieStatus(status) {
                    jQuery.ajax({
                        url: td_ajax_url,
                        type: 'post',
                        data: {
                            action: 'td_set_dark_mode_cookie',
                            td_magic_token: tdBlockNonce,
                            td_status: status
                        },
                        success: function (data) {
                            var reply = JSON.parse(data);

                            var expTime = reply.cookie_data[2];
                            // var status = '';
                            //
                            // if ( currentTime < expiryTime ) {
                            //     status = 'not expired';
                            // } else {
                            //     status = 'expired';
                            // }

                            if ( reply.status.includes('success') ) {
                                console.log( '%c' + reply.status + ' expires in: ' + calculateValidity(expTime) + ' seconds', 'color: #008000c2' );
                                var darkModeCookieExpCountDownInt = setInterval( function(){
                                    console.log( '%c dark mode cookie expires in: ' + calculateValidity(expTime) + ' seconds', 'color: orange' );

                                    if ( calculateValidity(expTime) > 0 ) {
                                        console.log( '%c cookie expired !!!', 'color: red' );
                                        clearInterval(darkModeCookieExpCountDownInt);
                                    }

                                }, 2000 );
                            }

                            if ( reply.status.includes('error') ) {
                                console.log( '%c' + reply.status, 'color: #dc2121c7' );
                            }

                            console.group( 'cookie_data');
                            console.log( reply.cookie_data );
                            console.groupEnd();

                        },
                        error: function (jqXHR,textStatus,errorThrown ) {
                            console.log( '%c' + errorThrown, 'color: #dc2121c7');
                        }
                    });
                }

                function calculateValidity( expTime ) {
                    var currentTime = new Date().getTime() / 1000;
                    return currentTime - expTime;
                }

            });
		</script>
		<?php
		td_js_buffer::add_to_footer("\n" . td_util::remove_script_tag(ob_get_clean()));

		$buffy .= $td_block_layout->close_all_tags();

		return $buffy;
	}
}