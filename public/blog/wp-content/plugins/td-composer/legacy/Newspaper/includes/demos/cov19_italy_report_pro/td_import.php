<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_coronavirus_pandemic_id = td_demo_category::add_category(array(
	'category_name' => 'Coronavirus',
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

$cat_documentaries_id = td_demo_category::add_category(array(
	'category_name' => 'Documentaries',
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

$cat_education_id = td_demo_category::add_category(array(
	'category_name' => 'Education',
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

$cat_health_id = td_demo_category::add_category(array(
	'category_name' => 'Health',
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

$cat_local_news_id = td_demo_category::add_category(array(
	'category_name' => 'Local news',
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

$cat_news_id = td_demo_category::add_category(array(
	'category_name' => 'News',
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

$cat_stories_id = td_demo_category::add_category(array(
	'category_name' => 'Stories',
	'parent_id' => $cat_news_id,
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

$cat_video_id = td_demo_category::add_category(array(
	'category_name' => 'Video',
	'parent_id' => $cat_news_id,
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
$post_trump_sought_to_buy_vaccine_developer_exclusively_for_us_say_german_officials_id = td_demo_content::add_post(array(
	'title' => 'Trump sought to buy vaccine developer exclusively for US, say German officials',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_politics_id,),
));

$post_us_australian_central_banks_push_more_money_into_markets_id = td_demo_content::add_post(array(
	'title' => 'US, Australian central banks push more money into markets',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_politics_id,),
));

$post_fearing_coronavirus_recession_france_announces_e45_billion_in_business_aid_id = td_demo_content::add_post(array(
	'title' => 'Fearing coronavirus recession, France announces €45 billion in business aid',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_politics_id,),
));

$post_doors_slam_shut_across_borderless_europe_as_coronavirus_spreads_id = td_demo_content::add_post(array(
	'title' => 'Doors slam shut across borderless Europe as coronavirus spreads',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_politics_id,),
));

$post_covid_19_australia_to_ban_all_arrivals_of_non_residents_says_pm_id = td_demo_content::add_post(array(
	'title' => 'COVID-19: Australia to ban all arrivals of non-residents, says PM',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_politics_id,),
));

$post_italy_reports_475_new_coronavirus_deaths_highest_one_day_toll_of_any_nation_id = td_demo_content::add_post(array(
	'title' => 'Italy reports 475 new coronavirus deaths, highest one-day toll of any nation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_politics_id,),
));

$post_a_promising_treatment_for_coronavirus_fails_id = td_demo_content::add_post(array(
	'title' => 'A Promising Treatment for Coronavirus Fails',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_coronavirus_in_india_high_alert_in_telangana_after_8_indonesians_test_positive_for_covid_19_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus in India: High alert in Telangana after 8 Indonesians test positive for Covid-19',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_new_zealand_shuts_border_to_all_foreigners_to_curb_spread_of_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'New Zealand shuts border to all foreigners to curb spread of coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_coronavirus_where_do_we_stand_in_the_race_for_a_vaccine_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: where do we stand in the race for a vaccine?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_the_coronavirus_pandemic_in_five_powerful_charts_id = td_demo_content::add_post(array(
	'title' => 'The coronavirus pandemic in five powerful charts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_covid_19_how_doctors_and_healthcare_systems_are_tackling_coronavirus_worldwide_id = td_demo_content::add_post(array(
	'title' => 'Covid-19: how doctors and healthcare systems are tackling coronavirus worldwide',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_documentaries_id,),
));

$post_virus_confronts_leaders_with_one_of_modern_historys_gravest_challenges_id = td_demo_content::add_post(array(
	'title' => 'Virus confronts leaders with one of modern history\'s gravest challenges',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_coronavirus_gov_inslee_places_30_day_moratorium_on_evictions_as_case_numbers_increase_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: Gov. Inslee places 30-day moratorium on evictions as case numbers increase',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_coronavirus_live_updates_total_us_cases_near_9000_as_death_toll_approaches_150_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus live updates: Total US cases near 9,000 as death toll approaches 150',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_covid_19_trump_proposes_tax_cuts_and_improved_health_insurance_but_millions_are_not_covered_id = td_demo_content::add_post(array(
	'title' => 'Covid-19: Trump proposes tax cuts and improved health insurance, but millions are not covered',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_coronavirus_live_updates_italy_death_toll_nears_3000_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus live updates: Italy death toll nears 3,000',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_coronavirus_travel_restrictions_border_shutdowns_by_country_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: Travel restrictions, border shutdowns by country',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,),
));

$post_heres_a_list_of_games_you_should_play_while_youre_stuck_inside_avoiding_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Here\'s a list of games you should play while you\'re stuck inside avoiding the coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_education_id,),
));

$post_coronavirus_should_you_let_your_children_play_with_other_children_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: Should you let your children play with other children?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_education_id,),
));

$post_pacific_travel_restrictions_for_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Pacific - travel restrictions for coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_education_id,),
));

$post_can_smart_thermometers_track_the_spread_of_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Can Smart Thermometers Track the Spread of the Coronavirus?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_education_id,),
));

$post_why_covid_19_is_worse_than_the_flu_in_one_chart_id = td_demo_content::add_post(array(
	'title' => 'Why Covid-19 is worse than the flu, in one chart',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_education_id,),
));

$post_coronavirus_a_visual_guide_to_the_pandemic_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: A visual guide to the pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_education_id,),
));

