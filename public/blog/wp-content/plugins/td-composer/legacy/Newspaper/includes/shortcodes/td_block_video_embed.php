<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_video_embed extends td_block {

	private $atts = array();

    public function get_custom_css() {
        // $unique_block_class - the unique class that is on the block. use this to target the specific instance via css
        $unique_block_class = $this->block_uid;

        $compiled_css = '';

        $raw_css =
            "<style>

                /* @pointer_events */
                .$unique_block_class .wpb_video_wrapper {
                    pointer-events: none;
                }
                /* @video_size */
                .$unique_block_class .wpb_video_wrapper {
                    position: relative;
                    height: 0;
                    padding-bottom: 56.25%;
                }
                .$unique_block_class iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100% !important;
                    height: 100% !important;
                }


                /* @f_header */
				.$unique_block_class .td-block-title a,
				.$unique_block_class .td-block-title span {
					@f_header
				}
				/* @f_list */
				.$unique_block_class li {
					@f_list
				}
				
			</style>";


        $td_css_res_compiler = new td_css_res_compiler( $raw_css );
        $td_css_res_compiler->load_settings( __CLASS__ . '::cssMedia', $this->get_all_atts() );

        $compiled_css .= $td_css_res_compiler->compile_css();
        return $compiled_css;
    }

    static function cssMedia( $res_ctx ) {

        if ( tdc_state::is_live_editor_ajax() || tdc_state::is_live_editor_iframe() ) {
            $res_ctx->load_settings_raw('pointer_events', 1);
        }

        $video_source = td_video_support::detect_video_service($res_ctx->get_shortcode_att('video_url'));
        if( $video_source != 'self-hosted' ) {
            $res_ctx->load_settings_raw('video_size', 1);
        }

        /*-- FONTS -- */
        $res_ctx->load_font_settings( 'f_header' );
        $res_ctx->load_font_settings( 'f_list' );

    }

	function render($atts, $content = null){

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

		$buffy = ''; //output buffer


		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

            $video_url = $this->get_att('video_url');
            $controls = $this->get_att('controls');
            $autoplay = $this->get_att('autoplay');
            $loop = $this->get_att('loop');

            //get the block css
            $buffy .= $this->get_block_css();

            //get the js for this block
            $buffy .= $this->get_block_js();

            // block title wrap
            $buffy .= '<div class="td-block-title-wrap">';
                $buffy .= $this->get_block_title(); //get the block title
                $buffy .= $this->get_pull_down_filter(); //get the sub category filter for this block
            $buffy .= '</div>';


            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';
                if ( $video_url == '' ) {
                    $buffy .= td_util::get_block_error('Video Embed', 'Render failed - please enter a video url' );
                } else {
                    $video_service = td_video_support::detect_video_service($video_url);
                    if( td_video_support::validate_video_url($video_url) == FALSE ) {
                        $buffy .= td_util::get_block_error('Video Embed', 'Render failed - please enter a valid video url' );
                    } else {
                        if( $video_service == 'facebook' || $video_service == 'twitter' || !$video_service ) {
                            $buffy .= td_util::get_block_error('Video Embed', 'Render failed - video service is not supported' );
                        } else {
                            $buffy .= td_video_support::render_video($video_url, $controls, $autoplay, $loop);
                        }

                    }
                }

            $buffy .= '</div>';

		$buffy .= '</div>';
		return $buffy;
	}

	function inner($menu_id, $td_column_number = '') {

	}
}