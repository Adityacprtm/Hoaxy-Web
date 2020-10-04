<?php 

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_beauty_id = td_demo_category::add_category(array(
	'category_name' => 'Beauty',
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

$cat_hollywood_id = td_demo_category::add_category(array(
	'category_name' => 'Hollywood',
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

$cat_modelling_id = td_demo_category::add_category(array(
	'category_name' => 'Modelling',
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

$cat_whats_hot_id = td_demo_category::add_category(array(
	'category_name' => 'What\'s Hot',
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

$post_td_post_the_travel_insurance_catch_that_can_double_your_cover_in_two_months_id = td_demo_content::add_post(array(
    'title' => 'The Travel Insurance Catch that can Double Your Cover in Two Months',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_beauty_id,$cat_entertainment_id,$cat_fashion_id,$cat_hollywood_id,$cat_modelling_id,$cat_music_id,$cat_style_id,$cat_travel_id,$cat_whats_hot_id,),
));

$post_td_post_the_weirdest_places_ashes_have_been_scattered_in_south_america_id = td_demo_content::add_post(array(
    'title' => 'The Weirdest Places Ashes Have Been Scattered in South America',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_beauty_id,$cat_entertainment_id,$cat_fashion_id,$cat_hollywood_id,$cat_modelling_id,$cat_music_id,$cat_style_id,$cat_travel_id,$cat_whats_hot_id,),
));

$post_td_post_these_fabulous_photos_will_have_astonishing_impact_for_any_campaign_id = td_demo_content::add_post(array(
    'title' => 'These Fabulous Photos Will Have Astonishing Impact for Any Campaign',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_beauty_id,$cat_entertainment_id,$cat_fashion_id,$cat_hollywood_id,$cat_modelling_id,$cat_music_id,$cat_style_id,$cat_travel_id,$cat_whats_hot_id,),
));

$post_td_post_watch_awesome_kate_manner_go_full_dancing_pro_in_peru_this_week_id = td_demo_content::add_post(array(
    'title' => 'Watch Awesome Kate Manner Go Full Dancing Pro in Peru this Week',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_beauty_id,$cat_entertainment_id,$cat_fashion_id,$cat_hollywood_id,$cat_modelling_id,$cat_music_id,$cat_style_id,$cat_travel_id,$cat_whats_hot_id,),
));

$post_td_post_small_yacht_market_affected_by_the_fulminant_slashed_investments_id = td_demo_content::add_post(array(
    'title' => 'Small Yacht Market Affected by the Fulminant Slashed Investments',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_beauty_id,$cat_entertainment_id,$cat_fashion_id,$cat_hollywood_id,$cat_modelling_id,$cat_music_id,$cat_style_id,$cat_travel_id,$cat_whats_hot_id,),
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

$post_td_post_where_to_shoot_on_site_in_ibiza_on_the_best_rated_beach_photo_locations_id = td_demo_content::add_post(array(
	'title' => 'Where to Shoot: On Site in Ibiza, on the Best Rated Beach Photo Locations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_romanowskys_beauty_model_relaxing_and_working_on_new_shoot_in_thailand_id = td_demo_content::add_post(array(
	'title' => 'Romanowsky\'s Beauty Model Relaxing and Working on New Shoot in Thailand',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_victorias_secret_fashion_afterparty_plans_to_go_off_with_a_bang_this_year_id = td_demo_content::add_post(array(
	'title' => 'Victoria\'s Secret Fashion Afterparty Plans to Go Off with a Bang This Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_sisters_land_new_swimsuit_fashion_role_on_the_cover_of_bestseller_magazine_id = td_demo_content::add_post(array(
	'title' => 'Sisters Land New Swimsuit Fashion Role on the Cover of Bestseller Magazine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_the_best_dressed_men_from_the_sports_industry_footballers_in_top_3_places_id = td_demo_content::add_post(array(
	'title' => 'The Best Dressed Men from the Sports Industry: Footballers in Top 3 Places',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_hms_men_fashion_photoshoot_campaign_is_the_coolest_thing_weve_seen_id = td_demo_content::add_post(array(
	'title' => 'H&M’s Men Fashion Photoshoot Campaign is the Coolest Thing We’ve Seen',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_alexa_wallace_doesnt_like_to_play_by_the_standard_red_carpet_rules_id = td_demo_content::add_post(array(
	'title' => 'Alexa Wallace Doesn’t Like to Play by the Standard Red Carpet Rules',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_discover_5_travel_outfits_that_are_comfortable_and_also_very_chic_id = td_demo_content::add_post(array(
	'title' => 'Discover 5 Travel Outfits That Are Comfortable and Also Very Chic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_15_of_the_most_popular_make_up_products_with_inlcuded_video_tutorials_id = td_demo_content::add_post(array(
	'title' => 'Most Popular Make Up Products with Video Tutorials',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_10_affordable_outfits_for_beach_vacations_presented_by_mia_joanne_id = td_demo_content::add_post(array(
	'title' => '10 Affordable Outfits for Beach Vacations Presented by Mia & Joanne',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_our_favourite_celebrity_power_girl_is_ready_to_surprise_again_id = td_demo_content::add_post(array(
	'title' => 'Our Favourite Celebrity Power Girl is Ready to Surprise Again',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_modelling_id,),
));

$post_td_post_will_amys_partying_finally_catch_up_with_her_as_she_turns_40_id = td_demo_content::add_post(array(
	'title' => 'Will Amy\'s Partying Finally Catch up with Her as She Turns 40?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_modelling_id,),
));

$post_td_post_striking_photos_of_gorgeous_women_from_all_around_the_world_id = td_demo_content::add_post(array(
	'title' => 'Striking Photos of Gorgeous Women From All Around the World',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_modelling_id,),
));

$post_td_post_stay_inspired_top_photo_artists_reveal_how_they_find_their_muses_id = td_demo_content::add_post(array(
	'title' => 'Stay Inspired: Top Photo Artists Reveal How They Find their Muses',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_modelling_id,),
));

$post_td_post_5_high_powered_men_are_ready_to_share_their_secrets_for_success_id = td_demo_content::add_post(array(
	'title' => '5 High-Powered Men Are Ready to Share their Secrets for Success',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_modelling_id,),
));

$post_td_post_check_out_the_best_entertainment_venues_that_will_open_next_year_id = td_demo_content::add_post(array(
	'title' => 'Check out The Best Entertainment Venues that Will Open Next Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_vloggers_reveal_a_new_way_to_take_better_liked_videos_for_instagram_tv_id = td_demo_content::add_post(array(
	'title' => 'Vloggers Reveal a New Way to Take Better Liked Videos for Instagram TV',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_fashion_bloggers_hijacked_the_industry_cutting_a_big_piece_of_earnings_id = td_demo_content::add_post(array(
	'title' => 'Fashion Bloggers Hijacked the Industry, Cutting a big Piece of Earnings',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_the_gillbert_sister_secures_480_million_in_hollywood_contract_deal_id = td_demo_content::add_post(array(
	'title' => 'The Gillbert Sister Secures $480 Million in Hollywood Contract Deal',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_buzz_megan_ryan_gets_an_emmy_award_on_her_25_year_old_birthday_id = td_demo_content::add_post(array(
	'title' => 'Buzz: Megan Ryan Gets an Emmy Award on Her 25 Year Old Birthday',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_music_in_your_home_premium_sound_systems_offer_astounding_quality_id = td_demo_content::add_post(array(
	'title' => 'Music in Your Home: Premium Sound Systems Offer Astounding Quality',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_these_guys_are_making_more_money_than_anybody_could_have_ever_guessed_id = td_demo_content::add_post(array(
	'title' => 'These Guys Are Making More Money than Anybody Could Have Ever Guessed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_sarah_brooke_shows_off_her_stunning_body_in_concert_at_wembley_arena_id = td_demo_content::add_post(array(
	'title' => 'Sarah Brooke Shows Off Her Stunning Body in Concert at Wembley Arena',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_mary_josh_win_grammys_newcommers_of_the_year_with_their_debut_album_id = td_demo_content::add_post(array(
	'title' => 'Mary & Josh Win Grammys Newcommers of the Year With Their Debut Album',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_before_concert_therapy_breathtaking_barbados_snorkeling_experience_id = td_demo_content::add_post(array(
	'title' => 'Before Concert Therapy: Breathtaking Barbados Snorkeling Experience',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_major_network_is_anouncing_another_modelling_tv_show_this_fall_id = td_demo_content::add_post(array(
	'title' => 'Major Network is Anouncing Another Modelling TV Show This Fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_hollywood_id,),
));

$post_td_post_oscars_best_winning_actresses_all_had_a_pijama_party_on_sunday_id = td_demo_content::add_post(array(
	'title' => 'Oscar\'s Best Winning Actresses All Had a Pijama Party on Sunday',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_hollywood_id,),
));

$post_td_post_shock_blockbuster_filmmaker_bruce_knox_comes_out_as_transgender_id = td_demo_content::add_post(array(
	'title' => 'Shock: Blockbuster Filmmaker Bruce Knox Comes Out as Transgender',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_hollywood_id,),
));

$post_td_post_alice_pattinson_has_been_designing_clothes_for_over_40_years_id = td_demo_content::add_post(array(
	'title' => 'Alice Pattinson Has Been Designing Clothes for Over 40 Years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_hollywood_id,),
));

$post_td_post_duos_epic_win_will_be_commemorated_with_yacht_photoshoot_id = td_demo_content::add_post(array(
	'title' => 'Duo\'s Epic Win Will Be Commemorated with Yacht Photoshoot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_hollywood_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/

$template_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );


$template_footer_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_id);


$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


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
    'title' => 'Beauty',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_beauty_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_entertainment_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_fashion_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Hollywood',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_hollywood_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Style',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_style_id,
    'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Modelling',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_modelling_id,
    'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Travel',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_travel_id,
    'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Music',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_music_id,
    'parent_id' => ''
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
    'title' => 'About',
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


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Hot',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_whats_hot_id,
    'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('td_pic_1');

td_demo_misc::update_background_login('td_pic_2');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());