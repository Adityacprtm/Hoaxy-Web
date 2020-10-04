<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_club_id = td_demo_category::add_category(array(
	'category_name' => 'Club',
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

$cat_courses_id = td_demo_category::add_category(array(
	'category_name' => 'Courses',
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

$cat_diving_id = td_demo_category::add_category(array(
	'category_name' => 'Diving',
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

$cat_environment_id = td_demo_category::add_category(array(
	'category_name' => 'Environment',
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

$cat_events_id = td_demo_category::add_category(array(
	'category_name' => 'Events',
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

$cat_locations_id = td_demo_category::add_category(array(
	'category_name' => 'Locations',
	'parent_id' => $cat_diving_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_photos_id = td_demo_category::add_category(array(
	'category_name' => 'Photos',
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

$cat_safety_id = td_demo_category::add_category(array(
	'category_name' => 'Safety',
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

$cat_sealife_id = td_demo_category::add_category(array(
	'category_name' => 'Sealife',
	'parent_id' => $cat_diving_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_snorkeling_id = td_demo_category::add_category(array(
	'category_name' => 'Snorkeling',
	'parent_id' => $cat_diving_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_training_id = td_demo_category::add_category(array(
	'category_name' => 'Training',
	'parent_id' => $cat_diving_id,
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

$post_the_best_places_for_scuba_diving_id = td_demo_content::add_post(array(
    'title' => 'The Best Places for Scuba Diving',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_club_id,$cat_courses_id,$cat_environment_id,$cat_events_id,$cat_locations_id,$cat_photos_id,$cat_safety_id,$cat_sealife_id,$cat_snorkeling_id,$cat_training_id,),
));

$post_the_worlds_best_places_for_freediving_id = td_demo_content::add_post(array(
    'title' => 'The World\'s Best Places for Freediving',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_club_id,$cat_courses_id,$cat_environment_id,$cat_events_id,$cat_locations_id,$cat_photos_id,$cat_safety_id,$cat_sealife_id,$cat_snorkeling_id,$cat_training_id,),
));

$post_worlds_best_cold_water_dives_id = td_demo_content::add_post(array(
    'title' => 'World\'s Best Cold-Water Dives',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_club_id,$cat_courses_id,$cat_environment_id,$cat_events_id,$cat_locations_id,$cat_photos_id,$cat_safety_id,$cat_sealife_id,$cat_snorkeling_id,$cat_training_id,),
));

$post_the_10_best_wreck_diving_havens_in_the_world_id = td_demo_content::add_post(array(
    'title' => 'The 10 Best Wreck Diving Havens in the World',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_club_id,$cat_courses_id,$cat_environment_id,$cat_events_id,$cat_locations_id,$cat_photos_id,$cat_safety_id,$cat_sealife_id,$cat_snorkeling_id,$cat_training_id,),
));

$post_td_post_new_freediver_initiatives_doing_the_impossible_id = td_demo_content::add_post(array(
	'title' => 'New Freediver Initiatives Doing the Impossible',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_club_id,),
));

$post_td_post_ocean_conservation_initiatives_in_mauritius_id = td_demo_content::add_post(array(
	'title' => 'Ocean Conservation Initiatives in Mauritius',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_club_id,),
));

$post_td_post_mission_blue_hope_mexicos_gulf_of_california_id = td_demo_content::add_post(array(
	'title' => 'Mission Blue Hope: Mexico’s Gulf of California',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_club_id,),
));

$post_td_post_surfers_divers_united_by_love_for_the_ocean_id = td_demo_content::add_post(array(
	'title' => 'Surfers & Divers: United by Love for the Ocean',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_club_id,),
));

$post_td_post_discover_the_incredible_marine_life_in_australia_id = td_demo_content::add_post(array(
	'title' => 'Discover the Incredible Marine Life in Australia',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_club_id,),
));

$post_td_post_velaa_private_island_coral_photo_shooting_id = td_demo_content::add_post(array(
	'title' => 'Velaa Private Island Coral Photo Shooting',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_photos_id,),
));

$post_td_post_beautiful_corals_salisbury_island_australia_id = td_demo_content::add_post(array(
	'title' => 'Beautiful Corals: Salisbury Island, Australia',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_photos_id,),
));

$post_td_post_dive_with_thresher_sharks_in_malapascua_island_id = td_demo_content::add_post(array(
	'title' => 'Dive with Thresher Sharks in Malapascua Island',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_photos_id,),
));

$post_td_post_surprising_marine_animals_close_to_extinction_id = td_demo_content::add_post(array(
	'title' => 'Surprising Marine Animals Close to Extinction',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_photos_id,),
));

$post_td_post_hope_spot_pangatalan_island_philippines_id = td_demo_content::add_post(array(
	'title' => 'Hope Spot: Pangatalan Island, Philippines',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_photos_id,),
));

$post_td_post_greece_islands_complete_remote_event_guide_id = td_demo_content::add_post(array(
	'title' => 'Greece Islands Complete Remote Event Guide',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_events_id,),
));

$post_td_post_how_to_start_a_local_ban_on_plastic_bags_event_id = td_demo_content::add_post(array(
	'title' => 'How to Start a Local Ban on Plastic Bags Event',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_events_id,),
));

$post_td_post_hosting_at_conrad_bora_bora_hotel_in_january_id = td_demo_content::add_post(array(
	'title' => 'Hosting at Conrad Bora Bora Hotel in January',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_events_id,),
));

$post_td_post_padi_women_saving_the_ocean_1st_edition_event_id = td_demo_content::add_post(array(
	'title' => 'PADI Women Saving the Ocean 1st Edition Event',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_events_id,),
));

$post_td_post_maldives_junior_marine_biologist_program_id = td_demo_content::add_post(array(
	'title' => 'Maldives Junior Marine Biologist Program',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_events_id,),
));

$post_td_post_how_to_handle_a_scuba_low_air_emergency_id = td_demo_content::add_post(array(
	'title' => 'How To Handle a Scuba Low-Air Emergency',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_safety_id,),
));

$post_td_post_fight_for_survival_after_being_left_at_sea_id = td_demo_content::add_post(array(
	'title' => 'Fight for Survival after Being Left at Sea',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_safety_id,),
));

$post_td_post_liability_as_a_scuba_diving_professional_id = td_demo_content::add_post(array(
	'title' => 'Liability As a Scuba Diving Professional',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_safety_id,),
));

