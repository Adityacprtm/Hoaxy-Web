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

$cat_vision_id = td_demo_category::add_category(array(
    'category_name' => 'Vision',
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

$cat_advice_id = td_demo_category::add_category(array(
	'category_name' => 'Advice',
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

$cat_art_id = td_demo_category::add_category(array(
	'category_name' => 'Art',
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

$cat_beauty_id = td_demo_category::add_category(array(
	'category_name' => 'Beauty',
	'parent_id' => $cat_vision_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_decor_id = td_demo_category::add_category(array(
	'category_name' => 'Decor',
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
	'parent_id' => $cat_vision_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));


$cat_guides_id = td_demo_category::add_category(array(
	'category_name' => 'Guides',
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

$cat_hairstyles_id = td_demo_category::add_category(array(
	'category_name' => 'Hairstyles',
	'parent_id' => $cat_vision_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_media_id = td_demo_category::add_category(array(
	'category_name' => 'Media',
	'parent_id' => $cat_vision_id,
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

$cat_tips_tricks_id = td_demo_category::add_category(array(
	'category_name' => 'Tips &amp; Tricks',
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




/*  ---------------------------------------------------------------------------- 
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/
$post_td_post_the_colors_of_happiness_and_peace_lets_pastel_it_up_id = td_demo_content::add_post(array(
	'title' => 'The Colors of Happiness and Peace: Let\'s Pastel it Up',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_reflective_materials_and_how_to_best_work_with_them_id = td_demo_content::add_post(array(
	'title' => 'Reflective Materials and How to Best Work with Them',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_professional_outfit_photoshoot_revealing_a_goddess_id = td_demo_content::add_post(array(
	'title' => 'Professional Outfit Photoshoot: Revealing a Goddess',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_using_tripod_lights_for_product_shots_from_above_id = td_demo_content::add_post(array(
	'title' => 'Using Tripod Lights for Product Shots from Above',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_facial_expressions_getting_the_greatest_angle_for_it_id = td_demo_content::add_post(array(
	'title' => 'Facial Expressions: Getting the Greatest Angle for it',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_dont_self_medicate_always_go_to_a_doctor_and_heres_why_id = td_demo_content::add_post(array(
	'title' => 'Don\'t Self-Medicate: Always Go See a Doctor & Here\'s Why',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_10_great_techniques_to_help_you_sleep_better_at_night_id = td_demo_content::add_post(array(
	'title' => '10 Great Techniques to Help you Sleep Better at Night',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_celebrating_your_birthday_at_home_throwing_a_party_for_yourself_id = td_demo_content::add_post(array(
	'title' => 'Celebrating your Birthday at Home by Doing What You Love',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_how_loneliness_could_be_crippling_getting_better_advice_id = td_demo_content::add_post(array(
	'title' => 'How Loneliness Could be Crippling: Getting Better & Advice',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_why_travelling_in_2020_might_not_be_a_very_good_idea_id = td_demo_content::add_post(array(
	'title' => 'Why Travelling in 2020 Might not Be a Very Good Idea',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_20_tips_and_tricks_to_take_better_selfies_at_home_id = td_demo_content::add_post(array(
	'title' => '20 Tips and Tricks to Take Better Selfies At Home',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_guides_id,),
));

$post_td_post_coping_with_life_when_life_gives_you_lemons_make_lemonade_id = td_demo_content::add_post(array(
	'title' => 'When Life Gives you Lemons Make Lemonade',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_guides_id,),
));

$post_td_post_turtlenecks_why_theyre_coming_back_in_style_id = td_demo_content::add_post(array(
	'title' => 'Turtlenecks: Why They\'re Coming Back in Style',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_guides_id,),
));

$post_td_post_how_to_get_started_on_your_first_tennis_lessons_id = td_demo_content::add_post(array(
	'title' => 'How to Get Started on Your First Tennis Lessons',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_guides_id,),
));

$post_td_post_find_out_what_type_of_hat_suits_your_face_shape_id = td_demo_content::add_post(array(
	'title' => 'Find Out What Type of Hat Suits your Face Shape',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_guides_id,),
));

$post_td_post_travelling_tips_creating_a_catchy_music_playlist_for_the_ride_id = td_demo_content::add_post(array(
	'title' => 'Travelling Tips: Creating a Catchy Music Playlist for the Ride',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_tips_tricks_id,),
));

$post_td_post_how_i_became_a_professional_photographer_and_you_can_too_id = td_demo_content::add_post(array(
	'title' => 'How I Became a Professional Photographer and You Can, Too!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_tips_tricks_id,),
));

$post_td_post_landscape_photography_a_list_of_dos_and_donts_id = td_demo_content::add_post(array(
	'title' => 'Landscape Photography - a list of Do\'s and Don\'ts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_tips_tricks_id,),
));

$post_td_post_taking_architectural_photos_how_to_best_frame_buildings_id = td_demo_content::add_post(array(
	'title' => 'Taking Architectural Photos: How to Best Frame Buildings',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_tips_tricks_id,),
));

$post_td_post_dress_and_style_tips_on_wearing_a_fur_vest_or_jacket_id = td_demo_content::add_post(array(
	'title' => 'Dress and Style Tips on Wearing a Fur Vest or Jacket',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_tips_tricks_id,),
));

$post_td_post_taking_shape_in_the_vr_world_making_your_home_ultra_modern_id = td_demo_content::add_post(array(
	'title' => 'Taking Shape in the VR World: Making your Home Ultra Modern',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_decor_id,),
));

$post_td_post_are_you_at_a_loss_when_it_comes_to_decorating_heres_a_guide_for_you_id = td_demo_content::add_post(array(
	'title' => 'Are you At a Loss When it Comes to Decorating? Here\'s a Guide for You',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_decor_id,),
));

$post_td_post_how_to_freshen_up_any_room_of_the_house_pick_flower_bouquets_id = td_demo_content::add_post(array(
	'title' => 'How to Freshen up Any Room of the House: Pick Flower Bouquets',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_decor_id,),
));

$post_td_post_what_do_i_have_in_my_purse_essentials_from_a_to_z_id = td_demo_content::add_post(array(
	'title' => 'What do I Have in My Purse? Essentials from A to Z',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_decor_id,),
));

$post_td_post_accessorizing_done_right_prepare_for_the_summer_in_style_id = td_demo_content::add_post(array(
	'title' => 'Accessorizing Done Right: Prepare for the Summer in Style',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_decor_id,),
));

$post_td_post_shy_cast_talking_about_insecurities_strenghtens_your_art_id = td_demo_content::add_post(array(
	'title' => 'Shy Cast: Talking About Insecurities Strenghtens your Art',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_taking_a_closer_look_at_the_top_10_galleries_all_over_the_world_id = td_demo_content::add_post(array(
	'title' => 'Taking a Closer Look at the Top 10 Galleries All Over the World',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_how_modern_art_has_changed_throughout_the_years_id = td_demo_content::add_post(array(
	'title' => 'How Modern Art Has Changed Throughout the Years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_posing_in_motion_why_this_helps_you_take_the_best_shot_id = td_demo_content::add_post(array(
	'title' => 'Posing in Motion - Why This Helps you Take the Best Shot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_neon_bright_lights_how_they_affect_any_selfie_id = td_demo_content::add_post(array(
	'title' => 'Neon Bright Lights: How They Affect Any Selfie',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_fun_hairstyles_for_you_and_your_friends_partying_time_id = td_demo_content::add_post(array(
	'title' => 'Fun Hairstyles for You & Your Friends: Partying Time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_hairstyles_id,),
));

$post_td_post_untangled_taking_care_of_frizziness_after_showering_id = td_demo_content::add_post(array(
	'title' => 'Untangled: Taking Care of Frizziness after Showering',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_hairstyles_id,),
));

$post_td_post_coiffures_for_thin_hair_that_suit_any_face_shape_id = td_demo_content::add_post(array(
	'title' => 'Coiffures for Thin Hair that Suit Any Face Shape',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_hairstyles_id,),
));

$post_td_post_taking_care_of_long_locks_serums_brushes_shampooing_id = td_demo_content::add_post(array(
	'title' => 'Taking Care of Long Locks: Serums, Brushes, Shampooing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_hairstyles_id,),
));

$post_td_post_how_does_being_happy_affect_your_hairs_growth_id = td_demo_content::add_post(array(
	'title' => 'How Does Being Happy Affect your Hair\'s Growth?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_hairstyles_id,),
));

$post_td_post_the_style_and_beauty_diaries_may_2020_edition_id = td_demo_content::add_post(array(
	'title' => 'The Style and Beauty Diaries: May 2020 Edition',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_media_id,),
));

$post_td_post_how_sharing_your_burdens_with_a_friend_helps_your_psyche_id = td_demo_content::add_post(array(
	'title' => 'How Sharing Your Burdens with a Friend Helps Your Psyche',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_media_id,),
));

$post_td_post_spice_up_your_life_with_balloons_and_other_cheerful_decor_id = td_demo_content::add_post(array(
	'title' => 'Spice Up Your Life with Balloons and Other Cheerful Decor',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_media_id,),
));

$post_td_post_get_a_change_in_perspective_and_take_amazing_photos_id = td_demo_content::add_post(array(
	'title' => 'Get a Change in Perspective and Take Amazing Photos',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_media_id,),
));

$post_td_post_photos_in_dark_places_lighting_is_everything_id = td_demo_content::add_post(array(
	'title' => 'Photos in Dark Places: Lighting is Everything',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_media_id,),
));

$post_td_post_wear_hats_to_protect_your_hair_from_the_freezing_cold_id = td_demo_content::add_post(array(
	'title' => 'Wear Hats to Protect your Hair from the Freezing Cold',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_dont_hide_behind_your_glasses_embrace_them_id = td_demo_content::add_post(array(
	'title' => 'Don\'t Hide Behind your Glasses: Embrace Them!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_being_happy_is_the_secret_to_clear_and_perfect_skin_id = td_demo_content::add_post(array(
	'title' => 'Being Happy is the Secret to Clear and Perfect Skin',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_why_flower_crowns_are_coming_back_this_spring_summer_of_2020_id = td_demo_content::add_post(array(
	'title' => 'Why Flower Crowns are Coming Back this Spring/Summer of 2020',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_how_makeup_can_let_your_inner_beauty_shine_through_id = td_demo_content::add_post(array(
	'title' => 'How Makeup Can Let your Inner Beauty Shine Through',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_td_post_pastel_lavender_colors_are_whats_hot_right_now_id = td_demo_content::add_post(array(
	'title' => 'Pastel Lavender Colors are What\'s Hot Right Now',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_summer_outfits_that_make_a_statement_from_across_the_room_id = td_demo_content::add_post(array(
	'title' => 'Summer Outfits that Make a Statement from Across the Room',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_leather_jackets_sign_me_up_clothing_item_of_the_decade_id = td_demo_content::add_post(array(
	'title' => 'Leather Jackets? Sign Me Up - Clothing Item of the Decade',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_long_handmade_earrings_bought_online_are_in_id = td_demo_content::add_post(array(
	'title' => 'Long Handmade Earrings Bought Online Are In',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_a_fluffy_blouse_can_make_or_break_an_entire_outfit_id = td_demo_content::add_post(array(
	'title' => 'A Fluffy Blouse Can Make or Break an Entire Outfit',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_showcasing_a_story_through_the_perfect_photo_id = td_demo_content::add_post(array(
	'title' => 'Showcasing a Story Through the Perfect Photo',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_advice_id,$cat_art_id,$cat_beauty_id,$cat_decor_id,$cat_fashion_id,$cat_guides_id,$cat_hairstyles_id,$cat_media_id,$cat_photography_id,$cat_tips_tricks_id,),
));

$post_td_post_color_background_and_professional_clothes_photoshoot_id = td_demo_content::add_post(array(
	'title' => 'Color Background and Professional Clothes Photoshoot',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_advice_id,$cat_art_id,$cat_beauty_id,$cat_decor_id,$cat_fashion_id,$cat_guides_id,$cat_hairstyles_id,$cat_media_id,$cat_photography_id,$cat_tips_tricks_id,),
));

$post_td_post_5_tips_on_taking_the_best_close_up_shots_of_earrings_id = td_demo_content::add_post(array(
	'title' => '5 Tips on Taking the Best Close-up Shots of Earrings',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_advice_id,$cat_art_id,$cat_beauty_id,$cat_decor_id,$cat_fashion_id,$cat_guides_id,$cat_hairstyles_id,$cat_media_id,$cat_photography_id,$cat_tips_tricks_id,),
));

$post_td_post_how_to_tell_your_model_to_pose_on_a_chair_id = td_demo_content::add_post(array(
	'title' => 'How to Tell your Model to Pose on a Chair',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_advice_id,$cat_art_id,$cat_beauty_id,$cat_decor_id,$cat_fashion_id,$cat_guides_id,$cat_hairstyles_id,$cat_media_id,$cat_photography_id,$cat_tips_tricks_id,),
));

$post_td_post_doing_a_product_placement_ad_in_style_with_beanies_id = td_demo_content::add_post(array(
	'title' => 'Doing a Product Placement Ad In Style with Beanies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_advice_id,$cat_art_id,$cat_beauty_id,$cat_decor_id,$cat_fashion_id,$cat_guides_id,$cat_hairstyles_id,$cat_media_id,$cat_photography_id,$cat_tips_tricks_id,),
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
	'title' => 'General',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_general_id,
	'parent_id' => ''
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Vision',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_vision_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Photography',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_photography_id,
	'parent_id' => ''
), true);


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Single Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Footer Template',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Mintyside PRO Header Template',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);





/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_9');

td_demo_misc::update_background_login('tdx_pic_10');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
