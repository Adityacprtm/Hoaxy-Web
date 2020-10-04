<?php
// main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');

// homepage menu
$td_demo_homepage_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', 'custom-menu');


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
    'title' => 'Global Header Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/global_header_cloud_template.txt',
    'template_type' => 'header',
));
// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_header_menu_id );

//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_cloud_template.txt',
    'template_type' => 'single',
    //'header_template_id' => $td_cloud_front_header_template_id2
));
// set the default site wide post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);

//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));
// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );

//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );

//cloud template - type search
$td_cloud_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
// set the default site wide search template
td_util::update_option( 'tdb_search_template', 'tdb_template_' . $td_cloud_search_template_id );

//cloud template - type date
$td_cloud_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/date_cloud_template.txt',
    'template_type' => 'date',
));
// set the default site wide date template
td_util::update_option( 'tdb_date_template', 'tdb_template_' . $td_cloud_date_template_id );

//cloud template - type tag
$td_cloud_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/tag_cloud_template.txt',
    'template_type' => 'tag',
));
// set the default site wide date template
td_util::update_option( 'tdb_tag_template', 'tdb_template_' . $td_cloud_tag_template_id );

//cloud template - type 404
$td_cloud_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Video News Pro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/404_cloud_template.txt',
    'template_type' => '404',
));
// set the default site wide 404 template
td_util::update_option( 'tdb_404_template', 'tdb_template_' . $td_cloud_404_template_id );

$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Video News Pro',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id = td_demo_category::add_category(array(
    'category_name' => 'Videos',
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
    'category_name' => 'Animations',
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
    'category_name' => 'Gameplay',
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
    'category_name' => 'Movie trailers',
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
    'category_name' => 'Music',
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
$demo_cat_6_id = td_demo_category::add_category(array(
    'category_name' => 'Tutorials',
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
$demo_cat_7_id = td_demo_category::add_category(array(
    'category_name' => 'Series',
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
    'category_name' => 'Game reviews',
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
$demo_cat_9_id = td_demo_category::add_category(array(
    'category_name' => 'Top spots',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/homepage.txt',
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
    'title' => 'Videos',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id,
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Series',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id,
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Game reviews',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id,
));
td_demo_menus::add_category(array(
    'title' => 'Top spots',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id,
));

// add categories to the homepage menu
td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-magic-wand" style="position: relative; top: -2px; font-size: 32px; vertical-align: middle; margin-right: 9px;"></i> Animations',
    'add_to_menu_id' => $td_demo_homepage_menu_id,
    'category_id' => $demo_cat_2_id,
));
td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-mouse" style="position: relative; top: -2px; font-size: 32px; vertical-align: middle; margin-right: 9px;"></i> Gameplay',
    'add_to_menu_id' => $td_demo_homepage_menu_id,
    'category_id' => $demo_cat_3_id,
));
td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-apperture" style="position: relative; top: -2px; font-size: 32px; vertical-align: middle; margin-right: 9px;"></i> Movie Trailers',
    'add_to_menu_id' => $td_demo_homepage_menu_id,
    'category_id' => $demo_cat_4_id,
));
td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-headphones" style="position: relative; top: -2px; font-size: 32px; vertical-align: middle; margin-right: 9px;"></i> Music',
    'add_to_menu_id' => $td_demo_homepage_menu_id,
    'category_id' => $demo_cat_5_id,
));
td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-vector-line" style="position: relative; top: -2px; font-size: 32px; vertical-align: middle; margin-right: 9px;"></i> Tutorials',
    'add_to_menu_id' => $td_demo_homepage_menu_id,
    'category_id' => $demo_cat_6_id,
));


/*  ---------------------------------------------------------------------------
    posts
*/
/* ------------------------------------------------------------------ */

td_global::set_demo_installing(true);

