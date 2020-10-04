<?php
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
    Cloud Templates
*/
//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Global Header Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/global_header_cloud_template.txt',
    'template_type' => 'header',
));
// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_cloud_template.txt',
    'template_type' => 'single',
    //'header_template_id' => $td_cloud_front_header_template_id2
));
// set the default site wide post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);

//cloud template - type parent category
$td_cloud_parent_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Parent Category Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/parent_cat_cloud_template.txt',
    'template_type' => 'category',
));

//cloud template - type sub category (Art Of Manliness)
$td_cloud_sub_cat_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Art Of Manliness - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_1.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Art Talk)
$td_cloud_sub_cat_template_2_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Art Talk - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_2.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Cultural Frontline)
$td_cloud_sub_cat_template_3_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Cultural Frontline - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_3.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Unexplained Mysteries)
$td_cloud_sub_cat_template_4_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Unexplained Mysteries - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_4.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Best Car Talk)
$td_cloud_sub_cat_template_5_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Best Car Talk - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_5.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Small Town Murder)
$td_cloud_sub_cat_template_6_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Small Town Murder - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_6.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (The Bugle)
$td_cloud_sub_cat_template_7_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - The Bugle - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_7.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (This Past Weekend)
$td_cloud_sub_cat_template_8_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - This Past Weekend - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_8.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (A Way With Words)
$td_cloud_sub_cat_template_9_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - A Way With Words - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_9.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (On The Media)
$td_cloud_sub_cat_template_10_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - On The Media - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_10.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Code Switch)
$td_cloud_sub_cat_template_11_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Code Switch - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_11.txt',
    'template_type' => 'category',
));
//cloud template - type sub category (Studio 360)
$td_cloud_sub_cat_template_12_id = td_demo_content::add_cloud_template(array(
    'title' => 'Sub Category Cloud Template - Studio 360 - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_template_12.txt',
    'template_type' => 'category',
));


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );

//cloud template - type search
$td_cloud_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
// set the default site wide search template
td_util::update_option( 'tdb_search_template', 'tdb_template_' . $td_cloud_search_template_id );

//cloud template - type 404
$td_cloud_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Podcasts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/404_cloud_template.txt',
    'template_type' => '404',
));
// set the default site wide 404 template
td_util::update_option( 'tdb_404_template', 'tdb_template_' . $td_cloud_404_template_id );

$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Podcasts',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id = td_demo_category::add_category(array(
    'category_name' => 'Arts & Culture',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_parent_cat_template_id,
));
$demo_cat_2_id = td_demo_category::add_category(array(
    'category_name' => 'Art of Manliness',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_art_of_manliness',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_1_id,
));
$demo_cat_3_id = td_demo_category::add_category(array(
    'category_name' => 'Art Talk',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_art_talk',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_2_id,
));
$demo_cat_4_id = td_demo_category::add_category(array(
    'category_name' => 'Cultural Frontline',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_cultural_frontline',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_3_id,
));
$demo_cat_5_id = td_demo_category::add_category(array(
    'category_name' => 'Unexplained Mysteries',
    'parent_id' => $demo_cat_1_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_unexplained_mysteries',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_4_id,
));

$demo_cat_6_id = td_demo_category::add_category(array(
    'category_name' => 'Comedy',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_parent_cat_template_id,
));
$demo_cat_7_id = td_demo_category::add_category(array(
    'category_name' => 'Best Car Talk',
    'parent_id' => $demo_cat_6_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_best_car_talk',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_5_id,
));
$demo_cat_8_id = td_demo_category::add_category(array(
    'category_name' => 'Small Town Murder',
    'parent_id' => $demo_cat_6_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_small_town_murder',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_6_id,
));
$demo_cat_9_id = td_demo_category::add_category(array(
    'category_name' => 'The Bugle',
    'parent_id' => $demo_cat_6_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_the_bugle',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_7_id,
));
$demo_cat_10_id = td_demo_category::add_category(array(
    'category_name' => 'This Past Weekend',
    'parent_id' => $demo_cat_6_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_this_past_weekend',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_8_id,
));

