<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 19.04.2017
 * Time: 18:04
 */

class tdc_external_shortcode extends tdc_composer_block {

	function render($atts, $content = null, $tag = '') {
		parent::render($atts);

		return '<div class="' . $this->get_wrapper_class() . ' ' . $this->get_block_classes() . '"><span>' . $tag . '</span></div>';
	}
}