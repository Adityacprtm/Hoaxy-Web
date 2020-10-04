<?php



/*  ----------------------------------------------------------------------------
	CATEGORIES
*/
$cat_family_id = td_demo_category::add_category(array(
    'category_name' => 'Family',
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

$cat_inspirational_id = td_demo_category::add_category(array(
    'category_name' => 'Inspirational',
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

$cat_life_id = td_demo_category::add_category(array(
    'category_name' => 'Life',
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

$cat_travel_id = td_demo_category::add_category(array(
    'category_name' => 'Travel',
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


/*  ----------------------------------------------------------------------------
	MENUS
*/
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link(array(
    'title' => 'About',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_category(array(
    'title' => 'Life',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_life_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'Family',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_family_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Travel',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_travel_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Inspirational',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_inspirational_id,
    'parent_id' => ''
));


/*  ----------------------------------------------------------------------------
	ATTACHMMENTS
*/

/*  ----------------------------------------------------------------------------
	POSTS
*/
$post_td_post_the_art_of_true_confidence_id = td_demo_content::add_post(array(
    'title' => 'The Art Of True Confidence',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_dealing_with_the_unexpected_id = td_demo_content::add_post(array(
    'title' => 'Dealing With The Unexpected',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_how_i_got_out_of_a_funk_id = td_demo_content::add_post(array(
    'title' => 'I Got Out of a Funk',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_self_improvement_id = td_demo_content::add_post(array(
    'title' => 'Self-Improvement',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_what_is_my_purpose_in_life_id = td_demo_content::add_post(array(
    'title' => 'What Is My Purpose in Life?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_finding_my_calling_id = td_demo_content::add_post(array(
    'title' => 'Finding My Calling',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_learning_new_things_together_id = td_demo_content::add_post(array(
    'title' => 'Learning New Things Together',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_joining_the_5am_club_id = td_demo_content::add_post(array(
    'title' => 'Joining the 5AM Club',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_weekend_mode_relaxing_id = td_demo_content::add_post(array(
    'title' => 'Weekend Mode – Relaxing',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_love_your_imperfections_id = td_demo_content::add_post(array(
    'title' => 'Love Your Imperfections',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_inspirational_id,),
));

$post_td_post_romania_road_trip_id = td_demo_content::add_post(array(
    'title' => 'Romania Road Trip',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_11',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_my_first_trip_to_israel_id = td_demo_content::add_post(array(
    'title' => 'My First Trip To Israel',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_12',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_exploring_havana_id = td_demo_content::add_post(array(
    'title' => 'Exploring Havana',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_13',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_a_california_road_trip_id = td_demo_content::add_post(array(
    'title' => 'A California Road Trip',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_14',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_8_day_new_zealand_road_trip_id = td_demo_content::add_post(array(
    'title' => '8-Day New Zealand Road Trip',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_15',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_my_travels_to_dakhla_id = td_demo_content::add_post(array(
    'title' => 'My Summer Travels to Dakhla',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_16',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_the_best_cafe_in_lisbon_id = td_demo_content::add_post(array(
    'title' => 'The Best Cafe in Lisbon',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_17',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_my_galapagos_islands_trip_id = td_demo_content::add_post(array(
    'title' => 'My Galapagos Islands Trip',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_18',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_journey_through_the_sahara_id = td_demo_content::add_post(array(
    'title' => 'Journey Through the Sahara',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_hope_in_ethiopia_id = td_demo_content::add_post(array(
    'title' => 'Hope In Ethiopia',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_making_room_for_sasha_id = td_demo_content::add_post(array(
    'title' => 'Making Room For Sasha',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_and_then_there_were_5_id = td_demo_content::add_post(array(
    'title' => 'And Then There Were 5',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_packing_for_travel_id = td_demo_content::add_post(array(
    'title' => 'Packing For Travel',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_talking_fatherhood_id = td_demo_content::add_post(array(
    'title' => 'Talking Fatherhood',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_summer_camp_id = td_demo_content::add_post(array(
    'title' => 'Summer Camp',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_really_missing_sleep_id = td_demo_content::add_post(array(
    'title' => 'Really Missing Sleep',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_a_moment_with_franca_id = td_demo_content::add_post(array(
    'title' => 'A Moment with Franca',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_making_family_out_of_friends_id = td_demo_content::add_post(array(
    'title' => 'Making Family Out Of Friends',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_i_am_a_foster_parent_id = td_demo_content::add_post(array(
    'title' => 'I Am A Foster Parent',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_11',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_her_forever_family_id = td_demo_content::add_post(array(
    'title' => 'Her Forever Family',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_12',
    'categories_id_array' => array($cat_family_id,),
));

$post_td_post_its_not_enough_id = td_demo_content::add_post(array(
    'title' => 'It\'s Not Enough',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_13',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_everything_old_is_new_again_id = td_demo_content::add_post(array(
    'title' => 'Everything Old is New Again',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_14',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_so_what_comes_next_id = td_demo_content::add_post(array(
    'title' => 'So, What Comes Next?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_15',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_personal_growth_id = td_demo_content::add_post(array(
    'title' => 'Personal Growth',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_16',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_when_life_changes_id = td_demo_content::add_post(array(
    'title' => 'When Life Changes',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_17',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_good_times_dont_last_forever_id = td_demo_content::add_post(array(
    'title' => 'Good Times Don’t Last Forever',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_18',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_changing_things_up_id = td_demo_content::add_post(array(
    'title' => 'Changing Things Up',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_answering_my_fostering_questions_id = td_demo_content::add_post(array(
    'title' => 'Answering My Fostering Questions',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_post_surgery_id = td_demo_content::add_post(array(
    'title' => 'Post Surgery',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_100_push_ups_id = td_demo_content::add_post(array(
    'title' => '100 Push-ups',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_life_id,),
));


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
$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


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
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );

$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Cloud Template - Classic PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);



/*  ----------------------------------------------------------------------------
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array('facebook' => '#','instagram' => '#','twitter' => '#',));

td_demo_misc::add_ad_image('custom_ad_1', 'td_ad_custom');
