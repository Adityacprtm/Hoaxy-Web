<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');
$td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', 'top-menu');
$td_demo_header_menu_extra = td_demo_menus::create_menu('td-demo-header-menu-extra', '');
$td_demo_footer_menu = td_demo_menus::create_menu('td-demo-footer-menu', '');
$td_demo_custom_menu = td_demo_menus::create_menu('td-demo-custom-menu', '');

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_12');

// login background
td_demo_misc::update_background_login('td_pic_12');


/*  ----------------------------------------------------------------------------
    logo
*/
td_demo_misc::update_logo(array(
    'normal' => '',
    'mobile' => ''
));

//footer
td_demo_misc::update_footer_logo(array(
    'normal' => '',
));

/*  ----------------------------------------------------------------------------
    socials
*/
td_demo_misc::add_social_buttons(array(
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'youtube' => '#'
));


/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_cloud_template.txt',
    'template_type' => 'single',
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/404_cloud_template.txt',
    'template_type' => '404',
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_header_menu_id );


$td_cloud_global_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/date_cloud_template.txt',
    'template_type' => 'date',
));
td_demo_misc::update_global_date_template( 'tdb_template_' . $td_cloud_global_date_template_id );


$td_cloud_global_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - Romania News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/tag_cloud_template.txt',
    'template_type' => 'tag',
));
td_demo_misc::update_global_tag_template( 'tdb_template_' . $td_cloud_global_tag_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template - Romania News PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Entertainment',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Lifestyle',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Travel',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'TV',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Music',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Games',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Technology',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Politics',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Culture',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Sport',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));


/*  ----------------------------------------------------------------------------
    pages
*/

//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

/*  ----------------------------------------------------------------------------
    menu
*/

//first menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'News',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Technology',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Culture',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Sport',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));

td_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_3_id
));

td_demo_menus::add_category(array(
    'title' => 'Music',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_5_id
));

// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_category(array(
    'title' => 'Politics',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_2_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'TV',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_4_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Games',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id,
    'parent_id' => $parent_submenu_id
));



td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'category_id' => $demo_cat_2_id
));
td_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'category_id' => $demo_cat_3_id
));
td_demo_menus::add_category(array(
    'title' => 'TV',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'category_id' => $demo_cat_4_id
));
td_demo_menus::add_category(array(
    'title' => 'Music',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'category_id' => $demo_cat_5_id
));
td_demo_menus::add_category(array(
    'title' => 'Games',
    'add_to_menu_id' => $td_demo_top_menu_id,
    'category_id' => $demo_cat_6_id
));


$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_extra,
    'url' => '#',
    'parent_id' => ''
));
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'About Us',
    'add_to_menu_id' => $td_demo_header_menu_extra,
    'url' => '#',
    'parent_id' => ''
));
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Advertise With Us',
    'add_to_menu_id' => $td_demo_header_menu_extra,
    'url' => '#',
    'parent_id' => ''
));
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Submit a News Tip',
    'add_to_menu_id' => $td_demo_header_menu_extra,
    'url' => '#',
    'parent_id' => ''
));
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_header_menu_extra,
    'url' => '#',
    'parent_id' => ''
));


