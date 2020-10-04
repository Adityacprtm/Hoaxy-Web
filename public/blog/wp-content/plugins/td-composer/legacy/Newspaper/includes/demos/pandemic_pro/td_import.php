<?php

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_behavior_id = td_demo_category::add_category(array(
	'category_name' => 'Behavior',
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

$cat_coronavirus_id = td_demo_category::add_category(array(
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

$cat_facts_id = td_demo_category::add_category(array(
	'category_name' => 'Facts',
	'parent_id' => $cat_coronavirus_id,
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

$cat_global_id = td_demo_category::add_category(array(
	'category_name' => 'Global',
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

$cat_impact_id = td_demo_category::add_category(array(
	'category_name' => 'Impact',
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

$cat_prevention_id = td_demo_category::add_category(array(
	'category_name' => 'Prevention',
	'parent_id' => $cat_coronavirus_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_research_id = td_demo_category::add_category(array(
	'category_name' => 'Research',
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

$cat_strategy_id = td_demo_category::add_category(array(
	'category_name' => 'Strategy',
	'parent_id' => $cat_coronavirus_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_supplies_id = td_demo_category::add_category(array(
	'category_name' => 'Supplies',
	'parent_id' => $cat_coronavirus_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_treatment_id = td_demo_category::add_category(array(
	'category_name' => 'Treatment',
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

$cat_vaccine_id = td_demo_category::add_category(array(
	'category_name' => 'Vaccine',
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

$post_fine_line_to_balance_economy_and_coronavirus_fight_white_house_official_says_id = td_demo_content::add_post(array(
    'title' => 'Fine Line to Balance Economy and Coronavirus Fight, White House Official Says',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_behavior_id,$cat_facts_id,$cat_global_id,$cat_impact_id,$cat_prevention_id,$cat_research_id,$cat_strategy_id,$cat_supplies_id,$cat_treatment_id,$cat_vaccine_id,),
));

$post_u_s_hospitals_brace_for_big_challenge_an_unprecedented_shortage_id = td_demo_content::add_post(array(
    'title' => 'U.S. Hospitals Brace for Big Challenge - An Unprecedented Shortage',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_behavior_id,$cat_facts_id,$cat_global_id,$cat_impact_id,$cat_prevention_id,$cat_research_id,$cat_strategy_id,$cat_supplies_id,$cat_treatment_id,$cat_vaccine_id,),
));

$post_the_military_can_do_a_lot_to_fight_covid_19_but_leaders_are_holding_it_back_id = td_demo_content::add_post(array(
    'title' => 'The Military Can Do a Lot to Fight COVID-19, But Leaders Are Holding it Back.',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_behavior_id,$cat_facts_id,$cat_global_id,$cat_impact_id,$cat_prevention_id,$cat_research_id,$cat_strategy_id,$cat_supplies_id,$cat_treatment_id,$cat_vaccine_id,),
));

$post_prince_charles_tests_positive_for_coronavirus_sources_say_id = td_demo_content::add_post(array(
    'title' => 'Prince Charles Tests Positive for Coronavirus, Sources Say',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_behavior_id,$cat_facts_id,$cat_global_id,$cat_impact_id,$cat_prevention_id,$cat_research_id,$cat_strategy_id,$cat_supplies_id,$cat_treatment_id,$cat_vaccine_id,),
));

$post_td_post_clinical_research_fails_to_provide_a_complete_covid19_pattern_id = td_demo_content::add_post(array(
	'title' => 'Clinical Research Fails to Provide a Complete COVID19 Pattern',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_survey_reveals_significant_need_for_increased_consumer_education_id = td_demo_content::add_post(array(
	'title' => 'Survey Reveals Significant Need for Increased Consumer Education',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_there_arent_enough_ventilators_to_cope_with_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'There Aren\'t Enough Ventilators to Cope With the Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_anxiety_research_your_nose_itches_allergies_flu_or_covid19_id = td_demo_content::add_post(array(
	'title' => 'Anxiety Research: Your Nose Itches: Allergies, Flu or COVID19?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_what_people_know_about_the_purpose_of_using_hand_sanitizers_id = td_demo_content::add_post(array(
	'title' => 'What People Know About the Purpose of Using Hand Sanitizers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_these_lab_animals_will_help_discover_new_cure_for_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'These Lab Animals Will Help Discover New Cure for Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_research_id,),
));

$post_td_post_dont_trust_websites_and_memes_that_promise_coronavirus_cures_id = td_demo_content::add_post(array(
	'title' => 'Don\'t Trust Websites and Memes that Promise Coronavirus Cures',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_concern_is_ibuprofen_really_risky_for_coronavirus_patients_id = td_demo_content::add_post(array(
	'title' => 'Concern: Is Ibuprofen Really Risky for Coronavirus Patients?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_despite_all_hopes_a_promising_treatment_for_coronavirus_fails_id = td_demo_content::add_post(array(
	'title' => 'Despite All Hopes, a Promising Treatment for Coronavirus Fails',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_existing_drug_should_people_take_advil_as_treatment_for_covid19_id = td_demo_content::add_post(array(
	'title' => 'Existing Drug: Should People Take Advil as Treatment for COVID19?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_south_koreas_coronavirus_lessons_quick_tests_and_monitoring_id = td_demo_content::add_post(array(
	'title' => 'South Korea\'s Coronavirus Lessons: Quick Tests and Monitoring',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_japanese_flu_drug_clearly_effective_in_treating_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Japanese Flu Drug \'Clearly Effective\' in Treating Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_treatment_id,),
));

$post_td_post_officials_say_that_a_coronavirus_vaccine_could_take_two_years_id = td_demo_content::add_post(array(
	'title' => 'Officials Say that a Coronavirus Vaccine Could Take Two Years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_u_s_paid_german_company_for_coronavirus_vaccine_research_id = td_demo_content::add_post(array(
	'title' => 'U.S. Paid German Company for Coronavirus Vaccine Research',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_european_medical_agency_working_on_a_vaccine_for_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'European Medical Agency Working on a Vaccine for Coronavirus?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_pharma_companies_may_pose_an_obstacle_to_vaccine_development_id = td_demo_content::add_post(array(
	'title' => 'Pharma Companies May Pose an Obstacle to Vaccine Development',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_a_call_to_arms_under_attack_pro_vaccine_doctors_fight_back_id = td_demo_content::add_post(array(
	'title' => 'A Call to Arms: Under Attack, Pro-Vaccine Doctors Fight Back',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_trial_of_coronavirus_vaccine_made_by_moderna_begins_in_seattle_id = td_demo_content::add_post(array(
	'title' => 'Trial of Coronavirus Vaccine Made by Moderna Begins in Seattle',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_vaccine_id,),
));

$post_td_post_w_h_o_says_that_the_coronavirus_has_become_a_pandemic_id = td_demo_content::add_post(array(
	'title' => 'W.H.O. Says that the Coronavirus Has Become a Pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_india_escapes_a_coronavirus_crisis_so_far_its_working_id = td_demo_content::add_post(array(
	'title' => 'India Escapes a Coronavirus Crisis: So Far, It\'s Working',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_coronavirus_is_causing_chaos_for_travel_influencers_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus Is Causing Chaos for Travel Influencers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_in_afghanistan_coronavirus_complicates_war_and_peace_id = td_demo_content::add_post(array(
	'title' => 'In Afghanistan, Coronavirus Complicates War and Peace',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_the_deceptively_simple_number_sparking_coronavirus_fears_id = td_demo_content::add_post(array(
	'title' => 'The Deceptively Simple Number Sparking Coronavirus Fears',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_as_pandemic_spreads_china_reports_zero_new_infections_id = td_demo_content::add_post(array(
	'title' => 'As Pandemic Spreads, China Reports Zero New Infections',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_companies_are_putting_profits_ahead_of_public_health_id = td_demo_content::add_post(array(
	'title' => 'Companies Are Putting Profits Ahead of Public Health',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_witnessing_the_birth_of_the_new_coronavirus_economy_id = td_demo_content::add_post(array(
	'title' => 'Witnessing the Birth of the New Coronavirus Economy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_travel_restrictions_and_border_shutdowns_by_country_id = td_demo_content::add_post(array(
	'title' => 'Travel Restrictions And Border Shutdowns by Country',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_more_wild_market_swings_ahead_as_coronavirus_spreads_id = td_demo_content::add_post(array(
	'title' => 'More Wild Market Swings Ahead as Coronavirus Spreads',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_the_gig_economy_has_never_been_tested_by_a_pandemic_id = td_demo_content::add_post(array(
	'title' => 'The Gig Economy Has Never Been Tested by a Pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_how_to_think_and_act_in_the_plummeting_stock_market_id = td_demo_content::add_post(array(
	'title' => 'How to Think and Act in the Plummeting Stock Market',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_impact_id,),
));

$post_td_post_behavioral_protests_coronavirus_and_a_baby_on_the_way_id = td_demo_content::add_post(array(
	'title' => 'Behavioral Protests, Coronavirus and a Baby on the Way',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_the_coronavirus_exposes_educations_digital_generation_gap_id = td_demo_content::add_post(array(
	'title' => 'The Coronavirus Exposes Education\'s Digital Generation Gap',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_quarantines_spark_confusion_and_worries_about_precedent_id = td_demo_content::add_post(array(
	'title' => 'Quarantines Spark Confusion and Worries About Precedent',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_know_the_simptoms_what_will_you_do_if_you_start_coughing_id = td_demo_content::add_post(array(
	'title' => 'Know the Simptoms: What Will You Do If You Start Coughing?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_the_dos_and_donts_of_the_social_distancing_behavior_id = td_demo_content::add_post(array(
	'title' => 'The Dos and Donts of the \'Social Distancing\' Behavior',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_the_healthiest_way_to_behave_in_this_pandemic_situation_id = td_demo_content::add_post(array(
	'title' => 'The Healthiest Way to Behave in this Pandemic Situation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_behavior_id,),
));

$post_td_post_officials_insist_there_is_plenty_of_food_in_the_country_id = td_demo_content::add_post(array(
	'title' => 'Officials Insist: There Is Plenty of Food in the Country',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_chinese_stores_still_short_on_supplies_from_virus_shutdown_id = td_demo_content::add_post(array(
	'title' => 'Chinese Stores Still Short on Supplies from Virus Shutdown',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_limit_paracetamol_sales_as_hoarding_threatens_availability_id = td_demo_content::add_post(array(
	'title' => 'Limit Paracetamol Sales as Hoarding Threatens Availability',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_new_yorks_food_distribution_networks_brace_for_a_threat_id = td_demo_content::add_post(array(
	'title' => 'New York\'s Food Distribution Networks Brace for a Threat',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_panicked_shoppers_empty_shelves_as_coronavirus_anxiety_rises_id = td_demo_content::add_post(array(
	'title' => 'Panicked Shoppers Empty Shelves as Coronavirus Anxiety Rises',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_how_you_should_prepare_food_stocks_before_the_pandemic_id = td_demo_content::add_post(array(
	'title' => 'How You Should Prepare Food Stocks Before the Pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_supplies_id,),
));

$post_td_post_who_qualifies_for_paid_leave_under_the_coronavirus_law_id = td_demo_content::add_post(array(
	'title' => 'Who Qualifies for Paid Leave Under the Coronavirus Law',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_how_to_help_workers_hurt_by_the_pandemic_give_but_safely_id = td_demo_content::add_post(array(
	'title' => 'How to Help Workers Hurt by the Pandemic: Give, but Safely',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_all_sport_contests_are_canceled_over_coronavirus_concerns_id = td_demo_content::add_post(array(
	'title' => 'All Sport Contests Are Canceled Over Coronavirus Concerns',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_what_you_can_do_right_now_to_combat_the_new_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'What You Can Do Right Now to Combat the New Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_some_countries_are_better_armored_for_epidemics_than_others_id = td_demo_content::add_post(array(
	'title' => 'Some Countries Are Better Armored for Epidemics Than Others',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_10_days_later_what_affected_countries_wish_they_had_known_id = td_demo_content::add_post(array(
	'title' => '10 Days Later: What Affected Countries Wish They Had Known',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_strategy_id,),
));

$post_td_post_coronavirus_symptoms_what_are_they_and_should_i_see_a_doctor_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus Symptoms: What Are They and Should I See a Doctor?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_can_authorities_really_track_the_spread_of_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Can Authorities Really Track the Spread of the Coronavirus?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_despite_all_prevention_you_are_likely_to_get_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Despite All Prevention, You Are Likely to Get the Coronavirus',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_here_is_why_you_should_be_avoiding_crowds_because_of_covid19_id = td_demo_content::add_post(array(
	'title' => 'Here is Why You Should Be Avoiding Crowds because of COVID19',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_personal_hygiene_for_prevention_deep_clean_then_clean_again_id = td_demo_content::add_post(array(
	'title' => 'Personal Hygiene for Prevention: Deep Clean, Then Clean Again',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_find_out_how_you_can_help_break_the_chain_of_transmission_id = td_demo_content::add_post(array(
	'title' => 'Find Out How You Can Help Break the Chain of Transmission',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_prevention_id,),
));

$post_td_post_the_coronavirus_epidemic_might_be_much_worse_than_we_thought_id = td_demo_content::add_post(array(
	'title' => 'The Coronavirus Epidemic Might Be Much Worse Than We Thought',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_find_out_how_many_confirmed_cases_are_in_your_area_right_now_id = td_demo_content::add_post(array(
	'title' => 'Find Out How Many Confirmed Cases Are in Your Area Right Now?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_the_coronavirus_hospital_crisis_and_what_to_do_to_avoid_it_id = td_demo_content::add_post(array(
	'title' => 'The Coronavirus Hospital Crisis and What to Do to Avoid It',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_your_questions_about_life_under_coronavirus_answered_here_id = td_demo_content::add_post(array(
	'title' => 'Your Questions About Life Under Coronavirus Answered Here',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_all_that_you_need_to_know_about_the_coronavirus_outbreak_id = td_demo_content::add_post(array(
	'title' => 'All that You Need to Know About the Coronavirus Outbreak',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_which_country_has_flattened_the_curve_for_the_coronavirus_id = td_demo_content::add_post(array(
	'title' => 'Which Country Has Flattened the Curve for the Coronavirus?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_facts_id,),
));


/*  ----------------------------------------------------------------------------
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/

$template_header_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Pandemic PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_pandemic_pro_id);


$template_footer_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template - Pandemic PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_pandemic_pro_id);


$template_tag_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template - Pandemic PRO',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_pandemic_pro_id);


$template_date_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template - Pandemic PRO',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_pandemic_pro_id);


$template_author_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Pandemic PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_pandemic_pro_id);


$template_404_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template - Pandemic PRO',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_pandemic_pro_id);


$template_single_post_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Pandemic PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_pandemic_pro_id);


$template_category_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Pandemic PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_pandemic_pro_id);


$template_search_template_pandemic_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template - Pandemic PRO',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_pandemic_pro_id);


/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
	'title' => 'Home',
	'file' => 'home.txt',
	'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Coronavirus',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_coronavirus_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Impact',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_impact_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Treatment',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_treatment_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Global',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_global_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Vaccine',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_vaccine_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Research',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_research_id,
	'parent_id' => ''
));



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_4');

td_demo_misc::update_background_login('td_pic_9');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
