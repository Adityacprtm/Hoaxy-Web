<?php
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/podcasts/pages/sub_cat_cloud_templates/sub_cat_cloud_template_1.txt',
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