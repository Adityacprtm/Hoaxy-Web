<?php


/*  ----------------------------------------------------------------------------
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');



/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);

$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);

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

$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Cloud Template - Video News Pro',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_articles_id = td_demo_category::add_category(array(
    'category_name' => 'Articles',
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

$cat_common_questions_id = td_demo_category::add_category(array(
    'category_name' => 'Common Questions',
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

$cat_health_id = td_demo_category::add_category(array(
    'category_name' => 'Health',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_latest_updates_id = td_demo_category::add_category(array(
    'category_name' => 'Latest Updates',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_life_id = td_demo_category::add_category(array(
    'category_name' => 'Life',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_money_id = td_demo_category::add_category(array(
    'category_name' => 'Money',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_politics_id = td_demo_category::add_category(array(
    'category_name' => 'Politics',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_staying_in_id = td_demo_category::add_category(array(
    'category_name' => 'Staying In',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

$cat_travel_id = td_demo_category::add_category(array(
    'category_name' => 'Travel',
    'parent_id' => $cat_common_questions_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
    'category_cloud_template' => 'tdb_template_' . $template_category_common_questions_template_id,
));

/*  ----------------------------------------------------------------------------
	ATTACHMMENTS
*/

/*  ----------------------------------------------------------------------------
	POSTS
*/
$post_td_post_how_is_this_going_to_affect_the_2020_election_id = td_demo_content::add_post(array(
    'title' => 'How is this going to affect the 2020 election?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_ive_seen_movies_about_quarantines_can_they_do_that_id = td_demo_content::add_post(array(
    'title' => 'I’ve seen movies about quarantines. Can they do that?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_has_anyone_in_the_government_gotten_sick_id = td_demo_content::add_post(array(
    'title' => 'Has anyone in the government gotten sick?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_is_there_a_country_thats_really_handled_this_well_id = td_demo_content::add_post(array(
    'title' => 'Is there a country that’s really handled this well?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_why_is_every_country_responding_so_differently_id = td_demo_content::add_post(array(
    'title' => 'Why is every country responding so differently?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_what_about_travel_insurance_id = td_demo_content::add_post(array(
    'title' => 'What about travel insurance?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_can_i_still_travel_id = td_demo_content::add_post(array(
    'title' => 'Can I still travel?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_what_about_my_summer_vacation_should_i_cancel_id = td_demo_content::add_post(array(
    'title' => 'What about my summer vacation?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_i_cant_get_my_airline_on_the_phone_id = td_demo_content::add_post(array(
    'title' => 'I can’t get my airline on the phone.',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_if_i_cancel_my_flight_will_i_get_my_money_back_id = td_demo_content::add_post(array(
    'title' => 'My flight got cancelled, refund?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_my_plans_got_derailed_can_i_get_a_refund_id = td_demo_content::add_post(array(
    'title' => 'My plans got derailed. What do I do?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_should_i_go_to_the_supermarket_id = td_demo_content::add_post(array(
    'title' => 'Should I go to the supermarket?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_should_i_get_on_the_subway_id = td_demo_content::add_post(array(
    'title' => 'Should I get on the subway?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_can_i_go_to_the_park_id = td_demo_content::add_post(array(
    'title' => 'Can I go to the park?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_what_can_i_tell_my_kids_id = td_demo_content::add_post(array(
    'title' => 'What can I tell my kids?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_do_i_stock_up_on_groceries_id = td_demo_content::add_post(array(
    'title' => 'Do I stock up on groceries?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_im_stuck_inside_help_id = td_demo_content::add_post(array(
    'title' => 'I’m stuck inside. Help?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_life_id,),
));

$post_td_post_if_a_family_member_gets_sick_id = td_demo_content::add_post(array(
    'title' => 'If a family member gets sick?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_is_it_different_from_the_flu_id = td_demo_content::add_post(array(
    'title' => 'Is it different from the flu?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_should_i_wear_a_mask_id = td_demo_content::add_post(array(
    'title' => 'Should I wear a mask?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_is_there_a_vaccine_yet_id = td_demo_content::add_post(array(
    'title' => 'Is there a vaccine yet?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_how_do_i_get_tested_id = td_demo_content::add_post(array(
    'title' => 'How do I get tested?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_what_if_i_feel_sick_id = td_demo_content::add_post(array(
    'title' => 'What if I feel sick?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_health_id,),
));

$post_td_post_im_a_doctor_in_britain_were_heading_into_the_abyss_id = td_demo_content::add_post(array(
    'title' => 'I’m a doctor in Britain. We’re heading into the Abyss',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_a_new_york_doctors_coronavirus_warning_the_sky_is_falling_id = td_demo_content::add_post(array(
    'title' => 'A New York doctor’s Coronavirus warning: the sky is falling',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_these_places_could_run_out_of_hospital_beds_as_virus_spreads_id = td_demo_content::add_post(array(
    'title' => 'These places could run out of hospital beds as virus spreads',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_from_jerry_falwell_jr_to_dr_drew_5_coronavirus_doubters_id = td_demo_content::add_post(array(
    'title' => 'From Jerry Falwell Jr. to Dr. Drew: 5 Coronavirus doubters',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_which_country_has_flattened_the_curve_for_the_coronavirus_id = td_demo_content::add_post(array(
    'title' => 'Which country has flattened the curve for the Coronavirus?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_easy_recipes_to_cook_while_youre_self_quarantined_id = td_demo_content::add_post(array(
    'title' => 'Easy recipes to cook while you’re self-quarantined',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_articles_id,),
));

$post_td_post_coronavirus_spreads_to_sub_saharan_africa_id = td_demo_content::add_post(array(
    'title' => 'Coronavirus spreads to sub-Saharan Africa',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_td_post_australia_joins_list_of_nations_to_ban_all_visitors_id = td_demo_content::add_post(array(
    'title' => 'Australia joins list of nations to ban all visitors',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_td_post_crisis_deepens_rift_between_e_u_and_serbia_id = td_demo_content::add_post(array(
    'title' => 'Crisis deepens rift between E.U. and Serbia',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_td_post_queen_elizabeth_heads_to_country_home_id = td_demo_content::add_post(array(
    'title' => 'Queen Elizabeth heads to country home',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_td_post_many_hospitalized_in_the_u_s_are_younger_adults_id = td_demo_content::add_post(array(
    'title' => 'Many infected in the U.S. are young adults',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_td_post_china_reports_zero_new_infections_id = td_demo_content::add_post(array(
    'title' => 'China Reports Zero New Infections',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_latest_updates_id,),
));

$post_can_i_get_my_pet_sick_id = td_demo_content::add_post(array(
    'title' => 'Can I get my pet sick?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_can_i_still_get_mail_id = td_demo_content::add_post(array(
    'title' => 'Can I still get mail?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_can_i_have_friends_over_id = td_demo_content::add_post(array(
    'title' => 'Can I have friends over?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_how_can_i_exercise_if_im_cooped_up_all_day_id = td_demo_content::add_post(array(
    'title' => 'How can I exercise if I’m cooped up all day?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_is_it_ethical_to_order_delivery_in_a_pandemic_id = td_demo_content::add_post(array(
    'title' => 'Is it ethical to order delivery in a pandemic?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_what_does_stay_at_home_mean_id = td_demo_content::add_post(array(
    'title' => 'What does ‘stay at home’ mean?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_staying_in_id,),
));

$post_what_should_i_do_with_my_401k_id = td_demo_content::add_post(array(
    'title' => 'What should I do with my 401(k)?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_money_id,),
));

$post_should_i_refinance_my_mortgage_id = td_demo_content::add_post(array(
    'title' => 'Should I refinance my mortgage?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_money_id,),
));

$post_will_i_be_paid_if_im_told_to_stay_home_id = td_demo_content::add_post(array(
    'title' => 'Will I be paid if I’m told to stay home?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_money_id,),
));

$post_my_taxes_are_due_in_april_what_do_i_do_id = td_demo_content::add_post(array(
    'title' => 'My taxes are due in April. What do I do?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_money_id,),
));

$post_should_i_be_putting_my_money_in_a_mattress_id = td_demo_content::add_post(array(
    'title' => 'Should I be putting my money in a mattress?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_money_id,),
));

$post_help_me_understand_the_economic_fallout_id = td_demo_content::add_post(array(
    'title' => 'Help me understand the economic fallout.',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_money_id,),
));


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
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_home_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_page(array(
    'title' => 'Statistics',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_statistics_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Latest Updates',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_latest_updates_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Articles',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_articles_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_page(array(
    'title' => 'Common Questions',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_common_questions_id,
    'parent_id' => ''
));



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
