<?php 


/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_arts_id = td_demo_category::add_category(array(
	'category_name' => 'Arts',
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

$cat_fashion_id = td_demo_category::add_category(array(
	'category_name' => 'Fashion',
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

$cat_fitness_id = td_demo_category::add_category(array(
	'category_name' => 'Fitness',
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

$cat_gadgets_id = td_demo_category::add_category(array(
	'category_name' => 'Gadgets',
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

$cat_gaming_id = td_demo_category::add_category(array(
	'category_name' => 'Gaming',
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

$cat_lifestyle_id = td_demo_category::add_category(array(
	'category_name' => 'Lifestyle',
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
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_photography_id = td_demo_category::add_category(array(
	'category_name' => 'Photography',
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

$cat_receipes_id = td_demo_category::add_category(array(
	'category_name' => 'Receipes',
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_showbiz_id = td_demo_category::add_category(array(
	'category_name' => 'Showbiz',
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

$cat_style_id = td_demo_category::add_category(array(
	'category_name' => 'Style',
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
	'parent_id' => $cat_lifestyle_id,
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

$cat_whats_hot_id = td_demo_category::add_category(array(
	'category_name' => 'What\'s Hot',
	'parent_id' => $cat_lifestyle_id,
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

$post_td_post_hms_fashion_photoshoot_campaign_is_the_coolest_thing_weve_seen_id = td_demo_content::add_post(array(
    'title' => 'H&M’s Fashion Photoshoot Campaign is the Coolest Thing We’ve Seen',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_arts_id,$cat_facts_id,$cat_fashion_id,$cat_fitness_id,$cat_gadgets_id,$cat_gaming_id,$cat_global_id,$cat_health_id,$cat_music_id,$cat_photography_id,$cat_receipes_id,$cat_showbiz_id,$cat_style_id,$cat_travel_id,$cat_video_id,$cat_whats_hot_id,),
));

$post_td_post_alexa_wallace_doesnt_like_to_play_by_the_standard_red_carpet_rules_id = td_demo_content::add_post(array(
    'title' => 'Alexa Wallace Doesn’t Like to Play by the Standard Red Carpet Rules',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_arts_id,$cat_facts_id,$cat_fashion_id,$cat_fitness_id,$cat_gadgets_id,$cat_gaming_id,$cat_global_id,$cat_health_id,$cat_music_id,$cat_photography_id,$cat_receipes_id,$cat_showbiz_id,$cat_style_id,$cat_travel_id,$cat_video_id,$cat_whats_hot_id,),
));

$post_td_post_discover_5_travel_outfits_that_are_comfortable_and_also_very_chic_id = td_demo_content::add_post(array(
    'title' => 'Discover 5 Travel Outfits That Are Comfortable and Also Very Chic',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_arts_id,$cat_facts_id,$cat_fashion_id,$cat_fitness_id,$cat_gadgets_id,$cat_gaming_id,$cat_global_id,$cat_health_id,$cat_music_id,$cat_photography_id,$cat_receipes_id,$cat_showbiz_id,$cat_style_id,$cat_travel_id,$cat_video_id,$cat_whats_hot_id,),
));

$post_td_post_15_of_the_most_popular_make_up_products_with_inlcuded_video_tutorials_id = td_demo_content::add_post(array(
    'title' => '15 of the Most Popular Make Up Products with Inlcuded Video Tutorials',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_arts_id,$cat_facts_id,$cat_fashion_id,$cat_fitness_id,$cat_gadgets_id,$cat_gaming_id,$cat_global_id,$cat_health_id,$cat_music_id,$cat_photography_id,$cat_receipes_id,$cat_showbiz_id,$cat_style_id,$cat_travel_id,$cat_video_id,$cat_whats_hot_id,),
));

$post_td_post_10_affordable_outfits_for_beach_vacations_presented_by_mia_joanes_id = td_demo_content::add_post(array(
    'title' => '10 Affordable Outfits for Beach Vacations Presented by Mia Joanes',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_arts_id,$cat_facts_id,$cat_fashion_id,$cat_fitness_id,$cat_gadgets_id,$cat_gaming_id,$cat_global_id,$cat_health_id,$cat_music_id,$cat_photography_id,$cat_receipes_id,$cat_showbiz_id,$cat_style_id,$cat_travel_id,$cat_video_id,$cat_whats_hot_id,),
));

$post_td_post_the_travel_insurance_catch_that_can_double_your_cover_in_two_months_id = td_demo_content::add_post(array(
	'title' => 'The Travel Insurance Catch that can Double Your Cover in Two Months',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_the_weirdest_places_ashes_have_been_scattered_in_south_america_id = td_demo_content::add_post(array(
	'title' => 'The Weirdest Places Ashes Have Been Scattered in South America',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_these_fabulous_photos_will_have_astonishing_impact_for_any_campaign_id = td_demo_content::add_post(array(
	'title' => 'These Fabulous Photos Will Have Astonishing Impact for Any Campaign',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_watch_awesome_kate_manner_go_full_dancing_pro_in_peru_this_week_id = td_demo_content::add_post(array(
	'title' => 'Watch Awesome Kate Manner Go Full Dancing Pro in Peru this Week',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_small_yacht_market_affected_by_the_fulminant_slashed_investments_id = td_demo_content::add_post(array(
	'title' => 'Small Yacht Market Affected by the Fulminant Slashed Investments',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_facts_id,),
));

$post_td_post_microsoft_to_start_gaming_development_systems_in_march_id = td_demo_content::add_post(array(
	'title' => 'Microsoft to Start Gaming Development Systems in March',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_why_next_year_might_just_be_the_best_year_ever_for_gaming_id = td_demo_content::add_post(array(
	'title' => 'Why Next Year Might Just Be the Best Year Ever for Gaming',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_ghost_racer_wants_to_be_the_most_ambitious_car_game_id = td_demo_content::add_post(array(
	'title' => 'Ghost Racer Wants to Be the Most Ambitious Car Game',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_new_nintendo_wii_console_goes_on_sale_in_strategy_reboot_id = td_demo_content::add_post(array(
	'title' => 'New Nintendo Wii Console Goes on Sale in Strategy Reboot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_you_and_your_kids_can_enjoy_this_news_gaming_console_id = td_demo_content::add_post(array(
	'title' => 'You and Your Kids can Enjoy this News Gaming Console',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_instagram_hair_ideas_to_try_inspirational_influencers_to_follow_id = td_demo_content::add_post(array(
	'title' => 'Instagram Hair Ideas to Try: Inspirational Influencers to Follow',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_expert_advice_the_best_cheap_retro_chic_fashion_for_this_fall_id = td_demo_content::add_post(array(
	'title' => 'Expert Advice: The Best Cheap Retro Chic Fashion for this Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_style_spy_fashion_model_goes_casual_in_distinct_and_original_way_id = td_demo_content::add_post(array(
	'title' => 'Style Spy: Fashion Model Goes Casual in Distinct and Original Way',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_what_makeup_to_wear_daily_no_matter_what_youve_got_planned_id = td_demo_content::add_post(array(
	'title' => 'What Makeup to Wear Daily, No Matter What You\'ve Got Planned',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_get_inside_a_fashion_bloggers_fancy_lifestyle_and_be_amazed_id = td_demo_content::add_post(array(
	'title' => 'Get Inside a Fashion Blogger\'s Fancy Lifestyle and Be Amazed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_manufacturer_plans_to_stop_delivering_secondary_camera_parts_id = td_demo_content::add_post(array(
	'title' => 'Manufacturer Plans to Stop Delivering Secondary Camera Parts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_apple_unveils_their_top_5_best_selling_movies_of_all_time_id = td_demo_content::add_post(array(
	'title' => 'Apple Unveils their Top 5 Best Selling Movies of All-Time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_virtual_reality_video_camera_will_be_launched_in_barcelona_id = td_demo_content::add_post(array(
	'title' => 'Virtual Reality Video Camera Will be Launched in Barcelona',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_virtual_reality_could_change_game_streaming_systems_forever_id = td_demo_content::add_post(array(
	'title' => 'Virtual Reality Could Change Game Streaming Systems Forever',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_this_new_gear_vr_controller_feels_like_its_from_the_future_id = td_demo_content::add_post(array(
	'title' => 'This New Gear VR Controller Feels Like it\'s From the Future',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_crop_factor_how_the_camera_lens_model_affects_your_images_id = td_demo_content::add_post(array(
	'title' => 'Crop Factor: How the Camera Lens Model Affects Your Images',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_this_new_breakthrough_phone_has_been_fitted_with_5_cameras_id = td_demo_content::add_post(array(
	'title' => 'This New Breakthrough Phone Has Been Fitted with 5 Cameras',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_the_best_smartphone_cameras_to_consider_for_your_next_vacation_id = td_demo_content::add_post(array(
	'title' => 'The Best Smartphone Cameras to Consider for your Next Vacation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_how_to_share_multiple_images_and_videos_in_your_insta_story_id = td_demo_content::add_post(array(
	'title' => 'How to Share Multiple Images and Videos in Your Insta Story',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_discover_the_newest_mirrorless_waterproof_and_rugged_cameras_id = td_demo_content::add_post(array(
	'title' => 'Discover the Newest Mirrorless Waterproof and Rugged Cameras',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_the_best_entertainment_venues_that_will_open_next_year_id = td_demo_content::add_post(array(
	'title' => 'The Best Entertainment Venues that Will Open Next Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_showbiz_id,),
));

$post_td_post_vloggers_reveal_a_new_way_to_take_videos_for_instagram_tv_id = td_demo_content::add_post(array(
	'title' => 'Vloggers Reveal a New Way to Take Videos for Instagram TV',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_showbiz_id,),
));

$post_td_post_bloggers_hijacked_the_industry_cutting_a_piece_of_earnings_id = td_demo_content::add_post(array(
	'title' => 'Bloggers Hijacked the Industry, Cutting a Piece of Earnings',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_showbiz_id,),
));

$post_td_post_gillbert_secures_480_million_in_hollywood_contract_deal_id = td_demo_content::add_post(array(
	'title' => 'Gillbert Secures $480 Million in Hollywood Contract Deal',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_showbiz_id,),
));

$post_td_post_megan_ryan_gets_an_emmy_award_on_her_25_year_old_birthday_id = td_demo_content::add_post(array(
	'title' => 'Megan Ryan Gets an Emmy Award on Her 25 Year Old Birthday',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_showbiz_id,),
));

$post_td_post_british_study_daily_workouts_help_you_cope_better_with_stress_id = td_demo_content::add_post(array(
	'title' => 'British Study: Daily Workouts Help you Cope Better with Stress',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_10_steps_to_make_to_be_successful_in_bodybuilding_and_in_life_id = td_demo_content::add_post(array(
	'title' => '10 Steps to Make to be Successful in Bodybuilding and in Life',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_discover_how_physical_exercises_make_your_brain_work_better_id = td_demo_content::add_post(array(
	'title' => 'Discover How Physical Exercises Make your Brain Work Better',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_how_to_transform_your_weight_loss_routine_into_a_lifestyle_id = td_demo_content::add_post(array(
	'title' => 'How to Transform your Weight Loss Routine into a Lifestyle',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_be_aware_excessive_excersise_could_do_you_a_lot_of_damage_id = td_demo_content::add_post(array(
	'title' => 'Be Aware: Excessive Excersise Could Do You a Lot of Damage',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_modular_systems_will_keep_your_smart_home_from_becoming_obsolete_id = td_demo_content::add_post(array(
	'title' => 'Modular Systems Will Keep Your Smart Home from Becoming Obsolete',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_sneak_peak_best_smart_home_gadgets_features_to_install_today_id = td_demo_content::add_post(array(
	'title' => 'Sneak Peak: Best Smart Home Gadgets & Features to Install Today',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_lights_guide_for_your_home_ultimate_led_vs_old_generations_id = td_demo_content::add_post(array(
	'title' => 'Lights Guide for your Home: Ultimate LED vs. Old Generations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_malware_can_be_introduced_into_smart_homes_operating_systems_id = td_demo_content::add_post(array(
	'title' => 'Malware Can Be Introduced into Smart Home\'s Operating Systems',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_meet_the_next_big_thing_for_ultimate_confort_in_smart_homes_id = td_demo_content::add_post(array(
	'title' => 'Meet the Next Big Thing for Ultimate Confort in Smart Homes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_amazing_model_on_site_in_ibiza_on_the_best_rated_photo_location_id = td_demo_content::add_post(array(
	'title' => 'Amazing Model On Site in Ibiza, on the Best Rated Photo Location',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_beauty_model_working_on_new_photoshoot_on_north_thailand_beach_id = td_demo_content::add_post(array(
	'title' => 'Beauty Model Working on New Photoshoot on North Thailand Beach',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_victorias_secret_afterparty_goes_off_with_a_bang_this_year_id = td_demo_content::add_post(array(
	'title' => 'Victoria\'s Secret Afterparty Goes Off with a Bang This Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_sisters_land_fashion_role_on_the_cover_of_bestseller_magazine_id = td_demo_content::add_post(array(
	'title' => 'Sisters Land Fashion Role on the Cover of Bestseller Magazine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_best_dressed_men_in_sports_industry_footballers_in_top_3_places_id = td_demo_content::add_post(array(
	'title' => 'Best Dressed Men in Sports Industry: Footballers in Top 3 Places',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_5_most_affordable_and_fun_swimsuits_to_try_this_summer_season_id = td_demo_content::add_post(array(
	'title' => '5 Most Affordable and Fun Swimsuits to Try This Summer Season',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_whats_hot_id,),
));

$post_td_post_unique_wedding_outfit_ideas_to_inspire_and_boost_creativity_id = td_demo_content::add_post(array(
	'title' => 'Unique Wedding Outfit Ideas to Inspire and Boost Creativity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_whats_hot_id,),
));

$post_td_post_the_most_amazing_accessories_to_buy_your_girlfriend_this_fall_id = td_demo_content::add_post(array(
	'title' => 'The Most Amazing Accessories to Buy Your Girlfriend This Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_whats_hot_id,),
));

$post_td_post_the_best_ways_to_naturally_show_off_your_gorgeous_worked_body_id = td_demo_content::add_post(array(
	'title' => 'The Best Ways to Naturally Show Off your Gorgeous Worked Body',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_whats_hot_id,),
));

$post_td_post_the_hottest_modern_accessories_for_a_stunning_look_this_summer_id = td_demo_content::add_post(array(
	'title' => 'The Hottest Modern Accessories for a Stunning Look this Summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_whats_hot_id,),
));

$post_td_post_exotic_trips_are_getting_more_and_more_popular_in_south_america_id = td_demo_content::add_post(array(
	'title' => 'Exotic Trips are Getting More and More Popular in South America',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_out_of_this_world_experience_with_these_exotic_travel_destinations_id = td_demo_content::add_post(array(
	'title' => 'Out of This World Experience with these Exotic Travel Destinations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_work_out_as_much_as_possible_during_your_all_inclusive_vacations_id = td_demo_content::add_post(array(
	'title' => 'Work Out as Much as Possible During Your All Inclusive Vacations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_bali_travel_experience_combine_luxury_with_a_real_life_adventure_id = td_demo_content::add_post(array(
	'title' => 'Bali Travel Experience: Combine Luxury with a Real Life Adventure',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_a_breakthough_for_this_year_space_travel_might_become_a_thing_id = td_demo_content::add_post(array(
	'title' => 'A Breakthough for This Year: Space Travel Might Become a Thing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_travel_id,),
));

$post_td_post_one_of_a_kind_traditional_bakeries_must_tries_when_in_morocco_id = td_demo_content::add_post(array(
	'title' => 'One of a Kind Traditional Bakeries Must Tries When in Morocco',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_receipes_id,),
));

$post_td_post_travellers_tip_where_to_find_the_best_food_around_shanghai_id = td_demo_content::add_post(array(
	'title' => 'Traveller\'s Tip: Where to Find the Best Food Around Shanghai',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_receipes_id,),
));

$post_td_post_the_best_yummy_italian_pasta_receipe_for_all_food_travelers_id = td_demo_content::add_post(array(
	'title' => 'The Best Yummy Italian Pasta Receipe for All Food Travelers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_receipes_id,),
));

$post_td_post_dont_hesitate_to_roam_the_world_for_your_favorite_foods_id = td_demo_content::add_post(array(
	'title' => 'Don\'t Hesitate to Roam the World For Your Favorite Foods',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_receipes_id,),
));

$post_td_post_thai_dishes_we_would_travel_back_to_eat_again_in_a_hartbeat_id = td_demo_content::add_post(array(
	'title' => 'Thai Dishes We Would Travel Back to Eat Again in a Hartbeat',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_receipes_id,),
));

$post_td_post_your_home_premium_sound_systems_offer_astounding_quality_id = td_demo_content::add_post(array(
	'title' => 'Your Home: Premium Sound Systems Offer Astounding Quality',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_these_guys_are_making_more_money_than_anybody_could_guess_id = td_demo_content::add_post(array(
	'title' => 'These Guys Are Making More Money than Anybody Could Guess',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_sarah_shows_off_her_stunning_body_in_concert_at_wembley_arena_id = td_demo_content::add_post(array(
	'title' => 'Sarah Shows Off Her Stunning Body in Concert at Wembley Arena',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_josh_wins_grammys_newcommers_of_the_year_with_their_album_id = td_demo_content::add_post(array(
	'title' => 'Josh Wins Grammys Newcommers of the Year With Their Album',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_concert_therapy_breathtaking_barbados_snorkeling_experience_id = td_demo_content::add_post(array(
	'title' => 'Concert Therapy: Breathtaking Barbados Snorkeling Experience',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_the_coronavirus_exposes_educations_digital_generation_gap_id = td_demo_content::add_post(array(
	'title' => 'The Coronavirus Exposes Education\'s Digital Generation Gap',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_quarantines_spark_confusion_and_worries_about_precedent_id = td_demo_content::add_post(array(
	'title' => 'Quarantines Spark Confusion and Worries About Precedent',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_know_the_simptoms_what_will_you_do_if_you_start_coughing_id = td_demo_content::add_post(array(
	'title' => 'Know the Simptoms: What Will You Do If You Start Coughing?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_the_dos_and_donts_of_the_social_distancing_behavior_id = td_demo_content::add_post(array(
	'title' => 'The Dos and Donts of the \'Social Distancing\' Behavior',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_the_healthiest_way_to_behave_in_this_pandemic_situation_id = td_demo_content::add_post(array(
	'title' => 'The Healthiest Way to Behave in this Pandemic Situation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_major_network_is_anouncing_another_modelling_tv_show_this_fall_id = td_demo_content::add_post(array(
	'title' => 'Major Network is Anouncing Another Modelling TV Show This Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_arts_id,),
));

$post_td_post_oscars_best_winning_actresses_all_had_a_pijama_party_on_sunday_id = td_demo_content::add_post(array(
	'title' => 'Oscar\'s Best Winning Actresses All Had a Pijama Party on Sunday',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_arts_id,),
));

$post_td_post_shock_blockbuster_filmmaker_bruce_knox_comes_out_as_transgender_id = td_demo_content::add_post(array(
	'title' => 'Shock: Blockbuster Filmmaker Bruce Knox Comes Out as Transgender',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_arts_id,),
));

$post_td_post_alice_pattinson_has_been_designing_clothes_for_over_40_years_id = td_demo_content::add_post(array(
	'title' => 'Alice Pattinson Has Been Designing Clothes for Over 40 Years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_arts_id,),
));

$post_td_post_duos_epic_win_will_be_commemorated_with_yacht_photoshoot_id = td_demo_content::add_post(array(
	'title' => 'Duo\'s Epic Win Will Be Commemorated with Yacht Photoshoot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_arts_id,),
));

$post_td_post_companies_are_putting_profits_ahead_of_public_health_id = td_demo_content::add_post(array(
	'title' => 'Companies Are Putting Profits Ahead of Public Health',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_witnessing_the_birth_of_the_new_coronavirus_economy_id = td_demo_content::add_post(array(
	'title' => 'Witnessing the Birth of the New Coronavirus Economy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_more_and_more_people_stay_home_as_coronavirus_spreads_id = td_demo_content::add_post(array(
	'title' => 'More and More People Stay Home as Coronavirus Spreads',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_the_real_economy_has_never_been_tested_by_a_pandemic_id = td_demo_content::add_post(array(
	'title' => 'The Real Economy Has Never Been Tested by a Pandemic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_global_id,),
));

$post_td_post_how_to_think_and_act_in_the_plummeting_stock_market_id = td_demo_content::add_post(array(
	'title' => 'How to Think and Act in the Plummeting Stock Market',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_global_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_header_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Magazine PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_magazine_pro_id);


update_post_meta( $template_header_template_magazine_pro_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id);


$template_footer_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer - Magazine PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_magazine_pro_id);


$template_category_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Magazine PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_magazine_pro_id);


$template_single_post_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Magazine PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_magazine_pro_id);


$template_author_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template - Magazine PRO',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_magazine_pro_id);


$template_tag_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Magazine PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_magazine_pro_id);


$template_date_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Magazine PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_magazine_pro_id);


$template_search_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Magazine PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_magazine_pro_id);


$template_404_template_magazine_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Magazine PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
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
	MENUS ITEMS 1
*/
$menu_item_0_id = td_demo_menus::add_link(array(
    'title' => 'Blog',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => 'https://demo.tagdiv.com/newspaper_magazine_pro/blog',
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
    'title' => 'About',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS 2
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-home"></i> Home',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_home_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-globe"></i> Global',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_global_id,
    'parent_id' => ''
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-bicycle"></i> Lifestyle',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_lifestyle_id,
    'parent_id' => ''
), true);

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-lotus"></i> Fashion',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_fashion_id,
    'parent_id' => ''
), true);

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-chip"></i> Gaming',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_gaming_id,
    'parent_id' => ''
), true);

$menu_item_5_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-pulse"></i> Fitness',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_fitness_id,
    'parent_id' => ''
), true);

$menu_item_6_id = td_demo_menus::add_mega_menu(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-apperture"></i> Video',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_video_id,
    'parent_id' => ''
), true);

$menu_item_7_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-photo"></i> Photography',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_photography_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-bulb-idea"></i> Showbiz',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_showbiz_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-responsive-devices"></i> Gadgets',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_gadgets_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_11_id = td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-megaphone"></i> Facts',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_facts_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_12_id = td_demo_menus::add_category(array(
    'title' => '<i class="tdc-font-tdmp tdc-font-tdmp-leves"></i> Style',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_style_id,
    'parent_id' => $menu_item_7_id
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('tdx_pic_10', false);

td_demo_misc::update_background_mobile('tdx_pic_11');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
