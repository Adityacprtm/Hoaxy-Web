<?php
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
    'title' => '404 Cloud Template - Nomad',
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