<?php
/**
 * Created by ra on 5/14/2015.
 */



/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/
// main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');



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
    footer text
 */


/*  ----------------------------------------------------------------------------
    socials
 */


/*  ----------------------------------------------------------------------------
    ads
 */
td_demo_misc::clear_all_ads();
td_demo_misc::add_ad_image('sidebar', 'td_rec_bg');


/*  ----------------------------------------------------------------------------
    sidebars
 */



/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Global Header Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/global_header_cloud_template.txt',
    'template_type' => 'header',
));
// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//cloud template - type header - font page
$td_cloud_front_header_template_id2 = td_demo_content::add_cloud_template(array(
    'title' => 'Font Page Header Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/front_header_cloud_template.txt',
    'template_type' => 'header',
));

//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_cloud_template.txt',
    'template_type' => 'single',
    //'header_template_id' => $td_cloud_front_header_template_id2
));
// set the default site wide post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);

//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));
// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );

//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );

//cloud template - type search
$td_cloud_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
// set the default site wide search template
td_util::update_option( 'tdb_search_template', 'tdb_template_' . $td_cloud_search_template_id );

//cloud template - type 404
$td_cloud_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Nomad',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/404_cloud_template.txt',
    'template_type' => '404',
));
// set the default site wide 404 template
td_util::update_option( 'tdb_404_template', 'tdb_template_' . $td_cloud_404_template_id );


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id = td_demo_category::add_category(array(
    'category_name' => 'Places',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_places_bg',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_2_id = td_demo_category::add_category(array(
    'category_name' => 'Food',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_food_bg',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_3_id = td_demo_category::add_category(array(
    'category_name' => 'Culture',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_culture_bg',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_4_id = td_demo_category::add_category(array(
    'category_name' => 'Nature',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_nature_bg',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_5_id = td_demo_category::add_category(array(
    'category_name' => 'Wildlife',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_wildlife_bg',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/homepage.txt',
    'template' => 'page-pagebuilder-overlay.php',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true,
    'header_template_id' => $td_cloud_front_header_template_id2
));
//footer template
$td_footertemplate_id = td_demo_content::add_page(array(
    'title' => 'footer-template',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/footer-template.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => false
));
td_util::update_option( 'tds_footer_page', $td_footertemplate_id);

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
td_demo_menus::add_category(array(
    'title' => 'Places',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id,
));
td_demo_menus::add_category(array(
    'title' => 'Food',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_2_id,
));
td_demo_menus::add_category(array(
    'title' => 'Culture',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_3_id,
));
td_demo_menus::add_category(array(
    'title' => 'Nature',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_4_id,
));
td_demo_menus::add_category(array(
    'title' => 'Wildlife',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_5_id,
));


/*  ---------------------------------------------------------------------------
    posts
*/
/* ------------------------------------------------------------------ */
td_demo_content::add_post(array(
    'title' => 'Glacier National Park Adventure',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Close Encounters with Polar Bears',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'Marathon Eating in Penang',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'Swimming with Mexico’s Whale Sharks',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Royal Opera House Muscat in Oman',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Mezze Experience in Jordan',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'An Awesome Adventure in Greenland',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2',
));
td_demo_content::add_post(array(
    'title' => 'Bears of Brooks Falls, Alaska',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1',
));


td_demo_content::add_post(array(
    'title' => 'Green Sea Turtles Hatching in Borneo',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'Food Tasting in Bruny Island',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Following the footsteps of Rembrandt',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'City Guide for Vienna',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'The Amazon Rainforest in Bolivia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Surreal Snorkeling in the Galapagos',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_7',
));
td_demo_content::add_post(array(
    'title' => 'Churchill Polar Bears on Halloween',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'Local Artist’s City Guide: Eindhoven',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'The Galapagos Islands in Photos',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Favorite Eating Spots in Singapore',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Salty Asterix of the Antarctic Seas',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3',
));
td_demo_content::add_post(array(
    'title' => 'Literary Guide to Amsterdam',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'A Hike Through The Grand Canyon',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_8',
));
td_demo_content::add_post(array(
    'title' => 'My Guide to Eating in Austin',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1',
));

td_demo_content::add_post(array(
    'title' => 'Spiritual Explorations in India',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2',
));
td_demo_content::add_post(array(
    'title' => 'Grand Duchy of Luxembourg',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_4',
));
td_demo_content::add_post(array(
    'title' => 'Reflections on the Birds of Botswana',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1',
));
td_demo_content::add_post(array(
    'title' => 'Meandering Around Bali',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_1_id),
    'featured_image_td_id' => 'td_pic_6',
));
td_demo_content::add_post(array(
    'title' => 'Delicious Places to Eat in NYC',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_9',
));
td_demo_content::add_post(array(
    'title' => 'Peterhof Palace from Saint Petersburg',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5',
));
td_demo_content::add_post(array(
    'title' => 'Time, Space & Wonder in the Galapagos',
    'file' => TDC_PATH_LEGACY . '/includes/demos/nomad/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3',
));