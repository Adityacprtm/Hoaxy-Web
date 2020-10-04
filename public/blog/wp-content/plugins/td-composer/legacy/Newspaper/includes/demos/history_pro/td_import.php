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


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Time Period',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'A simple timeline of history. Explore Prehistory, Early Middle Ages, High Middle Ages, Early Modern and Modern times.',
    'background_td_pic_id' => 'td_pic_1',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Prehistory',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'From the earliest signs of written language, to the rise and fall of the Roman Empire and the wisdom of the Greek Philosophers.',
        'background_td_pic_id' => 'td_pic_2',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Early Middle Ages',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Often referred to as the “Dark Ages” or even “Late Antiquity”, this period of time in history emphasizes elements of continuity with the Roman Empire.',
        'background_td_pic_id' => 'td_pic_3',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'High Middle Ages',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'The rapid increasing population of Europe brought about great political and social change from the preceding era including the rural exodus.',
        'background_td_pic_id' => 'td_pic_4',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Early Modern',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Set before the beginning of the Age of Revolutions, this marks the colonization of Americas and its most defining feature being globalization.',
        'background_td_pic_id' => 'td_pic_5',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Modern',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => 'Starting with the Age of Revolutions, Modern history refers to the period in history of increased industrialization.',
        'background_td_pic_id' => 'td_pic_6',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'People',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Read all about Kings, Queens, Aristocrats, any one person who has has an impact upon the world we live in today.',
    'background_td_pic_id' => 'td_pic_7',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Locations',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Places of significant importance to cultures, traditions, religious beliefs, based on the year they were built.',
    'background_td_pic_id' => 'td_pic_8',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Events',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Explore historical moments in time (such as Apollo 11’s Blast Off to Space) and view them from a different perspective.',
    'background_td_pic_id' => 'td_pic_9',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

//magazine page
$td_magazinepage_id = td_demo_content::add_page(array(
    'title' => 'Magazine',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/magazine.txt',
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
    'title' => 'Time Period',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_mega_menu(array(
    'title' => 'People',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_mega_menu(array(
    'title' => 'Locations',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Events',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));

//add the magazine page to the menu
td_demo_menus::add_page(array(
    'title' => 'Magazine',
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
    'title' => 'The Pyramids: How and Why they were Built in Egypt',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'The Byzantine Empire from its Glorious Beginnings to its Fall',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Currency in England and Ireland during King Edward III’s reign',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Matthew Clarkson and his Prominent Political and Commercial Career',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Steam-powered gunboats used through the American Civil War',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Julius Caesar, life, military campaigns: birth and downfall',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The Historical Sight of Cathedral of Santa Maria del Fiore',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'The thwarting of the Gunpowder Plot and how it evolved into Bonfire Night',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'American Photographer: Amelia Van Buren and her tutelage under Eakins',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'The Customs and Habits the British used to Maintain at Tea Time',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Apollo 11 Command and Service Modules and what they were used for',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Oscar Wilde, the Irish poet and playwright of controversy',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */


td_demo_content::add_post(array(
    'title' => 'Tribe Chief Joseph, the History of Indigenous People of the America',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'The 6th President of the United States, John Quincy Adams, and his campaigns',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'The Northern front and its Heavy Artillery, the victory of the Civil War',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Kennedy Space Center, Florida, Apollo 11 Blast Off, a moment in History',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Waterloo Bridge is a testament to the British, Dutch, and Prussian victory',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Renaissance Church in the city of Rome: St. Peter’s Basilica',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Cistercian Monastery of England: Fountains Abbey, North Yorkshire',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'What part did Palazzo Vecchio play for the Medici Family?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'The Home of Independent Retailers: Oxford’s High Street',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Welcome to the Moon: the Deployment of the United States Flag',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_12'
));


/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Commander of the Confederate States Army, Robert Edward Lee',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Why Charles X’s reign led to the French Revolution of 1830',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'The life of the 16th President of the United States, Abraham Lincoln',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Poet Laureate of Great Britain and Ireland, Alfred, Lord Tennyson',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'General William Sherman and his implementation of the “Total War”',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_7'
));


/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Excavation at the Devereaux Station, Orange and Alexandria',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Hand colored portrait of a Union soldier by Oliver Willard',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'The Discovery of the X-ray and How it Impacted the Modern World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Grand Canyon seen through the Lens of William Bell’s camera',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Translator toiling away at old Manuscripts to source them',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_2'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The Formal attire of a Judge of the Criminal Court by Pierre Guerin',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Armchair from Louis XVI’s Salon des Jeux, example of the Neoclassical style',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Historical Events that can be seen as Motifs in Famous Paintings',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'The House of the first mayor of Philadelphia after the Revolution',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'How the Decorative Supports for Candles and Lights were made',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_12'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Notre-Dame de Paris: Catholic Cathedral of Gothic Architecture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'The private Chapel in the Castle of Ebreichsdorf, south of Vienna',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Church Architecture in the Middle Ages: Columns, Nave, Transepts',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Manuscripts that were Translated at the Wishes of Charles V',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Why Stained Glass was used to tell Short Stories in Churches',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_8'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Malbork Castle, Poland, constructed by the Teutonic Knights',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Griffins as an essential Motif for Sculptures and Decorations',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Biblical Scenes Painted on the Plates of the Byzantine Empire',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Stone Churches as a Remnant of the early Middle Ages',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'The Artisty in the Hands of the People: Irish Dunvegan Cup',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Funeral Beliefs and Rites in ancient Egypt: False Doors for the Buried',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'King Oenomaus, son of Ares, driving a Chariot, terracota plaque',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Stonehenge as one of the Most Astounding Wonders of the World',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Currency in Ancient Greece: Gold Oktadrachm of Ptolemy IV',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Terracota Jugs which were Painted to tell Short Stories in Ancient Greece',
    'file' => TDC_PATH_LEGACY . '/includes/demos/history_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_7'
));