$post_video_coronavirus_infection_mild_in_over_half_of_children_infants_at_slightly_more_risk_study_finds_id = td_demo_content::add_post(array(
	'title' => 'VIDEO: Coronavirus Infection Mild In Over Half Of Children',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_video_id,),
));

$post_watch_more_than_110_retailers_have_now_shut_all_their_stores_because_of_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'WATCH: More Than 110 Retailers Have Now Shut All Their Stores Because Of Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_video_id,),
));

$post_elon_musk_says_tesla_willing_to_make_ventilators_for_coronavirus_patients_amid_flap_over_california_plant_id = td_demo_content::add_post(array(
	'title' => 'Elon Musk Says Tesla Willing To Make Ventilators For Coronavirus Patients Amid Flap Over California Plant',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_video_id,),
));

$post_video_how_youtubes_dude_perfect_is_keeping_sports_fans_entertained_id = td_demo_content::add_post(array(
	'title' => 'VIDEO: How YouTube’s Dude Perfect Is Keeping Sports Fans Entertained',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_video_id,),
));

$post_video_a_quick_guide_to_streaming_movies_while_in_quarantine_id = td_demo_content::add_post(array(
	'title' => 'VIDEO: A Quick Guide to Streaming Movies While in Quarantine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_video_id,),
));

$post_watch_10_days_later_what_italians_wish_they_had_known_id = td_demo_content::add_post(array(
	'title' => 'Watch: 10 Days Later: What Italians Wish They Had Known',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_video_id,),
));

