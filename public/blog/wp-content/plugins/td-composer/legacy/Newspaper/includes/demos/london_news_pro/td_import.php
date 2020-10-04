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

$cat_recipes_id = td_demo_category::add_category(array(
	'category_name' => 'Recipes',
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

$cat_sport_id = td_demo_category::add_category(array(
	'category_name' => 'Sport',
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

$cat_travel_id = td_demo_category::add_category(array(
	'category_name' => 'Travel',
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

$cat_world_id = td_demo_category::add_category(array(
	'category_name' => 'World',
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
$post_a_thomas_hart_benton_mural_repurposed_as_a_writing_desk_id = td_demo_content::add_post(array(
	'title' => 'A Thomas Hart Benton Mural, Repurposed as a Writing Desk',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_arts_id,),
));

$post_making_times_squares_pedestrian_plazas_work_id = td_demo_content::add_post(array(
	'title' => 'Making Times Square’s Pedestrian Plazas Work',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_arts_id,),
));

$post_how_the_guggenheim_keeps_its_galleries_immaculate_id = td_demo_content::add_post(array(
	'title' => 'How the Guggenheim Keeps Its Galleries Immaculate',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_arts_id,),
));

$post_joan_young_moderates_a_conversation_about_singapore_id = td_demo_content::add_post(array(
	'title' => 'Joan Young Moderates a Conversation about Singapore',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_arts_id,),
));

$post_the_guggenheim_curator_who_helped_popularize_pop_art_id = td_demo_content::add_post(array(
	'title' => 'The Guggenheim Curator Who Helped Popularize Pop Art',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_arts_id,),
));

$post_hard_time_ahead_for_hodgson_as_england_start_euro_2016_id = td_demo_content::add_post(array(
	'title' => 'Hard time ahead for Hodgson as England start Euro 2016',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_video_id,),
));

$post_man_united_skipper_again_boosted_for_first_goal_id = td_demo_content::add_post(array(
	'title' => 'Man United skipper again boosted for first goal',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_video_id,),
));

$post_albatec_racing_geared_up_for_world_rx_of_france_in_europe_id = td_demo_content::add_post(array(
	'title' => 'Albatec Racing Geared-Up For World RX Of France in Europe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_video_id,),
));

$post_racing_geared_up_for_world_rx_of_france_in_europe_id = td_demo_content::add_post(array(
	'title' => 'Racing Geared-Up For World RX Of France in Europe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_video_id,),
));

$post_best_sports_bloopers_2015_funny_sport_fails_compilation_id = td_demo_content::add_post(array(
	'title' => 'Best Sports Bloopers 2015 Funny Sport Fails Compilation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_video_id,),
));

$post_easy_breakfast_4_healthy_smoothie_bowl_recipes_to_start_id = td_demo_content::add_post(array(
	'title' => 'Easy breakfast! 4 healthy smoothie bowl recipes to start',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_recipes_id,),
));

$post_this_week_in_houston_food_blogs_high_protein_recipes_id = td_demo_content::add_post(array(
	'title' => 'This Week in Houston Food Blogs: High-Protein Recipes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_recipes_id,),
));

$post_top_5_pins_memorial_day_cocktails_id = td_demo_content::add_post(array(
	'title' => 'Top 5 Pins: Memorial Day Cocktails',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_recipes_id,),
));

$post_best_places_to_get_your_mexican_food_fix_id = td_demo_content::add_post(array(
	'title' => 'Best Places to Get Your Mexican Food Fix',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_recipes_id,),
));

$post_how_to_make_the_famous_parisian_purple_mojito_id = td_demo_content::add_post(array(
	'title' => 'How to Make the Famous Parisian Purple Mojito',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_recipes_id,),
));

$post_foods_that_promote_weight_loss_id = td_demo_content::add_post(array(
	'title' => 'Foods That Promote Weight Loss',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_health_id,),
));

$post_the_benefits_of_outdoor_exercise_id = td_demo_content::add_post(array(
	'title' => 'The Benefits of Outdoor Exercise',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_health_id,),
));

$post_summer_sports_that_torch_serious_calories_id = td_demo_content::add_post(array(
	'title' => 'Summer Sports That Torch Serious Calories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_health_id,),
));

$post_10_essential_rules_of_good_health_id = td_demo_content::add_post(array(
	'title' => '10 Essential Rules of Good Health',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_health_id,),
));

$post_the_workout_that_burns_more_calories_than_running_id = td_demo_content::add_post(array(
	'title' => 'The Workout That Burns More Calories Than Running',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_health_id,),
));

$post_your_weight_loss_journey_starts_with_these_foods_id = td_demo_content::add_post(array(
	'title' => 'Your Weight-Loss Journey Starts With These Foods',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_health_id,),
));

$post_10_things_you_should_know_before_you_go_to_tibet_id = td_demo_content::add_post(array(
	'title' => '10 Things You Should Know Before You Go to Tibet',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_travel_id,),
));

$post_ultimate_guide_to_viennas_coffee_renaissance_id = td_demo_content::add_post(array(
	'title' => 'Ultimate Guide to Vienna’s Coffee Renaissance',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_travel_id,),
));

