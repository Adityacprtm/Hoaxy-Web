<?php
/*  ---------------------------------------------------------------------------
    top menu - MENUS MUST HAVE THE FOLLOWING NAMES:
    td-demo-top-menu
    td-demo-header-menu
    td-demo-footer-menu
*/

//main menu
$td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', 'header-menu');

//custom menu
$td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', 'custom-menu');

//custom menu 2
$td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', 'company-menu');

// main background > keep it empty to make sure that no bg img is set
td_demo_misc::update_background('');

// mobile menu/search background
td_demo_misc::update_background_mobile('td_pic_11');

// login background
td_demo_misc::update_background_login('td_pic_12');


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
$td_cloud_global_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $td_cloud_global_header_template_id );
//update mobile menu id in cloud header template
update_post_meta( $td_cloud_global_header_template_id, 'header_mobile_menu_id', $td_demo_header_menu_id );


$td_cloud_cat_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/cat_cloud_template.txt',
    'template_type' => 'category'
));
td_demo_misc::update_global_category_template( 'tdb_template_' . $td_cloud_cat_template_id );


$td_cloud_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_cloud_template.txt',
    'template_type' => 'single'
));
td_util::update_option('td_default_site_post_template', 'tdb_template_' . $td_cloud_post_template_id);


$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/author_cloud_template.txt',
    'template_type' => 'author'
));
td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


$td_cloud_global_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/404_cloud_template.txt',
    'template_type' => '404'
));
td_demo_misc::update_global_404_template( 'tdb_template_' . $td_cloud_global_404_template_id );


$td_cloud_global_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Cloud Template - Animals PRO',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/search_cloud_template.txt',
    'template_type' => 'search'
));
td_demo_misc::update_global_search_template( 'tdb_template_' . $td_cloud_global_search_template_id );


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Animals PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