$post_coronavirus_latest_most_infections_and_deaths_are_now_outside_china_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus latest: Most infections and deaths are now outside China',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_covid_19_chinas_president_xi_visits_wuhan_amid_confidence_that_virus_is_under_control_id = td_demo_content::add_post(array(
	'title' => 'Covid-19: China’s president Xi visits Wuhan amid confidence that virus is under control',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_list_of_canceled_events_and_closures_in_houston_area_amid_coronavirus_concerns_id = td_demo_content::add_post(array(
	'title' => 'List of canceled events and closures in Houston-area amid coronavirus concerns',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_tension_fear_as_south_africa_steps_up_coronavirus_fight_id = td_demo_content::add_post(array(
	'title' => 'Tension, fear as South Africa steps up coronavirus fight',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_exclusive_amazon_confirms_first_known_coronavirus_case_in_an_american_warehouse_id = td_demo_content::add_post(array(
	'title' => 'Exclusive: Amazon Confirms First Known Coronavirus Case in an American Warehouse',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_covid_19_uk_ramps_up_testing_by_500_as_health_minister_tests_positive_for_virus_id = td_demo_content::add_post(array(
	'title' => 'Covid-19: UK ramps up testing by 500% as health minister tests positive for virus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_local_news_id,),
));

$post_the_healthiest_way_to_sweat_out_a_pandemic_id = td_demo_content::add_post(array(
	'title' => 'The Healthiest Way to Sweat Out a Pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_health_id,),
));

$post_what_to_do_about_a_light_case_of_covid_19_id = td_demo_content::add_post(array(
	'title' => 'What to Do About a Light Case of COVID-19',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_health_id,),
));

$post_ibuprofen_should_not_be_used_for_managing_symptoms_say_doctors_and_scientists_id = td_demo_content::add_post(array(
	'title' => 'Ibuprofen should not be used for managing symptoms, say doctors and scientists',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_health_id,),
));

$post_fighting_the_infodemic_through_accelerated_research_in_emergency_contexts_id = td_demo_content::add_post(array(
	'title' => 'Fighting the infodemic through accelerated research in emergency contexts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_health_id,),
));

$post_associations_of_fat_and_carbohydrate_intake_with_cardiovascular_disease_and_mortality_id = td_demo_content::add_post(array(
	'title' => 'Associations of fat and carbohydrate intake with cardiovascular disease and mortality',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_health_id,),
));

$post_calculating_the_sample_size_required_for_developing_a_clinical_prediction_model_id = td_demo_content::add_post(array(
	'title' => 'Calculating the sample size required for developing a clinical prediction model',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_health_id,),
));

$post_reducing_viral_load_appropriate_protective_equipment_for_doctors_id = td_demo_content::add_post(array(
	'title' => 'Reducing Viral Load: Appropriate protective equipment for doctors',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_stories_id,),
));

$post_las_vegas_casinos_bars_closed_to_slow_coronavirus_pandemic_spread_id = td_demo_content::add_post(array(
	'title' => 'Las Vegas casinos, bars closed to slow coronavirus pandemic spread',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_stories_id,),
));

$post_coronavirus_birthplace_wuhan_reports_zero_new_infections_for_first_time_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus birthplace Wuhan reports zero new infections for first time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_stories_id,),
));

$post_14_coronavirus_myths_busted_by_who_for_better_covid_19_awareness_id = td_demo_content::add_post(array(
	'title' => '14 Coronavirus myths busted by WHO for better Covid-19 awareness',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_stories_id,),
));

$post_football_manager_2020_for_free_how_to_play_game_in_coronavirus_lockdown_id = td_demo_content::add_post(array(
	'title' => 'Football Manager 2020 for free: How to play game in coronavirus lockdown',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_news_id,),
));

$post_indias_poor_testing_rate_may_have_masked_coronavirus_cases_id = td_demo_content::add_post(array(
	'title' => 'India\'s poor testing rate may have masked coronavirus cases',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_stories_id,),
));

$post_turkey_reports_first_2_coronavirus_deaths_amid_jump_in_cases_id = td_demo_content::add_post(array(
	'title' => 'Italy Lombardia reports first 2 coronavirus deaths amid jump in cases',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_stories_id,),
));

$post_coronavirus_which_countries_have_confirmed_cases_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus: Which countries have confirmed cases?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_news_id,),
));

$post_europe_stimulus_fails_to_calm_investors_as_stocks_resume_fall_id = td_demo_content::add_post(array(
	'title' => 'Europe stimulus fails to calm investors as stocks resume fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_news_id,),
));

$post_south_korea_is_reporting_intimate_details_of_covid_19_cases_has_it_helped_id = td_demo_content::add_post(array(
	'title' => 'South Korea is reporting intimate details of COVID-19 cases: has it helped?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_news_id,),
));