$post_td_post_how_to_prepare_for_a_successful_dive_id = td_demo_content::add_post(array(
	'title' => 'How to Prepare For a Successful Dive',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_safety_id,),
));

$post_td_post_dive_accidents_and_how_to_avoid_them_id = td_demo_content::add_post(array(
	'title' => 'Dive Accidents and How to Avoid Them',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_safety_id,),
));

$post_td_post_divers_coming_together_the_un_development_agenda_id = td_demo_content::add_post(array(
	'title' => 'Divers Coming Together: The UN Development Agenda',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_a_billion_torchbearers_is_a_needle_mover_for_ocean_id = td_demo_content::add_post(array(
	'title' => 'A Billion Torchbearers Is a Needle-Mover for Ocean',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_cleaning_the_ocean_with_students_from_6_countries_id = td_demo_content::add_post(array(
	'title' => 'Cleaning the Ocean with Students from 6 Countries',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_master_scuba_diver_fights_for_ocean_conservation_id = td_demo_content::add_post(array(
	'title' => 'Master Scuba Diver Fights for Ocean Conservation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_10_facts_about_seagrass_you_probably_didnt_know_id = td_demo_content::add_post(array(
	'title' => '10 Facts About Seagrass You Probably Didn’t Know',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_surprising_marine_animals_found_in_indonesia_id = td_demo_content::add_post(array(
	'title' => 'Surprising Marine Animals Found in Indonesia',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_snorkeling_id,),
));

$post_td_post_top_destinations_to_snorkel_with_manatees_id = td_demo_content::add_post(array(
	'title' => 'Top Destinations to Snorkel With Manatees',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_snorkeling_id,),
));

$post_td_post_british_virgin_islands_best_diving_spots_id = td_demo_content::add_post(array(
	'title' => 'British Virgin Islands - Best Diving Spots',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_snorkeling_id,),
));

$post_td_post_5_weird_and_wacky_turtle_species_to_see_id = td_demo_content::add_post(array(
	'title' => '5 Weird and Wacky Turtle Species to See',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_snorkeling_id,),
));

$post_td_post_11_surprising_marine_life_sightings_in_india_id = td_demo_content::add_post(array(
	'title' => '11 Surprising Marine Life Sightings in India',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_snorkeling_id,),
));

$post_td_post_how_to_continue_a_dive_after_your_drysuit_leaks_id = td_demo_content::add_post(array(
	'title' => 'How to Continue a Dive After Your Drysuit Leaks',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_training_id,),
));

$post_td_post_scuba_diving_training_tips_deep_dive_confusion_id = td_demo_content::add_post(array(
	'title' => 'Scuba Diving Training Tips: Deep-Dive Confusion',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_training_id,),
));

$post_td_post_you_need_to_know_about_decompression_sickness_id = td_demo_content::add_post(array(
	'title' => 'You Need to Know about Decompression Sickness',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_training_id,),
));