/*  ---------------------------------------------------------------------------
    categories
*/
$demo_cat_1_id =td_demo_category::add_category(array(
    'category_name' => 'Animals',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_1',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
    $demo_cat_2_id =td_demo_category::add_category(array(
        'category_name' => 'African',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_2',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_3_id =td_demo_category::add_category(array(
        'category_name' => 'Carnivore',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_3',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_4_id =td_demo_category::add_category(array(
        'category_name' => 'Herbivore',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_4',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_5_id =td_demo_category::add_category(array(
        'category_name' => 'Marine',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_5',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
    $demo_cat_6_id =td_demo_category::add_category(array(
        'category_name' => 'Polar',
        'parent_id' => $demo_cat_1_id,
        'category_template' => '',
        'top_posts_style' => '',
        'description' => '',
        'background_td_pic_id' => 'td_pic_6',
        'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
        'sidebar_id' => '',
        'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
        'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    ));
$demo_cat_7_id =td_demo_category::add_category(array(
    'category_name' => 'Biology',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_7',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_8_id =td_demo_category::add_category(array(
    'category_name' => 'Curiosity',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => 'td_pic_8',
    'boxed_layout' => 'hide', //leave empty for boxed layout, write "hide" for full layout
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));
$demo_cat_9_id =td_demo_category::add_category(array(
    'category_name' => 'Animal Rights',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
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
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/homepage.txt',
    'template' => 'default',   // the page template full file name with .php, for default no extension needed
    'td_layout' => '',
    'homepage' => true
));


/*  ----------------------------------------------------------------------------
    menu
*/

//main menu

//add the homepage to the menu
td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'page_id' => $td_homepage_id,
    'parent_id' => ''
));

// mega menu multiple subcateg
td_demo_menus::add_mega_menu(array(
    'title' => 'Animals',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Biology',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Curiosity',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_8_id
));

td_demo_menus::add_category(array(
    'title' => 'Animal Rights',
    'add_to_menu_id' => $td_demo_header_menu_id,
    'category_id' => $demo_cat_9_id
));


//custom menu

// category
td_demo_menus::add_category(array(
    'title' => 'Animals',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_1_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Biology',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_7_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Curiosity',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_8_id
));

// category
td_demo_menus::add_category(array(
    'title' => 'Animal Rights',
    'add_to_menu_id' => $td_demo_custom_menu_id,
    'category_id' => $demo_cat_9_id
));


//custom menu 2
//link
td_demo_menus::add_link(array(
    'title' => 'About',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//link
td_demo_menus::add_link(array(
    'title' => 'Privacy Policy',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//link
td_demo_menus::add_link(array(
    'title' => 'Disclaimer',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));

//link
td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));


/*  ---------------------------------------------------------------------------
    posts
*/
// posts in featured category

/* ------------------------------------------------------------------ */
// posts in multiple categories

td_demo_content::add_post(array(
    'title' => 'Denmark Is Building a $12 Million Conservation Park for Brown Bears',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Pumas, Panthers & Cougars: Facts About America’s Big Cats',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'How Do Emperor Penguin Dads Stop Their Eggs From Freezing?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'Watch an Elephant Named Kelly Scoop Cereal Into Her Mouth in the Best Study',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Iguana with Back Fangs Spotted for the First Time in Two Decades',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Adorable, Remorseless Killing Machine Is World’s Deadliest Cat',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id,$demo_cat_3_id,$demo_cat_4_id,$demo_cat_5_id,$demo_cat_6_id,$demo_cat_7_id,$demo_cat_8_id,$demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_6'
));

/* ------------------------------------------------------------------ */
// posts in one category
/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Fox Hunting Has Been Getting Out of Control this Past Decade',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Marine Mammals Have Their Rights too, Scientists Say',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_3'
));

td_demo_content::add_post(array(
    'title' => 'One of the World’s Rarest Tigers Was Just Killed by a Pig Trap',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Thousands of Female Koalas Face this Enormous Problem in the Wild',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_9_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Black Eagles Are Capable of Spotting Small Fish with Great Ease',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Invisible Stew of Plastic Pollution Found in Great Coral Reef',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'How Do Wild Cats Remember Where They Buried Their Prey?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'When You’re an Alpha Chimp, Life Isn’t a Barrel of Monkeys',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_8_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Scientists Try to Save African Leopards from Extinction',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'How Alligators Survive in a Frozen Pond: They Snorkel',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Pandas Thrive on Bamboo, Thanks to Belly Bacteria',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'New Fukushima Worry: Radioactive Wild Boars',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_7_id),
    'featured_image_td_id' => 'td_pic_3'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Reindeer Population Needs Help, New Conservation Group Says',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_4'
));

td_demo_content::add_post(array(
    'title' => 'Dream-Like Video Captures Great Whale Gliding Beneath Antarctica',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_5'
));

td_demo_content::add_post(array(
    'title' => 'Melting Sea Ice Keeps Hungry Polar Bears on Land Even More',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Dozens of Seals Turn Up on Icy Streets in Canada. Here’s Why',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_6_id),
    'featured_image_td_id' => 'td_pic_7'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Stingrays Are Capable of Surfacing Several Feet in The Air in Mating Ritual',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Young Turtle Spotted Off Australia’s Coast. Will it Survive Its First Year?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_9'
));

td_demo_content::add_post(array(
    'title' => 'Discover How Did a Seal Manage to Smack a Kayaker in the Face with an Octopus',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Mysterious Great White Shark Death Solved and the Fisherman is now Convicted',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_5_id),
    'featured_image_td_id' => 'td_pic_11'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'These Ancient Creatures are Much Smarter that We Previously Tought',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Find Out How an Emu and a Donkey Managed to Fall in Love in Carolina',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_1'
));

td_demo_content::add_post(array(
    'title' => 'Elephants Ain’t Bad at Recognizing Faces, but Humans Are Much Better',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_2'
));

td_demo_content::add_post(array(
    'title' => 'Adorable Clip of Tiger Cubs Learning to Wrestle Will Melt Your Heart',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_4_id),
    'featured_image_td_id' => 'td_pic_5'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Hunters May Lure ‘Man-Eating’ Tiger with Calvin Klein’s Obsession',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_6'
));

td_demo_content::add_post(array(
    'title' => 'Habitat Fragmentation Causes Inbreeding in California Cougars',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_7'
));

td_demo_content::add_post(array(
    'title' => 'Painted Wolves Caught on Camera Hunting Baboons for the First Time',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_8'
));

td_demo_content::add_post(array(
    'title' => 'Why Did this Beautiful Tiger Mama Reject the Father of Her Cubs?',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_3_id),
    'featured_image_td_id' => 'td_pic_9'
));

/* ------------------------------------------------------------------ */

td_demo_content::add_post(array(
    'title' => 'Rhino Poachers in South African Reserve Got Killed by Lions Instead',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_10'
));

td_demo_content::add_post(array(
    'title' => 'Surpassing Wilderbeasts, Zebras Hold New Record for Longest Migration',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_11'
));

td_demo_content::add_post(array(
    'title' => 'Honey Badger Takes on a Baboon, and It Doesn’t Go Well for It',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_12'
));

td_demo_content::add_post(array(
    'title' => 'Man Captures Stunning, Rare Video of a Fight Between Two Huge Oryx',
    'file' => TDC_PATH_LEGACY . '/includes/demos/animals_pro/pages/post_default.txt',
    'categories_id_array' => array($demo_cat_2_id),
    'featured_image_td_id' => 'td_pic_1'
));