$demo_cat_11_id = td_demo_category::add_category(array(
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
    'category_cloud_template' => 'tdb_template_' . $td_cloud_parent_cat_template_id,
));
$demo_cat_12_id = td_demo_category::add_category(array(
    'category_name' => 'A Way With Words',
    'parent_id' => $demo_cat_11_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_a_way_with_words',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_9_id,
));
$demo_cat_13_id = td_demo_category::add_category(array(
    'category_name' => 'On the Media',
    'parent_id' => $demo_cat_11_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_on_the_media',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_10_id,
));
$demo_cat_14_id = td_demo_category::add_category(array(
    'category_name' => 'Code Switch',
    'parent_id' => $demo_cat_11_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_code_switch',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_11_id,
));
$demo_cat_15_id = td_demo_category::add_category(array(
    'category_name' => 'Studio 360',
    'parent_id' => $demo_cat_11_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_studio360',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $td_cloud_sub_cat_template_12_id,
));


/*  ----------------------------------------------------------------------------
    pages
 */
//homepage
$td_homepage_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/homepage.txt',
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
    'title' => 'Arts & Culture',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id,
), true);
td_demo_menus::add_mega_menu(array(
    'title' => 'Comedy',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id,
), true);
td_demo_menus::add_mega_menu(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_11_id,
), true);


/*  ---------------------------------------------------------------------------
    posts
*/
/* ------------------------------------------------------------------ */

td_global::set_demo_installing(true);

td_demo_content::add_post(array(
    'title' => 'The Surprises of Romantic Attraction',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'A Sentimental Art Journey',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Hong Kong’s Foo Tak',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Bermuda Triangle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Chia Pontiac',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_5',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Coroner’s Waiting Room',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Question',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Don’t Move to Portland',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Sweet Dreams',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_9',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Everything Is Fake',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_10',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Everything Is Fake',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_11',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Welcome to The Jungle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_12',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));


td_demo_content::add_post(array(
    'title' => 'What Really Works for Exercise Recovery?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_13',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Victor Hugo Drawings at the Hammer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_14',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'House of Kenzo',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_15',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'UFO Sightings',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_1',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Debris Theory',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_2',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Yes, No, I Don’t Know…',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_3',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'What’s that Aunt Doing?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Endless Pineapple',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Up Your Alley',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_6',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Bad Reputation',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_7',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Bad Reputation',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_8',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Found in Translation',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_9',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));


td_demo_content::add_post(array(
    'title' => 'Can You Learn to Be Lucky?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Never Too Much Van Gogh',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_11',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Archiving Tunisia',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Finding Cleopatra’s Tomb',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_13',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'A Plane in Every Garage',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_14',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Love Triangle Plus Two',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_15',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'That’s a Big Cow!',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Get the Ham',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Dirty Laundry',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_3',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'No Notoriety',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_4',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'No Notoriety',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_5',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Shall We Dance?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_6',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));


td_demo_content::add_post(array(
    'title' => 'How to Get a Handle on Your Anger',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_7',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Best Art Memories of 2018',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'A Passion For Dance',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_9',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Lee Harvey Oswald',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Rolling Punchline',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Trees Tell You To Murder',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_12',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Aditi’s Intro to India',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_13',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Who Is Listening?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_14',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Train of Thought',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_15',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Look Back in Anger',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_1',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Look Back in Anger',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_2',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Cracking Cases',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_3',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));


td_demo_content::add_post(array(
    'title' => 'Let’s Talk About Death Over Dinner',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_4',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Art as a Headache, Art as Medicine',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_5',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Songs For Change',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_6',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Jack the Ripper',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_7',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Random Acts of Stupidity',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_8',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Two Sides Of One Story',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Mature Grown Up Politics',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Shirt’s Too Short',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Spill the Tea',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_12',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Spy vs. Spy',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_13',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Spy vs. Spy',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_14',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Oscar Hour',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_15',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));


td_demo_content::add_post(array(
    'title' => '1,000 Books to Read Before You Die',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Gods of Architecture Smile Upon LA',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_2',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Art Breaking Barriers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_3',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Holy Grail',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_4',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The California Way',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_5',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Hot For Teacher',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Independents Day',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'The Champ is Here',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Kids Are Asking',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_12_id),
    'featured_image_td_id' => 'td_pic_9',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Policing the Police',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_13_id),
    'featured_image_td_id' => 'td_pic_10',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Policing the Police',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_14_id),
    'featured_image_td_id' => 'td_pic_11',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));
td_demo_content::add_post(array(
    'title' => 'Mob Mentalities',
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_15_id),
    'featured_image_td_id' => 'td_pic_12',
    'featured_audio_url' => wp_get_attachment_url(td_demo_media::get_by_td_id('td_audio_file')),
    'post_format' => 'audio'
));

td_global::set_demo_installing(false);