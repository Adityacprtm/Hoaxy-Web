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

$cat_business_id = td_demo_category::add_category(array(
	'category_name' => 'Business',
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

$cat_culture_id = td_demo_category::add_category(array(
	'category_name' => 'Culture',
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

$cat_magazine_id = td_demo_category::add_category(array(
	'category_name' => 'Magazine',
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

$cat_style_id = td_demo_category::add_category(array(
	'category_name' => 'Style',
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


/*  ---------------------------------------------------------------------------- 
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/
$post_jen_kendall_kicked_off_american_airlines_flight_id = td_demo_content::add_post(array(
	'title' => 'Jen Kendall Kicked off American Airlines First Flight',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_most_influencial_women_of_instagram_id = td_demo_content::add_post(array(
	'title' => 'Most influencial women of Instagram',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_girl_has_an_instagram_following_of_1_7_million_id = td_demo_content::add_post(array(
	'title' => 'Girl has an Instagram following of 1.7 Million',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_social_media_stars_are_the_key_to_fashions_future_id = td_demo_content::add_post(array(
	'title' => 'Social media stars are the key to fashion’s future',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_turn_your_instagram_into_a_revenue_generating_machine_id = td_demo_content::add_post(array(
	'title' => 'Turn your Instagram into a revenue generating machine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_new_data_reveals_huge_people_trust_in_influencers_id = td_demo_content::add_post(array(
	'title' => 'New data reveals huge people trust in influencers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_magazine_id,),
));

$post_photographer_snaps_gorgeous_photos_in_nature_id = td_demo_content::add_post(array(
	'title' => 'Photographer snaps gorgeous photos in nature',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_business_id,),
));

$post_we_asked_the_best_male_influencers_talk_pricing_id = td_demo_content::add_post(array(
	'title' => 'We asked the best: male influencers talk pricing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_business_id,),
));

$post_using_instagram_to_promote_your_youtube_videos_id = td_demo_content::add_post(array(
	'title' => 'Using Instagram to promote your YouTube videos',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_business_id,),
));

$post_fake_engagement_is_only_half_the_problem_id = td_demo_content::add_post(array(
	'title' => 'Fake engagement is only half the problem',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_business_id,),
));

$post_successful_entrepreneurs_recognize_when_to_move_on_id = td_demo_content::add_post(array(
	'title' => 'Successful entrepreneurs recognize when to move on',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_business_id,),
));

$post_how_39_major_businesses_use_instagram_stories_id = td_demo_content::add_post(array(
	'title' => 'How 39 major businesses use Instagram stories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_business_id,),
));

$post_man_united_skipper_again_boosted_for_first_goal_id = td_demo_content::add_post(array(
	'title' => 'Man United skipper again boosted for first goal',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_sport_id,),
));

$post_george_boateng_keeping_ron_vlaar_was_paul_lambert_masterstroke_id = td_demo_content::add_post(array(
	'title' => 'George Boateng: Keeping Ron Vlaar was Paul Lambert masterstroke',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_sport_id,),
));

$post_photo_coutinho_all_smiles_with_a50_million_superstar_after_brazil_win_id = td_demo_content::add_post(array(
	'title' => 'PHOTO: Coutinho all smiles with £50 million superstar after Brazil win',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_sport_id,),
));

$post_scotland_and_germany_play_rock_paper_scissors_during_euro_16_qualifier_id = td_demo_content::add_post(array(
	'title' => 'Scotland and Germany play rock-paper-scissors during Euro 16 qualifier',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_sport_id,),
));

$post_united_news_and_transfers_valencia_rejected_e2_millions_id = td_demo_content::add_post(array(
	'title' => 'United news and transfers Valencia rejected €2 millions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_sport_id,),
));

$post_in_full_sunlight_by_james_tissot_garden_in_london_with_artists_companions_id = td_demo_content::add_post(array(
	'title' => 'In Full Sunlight by James Tissot, garden in London with artists’ companions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_arts_id,),
));

$post_pedal_power_sees_amy_complete_world_toughest_cycle_challenge_id = td_demo_content::add_post(array(
	'title' => 'Pedal power sees Amy complete world toughest cycle challenge',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_sport_id,),
));

$post_red_sunset_on_the_dnieper_by_arkhip_ivanovich_kuindzhi_russian_artist_id = td_demo_content::add_post(array(
	'title' => 'Red Sunset on the Dnieper by Arkhip Ivanovich Kuindzhi, russian artist',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_arts_id,),
));

$post_fishing_boats_key_west_by_windslow_homer_broad_strokes_of_watercolor_id = td_demo_content::add_post(array(
	'title' => 'Fishing Boats, Key West by Windslow Homer, broad strokes of watercolor',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_arts_id,),
));

$post_a_rose_by_thomas_anschutz_late_nineteenth_century_american_painting_id = td_demo_content::add_post(array(
	'title' => 'A Rose by Thomas Anschutz, late nineteenth century American painting',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_arts_id,),
));

$post_the_street_pavers_by_umberto_boccioni_powerful_form_of_the_modern_laborer_id = td_demo_content::add_post(array(
	'title' => 'The Street Pavers by Umberto Boccioni, powerful form of the modern laborer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_arts_id,),
));

$post_the_smoke_signal_by_frederic_remington_long_distance_communication_id = td_demo_content::add_post(array(
	'title' => 'The Smoke Signal by Frederic Remington, long distance communication',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_arts_id,),
));

$post_all_you_need_to_know_about_the_galaxy_note_launching_this_fall_id = td_demo_content::add_post(array(
	'title' => 'All You Need to Know About the Galaxy Note Launching this Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_style_id,),
));

$post_burberry_is_the_first_brand_to_get_an_apple_music_channel_outfit_lines_id = td_demo_content::add_post(array(
	'title' => 'Burberry is the First Brand to get an Apple Music Channel Outfit Lines',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_style_id,),
));

$post_new_music_videos_that_will_stream_on_five_major_channels_this_fall_id = td_demo_content::add_post(array(
	'title' => 'New Music Videos that Will Stream on Five Major Channels this Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_style_id,),
));

$post_how_music_is_capable_of_changing_your_mood_in_every_situation_id = td_demo_content::add_post(array(
	'title' => 'How Music is Capable of Changing Your Mood in Every Situation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_style_id,),
));

$post_for_composer_derrick_spiva_music_is_all_about_embracing_life_id = td_demo_content::add_post(array(
	'title' => 'For Composer Derrick Spiva, Music is all About Embracing Life',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_style_id,),
));

$post_casey_adams_can_predict_the_next_big_music_hit_with_amazing_accuracy_id = td_demo_content::add_post(array(
	'title' => 'Casey Adams Can Predict the Next Big Music Hit with Amazing Accuracy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_style_id,),
));

$post_what_wines_should_you_pair_with_your_christmas_menu_id = td_demo_content::add_post(array(
	'title' => 'What wines should you pair with your Christmas menu?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_travel_id,),
));

$post_the_cliffs_of_moher_reach_1_million_visitors_every_year_since_2014_id = td_demo_content::add_post(array(
	'title' => 'The Cliffs of Moher Reach 1 Million Visitors Every Year Since 2014',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_travel_id,),
));

$post_the_25_best_cities_you_can_find_in_italy_to_satisfy_the_love_for_pizza_id = td_demo_content::add_post(array(
	'title' => 'The 25 Best Cities You Can Find in Italy to Satisfy the Love for Pizza',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_travel_id,),
));

$post_vacation_bucket_list_the_top_10_trips_of_a_lifetime_you_should_take_id = td_demo_content::add_post(array(
	'title' => 'Vacation Bucket List: The Top 10 Trips of a Lifetime You Should Take',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_travel_id,),
));

$post_10_things_you_should_know_before_you_explore_south_americas_jungles_id = td_demo_content::add_post(array(
	'title' => '10 Things You Should Know Before You Explore South America’s Jungles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_travel_id,),
));

$post_ultimate_guide_to_viennas_coffee_renaissance_packed_in_one_weekend_id = td_demo_content::add_post(array(
	'title' => 'Ultimate Guide to Vienna’s Coffee Renaissance Packed in One Weekend',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_travel_id,),
));

$post_customer_engagement_marketing_a_new_strategy_for_the_economy_2_id = td_demo_content::add_post(array(
	'title' => 'Customer Engagement Marketing: A New Strategy for the Economy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_politics_id,),
));

$post_sanders_gets_respectful_welcome_at_conservative_college_id = td_demo_content::add_post(array(
	'title' => 'Sanders Gets Respectful Welcome at Conservative College',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_politics_id,),
));

$post_the_main_candidate_was_presented_in_just_a_few_minutes_last_night_id = td_demo_content::add_post(array(
	'title' => 'The Main Candidate Was Presented in Just a Few Minutes Last Night',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_politics_id,),
));

$post_the_las_vegas_municipality_gears_up_for_next_years_election_id = td_demo_content::add_post(array(
	'title' => 'The Las Vegas Municipality Gears up for Next Year’s Election',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_politics_id,),
));

$post_things_you_didnt_know_about_the_californias_past_gouvernors_id = td_demo_content::add_post(array(
	'title' => 'Things You Didn’t Know About the California’s Past Gouvernors',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_politics_id,),
));

$post_the_politics_behind_cryptocurrencies_market_turbulence_last_year_id = td_demo_content::add_post(array(
	'title' => 'The Politics Behind Cryptocurrencies Market Turbulence Last Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_politics_id,),
));

$post_now_is_the_time_to_think_about_your_small_business_success_id = td_demo_content::add_post(array(
	'title' => 'Now Is the Time to Think About Your Small-Business Success',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_culture_id,),
));

$post_program_will_lend_10m_to_new_detroit_minority_businesses_id = td_demo_content::add_post(array(
	'title' => 'Program Will Lend $10M to New Detroit Minority Businesses',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_culture_id,),
));

$post_kansas_city_has_a_massive_array_of_big_national_companies_id = td_demo_content::add_post(array(
	'title' => 'Kansas City Has a Massive Array of Big National Companies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_culture_id,),
));

$post_the_definitive_guide_to_marketing_your_business_on_instagram_id = td_demo_content::add_post(array(
	'title' => 'The Definitive Guide To Marketing Your Business On Instagram',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_culture_id,),
));

$post_mark_steinberg_reads_donald_trumps_mean_tweets_on_kimmel_id = td_demo_content::add_post(array(
	'title' => 'Mark Steinberg Reads Donald Trump’s Mean Tweets on Kimmel',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_culture_id,),
));

$post_how_nancy_reagan_gave_glamour_and_class_to_the_white_house_id = td_demo_content::add_post(array(
	'title' => 'How Nancy Reagan Gave Glamour and Class to the White House',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_culture_id,),
));

$post_mobile_marketing_is_said_to_be_the_future_of_e_commerce_id = td_demo_content::add_post(array(
	'title' => 'Mobile Marketing is Said to Be the Future of E-Commerce',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_news_id,),
));

$post_entrepreneurial_advertising_the_future_of_marketing_id = td_demo_content::add_post(array(
	'title' => 'Entrepreneurial Advertising: The Future Of Marketing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_news_id,),
));

$post_customer_engagement_marketing_a_new_strategy_for_the_economy_id = td_demo_content::add_post(array(
	'title' => 'Customer Engagement Marketing: A New Strategy for the Economy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_news_id,),
));

$post_social_media_marketing_for_franchises_is_meant_for_women_id = td_demo_content::add_post(array(
	'title' => 'Social Media Marketing for Franchises is Meant for Women',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_news_id,),
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
	'title' => 'Business',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_business_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Magazine',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_magazine_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Sport',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_sport_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Arts',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_arts_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Culture',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_culture_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Politics',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_politics_id,
	'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Style',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_style_id,
	'parent_id' => ''
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Travel',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_travel_id,
	'parent_id' => ''
));

$menu_td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link(array(
	'title' => 'Advertise',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
	'title' => 'About',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
	'title' => 'Events',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_link(array(
	'title' => 'Write for Us',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_link(array(
	'title' => 'In the Press',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_tag_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template – Pulses PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_pulses_pro_id);


$template_date_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template – Pulses PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_pulses_pro_id);


$template_404_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Pulses PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_pulses_pro_id);


$template_search_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template – Pulses PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_pulses_pro_id);


$template_author_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - Pulses PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_pulses_pro_id);


$template_category_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Category Template – Pulses PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_pulses_pro_id);


$template_single_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Single Template - Pulses PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_pulses_pro_id);


$template_footer_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Footer Template - Pulses PRO',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_pulses_pro_id);


$template_header_template_pulses_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Header Template - Pulses PRO',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_pulses_pro_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_pulses_pro_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('td_pic_2');

td_demo_misc::update_background_login('td_pic_2');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array('facebook' => '#','instagram' => '#','vk' => '#','youtube' => '#',));
