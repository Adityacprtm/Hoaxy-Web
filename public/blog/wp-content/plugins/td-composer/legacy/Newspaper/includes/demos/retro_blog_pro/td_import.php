<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/

$cat_general_id = td_demo_category::add_category(array(
    'category_name' => 'General',
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

$cat_antiques_id = td_demo_category::add_category(array(
	'category_name' => 'Antiques',
	'parent_id' => $cat_general_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_arcade_id = td_demo_category::add_category(array(
	'category_name' => 'Arcade',
	'parent_id' => $cat_general_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_blog_id = td_demo_category::add_category(array(
	'category_name' => 'Blog',
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

$cat_books_id = td_demo_category::add_category(array(
	'category_name' => 'Books',
	'parent_id' => $cat_general_id,
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
	'parent_id' => $cat_blog_id,
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


$cat_lifestyle_id = td_demo_category::add_category(array(
	'category_name' => 'Lifestyle',
	'parent_id' => $cat_blog_id,
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
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_thoughts_id = td_demo_category::add_category(array(
	'category_name' => 'Thoughts',
	'parent_id' => $cat_blog_id,
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
$post_td_post_old_gaming_stations_that_you_shouldnt_ignore_id = td_demo_content::add_post(array(
	'title' => 'Old Gaming Stations That You Shouldn\'t Ignore',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_shoot_em_up_arcade_gaming_taken_to_a_new_level_id = td_demo_content::add_post(array(
	'title' => 'Shoot \'Em Up!: Arcade Gaming Taken to a New Level',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_ghosts_n_goblins_nes_playthrough_and_full_ending_revealed_id = td_demo_content::add_post(array(
	'title' => 'Ghosts n Goblins NES: Playthrough and Full Ending Revealed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_the_legend_of_zelda_the_minish_cap_mike_matei_review_id = td_demo_content::add_post(array(
	'title' => 'The Legend of Zelda: The Minish Cap - Mike Matei Review',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_game_gear_ninja_gaiden_full_playthrough_by_mike_matei_id = td_demo_content::add_post(array(
	'title' => 'Game Gear - Ninja Gaiden Full Playthrough by Mike Matei',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_gaming_id,),
));

$post_td_post_improve_your_self_confidence_with_these_4_self_help_books_id = td_demo_content::add_post(array(
	'title' => 'Improve Your Self-Confidence With These 4 Self-Help Books',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_my_current_reading_list_gardening_philosophy_and_fiction_id = td_demo_content::add_post(array(
	'title' => 'My Current Reading List: Gardening, Philosophy, and Fiction',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_top_5_authors_that_you_should_explore_further_id = td_demo_content::add_post(array(
	'title' => 'Top 5 Authors That You Should Explore Further',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_surrounding_myself_with_my_all_time_favorite_books_id = td_demo_content::add_post(array(
	'title' => 'Surrounding Myself with My All-Time Favorite Books',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_sports_magazines_throughout_the_decades_how_theyve_evolved_id = td_demo_content::add_post(array(
	'title' => 'Sports Magazines Throughout the Decades: How They\'ve Evolved',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_antique_film_camera_that_i_found_in_a_dusty_corner_of_a_shop_id = td_demo_content::add_post(array(
	'title' => 'Antique Film Camera that I Found in a Dusty Corner of a Shop',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_antiques_id,),
));

$post_td_post_landline_phones_that_were_the_predecessors_of_your_smartphones_id = td_demo_content::add_post(array(
	'title' => 'Landline Phones that Were the Predecessors of Your Smartphones',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_antiques_id,),
));

$post_td_post_hand_mirrors_to_inspire_you_and_your_vintage_soul_id = td_demo_content::add_post(array(
	'title' => 'Hand Mirrors to Inspire You and Your Vintage Soul',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_antiques_id,),
));

$post_td_post_local_antique_shop_finds_working_typewriter_id = td_demo_content::add_post(array(
	'title' => 'Local Antique Shop Finds: Working Typewriter',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_antiques_id,),
));

$post_td_post_how_to_amp_up_an_old_tv_set_and_make_it_connect_to_wifi_id = td_demo_content::add_post(array(
	'title' => 'How to Amp Up an Old Tv Set and Make it Connect to Wifi',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_antiques_id,),
));

$post_td_post_overwhelming_your_senses_bright_colors_flashing_lights_id = td_demo_content::add_post(array(
	'title' => 'Overwhelming Your Senses: Bright Colors, Flashing Lights',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_arcade_id,),
));

$post_td_post_5_best_co_op_games_that_any_arcade_can_offer_you_id = td_demo_content::add_post(array(
	'title' => '5 Best Co-Op Games that Any Arcade Can Offer You',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_arcade_id,),
));

$post_td_post_best_food_to_order_in_a_retro_style_restaurant_id = td_demo_content::add_post(array(
	'title' => 'Best Food to Order in a Retro Style Restaurant',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_arcade_id,),
));

$post_td_post_neon_bright_lights_and_their_appeal_throughout_the_ages_id = td_demo_content::add_post(array(
	'title' => 'Neon Bright Lights and Their Appeal Throughout the Ages',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_arcade_id,),
));

$post_td_post_what_to_try_out_on_your_first_time_in_an_arcade_id = td_demo_content::add_post(array(
	'title' => 'What to Try Out On your First Time in an Arcade',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_arcade_id,),
));

$post_td_post_a_camera_that_has_aged_well_despite_new_technology_id = td_demo_content::add_post(array(
	'title' => 'A Camera that Has Aged Well Despite New Technology',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_the_reasons_why_payphones_have_dropped_out_of_style_id = td_demo_content::add_post(array(
	'title' => 'The Reasons Why Payphones Have Dropped Out of Style',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_candies_that_will_leave_you_stunned_at_how_great_they_are_id = td_demo_content::add_post(array(
	'title' => 'Candies that Will Leave You Stunned at How Great They Are',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_ten_favorite_chocolate_bars_that_i_absolutely_adore_id = td_demo_content::add_post(array(
	'title' => 'Ten Favorite Chocolate Bars that I Absolutely Adore',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_fast_food_places_that_have_been_around_since_the_90s_id = td_demo_content::add_post(array(
	'title' => 'Fast Food Places that Have Been Around Since the 90s',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_top_5_retro_shoes_that_are_comfortable_and_durable_id = td_demo_content::add_post(array(
	'title' => 'Top 5 Retro Shoes that Are Comfortable and Durable',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_handmade_earrings_to_start_off_2020_just_right_id = td_demo_content::add_post(array(
	'title' => 'Handmade Earrings to Start Off 2020 Just Right',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_big_baggy_clothes_that_are_flattering_on_any_body_type_id = td_demo_content::add_post(array(
	'title' => 'Big Baggy Clothes that are Flattering On Any Body Type',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_trends_everyone_used_to_follow_back_in_the_90s_id = td_demo_content::add_post(array(
	'title' => 'Trends Everyone Used to Follow Back in the 90s',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_celebrating_fashion_icons_throughout_the_decades_id = td_demo_content::add_post(array(
	'title' => 'Celebrating Fashion Icons Throughout the Decades',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_compasses_and_tracking_where_youve_been_with_cardinal_points_id = td_demo_content::add_post(array(
	'title' => 'Compasses and Tracking Where You\'ve Been With Cardinal Points',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_learning_the_art_of_using_an_ink_pen_for_writing_letters_id = td_demo_content::add_post(array(
	'title' => 'Learning the Art Of Using an Ink Pen for Writing Letters',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_tips_on_buying_vintage_furniture_from_your_local_antique_shop_id = td_demo_content::add_post(array(
	'title' => 'Tips on Buying Vintage Furniture from your Local Antique Shop',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_arriving_to_a_date_in_style_old_bycicles_id = td_demo_content::add_post(array(
	'title' => 'Arriving to a Date in Style: Old Bycicles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_how_polaroid_rose_to_fame_with_their_instant_cameras_id = td_demo_content::add_post(array(
	'title' => 'How Polaroid Rose to Fame with Their Instant Cameras',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_td_post_comparing_sound_quality_between_an_early_mp3_player_and_a_vynil_id = td_demo_content::add_post(array(
	'title' => 'Comparing Sound Quality Between an Early Mp3 Player and a Vynil',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_retro_radio_stations_you_can_listen_to_in_2020_id = td_demo_content::add_post(array(
	'title' => 'Retro Radio Stations You Can Listen to in 2020',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_the_reason_behind_cassettes_recent_popularity_gain_id = td_demo_content::add_post(array(
	'title' => 'The Reason Behind Cassettes\' Recent Popularity Gain',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_why_im_investing_in_a_new_collection_of_vynils_id = td_demo_content::add_post(array(
	'title' => 'Why I\'m Investing in a New Collection of Vynils',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_top_10_best_turntables_that_you_can_buy_under_500_dollars_id = td_demo_content::add_post(array(
	'title' => 'Top 10 Best Turntables That You Can Buy Under 500 Dollars',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_music_id,),
));

$post_td_post_beating_super_mario_for_the_third_time_this_month_id = td_demo_content::add_post(array(
	'title' => 'Beating Super Mario for the Third Time This Month',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_antiques_id,$cat_arcade_id,$cat_books_id,$cat_fashion_id,$cat_gaming_id,$cat_lifestyle_id,$cat_music_id,$cat_thoughts_id,),
));

$post_td_post_how_does_the_new_nintendo_switch_stack_up_compared_to_the_64_id = td_demo_content::add_post(array(
	'title' => 'How Does the New Nintendo Switch Stack Up Compared to the 64?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_antiques_id,$cat_arcade_id,$cat_books_id,$cat_fashion_id,$cat_gaming_id,$cat_lifestyle_id,$cat_music_id,$cat_thoughts_id,),
));

$post_td_post_angry_video_game_nerd_indiana_jones_trilogy_dvd_edition_id = td_demo_content::add_post(array(
	'title' => 'Angry Video Game Nerd - Indiana Jones Trilogy, DVD edition',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_antiques_id,$cat_arcade_id,$cat_books_id,$cat_fashion_id,$cat_gaming_id,$cat_lifestyle_id,$cat_music_id,$cat_thoughts_id,),
));

$post_td_post_how_tetris_used_to_be_played_two_decades_ago_id = td_demo_content::add_post(array(
	'title' => 'How Tetris Used to be Played Two Decades Ago',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_antiques_id,$cat_arcade_id,$cat_books_id,$cat_fashion_id,$cat_gaming_id,$cat_lifestyle_id,$cat_music_id,$cat_thoughts_id,),
));

$post_td_post_handheld_games_that_were_popular_back_in_the_90s_id = td_demo_content::add_post(array(
	'title' => 'Handheld Games that Were Popular Back in the 90s',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_antiques_id,$cat_arcade_id,$cat_books_id,$cat_fashion_id,$cat_gaming_id,$cat_lifestyle_id,$cat_music_id,$cat_thoughts_id,),
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
	'title' => 'Homepage',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Blog',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_blog_id,
	'parent_id' => ''
), true);

$menu_td_demo_header_menu_extra_id = td_demo_menus::create_menu('td-demo-header-menu-extra', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
	'title' => 'General',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_general_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Gaming',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_gaming_id,
	'parent_id' => ''
), true);

$menu_td_demo_mobile_menu_id = td_demo_menus::create_menu('td-demo-mobile-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Homepage',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Blog',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_blog_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Fashion',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_fashion_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Lifestyle',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_lifestyle_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Music',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_music_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Thoughts',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_thoughts_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Gaming',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_gaming_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'General',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_general_id,
	'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Antiques',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_antiques_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Arcade',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_arcade_id,
	'parent_id' => $menu_item_7_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Books',
	'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
	'category_id' => $cat_books_id,
	'parent_id' => $menu_item_7_id
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Single Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Footer Template',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Retro Blog PRO Header Template',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);





/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_7');

td_demo_misc::update_background_login('tdx_pic_8');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
