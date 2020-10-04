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
td_demo_misc::update_background_mobile('td_mobile_bg');

// login background
td_demo_misc::update_background_login('td_login_bg');


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
    'title' => 'Header Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));

// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );

//cloud template - type header - homepage
$td_cloud_header_homepage_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Homepage Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/header_homepage_cloud_template.txt',
    'template_type' => 'header',
));

//cloud template - type header - overlay
$td_cloud_header_overlay_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Overlay Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/header_overlay_cloud_template.txt',
    'template_type' => 'header',
));


//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category'
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_cloud_template.txt',
    'template_type' => 'single'
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/author_cloud_template.txt',
    'template_type' => 'author'
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/404_cloud_template.txt',
    'template_type' => '404'
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/search_cloud_template.txt',
    'template_type' => 'search'
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


//cloud template - type date - global
$td_cloud_global_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/date_cloud_template.txt',
    'template_type' => 'date'
));

// set - the default (global) search template
td_demo_misc::update_global_date_template( 'tdb_template_' . $td_cloud_global_date_template_id );

//cloud template - type tag - global
$td_cloud_global_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - Fashion PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/tag_cloud_template.txt',
    'template_type' => 'tag'
));

// set - the default (global) search template
td_demo_misc::update_global_tag_template( 'tdb_template_' . $td_cloud_global_tag_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Fashion PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Editorials',
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
        'category_name' => 'Beauty',
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
        'category_name' => 'Fashion',
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
        'category_name' => 'Hair',
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
        'category_name' => 'Makeup',
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
        'category_name' => 'Trends',
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
    'category_name' => 'Celebrities',
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
    'category_name' => 'Events',
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
    'category_name' => 'Street Style',
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

/*  ----------------------------------------------------------------------------
    pages
*/

//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'header_template_id' => $td_cloud_header_homepage_template_id,
    'homepage' => true
));

//magazine page
$td_magazinepage_id = td_demo_content::add_page(array(
    'title' => 'Magazine',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/magazine.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => 'no_sidebar',
    'header_template_id' => $td_cloud_header_overlay_template_id,
    'homepage' => false
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
    'title' => 'Editorials',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Celebrities',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Events',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

td_demo_menus::add_category(array(
    'title' => 'Street Style',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));

//add the magazine page to the menu
td_demo_menus::add_page(array(
    'title' => 'Magazine',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_magazinepage_id,
    'parent_id' => ''
));


//custom menu

// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => '-La Mode',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Editorials',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_1_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_3_id,
    'parent_id' => $parent_submenu_id
));

td_demo_menus::add_category(array(
    'title' => 'Street Style',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_9_id,
    'parent_id' => $parent_submenu_id
));

//add the magazine page to the menu
td_demo_menus::add_page(array(
    'title' => 'Magazine',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'page_id' => $td_magazinepage_id,
    'parent_id' => $parent_submenu_id
));

/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'The Beautiful and Utopian World of Isabel Murant and Her Creations',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Mystery Fashion Show at Midnight Captured Beneath Washington Bridge',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Self Reflection Time with Denise Portland, Case Study, and Meditation',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Rags to Riches: Matthew Rogers and His Journey from Poverty to Fame',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Formal Wear in Fashion Through the Years: Changes & Evolution',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => '10 Photoshoot Ideas to Inspire Your Next Editorial with Livia Rhett',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '5 Essential Tips to Balance your Skincare Routine During This Spring',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Kourtney Kardashian’s Shares Photos From Her Vacation to Australia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Makeup Evolved: How to Get This Staple Runway Look in 6 Easy Steps',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Seoul Fashion Week: The Best Looks Straight From the Streets',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Brooke Diane Feeling Grateful for the Support of Her Fans',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Fashion Shows: The 16 Best Collections From Fall 2019',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */


td_demo_content::add_post(array(
    'title' => 'Patterns Come in Multiples of Two: The Golden Rule to Combining Patterns',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Copenhagen Fashion Week: Surprising Outfits from Celebrities',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'How to Wear A Wildcard Color to Energise Your Wardrobe',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Formal Wear: How to Get the Perfectly Tailored Suit for a Night Out',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Carine Roitfeld Launches Her First-Ever Runway Show',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '10 Inspiring and Fun Moments from New York Fashion Week',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'New Japanese Designer Just Put the Magic Back in Fashion',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Gigi Hadid Closes Karl Lagerfeld’s Last Fendi Fashion Show',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'What Ariana Grande Wore to Her Latest New York Photoshoot',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Zayn Malik Rises to Gigi Hadid’s Defense After Fan Outrage',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Jenna Coleman Comes Clean About New Boyfriend’s Name',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Danielle and Kevin Jonas: Their Plans to Raise The Baby',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Visiting Italy’s Vineyards and Orchards With a Top Vacation Agency',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Personal Stylist: 15 Fashion “Must-Haves” This Upcoming Spring',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'The Best Food Courts in Champs-Elysées, as Ranked by Food Critics',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Trends of 2019: Overcoats for Men to Restore 90s Retro Mania',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'How to Choose the Right Contour Colors Based on Your Skin Tone',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Avril Lavigne’s Makeup Artist Gave Her Mile Long Eyelashes',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Behind the Mascara: Inside Netflix’s Chilling Adventures of Sabrina',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Lip Smacker Teamed Up With Crayola to Create the Cutest Balm Collection',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Nordic White Hair is the Lightest Shade of Platinum to Exist So Far',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Natalie Portman Debuts New Golden Ombré Hair Color on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Game of Thrones Stars Rock New Hairstyle on Cover of Rolling Stones',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Back To Orange: Hayley Williams Amazes Paramore Fans With Hair Color',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Sky, Art, and Italy on Toast, A Photographical Study in Florence',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Fashion Industry Is Dead Now, Long Live the Fashion Industry',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'The Secret to Enjoying Life, an Online Exclusive by Andreea Feccini',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Personal Stylist: 18 Tricks to Use in your Daily Life When Going Out',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'How Do You Choose the Perfect Foundation Based On Your Skin Type?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Meghan Markle’s Assistant Is To Launch a New Series of Accessories',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Behind the Scenes: The Unveiling of Urban Decay’s New Product Line',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Everything You Need To Know About the “Clean Beauty 2019” Phenomenon',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fashion_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));