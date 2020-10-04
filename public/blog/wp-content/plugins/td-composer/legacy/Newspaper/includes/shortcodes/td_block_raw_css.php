<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.08.2016
 * Time: 13:54
 */

class td_block_raw_css extends td_block {

	private $atts = array();

	function render($atts, $content = null) {

		self::disable_loop_block_features();

		parent::render($atts); // sets the live atts, $this->atts, $this->block_uid, $this->td_query (it runs the query)

		$buffy = ''; //output buffer


		$buffy .= '<div class="' . $this->get_block_classes() . '" ' . $this->get_block_html_atts() . '>';

		    $css_content = rawurldecode( base64_decode( strip_tags( $this->get_att('content') ) ) );
		    if ( $css_content == '//CSS code here! Replace this with any non empty css code and that\'s it' ) {
                $css_content = '';
            }


            //td-fix-index class to fix background color z-index
            $buffy .= '<div id=' . $this->block_uid . ' class="td_block_inner td-fix-index">';

                if (td_util::tdc_is_live_editor_iframe() || td_util::tdc_is_live_editor_ajax()) {
                    $buffy .= '<div class="tdc-placeholder-title"></div>';
                }

                if ( $css_content != '' ) {
                    $buffy .= '<style>' . $css_content . '</style>';
                }

            $buffy .= '</div>';
		$buffy .= '</div>';
		return $buffy;
	}

}
