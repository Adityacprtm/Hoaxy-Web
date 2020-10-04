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

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_2');

// login background
td_demo_misc::update_background_login('td_pic_2');


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

//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/header_cloud_template.txt',
    'template_type' => 'header',
));

// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );

//cloud template - type header - overlay
$td_cloud_header_overlay_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Overlay Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/header_overlay_cloud_template.txt',
    'template_type' => 'header',
));

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_header_overlay_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );

//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/cat_cloud_template.txt',
    'template_type' => 'category',
    'header_template_id' => $td_cloud_header_overlay_template_id
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_cloud_template.txt',
    'template_type' => 'single',
    'header_template_id' => $td_cloud_header_overlay_template_id
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/author_cloud_template.txt',
    'template_type' => 'author',
    'header_template_id' => $td_cloud_header_overlay_template_id
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/404_cloud_template.txt',
    'template_type' => '404',
    'header_template_id' => $td_cloud_header_overlay_template_id
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/search_cloud_template.txt',
    'template_type' => 'search',
    'header_template_id' => $td_cloud_header_overlay_template_id
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Influencer',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Instagram',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_1',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Fashion',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_2',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Men',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_3',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Newcommers',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_4',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Stars',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_5',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Women',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_6',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Marketing',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_7',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Lifestyle',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_8',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Business',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_9',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Strategies',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_10',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/homepage.txt',
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

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Instagram',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Marketing',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'More...',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_category(array(
    'title' => 'Business',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Strategies',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id,
    'parent_id' => $parent_submenu_id
));



//custom menu

// category
td_demo_menus::add_category(array(
    'title' => 'Instagram',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Marketing',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_8_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Strategies',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_10_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Business',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_9_id
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Instagram mum celebrities are being criticised',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Photographer snaps gorgeous photos in nature',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Fashion stars are earning up to $50,000 per post',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Users are setting up pods to gain followers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => '2018’s Instagram richest stars revealed',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Teens tend to ditch Facebook over Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Fake engagement is only half the problem',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Influencers face renewed scrutiny over advertising',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Influencer reveals extent of online trolling',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Using Instagram to promote your YouTube videos',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Find out who is behind the post in these campaigns',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'How to successfully execute influencer strategies',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Unconventional influencers will get more popular',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Successful entrepreneurs recognize when to move on',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'How 39 major businesses use Instagram stories',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Ecommerce brands create strong communities',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The biggest mistakes girls make on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Measure success but remember the work involved',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Amazing confession of an Instagram influencer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'New data reveals huge people trust in influencers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'A hotel totally banned social influencers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Ultra modern glossy bath with tall black cabinets and wite marble',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Royal style bathroom with freestanding bath and ceramic floors',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Classic bathroom with wood furniture and window side bath tub',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Modern bathroom with metro rocks, large plant and neutral tiles',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Jen Kendall kicked off American Airlines flight',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'The lessons women learnt from Fyre festival',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Girl has an Instagram following of 1.7 Million',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Most influencial women of Instagram in 2019',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => '15 must follow Instagram accounts in 2019',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Singer built her community in just 2 years',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'She built her profile into a growing empire',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Instagram women dramatically out-earn men',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Two girls turned Instagram into a full time job',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'How I got 13,000 Instagram followers in one month',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'How to grow your Instagram using quality content',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Millennials will go to extreme lengths for fame',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'How former TV producer developed a social media empire',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Professor makes more money from Instagram than college',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'The ‘Hot Couple’ of Instagram share what they learned',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'We asked the best: male influencers talk pricing',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Fashion stars are earning up to $50,000 per post',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Passion for fashion turned into a freelance career',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Style influencers are considered experts in fashion',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Passion for fashion turned into a freelance careert',
    'file' => TDC_PATH_LEGACY . '/includes/demos/influencer/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));