td_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $td_demo_footer_menu,
    'category_id' => $demo_cat_3_id
));
td_demo_menus::add_category(array(
    'title' => 'Politics',
    'add_to_menu_id' => $td_demo_footer_menu,
    'category_id' => $demo_cat_8_id
));
td_demo_menus::add_category(array(
    'title' => 'Sport',
    'add_to_menu_id' => $td_demo_footer_menu,
    'category_id' => $demo_cat_10_id
));
td_demo_menus::add_category(array(
    'title' => 'Technology',
    'add_to_menu_id' => $td_demo_footer_menu,
    'category_id' => $demo_cat_7_id
));
td_demo_menus::add_category(array(
    'title' => 'Video',
    'add_to_menu_id' => $td_demo_footer_menu,
    'category_id' => $demo_cat_7_id
));
td_demo_menus::add_category(array(
    'title' => 'Culture',
    'add_to_menu_id' => $td_demo_custom_menu,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_category(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $td_demo_custom_menu,
    'category_id' => $demo_cat_1_id
));
td_demo_menus::add_category(array(
    'title' => 'Games',
    'add_to_menu_id' => $td_demo_custom_menu,
    'category_id' => $demo_cat_6_id
));
td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_custom_menu,
    'category_id' => $demo_cat_2_id
));
td_demo_menus::add_category(array(
    'title' => 'Music',
    'add_to_menu_id' => $td_demo_custom_menu,
    'category_id' => $demo_cat_5_id
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'AG Barr declines to testify before House, setting stage for legal battle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Why Romania protesters have an uphill climb to oust Maduro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Romanian lawmakers pass bill that allows teachers to arm themselves',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Caster Semenya will be forced to alter her body to comfort slower runners',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Lady Gaga and Cardi B Meet at the Grammys',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Jennifer Aniston\'s Ex Justin Theroux Wishes Her Happy Birthday on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Offset Shares a Video of Cardi B Giving Birth to Baby Kulture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Cardi B Deletes Instagram After Social Media Backlash Over Her Historic Grammys Win',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'All the Celebrity Sightings at New York Fashion Week',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Romania, defeated by France 3-2, fails to qualify for Fed Cup final',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Scotland and Germany play rock-paper-scissors during Euro 16 qualifier',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Baldini under pressure as Spurs turn to Jonas after missing out',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Hard time ahead for Hodgson as England start Euro qualifying campaign',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Beautiful waterfalls that will take your breath away',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The 6 Best Luxury Hotels to See the Northern Lights This Winter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Visit these beautiful islands in the South Pacific for your own Shipwrecked experience',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Malta\'s Game of Thrones Azure Window could be replaced by something even more incredible',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Sanders Gets Respectful Welcome at Conservative College',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '2020 Presidential Candidates In A Minute',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Things You Didn\'t Know About Past Presidents',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Penn\'s expanding political climate gears up for 2020 election',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Sony\'s PlayStation TV Could Be a Busy Little Gadget',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Gadget Ogling: Amazon on Fire, Virtual Reality, True Nature and Energy Relief',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Apple to ship iPhones with only Qualcomm chips to German stores',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Huawei\'s just bought an internet - of - things startup',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_13'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Apex Legends dream run continues: 25 million players in a week',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_14'
));

td_demo_content::add_post(array(
    'title' => 'Here are 7 life lessons for every PUBG player',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_15'
));

td_demo_content::add_post(array(
    'title' => 'Pokemon GO\'s new feature lets players snap a picture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_16'
));

td_demo_content::add_post(array(
    'title' => 'PUBG teases the launch of zombie mode on official game',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_17'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Arcade High - Outrun This!',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_18'
));

td_demo_content::add_post(array(
    'title' => 'Rain Sword - Summer Breeze',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_19'
));

td_demo_content::add_post(array(
    'title' => 'Fearcity - Midnight Run',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_20'
));

td_demo_content::add_post(array(
    'title' => 'NY Vice - Smooth Steering',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Grammy Awards Complete winners list',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_13'
));

td_demo_content::add_post(array(
    'title' => 'Breaking Bad movie details: It\'s a sequel starring Aaron Paul, will premiere on Netflix',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_14'
));

td_demo_content::add_post(array(
    'title' => 'Chance the Rapper releasing debut album this summer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_15'
));

td_demo_content::add_post(array(
    'title' => 'Kate Gosselin to star in new reality show, Kate Plus Date',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_16'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Where to Find Affordable Lodging in Romania',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_16'
));

td_demo_content::add_post(array(
    'title' => '10 Things NOT to Do at Walt Disney World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_17'
));

td_demo_content::add_post(array(
    'title' => 'Hotel Debuts in Romania: Andaz Peninsula Papagayo',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_18'
));

td_demo_content::add_post(array(
    'title' => 'Where Can I Learn Spanish in Romania',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_19'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Lady Gaga and Cardi B Meet at the Grammys',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_20'
));

td_demo_content::add_post(array(
    'title' => 'Jennifer Aniston\'s Ex Justin Theroux Wishes Her Happy Birthday on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_19'
));

td_demo_content::add_post(array(
    'title' => 'Offset Shares a Video of Cardi B Giving Birth to Baby Kulture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_18'
));

td_demo_content::add_post(array(
    'title' => 'Cardi B Deletes Instagram After Social Media Backlash Over Her Historic Grammys Win',
    'file' => TDC_PATH_LEGACY . '/includes/demos/romania_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_17'
));