<?php
/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_cloud_template.txt',
    'template_type' => 'single',
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/author_cloud_template.txt',
    'template_type' => 'author',
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/404_cloud_template.txt',
    'template_type' => '404',
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/search_cloud_template.txt',
    'template_type' => 'search',
));
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );


$td_cloud_global_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/date_cloud_template.txt',
    'template_type' => 'date',
));
td_demo_misc::update_global_date_template( 'tdb_template_' . $td_cloud_global_date_template_id );


$td_cloud_global_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template - Life News PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/tag_cloud_template.txt',
    'template_type' => 'tag',
));
td_demo_misc::update_global_tag_template( 'tdb_template_' . $td_cloud_global_tag_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template - Life News PRO',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));