$post_covid_19_uk_budget_gives_94_a_week_statutory_sick_pay_to_self_isolators_and_their_carers_id = td_demo_content::add_post(array(
	'title' => 'Covid-19: UK budget gives £94 a week statutory sick pay to self-isolators and their carers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_news_id,),
));

$post_how_does_the_coronavirus_compare_to_the_spanish_flu_id = td_demo_content::add_post(array(
	'title' => 'How does the coronavirus compare to the Spanish flu?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_trapped_at_home_domestic_violence_victims_at_high_risk_in_coronavirus_confinement_id = td_demo_content::add_post(array(
	'title' => 'Trapped at home: Domestic violence victims at high risk in coronavirus confinement',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_top_french_hospital_executive_says_coronavirus_toll_higher_than_official_tally_id = td_demo_content::add_post(array(
	'title' => 'Top French hospital executive says coronavirus toll higher than official tally',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_france_to_support_start_ups_with_e4_billion_plan_amid_coronavirus_crisis_id = td_demo_content::add_post(array(
	'title' => 'France to support start-ups with €4 billion plan amid coronavirus crisis',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_spain_overtakes_chinas_coronavirus_toll_with_3434_deaths_id = td_demo_content::add_post(array(
	'title' => 'Spain overtakes China’s coronavirus toll with 3,434 deaths',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_french_court_releases_malian_singer_traore_but_backs_extradition_in_custody_case_id = td_demo_content::add_post(array(
	'title' => 'French court releases Malian singer Traore, but backs extradition in custody case',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_un_urges_prisoner_releases_to_stem_spread_of_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'UN urges prisoner releases to stem spread of coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_i_make_my_own_masks_at_home_cashiers_brave_the_front_line_in_virus_wracked_france_id = td_demo_content::add_post(array(
	'title' => 'I make my own masks at home: Cashiers brave the front line in virus-wracked France',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_the_race_to_save_jobs_european_governments_step_in_to_pay_wages_id = td_demo_content::add_post(array(
	'title' => 'The race to save jobs: European governments step in to pay wages',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_italy_records_683_coronavirus_deaths_in_a_day_id = td_demo_content::add_post(array(
	'title' => 'Italy records 683 coronavirus deaths in a day',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));

$post_china_to_end_lockdown_of_most_of_coronavirus_hit_hubei_province_id = td_demo_content::add_post(array(
	'title' => 'China To End Lockdown Of Most Of Coronavirus-Hit Hubei Province',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_coronavirus_pandemic_id,$cat_documentaries_id,$cat_education_id,$cat_health_id,$cat_local_news_id,$cat_news_id,$cat_politics_id,$cat_stories_id,$cat_uncategorized_id,$cat_video_id,),
));


/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_homepage_id = td_demo_content::add_page(array(
	'title' => 'Homepage',
	'file' => 'homepage.txt',
	'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link(array(
	'title' => 'Advertisement',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
	'title' => 'Contact Us',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
	'title' => 'Privacy Policy',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'News',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_news_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Coronavirus',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_coronavirus_pandemic_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Videos',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_video_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Health',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_health_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Stories',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_stories_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Local news',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_local_news_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_link(array(
	'title' => 'More',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Documentaries',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_documentaries_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Politics',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_politics_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Education',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_education_id,
	'parent_id' => $menu_item_7_id
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_tag_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Italy Report PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_italy_report_pro_id);


$template_date_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Italy Report PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_italy_report_pro_id);


$template_404_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Italy Report PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

$template_search_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Italy Report PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_italy_report_pro_id);


$template_author_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - Italy Report PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_italy_report_pro_id);


$template_category_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Category Template - Italy Report PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_italy_report_pro_id);


$template_single_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Single Template - Italy Report PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_italy_report_pro_id);


$template_footer_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Footer Template - Italy Report PRO',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_italy_report_pro_id);


$template_header_template_italy_report_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Header Template - Italy Report PRO',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_italy_report_pro_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_italy_report_pro_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_7');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array('facebook' => '#','instagram' => '#','twitter' => '#','youtube' => '#',));

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
