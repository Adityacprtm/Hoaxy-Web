<?php

class td_block_weather extends td_block {

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @city_color */
				.$unique_block_class .td-weather-city {
					color: @city_color;
				}
                /* @condition_color */
				.$unique_block_class .td-weather-condition {
					color: @condition_color;
				}
                /* @loc_icon_color */
				.$unique_block_class .td-location-icon {
					color: @loc_icon_color;
				}
				
                /* @temp_color */
				.$unique_block_class .td-weather-now {
					color: @temp_color;
				}
                /* @temp_min_color */
				.$unique_block_class .td-w-low-temp {
					color: @temp_min_color;
				}
                /* @temp_min_i_color */
				.$unique_block_class .td-down-icon {
					color: @temp_min_i_color;
				}
                /* @temp_max_color */
				.$unique_block_class .td-w-high-temp {
					color: @temp_max_color;
				}
                /* @temp_max_i_color */
				.$unique_block_class .td-up-icon {
					color: @temp_max_i_color;
				}
                /* @sep_color */
				.$unique_block_class .td-weather-information:before {
					background-color: @sep_color;
				}
                /* @humid_color */
				.$unique_block_class .td-weather-section-1 {
					color: @humid_color;
				}
                /* @wind_color */
				.$unique_block_class .td-weather-section-2 {
					color: @wind_color;
				}
                /* @clouds_color */
				.$unique_block_class .td-weather-section-3 {
					color: @clouds_color;
				}
				
                /* @frcst_bg_color */
				.$unique_block_class .td-weather-week:before {
					background-color: @frcst_bg_color;
				}
                /* @frcst_day_color */
				.$unique_block_class .td-weather-days > div:first-child {
					color: @frcst_day_color;
				}
                /* @frcst_temp_color */
				.$unique_block_class .td-weather-days .td-day-degrees {
					color: @frcst_temp_color;
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        /*-- COLORS -- */
        $res_ctx->load_settings_raw( 'city_color', $res_ctx->get_shortcode_att('city_color') );
        $res_ctx->load_settings_raw( 'condition_color', $res_ctx->get_shortcode_att('condition_color') );
        $res_ctx->load_settings_raw( 'loc_icon_color', $res_ctx->get_shortcode_att('loc_icon_color') );

        $res_ctx->load_settings_raw( 'temp_color', $res_ctx->get_shortcode_att('temp_color') );
        $res_ctx->load_settings_raw( 'temp_min_color', $res_ctx->get_shortcode_att('temp_min_color') );
        $res_ctx->load_settings_raw( 'temp_min_i_color', $res_ctx->get_shortcode_att('temp_min_i_color') );
        $res_ctx->load_settings_raw( 'temp_max_color', $res_ctx->get_shortcode_att('temp_max_color') );
        $res_ctx->load_settings_raw( 'temp_max_i_color', $res_ctx->get_shortcode_att('temp_max_i_color') );
        $res_ctx->load_settings_raw( 'sep_color', $res_ctx->get_shortcode_att('sep_color') );
        $res_ctx->load_settings_raw( 'humid_color', $res_ctx->get_shortcode_att('humid_color') );
        $res_ctx->load_settings_raw( 'wind_color', $res_ctx->get_shortcode_att('wind_color') );
        $res_ctx->load_settings_raw( 'clouds_color', $res_ctx->get_shortcode_att('clouds_color') );

        $res_ctx->load_settings_raw( 'frcst_bg_color', $res_ctx->get_shortcode_att('frcst_bg_color') );
        $res_ctx->load_settings_raw( 'frcst_day_color', $res_ctx->get_shortcode_att('frcst_day_color') );
        $res_ctx->load_settings_raw( 'frcst_temp_color', $res_ctx->get_shortcode_att('frcst_temp_color') );

    }


	/**
	 * Disable loop block features. This block does not use a loop and it dosn't need to run a query.
	 */
	function __construct() {
		parent::disable_loop_block_features();
	}



	function render($atts, $content = null) {
		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)
		//$atts['w_location'] = 'Alba Iulia';






		if (empty($td_column_number)) {
			$td_column_number = td_global::vc_get_column_number(); // get the column width of the block from the page builder API
		}

		//$buffy = '';
		$buffy = $this->get_block_js(); //output buffer

		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';


			//get the block js
			$buffy .= $this->get_block_css();

            // block title wrap
            $buffy .= '<div class="td-block-title-wrap">';
                $buffy .= $this->get_block_title();
                $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
            $buffy .= '</div>';

			$buffy .= '<div id=' . $this->block_uid . ' class="td-weather-wrap td_block_inner td-column-' . $td_column_number . '">';
				$buffy.= td_weather::render_generic($atts, $this->block_uid);
			$buffy .= '</div>';
		$buffy .= '</div>';
		return $buffy;
	}

	/**
	 * tagDiv composer specific code:
	 *  - it's added to the end of the iFrame when the live editor is active (when @see td_util::tdc_is_live_editor_iframe()  === true)
	 *  - it is injected int he iFrame and evaluated there in the global scoupe when a new block is added to the page via AJAX!
	 * @return string the JS without <script> tags
	 */
/*
		function js_tdc_get_composer_block() {
			ob_start();
			?>
			<script>

				(function () {
					var tdComposerBlockItem = new tdcComposerBlocksApi.item();
					tdComposerBlockItem.blockUid = '<?php echo $this->block_uid ?>';
					tdComposerBlockItem.callbackDelete = function(blockUid) {
						tdAnimationSprite.deleteItem(blockUid);
						tdcDebug.log('tdComposerBlockItem.callbackDelete(' + blockUid + ') - for weather');
					};
					tdcComposerBlocksApi.addItem(tdComposerBlockItem);
				})();
			</script>
			<?php
			return td_util::remove_script_tag(ob_get_clean());
		}
*/


	/**
	 * tagDiv composer specific code:
	 *  - it's added to the end of the iFrame when the live editor is active (when @see td_util::tdc_is_live_editor_iframe()  === true)
	 *  - it is injected int he iFrame and evaluated there in the global scoupe when a new block is added to the page via AJAX!
	 * @return string the JS without <script> tags
	 */
	function js_tdc_callback_ajax() {
		$buffy = '';

		// add a new composer block - that one has the delete callback
		$buffy .= $this->js_tdc_get_composer_block();

		ob_start();
		?>
		<script>
			(function () {
				var tdAnimationSpriteItem = new tdAnimationSprite.item();

				tdAnimationSpriteItem.jqueryObj = jQuery('.<?php echo $this->block_uid ?> span[class^="td_animation_sprite"]');
				if (tdAnimationSpriteItem.jqueryObj.length) {
					tdAnimationSpriteItem.blockUid = tdAnimationSpriteItem.jqueryObj.data('td-block-uid');   // the block uid is used on the front end editor when we want to delete this item via it's blockuid
					tdAnimationSprite.addItem( tdAnimationSpriteItem );
				}
			})();
		</script>
		<?php
		return $buffy . td_util::remove_script_tag(ob_get_clean());
	}




}