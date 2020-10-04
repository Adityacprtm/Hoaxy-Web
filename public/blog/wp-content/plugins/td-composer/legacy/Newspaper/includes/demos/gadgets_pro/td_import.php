<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_audio_id = td_demo_category::add_category(array(
	'category_name' => 'Audio',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_1',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_computing_id = td_demo_category::add_category(array(
	'category_name' => 'Computing',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_drones_id = td_demo_category::add_category(array(
	'category_name' => 'Drones',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
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

$cat_gaming_id = td_demo_category::add_category(array(
	'category_name' => 'Gaming',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_5',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_gear_id = td_demo_category::add_category(array(
	'category_name' => 'Gear',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_4',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_internet_id = td_demo_category::add_category(array(
	'category_name' => 'Internet',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_6',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_phones_id = td_demo_category::add_category(array(
	'category_name' => 'Phones',
	'parent_id' => $cat_gear_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_7',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_photography_id = td_demo_category::add_category(array(
	'category_name' => 'Photography',
	'parent_id' => $cat_gear_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_8',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_security_id = td_demo_category::add_category(array(
	'category_name' => 'Security',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_9',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_smart_home_id = td_demo_category::add_category(array(
	'category_name' => 'Smart Home',
	'parent_id' => $cat_gear_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_10',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_social_networks_id = td_demo_category::add_category(array(
	'category_name' => 'Social Networks',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_1',
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
	'parent_id' => $cat_gear_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_wearables_id = td_demo_category::add_category(array(
	'category_name' => 'Wearables',
	'parent_id' => $cat_gear_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
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
$post_td_post_why_apples_iphone_has_some_security_professionals_worried_id = td_demo_content::add_post(array(
	'title' => 'Why Apple\'s iPhone Has Some Security Professionals Worried',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_security_id,),
));

$post_td_post_this_new_senate_bill_might_ban_unbreakable_encryption_systems_id = td_demo_content::add_post(array(
	'title' => 'This New Senate Bill Might Ban Unbreakable Encryption Systems',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_security_id,),
));

$post_td_post_12_computer_security_mistakes_youre_probably_making_right_now_id = td_demo_content::add_post(array(
	'title' => '12 Computer Security Mistakes You’re Probably Making Right Now',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_security_id,),
));

$post_td_post_beware_this_new_itunes_scam_can_instantly_steal_your_identity_id = td_demo_content::add_post(array(
	'title' => 'Beware: This New iTunes Scam Can Instantly Steal Your Identity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_security_id,),
));

$post_td_post_3_looming_smartphone_security_threats_that_should_scare_you_id = td_demo_content::add_post(array(
	'title' => '3 Looming Smartphone Security Threats That Should Scare You',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_security_id,),
));

$post_td_post_discover_a_better_camera_for_your_vlogging_on_youtube_id = td_demo_content::add_post(array(
	'title' => 'Discover a Better Camera for Your Vlogging on YouTube',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_social_networks_id,),
));

$post_td_post_your_instagram_could_soon_start_to_make_you_big_money_id = td_demo_content::add_post(array(
	'title' => 'Your Instagram Could Soon Start to Make You Big Money',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_social_networks_id,),
));

$post_td_post_heres_a_new_way_to_take_better_photos_for_socials_id = td_demo_content::add_post(array(
	'title' => 'Here\'s a New Way to Take Better Photos for Social Media',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_social_networks_id,),
));

$post_td_post_how_to_use_snapchat_to_capture_full_image_creativity_id = td_demo_content::add_post(array(
	'title' => 'How to Use Snapchat to Capture Full Image Creativity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_social_networks_id,),
));

$post_td_post_facebook_now_lets_you_post_high_quality_images_in_albums_id = td_demo_content::add_post(array(
	'title' => 'Facebook Now Lets You Post High Quality Images in Albums',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_social_networks_id,),
));

$post_td_post_ethernet_internet_connection_is_loosing_the_battle_with_wifi_id = td_demo_content::add_post(array(
	'title' => 'Ethernet Internet Connection is Loosing the Battle With WiFi',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_internet_id,),
));