$post_vacation_bucket_list_the_top_10_trips_of_a_lifetime_id = td_demo_content::add_post(array(
	'title' => 'Vacation Bucket List: The Top 10 Trips of a Lifetime',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_travel_id,),
));

$post_beautiful_cliffs_of_moher_reach_1_million_visitors_for_2015_id = td_demo_content::add_post(array(
	'title' => 'Beautiful Cliffs of Moher reach 1 million visitors for 2015',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_travel_id,),
));

$post_the_25_best_cities_for_pizza_lovers_id = td_demo_content::add_post(array(
	'title' => 'The 25 Best Cities for Pizza Lovers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_travel_id,),
));

$post_man_united_skipper_again_boosted_for_first_england_goal_after_win_id = td_demo_content::add_post(array(
	'title' => 'Man United skipper again boosted for first England goal after win',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_sport_id,),
));

$post_rumour_mill_gordon_strachan_and_david_beckham_id = td_demo_content::add_post(array(
	'title' => 'Rumour Mill: Gordon Strachan and David Beckham',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_sport_id,),
));

$post_scotland_and_germany_play_rock_paper_scissors_during_euro_16_qualifier_id = td_demo_content::add_post(array(
	'title' => 'Scotland and Germany play rock-paper-scissors during Euro 16 qualifier',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_sport_id,),
));

$post_photo_coutinho_all_smiles_with_a50_million_superstar_after_brazil_win_id = td_demo_content::add_post(array(
	'title' => 'PHOTO: Coutinho all smiles with £50 million superstar after Brazil win',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_sport_id,),
));

$post_lenovo_introduces_its_best_entertainment_tablets_yet_id = td_demo_content::add_post(array(
	'title' => 'IBM Introduces Its Best Entertainment Tablets Yet',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_tech_id,),
));

$post_george_boateng_keeping_ron_vlaar_was_paul_lambert_masterstroke_id = td_demo_content::add_post(array(
	'title' => 'George Boateng: Keeping Ron Vlaar was Paul Lambert masterstroke',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_sport_id,),
));

$post_apple_tv_is_finally_changing_the_living_room_id = td_demo_content::add_post(array(
	'title' => 'Apple TV is finally changing the living room',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_tech_id,),
));

$post_village_roadshow_entertainment_secures_480_million_id = td_demo_content::add_post(array(
	'title' => 'Village Roadshow Entertainment Secures $480 Million',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_tech_id,),
));

$post_how_grand_theft_auto_hijacked_the_entertainment_industry_id = td_demo_content::add_post(array(
	'title' => 'How Grand Theft Auto hijacked the entertainment industry',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_tech_id,),
));

$post_apple_watch_climbs_the_list_of_the_top_wearable_gadgets_id = td_demo_content::add_post(array(
	'title' => 'Apple Watch Climbs the List of the Top Wearable Gadgets',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_tech_id,),
));

$post_gigabyte_geforce_gtx_950_review_pricing_is_everything_id = td_demo_content::add_post(array(
	'title' => 'Gigabyte GeForce GTX 950 Review: Pricing Is Everything',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_tech_id,),
));

$post_the_best_gadgets_from_ifa_2016_id = td_demo_content::add_post(array(
	'title' => 'The best gadgets from IFA 2016',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_tech_id,),
));

$post_kristen_stewart_at_the_toronto_film_festival_2015_id = td_demo_content::add_post(array(
	'title' => 'Kristen Stewart at the Toronto Film Festival 2015',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_photography_id,),
));

$post_celebrity_make_up_artist_gary_cockerill_shows_you_beauty_trick_id = td_demo_content::add_post(array(
	'title' => 'Celebrity make-up artist Gary Cockerill shows you beauty trick',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_photography_id,),
));

$post_ben_affleck_and_jennifer_garner_at_farmers_market_in_la_id = td_demo_content::add_post(array(
	'title' => 'Ben Affleck and Jennifer Garner at Farmers Market in LA',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_photography_id,),
));

$post_es_fashion_finder_biggest_shows_parties_and_celebrity_id = td_demo_content::add_post(array(
	'title' => 'E!\'s Fashion Finder: Biggest Shows, Parties and Celebrity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_photography_id,),
));

$post_the_most_popular_celebrity_baby_names_of_the_millennium_id = td_demo_content::add_post(array(
	'title' => 'The Most Popular Celebrity Baby Names of the Millennium',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_photography_id,),
));

