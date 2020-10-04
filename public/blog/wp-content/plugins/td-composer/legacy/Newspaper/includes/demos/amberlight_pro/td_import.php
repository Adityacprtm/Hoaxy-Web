<?php 


//categories


$cat_general_id = td_demo_category::add_category(array(
    'category_name' => 'General',
    'parent_id' => 0,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'A compilation of AmberLight’s main articles in one place at once. Browse through any of them to find something that might interest you.',
    'background_td_pic_id' => 'td_pic_5',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_health_id = td_demo_category::add_category(array(
    'category_name' => 'Health',
    'parent_id' => $cat_general_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Ready to take on life with a new perspective? Here are posts that help you get on the highway to good health.',
    'background_td_pic_id' => 'td_pic_10',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_news_id = td_demo_category::add_category(array(
    'category_name' => 'News',
    'parent_id' => $cat_general_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'Extra, extra! Read all about it! The latest news internationally and locally covered by Tudor Heimlitz.',
    'background_td_pic_id' => 'td_pic_4',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_politics_id = td_demo_category::add_category(array(
    'category_name' => 'Politics',
    'parent_id' => $cat_general_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'What’s going on now in the world of Politics? Explore all the new laws that have come to pass and learn which party to vote for.',
    'background_td_pic_id' => 'td_pic_2',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_shows_id = td_demo_category::add_category(array(
    'category_name' => 'Shows',
    'parent_id' => $cat_general_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'No need to get caught up in personal drama when you could get it straight from the theatre. Find out what shows are taking stage tonight.',
    'background_td_pic_id' => 'td_pic_1',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_tech_id = td_demo_category::add_category(array(
    'category_name' => 'Tech',
    'parent_id' => $cat_general_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => 'What are the latest technological innovations? From virtual reality taking over the workforce, to gadgets you can carry around in your pocket.',
    'background_td_pic_id' => 'td_pic_8',
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
    'description' => 'How does a celebrity take the reins to her life? And how can anyone maintain a work – life balance? Explore answers and tips to those two questions.',
    'background_td_pic_id' => 'td_pic_9',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));


$cat_advice_id = td_demo_category::add_category(array(
	'category_name' => 'Advice',
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => 'Whether it is personal or unbiased, these articles’ aim is to help you figure out a better way to act in society.',
	'background_td_pic_id' => 'td_pic_1',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_bodycare_id = td_demo_category::add_category(array(
	'category_name' => 'Bodycare',
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => 'Treat your body like it is a temple and soon it will follow through and help you daily in maintaining a proper outlook on everything.',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_entertainment_id = td_demo_category::add_category(array(
	'category_name' => 'Entertainment',
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => 'What are the best local restaurants to visit and which concerts are playing in Olive Garden? Read the latest news about those here.',
	'background_td_pic_id' => 'td_pic_7',
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
	'description' => 'Trends, materials, fabrics, colors. All you need to know about what’s rockin’ in the fashion industry right now.',
	'background_td_pic_id' => 'td_pic_8',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_soulcare_id = td_demo_category::add_category(array(
	'category_name' => 'Soulcare',
	'parent_id' => $cat_lifestyle_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => 'How would you like to lead your life? With good advice, medication, and physical exercise you can achieve inner peace.',
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
$post_td_post_photoshoot_in_a_forest_maze_long_flowy_dresses_id = td_demo_content::add_post(array(
	'title' => 'Photoshoot in a Forest Maze: Long Flowy Dresses',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_what_are_the_best_times_of_the_day_to_tan_id = td_demo_content::add_post(array(
	'title' => 'What are the Best Times of the Day to Tan',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_how_to_maintain_a_long_distance_relationship_id = td_demo_content::add_post(array(
	'title' => 'How to Maintain a Long Distance Relationship',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_why_travelling_broadens_your_horizons_and_enhances_your_life_experiences_id = td_demo_content::add_post(array(
	'title' => 'Why Travelling Broadens your Horizons and Enhances your Life Experiences',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_getting_started_with_an_online_art_course_practice_daily_id = td_demo_content::add_post(array(
	'title' => 'Getting Started with an Online Art Course: Practice Daily',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_applying_makeup_on_a_friend_what_to_take_into_account_id = td_demo_content::add_post(array(
	'title' => 'Applying Makeup on a Friend: What to Take Into Account',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_how_to_keep_a_daily_journal_and_why_it_helps_you_destress_id = td_demo_content::add_post(array(
	'title' => 'How to Keep a Daily Journal and Why it Helps you Destress',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_10_essential_things_you_should_know_before_planning_the_wedding_id = td_demo_content::add_post(array(
	'title' => '10 Essential Things You Should Know Before Planning the Wedding',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_treating_a_healing_tattoo_advice_tips_tricks_id = td_demo_content::add_post(array(
	'title' => 'Treating a Healing Tattoo: Advice, Tips & Tricks',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_staying_healthy_indoors_almonds_nuts_dried_fruit_id = td_demo_content::add_post(array(
	'title' => 'Staying Healthy Indoors: Almonds, Nuts, Dried Fruit',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_advice_id,),
));

$post_td_post_make_your_friends_a_priority_and_youll_be_one_too_id = td_demo_content::add_post(array(
	'title' => 'Make your Friends a Priority and You\'ll Be One, Too',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_soulcare_id,),
));

$post_td_post_why_keeping_a_pet_helps_you_relax_and_stay_positive_id = td_demo_content::add_post(array(
	'title' => 'Why Keeping a Pet Helps you Relax and Stay Positive',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_soulcare_id,),
));

$post_td_post_say_no_to_stress_meditation_all_its_benefits_id = td_demo_content::add_post(array(
	'title' => 'Say No to Stress: Meditation & All its Benefits',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_soulcare_id,),
));

$post_td_post_techniques_that_help_you_stretch_all_your_back_muscles_id = td_demo_content::add_post(array(
	'title' => 'Techniques that Help you Stretch all your Back Muscles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_soulcare_id,),
));

$post_td_post_how_to_maintain_a_healthy_and_happy_relationship_id = td_demo_content::add_post(array(
	'title' => 'How to Maintain a Healthy and Happy Relationship',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_soulcare_id,),
));

$post_td_post_its_okay_to_treat_yourself_ice_cream_desserts_id = td_demo_content::add_post(array(
	'title' => 'It\'s Okay to Treat Yourself: Ice Cream Desserts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_best_serums_to_improve_your_skins_elasticity_id = td_demo_content::add_post(array(
	'title' => 'Best Serums to Improve your Skin\'s Elasticity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_take_care_of_yourself_boil_and_drink_tea_daily_id = td_demo_content::add_post(array(
	'title' => 'Take Care of Yourself: Boil and Drink Tea Daily',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_a_new_line_of_eau_de_perfume_that_smells_like_spring_reincarnated_id = td_demo_content::add_post(array(
	'title' => 'A new Line of Eau de Perfume that Smells like Spring Reincarnated',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_lotions_and_creams_that_keep_your_skin_refreshed_id = td_demo_content::add_post(array(
	'title' => 'Lotions and Creams that Keep your Skin Refreshed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_tips_to_improve_your_bowling_and_knock_all_the_pins_id = td_demo_content::add_post(array(
	'title' => 'Tips to Improve your Bowling and Knock all the Pins',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_10_of_the_most_frightening_rollercoaster_rides_id = td_demo_content::add_post(array(
	'title' => '10 of the Most Frightening Rollercoaster Rides in Montana',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_yoga_positions_to_keep_you_relaxed_throughout_the_day_id = td_demo_content::add_post(array(
	'title' => 'Yoga Positions to Keep you Relaxed Throughout the Day',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_who_are_the_top_contestants_on_americas_nascar_racing_id = td_demo_content::add_post(array(
	'title' => 'Who are the Top Contestants on America\'s Nascar Racing',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_board_games_to_try_out_when_youre_working_from_home_id = td_demo_content::add_post(array(
	'title' => 'Board Games to Try Out when You\'re Working From Home',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_entertainment_id,),
));

$post_td_post_present_yourself_in_a_different_manner_with_a_smokey_eyeshadow_id = td_demo_content::add_post(array(
	'title' => 'Present Yourself in a Different Manner with a Smokey Eyeshadow',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_a_green_suit_to_embrace_the_coming_of_spring_id = td_demo_content::add_post(array(
	'title' => 'A Green Suit to Embrace the Coming of Spring',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_how_to_dress_to_impress_professional_casual_look_id = td_demo_content::add_post(array(
	'title' => 'How to Dress to Impress: Professional & Casual Look',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_all_natural_makeup_photoshoot_with_desert_flowers_id = td_demo_content::add_post(array(
	'title' => 'All Natural Makeup Photoshoot with Desert Flowers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_get_a_glamorous_golden_complexion_to_wow_the_masses_id = td_demo_content::add_post(array(
	'title' => 'Get a Glamorous & Golden Complexion to Wow the Masses',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_how_does_running_significantly_improve_your_metabolism_id = td_demo_content::add_post(array(
	'title' => 'How Does Running Significantly Improve your Metabolism',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_cardio_exercises_to_help_you_stay_in_shape_for_summer_id = td_demo_content::add_post(array(
	'title' => 'Cardio Exercises to Help you Stay in Shape for Summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_biking_as_a_good_alternative_to_get_to_work_on_time_id = td_demo_content::add_post(array(
	'title' => 'Biking as a Good Alternative to Get to Work on Time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_why_you_shouldnt_use_any_antibiotics_unless_prescribed_by_your_doctor_id = td_demo_content::add_post(array(
	'title' => 'Why you Shouldn\'t Use any Antibiotics for the Common Cold',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_how_to_reduce_calorie_intake_and_keep_yourself_healthy_id = td_demo_content::add_post(array(
	'title' => 'How to Reduce Calorie Intake and Keep Yourself Healthy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_health_id,),
));

$post_td_post_making_it_to_the_final_frontline_live_action_movie_id = td_demo_content::add_post(array(
	'title' => 'Making it to the Final frontline: Live Action Movie',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_shows_id,),
));

$post_td_post_swan_lake_reinvented_a_play_of_shadows_and_ballet_id = td_demo_content::add_post(array(
	'title' => 'Swan Lake Reinvented: A Play of Shadows and Ballet',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_shows_id,),
));

$post_td_post_orchestral_concert_with_free_admission_at_newland_theatre_id = td_demo_content::add_post(array(
	'title' => 'Orchestral Concert with Free Admission at Newland Theatre',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_shows_id,),
));

$post_td_post_who_is_the_crew_behind_the_famous_big_brother_show_id = td_demo_content::add_post(array(
	'title' => 'Who is the Crew Behind the Famous Big Brother Show',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_shows_id,),
));

$post_td_post_reenaction_of_the_american_civil_war_at_greentho_exern_id = td_demo_content::add_post(array(
	'title' => 'Reenaction of the American Civil War at Greentho Exern',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_shows_id,),
));

$post_td_post_stay_informed_of_your_countrys_upcoming_policies_with_this_app_id = td_demo_content::add_post(array(
	'title' => 'Stay Informed of your Country\'s Upcoming Policies with this App',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_the_parliament_can_benefit_from_having_these_10_laws_approved_id = td_demo_content::add_post(array(
	'title' => 'The Parliament can Benefit from having these 10 Laws Approved',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_why_is_the_political_situation_escalating_in_rome_id = td_demo_content::add_post(array(
	'title' => 'Why is the Political Situation Escalating in Rome',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_how_does_george_bush_respond_to_todays_international_crisis_id = td_demo_content::add_post(array(
	'title' => 'How does George Bush Respond to Today\'s International Crisis?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_the_news_today_what_are_the_top_headlines_why_id = td_demo_content::add_post(array(
	'title' => 'The News Today: What are the Top Headlines & Why',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_politics_id,),
));

$post_td_post_stock_all_your_photos_with_this_new_1tb_usb_id = td_demo_content::add_post(array(
	'title' => 'Stock all your Photos with this new 1TB USB',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_take_control_of_your_online_expenses_easily_id = td_demo_content::add_post(array(
	'title' => 'Take Control of your Online Expenses Easily',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_the_effects_virtual_reality_has_on_your_mind_id = td_demo_content::add_post(array(
	'title' => 'The Effects Virtual Reality Has on your Mind',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_realtalk_how_good_are_apple_products_really_id = td_demo_content::add_post(array(
	'title' => 'RealTalk: How Good are Apple Products Really?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_cinematography_startups_and_equipment_necessary_id = td_demo_content::add_post(array(
	'title' => 'Cinematography Startups and Equipment Necessary',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_embracing_a_brand_new_year_together_with_fireworks_id = td_demo_content::add_post(array(
	'title' => 'Embracing a Brand New Year Together with Fireworks',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_news_id,),
));

$post_td_post_pride_parade_being_celebrated_across_the_world_id = td_demo_content::add_post(array(
	'title' => 'Pride Parade Being Celebrated Across the World',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_news_id,),
));

$post_td_post_steps_that_authorities_have_to_take_to_prevent_panic_id = td_demo_content::add_post(array(
	'title' => 'Steps That Authorities Have to Take to Prevent Panic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_news_id,),
));

$post_td_post_the_outbreak_of_a_worldwide_pandemic_covid_19_id = td_demo_content::add_post(array(
	'title' => 'The Outbreak of a Worldwide Pandemic: COVID-19',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_news_id,),
));

$post_td_post_how_essential_is_it_to_use_hand_sanitizer_nowadays_id = td_demo_content::add_post(array(
	'title' => 'How Essential is it to Use Hand Sanitizer Nowadays?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_news_id,),
));
// menus


$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');
$menu_td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', '');
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_header_menu_extra_id = td_demo_menus::create_menu('td-demo-header-menu-extra', '');


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Single Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Footer Template',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'AmberLight Header Template',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);




/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_contact_id = td_demo_content::add_page(array(
    'title' => 'Contact',
    'file' => 'contact.txt',
));

$page_homepage_id = td_demo_content::add_page(array(
    'title' => 'Homepage',
    'file' => 'homepage.txt',
    'homepage' => true,
));


/*  ----------------------------------------------------------------------------
	MENUS
*/


/*  ----------------------------------------------------------------------------
	MENUS custom
*/
$menu_item_0_id = td_demo_menus::add_category(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_lifestyle_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'Advice',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_advice_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Bodycare',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_bodycare_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Entertainment',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_entertainment_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_fashion_id,
    'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
    'title' => 'Soulcare',
    'add_to_menu_id' => $menu_td_demo_custom_menu_id,
    'category_id' => $cat_soulcare_id,
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
	MENUS footer
*/
$menu_item_0_id = td_demo_menus::add_category(array(
    'title' => 'Health',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_health_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'News',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_news_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Politics',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_politics_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Shows',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_shows_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Tech',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_tech_id,
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
	MENUS header
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => 'Homepage',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_homepage_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link(array(
    'title' => 'More',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'url' => '#',
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'General',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_general_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Health',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_health_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Politics',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_politics_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
    'title' => 'Shows',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_shows_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_6_id = td_demo_menus::add_category(array(
    'title' => 'Tech',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_tech_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_7_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Lifestyle',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_lifestyle_id,
    'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_mega_menu(array(
    'title' => 'News',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_news_id,
    'parent_id' => ''
));

$menu_item_9_id = td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_contact_id,
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
	MENUS extra
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => 'Homepage',
    'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
    'page_id' => $page_homepage_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'General',
    'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
    'category_id' => $cat_general_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
    'page_id' => $page_contact_id,
    'parent_id' => ''
));



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_10');

td_demo_misc::update_background_login('tdx_pic_11');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
