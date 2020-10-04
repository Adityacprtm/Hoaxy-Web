<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/

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

$cat_fashion_id = td_demo_category::add_category(array(
	'category_name' => 'Fashion',
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

$cat_fitness_id = td_demo_category::add_category(array(
	'category_name' => 'Fitness',
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

$cat_fragrances_id = td_demo_category::add_category(array(
	'category_name' => 'Fragrances',
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

$cat_hair_care_id = td_demo_category::add_category(array(
	'category_name' => 'Hair Care',
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

$cat_life_hacks_id = td_demo_category::add_category(array(
	'category_name' => 'Life Hacks',
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

$cat_deserts_id = td_demo_category::add_category(array(
    'category_name' => 'Deserts',
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

$cat_make_up_id = td_demo_category::add_category(array(
	'category_name' => 'Make Up',
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

$cat_outfits_id = td_demo_category::add_category(array(
	'category_name' => 'Outfits',
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

$cat_wellness_id = td_demo_category::add_category(array(
	'category_name' => 'Wellness',
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

$post_healthy_drinks_for_your_summer_night_parties_id = td_demo_content::add_post(array(
    'title' => 'Healthy Drinks for Your Summer Night Parties',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_what_to_take_with_you_when_you_travel_abroad_id = td_demo_content::add_post(array(
    'title' => 'What to Take with You When You Travel Abroad',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_smart_small_office_design_ideas_this_year_id = td_demo_content::add_post(array(
    'title' => 'Smart Small Office Design Ideas this Year',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_happiness_is_the_main_factor_determining_health_id = td_demo_content::add_post(array(
    'title' => 'Happiness is the Main Factor Determining Health',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_new_york_will_remain_in_top_3_most_expensive_cities_id = td_demo_content::add_post(array(
    'title' => 'New York Will Remain in Top 3 Most Expensive Cities',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_organize_your_home_and_back_yard_in_style_id = td_demo_content::add_post(array(
    'title' => 'Organize Your Home and Back Yard in Style',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_deserts_id,$cat_fashion_id,$cat_fitness_id,$cat_fragrances_id,$cat_gadgets_id,$cat_hair_care_id,$cat_life_hacks_id,$cat_make_up_id,$cat_outfits_id,$cat_style_id,$cat_wellness_id,),
));

$post_td_post_the_ultimate_fruit_and_milk_smoothie_id = td_demo_content::add_post(array(
	'title' => 'The Ultimate Fruit and Milk Smoothie',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_deserts_id,),
));

$post_td_post_soft_homemade_double_glaze_donuts_id = td_demo_content::add_post(array(
	'title' => 'Soft Homemade Double Glaze Donuts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_deserts_id,),
));

$post_td_post_rocky_road_homemade_candy_for_parties_id = td_demo_content::add_post(array(
	'title' => 'Rocky Road Homemade Candy for Parties',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_deserts_id,),
));

$post_td_post_sweet_sour_strawberry_icecream_id = td_demo_content::add_post(array(
	'title' => 'Sweet & Sour Strawberry Icecream',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_deserts_id,),
));

$post_td_post_jelly_with_natural_cherry_topping_id = td_demo_content::add_post(array(
	'title' => 'Jelly with Natural Cherry Topping',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_deserts_id,),
));

$post_td_post_how_to_find_the_perfect_sunglasses_for_your_face_shape_id = td_demo_content::add_post(array(
	'title' => 'Find the Perfect Sunglasses for Your Face Shape',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_outfits_id,),
));

$post_td_post_10_affordable_jackets_and_coats_for_the_fall_id = td_demo_content::add_post(array(
	'title' => '10 Affordable Jackets and Coats for the Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_outfits_id,),
));

$post_td_post_5_travel_outfits_that_are_comfortable_and_chic_id = td_demo_content::add_post(array(
	'title' => '5 Travel Outfits That Are Comfortable and Chic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_outfits_id,),
));

$post_td_post_what_to_wear_on_a_first_date_we_asked_the_experts_id = td_demo_content::add_post(array(
	'title' => 'What to Wear on a First Date? We Asked the Experts!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_outfits_id,),
));

$post_td_post_weekly_window_shop_amazing_bathing_suit_by_versace_id = td_demo_content::add_post(array(
	'title' => 'Weekly Window Shop: Amazing Bathing Suit by Versace',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_outfits_id,),
));

$post_td_post_macbook_integration_with_smart_home_capabilities_id = td_demo_content::add_post(array(
	'title' => 'Macbook Integration With Smart Home Capabilities',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_portable_cameras_latest_models_taken_deep_diving_id = td_demo_content::add_post(array(
	'title' => 'Portable Cameras: Latest Models Taken Deep Diving',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_expert_review_the_most_capable_photo_camera_of_2020_id = td_demo_content::add_post(array(
	'title' => 'Expert Review: The Most Capable Photo Camera of 2020',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_5_headphones_models_and_wich_one_rates_our_top_id = td_demo_content::add_post(array(
	'title' => '5 Headphones Models and Wich One Rates our Top',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_the_coolest_color_palette_for_your_next_smatphone_id = td_demo_content::add_post(array(
	'title' => 'The Coolest Color Palette for Your Next Smatphone',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_gadgets_id,),
));

$post_td_post_15_of_the_most_popular_makeup_tips_on_pinterest_id = td_demo_content::add_post(array(
	'title' => '15 of the Most Popular Makeup Tips on Pinterest',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_make_up_id,),
));

$post_td_post_how_to_find_the_perfect_blush_for_your_complexion_id = td_demo_content::add_post(array(
	'title' => 'How to Find the Perfect Blush for Your Complexion',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_make_up_id,),
));

$post_td_post_the_best_color_palette_to_use_in_your_makeup_id = td_demo_content::add_post(array(
	'title' => 'The Best Color Palette to Use in Your Makeup',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_make_up_id,),
));

$post_td_post_super_surreal_makeup_kit_the_sky_is_the_limit_id = td_demo_content::add_post(array(
	'title' => 'Super Surreal Makeup Kit: The Sky is the Limit',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_make_up_id,),
));

$post_td_post_the_game_changers_best_liners_for_eye_contour_id = td_demo_content::add_post(array(
	'title' => 'The Game Changers: Best Liners for Eye Contour',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_make_up_id,),
));

$post_td_post_why_this_model_received_the_platinum_hair_award_id = td_demo_content::add_post(array(
	'title' => 'Why this Model Received the Platinum Hair Award',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_hair_care_id,),
));

$post_td_post_discover_these_sexy_hairstyles_that_men_love_id = td_demo_content::add_post(array(
	'title' => 'Discover These Sexy Hairstyles that Men Love',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_hair_care_id,),
));

$post_td_post_best_celebrity_hair_transformations_this_year_id = td_demo_content::add_post(array(
	'title' => 'Best Celebrity Hair Transformations This Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_hair_care_id,),
));

$post_td_post_the_secret_to_the_perfect_golden_hair_glow_id = td_demo_content::add_post(array(
	'title' => 'The Secret to the Perfect Golden Hair Glow',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_hair_care_id,),
));

$post_td_post_the_best_five_rules_for_amazing_hair_volume_id = td_demo_content::add_post(array(
	'title' => 'The Best Five Rules for Amazing Hair Volume',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_hair_care_id,),
));

$post_td_post_the_10_best_apps_for_planning_your_next_trip_id = td_demo_content::add_post(array(
	'title' => 'The 10 Best Apps for Planning Your Next Trip',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_life_hacks_id,),
));

$post_td_post_dont_let_your_summer_hard_work_go_to_waste_id = td_demo_content::add_post(array(
	'title' => 'Don\'t Let Your Summer Hard Work Go to Waste',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_life_hacks_id,),
));

$post_td_post_girls_guide_tricks_to_save_time_in_the_morning_id = td_demo_content::add_post(array(
	'title' => 'Girl\'s Guide: Tricks to Save Time in the Morning',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_life_hacks_id,),
));

$post_td_post_motivation_monday_only_3_days_left_of_summer_id = td_demo_content::add_post(array(
	'title' => 'Motivation Monday: Only 3 Days Left of Summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_life_hacks_id,),
));

$post_td_post_five_rules_for_a_long_healthy_and_happy_life_id = td_demo_content::add_post(array(
	'title' => 'Five Rules For a Long, Healthy and Happy Life',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_life_hacks_id,),
));

$post_td_post_how_to_match_your_autumn_jacket_with_your_hair_color_id = td_demo_content::add_post(array(
	'title' => 'How to Match Your Autumn Jacket With Your Hair Color',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_10_fabulous_couple_outfits_to_wear_this_season_id = td_demo_content::add_post(array(
	'title' => '10 Fabulous Couple Outfits to Wear This Season',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_the_best_street_style_at_new_york_fashion_week_id = td_demo_content::add_post(array(
	'title' => 'The Best Street Style at New York Fashion Week',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_styling_101_how_to_wear_falls_hottest_footwear_id = td_demo_content::add_post(array(
	'title' => 'Styling 101: How to Wear Fall\'s Hottest Footwear',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_shop_the_best_street_style_from_paris_fashion_week_id = td_demo_content::add_post(array(
	'title' => 'Shop The Best Street Style from Paris Fashion Week',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_style_id,),
));

$post_td_post_top_tip_how_to_find_your_signature_scent_this_spring_id = td_demo_content::add_post(array(
	'title' => 'Top Tip: How to Find Your Signature Scent This Spring',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fragrances_id,),
));

$post_td_post_summers_scent_track_best_warm_weather_fragrances_id = td_demo_content::add_post(array(
	'title' => 'Summer’s Scent Track: Best Warm Weather Fragrances',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fragrances_id,),
));

$post_td_post_5_classic_perfumes_and_colognes_you_should_be_wearing_id = td_demo_content::add_post(array(
	'title' => '5 Classic Perfumes and Colognes You Should be Wearing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fragrances_id,),
));

$post_td_post_falling_in_love_with_fragrances_fresh_perfumes_id = td_demo_content::add_post(array(
	'title' => 'Falling in Love With Fragrances: Fresh Perfumes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fragrances_id,),
));

$post_td_post_3_perfume_testing_mistakes_youre_probably_making_id = td_demo_content::add_post(array(
	'title' => '3 Perfume Testing Mistakes You’re Probably Making',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fragrances_id,),
));

$post_td_post_5_yoga_poses_for_your_next_outdoor_training_session_id = td_demo_content::add_post(array(
	'title' => '5 Yoga Poses for Your Next Outdoor Training Session',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_questions_you_must_ask_yourself_before_a_workout_id = td_demo_content::add_post(array(
	'title' => 'Questions You Must Ask Yourself Before a Workout',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_tighten_your_butt_and_upper_body_in_just_4_moves_id = td_demo_content::add_post(array(
	'title' => 'Tighten Your Butt and Upper Body in Just 4 Moves',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_the_uncomplicated_guide_to_training_and_life_id = td_demo_content::add_post(array(
	'title' => 'The Uncomplicated Guide to Training and Life',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_8_things_i_wish_i_knew_before_i_started_running_id = td_demo_content::add_post(array(
	'title' => '8 Things I Wish I Knew Before I Started Running',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_the_10_most_common_dreams_and_what_is_their_meaning_id = td_demo_content::add_post(array(
	'title' => 'The 10 Most Common Dreams and What is Their Meaning',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_10_gourme_meals_for_health_conscious_hungry_girls_id = td_demo_content::add_post(array(
	'title' => '10 Gourme Meals for Health Conscious Hungry Girls',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_a_complete_guide_to_finding_the_best_spa_in_the_world_id = td_demo_content::add_post(array(
	'title' => 'A Complete Guide to Finding the Best Spa in the World',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_how_to_pick_the_perfect_house_plant_for_positive_energy_id = td_demo_content::add_post(array(
	'title' => 'How to Pick the Perfect House Plant for Positive Energy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_what_to_do_when_you_hit_a_healthy_lifestyle_plateau_id = td_demo_content::add_post(array(
	'title' => 'What to Do When You Hit a Healthy Lifestyle Plateau',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_fashion_outfit_ideas_to_try_from_instagram_this_week_id = td_demo_content::add_post(array(
	'title' => 'Fashion Outfit Ideas to Try From Instagram This Week',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_expert_advice_the_best_retro_chic_fashion_for_fall_id = td_demo_content::add_post(array(
	'title' => 'Expert Advice: The Best Retro Chic Fashion for Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_style_spy_fashion_model_goes_casual_in_cargo_and_plaid_id = td_demo_content::add_post(array(
	'title' => 'Style Spy: Fashion Model Goes Casual in Cargo and Plaid',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_what_to_wear_tonight_no_matter_what_youve_got_planned_id = td_demo_content::add_post(array(
	'title' => 'What to Wear Tonight, No Matter What You\'ve Got Planned',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_inside_a_fashion_bloggers_fancy_apartment_id = td_demo_content::add_post(array(
	'title' => 'Inside a Fashion Blogger\'s Fancy Apartment',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fashion_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/

$template_header_template_global_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Global – Lifestyle PRO',
    'file' => 'header_cloud_template_global.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_global_lifestyle_pro_id);

update_post_meta( $template_header_template_global_lifestyle_pro_id, 'header_mobile_menu_id', $menu_td_demo_custom_menu_id);


$template_header_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Lifestyle PRO',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

update_post_meta( $template_header_template_lifestyle_pro_id, 'header_mobile_menu_id', $menu_td_demo_custom_menu_id);


$template_footer_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer - Lifestyle PRO',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_lifestyle_pro_id);


$template_single_post_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Lifestyle PRO',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_lifestyle_pro_id);


$template_category_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Lifestyle PRO',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_lifestyle_pro_id);


$template_date_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Lifestyle PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_lifestyle_pro_id);


$template_tag_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Lifestyle PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_lifestyle_pro_id);


$template_author_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - Lifestyle PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_lifestyle_pro_id);


$template_404_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Lifestyle PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_lifestyle_pro_id);


$template_search_template_lifestyle_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Lifestyle PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_lifestyle_pro_id);



/*  ----------------------------------------------------------------------------
	PAGES
*/

$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
    'header_template_id' => $template_header_template_lifestyle_pro_id,
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS HEADER
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => 'Home',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_home_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_lifestyle_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Gadgets',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_gadgets_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Life Hacks',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_life_hacks_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Deserts',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_deserts_id,
    'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
    'title' => 'Outfits',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_outfits_id,
    'parent_id' => $menu_item_5_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
    'title' => 'Hair Care',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_hair_care_id,
    'parent_id' => $menu_item_5_id
));

$menu_item_8_id = td_demo_menus::add_category(array(
    'title' => 'Make Up',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_make_up_id,
    'parent_id' => $menu_item_5_id
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS CUSTOM
*/
$menu_item_0_id = td_demo_menus::add_link(array(
    'title' => 'About Lifestyle PRO',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
    'title' => 'Contact Us',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
    'title' => 'Privacy Policy',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_link(array(
    'title' => 'Terms of Use',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'url' => '#',
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

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
