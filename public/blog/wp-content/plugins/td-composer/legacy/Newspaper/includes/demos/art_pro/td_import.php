<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');


// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');


// mobile menu/search background
td_demo_misc::update_background_mobile('td_mobile_bg');

// login background
td_demo_misc::update_background_login('td_login_bg');


/*  ----------------------------------------------------------------------------
    logo
*/
td_demo_misc::update_logo(array(
    'normal' => '',
    'mobile' => ''
));

//footer
td_demo_misc::update_footer_logo(array(
    'normal' => '',
));

/*  ----------------------------------------------------------------------------
    socials
*/
td_demo_misc::add_social_buttons(array(
    'facebook' => '#',
    'twitter' => '#',
    'instagram' => '#',
    'youtube' => '#'
));


/*  ----------------------------------------------------------------------------
    Cloud Templates
*/

//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));

// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );


//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category'
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_cloud_template.txt',
    'template_type' => 'single'
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/author_cloud_template.txt',
    'template_type' => 'author'
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/404_cloud_template.txt',
    'template_type' => '404'
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/search_cloud_template.txt',
    'template_type' => 'search'
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


//cloud template - type date - global
$td_cloud_global_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/date_cloud_template.txt',
    'template_type' => 'date'
));

// set - the default (global) search template
td_demo_misc::update_global_date_template( 'tdb_template_' . $td_cloud_global_date_template_id );

//cloud template - type tag - global
$td_cloud_global_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Cloud Template - Art PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/tag_cloud_template.txt',
    'template_type' => 'tag'
));

