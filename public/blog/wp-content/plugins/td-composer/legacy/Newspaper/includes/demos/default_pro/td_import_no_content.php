<?php
/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
	'title' => 'Home',
	'file' => 'home.txt',
	'homepage' => true,
));

/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_author_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Default PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_1_id);


$template_date_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template - Default PRO',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));
td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_1_id);


$template_attachment_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Attachment Template - Default PRO',
    'file' => 'attachment_cloud_template.txt',
    'template_type' => 'attachment',
));
td_demo_misc::update_global_attachment_template( 'tdb_template_' . $template_attachment_template_1_id);

$template_tag_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template - Default PRO',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));
td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_1_id);


$template_search_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template - Default PRO',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));
td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_1_id);


$template_404_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template - Default PRO',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_1_id);


$template_category_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Default PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_1_id);


$template_single_post_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Default PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_1_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template - Default PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_1_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Default PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_1_id);