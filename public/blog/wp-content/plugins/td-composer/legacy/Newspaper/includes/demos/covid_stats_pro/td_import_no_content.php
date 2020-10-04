<?php


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

$template_category_global_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template – Global',
    'file' => 'cat_global_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_global_template_id);

$template_category_common_questions_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template – Common Questions',
    'file' => 'cat_common_questions_cloud_template.txt',
    'template_type' => 'category',
));

$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_category_template_common_questions_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Common Questions',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_common_questions_id = td_demo_content::add_page(array(
    'title' => 'Common Questions',
    'file' => 'common_questions.txt',
));

$page_statistics_id = td_demo_content::add_page(array(
    'title' => 'Statistics',
    'file' => 'statistics.txt',
));

$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
