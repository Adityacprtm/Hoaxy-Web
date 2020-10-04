<?php

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/

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

$cat_fashion_id = td_demo_category::add_category(array(
	'category_name' => 'Fashion',
	'parent_id' => $cat_style_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_men_id = td_demo_category::add_category(array(
	'category_name' => 'Men',
	'parent_id' => $cat_style_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_newcommers_id = td_demo_category::add_category(array(
	'category_name' => 'Newcommers',
	'parent_id' => $cat_style_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_stars_id = td_demo_category::add_category(array(
	'category_name' => 'Stars',
	'parent_id' => $cat_style_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_women_id = td_demo_category::add_category(array(
    'category_name' => 'Women',
    'parent_id' => $cat_style_id,
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

$cat_marketing_id = td_demo_category::add_category(array(
    'category_name' => 'Marketing',
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

$cat_fresh_id = td_demo_category::add_category(array(
    'category_name' => 'Fresh',
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
$post_td_post_measure_success_but_remember_the_work_involved_id = td_demo_content::add_post(array(
	'title' => 'Measure success but remember the work involved',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_amazing_confession_of_an_instagram_influencer_id = td_demo_content::add_post(array(
	'title' => 'Amazing confession of an Instagram influencer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_new_data_reveals_huge_people_trust_in_influencers_id = td_demo_content::add_post(array(
	'title' => 'New data reveals huge people trust in influencers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_a_hotel_totally_banned_social_influencers_id = td_demo_content::add_post(array(
	'title' => 'A hotel totally banned social influencers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_influencer_reveals_extent_of_online_trolling_id = td_demo_content::add_post(array(
	'title' => 'Influencer reveals extent of online trolling',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_turn_your_instagram_into_a_revenue_generating_machine_id = td_demo_content::add_post(array(
	'title' => 'Turn your Instagram into a revenue generating machine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_marketing_id,),
));

$post_td_post_has_the_wild_west_of_influencers_finally_been_tamed_id = td_demo_content::add_post(array(
	'title' => 'Has the wild west of influencers finally been tamed?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_marketing_id,),
));

$post_td_post_hotel_sends_out_fake_bill_to_blogger_for_exposure_id = td_demo_content::add_post(array(
	'title' => 'Hotel sends out fake bill to blogger for exposure',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_marketing_id,),
));

$post_td_post_social_media_stars_are_the_key_to_fashions_future_id = td_demo_content::add_post(array(
	'title' => 'Social media stars are the key to fashion\'s future',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_marketing_id,),
));

$post_td_post_influencers_face_renewed_scrutiny_over_advertising_id = td_demo_content::add_post(array(
	'title' => 'Influencers face renewed scrutiny over advertising',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_marketing_id,),
));

$post_td_post_successful_entrepreneurs_know_when_to_move_on_id = td_demo_content::add_post(array(
	'title' => 'Successful entrepreneurs know when to move on',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_business_id,),
));

$post_td_post_how_39_major_businesses_use_instagram_stories_id = td_demo_content::add_post(array(
	'title' => 'How 39 major businesses use Instagram stories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_business_id,),
));

$post_td_post_ecommerce_brand_creates_a_strong_community_id = td_demo_content::add_post(array(
	'title' => 'Ecommerce brand creates a strong community',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_business_id,),
));

$post_td_post_the_biggest_mistakes_girls_make_on_instagram_id = td_demo_content::add_post(array(
	'title' => 'The biggest mistakes girls make on Instagram',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_business_id,),
));

$post_td_post_fake_engagement_is_only_half_the_problem_id = td_demo_content::add_post(array(
	'title' => 'Fake engagement is only half the problem',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_business_id,),
));

$post_td_post_using_instagram_to_promote_your_youtube_videos_id = td_demo_content::add_post(array(
	'title' => 'Using Instagram to promote your YouTube videos',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fresh_id,),
));

$post_td_post_find_out_who_is_behind_the_post_in_these_campaigns_id = td_demo_content::add_post(array(
	'title' => 'Find out who is behind the post in these campaigns',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fresh_id,),
));

$post_td_post_how_to_successfully_execute_influencer_strategies_id = td_demo_content::add_post(array(
	'title' => 'How to successfully execute influencer strategies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fresh_id,),
));

$post_td_post_unconventional_influencers_will_get_more_popular_id = td_demo_content::add_post(array(
	'title' => 'Unconventional influencers will get more popular',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fresh_id,),
));

$post_td_post_teens_tend_to_ditch_facebook_over_instagram_id = td_demo_content::add_post(array(
	'title' => 'Teens tend to ditch Facebook over Instagram',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fresh_id,),
));

$post_td_post_15_must_follow_instagram_accounts_this_fall_id = td_demo_content::add_post(array(
	'title' => '15 must follow Instagram accounts this fall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_stars_id,),
));

$post_td_post_newcommer_dj_built_his_community_in_2_years_id = td_demo_content::add_post(array(
	'title' => 'Newcommer DJ built his community in 2 years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_stars_id,),
));

$post_td_post_she_built_her_profile_into_a_growing_empire_id = td_demo_content::add_post(array(
	'title' => 'She built her profile into a growing empire',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_stars_id,),
));

$post_td_post_instagram_women_dramatically_out_earn_men_id = td_demo_content::add_post(array(
	'title' => 'Instagram women dramatically out-earn men',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_stars_id,),
));

$post_td_post_years_instagram_richest_stars_revealed_id = td_demo_content::add_post(array(
	'title' => 'Year\'s Instagram richest stars revealed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_stars_id,),
));

$post_td_post_two_girls_turned_instagram_into_a_full_time_job_id = td_demo_content::add_post(array(
	'title' => 'Two girls turned Instagram into a full time job',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_newcommers_id,),
));

$post_td_post_how_i_got_13000_instagram_followers_in_one_month_id = td_demo_content::add_post(array(
	'title' => 'How I got 13,000 Instagram followers in one month',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_newcommers_id,),
));

$post_td_post_how_to_grow_your_instagram_using_quality_content_id = td_demo_content::add_post(array(
	'title' => 'How to grow your Instagram using quality content',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_newcommers_id,),
));

$post_td_post_millennials_will_go_to_extreme_lengths_for_fame_id = td_demo_content::add_post(array(
	'title' => 'Millennials will go to extreme lengths for fame',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_newcommers_id,),
));

$post_td_post_users_are_setting_up_pods_to_gain_followers_id = td_demo_content::add_post(array(
	'title' => 'Users are setting up pods to gain followers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_newcommers_id,),
));

$post_td_post_thinking_beyond_social_with_influencer_fashion_posts_id = td_demo_content::add_post(array(
	'title' => 'Thinking beyond social with influencer fashion posts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_how_to_become_a_fashion_influencer_from_your_own_home_id = td_demo_content::add_post(array(
	'title' => 'How to become a fashion influencer from your own home',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_style_influencers_are_considered_experts_in_fashion_id = td_demo_content::add_post(array(
	'title' => 'Style influencers are considered experts in fashion',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_passion_for_fashion_turned_into_a_freelance_career_id = td_demo_content::add_post(array(
	'title' => 'Passion for fashion turned into a freelance career',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_fashion_stars_are_earning_up_to_50000_per_post_id = td_demo_content::add_post(array(
	'title' => 'Fashion stars are earning up to $50,000 per post',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_how_former_tv_producer_developed_a_social_media_empire_id = td_demo_content::add_post(array(
	'title' => 'How former TV producer developed a social media empire',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_men_id,),
));

$post_td_post_professor_makes_more_money_from_instagram_than_college_id = td_demo_content::add_post(array(
	'title' => 'Professor makes more money from Instagram than college',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_men_id,),
));

$post_td_post_the_hot_couple_of_instagram_share_what_they_learned_id = td_demo_content::add_post(array(
	'title' => 'The \'Hot Couple\' of Instagram share what they learned',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_men_id,),
));

$post_td_post_we_asked_the_best_male_influencers_talk_pricing_id = td_demo_content::add_post(array(
	'title' => 'We asked the best: male influencers talk pricing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_men_id,),
));

$post_td_post_photographer_snaps_gorgeous_photos_out_in_nature_id = td_demo_content::add_post(array(
	'title' => 'Photographer snaps gorgeous photos out in nature',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_men_id,),
));

$post_td_post_most_influencial_women_of_instagram_last_year_id = td_demo_content::add_post(array(
	'title' => 'Most influencial women of Instagram last year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_women_id,),
));

$post_td_post_girl_has_an_instagram_following_of_1_7_million_id = td_demo_content::add_post(array(
	'title' => 'Girl has an Instagram following of 1.7 Million',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_women_id,),
));

$post_td_post_the_lessons_we_all_learnt_from_fyre_festival_id = td_demo_content::add_post(array(
	'title' => 'The lessons we all learnt from Fyre festival',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_women_id,),
));

$post_td_post_jen_kendall_kicked_off_american_airlines_flight_id = td_demo_content::add_post(array(
	'title' => 'Jen Kendall kicked off American Airlines flight',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_women_id,),
));

$post_td_post_instagram_mum_celebrities_are_being_criticised_id = td_demo_content::add_post(array(
	'title' => 'Instagram mum celebrities are being criticised',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_women_id,),
));

$post_best_chance_to_increase_your_followers_id = td_demo_content::add_post(array(
	'title' => 'Best chance to increase your followers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));

$post_td_post_the_weirdest_places_ashes_have_been_scattered_id = td_demo_content::add_post(array(
	'title' => 'The weirdest places ashes have been scattered',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));

$post_td_post_kristen_stewart_interview_at_the_toronto_festival_id = td_demo_content::add_post(array(
	'title' => 'Kristen Stewart interview at the Toronto festival',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));

$post_td_post_the_first_brand_to_get_an_apple_music_outfit_line_id = td_demo_content::add_post(array(
	'title' => 'The first brand to get an Apple Music outfit line',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));

$post_td_post_the_top_10_trips_of_a_lifetime_yu_should_take_id = td_demo_content::add_post(array(
	'title' => 'The top 10 trips of a lifetime yu should take',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));

$post_td_post_popular_celebrity_baby_names_list_of_the_millennium_id = td_demo_content::add_post(array(
	'title' => 'Popular celebrity baby names list of the millennium',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_business_id,$cat_fashion_id,$cat_fresh_id,$cat_lifestyle_id,$cat_marketing_id,$cat_men_id,$cat_newcommers_id,$cat_stars_id,$cat_women_id,),
));


/*  ----------------------------------------------------------------------------
	MENUS
*/

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');
$menu_td_demo_header_menu_extra_id = td_demo_menus::create_menu('td-demo-header-menu-extra', '');
$menu_td_demo_top_menu_id = td_demo_menus::create_menu('td-demo-top-menu', '');


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
update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_extra_id );

$template_footer_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


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
	'title' => 'Style',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_style_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Business',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_business_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Lifestyle',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_lifestyle_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Marketing',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_marketing_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Fresh',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_fresh_id,
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Business',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_business_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Fresh',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_fresh_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Lifestyle',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_lifestyle_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Marketing',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_marketing_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Style',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_style_id,
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
	'title' => 'Contact',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
	'title' => 'About',
	'add_to_menu_id' => $menu_td_demo_top_menu_id,
	'url' => '#',
	'parent_id' => ''
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Popular',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_style_id,
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
