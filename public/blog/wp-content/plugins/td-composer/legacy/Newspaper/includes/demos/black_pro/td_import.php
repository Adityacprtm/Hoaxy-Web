<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_entertainment_id = td_demo_category::add_category(array(
	'category_name' => 'Entertainment',
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

$cat_finance_id = td_demo_category::add_category(array(
	'category_name' => 'Finance',
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

$cat_music_id = td_demo_category::add_category(array(
	'category_name' => 'Music',
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

$cat_politics_id = td_demo_category::add_category(array(
	'category_name' => 'Politics',
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

$cat_tech_id = td_demo_category::add_category(array(
	'category_name' => 'Tech',
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
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/
$post_td_post_drew_banga_wants_to_spark_the_bay_areas_rap_resurgence_id = td_demo_content::add_post(array(
	'title' => 'Drew Banga wants to spark the Bay Area\'s rap resurgence',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_how_omni_accidentally_became_the_best_post_punk_band_in_america_id = td_demo_content::add_post(array(
	'title' => 'How Omni accidentally became the best post-punk band in America',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_exploring_the_origins_of_punk_across_america_with_kid_karate_and_bushmills_id = td_demo_content::add_post(array(
	'title' => 'Exploring the origins of punk across America with Kid Karate and Bushmills',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_featured_id,$cat_music_id,),
));

$post_td_post_noel_gallagher_says_liams_tweets_are_the_reason_oasis_wont_reunite_id = td_demo_content::add_post(array(
	'title' => 'Noel Gallagher says Liam\'s tweets are the reason Oasis won\'t reunite',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_the_2020_grammy_nominations_are_really_trying_to_be_relevant_id = td_demo_content::add_post(array(
	'title' => 'The 2020 grammy nominations are really trying to be relevant',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_billboard_wants_artists_to_stop_gaming_the_charts_with_album_merch_bundles_id = td_demo_content::add_post(array(
	'title' => 'Billboard wants artists to stop gaming the charts with album-merch bundles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_new_westworld_trailer_introduces_us_to_another_dystopian_tech_company_id = td_demo_content::add_post(array(
	'title' => 'New \'Westworld\' trailer introduces us to another dystopian tech company',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_whats_the_point_of_charlies_angels_without_sam_rockwell_dancing_id = td_demo_content::add_post(array(
	'title' => 'What\'s the point of \'Charlie\'s Angels\' without Sam Rockwell dancing?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_entertainment_id,$cat_featured_id,),
));

$post_td_post_these_striking_photos_capture_the_future_of_human_flight_id = td_demo_content::add_post(array(
	'title' => 'These striking photos capture the future of human flight',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_entertainment_id,$cat_featured_id,),
));

$post_td_post_years_later_heathers_is_still_the_best_dark_comedy_about_high_school_hell_id = td_demo_content::add_post(array(
	'title' => '\'Heathers\' is still the best dark comedy about high school hell',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_will_ferrells_snl_short_is_the_most_depressing_party_song_ever_id = td_demo_content::add_post(array(
	'title' => 'Will Ferrell\'s \'SNL\' short Is the most depressing party song ever',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_the_future_is_now_what_blade_runner_got_right_and_wrong_about_2019_id = td_demo_content::add_post(array(
	'title' => 'What \'Blade Runner\' got right and wrong about 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_china_will_raise_a_record_6_billion_through_a_bond_sale_that_saw_big_demand_id = td_demo_content::add_post(array(
	'title' => 'China will raise a record $6 billion through a bond sale that saw big demand',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_this_is_how_insurance_is_changing_for_gig_workers_and_freelancers_id = td_demo_content::add_post(array(
	'title' => 'This is how insurance is changing for gig workers and freelancers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_trump_could_hit_france_with_more_tariffs_in_battle_over_taxes_on_big_tech_id = td_demo_content::add_post(array(
	'title' => 'Trump could hit France with more tariffs in battle over taxes on big tech',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_platform_robinhood_withdraws_its_application_to_become_an_official_bank_id = td_demo_content::add_post(array(
	'title' => 'Platform Robinhood withdraws its application to become an official bank',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_international_money_transfers_hit_613_billion_this_year_id = td_demo_content::add_post(array(
	'title' => 'International money transfers hit $613 billion this year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_the_amex_business_platinum_vs_the_amex_business_gold_how_they_compare_id = td_demo_content::add_post(array(
	'title' => 'The Amex Business Platinum vs. the Amex Business Gold: How they compare',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_finance_id,),
));

$post_td_post_teslas_cybertruck_fiasco_cost_elon_musk_768_million_in_a_single_day_id = td_demo_content::add_post(array(
	'title' => 'Tesla\'s Cybertruck fiasco cost Elon Musk $768 million in a single day',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_featured_id,$cat_life_id,),
));

$post_td_post_the_youtuber_who_has_become_one_of_gen_zs_most_beloved_celebrities_id = td_demo_content::add_post(array(
	'title' => 'The YouTuber who has become one of Gen Z\'s most beloved celebrities',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_26_last_minute_holiday_gifts_that_are_still_thoughtful_and_unique_id = td_demo_content::add_post(array(
	'title' => '26 last-minute holiday gifts that are still thoughtful and unique',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_practicing_gratitude_regularly_can_make_you_less_stressed_and_sleep_better_id = td_demo_content::add_post(array(
	'title' => 'Practicing gratitude regularly can make you less stressed and sleep better',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_8_things_millennials_wish_you_would_just_stop_getting_them_for_the_holidays_id = td_demo_content::add_post(array(
	'title' => '8 things millennials wish you would just stop getting them for the holidays',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_substituting_follow_your_passion_with_find_your_purpose_id = td_demo_content::add_post(array(
	'title' => 'Substituting \'follow your passion\' with \'find your purpose\'',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_mike_pence_made_a_surprise_trip_to_iraq_to_reassure_kurdish_allies_id = td_demo_content::add_post(array(
	'title' => 'Mike Pence made a surprise trip to Iraq to reassure Kurdish allies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_what_uk_political_parties_are_promising_in_the_2019_general_election_id = td_demo_content::add_post(array(
	'title' => 'What UK political parties are promising in the 2019 general election',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_otto_warmbiers_parents_want_north_korea_to_suffer_for_their_sons_death_id = td_demo_content::add_post(array(
	'title' => 'Otto Warmbier\'s parents want North Korea to suffer for their son\'s death',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_could_a_youthquake_cause_boris_johnson_to_lose_the_general_election_id = td_demo_content::add_post(array(
	'title' => 'Could a \'youthquake\' cause Boris Johnson to lose the general election?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_people_are_driving_through_flames_to_escape_this_california_wildfire_id = td_demo_content::add_post(array(
	'title' => 'People are driving through flames to escape this California wildfire',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_fired_navy_official_writes_op_ed_about_trumps_meddling_in_navy_seal_case_id = td_demo_content::add_post(array(
	'title' => 'Fired Navy official writes op-ed about Trump\'s meddling in Navy SEAL case',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_watch_this_ultra_hypnotic_supercomputer_simulation_of_galaxies_feasting_id = td_demo_content::add_post(array(
	'title' => 'Watch this ultra-hypnotic supercomputer simulation of galaxies feasting',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_lights_that_warn_planes_of_obstacles_were_exposed_to_open_internet_id = td_demo_content::add_post(array(
	'title' => 'Lights that warn planes of obstacles were exposed to Open Internet',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_artists_used_deepfake_tech_to_tell_alternate_moon_landing_history_id = td_demo_content::add_post(array(
	'title' => 'Artists used deepfake tech to tell alternate moon landing history',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_elon_says_250000_people_have_already_preordered_teslas_new_cybertruck_id = td_demo_content::add_post(array(
	'title' => 'Elon says 250,000 people have already preordered Tesla\'s new Cybertruck',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_apple_may_be_making_major_changes_to_some_of_its_iphone_sizes_next_year_id = td_demo_content::add_post(array(
	'title' => 'Apple may be making major changes to some of its iPhone sizes next year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_smart_cctv_networks_are_driving_an_ai_powered_apartheid_in_south_africa_id = td_demo_content::add_post(array(
	'title' => 'Smart CCTV networks are driving an AI-powered apartheid in South Africa',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_tech_id,),
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


$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_header_template_global_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Global',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_global_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_header_template_global_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Global',
    'file' => 'header_global_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_global_id);


$template_header_template_overlay_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Overlay',
    'file' => 'header_overlay_cloud_template.txt',
    'template_type' => 'header',
));


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


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
	'title' => 'Tech',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_tech_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Politics',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_politics_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Entertainment',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_entertainment_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Finance',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_finance_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Music',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_music_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Life',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_life_id,
	'parent_id' => ''
));


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

td_demo_misc::add_social_buttons(array());
