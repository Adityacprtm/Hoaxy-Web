<?php

/**
 * @big_grid_large_image is put after @big_grid_small_images so that it will overwrite small posts style
 */

function td_css_generator_mob() {

    $raw_css = "
	    <style>
	
	    /* @theme_color_mob */
	    a,
	    .td-post-author-name a,
	    .td-mobile-content .current-menu-item > a,
	    .td-mobile-content .current-menu-ancestor > a,
	    .footer-email-wrap a,
	    .td-search-query,
	    .td-page-content blockquote p,
	    .td-post-content blockquote p {
	        color: @theme_color_mob;
	    }
	
	    .td-scroll-up,
	    .td-rating-bar-wrap div,
	    .td-page-content .dropcap,
	    .td-post-content .dropcap,
	    .comment-content .dropcap,
	    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper {
	        background-color: @theme_color_mob;
	    }
	
	
	    .td_quote_box,
	    .td_wrapper_video_playlist .td_video_currently_playing:after {
	        border-color: @theme_color_mob;
	    }
	
	    /* @menu_background_mob */
	    .td-header-wrap {
	        background-color: @menu_background_mob;
	    }
	    /* @menu_icon_color_mob */
	    #td-top-mobile-toggle i,
	    .td-search-icon .td-icon-search {
	        color: @menu_icon_color_mob;
	    }
	    /* @menu_text_color_mob */
	    .td-mobile-content li a,
	    .td-mobile-content .td-icon-menu-right,
	    .td-mobile-content .sub-menu .td-icon-menu-right,
	    #td-mobile-nav .td-menu-login-section a,
	    #td-mobile-nav .td-menu-logout a,
	    #td-mobile-nav .td-menu-socials-wrap .td-icon-font,
	    .td-mobile-close .td-icon-close-mobile,
	    .td-search-close .td-icon-close-mobile,
	    .td-search-wrap,
	    .td-search-wrap #td-header-search,
	    #td-mobile-nav .td-register-section,
	    #td-mobile-nav .td-register-section .td-login-input,
	    #td-mobile-nav label,
	    #td-mobile-nav .td-register-section i,
	    #td-mobile-nav .td-register-section a,
	    #td-mobile-nav .td_display_err,
	    .td-search-wrap .td_module_wrap .entry-title a,
	    .td-search-wrap .td_module_wrap:hover .entry-title a,
	    .td-search-wrap .td-post-date {
	        color: @menu_text_color_mob;
	    }
	    .td-search-wrap .td-search-input:before,
	    .td-search-wrap .td-search-input:after,
	    #td-mobile-nav .td-menu-login-section .td-menu-login span {
	        background-color: @menu_text_color_mob;
	    }
	
	    #td-mobile-nav .td-register-section .td-login-input {
	        border-bottom-color: @menu_text_color_mob !important;
	    }
	
	    /* @menu_text_active_color_mob */
	    .td-mobile-content .current-menu-item > a,
	    .td-mobile-content .current-menu-ancestor > a,
	    .td-mobile-content .current-category-ancestor > a,
	    #td-mobile-nav .td-menu-login-section a:hover,
	    #td-mobile-nav .td-register-section a:hover,
	    #td-mobile-nav .td-menu-socials-wrap a:hover i,
	    .td-search-close a:hover i {
	        color: @menu_text_active_color_mob;
	    }
	
	    /* @menu_button_background_mob */
	    #td-mobile-nav .td-register-section .td-login-button,
	    .td-search-wrap .result-msg a {
	        background-color: @menu_button_background_mob;
	    }
	
	    /* @menu_button_color_mob */
	    #td-mobile-nav .td-register-section .td-login-button,
	    .td-search-wrap .result-msg a {
	        color: @menu_button_color_mob;
	    }
	
	
	    /* @menu_gradient_one_mob */
	    .td-menu-background:before,
	    .td-search-background:before {
	        background: @menu_gradient_one_mob;
	        background: -moz-linear-gradient(top, @menu_gradient_one_mob 0%, @menu_gradient_two_mob 100%);
	        background: -webkit-gradient(left top, left bottom, color-stop(0%, @menu_gradient_one_mob), color-stop(100%, @menu_gradient_two_mob));
	        background: -webkit-linear-gradient(top, @menu_gradient_one_mob 0%, @menu_gradient_two_mob 100%);
	        background: -o-linear-gradient(top, @menu_gradient_one_mob 0%, @menu_gradient_two_mob 100%);
	        background: -ms-linear-gradient(top, @menu_gradient_one_mob 0%, @menu_gradient_two_mob 100%);
	        background: linear-gradient(to bottom, @menu_gradient_one_mob 0%, @menu_gradient_two_mob 100%);
	        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='@menu_gradient_one_mob', endColorstr='@menu_gradient_two_mob', GradientType=0 );
	    }
	
	
	     /* @footer_background_mob */
	    .td-mobile-footer-wrap {
	        background-color: @footer_background_mob;
	    }
	     /* @footer_text_color_mob */
	    .td-mobile-footer-wrap,
	    .td-mobile-footer-wrap a,
	    .td-mobile-footer-wrap .block-title span {
	        color: @footer_text_color_mob;
	    }
	
	    /* @sub_footer_background_mob */
	    .td-mobile-sub-footer-wrap {
	        background-color: @sub_footer_background_mob;
	    }
	
	    /* @sub_footer_text_color_mob */
	    .td-mobile-sub-footer-wrap,
	    .td-mobile-sub-footer-wrap a {
	        color: @sub_footer_text_color_mob;
	    }
	
	
	    /* @mobile_background_image_mob */
	    .td-menu-background,
	    .td-search-background {
	        background-image: url('@mobile_background_image_mob');
	    }
	
	    /* @mobile_background_repeat_mob */
	    .td-menu-background,
	    .td-search-background {
	        background-repeat: @mobile_background_repeat_mob;
	    }
	
	    /* @mobile_background_size_mob */
	    .td-menu-background,
	    .td-search-background {
	        background-size: @mobile_background_size_mob;
	    }
	
	    /* @mobile_background_position_mob */
	    .td-menu-background,
	    .td-search-background {
	        background-position: @mobile_background_position_mob;
	    }
	    
	    /* @mt_main_menu_mob */
	    .td-mobile-content li a {
            @mt_main_menu_mob
	    }
	    /* @mt_text_logo */
	    .td-main-menu-logo .td-logo-text {
	        @mt_text_logo
	    }
	    /* @mt_tagline_text */
	    .td-main-menu-logo .td-tagline-text {
	        @mt_tagline_text
	    }
	    
	    /* @mt_module_general */
	    .td_module_mob_1 .entry-title,
	    .td_module_mob_2 .entry-title {
	        @mt_module_general
	    }
	    /* @mt_module_1 */
	    .td_module_mob_1 .entry-title {
	        @mt_module_1
	    }
	    /* @mt_module_2 */
	    .td_module_mob_2 .entry-title {
	        @mt_module_2
	    }
	    
	    /* @mt_post_title */
	    header .entry-title {
	        @mt_post_title
	    }
	    /* @mt_post_content */
	    .td-post-content p,
	    .td-post-content {
	        @mt_post_content
	    }
	    /* @mt_post_title */
	    header .entry-title {
	        @mt_post_title
	    }
	    /* @mt_blockquote */
	    .td-page-content blockquote p,
	    .td-post-content blockquote p,
	    .bbpress blockquote p,
	    .woocommerce #tab-description blockquote p,
	    .comment-content blockquote p {
	        @mt_blockquote
	    }
	    /* @mt_box_quote */
	    .td-page-content .td_quote_box p,
	    .td-post-content .td_quote_box p,
	    .bbpress .td_quote_box p,
	    .woocommerce #tab-description .td_quote_box p,
	    .comment-content .td_quote_box p {
	        @mt_box_quote
	    }
	    /* @mt_pull_quote */
	    .td-page-content .td_pull_quote p,
	    .td-post-content .td_pull_quote p,
	    .bbpress .td_pull_quote p,
	    .woocommerce #tab-description .td_pull_quote p,
	    .comment-content .td_pull_quote p {
	        @mt_pull_quote
	    }
	    /* @mt_lists */
	    .td-page-content p,
	    .td-post-content p,
	    .woocommerce #tab-descriptiony p,
	    .td-page-content li,
	    .td-post-content li,
	    .woocommerce #tab-descriptiony li {
	        @mt_lists
	    }
	    /* @mt_h1 */
	    .td-post-content h1 {
	        @mt_h1
	    }
	    /* @mt_h2 */
	    .td-post-content h2 {
	        @mt_h2
	    }
	    /* @mt_h3 */
	    .td-post-content h3 {
	        @mt_h3
	    }
	    /* @mt_h4 */
	    .td-post-content h4 {
	        @mt_h4
	    }
	    /* @mt_h5 */
	    .td-post-content h5 {
	        @mt_h5
	    }
	    /* @mt_h6 */
	    .td-post-content h6 {
	        @mt_h6
	    }
	    
	    /* @mt_post_category */
	    .td-post-header .td-category a {
	        @mt_post_category
	    }
	    /* @mt_post_author */
	    header .td-module-meta-info .td-post-author-name {
	        @mt_post_author
	    }
	    /* @mt_post_date */
	    header .td-module-meta-info .td-post-date {
	        @mt_post_date
	    }
	    /* @mt_post_views_comments */
	    header .td-module-meta-info .td-post-comments,
	    header .td-module-meta-info .td-post-views {
	        @mt_post_views_comments
	    }
	    /* @mt_post_via_source_tags */
	    .td-post-source-tags .td-post-small-box {
	        @mt_post_via_source_tags
	    }
	    /* @mt_post_next_prev_title */
	    .td-post-next-prev-content a {
	        @mt_post_next_prev_title
	    }
	    /* @mt_post_author_name */
	    .td-author-name a {
	        @mt_post_author_name
	    }
	    /* @mt_post_author_url */
	    .td-author-url {
	        @mt_post_author_url
	    }
	    /* @mt_post_author_descr */
	    .td-author-description {
	        @mt_post_author_descr
	    }
	    /* @mt_post_related_title */
	    .td_block_related_posts_mob .td_module_mob_1 .entry-title a {
	        @mt_post_related_title
	    }
	    
	    /* @mt_footer_text_about */
	    .td-footer-description {
	        @mt_footer_text_about
	    }
	    /* @mt_footer_copyright */
	    .td-sub-footer-copy {
	        @mt_footer_copyright
	    }
	    /* @mt_footer_menu */
	    .td-sub-footer-menu li {
	        @mt_footer_menu
	    }
	
	    </style>
    ";



    $td_css_compiler = new td_css_compiler($raw_css);


	//get $typography array from db and added to generated css
	$td_typography_array = td_fonts::td_get_typography_sections_from_db();

	if(is_array($td_typography_array) and !empty($td_typography_array)) {

		foreach ($td_typography_array as $section_id => $section_css_array) {
			$td_css_compiler->load_setting_array(array($section_id => $section_css_array));
		}
	}

    // theme color
    $td_css_compiler->load_setting('theme_color_mob');

    // menu color
    $td_css_compiler->load_setting('menu_background_mob');
    $td_css_compiler->load_setting('menu_icon_color_mob');
    $td_css_compiler->load_setting('menu_text_color_mob');
    $td_css_compiler->load_setting('menu_text_active_color_mob');
    $td_css_compiler->load_setting('menu_button_background_mob');
    $td_css_compiler->load_setting('menu_button_color_mob');

    // menu gradient color
    $td_css_compiler->load_setting('menu_gradient_one_mob');
    $td_css_compiler->load_setting('menu_gradient_two_mob');
    //color one is empty
    if (empty($td_css_compiler->settings['menu_gradient_one_mob']) && !empty($td_css_compiler->settings['menu_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('menu_gradient_one_mob', '#333145');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['menu_gradient_one_mob']) && empty($td_css_compiler->settings['menu_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('menu_gradient_two_mob', '#b8333e');
    }


    // footer color
    $td_css_compiler->load_setting('footer_background_mob');
    $td_css_compiler->load_setting('footer_text_color_mob');

    // sub-footer color
    $td_css_compiler->load_setting('sub_footer_background_mob');
    $td_css_compiler->load_setting('sub_footer_text_color_mob');


    // mobile menu/search background
    $td_css_compiler->load_setting('mobile_background_image_mob');
    $td_css_compiler->load_setting('mobile_background_repeat_mob');
    $td_css_compiler->load_setting('mobile_background_size_mob');
    $td_css_compiler->load_setting('mobile_background_position_mob');


    //output the style
    return $td_css_compiler->compile_css();

}

