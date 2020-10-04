<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

/*  ----------------------------------------------------------------------------
    Cloud Templates
*/

//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));

// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );


//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category'
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_cloud_template.txt',
    'template_type' => 'single'
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/author_cloud_template.txt',
    'template_type' => 'author'
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/404_cloud_template.txt',
    'template_type' => '404'
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/search_cloud_template.txt',
    'template_type' => 'search'
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


//cloud template - type date - global
$td_cloud_global_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/date_cloud_template.txt',
    'template_type' => 'date'
));

// set - the default (global) search template
td_demo_misc::update_global_date_template( 'tdb_template_' . $td_cloud_global_date_template_id );

//cloud template - type tag - global
$td_cloud_global_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - History PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/tag_cloud_template.txt',
    'template_type' => 'tag'
));

// set - the default (global) search template
td_demo_misc::update_global_tag_template( 'tdb_template_' . $td_cloud_global_tag_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - History PRO',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));