$post_td_post_car_internet_wifi_connectivity_may_be_just_the_beginning_id = td_demo_content::add_post(array(
	'title' => 'Car Internet WiFi Connectivity May Be Just the Beginning',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_internet_id,),
));

$post_td_post_images_from_hundreds_of_pcs_control_systems_available_id = td_demo_content::add_post(array(
	'title' => 'Images from Hundreds of PCs & Control Systems Available',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_internet_id,),
));

$post_td_post_facebook_using_lasers_to_deliver_remote_area_internet_id = td_demo_content::add_post(array(
	'title' => 'Facebook Using Lasers to Deliver Remote Area Internet',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_internet_id,),
));

$post_td_post_tip_how_much_internet_speed_should_you_really_pay_for_id = td_demo_content::add_post(array(
	'title' => 'Tip: How Much Internet Speed Should You Really Pay For?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_internet_id,),
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

$post_td_post_intel_super_chip_mounted_on_the_latest_play_station_consoles_id = td_demo_content::add_post(array(
	'title' => 'Intel Super Chip Mounted on the Latest Play Station Consoles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_computing_id,),
));

$post_td_post_mac_book_review_consistent_improvements_make_a_big_difference_id = td_demo_content::add_post(array(
	'title' => 'Mac Book Review: Small Steps Can Make a Very Big Difference',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_computing_id,),
));

$post_td_post_this_new_software_gives_extreme_computing_power_for_home_stations_id = td_demo_content::add_post(array(
	'title' => 'New Software Gives Huge Computing Power for Home Stations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_computing_id,),
));

$post_td_post_in_ear_computer_filters_noise_to_make_you_a_better_listener_id = td_demo_content::add_post(array(
	'title' => 'In-Ear Computer Filters Noise to Make You a Better Listener',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_computing_id,),
));

$post_td_post_a_breakthough_for_this_year_new_5g_sattelite_data_transfer_id = td_demo_content::add_post(array(
	'title' => 'A Breakthough for This Year: New 5G Sattelite Data Transfer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_computing_id,),
));

$post_td_post_this_health_bracelet_will_change_the_industry_forever_id = td_demo_content::add_post(array(
	'title' => 'This Health Bracelet Will Change the Industry Forever',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_wearables_id,),
));

$post_td_post_10_best_ways_to_use_and_personalize_your_new_apple_watch_id = td_demo_content::add_post(array(
	'title' => '10 Best Ways to Use and Personalize Your New Apple Watch',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_wearables_id,),
));

$post_td_post_huawei_vr_good_looks_but_lacking_a_few_major_features_id = td_demo_content::add_post(array(
	'title' => 'Huawei VR: Good Looks, But Lacking a Few Major Features',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_wearables_id,),
));

$post_td_post_samsung_gear_vr_gets_refreshed_with_a_touch_controller_id = td_demo_content::add_post(array(
	'title' => 'Samsung Gear VR Gets Refreshed With a Touch Controller',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_wearables_id,),
));

$post_td_post_this_sexy_steel_smartwatch_keeps_ticking_when_turned_off_id = td_demo_content::add_post(array(
	'title' => 'This Sexy Steel Smartwatch Keeps Ticking When Turned Off',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_wearables_id,),
));