$post_the_hottest_hairstyle_at_fashion_week_is_not_on_the_runways_id = td_demo_content::add_post(array(
	'title' => 'The Hottest Hairstyle at Fashion Week Is Not on the Runways',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_the_fashion_news_to_know_today_id = td_demo_content::add_post(array(
	'title' => 'The Fashion News to Know Today',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_fashion_week_parties_night_4_id = td_demo_content::add_post(array(
	'title' => 'Fashion Week Parties: Night 4',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_day_3_of_spring_2016_new_york_fashion_weeks_most_inspiring_id = td_demo_content::add_post(array(
	'title' => 'Day 3 of Spring 2016 New York Fashion Week\'s most inspiring',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_margaret_cho_designs_solitaire_jumpsuit_for_betabrand_id = td_demo_content::add_post(array(
	'title' => 'Margaret Cho Designs Solitaire Jumpsuit For Betabrand',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_cliffs_of_moher_reach_1_million_visitors_for_2016_id = td_demo_content::add_post(array(
	'title' => 'Cliffs of Moher reach 1 million visitors for 2016',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_world_id,),
));

$post_a_look_at_how_social_mobile_gaming_increase_sales_id = td_demo_content::add_post(array(
	'title' => 'A Look at How Social & Mobile Gaming Increase Sales',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_world_id,),
));

$post_things_to_look_for_in_a_financial_trading_platform_id = td_demo_content::add_post(array(
	'title' => 'Things to Look For in a Financial Trading Platform',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_world_id,),
));

$post_kansas_city_has_a_massive_network_of_underground_caves_id = td_demo_content::add_post(array(
	'title' => 'Kansas City has a massive network of underground caves',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_world_id,),
));

$post_program_will_lend_6_5m_to_detroit_minority_businesses_id = td_demo_content::add_post(array(
	'title' => 'Program will lend $6.5M to Detroit minority businesses',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_world_id,),
));

$post_now_is_the_time_to_think_about_your_small_business_success_id = td_demo_content::add_post(array(
	'title' => 'Now Is the Time to Think About Your Small-Business Success',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_world_id,),
));

$post_doors_slam_shut_across_borderless_europe_as_coronavirus_spreads_id = td_demo_content::add_post(array(
	'title' => 'Doors slam shut across borderless Europe as coronavirus spreads',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_covid_19_australia_to_ban_all_arrivals_of_non_residents_says_pm_id = td_demo_content::add_post(array(
	'title' => 'COVID-19: Australia to ban all arrivals of non-residents, says PM',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_trump_sought_to_buy_vaccine_developer_exclusively_for_us_say_german_officials_id = td_demo_content::add_post(array(
	'title' => 'Trump sought to buy vaccine developer exclusively for US, say German officials',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_us_australian_central_banks_push_more_money_into_markets_id = td_demo_content::add_post(array(
	'title' => 'US, Australian central banks push more money into markets',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_fearing_coronavirus_recession_france_announces_e45_billion_in_business_aid_id = td_demo_content::add_post(array(
	'title' => 'Fearing coronavirus recession, France announces €45 billion in business aid',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_coronavirus_myths_busted_by_who_for_better_covid_19_awareness_id = td_demo_content::add_post(array(
	'title' => 'Coronavirus myths busted by WHO for better Covid-19 awareness',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_uncategorized_id,$cat_video_id,$cat_world_id,),
));

$post_exclusive_amazon_confirms_first_known_coronavirus_case_in_an_american_warehouse_id = td_demo_content::add_post(array(
	'title' => 'Exclusive: Amazon Confirms First Known Coronavirus Case in an American Warehouse',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_video_id,$cat_world_id,),
));

$post_sneak_peak_best_smart_home_gadgets_features_of_2020_id = td_demo_content::add_post(array(
	'title' => 'Sneak Peak: Best Smart Home Gadgets & Features of 2020',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_video_id,$cat_world_id,),
));

$post_modern_monochrome_home_with_calm_and_cosy_terrace_and_steps_id = td_demo_content::add_post(array(
	'title' => 'Modern Monochrome Home with Calm and Cosy Terrace and Steps',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_arts_id,$cat_fashion_id,$cat_health_id,$cat_news_id,$cat_photography_id,$cat_recipes_id,$cat_sport_id,$cat_tech_id,$cat_travel_id,$cat_video_id,$cat_world_id,),
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
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');


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
	'title' => 'News',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_news_id,
	'parent_id' => ''
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Fashion',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_fashion_id,
	'parent_id' => ''
), true);

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'World',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_world_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Sport',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_sport_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Tech',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_tech_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Photography',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_photography_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_link(array(
	'title' => 'More',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Recipes',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_recipes_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Travel',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_travel_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Arts',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_arts_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_11_id = td_demo_menus::add_category(array(
	'title' => 'Health',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_health_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_12_id = td_demo_menus::add_category(array(
	'title' => 'Video',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_video_id,
	'parent_id' => $menu_item_7_id
));


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_tag_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - London News PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_london_news_pro_id);


$template_date_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - London News PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_london_news_pro_id);


$template_404_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - London News PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_london_news_pro_id);


$template_search_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - London News PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_london_news_pro_id);


$template_author_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - London News PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_london_news_pro_id);


$template_category_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Category Template - London News PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_london_news_pro_id);


$template_single_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Single Template - London News PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_london_news_pro_id);


$template_footer_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Footer Template - London News PRO',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_london_news_pro_id);


$template_header_template_london_news_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Header Template - London News PRO',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_london_news_pro_id);


update_post_meta( $template_header_template_london_news_pro_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id);



/*  ----------------------------------------------------------------------------
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_1');

td_demo_misc::update_background_login('tdx_pic_1');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array('facebook' => '#','instagram' => '#','vk' => '#','youtube' => '#',));

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
