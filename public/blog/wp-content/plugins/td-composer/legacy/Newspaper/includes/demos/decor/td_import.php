<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'custom-menu-1'); //custom-menu-1 is a random location name, it can be anything
$td_demo_header_menu_extra_id = td_demo_menus::create_menu('td-demo-header-menu-extra', 'custom-menu-2'); //custom-menu-1 is a random location name, it can be anything
$td_demo_mobile_menu_id = td_demo_menus::create_menu('td-demo-mobile-menu', 'header-menu'); //td-demo-mobile-menu will be the default header menu, if, for any reason, the header template will not apply

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_7');

// login background
td_demo_misc::update_background_login('td_pic_4');


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
    ads
*/
td_demo_misc::clear_all_ads();

td_demo_misc::add_ad_image('custom_ad_1', 'td_decor_ad');


/*  ----------------------------------------------------------------------------
    sidebars
*/
//default sidebar
td_demo_widgets::remove_widgets_from_sidebar('default');

//remove footer widgets > remove existing widgets from footer widgets areas
td_demo_widgets::remove_widgets_from_sidebar('footer-1');
td_demo_widgets::remove_widgets_from_sidebar('footer-2');
td_demo_widgets::remove_widgets_from_sidebar('footer-3');


/*  ----------------------------------------------------------------------------
    Cloud Templates
*/
//cloud template - type category
$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/cat_cloud_template.txt',
    'template_type' => 'category',
));

// set - the default (global) cloud category template
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


//cloud template - type single
$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_cloud_template.txt',
    'template_type' => 'single',
));

// set the default (site wide) post template
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


//cloud template - type author - global
$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/author_cloud_template.txt',
    'template_type' => 'author',
));

// set - the default (global) cloud author template
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


//cloud template - type 404 - global
$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/404_cloud_template.txt',
    'template_type' => '404',
));

// set - the default (global) cloud 404 template
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


//cloud template - type search - global
$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/search_cloud_template.txt',
    'template_type' => 'search',
));

// set - the default (global) search template
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );

//cloud template - type header - global
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Home Decor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/header_cloud_template.txt',
    'template_type' => 'header',
));

// set - the default header template
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );

//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_mobile_menu_id );


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Ideas',
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
        'category_name' => 'Bathroom',
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
        'category_name' => 'Bedroom',
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
        'category_name' => 'Entrance',
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
        'category_name' => 'Kitchen',
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
        'category_name' => 'Living Room',
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
    'category_name' => 'Renovate',
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
    'category_name' => 'Projects',
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
    'category_name' => 'Decorate',
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
    'category_name' => 'Advice',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));

//footer page
$td_footerpage_id = td_demo_content::add_page(array(
    'title' => 'Footer',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/footer.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'sidebar_position' => 'no_sidebar',
    'homepage' => false
));

td_util::update_option( 'tds_footer_page', $td_footerpage_id);


/*  ----------------------------------------------------------------------------
    menu
*/

//first menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Ideas',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Renovate',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));


//second menu

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Projects',
    'add_to_menu_id' => $td_demo_header_menu_extra_id,
    'category_id' => $demo_cat_8_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Decorate',
    'add_to_menu_id' => $td_demo_header_menu_extra_id,
    'category_id' => $demo_cat_9_id
));

// mega menu one subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Advice',
    'add_to_menu_id' => $td_demo_header_menu_extra_id,
    'category_id' => $demo_cat_10_id
));

//mobile menu

td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Ideas',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'category_id' => $demo_cat_1_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Renovate',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'category_id' => $demo_cat_7_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Projects',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'category_id' => $demo_cat_8_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Decorate',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'category_id' => $demo_cat_9_id
));

td_demo_menus::add_mega_menu(array(
    'title' => 'Advice',
    'add_to_menu_id' => $td_demo_mobile_menu_id,
    'category_id' => $demo_cat_10_id
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Living room with lilac sofa, floral feature wall and cosy',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Boutique style bedroom with feature wall and upholstered bed',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Scandinavian style open-plan kitchen-diner with wood accents',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Contemporary clean bathroom with gray walls and exposed bath tub',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Classic hallway with eucalyptus wreath and metallic accessories',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Luxurious four bedroom house with roman stone bath house',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Restore a vanity unit to create a super-stylish piece of furniture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Add a long carpet to your hallway entrance to make it more appealing',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Top 5 easy last minute fall table decorating ideas to try',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id,$demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Eclectic living room with tall windows and suede sofa set',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'White living room, light canvas sofa and large plant setting',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Modern living room with spectacular windows and garden view',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Traditional living room with decorative mahogany furniture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_10_id),
    'featured_image_td_id' => 'td_pic_1'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Peach bedroom with oriental style bed curtains and oak furniture',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Neutral bedroom with floor to ceiling windows and pastel colors',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Minimalistic bedroom with strong wooden walls and white ceiling',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'White bedroom with Hollywood star portraits and blue accents',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Red kitchen with pretty wood accents and colorful accessories',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Wood floring kitchen with white worktops and glass and metal accents',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Clean kitchen with chairs, minimalistic style and ceiling lights',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Urban kitchen with granite tops, exposed bulb lights and island',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Ultra modern glossy bath with tall black cabinets and wite marble',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Royal style bathroom with freestanding bath and ceramic floors',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Classic bathroom with wood furniture and window side bath tub',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Modern bathroom with metro rocks, large plant and neutral tiles',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Spacious hallway filled with plants with wooden flooring and ceiling',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'White and light-filled hallway with large green window covers',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Modern monochrome hallway with striped wallpaper and brown floor',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Luxe hallway with chess table flooring and large rounded windows',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'The best gray paint – how to choose the right shade for your walls',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Flooring – everything you need to know about fitting and cleaning',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'How to clean and maintain your chimney and heating stove for winter',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => '8 essentials for harmonious hallway and entryway interior design',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Discover a fun and playful way to brighten up your space in no time',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Decorating hacks – simple updates on amazing pieces that anyone can do',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Build a herb planter – to make easy work of watering your herbs',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Paint your front door a bright red to create plenty of kerb appeal',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Edwardian semi in Essex, renovated and brought to life with colours',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => '300-year-old property that was originally two separate dwellings',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Light and bright Scandi-style newly renovated double home in Glasgow',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Newly renovated with original details medieval cottage in England',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Modern monochrome home with calm and cosy terrace and wooden steps',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Scandinavian boho three-bed decorated with neutral tones in Belfast',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Have a look around this bold and colourful 1930s semi in London',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Step inside this modern dream home placed on the edge of the forest',
    'file' => TDC_PATH_LEGACY . '/includes/demos/decor/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));