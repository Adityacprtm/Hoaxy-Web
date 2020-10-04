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
td_demo_misc::update_background_mobile('td_pic_18');

// login background
td_demo_misc::update_background_login('');


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
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_header_menu_id );


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
    'title' => 'Footer Cloud Template - Life News PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Entertainment',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'Celebrities',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Movies',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'TV',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Music',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Games',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => '',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Food & Drink',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Fashion',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_10_id =td_demo_category::add_category(array(
    'category_name' => 'Technology',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

/*  ----------------------------------------------------------------------------
    menu
*/

//first menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'News',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Food',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Travel',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));
td_demo_menus::add_mega_menu(array(
    'title' => 'Technology',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id
));

// add a subcategory to the sub-menu
$parent_submenu_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

td_demo_menus::add_category(array(
    'title' => 'Technology',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_10_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Celebrities',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_2_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Movies',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_3_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'TV',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_4_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Music',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_5_id,
    'parent_id' => $parent_submenu_id
));
td_demo_menus::add_category(array(
    'title' => 'Games',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_6_id,
    'parent_id' => $parent_submenu_id
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Valentine\'s Day gift ideas for travellers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Fans don\'t approve of Mark Ruffalo\'s birthday message for Josh Brolin',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'A Star Is Born Merch Is Here, and Goodbye, Money',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Everything You Need to Know About Cardi B\'s Grammy Win Backlash',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Lady Gaga and Cardi B Meet at the Grammys',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Jennifer Aniston\'s Ex Justin Theroux Wishes Her Happy Birthday on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Offset Shares a Video of Cardi B Giving Birth to Baby Kulture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Cardi B Deletes Instagram After Social Media Backlash Over Her Historic Grammys Win',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'All the Celebrity Sightings at New York Fashion Week',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Goodbye, Old iPhone: This Could Be 10X Better',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Driven launches Tesla airport transfer service in UK',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Samsung says expects $4 billion in Indian sales of new smartphone range',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Apple to ship iPhones with only Qualcomm chips to German stores',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Selena Gomez Celebrates Her BFF\'s Bachelorette Party in Cabo San Lucas',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Lucy Beale looks dramatically different as she poses in a bikini',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Gabriela Hearst\'s Fall Collection Is for the Sophisticated Minimalist',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Elsa Hosk Looks Like an Absolute Vision in Victoria\'s Secret\'s $1M Fantasy Bra',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Beautiful waterfalls that will take your breath away',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'The 6 Best Luxury Hotels to See the Northern Lights This Winter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Escape Dublin For A Weekend Trip To Kilkea Castle',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'The World\'s Most Romantic Hotels 2020',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Weight loss: Sure shot ways to lose water weight quickly',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Where your favourite fruits and vegetables are grown',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Seven lucky foods eaten in celebration of the Chinese New Year',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'The best ways to get more fibre in your diet',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Apex Legends dream run continues: 25 million players in a week',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Here are 7 life lessons for every PUBG player',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Pokemon GO\'s new feature lets players snap a picture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'PUBG teases the launch of zombie mode on official game',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Arcade High - Outrun This!',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Rain Sword - Summer Breeze',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Fearcity - Midnight Run',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'NY Vice - Smooth Steering',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Grammy Awards Complete winners list',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Breaking Bad movie details: It\'s a sequel starring Aaron Paul, will premiere on Netflix',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Chance the Rapper releasing debut album this summer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Kate Gosselin to star in new reality show, Kate Plus Date',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Futurecop! - Karate Kids',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Maethelvin - Delight',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Awkoder - Lovely Eyes',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Vampire Step-Dad - Invitation',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Lady Gaga and Cardi B Meet at the Grammys',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Jennifer Aniston\'s Ex Justin Theroux Wishes Her Happy Birthday on Instagram',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Offset Shares a Video of Cardi B Giving Birth to Baby Kulture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Cardi B Deletes Instagram After Social Media Backlash Over Her Historic Grammys Win',
    'file' => TDC_PATH_LEGACY . '/includes/demos/life_news/pages/post_default.txt',
    'categories_id_array' => array(get_cat_ID(TD_FEATURED_CAT), $demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));
