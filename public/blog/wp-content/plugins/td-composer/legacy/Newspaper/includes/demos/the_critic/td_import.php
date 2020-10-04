<?php 



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_action_id = td_demo_category::add_category(array(
	'category_name' => 'Action',
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

$cat_book_reviews_id = td_demo_category::add_category(array(
	'category_name' => 'Book Reviews',
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

$cat_comedy_id = td_demo_category::add_category(array(
	'category_name' => 'Comedy',
	'parent_id' => $cat_book_reviews_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_8',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_drama_id = td_demo_category::add_category(array(
	'category_name' => 'Drama',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_10',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_fantasy_id = td_demo_category::add_category(array(
	'category_name' => 'Fantasy',
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

$cat_featured_id = td_demo_category::add_category(array(
	'category_name' => 'Featured',
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

$cat_horror_id = td_demo_category::add_category(array(
	'category_name' => 'Horror',
	'parent_id' => $cat_book_reviews_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_4',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_movie_reviews_id = td_demo_category::add_category(array(
	'category_name' => 'Movie Reviews',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_7',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_reading_id = td_demo_category::add_category(array(
	'category_name' => 'Reading',
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

$cat_romance_id = td_demo_category::add_category(array(
	'category_name' => 'Romance',
	'parent_id' => $cat_book_reviews_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_sci_fi_id = td_demo_category::add_category(array(
	'category_name' => 'Sci-Fi',
	'parent_id' => $cat_movie_reviews_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_9',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_thoughts_id = td_demo_category::add_category(array(
	'category_name' => 'Thoughts',
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



/*  ---------------------------------------------------------------------------- 
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/

$post_td_post_remembering_my_past_self_decisions_acceptance_id = td_demo_content::add_post(array(
    'title' => 'Remembering my Past Self & Decisions: Acceptance',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_action_id,$cat_comedy_id,$cat_drama_id,$cat_fantasy_id,$cat_horror_id,$cat_reading_id,$cat_romance_id,$cat_sci_fi_id,$cat_thoughts_id,),
));

$post_td_post_why_does_glitter_get_everywhere_daily_thoughts_id = td_demo_content::add_post(array(
    'title' => 'Why Does Glitter Get Everywhere? Daily Thoughts',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_action_id,$cat_comedy_id,$cat_drama_id,$cat_fantasy_id,$cat_horror_id,$cat_reading_id,$cat_romance_id,$cat_sci_fi_id,$cat_thoughts_id,),
));

$post_td_post_dye_your_life_blue_as_a_hair_color_today_id = td_demo_content::add_post(array(
    'title' => 'Dye Your Life: Blue as a Hair Color Today',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_action_id,$cat_comedy_id,$cat_drama_id,$cat_fantasy_id,$cat_horror_id,$cat_reading_id,$cat_romance_id,$cat_sci_fi_id,$cat_thoughts_id,),
));

$post_td_post_what_kind_of_video_games_amm_i_into_answers_id = td_demo_content::add_post(array(
    'title' => 'What Kind of Video Games Am I Into: Answers?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_action_id,$cat_comedy_id,$cat_drama_id,$cat_fantasy_id,$cat_horror_id,$cat_reading_id,$cat_romance_id,$cat_sci_fi_id,$cat_thoughts_id,),
));

$post_td_post_house_plants_i_have_and_how_i_take_care_of_them_id = td_demo_content::add_post(array(
    'title' => 'House Plants I have and How I take Care of Them',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_action_id,$cat_comedy_id,$cat_drama_id,$cat_fantasy_id,$cat_horror_id,$cat_reading_id,$cat_romance_id,$cat_sci_fi_id,$cat_thoughts_id,),
));

$post_td_post_cinnamon_rolls_recipe_how_i_baked_them_id = td_demo_content::add_post(array(
	'title' => 'Cinnamon Rolls Recipe: How I Baked Them',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_vacation_to_the_bahamas_beautiful_hotel_id = td_demo_content::add_post(array(
	'title' => 'Vacation to the Bahamas: Beautiful Hotel',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_top_3_favorite_fast_food_places_a_countdown_id = td_demo_content::add_post(array(
	'title' => 'Top 3 Favorite Fast Food Places: A Countdown',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_autumn_inspiration_why_i_love_this_season_id = td_demo_content::add_post(array(
	'title' => 'Autumn Inspiration: Why I Love This Season',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_what_to_do_with_fairy_lights_around_the_house_id = td_demo_content::add_post(array(
	'title' => 'What to Do with Fairy Lights Around the House',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_thoughts_id,),
));

$post_td_post_poems_of_a_time_long_gone_jekyl_lovalett_berry_id = td_demo_content::add_post(array(
	'title' => 'Poems of a Time Long Gone by Jekyl Lovalett Berry',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_reading_id,),
));

$post_td_post_slip_and_slide_down_the_line_written_by_daniel_lovit_id = td_demo_content::add_post(array(
	'title' => 'Slip and Slide Down the Line written by Daniel Lovit',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_reading_id,),
));

$post_td_post_a_boundless_leap_of_faith_and_in_time_by_andrew_morris_id = td_demo_content::add_post(array(
	'title' => 'A Boundless Leap of Faith and in Time by Andrew Morris',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_reading_id,),
));

$post_td_post_who_would_have_thought_it_would_turn_out_like_this_id = td_demo_content::add_post(array(
	'title' => 'Who Would Have Thought it Would Turn out Like This?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_reading_id,),
));

$post_td_post_the_outfit_of_the_past_a_sydney_memorial_book_id = td_demo_content::add_post(array(
	'title' => 'The Outfit of the Past, a Sydney Memorial Book',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_reading_id,),
));

$post_td_post_reliving_old_memories_with_morris_serenity_id = td_demo_content::add_post(array(
	'title' => 'Reliving Old Memories with Richard Morris\' Serenity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_drama_id,),
));

$post_td_post_rose_dimins_new_novel_my_makeups_all_wrong_id = td_demo_content::add_post(array(
	'title' => 'Rose Dimin\'s new novel, My Makeup\'s all wrong!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_comedy_id,),
));

$post_td_post_the_killer_in_the_night_by_matthew_addams_id = td_demo_content::add_post(array(
	'title' => 'The Killer in the Night by Matthew Addams',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_horror_id,),
));

$post_td_post_olivia_tydes_hanging_out_comedy_romance_id = td_demo_content::add_post(array(
	'title' => 'Olivia Tyde\'s Hanging Out Comedy Romance',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_romance_id,),
));

$post_td_post_divine_intervention_review_with_daniel_redwit_id = td_demo_content::add_post(array(
	'title' => 'Divine Intervention Review, with Daniel Redwit',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_action_id,),
));

$post_td_post_faerie_land_a_phantasmal_story_with_lilianne_demur_id = td_demo_content::add_post(array(
	'title' => 'Faerie Land, a phantasmal story with Lilianne Demur',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fantasy_id,),
));

$post_td_post_a_film_by_troy_leroy_selenium_with_ariel_lenor_id = td_demo_content::add_post(array(
	'title' => 'A film by Troy Leroy: Selenium with Ariel Lenor',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_drama_id,),
));

$post_td_post_benjamin_buckleys_lost_planet_with_mindy_hawford_id = td_demo_content::add_post(array(
	'title' => 'Benjamin Buckley\'s Lost Planet with Mindy Hawford',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_sci_fi_id,),
));

$post_td_post_the_art_of_saying_yes_written_by_david_leban_id = td_demo_content::add_post(array(
	'title' => 'The Art of Saying Yes written by David Leban',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_comedy_id,),
));

$post_td_post_the_princess_the_lost_diadem_by_livia_thelmon_id = td_demo_content::add_post(array(
	'title' => 'The Princess & the Lost Diadem by Livia Thelmon',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_horror_id,),
));

$post_td_post_a_real_tearjerker_our_fate_lies_by_olivia_reingold_id = td_demo_content::add_post(array(
	'title' => 'A real tearjerker: Our Fate Lies by Olivia Reingold',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_romance_id,),
));

$post_td_post_a_dangerous_game_dark_horme_now_in_theaters_id = td_demo_content::add_post(array(
	'title' => 'A Dangerous Game: Dark Horme, now in Theaters',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_action_id,),
));

$post_td_post_children_of_the_foresta_movie_starring_river_song_id = td_demo_content::add_post(array(
	'title' => 'Children of the Forest,a movie starring River Song',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fantasy_id,),
));

$post_td_post_heartwrenching_story_of_sorrows_ledge_id = td_demo_content::add_post(array(
	'title' => 'Heartwrenching Story of Sorrow\'s Ledge',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_drama_id,),
));

$post_td_post_dystopian_future_in_the_eyes_of_harry_deeply_disturbing_id = td_demo_content::add_post(array(
	'title' => 'Disturbing Dystopian Future, In the Eyes of Harry',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_sci_fi_id,),
));

$post_td_post_emil_dolovans_lets_skate_downtown_parody_id = td_demo_content::add_post(array(
	'title' => 'Emil Dolovan\'s Let\'s Skate downtown!, parody',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_comedy_id,),
));

$post_td_post_review_of_strangers_written_by_adam_jersey_id = td_demo_content::add_post(array(
	'title' => 'Review of Strangers, written by Adam Jersey',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_horror_id,),
));

$post_td_post_lavinia_montaine_an_unforgettable_journey_id = td_demo_content::add_post(array(
	'title' => 'Lavinia Montaine, An Unforgettable Journey',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_romance_id,),
));

$post_td_post_kevin_mcartur_and_atrium_loss_awe_inspiring_id = td_demo_content::add_post(array(
	'title' => 'Kevin Mcartur and Atrium Loss, awe-inspiring',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_action_id,),
));

$post_td_post_witchs_trial_potion_making_dark_fantasy_story_id = td_demo_content::add_post(array(
	'title' => 'Witch\'s Trial, potion-making, dark fantasy story',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fantasy_id,),
));

$post_td_post_ravenol_thysses_tragical_story_in_lavender_sky_id = td_demo_content::add_post(array(
	'title' => 'Ravenol Thysse\'s tragical story in Lavender Sky',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_drama_id,),
));

$post_td_post_willow_lane_now_in_theaters_abduction_severs_ties_id = td_demo_content::add_post(array(
	'title' => 'Willow Lane now in Theaters, abduction severs ties',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_sci_fi_id,),
));

$post_td_post_how_to_get_lost_on_a_short_hike_by_kevin_mcsprout_id = td_demo_content::add_post(array(
	'title' => 'How to Get Lost on a Short Hike by Kevin Mcsprout',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_comedy_id,),
));

$post_td_post_serendipitous_journey_oakland_cult_by_jim_pickings_id = td_demo_content::add_post(array(
	'title' => 'Serendipitous Journey, Oakland Cult by Jim Pickings',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_horror_id,),
));

$post_td_post_warm_by_your_side_written_by_adrien_hallock_id = td_demo_content::add_post(array(
	'title' => 'Warm by your Side, written by Adrien Hallock',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_romance_id,),
));

$post_td_post_flooded_horror_action_movie_with_paul_mchopkins_id = td_demo_content::add_post(array(
	'title' => 'Flooded, horror-action movie with Paul Mchopkins',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_action_id,),
));

$post_td_post_savathian_cult_lilia_thompsons_stunning_performance_id = td_demo_content::add_post(array(
	'title' => 'Savathian Cult, Lilia Thompson\'s stunning performance',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fantasy_id,),
));

$post_td_post_linear_misconception_what_if_aliens_lived_amongst_us_id = td_demo_content::add_post(array(
	'title' => 'Linear Misconception, What if Aliens Lived Amongst Us?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_sci_fi_id,),
));

$post_td_post_delores_campignones_just_a_christmas_story_id = td_demo_content::add_post(array(
	'title' => 'Delores Campignone\'s Just a Christmas Story',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_comedy_id,),
));

$post_td_post_freakshow_gravity_lane_by_emily_levind_id = td_demo_content::add_post(array(
	'title' => 'Freakshow: Gravity Lane by Emily Levind',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_horror_id,),
));

$post_td_post_an_eccentric_game_dramatic_romance_by_emilia_damon_id = td_demo_content::add_post(array(
	'title' => 'An Eccentric Game, dramatic romance, by Emilia Damon',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_romance_id,),
));

$post_td_post_clan_matters_a_film_by_christopher_rain_id = td_demo_content::add_post(array(
	'title' => 'Clan Matters, a film by Christopher Rain',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_action_id,),
));

$post_td_post_magical_ludens_moli_an_evil_wizards_tale_id = td_demo_content::add_post(array(
	'title' => 'Magical Ludens Moli, an evil wizard\'s tale',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fantasy_id,),
));

$post_td_post_gravity_the_drama_musical_now_in_theaters_id = td_demo_content::add_post(array(
	'title' => 'Gravity, the drama-musical now in Theaters',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_drama_id,),
));

$post_td_post_a_movie_by_lowliett_george_daylight_hunters_id = td_demo_content::add_post(array(
	'title' => 'A movie by Lowliett George: Daylight Hunters',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_sci_fi_id,),
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
$menu_critic_id = td_demo_menus::create_menu('td-demo-header-menu', '');


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Homepage',
	'add_to_menu_id' => $menu_critic_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Book Reviews',
	'add_to_menu_id' => $menu_critic_id,
	'category_id' => $cat_book_reviews_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Movie Reviews',
	'add_to_menu_id' => $menu_critic_id,
	'category_id' => $cat_movie_reviews_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Reading',
	'add_to_menu_id' => $menu_critic_id,
	'category_id' => $cat_reading_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Thoughts',
	'add_to_menu_id' => $menu_critic_id,
	'category_id' => $cat_thoughts_id,
	'parent_id' => ''
));

$menu_mobile_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Homepage',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Book Reviews',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_book_reviews_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Comedy',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_comedy_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Horror',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_horror_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Romance',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_romance_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Movie Reviews',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_movie_reviews_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Action',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_action_id,
	'parent_id' => $menu_item_5_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Drama',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_drama_id,
	'parent_id' => $menu_item_5_id
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Fantasy',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_fantasy_id,
	'parent_id' => $menu_item_5_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Sci-Fi',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_sci_fi_id,
	'parent_id' => $menu_item_5_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Reading',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_reading_id,
	'parent_id' => ''
));

$menu_item_11_id = td_demo_menus::add_category(array(
	'title' => 'Thoughts',
	'add_to_menu_id' => $menu_mobile_menu_id,
	'category_id' => $cat_thoughts_id,
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic – Footer Author Template',
	'file' => 'footer_author_cloud_template.txt',
	'template_type' => 'footer',
));

$template_footer_id = td_demo_content::add_cloud_template(array(
    'title' => 'The Critic – Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_id);

$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);



$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Single Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'The Critic - Header Template',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_critic_id );



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_5');

td_demo_misc::update_background_login('tdx_pic_6');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());
