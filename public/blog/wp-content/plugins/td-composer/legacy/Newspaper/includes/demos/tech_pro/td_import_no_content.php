<?php
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