$post_td_post_manufacturer_plans_to_stop_delivering_secondary_camera_parts_id = td_demo_content::add_post(array(
	'title' => 'Manufacturer Plans to Stop Delivering Secondary Camera Parts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_apple_unveils_their_top_5_best_selling_movies_of_all_time_id = td_demo_content::add_post(array(
	'title' => 'Apple Unveils their Top 5 Best Selling Movies of All-Time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_virtual_reality_video_camera_will_be_launched_in_barcelona_id = td_demo_content::add_post(array(
	'title' => 'Virtual Reality Video Camera Will be Launched in Barcelona',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_virtual_reality_could_change_game_streaming_systems_forever_id = td_demo_content::add_post(array(
	'title' => 'Virtual Reality Could Change Game Streaming Systems Forever',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_this_new_gear_vr_controller_feels_like_its_from_the_future_id = td_demo_content::add_post(array(
	'title' => 'This New Gear VR Controller Feels Like it\'s From the Future',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_video_id,),
));

$post_td_post_modular_systems_will_keep_your_smart_home_from_becoming_obsolete_id = td_demo_content::add_post(array(
	'title' => 'New Systems Keep Your Smart Home from Becoming Obsolete',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_smart_home_id,),
));

$post_td_post_sneak_peak_best_smart_home_gadgets_features_to_install_today_id = td_demo_content::add_post(array(
	'title' => 'Sneak Peak: Best Smart Home Gadgets & Tech to Install Today',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_smart_home_id,),
));

$post_td_post_lights_guide_for_your_home_ultimate_led_vs_old_generations_id = td_demo_content::add_post(array(
	'title' => 'Lights Guide for your Home: Ultimate LED vs. Old Generations',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_smart_home_id,),
));

$post_td_post_malware_can_be_introduced_into_smart_homes_operating_systems_id = td_demo_content::add_post(array(
	'title' => 'Malware Can Be Introduced into Smart Home\'s Operating Systems',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_smart_home_id,),
));

$post_td_post_meet_the_next_big_thing_for_ultimate_confort_in_smart_homes_id = td_demo_content::add_post(array(
	'title' => 'Meet the Next Big Thing for Ultimate Confort in Smart Homes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_smart_home_id,),
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
	'title' => 'How to Share Multiple Images and Videos in Insta Story',
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

$post_td_post_all_you_need_to_know_about_the_next_global_smartphone_event_id = td_demo_content::add_post(array(
	'title' => 'All You Need to Know About the Next Global Smartphone Event',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_phones_id,),
));

$post_td_post_top_tip_how_to_best_use_snapchat_on_iphone_and_android_id = td_demo_content::add_post(array(
	'title' => 'Top Tip: How to Best Use Snapchat on iPhone and Android',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_phones_id,),
));

$post_td_post_apples_next_smartphones_may_have_full_screens_with_no_bezels_id = td_demo_content::add_post(array(
	'title' => 'Apple\'s Next Smartphones May Have Full Screens with no Bezels',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_phones_id,),
));

$post_td_post_how_iphone_mastered_fast_charging_and_retained_lightning_port_id = td_demo_content::add_post(array(
	'title' => 'How iPhone Mastered Fast Charging and Retained Lightning Port',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_phones_id,),
));

$post_td_post_the_new_google_pixel_has_arrived_in_the_premium_segment_id = td_demo_content::add_post(array(
	'title' => 'The New Google Pixel Has Arrived in the Premium Segment',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_phones_id,),
));

$post_td_post_your_next_choice_10_drones_for_kids_ranked_best_to_worst_id = td_demo_content::add_post(array(
	'title' => 'Your Next Choice: 10 Drones for Kids Ranked Best to Worst',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_drones_id,),
));

$post_td_post_intruder_in_your_home_the_alarm_will_release_the_drones_id = td_demo_content::add_post(array(
	'title' => 'Intruder in Your Home? The Alarm Will Release the Drones',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_drones_id,),
));

$post_td_post_camera_passport_review_you_can_take_this_drone_anywhere_id = td_demo_content::add_post(array(
	'title' => 'Camera Passport Review: You Can Take This Drone Anywhere',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_drones_id,),
));

$post_td_post_this_new_underwater_drone_is_your_own_personal_submarine_id = td_demo_content::add_post(array(
	'title' => 'This New Underwater Drone Is Your Own Personal Submarine',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_drones_id,),
));

$post_td_post_air_hogs_drone_gives_you_a_birds_eye_view_in_vr_mode_id = td_demo_content::add_post(array(
	'title' => 'Air Hogs Drone Gives You a Bird\'s-Eye View in VR Mode',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_drones_id,),
));

