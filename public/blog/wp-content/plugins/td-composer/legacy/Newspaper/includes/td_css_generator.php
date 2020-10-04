<?php

/**
 * @big_grid_large_image is put after @big_grid_small_images so that it will overwrite small posts style
 */

function td_css_generator() {

    $raw_css = "
    <style>
    /* ------------------------------------------------------ */
    /* Newspaper 6 */

    /* ------------------------------------------------------ */
    /* GENERAL Theme Colors */

    /* THEME ACCENT COLOR */
    /* @theme_color */
    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .header-search-wrap .td-drop-down-search:after,
    .header-search-wrap .td-drop-down-search .btn:hover,
    input[type=submit]:hover,
    .td-read-more a,
    .td-post-category:hover,
    .td_top_authors .td-active .td-author-post-count,
    .td_top_authors .td-active .td-author-comments-count,
    .td_top_authors .td_mod_wrap:hover .td-author-post-count,
    .td_top_authors .td_mod_wrap:hover .td-author-comments-count,
    .td-404-sub-sub-title a:hover,
    .td-search-form-widget .wpb_button:hover,
    .td-rating-bar-wrap div,
    .dropcap,
    .td_wrapper_video_playlist .td_video_controls_playlist_wrapper,
    .wpb_default,
    .wpb_default:hover,
    .td-left-smart-list:hover,
    .td-right-smart-list:hover,
    #bbpress-forums button:hover,
    .bbp_widget_login .button:hover,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .widget_product_search input[type=\"submit\"]:hover,
    .single-product .product .summary .cart .button:hover,
    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    #bbpress-forums .bbp-pagination .current,
    #bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,
    .td-theme-slider:hover .slide-meta-cat a,
    a.vc_btn-black:hover,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .td-scroll-up,
    .td-smart-list-button:hover,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-pulldown-syle-2 .td-subcat-dropdown ul:after,
    .td_block_template_9 .td-block-title:after,
    .td_block_template_15 .td-block-title:before,
    div.wpforms-container .wpforms-form div.wpforms-submit-container button[type=submit],
    .td-close-video-fixed {
        background-color: @theme_color;
    }

    .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: @theme_color transparent transparent transparent !important;
    }
    
    
    .td_block_template_4 .td-related-title .td-cur-simple-item,
    .td_block_template_3 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title:after {
        background-color: @theme_color;
    }

    a,
    cite a:hover,
    .td-page-content blockquote p,
    .td-post-content blockquote p,
    .mce-content-body blockquote p,
    .comment-content blockquote p,
    .wpb_text_column blockquote p,
    .td_block_text_with_title blockquote p,
    .td_module_wrap:hover .entry-title a,
    .td-subcat-filter .td-subcat-list a:hover,
    .td-subcat-filter .td-subcat-dropdown a:hover,
    .td_quote_on_blocks,
    .dropcap2,
    .dropcap3,
    .td_top_authors .td-active .td-authors-name a,
    .td_top_authors .td_mod_wrap:hover .td-authors-name a,
    .td-post-next-prev-content a:hover,
    .author-box-wrap .td-author-social a:hover,
    .td-author-name a:hover,
    .td-author-url a:hover,
    .comment-reply-link:hover,
    .logged-in-as a:hover,
    #cancel-comment-reply-link:hover,
    .td-search-query,
    .widget a:hover,
    .td_wp_recentcomments a:hover,
    .archive .widget_archive .current,
    .archive .widget_archive .current a,
    .widget_calendar tfoot a:hover,
    #bbpress-forums li.bbp-header .bbp-reply-content span a:hover,
    #bbpress-forums .bbp-forum-freshness a:hover,
    #bbpress-forums .bbp-topic-freshness a:hover,
    #bbpress-forums .bbp-forums-list li a:hover,
    #bbpress-forums .bbp-forum-title:hover,
    #bbpress-forums .bbp-topic-permalink:hover,
    #bbpress-forums .bbp-topic-started-by a:hover,
    #bbpress-forums .bbp-topic-started-in a:hover,
    #bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,
    #bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,
    .widget_display_replies .bbp-author-name,
    .widget_display_topics .bbp-author-name,
    .td-subfooter-menu li a:hover,
    a.vc_btn-black:hover,
    .td-smart-list-dropdown-wrap .td-smart-list-button:hover,
    .td-instagram-user a,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,
    .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,
    .td_block_template_2 .td-related-title .td-cur-simple-item,
    .td_block_template_5 .td-related-title .td-cur-simple-item,
    .td_block_template_6 .td-related-title .td-cur-simple-item,
    .td_block_template_7 .td-related-title .td-cur-simple-item,
    .td_block_template_8 .td-related-title .td-cur-simple-item,
    .td_block_template_9 .td-related-title .td-cur-simple-item,
    .td_block_template_10 .td-related-title .td-cur-simple-item,
    .td_block_template_11 .td-related-title .td-cur-simple-item,
    .td_block_template_12 .td-related-title .td-cur-simple-item,
    .td_block_template_13 .td-related-title .td-cur-simple-item,
    .td_block_template_14 .td-related-title .td-cur-simple-item,
    .td_block_template_15 .td-related-title .td-cur-simple-item,
    .td_block_template_16 .td-related-title .td-cur-simple-item,
    .td_block_template_17 .td-related-title .td-cur-simple-item,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a,
    .td_outlined_btn,
     .td_block_categories_tags .td-ct-item:hover {
        color: @theme_color;
    }

    a.vc_btn-black.vc_btn_square_outlined:hover,
    a.vc_btn-black.vc_btn_outlined:hover {
        color: @theme_color !important;
    }

    .td-next-prev-wrap a:hover,
    .td-load-more-wrap a:hover,
    .td-post-small-box a:hover,
    .page-nav .current,
    .page-nav:first-child > div,
    #bbpress-forums .bbp-pagination .current,
    .post .td_quote_box,
    .page .td_quote_box,
    a.vc_btn-black:hover,
    .td_block_template_5 .td-block-title > *,
    .td_outlined_btn {
        border-color: @theme_color;
    }

    .td_wrapper_video_playlist .td_video_currently_playing:after {
        border-color: @theme_color !important;
    }

    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent @theme_color transparent;
    }

    .block-title > span,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more, 
    .td_3D_btn,
    .td_shadow_btn,
    .td_default_btn,
    .td_round_btn, 
    .td_outlined_btn:hover {
    	background-color: @theme_color;
    }
    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container {
        border-color: @theme_color;
    }
    .td_block_wrap .td-subcat-item a.td-cur-simple-item {
	    color: @theme_color;
	}


    /* @slider_text */
    .td-grid-style-4 .entry-title
    {
        background-color: @slider_text;
    }


    /* @container_transparent */
    .td-container-wrap,
    .post,
    .tagdiv-type .td_quote_box {
        background-color: transparent;
    }
    

    /* @header_color */
    .block-title > span,
    .block-title > span > a,
    .block-title > a,
    .block-title > label,
    .widgettitle,
    .widgettitle:after,
    .td-trending-now-title,
    .td-trending-now-wrapper:hover .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td_block_template_1 .td-related-title .td-cur-simple-item,
    .td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
    .td-weather-information:before,
    .td-weather-week:before,
    .td_block_exchange .td-exchange-header:before,
    .td-theme-wrap .td_block_template_3 .td-block-title > *,
    .td-theme-wrap .td_block_template_4 .td-block-title > *,
    .td-theme-wrap .td_block_template_7 .td-block-title > *,
    .td-theme-wrap .td_block_template_9 .td-block-title:after,
    .td-theme-wrap .td_block_template_10 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::before,
    .td-theme-wrap .td_block_template_11 .td-block-title::after,
    .td-theme-wrap .td_block_template_14 .td-block-title,
    .td-theme-wrap .td_block_template_15 .td-block-title:before,
    .td-theme-wrap .td_block_template_17 .td-block-title:before {
        background-color: @header_color;
    }

    .block-title,
    .td_block_template_1 .td-related-title,
    .wpb_tabs .wpb_tabs_nav,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title,
    .td-theme-wrap .td_block_template_17 .td-block-title::before {
        border-color: @header_color;
    }

    .td-theme-wrap .td_block_template_4 .td-block-title > *:before,
    .td-theme-wrap .td_block_template_17 .td-block-title::after {
        border-color: @header_color transparent transparent transparent;
    }
    
    .td-theme-wrap .td_block_template_4 .td-related-title .td-cur-simple-item:before {
        border-color: @header_color transparent transparent transparent !important;
    }

    /* @text_header_color */
    .td-theme-wrap .block-title > span,
    .td-theme-wrap .block-title > span > a,
    .td-theme-wrap .widget_rss .block-title .rsswidget,
    .td-theme-wrap .block-title > a,
    .widgettitle,
    .widgettitle > a,
    .td-trending-now-title,
    .wpb_tabs li.ui-tabs-active a,
    .wpb_tabs li:hover a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
    .td-related-title .td-cur-simple-item,
    .td-theme-wrap .td_block_template_2 .td-block-title > *,
    .td-theme-wrap .td_block_template_3 .td-block-title > *,
    .td-theme-wrap .td_block_template_4 .td-block-title > *,
    .td-theme-wrap .td_block_template_5 .td-block-title > *,
    .td-theme-wrap .td_block_template_6 .td-block-title > *,
    .td-theme-wrap .td_block_template_6 .td-block-title:before,
    .td-theme-wrap .td_block_template_7 .td-block-title > *,
    .td-theme-wrap .td_block_template_8 .td-block-title > *,
    .td-theme-wrap .td_block_template_9 .td-block-title > *,
    .td-theme-wrap .td_block_template_10 .td-block-title > *,
    .td-theme-wrap .td_block_template_11 .td-block-title > *,
    .td-theme-wrap .td_block_template_12 .td-block-title > *,
    .td-theme-wrap .td_block_template_13 .td-block-title > span,
    .td-theme-wrap .td_block_template_13 .td-block-title > a,
    .td-theme-wrap .td_block_template_14 .td-block-title > *,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option i,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,
    .td-theme-wrap .td_block_template_14 .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,
    .td-theme-wrap .td_block_template_15 .td-block-title > *,
    .td-theme-wrap .td_block_template_15 .td-block-title-wrap .td-wrapper-pulldown-filter,
    .td-theme-wrap .td_block_template_15 .td-block-title-wrap .td-wrapper-pulldown-filter i,
    .td-theme-wrap .td_block_template_16 .td-block-title > *,
    .td-theme-wrap .td_block_template_17 .td-block-title > * {
    	color: @text_header_color;
    }


    /* ------------------------------------------------------ */
    /* Main Menu */
    /* @mobile_menu_color */
    @media (max-width: 767px) {
        body .td-header-wrap .td-header-main-menu {
            background-color: @mobile_menu_color !important;
        }
    }


    /* @mobile_icons_color */
    @media (max-width: 767px) {
        body #td-top-mobile-toggle i,
        .td-header-wrap .header-search-wrap .td-icon-search {
            color: @mobile_icons_color !important;
        }
    }

    /* @mobile_gradient_one_mob */
    .td-menu-background:before,
    .td-search-background:before {
        background: @mobile_gradient_one_mob;
        background: -moz-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, @mobile_gradient_one_mob), color-stop(100%, @mobile_gradient_two_mob));
        background: -webkit-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -o-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: -ms-linear-gradient(top, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        background: linear-gradient(to bottom, @mobile_gradient_one_mob 0%, @mobile_gradient_two_mob 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='@mobile_gradient_one_mob', endColorstr='@mobile_gradient_two_mob', GradientType=0 );
    }

    /* @mobile_text_active_color */
    .td-mobile-content .current-menu-item > a,
    .td-mobile-content .current-menu-ancestor > a,
    .td-mobile-content .current-category-ancestor > a,
    #td-mobile-nav .td-menu-login-section a:hover,
    #td-mobile-nav .td-register-section a:hover,
    #td-mobile-nav .td-menu-socials-wrap a:hover i,
    .td-search-close a:hover i {
        color: @mobile_text_active_color;
    }

    /* @mobile_button_background_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        background-color: @mobile_button_background_mob;
    }

    /* @mobile_button_color_mob */
    #td-mobile-nav .td-register-section .td-login-button,
    .td-search-wrap-mob .result-msg a {
        color: @mobile_button_color_mob;
    }



    /* @mobile_text_color */
    .td-mobile-content li a,
    .td-mobile-content .td-icon-menu-right,
    .td-mobile-content .sub-menu .td-icon-menu-right,
    #td-mobile-nav .td-menu-login-section a,
    #td-mobile-nav .td-menu-logout a,
    #td-mobile-nav .td-menu-socials-wrap .td-icon-font,
    .td-mobile-close .td-icon-close-mobile,
    .td-search-close .td-icon-close-mobile,
    .td-search-wrap-mob,
    .td-search-wrap-mob #td-header-search-mob,
    #td-mobile-nav .td-register-section,
    #td-mobile-nav .td-register-section .td-login-input,
    #td-mobile-nav label,
    #td-mobile-nav .td-register-section i,
    #td-mobile-nav .td-register-section a,
    #td-mobile-nav .td_display_err,
    .td-search-wrap-mob .td_module_wrap .entry-title a,
    .td-search-wrap-mob .td_module_wrap:hover .entry-title a,
    .td-search-wrap-mob .td-post-date {
        color: @mobile_text_color;
    }
    .td-search-wrap-mob .td-search-input:before,
    .td-search-wrap-mob .td-search-input:after,
    #td-mobile-nav .td-menu-login-section .td-menu-login span {
        background-color: @mobile_text_color;
    }

    #td-mobile-nav .td-register-section .td-login-input {
        border-bottom-color: @mobile_text_color !important;
    }
    
    
    
    
    /* ------------------------------------------------------ */
    /* Content */
    /* @page_title_color */
    .td-page-header h1,
    .td-page-title {
    	color: @page_title_color;
    }

    /* @page_content_color */
    .td-page-content p,
    .td-page-content .td_block_text_with_title {
    	color: @page_content_color;
    }

    /* @page_h_color */
    .td-page-content h1,
    .td-page-content h2,
    .td-page-content h3,
    .td-page-content h4,
    .td-page-content h5,
    .td-page-content h6 {
    	color: @page_h_color;
    }

    .td-page-content .widgettitle {
        color: #fff;
    }

    /* @thumb_placeholder */
    .td_module_wrap .td-image-wrap:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url(@thumb_placeholder);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        z-index: -1;
    }



    /* @mobile_background_image */
    .td-menu-background,
    .td-search-background {
        background-image: url('@mobile_background_image');
    }

    /* @mobile_background_repeat */
    .td-menu-background,
    .td-search-background {
        background-repeat: @mobile_background_repeat;
    }

    /* @mobile_background_size */
    .td-menu-background,
    .td-search-background {
        background-size: @mobile_background_size;
    }

    /* @mobile_background_position */
    .td-menu-background,
    .td-search-background {
        background-position: @mobile_background_position;
    }


    /* ------------------------------------------------------ */
    /* @main_menu */
    ul.sf-menu > .menu-item > a {
        @main_menu
    }
    /* @main_sub_menu */
    .sf-menu ul .menu-item a {
        @main_sub_menu
    }
    /* @mobile_menu */
    .td-mobile-content .td-mobile-main-menu > li > a {
        @mobile_menu
    }
    /* @mobile_sub_menu */
    .td-mobile-content .sub-menu a {
        @mobile_sub_menu
    }
    /* @text_logo */
    .td-header-wrap .td-logo-text-container .td-logo-text {
        @text_logo
    }
    /* @text_logo_tagline */
    .td-header-wrap .td-logo-text-container .td-tagline-text {
        @text_logo_tagline
    }



    /* mobile_general */
	#td-mobile-nav,
	#td-mobile-nav .wpb_button,
	.td-search-wrap-mob {
		@mobile_general
	}


	/* @page_title */
    .td-page-title,
    .td-category-title-holder .td-page-title {
    	@page_title
    }
    /* @page_content */
    .td-page-content p,
    .td-page-content li,
    .td-page-content .td_block_text_with_title,
    .wpb_text_column p {
    	@page_content
    }
    /* @page_h1 */
    .td-page-content h1,
    .wpb_text_column h1 {
    	@page_h1
    }
    /* @page_h2 */
    .td-page-content h2,
    .wpb_text_column h2 {
    	@page_h2
    }
    /* @page_h3 */
    .td-page-content h3,
    .wpb_text_column h3 {
    	@page_h3
    }
    /* @page_h4 */
    .td-page-content h4,
    .wpb_text_column h4 {
    	@page_h4
    }
    /* @page_h5 */
    .td-page-content h5,
    .wpb_text_column h5 {
    	@page_h5
    }
    /* @page_h6 */
    .td-page-content h6,
    .wpb_text_column h6 {
    	@page_h6
    }



	/* @body_text */
    body, p {
    	@body_text
    }




    /* @bbpress_header */
    #bbpress-forums .bbp-header .bbp-forums,
    #bbpress-forums .bbp-header .bbp-topics,
    #bbpress-forums .bbp-header {
    	@bbpress_header
    }
    /* @bbpress_titles */
    #bbpress-forums .hentry .bbp-forum-title,
    #bbpress-forums .hentry .bbp-topic-permalink {
    	@bbpress_titles
    }
    /* @bbpress_subcategories */
    #bbpress-forums .bbp-forums-list li {
    	@bbpress_subcategories
    }
    /* @bbpress_description */
    #bbpress-forums .bbp-forum-info .bbp-forum-content {
    	@bbpress_description
    }
    /* @bbpress_author */
    #bbpress-forums div.bbp-forum-author a.bbp-author-name,
    #bbpress-forums div.bbp-topic-author a.bbp-author-name,
    #bbpress-forums div.bbp-reply-author a.bbp-author-name,
    #bbpress-forums div.bbp-search-author a.bbp-author-name,
    #bbpress-forums .bbp-forum-freshness .bbp-author-name,
    #bbpress-forums .bbp-topic-freshness a:last-child {
    	@bbpress_author
    }
    /* @bbpress_replies */
    #bbpress-forums .hentry .bbp-topic-content p,
    #bbpress-forums .hentry .bbp-reply-content p {
    	@bbpress_replies
    }
    /* @bbpress_notices */
    #bbpress-forums div.bbp-template-notice p {
    	@bbpress_notices
    }
    /* @bbpress_pagination */
    #bbpress-forums .bbp-pagination-count,
    #bbpress-forums .page-numbers {
    	@bbpress_pagination
    }
    /* @bbpress_topic */
    #bbpress-forums .bbp-topic-started-by,
    #bbpress-forums .bbp-topic-started-by a,
    #bbpress-forums .bbp-topic-started-in,
    #bbpress-forums .bbp-topic-started-in a {
    	@bbpress_topic
    }
    
    /* @login_text_color */
    .white-popup-block,
    .mfp-content .td-login-panel-title,
    .mfp-content .td-login-inputs,
    .mfp-content .td-login-input,
    .mfp-content .td-login-info-text,
    .mfp-content #register-link,
    .mfp-content #login-form .mfp-close:before,
    .mfp-content .td-back-button i {
        color: @login_text_color;
    }
    .mfp-content .td-login-inputs:after {
        background-color: @login_text_color;
    }
    .mfp-content #register-link:before {
        border-color: @login_text_color;
    }
    /* @login_button_background */
    .mfp-content .td-login-button {
        background-color: @login_button_background;
    }
    /* @login_button_color */
    .mfp-content .td-login-button {
        color: @login_button_color;
    }
    /* @login_hover_background */
    .mfp-content .td-login-button:active,
    .mfp-content .td-login-button:hover {
        background-color: @login_hover_background;
    }
    /* @login_hover_color */
    .mfp-content .td-login-button:active,
    .mfp-content .td-login-button:hover {
        color: @login_hover_color;
    }
    /* @login_gradient_one */
    .white-popup-block:after {
        background: @login_gradient_one;
        background: -moz-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: -webkit-gradient(left bottom, right top, color-stop(0%, @login_gradient_one), color-stop(100%, @login_gradient_two));
        background: -webkit-linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
        background: linear-gradient(45deg, @login_gradient_one 0%, @login_gradient_two 100%);
    }


    /* @login_background_image */
    .white-popup-block:before {
        background-image: url('@login_background_image');
    }

    /* @login_background_repeat */
    .white-popup-block:before {
        background-repeat: @login_background_repeat;
    }

    /* @login_background_size */
    .white-popup-block:before {
        background-size: @login_background_size;
    }

    /* @login_background_position */
    .white-popup-block:before {
        background-position: @login_background_position;
    }

    /* @login_background_opacity */
    .white-popup-block:before {
        opacity: @login_background_opacity;
    }
    
    /* @login_general */
	.white-popup-block,
	.white-popup-block .wpb_button {
		@login_general
	}

    </style>
    ";



    $td_css_compiler = new td_css_compiler($raw_css);
    //the template directory uri
    $td_css_compiler->load_setting_raw('get_template_directory_uri', get_template_directory_uri());


    //get $typography array from db and added to generated css
    $td_typography_array = td_fonts::td_get_typography_sections_from_db();
    if(is_array($td_typography_array) and !empty($td_typography_array)) {

        foreach ($td_typography_array as $section_id => $section_css_array) {
            $td_css_compiler->load_setting_array(array($section_id => $section_css_array));
        }
    }

    // mobile menu/search background
    $td_css_compiler->load_setting('mobile_background_image');
    $td_css_compiler->load_setting('mobile_background_repeat');
    $td_css_compiler->load_setting('mobile_background_size');
    $td_css_compiler->load_setting('mobile_background_position');

    // sign in/join background
    $td_css_compiler->load_setting('login_background_image');
    $td_css_compiler->load_setting('login_background_repeat');
    $td_css_compiler->load_setting('login_background_size');
    $td_css_compiler->load_setting('login_background_position');
    $td_css_compiler->load_setting('login_background_opacity');

    // sign in/join color
    $td_css_compiler->load_setting('login_text_color');
    $td_css_compiler->load_setting('login_button_background');
    $td_css_compiler->load_setting('login_button_color');
    $td_css_compiler->load_setting('login_hover_background');
    $td_css_compiler->load_setting('login_hover_color');
    // login gradient color
    $td_css_compiler->load_setting('login_gradient_one');
    $td_css_compiler->load_setting('login_gradient_two');
    //color one is empty
    if (empty($td_css_compiler->settings['login_gradient_one']) && !empty($td_css_compiler->settings['login_gradient_two'])) {
        $td_css_compiler->load_setting_raw('login_gradient_one', 'rgba(42, 128, 203, 0.8)');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['login_gradient_one']) && empty($td_css_compiler->settings['login_gradient_two'])) {
        $td_css_compiler->load_setting_raw('login_gradient_two', 'rgba(66, 189, 205, 0.8)');
    }

    //load the user settings
    // general
    $td_css_compiler->load_setting('theme_color');
    if( td_util::get_option('tds_site_boxed') == 'hide' && 'Newspaper' == TD_THEME_NAME && td_global::is_tdb_registered() ) {
        $td_css_compiler->load_setting_raw('container_transparent', 1);
    }
    $td_css_compiler->load_setting('header_color');
    $td_css_compiler->load_setting('text_header_color');

    // mobile menu
    $td_css_compiler->load_setting('mobile_menu_color');
    $td_css_compiler->load_setting('mobile_icons_color');
    $td_css_compiler->load_setting('mobile_text_color');
    $td_css_compiler->load_setting('mobile_text_active_color');

    // menu gradient color
    $td_css_compiler->load_setting('mobile_gradient_one_mob');
    $td_css_compiler->load_setting('mobile_gradient_two_mob');
    //color one is empty
    if (empty($td_css_compiler->settings['mobile_gradient_one_mob']) && !empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_one_mob', '#333145');
    }
    //color two is empty
    if (!empty($td_css_compiler->settings['mobile_gradient_one_mob']) && empty($td_css_compiler->settings['mobile_gradient_two_mob'])) {
        $td_css_compiler->load_setting_raw('mobile_gradient_two_mob', '#b8333e');
    }


    $td_css_compiler->load_setting('mobile_button_background_mob');
    $td_css_compiler->load_setting('mobile_button_color_mob');

	// pages ---------
	$td_css_compiler->load_setting('page_title_color');
	$td_css_compiler->load_setting('page_content_color');
	$td_css_compiler->load_setting('page_h_color');

    // thumb placeholder ---------
    $thumb_placeholder = td_util::get_option('tds_thumb_placeholder');
    if( $thumb_placeholder != '' ) {
        $td_css_compiler->load_setting_raw('thumb_placeholder', $thumb_placeholder);
    }


    //load the selection color
    $tds_theme_color = td_util::get_option('tds_theme_color');
    if (!empty($tds_theme_color)) {
        //the select
        $td_css_compiler->load_setting_raw('select_color', td_util::adjustBrightness($tds_theme_color, 50));

        //the sliders text
        if ( td_util::is_rgba( $tds_theme_color ) ) {
            $td_css_compiler->load_setting_raw('slider_text', $tds_theme_color);
        } else {
            $td_css_compiler->load_setting_raw('slider_text', td_util::hex2rgba($tds_theme_color, 0.7));
        }
    }


    /**
     * add td_fonts_css_buffer from database into the source of the page
     *
     * td_fonts_css_buffer : used to store the css generated for custom font files in the database
     */
    $td_fonts_css_buffer = td_fonts::td_add_fonts_css_buffer();



    /* add block styles */
    $td_block_styles = td_options::get_array('td_block_styles');

    //check if we have something set by the user
    if(!empty($td_block_styles)) {
        foreach($td_block_styles as $style_name => $array_style_options) {
            foreach($array_style_options as $option_key => $option_val){
                if(!empty($td_block_styles[$style_name][$option_key])) {

                    $option_name_generator = str_replace('tds_', $style_name . '_', $option_key);

                    switch ($option_key) {
                        case 'tds_block_drop_down_background_color':
                            $td_css_compiler->load_setting_raw($option_name_generator, td_util::hex2rgba($td_block_styles[$style_name][$option_key], 0.95));
                            $td_css_compiler->load_setting_raw($option_name_generator . '_ie8' , $td_block_styles[$style_name][$option_key]);
                            break;

                        case 'tds_block_module_post_comments_box_background_color':
                            $td_css_compiler->load_setting_raw($option_name_generator , $td_block_styles[$style_name][$option_key]);

                            //converting hex color to rgb
                            $rgb_color = td_util::html2rgb($td_block_styles[$style_name][$option_key]);

                            //converting rgb to hsl
                            $hsl_color = td_util::rgb2Hsl($rgb_color[0], $rgb_color[1], $rgb_color[2]);

                            //this is a hack for HLS color: red is 0 in HLS and no output is generated
                            if(intval($hsl_color[0] == 0)) {
                                $hsl_color[0] = 1;
                            }

                            $td_css_compiler->load_setting_raw($option_name_generator . '_after' , $hsl_color[0]);
                            break;

                        default:
                            $td_css_compiler->load_setting_raw($option_name_generator, $td_block_styles[$style_name][$option_key]);
                    }
                }
            }
        }
    }


    //output the style
    //td_css_buffer::add($td_css_compiler->compile_css());
    return $td_fonts_css_buffer . $td_css_compiler->compile_css();

}