// set - the default (global) search template
td_demo_misc::update_global_tag_template( 'tdb_template_' . $td_cloud_global_tag_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Art PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Art Timeline',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'A complete history of art, categorizing paintings into sections and explaining brush work and techniques used in each century and movement.',
    'background_td_pic_id' => 'td_pic_1',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Baroque',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Highly ornate and extravagant style which used warm and intense colors and embraced strong contrasts of light and darkness to draw the attention to the action.',
        'background_td_pic_id' => 'td_pic_2',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Contemporary',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Starting from the second half of the 20th century to the present, the movement is heavily influenced by the culturally diverse and technologically advancing world.',
        'background_td_pic_id' => 'td_pic_3',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Medieval',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Medieval art was produced in various media, the main inspiration of the movement was a mix between elements of the classical, early Christianity and “barbarian” art.',
        'background_td_pic_id' => 'td_pic_4',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Renaissance',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'The development of new techniques and artistic sensibilities led to a new era in art which became known as a rebirth. It involved a more individualistic view of man.',
        'background_td_pic_id' => 'td_pic_5',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Rococo',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Known as the “late Baroque”, Rococo was a style which combined asymmetry, scrolling curves, gilding, and pastel colors, and created illusions of motion, drama, surprise.',
        'background_td_pic_id' => 'td_pic_6',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_7_id =td_demo_category::add_category(array(
        'category_name' => 'Romanticism',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'The movement emphasized emotion and individualism through the use of nature as its main principle and focus. Spontaneity was elevated as a desirable trait.',
        'background_td_pic_id' => 'td_pic_7',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Artists',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Life and works of renown artists. How did they paint what they painted? What inspired and led them to create their masterpieces? Learn and find out here.',
    'background_td_pic_id' => 'td_pic_8',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Museums',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'A trip around the world to visit and see the many galleries in the most prestigious cities. Each new exhibit that gets public attention shall be detailed in each article.',
    'background_td_pic_id' => 'td_pic_9',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Exhibitions',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Browse through the current and past exhibitions held at the Museum of Art in Tuscany and L’Aquila, Italy. Plan your trip accordingly and check back weekly for new updates.',
    'background_td_pic_id' => 'td_pic_10',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

//magazine page
$td_magazinepage_id = td_demo_content::add_page(array(
    'title' => 'Exhibitions',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/exhibitions.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => 'no_sidebar',
    'homepage' => false
));


/*  ----------------------------------------------------------------------------
    menu
*/

//main menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Homepage',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Art Timeline',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// category mega menu
td_demo_menus::add_mega_menu(array(
    'title' => 'Artists',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category mega menu
td_demo_menus::add_mega_menu(array(
    'title' => 'Museums',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

//add the magazine page to the menu
td_demo_menus::add_page(array(
    'title' => 'Exhibitions',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_magazinepage_id,
    'parent_id' => ''
));

/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Albert Anker, the “national painter” of Switzerland, and his works',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Smithsonian Institution, Washington D.C. and its exhibitions',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Charles-François Daubigny, life, works, and inspiration',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Red Sunset on the Dnieper by Arkhip Ivanovich Kuindzhi, russian artist',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Portrait: Lady Maria Conyngham by Sir Thomas Lawrence, canvas',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'The Oberton from the South by Bernardo Bellotto, landscape',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Pastoral Landscape: The Roman Campagna by Claude Lorrain',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Plate from “Scenographiae…” by Johannes van Doetecum',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'The spectacle of urban life through the works of Camille Pissarro',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Francesco Guardi, stylistic view and landscape paintings',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'The tonal manner of Jan van Goyen and his diagonal design',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Life of Eugene Delacroix in the post-revolutionary Paris',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */


td_demo_content::add_post(array(
    'title' => 'Celebrate History with Jacques-Louis David and his beautiful works',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The Wanderers and idealized Russian life: Konstantin Yegorovich Makovsky',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Mythology entwined with realism, the activity of William-Adolphe Bouguereau',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Melodramatic paintings of religious subjects: John Martin and his works',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'A trip to Madrid, Spain, to visit their art museum: The Prado',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Welcome to Italy: The Walls and Paintings at Uffizi Gallery',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'State Hermitage, St. Petersburg, Russia: Modern Sculpture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Our Photographic Story of a day Spent exploring the Louvre, Paris',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Impressionism through the eyes and works of Édouard Manet',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Empirical Research in the pursuit of Knowledge with Simon Denis',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Bold Colors and the expressive brushwork of Vincent van Gogh',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Dance and Opera as the main muse for Edgar Degas’ works',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'In Full Sunlight by James Tissot, garden in London with artists’ companions',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Countess Alexander Nikolaevitch Lamsdorff by Franz Xaver Winterhalter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'The Missionary’s Adventures by Jean-Georges Vibert, ecclesiastical life',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Marine: The Waterspot by Gustave Courbet, tornado at sea, whirling spiral',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Salisbury Cathedral from the Bishop’s Grounds by John Constable',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Portrait: Calmady Children, Emily and Laura Anne by Sir Thomas Lawrence',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'The Afternoon Meal by Luis Meléndez, still life with dark background',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Grand Canal above the Rialto by Francesco Guardi, Palazzo snapshot',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Painting: Classical Landscape with Figures by Henri Mauperché',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Basket of Flowers by Jan Brueghel the Younger, still life painting',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'A Maid Asleep by Johannes Vermeer, moralizing lesson of domestic life',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Still Life with Oysters, a Silver Tazza, and Glassware',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Arrival in Bethlehem , landscape painting with a narrative',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Biblical Portrayal: Adoration of the Magi by Sandro Botticelli',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Annunciation by Peter Candid, painted for a small church',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Tommaso di Folco Portinari, Maria Portinari by Hans Memling',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Smoke Signal by Frederic Remington, long distance communication',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Street Pavers by Umberto Boccioni, powerful form of the modern laborer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'A Rose by Thomas Anschutz, late nineteenth century American painting',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Fishing Boats, Key West by Windslow Homer, broad strokes of watercolor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Modern Rome by Giovanni Paolo Panini, famous displays in gallery',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Painting: The Death of Harmonia by Jean-Baptiste Marie Pierre',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'The Fair at Bezons by Jean-Baptiste Joseph Pater, Paris event',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Piazza San Marco by Giovanni Antonio Canal, Venice crowds',
    'file' => TDC_PATH_LEGACY . '/includes/demos/art_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));