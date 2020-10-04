<?php
// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_1');

// login background
td_demo_misc::update_background_login('td_pic_1');

/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );


$td_cloud_header_overlay_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Overlay Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/header_overlay_cloud_template.txt',
    'template_type' => 'header',
));
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_header_overlay_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );



$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category',
    'header_template_id' => $td_cloud_global_header_template_id
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );



$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/post_cloud_template.txt',
    'template_type' => 'single',
    'header_template_id' => $td_cloud_global_header_template_id
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);



$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/author_cloud_template.txt',
    'template_type' => 'author',
    'header_template_id' => $td_cloud_header_overlay_template_id
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );



$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/404_cloud_template.txt',
    'template_type' => '404',
    'header_template_id' => $td_cloud_header_overlay_template_id
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );



$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Fitness PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/search_cloud_template.txt',
    'template_type' => 'search',
    'header_template_id' => $td_cloud_global_header_template_id
));
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );



$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Fitness PRO',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/fitness_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'header_template_id' => $td_cloud_header_overlay_template_id,
    'homepage' => true
));