td_demo_content::add_post(array(
    'title' => 'Does the ‘Incredibles 2’ Trailer Give Us Enough Elastigirl?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));

td_demo_content::add_post(array(
    'title' => 'Star Wars Battlefront II: Battle of Geonosis Official Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=W-lwHrw_914',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'New \'Teen Spirit\' Trailer Has Elle Fanning Singing in a Cinderella Story',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=lRPUrnXzqZY',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Summer Music Mix 2019 - Best Of Tropical Deep House',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=r7-xpJE5I9A',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Full Beginner DJ Tutorial - Everything You Need To Play',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=_2qNb5cEMAk',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Sam Neill on \'The Pacific: In the Wake of Captain Cook\' & Having No Desire to Retire',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=YytGZfLG_As',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Far Cry New Dawn Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=iOplE96-tTM',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Joe Pesci watches Home Alone Again (Google Assistant)',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SaVLU08JnJo',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => 'Will \'How to Train Your Dragon\' be the Best Animated Trilogy?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Metro Exodus Walkthrough Gameplay Part 1 - Intro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=W-lwHrw_914',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Watch: Neill Blomkamp’s \'Anthem\' Short \'Conviction\' Teased in First Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=wka5RovFEo8',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Car Music Mix 2019 Bass Boosted Remix',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=yLsMBrnIovg',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Lightroom Tutorial for Beginners - Overview of Everything',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=bN2jqsJgbBs',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'The Umbrella Academy\': How the Ending Improves on Gerard Way\'s Comic',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=eppVlCSqt9E',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Assassin\'s Creed Odyssey Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=sF99utFEfk4',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'KFC UK Christmas Advert 2018',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=fM5wUJUXBAc',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => '\'Toy Story 4\' Trailer Disappoints During Super Bowl?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Mortal Kombat 11 – Official Gameplay Reveal Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=W-lwHrw_914',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Octavia Spencer Is Terrifying in First Trailer for Blumhouse Thriller \'Ma\'',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=rP7CJOfwZYs',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Video Game Music Video – You’re Gonna Go Far, Kid',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=Z5fnKAeHv2U',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Jupiter Rising - Adobe Photoshop CC Manipulation - By Flew',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=q9emDf7BPUk',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Marvel\'s \'Loki\' TV Series Lands \'Rick and Morty\' Writer as Showrunner',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=xfML7x8VVNA',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Shadow of the Tomb Raider Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=tdEfROL2Wx8',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Mr. Bean - "Kung Fu Training" (Snickers Adverti)',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=pXuOqVplODs',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => '\'Spider-Verse 2\' Story Will Focus on Miles and Gwen',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Sylas: The Unshackled | Champion Trailer - League of Legends',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=L6tWvy3JvFI',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'First Trailer for \'Tolkien\' Plays Up the Fantasy Aspect and the Horrors of War',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=zRmscXowX2U',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'ChillYourMind Radio • 24/7 Music Live Stream',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=Ec7VUcdB-ww',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Leap - Adobe Photoshop CS6 Manipulation - By FlewDesigns',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=n-37zA6W1W8',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'First Trailer for Veep\'s Final Season Teases One Last Profanity-Laden Round',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=akx0D0kCtfU',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Crackdown 3 Campaign Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=Pngf7qP65ww',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Home Alone Again with the Google Assistant',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=xKYABI-dGEA',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => 'Is \'The Lion King\' Live-Action or Animation?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Far Cry New Dawn: Launch Gameplay Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=mc9ORzs23oY',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'Yesterday\' Trailer Awakens in a World Where Only One Man Can Remember \'The Beatles\'',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=fWMuCXs7RI8',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'New Electro & House Dance Mix #82',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=KHMH1eUWf-U',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Glowing Mushroom - Photoshop Fantasy Manipulation Tutorial',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=_uGCW2D9AoQ',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'The Punisher\' and \'Jessica Jones\' Cancelled by Netflix',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=n0rrXimOH_I',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Red Dead Redemption 2 Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=wKdcRjpTpFk',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Matthew Mcconaughey Lincoln Commercial 2017',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=8LYpD9KyeXA',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => '\'Into the Spider-Verse\' Sequel & All-Female Spinoff',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Cyberpunk 2077 Gameplay Reveal — 48-minute walkthrough',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=vjF9GgrY9c0',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'The Hustle\' Trailer Reveals Anne Hathaway and Rebel Wilson in Comedy Remake',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=2WjZIVwx_Fo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Chill Out Music Mix Best Chill Trap, Indie, Deep House',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=rj73lCWeZQw',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '4 Great Motion Graphics Techniques in After Effects',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=9bnOVV3EBC8',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'True Detective\' Season 3 Finale Trailer: Time Is a Flat Circle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=oHQyTg1DkjM',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Call of Cthulhu: Game Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=lwsjS4rGCSU',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Michael Bublé vs bubly Super Bowl 2019 Advert',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SRfsJi_0HHA',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => 'New \'The SpongeBob SquarePants Movie\' to Be an Origin Story',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'PUBG - Vikendi Snow Map Gameplay Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=hfjazBN0DwA',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'New \'Triple Frontier\' Trailer Has Ben Affleck Pulling off an Audacious Heist',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=VN4i3cPtjGI',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Most Beautiful & Powerful Epic Music Mix vol. 5',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=XgrK42bq77g',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Just Around The Bend – Adobe Photoshop CC Timelapse',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=1l19LRmygjQ',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'Documentary Now!\' Season 3 Review: Musicals, Cults, and Bowling',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=fC4M9OrxGys',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Resident Evil 2 - Game Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=iXjnBcEI28E',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Where Everyone Plays | Coca-Cola & the Premier League',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=8_XBxcIoZy0',
    'post_format' => 'video'
));


td_demo_content::add_post(array(
    'title' => '\'Incredibles 2\' Opens to $180 Million; Will Any 2018 Film Top It?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=SNo6D6gwbVo',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Tekken 7 - NEGAN The Walking Dead Gameplay Trailer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=1tgxZIdjinc',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => '\'Long Shot\' Trailer Has the US Secretary of State Falling for Seth Rogen',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=ly-Zi-rbYOI',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Fatboy Slim At British Airways i360 for Cercle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=8AvC05kXS9I',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Bulb Moon - Photoshop Manipulation Tutorial Processing',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=vkU4xAts35k',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'The \'Counterpart\' Season 2 Finale Undoes an Original Sin & Introduces a New One',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=KMSAlye0hhQ',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'Apex Legends Review',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=grJ1rKkLiZA',
    'post_format' => 'video'
));
td_demo_content::add_post(array(
    'title' => 'McVities Digestive Biscuits Advert - Kittens',
    'file' => TDC_PATH_LEGACY . '/includes/demos/video_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => '',
    'featured_video_url' => 'https://www.youtube.com/watch?v=uxXZ_uEVr9c',
    'post_format' => 'video'
));

td_global::set_demo_installing(false);