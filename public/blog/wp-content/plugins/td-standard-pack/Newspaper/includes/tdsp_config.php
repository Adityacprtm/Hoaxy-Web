<?php

class tdsp_config {

    static function on_td_global_after_config() {

        /**
         * the headers
         */
        td_api_header_style::add('1',
            array(
                'text' => 'Style 1',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-1.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-1.png'
            )
        );
        td_api_header_style::add('2',
            array(
                'text' => 'Style 2',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-2.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-2.png'
            )
        );
        td_api_header_style::add('3',
            array(
                'text' => 'Style 3',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-3.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-3.png'
            )
        );
        td_api_header_style::add('4',
            array(
                'text' => 'Style 4',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-4.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-4.png'
            )
        );
        td_api_header_style::add('5',
            array(
                'text' => 'Style 5',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-5.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-5.png'
            )
        );
        td_api_header_style::add('6',
            array(
                'text' => 'Style 6',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-6.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-6.png'
            )
        );
        td_api_header_style::add('7',
            array(
                'text' => 'Style 7',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-7.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-7.png'
            )
        );
        td_api_header_style::add('8',
            array(
                'text' => 'Style 8',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-8.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-8.png'
            )
        );
        td_api_header_style::add('9',
            array(
                'text' => 'Style 9',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-9.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-9.png'
            )
        );
        td_api_header_style::add('10',
            array(
                'text' => 'Style 10',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-10.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-10.png'
            )
        );
        td_api_header_style::add('11',
            array(
                'text' => 'Style 11',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-11.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-11.png'
            )
        );
        td_api_header_style::add('12',
            array(
                'text' => 'Style 12',
                'file' => TDSP_THEME_PATH . '/parts/header/header-style-12.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/menu/icon-menu-12.png'
            )
        );

        td_api_header_style::add('tdm_header_style_1',
            array(
                'text' => '<strong>Style 1 - Multipurpose</strong>',
                'file' => TDC_PATH . '/td-multi-purpose/header/tdm-header-style-1.php',
                'img' => TDC_URL . '/td-multi-purpose/images/panel/menu/icon-menu-mp1.png'
            )
        );
        td_api_header_style::add('tdm_header_style_2',
            array(
                'text' => '<strong>Style 2 - Multipurpose</strong>',
                'file' => TDC_PATH . '/td-multi-purpose/header/tdm-header-style-2.php',
                'img' => TDC_URL . '/td-multi-purpose/images/panel/menu/icon-menu-mp2.png'
            )
        );
        td_api_header_style::add('tdm_header_style_3',
            array(
                'text' => '<strong>Style 3 - Multipurpose</strong>',
                'file' => TDC_PATH . '/td-multi-purpose/header/tdm-header-style-3.php',
                'img' => TDC_URL . '/td-multi-purpose/images/panel/menu/icon-menu-mp3.png'
            )
        );



        /**
         * the td_api_top_bar_template
         */
        td_api_top_bar_template::add('td_top_bar_template_1',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/top_bar_templates/icon-top-bar-1.png',
                'file' => TDSP_THEME_PATH . '/parts/header/td_top_bar_template_1.php',
                'text' => 'Style 1'
            )
        );
        td_api_top_bar_template::add('td_top_bar_template_2',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/top_bar_templates/icon-top-bar-2.png',
                'file' => TDSP_THEME_PATH . '/parts/header/td_top_bar_template_2.php',
                'text' => 'Style 2'
            )
        );
        td_api_top_bar_template::add('td_top_bar_template_3',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/top_bar_templates/icon-top-bar-3.png',
                'file' => TDSP_THEME_PATH . '/parts/header/td_top_bar_template_3.php',
                'text' => 'Style 3'
            )
        );
        td_api_top_bar_template::add('td_top_bar_template_4',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/top_bar_templates/icon-top-bar-4.png',
                'file' => TDSP_THEME_PATH . '/parts/header/td_top_bar_template_4.php',
                'text' => 'Style 4'
            )
        );

        td_api_top_bar_template::add('tdm_top_bar_template_1',
            array(
                'img' => TDC_URL . '/td-multi-purpose/images/panel/top_bar_templates/icon-top-bar-mp1.png',
                'file' => TDC_PATH . '/td-multi-purpose/header/tdm_top_bar_template_1.php',
                'text' => 'Style 1 - Multipurpose'
            )
        );



        /**
         * single template list
         */
        td_api_single_template::add('single_template_1',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_1.php',
                'text' => 'Single template 1',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_1.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => true,
            )
        );
        td_api_single_template::add('single_template_2',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_2.php',
                'text' => 'Single template 2',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_2.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_3',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_3.php',
                'text' => 'Single template 3',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_3.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_4',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_4.php',
                'text' => 'Single template 4',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_4.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_5',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_5.php',
                'text' => 'Single template 5',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_5.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_6',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_6.php',
                'text' => 'Single template 6',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_6.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'disable_background' => false,
                'use_featured_image_as_background' => true,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_7',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_7.php',
                'text' => 'Single template 7',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_7.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_8',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_8.php',
                'text' => 'Single template 8',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_8.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'td-boxed-layout',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => true,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );

        td_api_single_template::add('single_template_9',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_9.php',
                'text' => 'Single template 9',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_9.png',
                'show_featured_image_on_all_pages' => false,
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_10',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_10.php',
                'text' => 'Single template 10',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_10.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_11',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_11.php',
                'text' => 'Single template 11',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_11.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_12',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_12.php',
                'text' => 'Single template 12',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_12.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );
        td_api_single_template::add('single_template_13',
            array(
                'file' => TDSP_THEME_PATH . '/parts/single/single_template_13.php',
                'text' => 'Single template 13',
                'img' => TDSP_THEME_URL . '/assets/images/panel/single_templates/single_template_13.png',
                'show_featured_image_on_all_pages' => true, //shows the featured image on all the pages
                'bg_disable_background' => false,          // disable the featured image
                'bg_box_layout_config' => 'auto',                // auto | td-boxed-layout | td-full-layout
                'bg_use_featured_image_as_background' => false,   // uses the featured image as a background
                'exclude_ad_content_top' => false,
            )
        );



        /**
         * category templates
         */
        td_api_category_template::add('td_category_template_1',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_1.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-1.png',
                'text' => 'Style 1',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_2',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_2.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-2.png',
                'text' => 'Style 2',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_3',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_3.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-3.png',
                'text' => 'Style 3',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_4',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_4.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-4.png',
                'text' => 'Style 4',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_5',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_5.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-5.png',
                'text' => 'Style 5',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_6',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_6.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-6.png',
                'text' => 'Style 6',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_7',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_7.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-7.png',
                'text' => 'Style 7',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_template::add('td_category_template_8',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_templates/td_category_template_8.php',
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-8.png',
                'text' => 'Style 8',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );



        /**
         * category top posts styles
         */
        td_api_category_top_posts_style::add('td_category_top_posts_style_1',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_1.php',
                'posts_shown_in_the_loop' => 5,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-1.png',
                'text' => 'Grid 1',
                'td_block_name' => 'td_block_big_grid_1',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_2',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_2.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-2.png',
                'text' => 'Grid 2',
                'td_block_name' => 'td_block_big_grid_2',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_3',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_3.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-3.png',
                'text' => 'Grid 3',
                'td_block_name' => 'td_block_big_grid_3',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_4',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_4.php',
                'posts_shown_in_the_loop' => 2,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-4.png',
                'text' => 'Grid 4',
                'td_block_name' => 'td_block_big_grid_4',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_5',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_5.php',
                'posts_shown_in_the_loop' => 3,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-5.png',
                'text' => 'Grid 5',
                'td_block_name' => 'td_block_big_grid_5',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_6',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_6.php',
                'posts_shown_in_the_loop' => 7,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-6.png',
                'text' => 'Grid 6',
                'td_block_name' => 'td_block_big_grid_6',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_7',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_7.php',
                'posts_shown_in_the_loop' => 7,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-7.png',
                'text' => 'Grid 7',
                'td_block_name' => 'td_block_big_grid_7',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_8',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_8.php',
                'posts_shown_in_the_loop' => 7,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-8.png',
                'text' => 'Grid 8',
                'td_block_name' => 'td_block_big_grid_8',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_9',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_9.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-9.png',
                'text' => 'Grid 9',
                'td_block_name' => 'td_block_big_grid_9',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_10',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_10.php',
                'posts_shown_in_the_loop' => 3,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-10.png',
                'text' => 'Grid 10',
                'td_block_name' => 'td_block_big_grid_10',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_11',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_11.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-11.png',
                'text' => 'Grid 11',
                'td_block_name' => 'td_block_big_grid_11',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_12',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_12.php',
                'posts_shown_in_the_loop' => 3,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-12.png',
                'text' => 'Grid 12',
                'td_block_name' => 'td_block_big_grid_12',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_1',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_1.php',
                'posts_shown_in_the_loop' => 1,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-1.png',
                'text' => 'Grid Full 1',
                'td_block_name' => 'td_block_big_grid_fl_1',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_2',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_2.php',
                'posts_shown_in_the_loop' => 2,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-2.png',
                'text' => 'Grid Full 2',
                'td_block_name' => 'td_block_big_grid_fl_2',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_3',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_3.php',
                'posts_shown_in_the_loop' => 3,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-3.png',
                'text' => 'Grid Full 3',
                'td_block_name' => 'td_block_big_grid_fl_3',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_4',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_4.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-4.png',
                'text' => 'Grid Full 4',
                'td_block_name' => 'td_block_big_grid_fl_4',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_5',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_5.php',
                'posts_shown_in_the_loop' => 5,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-5.png',
                'text' => 'Grid Full 5',
                'td_block_name' => 'td_block_big_grid_fl_5',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_6',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_6.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-6.png',
                'text' => 'Grid Full 6',
                'td_block_name' => 'td_block_big_grid_fl_6',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_7',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_7.php',
                'posts_shown_in_the_loop' => 8,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-7.png',
                'text' => 'Grid Full 7',
                'td_block_name' => 'td_block_big_grid_fl_7',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_8',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_8.php',
                'posts_shown_in_the_loop' => 5,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-8.png',
                'text' => 'Grid Full 8',
                'td_block_name' => 'td_block_big_grid_fl_8',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_9',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_9.php',
                'posts_shown_in_the_loop' => 4,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-9.png',
                'text' => 'Grid Full 9',
                'td_block_name' => 'td_block_big_grid_fl_9',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_fl_10',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_fl_10.php',
                'posts_shown_in_the_loop' => 5,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-fl-10.png',
                'text' => 'Grid Full 10',
                'td_block_name' => 'td_block_big_grid_fl_10',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );
        td_api_category_top_posts_style::add('td_category_top_posts_style_disable',
            array (
                'file' => TDSP_THEME_PATH . '/includes/category_top_posts_styles/td_category_top_posts_style_disable.php',
                'posts_shown_in_the_loop' => 0,
                'img' => TDSP_THEME_URL . '/assets/images/panel/category_templates/icon-category-top-disable.png',
                'text' => 'Disable',
                'td_block_name' => '',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );



        /**
         * the td_api_footer
         */
        td_api_footer_template::add('td_footer_template_1',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-1.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_1.php',
                'text' => 'Style 1'

            )
        );
        td_api_footer_template::add('td_footer_template_2',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-2.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_2.php',
                'text' => 'Style 2'

            )
        );
        td_api_footer_template::add('td_footer_template_3',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-3.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_3.php',
                'text' => 'Style 3'

            )
        );
        td_api_footer_template::add('td_footer_template_4',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-4.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_4.php',
                'text' => 'Style 4'

            )
        );
        td_api_footer_template::add('td_footer_template_5',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-5.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_5.php',
                'text' => 'Style 5'

            )
        );
        td_api_footer_template::add('td_footer_template_6',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-6.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_6.php',
                'text' => 'Style 6'

            )
        );
        td_api_footer_template::add('td_footer_template_7',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-7.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_7.php',
                'text' => 'Style 7'

            )
        );
        td_api_footer_template::add('td_footer_template_8',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-8.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_8.php',
                'text' => 'Style 8'

            )
        );
        td_api_footer_template::add('td_footer_template_9',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-9.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_9.php',
                'text' => 'Style 9'

            )
        );
        td_api_footer_template::add('td_footer_template_10',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-10.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_10.php',
                'text' => 'Style 10'

            )
        );
        td_api_footer_template::add('td_footer_template_11',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-11.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_11.php',
                'text' => 'Style 11'

            )
        );
        td_api_footer_template::add('td_footer_template_12',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-12.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_12.php',
                'text' => 'Style 12'
            )
        );
        td_api_footer_template::add('td_footer_template_13',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-13.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_13.php',
                'text' => 'Style 13'
            )
        );
        td_api_footer_template::add('td_footer_template_14',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/footer_templates/icon-footer-14.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_footer_template_14.php',
                'text' => 'Style 14'
            )
        );



        /**
         * the td_api_sub_footer
         */
        td_api_sub_footer_template::add('td_sub_footer_template_1',
            array(
                'img' => TDSP_THEME_URL . '/assets/images/panel/sub_footer_templates/icon-sub-footer-1.png',
                'file' => TDSP_THEME_PATH . '/parts/footer/td_sub_footer_template_1.php',
                'text' => 'Style 1'

            )
        );

        td_api_sub_footer_template::add('tdm_sub_footer_template_1',
            array(
                'img' => TDC_URL . '/td-multi-purpose/images/panel/sub_footer_templates/icon-sub-footer-1.png',
                'file' => TDC_PATH . '/td-multi-purpose/footer/tdm_sub_footer_template_1.php',
                'text' => 'Style 1 - Multipurpose'

            )
        );



        /**
         * the thumbs used by the  theme
         * Thumb id => array parameters. Wp booster only cuts if the option is set from theme panel
         */
        td_api_thumb::add('td_0x420',
            array(
                'name' => 'td_0x420',
                'width' => 0,
                'height' => 420,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal', //what play icon to load (small or normal)
                'used_on' => array(
                    'tagDiv Image Gallery'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAGkAQMAAAD9lkU+AAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAADFJREFUeNrtwTEBAAAAwiD7pzbDfmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANEBaQAAAZUbkzMAAAAASUVORK5CYII=',
            )
        );

        td_api_thumb::add('td_80x60',
            array(
                'name' => 'td_80x60',
                'width' => 80,
                'height' => 60,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    'Module MX2',
                    'Block 18, 19',
                    'Live search',
                    'tagDiv Image Gallery thumbs'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAAA8AQMAAADL6a/PAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAA5JREFUKM9jGAWjYJABAAKUAAHoEAeuAAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_100x70',
            array(
                'name' => 'td_100x70',
                'width' => 100,
                'height' => 70,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'small',
                'used_on' => array(
                    'Module 6, 7',
                    'Block 1, 2, 7, 8, 16, 25'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABGAQMAAAAASKMqAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAABBJREFUKM9jGAWjYBQMKwAAA9QAAQWBn6cAAAAASUVORK5CYII=',
            )
        );

        td_api_thumb::add('td_265x198',
            array(
                'name' => 'td_265x198',
                'width' => 265,
                'height' => 198,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Big grid 1, 3, 7'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQkAAADGAQMAAAD7b+fyAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAB1JREFUWMPtwQENAAAAwiD7p7bHBwwAAAAAAADSDhsSAAGoWlW2AAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_324x160',
            array(
                'name' => 'td_324x160',
                'width' => 324,
                'height' => 160,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 1, 2',
                    'Block 2, 3, 4',
                    'Big grid 2'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAACgAQMAAABOhoelAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAB1JREFUWMPtwTEBAAAAwiD7p/ZdCGAAAAAAAAAQBxpAAAH8le3bAAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_324x235',
            array(
                'name' => 'td_324x235',
                'width' => 324,
                'height' => 235,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 3, 4, 5, 11, MX3',
                    'Block 1, 5, 6, 13, 17, 20'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUQAAADrAQMAAAArGX0KAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7pzbEXmAAAAAAAAAAAACQHSaOAAGSp1GBAAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_356x220',
            array(
                'name' => 'td_356x220',
                'width' => 356,
                'height' => 220,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX1, MX12',
                    'Block 14, 19',
                    'Big grid 5, 7, 8'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWQAAADcAQMAAAB9O0nPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACBJREFUaN7twTEBAAAAwiD7p7bDbmAAAAAAAAAAAABAdieIAAGQh2mWAAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_356x364',
            array(
                'name' => 'td_356x364',
                'width' => 356,
                'height' => 364,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX14, MX16',
                    'Big grid 8, 9, 10'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWQAAAFsAQMAAADBhlEOAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACZJREFUeNrtwQEBAAAAgqD+r26IwAAAAAAAAAAAAAAAAAAAAAAiDkFoAAFfZct7AAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_533x261',
            array(
                'name' => 'td_533x261',
                'width' => 533,
                'height' => 261,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX11', 'Big grid 3, 12'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhUAAAEFAQMAAABuFIc7AAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAACdJREFUeNrtwQENAAAAwiD7p7bHBwwAAAAAAAAAAAAAAAAAAAAAIORFVAABqJvmiQAAAABJRU5ErkJggg==',
            )
        );

        td_api_thumb::add('td_534x462',
            array(
                'name' => 'td_534x462',
                'width' => 534,
                'height' => 462,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 19, MX5, MX17, MX21',
                    'Big grid 1, 3, 4, 6, 10, 12, full 4, 5'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAhYAAAHOAQMAAAD+DNJPAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAADVJREFUeNrtwQENAAAAwiD7p7bHBwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICEA3q4AAGK1CNoAAAAAElFTkSuQmCC',
            )
        );

        td_api_thumb::add('td_696x385',
            array(
                'name' => 'td_696x385',
                'width' => 696,
                'height' => 385,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module 14, 17, 18, MX8',
                    'Block 13, 18, 20',
                    'Slide - 2 columns'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAArgAAAGBAQMAAAC3k1CUAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAADdJREFUeNrtwTEBAAAAwiD7p7bETmAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEDuhFgAARFpDB8AAAAASUVORK5CYII=',
            )
        );

        td_api_thumb::add('td_741x486',
            array(
                'name' => 'td_741x486',
                'width' => 741,
                'height' => 486,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX9',
                    'Big grid 2'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAuUAAAHmAQMAAADuiGKOAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAENJREFUeNrtwYEAAAAAw6D7Ux9gCtUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIgDsnQAAavKUH8AAAAASUVORK5CYII=',
            )
        );

        td_api_thumb::add('td_1068x580',
            array(
                'name' => 'td_1068x580',
                'width' => 1068,
                'height' => 580,
                'crop' => array('center', 'top'),
                'post_format_icon_size' => 'normal',
                'used_on' => array(
                    'Module MX26',
                    'Big grid full 9',
                    'Slide - 3 column'
                ),
                'no_image_path' => TDSP_THEME_URL . '/assets',
                'b64_encoded' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABCwAAAJEAQMAAADnqyfeAAAAA1BMVEWurq51dlI4AAAAAXRSTlMmkutdmwAAAG9JREFUeNrswYEAAAAAgKD9qRepAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADg9uCQAAAAAEDQ/9fOsAAAAAAAAAAAAAAAAAAAAAAAsAox6wABwRHV3QAAAABJRU5ErkJggg==',
            )
        );



        /**
         * modules list
         */
        td_api_module::add('td_module_1',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_1.php',
                'text' => 'Module 1',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_1.png',
                'used_on_blocks' => array('td_block_3'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_2',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_2.php',
                'text' => 'Module 2',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_2.png',
                'used_on_blocks' => array('td_block_2', 'td_block_4'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_3',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_3.php',
                'text' => 'Module 3',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_3.png',
                'used_on_blocks' => array('td_block_5'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_4',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_4.php',
                'text' => 'Module 4',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_4.png',
                'used_on_blocks' => array('td_block_1', 'td_block_17'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_5',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_5.php',
                'text' => 'Module 5',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_5.png',
                'used_on_blocks' => array('td_block_6'),
                'excerpt_title' => 12,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_6',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_6.php',
                'text' => 'Module 6',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_6.png',
                'used_on_blocks' => array('td_block_1', 'td_block_2', 'td_block_7', 'td_block_16', 'td_block_25'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_7',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_7.php',
                'text' => 'Module 7',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_7.png',
                'used_on_blocks' => array('td_block_8'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_8',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_8.php',
                'text' => 'Module 8',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_8.png',
                'used_on_blocks' => array('td_block_9', 'td_block_17'),
                'excerpt_title' => 15,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_9',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_9.php',
                'text' => 'Module 9',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_9.png',
                'used_on_blocks' => array('td_block_10'),
                'excerpt_title' => 15,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => true,
                'enabled_on_loops' => true,
                'uses_columns' => true,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_10',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_10.php',
                'text' => 'Module 10',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_10.png',
                'used_on_blocks' => array('td_block_11', 'td_block_18'),
                'excerpt_title' => 15,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_11',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_11.php',
                'text' => 'Module 11',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_11.png',
                'used_on_blocks' => array('td_block_12'),
                'excerpt_title' => 15,
                'excerpt_content' => 35,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_12',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_12.php',
                'text' => 'Module 12',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_12.png',
                'used_on_blocks' => '',
                'excerpt_title' => 30,
                'excerpt_content' => 60,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_13',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_13.php',
                'text' => 'Module 13',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_13.png',
                'used_on_blocks' => '',
                'excerpt_title' => 30,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_14',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_14.php',
                'text' => 'Module 14',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_14.png',
                'used_on_blocks' => array('td_block_13', 'td_block_20'),
                'excerpt_title' => 30,
                'excerpt_content' => 40,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_15',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_15.php',
                'text' => 'Module 15',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_15.png',
                'used_on_blocks' => '',
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_16',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_16.php',
                'text' => 'Module 16',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_16.png',
                'used_on_blocks' =>  array('td_block_21','Search Page'),
                'excerpt_title' => 15,
                'excerpt_content' => 25,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_17',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_17.php',
                'text' => 'Module 17',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_17.png',
                'used_on_blocks' => array('td_block_22'),
                'excerpt_title' => 30,
                'excerpt_content' => 45,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_18',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_18.php',
                'text' => 'Module 18',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_18.png',
                'used_on_blocks' => array('td_block_23'),
                'excerpt_title' => 30,
                'excerpt_content' => 60,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_19',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_19.php',
                'text' => 'Module 19',
                'img' => TDSP_THEME_URL . '/assets/images/panel/modules/td_module_19.png',
                'used_on_blocks' => array('td_block_24'),
                'excerpt_title' => 30,
                'excerpt_content' => 50,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => true,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx1',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx1.php',
                'text' => 'Module MX1',
                'img' => '',
                'used_on_blocks' => array('td_block_14', 'td_block_19'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx2',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx2.php',
                'text' => 'Module MX2',
                'img' => '',
                'used_on_blocks' => array('td_block_18', 'td_block_19', 'Search live'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx3',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx3.php',
                'text' => 'Module MX3',
                'img' => '',
                'used_on_blocks' => array('td_block_13', 'td_block_20'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx4',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx4.php',
                'text' => 'Module MX4',
                'img' => '',
                'used_on_blocks' => array('td_block_15'),
                'excerpt_title' => 12,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx5',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx5.php',
                'text' => 'Module MX5',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1', 'td_block_big_grid_3', 'td_block_big_grid_4', 'td_block_big_grid_6', 'td_block_big_grid_10', 'td_block_big_grid_12'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx6',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx6.php',
                'text' => 'Module MX6',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1', 'td_block_big_grid_3', 'td_block_big_grid_7'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx7',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx7.php',
                'text' => 'Module MX7',
                'img' => '',
                'used_on_blocks' => array('td_block_16'),
                'excerpt_title' => 25,
                'excerpt_content' => 16,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx8',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx8.php',
                'text' => 'Module MX8',
                'img' => '',
                'used_on_blocks' => array('td_block_18'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx9',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx9.php',
                'text' => 'Module MX9',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_2'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx10',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx10.php',
                'text' => 'Module MX10',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_2'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx11',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx11.php',
                'text' => 'Module MX11',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_3', 'td_block_big_grid_12'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx12',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx12.php',
                'text' => 'Module MX12',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_5', 'td_block_big_grid_7', 'td_block_big_grid_8'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx13',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx13.php',
                'text' => 'Module MX13',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_6'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx14',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx14.php',
                'text' => 'Module MX14',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_8'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx15',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx15.php',
                'text' => 'Module MX15',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_9', 'td_block_big_grid_10'),
                'excerpt_title' => 16,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx16',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx16.php',
                'text' => 'Module MX16',
                'img' => '',
                'used_on_blocks' => array('td_block_24'),
                'excerpt_title' => 25,
                'excerpt_content' => 18,
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx17',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx17.php',
                'text' => 'Module MX17',
                'img' => '',
                'used_on_blocks' => array('td_block_25'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx18',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx18.php',
                'text' => 'Module MX18',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_1'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx19',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx19.php',
                'text' => 'Module MX19',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_2'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx20',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx20.php',
                'text' => 'Module MX20',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_3'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx21',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx21.php',
                'text' => 'Module MX21',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_4'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx22',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx22.php',
                'text' => 'Module MX22',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_6'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx23',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx23.php',
                'text' => 'Module MX23',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_7'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx24',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx24.php',
                'text' => 'Module MX24',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_7'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx25',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx25.php',
                'text' => 'Module MX25',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_8'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx26',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx26.php',
                'text' => 'Module MX26',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_fl_9'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td_module_wrap td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mx_empty',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mx_empty.php',
                'text' => 'Module MX Empty',
                'img' => '',
                'used_on_blocks' => array('td_block_big_grid_1'),
                'excerpt_title' => '',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => false,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_related_posts',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_related_posts.php',
                'text' => 'Related posts module',
                'img' => '',
                'used_on_blocks' => array('td_block_related_posts'),
                'excerpt_title' => 25,
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

        td_api_module::add('td_module_mega_menu',
            array(
                'file' => TDSP_THEME_PATH . '/includes/modules/td_module_mega_menu.php',
                'text' => 'Mega menu module',
                'img' => '',
                'used_on_blocks' => array('td_block_mega_menu'),
                'excerpt_title' => '12',
                'excerpt_content' => '',
                'enabled_on_more_articles_box' => false,
                'enabled_on_loops' => false,
                'uses_columns' => false,                      // if the module uses columns on the page template + loop
                'category_label' => true,
                'class' => 'td-animation-stack',
                'group' => '' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );



        /**
         * the blocks
         */
        td_api_block::add('td_block_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 1',
                "base" => 'td_block_1',
                "class" => 'td_block_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_1',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_1.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 4',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m4_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m4_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => "25",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),
                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_4_font(),
                    tdsp_config_helper::module_6_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 2',
                "base" => 'td_block_2',
                "class" => 'td_block_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_2',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_2.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 2',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m2_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m2_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_2_font(),
                    tdsp_config_helper::module_6_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 3',
                "base" => 'td_block_3',
                "class" => 'td_block_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_3',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_3.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 1',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m1_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_1_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 4',
                "base" => 'td_block_4',
                "class" => 'td_block_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_4',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_4.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 2',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m2_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m2_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_2_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 5',
                "base" => 'td_block_5',
                "class" => 'td_block_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_5',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_5.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 3',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m3_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_3_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 6',
                "base" => 'td_block_6',
                "class" => 'td_block_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_6',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_6.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m5_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_5_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 7',
                "base" => 'td_block_7',
                "class" => 'td_block_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_7',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_7.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_6_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 8',
                "base" => 'td_block_8',
                "class" => 'td_block_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_8',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_8.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 7',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m7_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_7_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 9',
                "base" => 'td_block_9',
                "class" => 'td_block_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_9',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_9.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 8',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m8_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_8_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 10',
                "base" => 'td_block_10',
                "class" => 'td_block_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_10',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_10.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 9',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m9_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_9_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_11',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 11',
                "base" => 'td_block_11',
                "class" => 'td_block_11',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_11',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_11.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 10',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m10_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m10_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_10_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_12',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 12',
                "base" => 'td_block_12',
                "class" => 'td_block_12',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_12',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_12.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 11',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m11_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m11_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_11_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_13',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 13',
                "base" => 'td_block_13',
                "class" => 'td_block_13',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_13',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_13.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX3',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx3_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 14',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m14_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m14_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx3_font(),
                    tdsp_config_helper::module_14_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_14',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 14',
                "base" => 'td_block_14',
                "class" => 'td_block_14',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_14',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_14.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX1',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx1_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx1_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_15',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 15',
                "base" => 'td_block_15',
                "class" => 'td_block_15',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_15',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_15.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX4',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx4_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx4_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_16',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 16',
                "base" => 'td_block_16',
                "class" => 'td_block_16',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_16',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_16.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX7',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx7_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "mx7_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx7_font(),
                    tdsp_config_helper::module_6_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_17',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 17',
                "base" => 'td_block_17',
                "class" => 'td_block_17',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_17',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_17.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 4',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m4_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m4_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 8',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m8_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_4_font(),
                    tdsp_config_helper::module_8_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_18',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 18',
                "base" => 'td_block_18',
                "class" => 'td_block_18',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_18',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_18.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX8',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx8_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 10',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m10_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m10_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX2',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx2_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx8_font(),
                    tdsp_config_helper::module_10_font(),
                    tdsp_config_helper::module_mx2_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_19',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 19',
                "base" => 'td_block_19',
                "class" => 'td_block_19',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_19',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_19.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX1',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx1_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX2',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx2_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx1_font(),
                    tdsp_config_helper::module_mx2_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_20',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 20',
                "base" => 'td_block_20',
                "class" => 'td_block_20',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_20',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_20.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX3',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx3_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 14',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m14_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m14_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx3_font(),
                    tdsp_config_helper::module_14_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_21',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 21',
                "base" => 'td_block_21',
                "class" => 'td_block_21',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_21',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_21.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 16',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m16_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m16_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_16_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_22',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 22',
                "base" => 'td_block_22',
                "class" => 'td_block_22',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_22',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_22.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 17',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m17_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m17_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_17_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_23',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 23',
                "base" => 'td_block_23',
                "class" => 'td_block_23',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_23',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_23.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 18',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m18_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m18_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_18_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_24',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 24',
                "base" => 'td_block_24',
                "class" => 'td_block_24',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_24',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_24.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX16',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx16_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "mx16_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 19',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m19_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name"  => "m19_el",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Excerpt length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx16_font(),
                    tdsp_config_helper::module_19_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );

        td_api_block::add('td_block_25',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Block 25',
                "base" => 'td_block_25',
                "class" => 'td_block_25',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Blocks',
                'icon' => 'icon-pagebuilder-td_block_25',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_25.php',
                "params" => array_merge(
                    td_config::get_map_block_general_array(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX17',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx17_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module 6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "m6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::get_map_filter_array(),
                    td_config::get_map_block_ajax_filter_array(),

                    td_config_helper::block_font(),
                    tdsp_config_helper::module_mx17_font(),
                    tdsp_config_helper::module_6_font(),

                    td_config::get_map_block_pagination_array()
                )
            )
        );



        /**
         * the big grids
         */
        td_global::$big_grid_styles_list = array(
            'td-grid-style-1' => array(  // td-grid-style-1 - THIS HAS TO BE THE DEFAULT
                'text' => 'Grid style 1 - Default'
            ),
            'td-grid-style-2' => array(
                'text' => 'Grid style 2 - Colours'
            ),
            'td-grid-style-3' => array(
                'text' => 'Grid style 3 - Flat colours'
            ),
            'td-grid-style-4' => array(
                'text' => 'Grid style 4 - Bottom box'
            ),
            'td-grid-style-5' => array(
                'text' => 'Grid style 5 - Black middle'
            ),
            'td-grid-style-6' => array(
                'text' => 'Grid style 6 - Lightsky'
            ),
            'td-grid-style-7' => array(
                'text' => 'Grid style 7 - Rainbow'
            )
        );


        td_api_block::add('td_block_big_grid_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 1',
                "base" => 'td_block_big_grid_1',
                "class" => 'td_block_big_grid_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_1',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_1.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),
                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),
                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    tdsp_config_helper::module_mx6_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 2',
                "base" => 'td_block_big_grid_2',
                "class" => 'td_block_big_grid_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_2',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_2.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX9',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx9_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX10',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx10_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx9_font(),
                    tdsp_config_helper::module_mx10_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 3',
                "base" => 'td_block_big_grid_3',
                "class" => 'td_block_big_grid_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_3',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_3.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX11',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx11_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),

                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    tdsp_config_helper::module_mx11_font(),
                    tdsp_config_helper::module_mx6_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 4',
                "base" => 'td_block_big_grid_4',
                "class" => 'td_block_big_grid_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_4',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_4.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 5',
                "base" => 'td_block_big_grid_5',
                "class" => 'td_block_big_grid_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_5',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_5.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX12',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx12_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx12_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 6',
                "base" => 'td_block_big_grid_6',
                "class" => 'td_block_big_grid_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_6',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_6.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX13',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx13_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    tdsp_config_helper::module_mx13_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 7',
                "base" => 'td_block_big_grid_7',
                "class" => 'td_block_big_grid_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_7',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_7.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX12',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx12_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX6',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx6_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx12_font(),
                    tdsp_config_helper::module_mx6_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 8',
                "base" => 'td_block_big_grid_8',
                "class" => 'td_block_big_grid_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_8',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_8.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX14',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx14_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX12',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx12_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx14_font(),
                    tdsp_config_helper::module_mx12_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 9',
                "base" => 'td_block_big_grid_9',
                "class" => 'td_block_big_grid_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_9',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_9.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX15',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx15_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx15_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 10',
                "base" => 'td_block_big_grid_10',
                "class" => 'td_block_big_grid_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_10',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_10.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX15',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx15_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    tdsp_config_helper::module_mx15_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_11',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 11',
                "base" => 'td_block_big_grid_11',
                "class" => 'td_block_big_grid_11',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_11',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_11.php',
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX15',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx15_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX11',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx11_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx15_font(),
                    tdsp_config_helper::module_mx11_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_12',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid 12',
                "base" => 'td_block_big_grid_12',
                "class" => 'td_block_big_grid_12',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_12',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_12.php',
                'tdc_in_row' => true,
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX5',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx5_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX11',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx11_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx5_font(),
                    tdsp_config_helper::module_mx11_font(),
                    td_config::get_map_css_tab()
                )
            )
        );


        td_api_block::add('td_block_big_grid_fl_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 1',
                "base" => 'td_block_big_grid_fl_1',
                "class" => 'td_block_big_grid_fl_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_1',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_1.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX18',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx18_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx18_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_2',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 2',
                "base" => 'td_block_big_grid_fl_2',
                "class" => 'td_block_big_grid_fl_2',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_2',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_2.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX19',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx19_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx19_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_3',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 3',
                "base" => 'td_block_big_grid_fl_3',
                "class" => 'td_block_big_grid_fl_3',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_3',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_3.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX20',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx20_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx20_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_4',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 4',
                "base" => 'td_block_big_grid_fl_4',
                "class" => 'td_block_big_grid_fl_4',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_4',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_4.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX21',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx21_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx21_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_5',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 5',
                "base" => 'td_block_big_grid_fl_5',
                "class" => 'td_block_big_grid_fl_5',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_5',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_5.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX21',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx21_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx21_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_6',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 6',
                "base" => 'td_block_big_grid_fl_6',
                "class" => 'td_block_big_grid_fl_6',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_6',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_6.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX18',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx18_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),

                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX22',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx22_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx18_font(),
                    tdsp_config_helper::module_mx22_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_7',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 7',
                "base" => 'td_block_big_grid_fl_7',
                "class" => 'td_block_big_grid_fl_7',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_7',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_7.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX23',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx23_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX24',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx24_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx23_font(),
                    tdsp_config_helper::module_mx24_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_8',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 8',
                "base" => 'td_block_big_grid_fl_8',
                "class" => 'td_block_big_grid_fl_8',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_8',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_8.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX19',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx19_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX25',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx25_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx19_font(),
                    tdsp_config_helper::module_mx25_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_9',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 9',
                "base" => 'td_block_big_grid_fl_9',
                "class" => 'td_block_big_grid_fl_9',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_9',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_9.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX19',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx19_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX26',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx26_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX25',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx25_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx19_font(),
                    tdsp_config_helper::module_mx26_font(),
                    tdsp_config_helper::module_mx25_font(),
                    td_config::get_map_css_tab()
                )
            )
        );

        td_api_block::add('td_block_big_grid_fl_10',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Full 10',
                "base" => 'td_block_big_grid_fl_10',
                "class" => 'td_block_big_grid_fl_10',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_fl_10',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_fl_10.php',
                'tdc_in_row' => true,
                'tdc_row_start_values' => base64_encode(
                    json_encode(
                        array(
                            'full_width'  => 'stretch_row_content td-stretch-content',
                        )
                    )
                ),
                "params" => array_merge(
                    self::td_block_big_grid_style(),

                    array(
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Content length',
                            "value"      => "",
                            "class"      => "",
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX25',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx25_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                        array(
                            "param_name" => "separator",
                            "type"       => "text_separator",
                            'heading'    => 'Module MX19',
                            "value"      => "",
                            "class"      => "tdc-separator-small",
                        ),
                        array(
                            "param_name"  => "mx19_tl",
                            "type"        => "textfield",
                            "value"       => '',
                            "heading"     => 'Title length',
                            "description" => "",
                            "holder"      => "div",
                            "class"       => "tdc-textfield-small",
                            "placeholder" => '25',
                        ),
                    ),

                    td_config::td_block_big_grid_params(),
                    tdsp_config_helper::module_mx25_font(),
                    tdsp_config_helper::module_mx19_font(),
                    td_config::get_map_css_tab()
                )
            )
        );


        td_api_block::add('td_block_big_grid_slide',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Big Grid Slide',
                "base" => 'td_block_big_grid_slide',
                "class" => 'td_block_big_grid_slide',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Big Grids',
                'icon' => 'icon-pagebuilder-td_block_big_grid_slide',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_big_grid_slide.php',
                "params" => self::td_block_big_grid_slide_params(),
            )
        );



        /**
         * misc blocs
         */
        td_api_block::add('td_block_mega_menu',
            array(
                'map_in_visual_composer' => false,
                'file' => TDSP_THEME_PATH  . '/includes/shortcodes/td_block_mega_menu.php',

                // key added to supply 'show_child_cat' differently for each theme
                'render_atts' => array(
                    'show_child_cat' => 30,
                )
            )
        );

        td_api_block::add('td_block_related_posts',
            array(
                'map_in_visual_composer' => false,
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_related_posts.php',
            )
        );

        td_api_block::add('td_block_homepage_full_1',
            array(
                'map_in_visual_composer' => true,
                'map_in_td_composer' => true,
                "name" => 'Homepage post',
                "base" => 'td_block_homepage_full_1',
                "class" => 'td_block_homepage_full_1',
                "controls" => "full",
                "category" => 'Blocks',
                'tdc_category' => 'Extended',
                'icon' => 'icon-pagebuilder-td_block_homepage_full_1',
                'file' => TDSP_THEME_PATH . '/includes/shortcodes/td_block_homepage_full_1.php',
                "params" => self::td_homepage_full_1_params()
            )
        );


        /**
         * ad areas
         */
        td_api_ad::add('post_style_1',
            array(
                'text' => 'Post template style 1',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
            )
        );
        td_api_ad::add('post_style_11',
            array(
                'text' => 'Post template style 11',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
            )
        );
        td_api_ad::add('post_style_12',
            array(
                'text' => 'Post template style 12, 13',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
            )
        );
        td_api_ad::add('footer_top',
            array(
                'text' => 'Footer top',
                'ad_type' => 'ajax',
                'fields' => array(
                    'ad_field_position_content' => false,
                    'ad_field_after_paragraph' => false,
                ),
            )
        );


        add_action( 'admin_enqueue_scripts', function () {
            if ( TD_STANDARD_PACK_USE_LESS === true ) {
                wp_enqueue_style( 'td-standard-pack-framework-admin-style-less', TDSP_THEME_URL . '/td_less_style.css.php?part=admin-style.css_td_sp_newspaper_v1', false, TD_STANDARD_PACK );
            } else {
                wp_enqueue_style( 'td-standard-pack-framework-admin-style', TDSP_THEME_URL . '/assets/css/td_standard_pack_admin.css', false, TD_STANDARD_PACK );
            }
        }, 1003);

        add_action('wp_enqueue_scripts', function() {
            if ( td_util::is_mobile_theme() ) {
                return;
            }

            // load the css
            if ( TD_STANDARD_PACK_USE_LESS === true ) {
                wp_enqueue_style( 'td-standard-pack-framework-front-style-less', TDSP_THEME_URL . '/td_less_style.css.php?part=style.css_td_sp_newspaper_v1', false, TD_STANDARD_PACK );
            } else {
                wp_enqueue_style( 'td-standard-pack-framework-front-style', TDSP_THEME_URL . '/assets/css/td_standard_pack_main.css', false, TD_STANDARD_PACK );
            }
        }, 1003); // hook used to add custom css used on frontend area

    }



    /**
     * modify the blocks params for big grids
     * @return array
     */
    static function td_block_big_grid_slide_params() {
        $params = array_merge(
            self::td_block_big_grid_style(),
            array(
                array(
                    "param_name" => "autoplay",
                    "type" => "textfield",
                    "value" => '',
                    "heading" => 'Autoplay slider (at x seconds)',
                    "description" => "Leave empty do disable autoplay",
                    "holder" => "div",
                    "class" => "tdc-textfield-small"
                ),
                array(
                    "param_name" => "limit",
                    "type" => "textfield",
                    "value" => 4,
                    "heading" => __("Limit post number:", TD_THEME_NAME),
                    "description" => "",
                    "holder" => "div",
                    "class" => "tdc-textfield-small"
                ),
            ), // end array
            td_config::td_block_big_grid_params()
        );



        return $params;
    }

    static function td_block_big_grid_style() {
        // make the grid styles drop down
        $td_grid_style_drop_down = array(
            "param_name" => "td_grid_style",
            "type" => "dropdown",
            "value" => array(),
            "heading" => "Big grid style:",
            "description" => "Each big grid comes in different styles. This option will change the appearance of the grid (including the hover effect).",
            "holder" => "div",
            "class" => "tdc-dropdown-extrabig"
        );
        foreach (td_global::$big_grid_styles_list as $big_grid_id => $params) {
            $td_grid_style_drop_down['value'][$params['text']] = $big_grid_id;
        }
        return array($td_grid_style_drop_down);
    }



    /**
     * Map array for td_homepage_full_1_params
     * @return array VC_MAP params
     */
    static function td_homepage_full_1_params() {
        $temp_array_filter = td_config::get_map_filter_array('');
        $temp_array_filter = td_util::vc_array_remove_params($temp_array_filter, array(
            'limit',
            'offset'
        ));

        return $temp_array_filter;
    }

}