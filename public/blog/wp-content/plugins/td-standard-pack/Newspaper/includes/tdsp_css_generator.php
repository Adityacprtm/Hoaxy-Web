<?php

/**
 * @big_grid_large_image is put after @big_grid_small_images so that it will overwrite small posts style
 */

function tdsp_css_generator() {

    $raw_css = "
    <style>
    /* ------------------------------------------------------ */
    /* Standard Pack Plugin */

    /* THEME ACCENT COLOR */
    /* @theme_color */
    .td-header-style-12 .td-header-menu-wrap-full,
    .td-header-style-12 .td-affix,
    .td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,
    .td_category_template_3 .td-current-sub-category,
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
     .td_block_big_grid_9.td-grid-style-1 .td-post-category,
    .td_block_big_grid_9.td-grid-style-5 .td-post-category,
    .td-grid-style-6.td-hover-1 .td-module-thumb:after,
     .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > li > a:hover,
    .tdm-menu-active-style5 .td-header-menu-wrap .sf-menu > .sfHover > a {
        background-color: @theme_color;
    }
    
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td-mega-span h3 a:hover,
    .td_mod_mega_menu:hover .entry-title a,
    .header-search-wrap .result-msg a:hover,
    .td-header-top-menu .td-drop-down-search .td_module_wrap:hover .entry-title a,
    .td-header-top-menu .td-icon-search:hover,
    .td-header-wrap .result-msg a:hover,
    .top-header-menu li a:hover,
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .td-social-icon-wrap > a:hover,
    .td-header-sp-top-widget .td-social-icon-wrap a:hover,
    .td_mod_related_posts:hover h3 > a,
    .td-post-template-11 .td-related-title .td-related-left:hover,
    .td-post-template-11 .td-related-title .td-related-right:hover,
    .td-post-template-11 .td-related-title .td-cur-simple-item,
    .td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,
    .td-category-header .td-pulldown-category-filter-link:hover,
    .td-category-siblings .td-subcat-dropdown a:hover,
    .td-category-siblings .td-subcat-dropdown a.td-current-sub-category,
    .footer-text-wrap .footer-email-wrap a,
    .footer-social-wrap a:hover,
    .td_module_17 .td-read-more a:hover,
    .td_module_18 .td-read-more a:hover,
    .td_module_19 .td-post-author-name a:hover,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,
    .td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover {
        color: @theme_color;
    }
    
    .td-mega-menu-page .wpb_content_element ul li a:hover,
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover {
        color: @theme_color !important;
    }
    
    .td_category_template_8 .td-category-header .td-category a.td-current-sub-category,
    .td_category_template_4 .td-category-siblings .td-category a:hover,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a {
        border-color: @theme_color;
    }
    
    


    /* ------------------------------------------------------ */
    /* TOP Menu */

    /* @top_menu_color */
    .td-header-wrap .td-header-top-menu-full,
    .td-header-wrap .top-header-menu .sub-menu,
    .tdm-header-style-1.td-header-wrap .td-header-top-menu-full,
    .tdm-header-style-1.td-header-wrap .top-header-menu .sub-menu,
    .tdm-header-style-2.td-header-wrap .td-header-top-menu-full,
    .tdm-header-style-2.td-header-wrap .top-header-menu .sub-menu,
    .tdm-header-style-3.td-header-wrap .td-header-top-menu-full,
    .tdm-header-style-3.td-header-wrap .top-header-menu .sub-menu {
        background-color: @top_menu_color;
    }
    .td-header-style-8 .td-header-top-menu-full {
        background-color: transparent;
    }
    .td-header-style-8 .td-header-top-menu-full .td-header-top-menu {
        background-color: @top_menu_color;
        padding-left: 15px;
        padding-right: 15px;
    }

    .td-header-wrap .td-header-top-menu-full .td-header-top-menu,
    .td-header-wrap .td-header-top-menu-full {
        border-bottom: none;
    }


    /* @top_menu_text_color */
    .td-header-top-menu,
    .td-header-top-menu a,
    .td-header-wrap .td-header-top-menu-full .td-header-top-menu,
    .td-header-wrap .td-header-top-menu-full a,
    .td-header-style-8 .td-header-top-menu,
    .td-header-style-8 .td-header-top-menu a,
    .td-header-top-menu .td-drop-down-search .entry-title a {
        color: @top_menu_text_color;
    }

    /* @top_menu_text_hover_color */
    .top-header-menu .current-menu-item > a,
    .top-header-menu .current-menu-ancestor > a,
    .top-header-menu .current-category-ancestor > a,
    .top-header-menu li a:hover,
    .td-header-sp-top-widget .td-icon-search:hover {
        color: @top_menu_text_hover_color;
    }

    /* @top_social_icons_color */
    .td-header-wrap .td-header-sp-top-widget .td-icon-font,
    .td-header-style-7 .td-header-top-menu .td-social-icon-wrap .td-icon-font {
        color: @top_social_icons_color;
    }

    /* @top_social_icons_hover_color */
    .td-header-wrap .td-header-sp-top-widget i.td-icon-font:hover {
        color: @top_social_icons_hover_color;
    }


    /* ------------------------------------------------------ */
    /* Main Menu */

    /* @menu_color */
    .td-header-wrap .td-header-menu-wrap-full,
    .td-header-menu-wrap.td-affix,
    .td-header-style-3 .td-header-main-menu,
    .td-header-style-3 .td-affix .td-header-main-menu,
    .td-header-style-4 .td-header-main-menu,
    .td-header-style-4 .td-affix .td-header-main-menu,
    .td-header-style-8 .td-header-menu-wrap.td-affix,
    .td-header-style-8 .td-header-top-menu-full {
        background-color: @menu_color;
    }
    .td-boxed-layout .td-header-style-3 .td-header-menu-wrap,
    .td-boxed-layout .td-header-style-4 .td-header-menu-wrap,
    .td-header-style-3 .td_stretch_content .td-header-menu-wrap,
    .td-header-style-4 .td_stretch_content .td-header-menu-wrap {
    	background-color: @menu_color !important;
    }
    @media (min-width: 1019px) {
        .td-header-style-1 .td-header-sp-recs,
        .td-header-style-1 .td-header-sp-logo {
            margin-bottom: 28px;
        }
    }
    @media (min-width: 768px) and (max-width: 1018px) {
        .td-header-style-1 .td-header-sp-recs,
        .td-header-style-1 .td-header-sp-logo {
            margin-bottom: 14px;
        }
    }
    .td-header-style-7 .td-header-top-menu {
        border-bottom: none;
    }

    /* @submenu_hover_color */
    .sf-menu > .current-menu-item > a:after,
    .sf-menu > .current-menu-ancestor > a:after,
    .sf-menu > .current-category-ancestor > a:after,
    .sf-menu > li:hover > a:after,
    .sf-menu > .sfHover > a:after,
    .td_block_mega_menu .td-next-prev-wrap a:hover,
    .td-mega-span .td-post-category:hover,
     .td-header-wrap .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .sfHover > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .black-menu .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > li > a:hover,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap .sf-menu > .sfHover > a {
        background-color: @submenu_hover_color;
    }
    .td_block_mega_menu .td-next-prev-wrap a:hover,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .sf-menu > li > a:hover,
    .tdm-menu-active-style4 .tdm-header .sf-menu > .sfHover > a {
        border-color: @submenu_hover_color;
    }
    .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent @submenu_hover_color transparent;
    }
    .td_mega_menu_sub_cats .cur-sub-cat,
    .td_mod_mega_menu:hover .entry-title a,
    .td-theme-wrap .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu ul .sfHover > a,
    .td-theme-wrap .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .sf-menu ul .current-menu-item > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > li > a:hover,
    .tdm-menu-active-style3 .tdm-header.td-header-wrap .sf-menu > .sfHover > a {
        color: @submenu_hover_color;
    }
    

    /* @menu_text_color */
    .td-header-wrap .td-header-menu-wrap .sf-menu > li > a,
    .td-header-wrap .td-header-menu-social .td-social-icon-wrap a,
    .td-header-style-4 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-5 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-6 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-12 .td-header-menu-social .td-social-icon-wrap i,
    .td-header-wrap .header-search-wrap #td-header-search-button .td-icon-search {
        color: @menu_text_color;
    }
    .td-header-wrap .td-header-menu-social + .td-search-wrapper #td-header-search-button:before {
      background-color: @menu_text_color;
    }
    
    
    /* @main_menu */
    ul.sf-menu > .td-menu-item > a,
    .td-theme-wrap .td-header-menu-social {
        @main_menu
    }
    /* @main_sub_menu */
    .sf-menu ul .td-menu-item a {
        @main_sub_menu
    }
    
    
    /* @sticky_menu_color */
    .td-header-menu-wrap.td-affix,
    .td-header-style-3 .td-affix .td-header-main-menu,
    .td-header-style-4 .td-affix .td-header-main-menu,
    .td-header-style-8 .td-header-menu-wrap.td-affix {
        background-color: @sticky_menu_color;
    }
   
    
    /* @sticky_submenu_hover_color */
    .td-affix .sf-menu > .current-menu-item > a:after,
    .td-affix .sf-menu > .current-menu-ancestor > a:after,
    .td-affix .sf-menu > .current-category-ancestor > a:after,
    .td-affix .sf-menu > li:hover > a:after,
    .td-affix .sf-menu > .sfHover > a:after,
    .td-header-wrap .td-affix .black-menu .sf-menu > li > a:hover,
    .td-header-wrap .td-affix .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .td-affix .black-menu .sf-menu > .sfHover > a,
    .td-affix  .header-search-wrap .td-drop-down-search:after,
    .td-affix  .header-search-wrap .td-drop-down-search .btn:hover,
    .td-header-wrap .td-affix  .black-menu .sf-menu > .current-menu-item > a,
    .td-header-wrap .td-affix  .black-menu .sf-menu > .current-menu-ancestor > a,
    .td-header-wrap .td-affix  .black-menu .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap.td-affix .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap.td-affix .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap.td-affix .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap.td-affix .sf-menu > li > a:hover,
    .tdm-menu-active-style5 .tdm-header .td-header-menu-wrap.td-affix .sf-menu > .sfHover > a {
        background-color: @sticky_submenu_hover_color;
    }
    .td-affix  .header-search-wrap .td-drop-down-search:before {
        border-color: transparent transparent @sticky_submenu_hover_color transparent;
    }
    .tdm-menu-active-style4 .tdm-header .td-affix .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style4 .tdm-header .td-affix .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .td-affix .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style4 .tdm-header .td-affix .sf-menu > li > a:hover,
    .tdm-menu-active-style4 .tdm-header .td-affix .sf-menu > .sfHover > a {
        border-color: @sticky_submenu_hover_color;
    }
    .td-theme-wrap .td-affix .sf-menu ul .td-menu-item > a:hover,
    .td-theme-wrap .td-affix .sf-menu ul .sfHover > a,
    .td-theme-wrap .td-affix .sf-menu ul .current-menu-ancestor > a,
    .td-theme-wrap .td-affix .sf-menu ul .current-category-ancestor > a,
    .td-theme-wrap .td-affix .sf-menu ul .current-menu-item > a,
    .tdm-menu-active-style3 .tdm-header .td-affix .sf-menu > .current-menu-item > a,
    .tdm-menu-active-style3 .tdm-header .td-affix .sf-menu > .current-menu-ancestor > a,
    .tdm-menu-active-style3 .tdm-header .td-affix .sf-menu > .current-category-ancestor > a,
    .tdm-menu-active-style3 .tdm-header .td-affix .sf-menu > li > a:hover,
    .tdm-menu-active-style3 .tdm-header .td-affix .sf-menu > .sfHover > a {
        color: @sticky_submenu_hover_color;
    }
    /* @sticky_menu_text_color */
    .td-header-wrap .td-header-menu-wrap.td-affix .sf-menu > li > a,
    .td-header-wrap .td-affix .td-header-menu-social .td-social-icon-wrap a,
    .td-header-style-4 .td-affix .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-5 .td-affix .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-6 .td-affix .td-header-menu-social .td-social-icon-wrap i,
    .td-header-style-12 .td-affix .td-header-menu-social .td-social-icon-wrap i,
    .td-header-wrap .td-affix .header-search-wrap .td-icon-search {
        color: @sticky_menu_text_color;
    }
    .td-header-wrap .td-affix .td-header-menu-social + .td-search-wrapper #td-header-search-button:before {
        background-color: @sticky_menu_text_color;
    }


    /* @menu_social_icons_color */
    .td-header-wrap .td-header-menu-social .td-social-icon-wrap a {
        color: @menu_social_icons_color;
    }
    /* @menu_social_icons_hover_color */
    .td-header-wrap .td-header-menu-social .td-social-icon-wrap:hover i {
        color: @menu_social_icons_hover_color;
    }
    
    
     /* @mega_menu_background */
    .td-theme-wrap .td-mega-menu ul,
    .td-theme-wrap .td_mega_menu_sub_cats .cur-sub-cat,
    .td-theme-wrap .td_mega_menu_sub_cats .cur-sub-cat:before {
        background-color: @mega_menu_background;
    }
    /* @mega_menu_color */
    .td-theme-wrap .td-mega-span h3 a {
        color: @mega_menu_color;
    }
    /* @mega_menu_next_color */
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a {
        color: @mega_menu_next_color;
    }
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a {
        border-color: @mega_menu_next_color;
    }
    /* @mega_menu_subcategories_background */
    .td-theme-wrap .td_mega_menu_sub_cats {
        background-color: @mega_menu_subcategories_background;
    }
    @media (min-width: 1141px) {
        .td_stretch_content .td_block_mega_menu:before {
            background-color: @mega_menu_subcategories_background;
        }
    }
    /* @mega_menu_subcategories_text */
    .td-theme-wrap .td_mega_menu_sub_cats a {
        color: @mega_menu_subcategories_text;
    }
    /* @mega_menu_subcategories_border */
    .td-theme-wrap .sf-menu .td_mega_menu_sub_cats .cur-sub-cat,
    .td-theme-wrap .td-mega-menu ul {
        border-color: @mega_menu_subcategories_border;
    }
    .td-theme-wrap .td_mega_menu_sub_cats:after {
        background-color: @mega_menu_subcategories_border;
    }
    /* @mega_menu_accent_color */
    .td-theme-wrap .td_mod_mega_menu:hover .entry-title a,
    .td-theme-wrap .sf-menu .td_mega_menu_sub_cats .cur-sub-cat {
        color: @mega_menu_accent_color;
    }
    .td-theme-wrap .sf-menu .td-mega-menu .td-post-category:hover,
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a:hover {
        background-color: @mega_menu_accent_color;
    }
    .td-theme-wrap .td-mega-menu .td-next-prev-wrap a:hover {
        border-color: @mega_menu_accent_color;
    }
    
    
    /* @live_search_background */
    .td-theme-wrap .header-search-wrap .td-drop-down-search,
    .td-theme-wrap .td-header-sp-top-widget .td-drop-down-search,
    .td-theme-wrap #td-header-search {
        background-color: @live_search_background;
    }
    /* @live_search_border_color */
    .td-theme-wrap #td-header-search,
    .td-theme-wrap .header-search-wrap .td-aj-search-results {
        border-color: @live_search_border_color !important;
    }
    /* @live_search_text_color */
    .td-theme-wrap .td-aj-search-results .td-module-title a,
    .td-theme-wrap #td-header-search,
    .td-theme-wrap .header-search-wrap .result-msg a {
        color: @live_search_text_color;
    }
    /* @live_search_date_color */
    .td-theme-wrap .td-aj-search-results .td-post-date {
        color: @live_search_date_color;
    }
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover {
        color: #4db2ec;
    }
    /* @live_search_button_background */
    .td-theme-wrap .header-search-wrap .td-drop-down-search .btn {
        background-color: @live_search_button_background;
    }
    /* @live_search_button_text_color */
    .td-theme-wrap .header-search-wrap .td-drop-down-search .btn {
        color: @live_search_button_text_color;
    }
    /* @live_search_accent_color */
    .td-theme-wrap .header-search-wrap .td-drop-down-search .btn:hover,
    .td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,
    .td-theme-wrap .header-search-wrap .result-msg a:hover {
        color: @live_search_accent_color !important;
    }    
    
    /* @header_wrap_color */
    .td-banner-wrap-full,
    .td-header-style-11 .td-logo-wrap-full {
        background-color: @header_wrap_color;
    }
    .td-header-style-11 .td-logo-wrap-full {
        border-bottom: 0;
    }
    @media (min-width: 1019px) {
        .td-header-style-2 .td-header-sp-recs,
        .td-header-style-5 .td-a-rec-id-header > div,
        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-6 .td-a-rec-id-header > div,
        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-7 .td-a-rec-id-header > div,
        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-8 .td-a-rec-id-header > div,
        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-12 .td-a-rec-id-header > div,
        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
            margin-bottom: 24px !important;
        }
    }
    @media (min-width: 768px) and (max-width: 1018px) {
        .td-header-style-2 .td-header-sp-recs,
        .td-header-style-5 .td-a-rec-id-header > div,
        .td-header-style-5 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-6 .td-a-rec-id-header > div,
        .td-header-style-6 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-7 .td-a-rec-id-header > div,
        .td-header-style-7 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-8 .td-a-rec-id-header > div,
        .td-header-style-8 .td-g-rec-id-header > .adsbygoogle,
        .td-header-style-12 .td-a-rec-id-header > div,
        .td-header-style-12 .td-g-rec-id-header > .adsbygoogle {
            margin-bottom: 14px !important;
        }
    }
    
    
    /* @text_logo_color */
    .td-header-wrap .td-logo-text-container .td-logo-text {
        color: @text_logo_color;
    }

    /* @text_logo_tagline_color */
    .td-header-wrap .td-logo-text-container .td-tagline-text {
        color: @text_logo_tagline_color;
    }
    
    
    /* @sub_menu_background */
    .td-theme-wrap .sf-menu .td-normal-menu .sub-menu {
        background-color: @sub_menu_background;
    }
    /* @sub_menu_text_color */
    .td-theme-wrap .sf-menu .td-normal-menu .sub-menu .td-menu-item > a {
        color: @sub_menu_text_color;
    }
    /* @sub_menu_hover_background */
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu .td-normal-menu .sfHover > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-category-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-item > a {
        background-color: @sub_menu_hover_background;
    }
    /* @sub_menu_hover_color */
    .td-theme-wrap .sf-menu .td-normal-menu .td-menu-item > a:hover,
    .td-theme-wrap .sf-menu .td-normal-menu .sfHover > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-category-ancestor > a,
    .td-theme-wrap .sf-menu .td-normal-menu .current-menu-item > a {
        color: @sub_menu_hover_color;
    }
    
    
   
    /* ------------------------------------------------------ */
    /* HEADER BACKGROUND */
    
    /* @header_background_image */
    .td-header-bg:before {
        background-image: url('@header_background_image');
    }

    /* @header_background_repeat */
    .td-header-bg:before {
        background-repeat: @header_background_repeat;
    }

    /* @header_background_size */
    .td-header-bg:before {
        background-size: @header_background_size;
    }

    /* @header_background_position */
    .td-header-bg:before {
        background-position: @header_background_position;
    }

    /* @header_background_opacity */
    .td-header-bg:before {
        opacity: @header_background_opacity;
    }




    /* ------------------------------------------------------ */
    /* Footer */

    /* @footer_color */
    .td-footer-wrapper,
    .td-footer-wrapper .td_block_template_7 .td-block-title > *,
    .td-footer-wrapper .td_block_template_17 .td-block-title,
    .td-footer-wrapper .td-block-title-wrap .td-wrapper-pulldown-filter {
        background-color: @footer_color;
    }

    /* @footer_text_color */
    .td-footer-wrapper,
    .td-footer-wrapper a,
    .td-footer-wrapper .block-title a,
    .td-footer-wrapper .block-title span,
    .td-footer-wrapper .block-title label,
    .td-footer-wrapper .td-excerpt,
    .td-footer-wrapper .td-post-author-name span,
    .td-footer-wrapper .td-post-date,
    .td-footer-wrapper .td-social-style3 .td_social_type a,
    .td-footer-wrapper .td-social-style3,
    .td-footer-wrapper .td-social-style4 .td_social_type a,
    .td-footer-wrapper .td-social-style4,
    .td-footer-wrapper .td-social-style9,
    .td-footer-wrapper .td-social-style10,
    .td-footer-wrapper .td-social-style2 .td_social_type a,
    .td-footer-wrapper .td-social-style8 .td_social_type a,
    .td-footer-wrapper .td-social-style2 .td_social_type,
    .td-footer-wrapper .td-social-style8 .td_social_type,
    .td-footer-template-13 .td-social-name,
    .td-footer-wrapper .td_block_template_7 .td-block-title > * {
        color: @footer_text_color;
    }

    .td-footer-wrapper .widget_calendar th,
    .td-footer-wrapper .widget_calendar td,
    .td-footer-wrapper .td-social-style2 .td_social_type .td-social-box,
    .td-footer-wrapper .td-social-style8 .td_social_type .td-social-box,
    .td-social-style-2 .td-icon-font:after {
        border-color: @footer_text_color;
    }

    .td-footer-wrapper .td-module-comments a,
    .td-footer-wrapper .td-post-category,
    .td-footer-wrapper .td-slide-meta .td-post-author-name span,
    .td-footer-wrapper .td-slide-meta .td-post-date {
        color: #fff;
    }

    /* @border_opacity */
    .td-footer-bottom-full .td-container::before {
        background-color: @border_opacity;
    }

    /* @footer_social_icons_color */
    .td-footer-wrapper .footer-social-wrap .td-icon-font {
        color: @footer_social_icons_color;
    }

    /* @footer_social_icons_hover_color */
    .td-footer-wrapper .footer-social-wrap i.td-icon-font:hover {
        color: @footer_social_icons_hover_color;
    }
    
    /* @footer_bottom_color */
    .td-sub-footer-container {
        background-color: @footer_bottom_color;
    }
    
    /* @footer_bottom_text_color */
    .td-sub-footer-container,
    .td-subfooter-menu li a {
        color: @footer_bottom_text_color;
    }

    /* @footer_bottom_hover_color */
    .td-subfooter-menu li a:hover {
        color: @footer_bottom_hover_color;
    }

    /* @footer_widget_text_color */
	.td-footer-wrapper .block-title > span,
    .td-footer-wrapper .block-title > a,
    .td-footer-wrapper .widgettitle,
    .td-theme-wrap .td-footer-wrapper .td-container .td-block-title > *,
    .td-theme-wrap .td-footer-wrapper .td_block_template_6 .td-block-title:before {
    	color: @footer_widget_text_color;
    }



    /* @footer_background_image */
    .td-footer-wrapper::before {
        background-image: url('@footer_background_image');
    }

    /* @footer_background_repeat */
    .td-footer-wrapper::before {
        background-repeat: @footer_background_repeat;
    }

    /* @footer_background_size */
    .td-footer-wrapper::before {
        background-size: @footer_background_size;
    }

    /* @footer_background_position */
    .td-footer-wrapper::before {
        background-position: @footer_background_position;
    }

    /* @footer_background_opacity */
    .td-footer-wrapper::before {
        opacity: @footer_background_opacity;
    }
    
    
    
    
    /* ------------------------------------------------------ */
    /* Content */

    /* Posts */

    /* @post_title_color */
    .post .td-post-header .entry-title {
        color: @post_title_color;
    }
    .td_module_15 .entry-title a {
        color: @post_title_color;
    }

    /* @post_author_name_color */
    .td-module-meta-info .td-post-author-name a {
    	color: @post_author_name_color;
    }

    /* @post_content_color */
    .td-post-content,
    .td-post-content p {
    	color: @post_content_color;
    }

    /* @post_h_color */
    .td-post-content h1,
    .td-post-content h2,
    .td-post-content h3,
    .td-post-content h4,
    .td-post-content h5,
    .td-post-content h6 {
    	color: @post_h_color;
    }

    /* @post_blockquote_color */
    .post blockquote p,
    .page blockquote p {
    	color: @post_blockquote_color;
    }
    .post .td_quote_box,
    .page .td_quote_box {
        border-color: @post_blockquote_color;
    }
    



    /* ------------------------------------------------------ */
    /* @blocks_title */
    .block-title > span,
    .block-title > a,
    .widgettitle,
    .td-trending-now-title,
    .wpb_tabs li a,
    .vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab > a,
    .td-theme-wrap .td-related-title a,
    .woocommerce div.product .woocommerce-tabs ul.tabs li a,
    .woocommerce .product .products h2:not(.woocommerce-loop-product__title),
    .td-theme-wrap .td-block-title {
        @blocks_title
    }
    /* @block-height */
    .td-theme-wrap .td-subcat-filter,
    .td-theme-wrap .td-subcat-filter .td-subcat-dropdown,
    .td-theme-wrap .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,
    .td-theme-wrap .td-pulldown-category {
        line-height: @block-height;
    }
    .td_block_template_1 .block-title > * {
        padding-bottom: 0;
        padding-top: 0;
    }
    
    /* @blocks_author */
    .td_module_wrap .td-post-author-name a {
        @blocks_author
    }
    /* @blocks_date */
    .td-post-date .entry-date {
        @blocks_date
    }
    /* @blocks_comment */
    .td-module-comments a,
    .td-post-views span,
    .td-post-comments a {
        @blocks_comment
    }
    /* @blocks_category */
    .td-big-grid-meta .td-post-category,
    .td_module_wrap .td-post-category,
    .td-module-image .td-post-category {
        @blocks_category
    }
    
    /* @top_menu */
    .top-header-menu > li > a,
    .td-weather-top-widget .td-weather-now .td-big-degrees,
    .td-weather-top-widget .td-weather-header .td-weather-city,
    .td-header-sp-top-menu .td_data_time {
        @top_menu
    }
    /* @top_sub_menu */
    .top-header-menu .menu-item-has-children li a {
    	@top_sub_menu
    }
	/* @mega_menu */
    .td_mod_mega_menu .item-details a {
        @mega_menu
    }
    /* @mega_menu_categ */
    .td_mega_menu_sub_cats .block-mega-child-cats a {
        @mega_menu_categ
    }
    /* @top-menu-height */
    .top-header-menu > li,
    .td-header-sp-top-menu,
    #td-outer-wrap .td-header-sp-top-widget .td-search-btns-wrap,
    #td-outer-wrap .td-header-sp-top-widget .td-social-icon-wrap {
        line-height: @top-menu-height;
    }
    
    
    /* @blocks_filter */
    .td-subcat-filter .td-subcat-dropdown a,
    .td-subcat-filter .td-subcat-list a,
    .td-subcat-filter .td-subcat-dropdown span {
        @blocks_filter
    }
    /* @blocks_excerpt */
    .td-excerpt,
    .td_module_14 .td-excerpt {
        @blocks_excerpt
    }


    /* @slider_1columns */
    .td-theme-slider.iosSlider-col-1 .td-module-title {
        @slider_1columns
    }
    /* @slider_2columns */
    .td-theme-slider.iosSlider-col-2 .td-module-title {
        @slider_2columns
    }
    /* @slider_3columns */
    .td-theme-slider.iosSlider-col-3 .td-module-title {
        @slider_3columns
    }
    /* @homepage_post */
    .homepage-post .td-post-template-8 .td-post-header .entry-title {
        @homepage_post
    }


    /* modules_general */
	.td_module_wrap .td-module-title {
		@modules_general
	}
    /* @module_1 */
    .td_module_1 .td-module-title {
    	@module_1
    }
    /* @module_2 */
    .td_module_2 .td-module-title {
    	@module_2
    }
    /* @module_3 */
    .td_module_3 .td-module-title {
    	@module_3
    }
    /* @module_4 */
    .td_module_4 .td-module-title {
    	@module_4
    }
    /* @module_5 */
    .td_module_5 .td-module-title {
    	@module_5
    }
    /* @module_6 */
    .td_module_6 .td-module-title {
    	@module_6
    }
    /* @module_7 */
    .td_module_7 .td-module-title {
    	@module_7
    }
    /* @module_8 */
    .td_module_8 .td-module-title {
    	@module_8
    }
    /* @module_9 */
    .td_module_9 .td-module-title {
    	@module_9
    }
    /* @module_10 */
    .td_module_10 .td-module-title {
    	@module_10
    }
    /* @module_11 */
    .td_module_11 .td-module-title {
    	@module_11
    }
    /* @module_12 */
    .td_module_12 .td-module-title {
    	@module_12
    }
    /* @module_13 */
    .td_module_13 .td-module-title {
    	@module_13
    }
    /* @module_14 */
    .td_module_14 .td-module-title {
    	@module_14
    }
    /* @module_15 */
    .td_module_15 .entry-title {
    	@module_15
    }
    /* @module_16 */
    .td_module_16 .td-module-title {
    	@module_16
    }
    /* @module_17 */
    .td_module_17 .td-module-title {
    	@module_17
    }
    /* @module_18 */
    .td_module_18 .td-module-title {
    	@module_18
    }
    /* @module_19 */
    .td_module_19 .td-module-title {
    	@module_19
    }
    
    
    /* @other_modules_general */
	.td_block_trending_now .entry-title,
	.td-theme-slider .td-module-title,
    .td-big-grid-post .entry-title {
		@other_modules_general
	}
    /* @news_ticker */
    .td_block_trending_now .entry-title {
    	@news_ticker
    }
    /* @module_mx1 */
    .td_module_mx1 .td-module-title {
    	@module_mx1
    }
    /* @module_mx2 */
    .td_module_mx2 .td-module-title {
    	@module_mx2
    }
    /* @module_mx3 */
    .td_module_mx3 .td-module-title {
    	@module_mx3
    }
    /* @module_mx4 */
    .td_module_mx4 .td-module-title {
    	@module_mx4
    }
    /* @module_mx5 */
    .td_module_mx5 .td-module-title {
    	@module_mx5
    }
    /* @module_mx6 */
    .td_module_mx6 .td-module-title {
    	@module_mx6
    }
    /* @module_mx7 */
    .td_module_mx7 .td-module-title {
    	@module_mx7
    }
    /* @module_mx8 */
    .td_module_mx8 .td-module-title {
    	@module_mx8
    }
    /* @module_mx9 */
    .td_module_mx9 .td-module-title {
    	@module_mx9
    }
    /* @module_mx10 */
    .td_module_mx10 .td-module-title {
    	@module_mx10
    }
    /* @module_mx11 */
    .td_module_mx11 .td-module-title {
    	@module_mx11
    }
    /* @module_mx12 */
    .td_module_mx12 .td-module-title {
    	@module_mx12
    }
    /* @module_mx13 */
    .td_module_mx13 .td-module-title {
    	@module_mx13
    }
    /* @module_mx14 */
    .td_module_mx14 .td-module-title {
    	@module_mx14
    }
    /* @module_mx15 */
    .td_module_mx15 .td-module-title {
    	@module_mx15
    }
    /* @module_mx16 */
    .td_module_mx16 .td-module-title {
    	@module_mx16
    }
    /* @module_mx17 */
    .td_module_mx17 .td-module-title {
    	@module_mx17
    }
    /* @module_mx18 */
    .td_module_mx18 .td-module-title {
    	@module_mx18
    }
    /* @module_mx19 */
    .td_module_mx19 .td-module-title {
    	@module_mx19
    }
    /* @module_mx20 */
    .td_module_mx20 .td-module-title {
    	@module_mx20
    }
    /* @module_mx21 */
    .td_module_mx21 .td-module-title {
    	@module_mx21
    }
    /* @module_mx22 */
    .td_module_mx22 .td-module-title {
    	@module_mx22
    }
    /* @module_mx23 */
    .td_module_mx23 .td-module-title {
    	@module_mx23
    }
    /* @module_mx24 */
    .td_module_mx24 .td-module-title {
    	@module_mx24
    }
    /* @module_mx25 */
    .td_module_mx25 .td-module-title {
    	@module_mx25
    }
    /* @module_mx26 */
    .td_module_mx26 .td-module-title {
    	@module_mx26
    }
    /* @big_grid_big */
    .td-big-grid-post.td-big-thumb .td-big-grid-meta,
    .td-big-thumb .td-big-grid-meta .entry-title {
        @big_grid_big
    }
    /* @big_grid_medium */
    .td-big-grid-post.td-medium-thumb .td-big-grid-meta,
    .td-medium-thumb .td-big-grid-meta .entry-title {
        @big_grid_medium
    }
    /* @big_grid_small */
    .td-big-grid-post.td-small-thumb .td-big-grid-meta,
    .td-small-thumb .td-big-grid-meta .entry-title {
        @big_grid_small
    }
    /* @big_grid_tiny */
    .td-big-grid-post.td-tiny-thumb .td-big-grid-meta,
    .td-tiny-thumb .td-big-grid-meta .entry-title {
        @big_grid_tiny
    }
    
    
    /* post_general */
	.post .td-post-header .entry-title {
		@post_general
	}
    /* @post_title */
    .td-post-template-default .td-post-header .entry-title {
        @post_title
    }
    /* @post_title_style1 */
    .td-post-template-1 .td-post-header .entry-title {
        @post_title_style1
    }
    /* @post_title_style2 */
    .td-post-template-2 .td-post-header .entry-title {
        @post_title_style2
    }
    /* @post_title_style3 */
    .td-post-template-3 .td-post-header .entry-title {
        @post_title_style3
    }
    /* @post_title_style4 */
    .td-post-template-4 .td-post-header .entry-title {
        @post_title_style4
    }
    /* @post_title_style5 */
    .td-post-template-5 .td-post-header .entry-title {
        @post_title_style5
    }
    /* @post_title_style6 */
    .td-post-template-6 .td-post-header .entry-title {
        @post_title_style6
    }
    /* @post_title_style7 */
    .td-post-template-7 .td-post-header .entry-title {
        @post_title_style7
    }
    /* @post_title_style8 */
    .td-post-template-8 .td-post-header .entry-title {
        @post_title_style8
    }
    /* @post_title_style9 */
    .td-post-template-9 .td-post-header .entry-title {
        @post_title_style9
    }
    /* @post_title_style10 */
    .td-post-template-10 .td-post-header .entry-title {
        @post_title_style10
    }
    /* @post_title_style11 */
    .td-post-template-11 .td-post-header .entry-title {
        @post_title_style11
    }
    /* @post_title_style12 */
    .td-post-template-12 .td-post-header .entry-title {
        @post_title_style12
    }
    /* @post_title_style13 */
    .td-post-template-13 .td-post-header .entry-title {
        @post_title_style13
    }
    
    
    /* @post_content */
    .td-post-content p,
    .td-post-content {
        @post_content
    }
    /* @post_blockquote */
    .post blockquote p,
    .page blockquote p,
    .td-post-text-content blockquote p {
        @post_blockquote
    }
    /* @post_box_quote */
    .post .td_quote_box p,
    .page .td_quote_box p {
        @post_box_quote
    }
    /* @post_pull_quote */
    .post .td_pull_quote p,
    .page .td_pull_quote p,
    .post .wp-block-pullquote blockquote p,
    .page .wp-block-pullquote blockquote p {
        @post_pull_quote
    }
    /* @post_lists */
    .td-post-content li {
        @post_lists
    }
    /* @post_h1 */
    .td-post-content h1 {
        @post_h1
    }
    /* @post_h2 */
    .td-post-content h2 {
        @post_h2
    }
    /* @post_h3 */
    .td-post-content h3 {
        @post_h3
    }
    /* @post_h4 */
    .td-post-content h4 {
        @post_h4
    }
    /* @post_h5 */
    .td-post-content h5 {
        @post_h5
    }
    /* @post_h6 */
    .td-post-content h6 {
        @post_h6
    }
    
    
    /* @post_category */
    .post .td-category a {
        @post_category
    }
    /* @post_author */
    .post header .td-post-author-name,
    .post header .td-post-author-name a {
        @post_author
    }
    /* @post_date */
    .post header .td-post-date .entry-date {
        @post_date
    }
    /* @post_comment */
    .post header .td-post-views span,
    .post header .td-post-comments {
        @post_comment
    }
    /* @via_source_tag */
    .post .td-post-source-tags a,
    .post .td-post-source-tags span {
        @via_source_tag
    }
    /* @post_next_prev_text */
    .post .td-post-next-prev-content span {
        @post_next_prev_text
    }
    /* @post_next_prev */
    .post .td-post-next-prev-content a {
        @post_next_prev
    }
    /* @box_author_name */
    .post .author-box-wrap .td-author-name a {
        @box_author_name
    }
    /* @box_author_url */
    .post .author-box-wrap .td-author-url a {
        @box_author_url
    }
    /* @box_author_description */
    .post .author-box-wrap .td-author-description {
        @box_author_description
    }
    /* @post_image_caption */
	.wp-caption-text,
	.wp-caption-dd,
	 .wp-block-image figcaption {
		@post_image_caption
	}
    /* @post_subtitle_small */
    .td-post-template-default .td-post-sub-title,
    .td-post-template-1 .td-post-sub-title,
    .td-post-template-4 .td-post-sub-title,
    .td-post-template-5 .td-post-sub-title,
    .td-post-template-9 .td-post-sub-title,
    .td-post-template-10 .td-post-sub-title,
    .td-post-template-11 .td-post-sub-title {
        @post_subtitle_small
    }
    /* @post_related */
    .td_block_related_posts .entry-title a {
        @post_related
    }
    /* @post_share */
    .post .td-post-share-title {
        @post_share
    }
    /* @post_subtitle_large */
    .td-post-template-2 .td-post-sub-title,
    .td-post-template-3 .td-post-sub-title,
    .td-post-template-6 .td-post-sub-title,
    .td-post-template-7 .td-post-sub-title,
    .td-post-template-8 .td-post-sub-title {
        @post_subtitle_large
    }


    /* @footer_text_about */
	.footer-text-wrap {
		@footer_text_about
	}
	/* @footer_copyright_text */
	.td-sub-footer-copy {
		@footer_copyright_text
	}
	/* @footer_menu_text */
	.td-sub-footer-menu ul li a {
		@footer_menu_text
	}
	
	
	/* @breadcrumb */
    .entry-crumbs a,
    .entry-crumbs span,
    #bbpress-forums .bbp-breadcrumb a,
    #bbpress-forums .bbp-breadcrumb .bbp-breadcrumb-current {
    	@breadcrumb
    }
    /* @news_ticker_title */
    .td-trending-now-display-area .entry-title {
    	@news_ticker_title
    }
    /* @pagination */
    .page-nav a,
    .page-nav span {
    	@pagination
    }
    /* @dropcap */
    #td-outer-wrap span.dropcap,
    #td-outer-wrap p.has-drop-cap:not(:focus)::first-letter {
    	@dropcap
    }
    /* @default_widgets */
    .widget_archive a,
    .widget_calendar,
    .widget_categories a,
    .widget_nav_menu a,
    .widget_meta a,
    .widget_pages a,
    .widget_recent_comments a,
    .widget_recent_entries a,
    .widget_text .textwidget,
    .widget_tag_cloud a,
    .widget_search input,
    .woocommerce .product-categories a,
    .widget_display_forums a,
    .widget_display_replies a,
    .widget_display_topics a,
    .widget_display_views a,
    .widget_display_stats {
    	@default_widgets
    }
    /* @default_buttons */
	input[type=\"submit\"],
	.td-read-more a,
	.vc_btn,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce #respond input#submit {
		@default_buttons
	}
	/* @woocommerce_products */
	.woocommerce .product a .woocommerce-loop-product__title,
	.woocommerce .widget.woocommerce .product_list_widget a,
	.woocommerce-cart .woocommerce .product-name a {
		@woocommerce_products
	}
	/* @woocommerce_product_title */
	.woocommerce .product .summary .product_title {
		@woocommerce_product_title
	}

    /* @category_tag */
    .category .td-category a {
    	@category_tag
    }
    

    /* @main-menu-height */
    .tdm-menu-active-style2 .tdm-header ul.sf-menu > .td-menu-item,
    .tdm-menu-active-style4 .tdm-header ul.sf-menu > .td-menu-item,
    .tdm-header .tdm-header-menu-btns,
    .tdm-header-style-1 .td-main-menu-logo a,
    .tdm-header-style-2 .td-main-menu-logo a,
    .tdm-header-style-3 .td-main-menu-logo a {
        line-height: @main-menu-height;
    }
    .tdm-header-style-1 .td-main-menu-logo,
    .tdm-header-style-2 .td-main-menu-logo,
    .tdm-header-style-3 .td-main-menu-logo {
        height: @main-menu-height;
    }
    @media (min-width: 768px) {
        .td-header-style-4 .td-main-menu-logo img,
        .td-header-style-5 .td-main-menu-logo img,
        .td-header-style-6 .td-main-menu-logo img,
        .td-header-style-7 .td-header-sp-logo img,
        .td-header-style-12 .td-main-menu-logo img {
            max-height: @main-menu-height;
        }
        .td-header-style-4 .td-main-menu-logo,
        .td-header-style-5 .td-main-menu-logo,
        .td-header-style-6 .td-main-menu-logo,
        .td-header-style-7 .td-header-sp-logo,
        .td-header-style-12 .td-main-menu-logo {
            height: @main-menu-height;
        }
        .td-header-style-4 .td-main-menu-logo a,
        .td-header-style-5 .td-main-menu-logo a,
        .td-header-style-6 .td-main-menu-logo a,
        .td-header-style-7 .td-header-sp-logo a,
        .td-header-style-7 .td-header-sp-logo img,
        .td-header-style-12 .td-main-menu-logo a,
        .td-header-style-12 .td-header-menu-wrap .sf-menu > li > a {
            line-height: @main-menu-height;
        }
        .td-header-style-7 .sf-menu,
        .td-header-style-7 .td-header-menu-social {
            margin-top: 0;
        }
        .td-header-style-7 #td-top-search {
            top: 0;
            bottom: 0;
        }
        .td-header-wrap .header-search-wrap #td-header-search-button .td-icon-search {
            line-height: @main-menu-height;
        }
        .tdm-header-style-1 .td-main-menu-logo img, 
        .tdm-header-style-2 .td-main-menu-logo img, 
        .tdm-header-style-3 .td-main-menu-logo img {
            max-height: @main-menu-height;
        }
    }
    
    
    /* @tdm_menu_btn1_base_color */
    .tdm-menu-btn1 .tds-button1,
    .tdm-menu-btn1 .tds-button6:after {
        background-color: @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button2:before,
    .tdm-menu-btn1 .tds-button6:before {
        border-color: @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button2,
    .tdm-menu-btn1 .tds-button2 i {
        color: @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button3 {
        -webkit-box-shadow: 0 2px 16px @tdm_menu_btn1_base_color;
        -moz-box-shadow: 0 2px 16px @tdm_menu_btn1_base_color;
        box-shadow: 0 2px 16px @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button3:hover {
        -webkit-box-shadow: 0 4px 26px @tdm_menu_btn1_base_color;
        -moz-box-shadow: 0 4px 26px @tdm_menu_btn1_base_color;
        box-shadow: 0 4px 26px @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button7 .tdm-btn-border-top,
    .tdm-menu-btn1 .tds-button7 .tdm-btn-border-bottom {
        background-color: @tdm_menu_btn1_base_color;
    }
    .tdm-menu-btn1 .tds-button8 {
        background: @tdm_menu_btn1_base_color;
    }
                
				
    /* @tdm_menu_btn1_text_color */
    .tdm-menu-btn1 .tds-button1 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button1 i,
    .tdm-menu-btn1 .tds-button2 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button2 i,
    .tdm-menu-btn1 .tds-button3 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button3 i,
    .tdm-menu-btn1 .tds-button4 .tdm-btn .tdm-btn-text,
    .tdm-menu-btn1 .tds-button4 .tdm-btn i,
    .tdm-menu-btn1 .tds-button5 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button5 i,
    .tdm-menu-btn1 .tds-button6 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button6 i,
    .tdm-menu-btn1 .tds-button7 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button7 i,
    .tdm-menu-btn1 .tds-button8 .tdm-btn-text,
    .tdm-menu-btn1 .tds-button8 i {
        color: @tdm_menu_btn1_text_color;
    }

				
    /* @tdm_menu_btn1_base_hover_color */
    .tdm-menu-btn1 .tds-button1:before,
    .tdm-menu-btn1 .tds-button4 .tdm-button-b {
        background-color: @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn1 .tds-button2:hover:before,
    .tdm-menu-btn1 .tds-button6:hover:before{
        border-color: @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn1 .tdm-btn-style:hover {
        color: @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn1 .tds-button3:hover {
        -webkit-box-shadow: 0 4px 26px @tdm_menu_btn1_base_hover_color;
        -moz-box-shadow: 0 4px 26px @tdm_menu_btn1_base_hover_color;
        box-shadow: 0 4px 26px @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn1 .tds-button7:hover .tdm-btn-border-top,
    .tdm-menu-btn1 .tds-button7:hover .tdm-btn-border-bottom {
        background-color: @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn1 .tds-button8:before {
        background-color: @tdm_menu_btn1_base_hover_color;
    }
    
				
    /* @tdm_menu_btn1_text_hover_color */
    .tdm-menu-btn1 .tds-button1:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button1:hover i,
    .tdm-menu-btn1 .tds-button2:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button2:hover i,
    .tdm-menu-btn1 .tds-button3:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button3:hover i,
    .tdm-menu-btn1 .tds-button4 .tdm-button-b .tdm-btn-text,
    .tdm-menu-btn1 .tds-button4 .tdm-button-b i,
    .tdm-menu-btn1 .tds-button5:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button5:hover i,
    .tdm-menu-btn1 .tds-button6:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button6:hover i,
    .tdm-menu-btn1 .tds-button7:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button7:hover i,
    .tdm-menu-btn1 .tds-button8:hover .tdm-btn-text,
    .tdm-menu-btn1 .tds-button8:hover i  {
        color: @tdm_menu_btn1_text_hover_color;
    }

                
    /* @tdm_menu_btn2_base_color */
    .tdm-menu-btn2 .tds-button1,
    .tdm-menu-btn2 .tds-button6:after {
        background-color: @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button2:before,
    .tdm-menu-btn2 .tds-button6:before {
        border-color: @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button2,
    .tdm-menu-btn2 .tds-button2 i {
        color: @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button3 {
        -webkit-box-shadow: 0 2px 16px @tdm_menu_btn2_base_color;
        -moz-box-shadow: 0 2px 16px @tdm_menu_btn2_base_color;
        box-shadow: 0 2px 16px @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button3:hover {
        -webkit-box-shadow: 0 4px 26px @tdm_menu_btn2_base_color;
        -moz-box-shadow: 0 4px 26px @tdm_menu_btn2_base_color;
        box-shadow: 0 4px 26px @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button7 .tdm-btn-border-top,
    .tdm-menu-btn2 .tds-button7 .tdm-btn-border-bottom {
        background-color: @tdm_menu_btn2_base_color;
    }
    .tdm-menu-btn2 .tds-button8 {
        background: @tdm_menu_btn2_base_color;
    }
    
    
    /* @tdm_menu_btn2_text_color */
    .tdm-menu-btn2 .tds-button1 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button1 i,
    .tdm-menu-btn2 .tds-button2 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button2 i,
    .tdm-menu-btn2 .tds-button3 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button3 i,
    .tdm-menu-btn2 .tds-button4 .tdm-btn .tdm-btn-text,
    .tdm-menu-btn2 .tds-button4 .tdm-btn i,
    .tdm-menu-btn2 .tds-button5 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button5 i,
    .tdm-menu-btn2 .tds-button6 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button6 i,
    .tdm-menu-btn2 .tds-button7 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button7 i,
    .tdm-menu-btn2 .tds-button8 .tdm-btn-text,
    .tdm-menu-btn2 .tds-button8 i {
        color: @tdm_menu_btn2_text_color;
    }
    
    
    /* @tdm_menu_btn2_base_hover_color */
    .tdm-menu-btn2 .tds-button1:before,
    .tdm-menu-btn2 .tds-button4 .tdm-button-b {
        background-color: @tdm_menu_btn2_base_hover_color;
    }
    .tdm-menu-btn2 .tds-button2:hover:before,
    .tdm-menu-btn2 .tds-button6:hover:before{
        border-color: @tdm_menu_btn2_base_hover_color;
    }
    .tdm-menu-btn2 .tdm-btn-style:hover {
        color: @tdm_menu_btn1_base_hover_color;
    }
    .tdm-menu-btn2 .tds-button3:hover {
        -webkit-box-shadow: 0 4px 26px @tdm_menu_btn2_base_hover_color;
        -moz-box-shadow: 0 4px 26px @tdm_menu_btn2_base_hover_color;
        box-shadow: 0 4px 26px @tdm_menu_btn2_base_hover_color;
    }
    .tdm-menu-btn2 .tds-button7:hover .tdm-btn-border-top,
    .tdm-menu-btn2 .tds-button7:hover .tdm-btn-border-bottom {
        background-color: @tdm_menu_btn2_base_hover_color;
    }
    .tdm-menu-btn2 .tds-button8:before {
        background-color: @tdm_menu_btn2_base_hover_color;
    }
				
				
    /* @tdm_menu_btn2_text_hover_color */
    .tdm-menu-btn2 .tds-button1:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button1:hover i,
    .tdm-menu-btn2 .tds-button2:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button2:hover i,
    .tdm-menu-btn2 .tds-button3:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button3:hover i,
    .tdm-menu-btn2 .tds-button4 .tdm-button-b .tdm-btn-text,
    .tdm-menu-btn2 .tds-button4 .tdm-button-b i,
    .tdm-menu-btn2 .tds-button5:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button5:hover i,
    .tdm-menu-btn2 .tds-button6:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button6:hover i,
    .tdm-menu-btn2 .tds-button7:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button7:hover i,
    .tdm-menu-btn2 .tds-button8:hover .tdm-btn-text,
    .tdm-menu-btn2 .tds-button8:hover i  {
        color: @tdm_menu_btn2_text_hover_color;
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

    // read line-height for the block header to align the pulldown
    $td_header_height = td_options::get_array('td_fonts');
    if (!empty($td_header_height['blocks_title']['line_height'])) {
        $td_css_compiler->load_setting_raw('block-height', $td_header_height['blocks_title']['line_height']);
    }

    // read line-height for the top-menu to align the social icons in top menu
    $td_top_menu_height = td_options::get_array('td_fonts');
    if (!empty($td_top_menu_height['top_menu']['line_height'])) {
        $td_css_compiler->load_setting_raw('top-menu-height', $td_top_menu_height['top_menu']['line_height']);
    }

    // read line-height for the main-menu to align the logo in menu // nu e folosit
    $td_menu_height = td_options::get_array('td_fonts');
    if (!empty($td_menu_height['main_menu']['line_height'])) {
        $td_css_compiler->load_setting_raw('main-menu-height', $td_menu_height['main_menu']['line_height']);
    }

    // footer text color used for borders with opacity
    $tds_footer_text_color = td_util::get_option('tds_footer_text_color');
    if (!empty($tds_footer_text_color)) {
        $td_css_compiler->load_setting_raw('border_opacity', td_util::hex2rgba($tds_footer_text_color, 0.1));
    }

    // footer background
    $td_css_compiler->load_setting('footer_background_image');
    $td_css_compiler->load_setting('footer_background_repeat');
    $td_css_compiler->load_setting('footer_background_size');
    $td_css_compiler->load_setting('footer_background_position');
    $td_css_compiler->load_setting('footer_background_opacity');


    //load the user settings
    // general
    $td_css_compiler->load_setting('theme_color');


    // header ---------
    $td_css_compiler->load_setting('top_menu_color');
    $td_css_compiler->load_setting('top_menu_text_color');
    $td_css_compiler->load_setting('top_menu_text_hover_color');
    $td_css_compiler->load_setting('top_social_icons_color');
    $td_css_compiler->load_setting('top_social_icons_hover_color');
    $td_css_compiler->load_setting('menu_color');
    $td_css_compiler->load_setting('submenu_hover_color');
    $td_css_compiler->load_setting('menu_text_color');
    $td_css_compiler->load_setting('sticky_menu_color');
    $td_css_compiler->load_setting('sticky_submenu_hover_color');
    $td_css_compiler->load_setting('sticky_menu_text_color');
    $td_css_compiler->load_setting('menu_social_icons_color');
    $td_css_compiler->load_setting('menu_social_icons_hover_color');
    $td_css_compiler->load_setting('header_wrap_color');
    $td_css_compiler->load_setting('text_logo_color');
    $td_css_compiler->load_setting('text_logo_tagline_color');


    // sub menu
    $td_css_compiler->load_setting('sub_menu_background');
    $td_css_compiler->load_setting('sub_menu_text_color');
    $td_css_compiler->load_setting('sub_menu_hover_background');
    $td_css_compiler->load_setting('sub_menu_hover_color');


    // mega menu
    $td_css_compiler->load_setting('mega_menu_background');
    $td_css_compiler->load_setting('mega_menu_color');
    $td_css_compiler->load_setting('mega_menu_next_color');
    $td_css_compiler->load_setting('mega_menu_subcategories_background');
    $td_css_compiler->load_setting('mega_menu_subcategories_text');
    $td_css_compiler->load_setting('mega_menu_subcategories_border');
    $td_css_compiler->load_setting('mega_menu_accent_color');


    // live search
    $td_css_compiler->load_setting('live_search_background');
    $td_css_compiler->load_setting('live_search_border_color');
    $td_css_compiler->load_setting('live_search_text_color');
    $td_css_compiler->load_setting('live_search_date_color');
    $td_css_compiler->load_setting('live_search_button_background');
    $td_css_compiler->load_setting('live_search_button_text_color');
    $td_css_compiler->load_setting('live_search_accent_color');


    // header background
    $td_css_compiler->load_setting('header_background_image');
    $td_css_compiler->load_setting('header_background_repeat');
    $td_css_compiler->load_setting('header_background_size');
    $td_css_compiler->load_setting('header_background_position');
    $td_css_compiler->load_setting('header_background_opacity');


    // footer ---------
    $td_css_compiler->load_setting('footer_color');
    $td_css_compiler->load_setting('footer_text_color');
    $td_css_compiler->load_setting('footer_social_icons_color');
    $td_css_compiler->load_setting('footer_social_icons_hover_color');
    $td_css_compiler->load_setting('footer_bottom_color');
    $td_css_compiler->load_setting('footer_bottom_text_color');
    $td_css_compiler->load_setting('footer_bottom_hover_color');
    $td_css_compiler->load_setting('footer_widget_text_color');


    // posts ---------
    $td_css_compiler->load_setting('post_title_color');
    $td_css_compiler->load_setting('post_author_name_color');
    $td_css_compiler->load_setting('post_content_color');
    $td_css_compiler->load_setting('post_h_color');
    $td_css_compiler->load_setting('post_blockquote_color');


    // multipurpose ---------
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn1_base_color', td_util::get_option('tdm_menu_btn1_base_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn1_text_color', td_util::get_option('tdm_menu_btn1_text_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn1_base_hover_color', td_util::get_option('tdm_menu_btn1_base_hover_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn1_text_hover_color', td_util::get_option('tdm_menu_btn1_text_hover_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn2_base_color', td_util::get_option('tdm_menu_btn2_base_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn2_text_color', td_util::get_option('tdm_menu_btn2_text_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn2_base_hover_color', td_util::get_option('tdm_menu_btn2_base_hover_color') );
    $td_css_compiler->load_setting_raw( 'tdm_menu_btn2_text_hover_color', td_util::get_option('tdm_menu_btn2_text_hover_color') );


    /**
     * add td_fonts_css_buffer from database into the source of the page
     *
     * td_fonts_css_buffer : used to store the css generated for custom font files in the database
     */
    $td_fonts_css_buffer = td_fonts::td_add_fonts_css_buffer();

    //output the style
    //td_css_buffer::add($td_css_compiler->compile_css());
    return $td_fonts_css_buffer . $td_css_compiler->compile_css();

}