$post_td_post_the_smart_invisible_wireless_earphones_are_a_real_breakthrough_id = td_demo_content::add_post(array(
	'title' => 'The Smart Invisible Wireless Earphones Are a Real Breakthrough',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_audio_id,),
));

$post_td_post_best_smart_surround_earphones_for_your_next_workout_session_id = td_demo_content::add_post(array(
	'title' => 'Best Smart Surround Earphones for Your Next Workout Session',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_audio_id,),
));

$post_td_post_how_to_save_100_on_amazons_top_selling_bose_audio_system_id = td_demo_content::add_post(array(
	'title' => 'How to Save $100 on Amazon\'s Top-Selling Bose Audio System',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_audio_id,),
));

$post_td_post_discover_the_9_best_live_sets_to_stream_share_right_now_id = td_demo_content::add_post(array(
	'title' => 'Discover the 9 Best Live Sets to Stream & Share Right Now',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_audio_id,),
));

$post_td_post_most_anticipated_audio_gadgets_this_fall_full_specs_and_tests_id = td_demo_content::add_post(array(
	'title' => 'Most Anticipated Audio Gadgets this Fall: Full Specs and Tests',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_audio_id,),
));

$post_why_should_you_consider_a_mobile_first_development_strategy_id = td_demo_content::add_post(array(
	'title' => 'Why Should You Consider a Mobile First Development Strategy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_amd_have_done_it_again_see_how_their_new_processor_tests_out_id = td_demo_content::add_post(array(
	'title' => 'AMD Have Done It Again - See How Their New Processor Tests Out',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_the_best_selfie_camera_of_next_year_flagship_phones_id = td_demo_content::add_post(array(
	'title' => 'The Best Selfie Camera of Next Year Flagship Phones',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_challenge_yourself_and_build_your_brand_to_be_competitive_id = td_demo_content::add_post(array(
	'title' => 'Challenge Yourself and Build Your Brand to Be Competitive',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_the_best_website_experience_for_housing_platforms_id = td_demo_content::add_post(array(
	'title' => 'The Best Website Experience for Housing Platforms',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_how_to_dramatically_increase_session_time_on_your_website_id = td_demo_content::add_post(array(
	'title' => 'How to Dramatically Increase Session Time on Your Website',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));

$post_10_best_websites_to_browse_during_weekend_hours_id = td_demo_content::add_post(array(
	'title' => '10 Best Websites to Browse During Weekend Hours',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_audio_id,$cat_computing_id,$cat_drones_id,$cat_gaming_id,$cat_internet_id,$cat_phones_id,$cat_photography_id,$cat_security_id,$cat_smart_home_id,$cat_social_networks_id,$cat_video_id,$cat_wearables_id,),
));



/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_main_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_other_id = td_demo_menus::create_menu('td-demo-footer-menu', '');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_header_template_white_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template White',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_white_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_white_id, 'header_mobile_menu_id', $menu_main_id );


$template_header_template_transparent_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Transparent',
    'file' => 'header_cloud_template_transparent.txt',
    'template_type' => 'header',
));
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_transparent_id, 'header_mobile_menu_id', $menu_main_id );

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


$template_search_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Author Template',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


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


$template_header_template_transparent_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Transparent',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
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
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_main_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Gear',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_gear_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link(array(
	'title' => 'Topics',
	'add_to_menu_id' => $menu_main_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Social Networks',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_social_networks_id,
	'parent_id' => $menu_item_2_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Gaming',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_gaming_id,
	'parent_id' => $menu_item_2_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Internet',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_internet_id,
	'parent_id' => $menu_item_2_id
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Computing',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_computing_id,
	'parent_id' => $menu_item_2_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Security',
	'add_to_menu_id' => $menu_main_id,
	'category_id' => $cat_security_id,
	'parent_id' => $menu_item_2_id
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_other_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Computing',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_computing_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Gaming',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_gaming_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Gear',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_gear_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Internet',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_internet_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Security',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_security_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Social Networks',
	'add_to_menu_id' => $menu_other_id,
	'category_id' => $cat_social_networks_id,
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
