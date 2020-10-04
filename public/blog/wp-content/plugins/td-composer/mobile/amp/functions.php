<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 2/26/2019
 * Time: 3:42 PM
 */

/*
 * add theme specific amp post components
 */
add_action( 'td_wp_booster_loaded', function () {
	require_once( dirname( __FILE__ ) . '/shortcodes/td_block_video_youtube_amp.php' ); // amp youtube playlist block
	require_once( dirname( __FILE__ ) . '/shortcodes/td_block_video_vimeo_amp.php' ); // amp vimeo playlist block
});


/*
 * add amp video playlist support
 */
add_action( 'wp', 'td_add_amp_video_playlist', 20 );
function td_add_amp_video_playlist() {
	$is_amp_endpoint = is_amp_endpoint();
	if ( $is_amp_endpoint ) {
		add_shortcode( 'td_block_video_youtube', 'td_block_video_amp' );
		add_shortcode( 'td_block_video_vimeo', 'td_block_video_amp' );
		add_shortcode( 'rev_slider', function(){
			return '';
		});
	}
}
function td_block_video_amp( $atts, $content, $tag ) {

	$td_block_video_amp_instance = $tag . '_amp';
	$video_playlist = new $td_block_video_amp_instance();

	return $video_playlist->render($atts, $content);
}

/*
 * add mobile theme amp analytics
 */
add_filter( 'amp_analytics_entries', 'tdm_amp_analytics' );
function tdm_amp_analytics( $analytics ) {
	$td_analytics_json = td_util::get_option('tdm_amp_analytics');

	// Validate JSON configuration
	$is_valid_json = AMP_HTML_Utils::is_valid_json( stripslashes( $td_analytics_json ) );
	if ( ! $is_valid_json ) {
		return $analytics;
	}

	if ( empty( $td_analytics_json ) ) {
		return $analytics;
	}

	//$analytics = array();
	$analytics['tdm-amp-google-analytics'] = array(
		'type' => 'googleanalytics',
		'config' => stripslashes( $td_analytics_json ),
	);

	return $analytics;
}

/**
 * remove wp/theme/composer scripts
 */
add_action( 'wp', function (){

	$is_amp_endpoint = is_amp_endpoint();

	if ( $is_amp_endpoint ) {

		// remove wp core actions which are invalid AMP.
		remove_action( 'wp_head', 'wp_post_preview_js', 1 );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'wp_oembed_add_host_js' );

		// remove unnecessary wp actions
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');

		// remove mobile theme scripts
		remove_action('wp_head', 'td_js_generator_mob');
		remove_action('wp_head', 'td_js_buffer_render', 15);
		remove_action('admin_footer', 'td_js_render_wp_admin_footer', 15);

		// td-composer scripts
		remove_action('wp_head', 'td_live_css_on_wp_head');
		remove_action('wp_enqueue_scripts', array('td_api_multi_purpose', 'tdm_plugin_frontend_css' ) );
		remove_action('wp_enqueue_scripts', 'load_front_js');
		remove_action('wp_enqueue_scripts', 'td_live_css_load_plugin_css');
		remove_action('wp_enqueue_scripts', 'td_live_css_load_plugin_js');
		remove_action('wp_enqueue_scripts', 'tdc_on_load_font_icon');
		remove_action('admin_bar_menu', 'td_live_css_admin_bar_button', 9999 );

		// remove theme analytics/custom js scripts
		remove_action( 'wp_head', 'td_header_analytics_code', 40 );

		// wp head actions
		add_action( 'wp_head', function (){

			// look for amp auto ads ad code
			$amp_auto_ads_ad_array = td_util::get_td_ads('tdm_amp_auto_ads');

			// load the amp auto ads script if needed
			if ( !empty( $amp_auto_ads_ad_array['tdm_amp_auto_ads']['ad_code'] ) ) {
				echo '<script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>';
			}

			//require_once ( 'style.php' );
		});

		// remove footer scripts
		remove_action('wp_footer', 'tdc_on_live_css_inject_editor', 100000 );
		remove_action('wp_footer', 'td_js_buffer_footer_render', 100);

		// disqus comments fix
		add_filter( 'dsq_can_load', '__return_false' );

	}

});