$post_td_post_what_happens_when_you_get_a_fast_dcs_hit_id = td_demo_content::add_post(array(
	'title' => 'What Happens When You Get a Fast DCS Hit?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_training_id,),
));

$post_td_post_get_your_kids_family_into_scuba_diving_id = td_demo_content::add_post(array(
	'title' => 'Get Your Kids & Family into Scuba Diving',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_training_id,),
));

$post_td_post_how_can_i_reduce_my_covid_19_risk_while_diving_id = td_demo_content::add_post(array(
	'title' => 'How Can I Reduce my COVID-19 Risk While Diving?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_courses_id,),
));

$post_td_post_5_tips_for_being_caught_in_a_down_current_id = td_demo_content::add_post(array(
	'title' => '5 Tips for Being Caught in a Down Current',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_courses_id,),
));

$post_td_post_learn_understand_your_scuba_buddy_signals_id = td_demo_content::add_post(array(
	'title' => 'Learn: Understand Your Scuba Buddy Signals',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_courses_id,),
));

$post_td_post_predive_safety_check_prevents_scuba_disaster_id = td_demo_content::add_post(array(
	'title' => 'Predive Safety Check Prevents Scuba Disaster',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_courses_id,),
));

$post_td_post_stranded_scuba_diver_how_to_get_to_shore_id = td_demo_content::add_post(array(
	'title' => 'Stranded Scuba Diver - How to Get to Shore',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_courses_id,),
));

$post_td_post_top_10_easily_accessible_dive_sites_in_the_us_id = td_demo_content::add_post(array(
	'title' => 'Top 10 Easily Accessible Dive Sites in the US',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_locations_id,),
));

$post_td_post_must_dive_sites_in_north_and_south_america_id = td_demo_content::add_post(array(
	'title' => 'Must-Dive Sites in North and South America',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_locations_id,),
));

$post_td_post_explore_the_worlds_best_diving_locations_id = td_demo_content::add_post(array(
	'title' => 'Explore the World\'s Best Diving Locations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_locations_id,),
));

$post_td_post_cabanas_on_clarks_cay_reopening_special_id = td_demo_content::add_post(array(
	'title' => 'Cabanas on Clark\'s Cay Reopening Special',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_locations_id,),
));

$post_td_post_which_place_in_mauritius_is_right_for_you_id = td_demo_content::add_post(array(
	'title' => 'Which Place in Mauritius is Right for You?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_locations_id,),
));

$post_td_post_spinner_dolphins_spotting_oceanic_acrobat_id = td_demo_content::add_post(array(
	'title' => 'Spinner Dolphins Spotting - Oceanic Acrobat',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_sealife_id,),
));

$post_td_post_best_spots_to_see_wildlife_in_the_pacific_id = td_demo_content::add_post(array(
	'title' => 'Best Spots to See Wildlife in the Pacific',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_sealife_id,),
));

$post_td_post_four_best_places_to_dive_with_cephalopods_id = td_demo_content::add_post(array(
	'title' => 'Four Best Places to Dive with Cephalopods',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_sealife_id,),
));

$post_td_post_6_unique_marine_animals_found_in_australia_id = td_demo_content::add_post(array(
	'title' => '6 Unique Marine Animals Found in Australia',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_sealife_id,),
));

$post_td_post_must_do_shark_conservation_dive_travel_id = td_demo_content::add_post(array(
	'title' => 'Must Do: Shark Conservation Dive Travel',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_sealife_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/

$template_header_template_overlay_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Overlay - Scuba PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));


$template_header_template_main_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Main – Scuba PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_main_scuba_pro_id);


$template_footer_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer - Scuba PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_scuba_pro_id);


$template_author_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Scuba PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_scuba_pro_id);


$template_category_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Scuba PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_scuba_pro_id);


$template_single_post_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Scuba PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_scuba_pro_id);


$template_search_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Scuba PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_scuba_pro_id);


$template_date_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Scuba PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_scuba_pro_id);


$template_tag_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Scuba PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_scuba_pro_id);


$template_404_template_scuba_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Scuba PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_scuba_pro_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
    'header_template_id' => $template_header_template_overlay_scuba_pro_id,
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS CUSTOM
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

$menu_item_2_id = td_demo_menus::add_link(array(
    'title' => 'FAQs',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
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
    'title' => 'Diving',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_diving_id,
    'parent_id' => ''
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Environment',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_environment_id,
    'parent_id' => ''
), true);

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Safety',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_safety_id,
    'parent_id' => ''
), true);

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Events',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_events_id,
    'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_link(array(
    'title' => 'Media',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
    'title' => 'Photos',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_photos_id,
    'parent_id' => $menu_item_5_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
    'title' => 'Club',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_club_id,
    'parent_id' => $menu_item_5_id
));

/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_12');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
