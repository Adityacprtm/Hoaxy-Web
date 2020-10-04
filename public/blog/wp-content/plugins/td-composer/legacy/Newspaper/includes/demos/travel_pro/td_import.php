<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');

//custom menu
$td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', 'custom-menu');

//custom menu 2
$td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', 'company-menu');

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_11');

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

//cloud template - type header
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_header_menu_id );


//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category'
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_cloud_template.txt',
    'template_type' => 'single'
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/author_cloud_template.txt',
    'template_type' => 'author'
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/404_cloud_template.txt',
    'template_type' => '404'
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Travel PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/search_cloud_template.txt',
    'template_type' => 'search'
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );

$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Travel PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Discover',
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
        'category_name' => 'Africa',
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
        'category_name' => 'Americas',
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
        'category_name' => 'Asia',
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
        'category_name' => 'Europe',
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
        'category_name' => 'Oceania',
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
    'category_name' => 'Adventures',
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
    'category_name' => 'Budget',
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
    'category_name' => 'Luxury',
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
    'category_name' => 'Couples',
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
$demo_cat_11_id =td_demo_category::add_category(array(
    'category_name' => 'Food',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'header_template_id' => $td_cloud_header_overlay_template_id,
    'homepage' => true
));


/*  ----------------------------------------------------------------------------
    menu
*/

//main menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// category
td_demo_menus::add_category(array(
    'title' => 'Adventures',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Budget',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Luxury',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Couples',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Food',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_11_id
));


//custom menu

// mega menu
td_demo_menus::add_mega_menu(array(
    'title' => 'Discover',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_1_id
));


//custom menu 2

// add a subcategory
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'Discover',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));

// category
td_demo_menus::add_category(array(
    'title' => 'Africa',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'category_id' => $demo_cat_2_id,
    'parent_id' => $parent_submenu_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Americas',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'category_id' => $demo_cat_3_id,
    'parent_id' => $parent_submenu_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Asia',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'category_id' => $demo_cat_4_id,
    'parent_id' => $parent_submenu_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Europe',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'category_id' => $demo_cat_5_id,
    'parent_id' => $parent_submenu_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Oceania',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'category_id' => $demo_cat_6_id,
    'parent_id' => $parent_submenu_id
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => '30 Things to Do Before You Turn 30',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'What to Pack for Summer in Europe',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Best Festivals Around the World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'The Best Destinations to Travel to in June',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The Best Time to Travel to Thailand',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Traditional Bakeries to Try When in Morocco',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_6'
));
td_demo_content::add_post(array(
    'title' => 'Romantic Hot Air Baloon Ride in Patagonia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Greece Islands Complete Remote Resorts Guide',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Discover These Free Things to Do in Turkey',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Above the Grand Canyon with a Helicopter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Top South Africa Attractions in the Winter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_11'
));
td_demo_content::add_post(array(
    'title' => '6 Beautiful Beaches Brazil Has to Offer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Ultimate Guide to Island Hopping in Thailand',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Day Trip to the Famous Gozo Island in Malta',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Best Time to Travel to French Polynesia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id,$demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Dishes We’d Travel Back to Eat Again',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Roam the World For Your Favorite Foods',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Yummy Italian Pasta for Food Travelers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Where to Find the Best Food Around Shanghai',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_11_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */


td_demo_content::add_post(array(
    'title' => 'The Ultimate Couple Getaway Guide to Paris',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '10 Romantic Lake Spots for Female Couples',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'How to Plan a Surprise Honeymoon Getaway',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'The Best Mountain Escape Destinations for Two',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */


td_demo_content::add_post(array(
    'title' => 'The Best Luxury Eco-Hotels in South Africa',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'New & Remodeled Maldive Resort Villas to Visit',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Staying at Conrad Bora Bora Nui in November',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'The Ultimate Cruise Experience in the Carribean',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Trips of a Lifetime You Can Actually Afford',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Best Budget Tropical Island Wonder Getaways',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'How to Travel Cape Town on a Small Budget',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Cheapest Luxury Lake Cabins in the World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Crazy Rafting Experience in Yellowstone Park',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Things to Do on a Solo Mountain Climb',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Summer Adventure Essentials for Sea',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Amazing Road Trips to Take Around the World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Ultimate New Zealand Travel Bucket List',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => '10 Day Planning for Indonesia and Malaysia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Itinerary for Australia’s Great Big Outback',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Ultimate Beaches Right in the Sidney Area',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Top 10 Weekend Getaways to Take in Europe',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'These Croatian Towns Should Not Be Missed',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'The Ultimate Guide to Visiting Rome on Foot',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Discover the Most Magical Sunset in Santorini',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '10 Tips for Your First Trip to the Jungle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => '5 Ways to Visit Downtown Tokyo in the Summer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'A Quick Guide to Bali’s Breathtaking Spotsr',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'India’s Amazing Landscapes are Breathtaking',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Costa Rica Parties: Living La Vida Loca',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Ultimate Caribbean Travel Experience',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'California Desert Travel Tips & Insights',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Best Spots to See Wildlife in the U.S.',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Jungle Getaway in the Heart of Cameroon',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'How to Choose the Right African Safari',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Which Resort in Mauritius is Right for You?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The Ultimate Africa Travel Bucket List',
    'file' => TDC_PATH_LEGACY . '/includes/demos/travel_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5'
));