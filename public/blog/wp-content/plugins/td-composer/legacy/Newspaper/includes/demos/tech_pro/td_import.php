<?php
// main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');
$td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', 'custom-menu');



/*  ----------------------------------------------------------------------------
    background - leave empty if you want to make sure that there is NO background on the demo - td_demo_misc::update_background('');
 */
td_demo_misc::update_background('');



/*  ----------------------------------------------------------------------------
    logo
 */
td_demo_misc::update_logo(array(
    'normal' => '',
    'retina' => '',
    'mobile' => ''
));


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();


/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Global Header Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/global_header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );


$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_cloud_template.txt',
    'template_type' => 'single',
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


$td_cloud_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
td_util::update_option( 'tdb_search_template', 'tdb_template_' . $td_cloud_search_template_id );


$td_cloud_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/date_cloud_template.txt',
    'template_type' => 'date',
));
td_util::update_option( 'tdb_date_template', 'tdb_template_' . $td_cloud_date_template_id );


$td_cloud_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/tag_cloud_template.txt',
    'template_type' => 'tag',
));
td_util::update_option( 'tdb_tag_template', 'tdb_template_' . $td_cloud_tag_template_id );


$td_cloud_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Tech News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/404_cloud_template.txt',
    'template_type' => '404',
));
td_util::update_option( 'tdb_404_template', 'tdb_template_' . $td_cloud_404_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud  Template - Tech News Pro',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id = td_demo_category::add_category(array(
    'category_name' => 'Mobile',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_2_id = td_demo_category::add_category(array(
    'category_name' => 'Android',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_3_id = td_demo_category::add_category(array(
    'category_name' => 'Applications',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_4_id = td_demo_category::add_category(array(
    'category_name' => 'iPhone',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_5_id = td_demo_category::add_category(array(
    'category_name' => 'Gadgets',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_6_id = td_demo_category::add_category(array(
    'category_name' => 'Science',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_7_id = td_demo_category::add_category(array(
    'category_name' => 'Entertainment',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id = td_demo_category::add_category(array(
    'category_name' => 'Reviews',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/homepage.txt',
    'template' => 'page-pagebuilder-overlay.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

/*  ----------------------------------------------------------------------------
    menu
 */
//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Mobile',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id,
));
td_demo_menus::add_category(array(
    'title' => 'Gadgets',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_5_id,
));
td_demo_menus::add_category(array(
    'title' => 'Science',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id,
));
td_demo_menus::add_category(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id,
));
td_demo_menus::add_category(array(
    'title' => 'Reviews',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id,
));

// add links to the custom menu
td_demo_menus::add_link(array(
    'title' => 'About',
    'url' => '#',
    'add_to_menu_id' => $td_demo_custom_menu_id,
));
td_demo_menus::add_link(array(
    'title' => 'Contact',
    'url' => '#',
    'add_to_menu_id' => $td_demo_custom_menu_id,
));
td_demo_menus::add_link(array(
    'title' => 'Privacy Policy',
    'url' => '#',
    'add_to_menu_id' => $td_demo_custom_menu_id,
));


/*  ---------------------------------------------------------------------------
    posts
*/
/* ------------------------------------------------------------------ */

td_global::set_demo_installing(true);

td_demo_content::add_post(array(
    'title' => 'Evidence strongly suggests Sprint will carry Google Pixel phones soon',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1',
));

td_demo_content::add_post(array(
    'title' => 'National Geographic just updated their app',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2',
));
td_demo_content::add_post(array(
    'title' => 'New report seems to reveal future of Apple line-up',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'Check out the latest luxury trends for high-end homes',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_2',
));
td_demo_content::add_post(array(
    'title' => 'New app gives cancer patients their voice back',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'Spotify Premium now has 100 million subscribers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_2',
));
td_demo_content::add_post(array(
    'title' => 'Hands on: Google Stadia review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_1',
));


td_demo_content::add_post(array(
    'title' => 'Android developer news and features round-up: May 2019',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'How a brain training app helps Tom Brady play faster',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_4',
));
td_demo_content::add_post(array(
    'title' => 'Apple settles chip dispute, changing future of iPhone',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'Small hoverboard upgrade with big potential',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4',
));
td_demo_content::add_post(array(
    'title' => 'SpaceX to debut new crew capsule in test flight',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'Apple Services hits 390 million paid subscriptions',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_4',
));
td_demo_content::add_post(array(
    'title' => 'Microsoft Surface Studio 2 review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_3',
));


td_demo_content::add_post(array(
    'title' => 'Wondering what’s new in the Android Q Beta 3? Check it out here!',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Facebook’s ‘React Native’ has changed app development',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'FaceTime bug that let hackers listen in secretly',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'You can beta test Puma’s self-lacing sneakers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'Black Hole: searching for what can’t be seen',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Google spends millions of dollars on content review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'Hands on: Google Pixel 3a XL review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_5',
));


td_demo_content::add_post(array(
    'title' => 'Huawei announces its phone with a pop-up selfie camera',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_7',
));
td_demo_content::add_post(array(
    'title' => 'Instagram now lets you share posts in stories',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'When is the next Apple event, and what should we expect?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_7',
));
td_demo_content::add_post(array(
    'title' => 'Amazon’s assistant will also speak Spanish',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'Dream of ubiquitous social robots still aren’t coming true',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7',
));
td_demo_content::add_post(array(
    'title' => 'Facebook video ranking to favor original content',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'Nikon NIKKOR Z 24–70mm f/2.8 S review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7',
));


td_demo_content::add_post(array(
    'title' => 'Samsung reveals new 64MP camera sensor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => '5 meditation apps to help you find your peace',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_10',
));
td_demo_content::add_post(array(
    'title' => 'iPhone SE 2 release date, price & specs rumours',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Oculus Rift S gets release date in Microsoft Store',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10',
));
td_demo_content::add_post(array(
    'title' => 'Amazon CEO unveils lunar lander project ‘Blue Moon’',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Netflix buys kids Show producer StoryBots',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10',
));
td_demo_content::add_post(array(
    'title' => 'MacBook Pro (15-inch, mid-2018) review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9',
));


td_demo_content::add_post(array(
    'title' => 'Google Pixel 3a is easier to repair than Pixel 3, according to teardown',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10',
));
td_demo_content::add_post(array(
    'title' => 'Here’s exactly what you need to do to launch a mobile app',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'Foldable iPhone 2020 release date rumours & patents',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'The Google Nest Hub Max soups up the smart display',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'NASA spacecraft to collide a small moonlet in 2022',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'New standalone app for macOS to be Like iTunes',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'Hands on: Beats PowerBeats Pro review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/tech_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7',
));

td_global::set_demo_installing(false);