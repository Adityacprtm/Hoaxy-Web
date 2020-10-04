<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_beers_id = td_demo_category::add_category(array(
	'category_name' => 'Beers',
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

$cat_cocktail_recipes_id = td_demo_category::add_category(array(
	'category_name' => 'Cocktail Recipes',
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

$cat_featured_id = td_demo_category::add_category(array(
	'category_name' => 'Featured',
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

$cat_gin_id = td_demo_category::add_category(array(
	'category_name' => 'Gin',
	'parent_id' => $cat_cocktail_recipes_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_rum_id = td_demo_category::add_category(array(
	'category_name' => 'Rum',
	'parent_id' => $cat_cocktail_recipes_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_shots_shooters_id = td_demo_category::add_category(array(
	'category_name' => 'Shots &amp; Shooters',
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

$cat_uncategorized_id = td_demo_category::add_category(array(
	'category_name' => 'Uncategorized',
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

$cat_vodka_id = td_demo_category::add_category(array(
	'category_name' => 'Vodka',
	'parent_id' => $cat_cocktail_recipes_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_whisky_id = td_demo_category::add_category(array(
	'category_name' => 'Whisky',
	'parent_id' => $cat_cocktail_recipes_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_wines_id = td_demo_category::add_category(array(
	'category_name' => 'Wines',
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
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/
$post_td_post_canned_wines_id = td_demo_content::add_post(array(
	'title' => 'Canned Wines',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_italian_wine_id = td_demo_content::add_post(array(
	'title' => 'Italian Wine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_dry_red_wines_id = td_demo_content::add_post(array(
	'title' => 'Dry Red Wines',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_bordeaux_wine_id = td_demo_content::add_post(array(
	'title' => 'Bordeaux Wine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_madeira_wine_id = td_demo_content::add_post(array(
	'title' => 'Madeira Wine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_sweet_red_wines_id = td_demo_content::add_post(array(
	'title' => 'Sweet Red Wines',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_wines_id,),
));

$post_td_post_beer_styles_101_id = td_demo_content::add_post(array(
	'title' => 'Beer Styles 101',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_beer_and_chocolate_id = td_demo_content::add_post(array(
	'title' => 'Beer and Chocolate',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_how_to_taste_beer_id = td_demo_content::add_post(array(
	'title' => 'How to Taste Beer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_beergaritas_id = td_demo_content::add_post(array(
	'title' => 'Beergaritas',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_history_of_pilsner_id = td_demo_content::add_post(array(
	'title' => 'History of Pilsner',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_popular_german_beers_id = td_demo_content::add_post(array(
	'title' => 'Popular German Beers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_beers_id,),
));

$post_td_post_the_stoplight_id = td_demo_content::add_post(array(
	'title' => 'The Stoplight',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_margarita_jello_id = td_demo_content::add_post(array(
	'title' => 'Margarita Jello',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_oatmeal_cookie_id = td_demo_content::add_post(array(
	'title' => 'Oatmeal Cookie',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_ice_cream_shot_id = td_demo_content::add_post(array(
	'title' => 'Ice Cream Shot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_voodoo_shooter_id = td_demo_content::add_post(array(
	'title' => 'Voodoo Shooter',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_mind_eraser_id = td_demo_content::add_post(array(
	'title' => 'Mind Eraser',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_shots_shooters_id,),
));

$post_td_post_godmother_id = td_demo_content::add_post(array(
	'title' => 'Godmother',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_kamikaze_id = td_demo_content::add_post(array(
	'title' => 'Kamikaze',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_screwdriver_id = td_demo_content::add_post(array(
	'title' => 'Screwdriver',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_white_russian_id = td_demo_content::add_post(array(
	'title' => 'White Russian',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_bloody_mary_id = td_demo_content::add_post(array(
	'title' => 'Bloody Mary',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_cosmopolitan_id = td_demo_content::add_post(array(
	'title' => 'Cosmopolitan',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_vodka_id,),
));

$post_td_post_singapore_sling_id = td_demo_content::add_post(array(
	'title' => 'Singapore Sling',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_floradora_id = td_demo_content::add_post(array(
	'title' => 'Floradora',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_gin_martini_id = td_demo_content::add_post(array(
	'title' => 'Gin Martini',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_monkey_gland_id = td_demo_content::add_post(array(
	'title' => 'Monkey Gland',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_negroni_id = td_demo_content::add_post(array(
	'title' => 'Negroni',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_gin_tonic_id = td_demo_content::add_post(array(
	'title' => 'Gin & Tonic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_gin_id,),
));

$post_td_post_john_collins_id = td_demo_content::add_post(array(
	'title' => 'John Collins',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_pickleback_id = td_demo_content::add_post(array(
	'title' => 'Pickleback',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_irish_coffee_id = td_demo_content::add_post(array(
	'title' => 'Irish Coffee',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_whiskey_sour_id = td_demo_content::add_post(array(
	'title' => 'Whiskey Sour',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_old_fashioned_id = td_demo_content::add_post(array(
	'title' => 'Old-Fashioned',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_manhattan_id = td_demo_content::add_post(array(
	'title' => 'Manhattan',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_whisky_id,),
));

$post_td_post_cable_car_id = td_demo_content::add_post(array(
	'title' => 'Cable Car',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_rum_id,),
));

$post_td_post_hurricane_id = td_demo_content::add_post(array(
	'title' => 'Hurricane',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_rum_id,),
));

$post_td_post_rum_and_coke_id = td_demo_content::add_post(array(
	'title' => 'Rum and Coke',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_rum_id,),
));

$post_td_post_pina_colada_id = td_demo_content::add_post(array(
	'title' => 'Piña Colada',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_rum_id,),
));

$post_td_post_mojito_id = td_demo_content::add_post(array(
	'title' => 'Mojito',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_rum_id,),
));

$post_td_post_strawberry_daiquiri_id = td_demo_content::add_post(array(
	'title' => 'Strawberry Daiquiri',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_rum_id,),
));


/*  ----------------------------------------------------------------------------
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_header_template_global_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Global',
    'file' => 'header_global_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_global_id);


$template_header_template_overlay_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Overlay',
    'file' => 'header_overlay_cloud_template.txt',
    'template_type' => 'header',
));


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
    'header_template_id' => $template_header_template_overlay_id
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
	'title' => 'Home',
	'file' => 'home.txt',
	'homepage' => true,
    'header_template_id' => $template_header_template_overlay_id
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Cocktail Recipes',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_cocktail_recipes_id,
	'parent_id' => '',
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Shots & Shooters',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_shots_shooters_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Wines',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_wines_id,
	'parent_id' => '',
));

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Beers',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_beers_id,
	'parent_id' => '',
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
