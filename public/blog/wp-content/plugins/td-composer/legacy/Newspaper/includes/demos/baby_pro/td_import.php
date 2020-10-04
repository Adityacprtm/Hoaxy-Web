<?php 

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_baby_id = td_demo_category::add_category(array(
	'category_name' => 'Baby',
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

$cat_birth_id = td_demo_category::add_category(array(
	'category_name' => 'Birth',
	'parent_id' => $cat_baby_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_9',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_family_id = td_demo_category::add_category(array(
	'category_name' => 'Family',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_8',
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
	'background_td_pic_id' => 'td_pic_7',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_fitness_id = td_demo_category::add_category(array(
	'category_name' => 'Fitness',
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

$cat_food_id = td_demo_category::add_category(array(
	'category_name' => 'Food',
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

$cat_learning_id = td_demo_category::add_category(array(
	'category_name' => 'Learning',
	'parent_id' => $cat_baby_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_4',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_life_id = td_demo_category::add_category(array(
	'category_name' => 'Life',
	'parent_id' => $cat_baby_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_4',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_moments_id = td_demo_category::add_category(array(
	'category_name' => 'Moments',
	'parent_id' => $cat_baby_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_pregnancy_id = td_demo_category::add_category(array(
	'category_name' => 'Pregnancy',
	'parent_id' => $cat_baby_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_reviews_id = td_demo_category::add_category(array(
	'category_name' => 'Reviews',
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

$cat_work_id = td_demo_category::add_category(array(
	'category_name' => 'Work',
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


/*  ---------------------------------------------------------------------------- 
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/

$post_what_you_need_to_know_about_bleeding_id = td_demo_content::add_post(array(
    'title' => 'What You Need to Know About Bleeding',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_a_guided_day_of_practicing_self_care_7_steps_id = td_demo_content::add_post(array(
    'title' => 'A Guided Day of Practicing Self-Care: 7 Steps',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_valentines_day_gift_guide_for_moms_with_littles_id = td_demo_content::add_post(array(
    'title' => 'Valentine’s Day Gift Guide for Moms with Littles',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_our_favorite_mom_friendly_workout_clothes_id = td_demo_content::add_post(array(
    'title' => 'Our Favorite Mom-Friendly Workout Clothes',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_9_milestones_women_should_celebrate_yearly_id = td_demo_content::add_post(array(
    'title' => '9 Milestones Women Should Celebrate Yearly',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_how_to_get_and_keep_your_home_organized_this_year_id = td_demo_content::add_post(array(
    'title' => 'How to Get (and Keep) Your Home Organized This Year',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_why_moms_need_to_practice_meditation_id = td_demo_content::add_post(array(
    'title' => 'Why Moms Need to Practice Meditation',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_self_care_for_moms_filling_your_cup_with_minimal_time_id = td_demo_content::add_post(array(
    'title' => 'Self-Care for Moms: Filling Your Cup with Minimal Time',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_10_products_on_amazon_every_dad_needs_id = td_demo_content::add_post(array(
    'title' => '10 Products on Amazon Every Dad Needs',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_birth_id,$cat_family_id,$cat_fitness_id,$cat_food_id,$cat_learning_id,$cat_life_id,$cat_moments_id,$cat_pregnancy_id,$cat_reviews_id,$cat_work_id,),
));

$post_td_post_amazing_girls_room_handmade_decor_id = td_demo_content::add_post(array(
	'title' => 'Amazing Girl\'s Room Handmade Decor',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_reviews_id,),
));

$post_td_post_the_best_baby_bottle_you_need_to_try_id = td_demo_content::add_post(array(
	'title' => 'The Best Baby Bottle You Need to Try',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_reviews_id,),
));

$post_td_post_the_bag_baby_carrier_that_makes_sense_id = td_demo_content::add_post(array(
	'title' => 'The Bag Baby Carrier that Makes Sense',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_reviews_id,),
));

$post_td_post_baby_cream_review_finale_thats_a_wrap_id = td_demo_content::add_post(array(
	'title' => 'Baby Cream Review Finale: That’s a Wrap!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_reviews_id,),
));

$post_td_post_top_12_baby_onesies_how_we_used_them_id = td_demo_content::add_post(array(
	'title' => 'Top 12 Baby Onesies: How We Used Them',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_reviews_id,),
));

$post_td_post_5_pro_advices_for_modern_working_moms_id = td_demo_content::add_post(array(
	'title' => '5 Pro Advices for Modern Working Moms',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_work_id,),
));

$post_td_post_prepare_for_the_return_to_third_shift_id = td_demo_content::add_post(array(
	'title' => 'Prepare for the Return to Third Shift',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_work_id,),
));

$post_td_post_discover_these_super_jobs_for_single_moms_id = td_demo_content::add_post(array(
	'title' => 'Discover These Super Jobs for Single Moms',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_work_id,),
));

$post_td_post_returning_to_work_right_after_pregnancy_id = td_demo_content::add_post(array(
	'title' => 'Returning to Work Right After Pregnancy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_work_id,),
));

$post_td_post_the_diaries_of_a_working_mom_of_three_id = td_demo_content::add_post(array(
	'title' => 'The Diaries of a Working Mom of Three',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_work_id,),
));

$post_td_post_under_2_years_working_out_with_your_baby_id = td_demo_content::add_post(array(
	'title' => 'Under 2 Years: Working Out with Your Baby',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_the_perfect_recipe_for_a_great_workout_id = td_demo_content::add_post(array(
	'title' => 'The Perfect Recipe for a Great Workout',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_healthy_lifestyle_to_adopt_after_birth_id = td_demo_content::add_post(array(
	'title' => 'Healthy Lifestyle to Adopt After Birth',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_10_things_to_know_about_baby_walking_id = td_demo_content::add_post(array(
	'title' => '10 Things to Know About Baby Walking',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_exercises_recommended_for_pregnant_women_id = td_demo_content::add_post(array(
	'title' => 'Exercises Recommended for Pregnant Women',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fitness_id,),
));

$post_td_post_vitamin_tips_super_meals_for_your_baby_id = td_demo_content::add_post(array(
	'title' => 'Vitamin Tips: Super Meals for Your Baby',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_food_id,),
));

$post_td_post_cooking_with_your_toddler_in_the_kitchen_id = td_demo_content::add_post(array(
	'title' => 'Cooking With Your Toddler in the Kitchen',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_food_id,),
));

$post_td_post_5_steps_to_developing_healthier_food_habits_id = td_demo_content::add_post(array(
	'title' => '5 Steps to Developing Healthier Food Habits',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_food_id,),
));

$post_td_post_meat_rich_baby_food_for_optimal_growth_id = td_demo_content::add_post(array(
	'title' => 'Meat Rich Baby Food for Optimal Growth',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_food_id,),
));

$post_td_post_nutritious_and_friendly_meals_for_kids_id = td_demo_content::add_post(array(
	'title' => 'Nutritious and Friendly Meals for Kids',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_food_id,),
));

$post_td_post_sharing_the_news_about_your_new_baby_id = td_demo_content::add_post(array(
	'title' => 'Sharing the News About Your New Baby',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_family_id,),
));

$post_td_post_life_the_first_weeks_of_pregnancy_id = td_demo_content::add_post(array(
	'title' => 'Life: the First Weeks of Pregnancy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_family_id,),
));

$post_td_post_family_goals_just_the_three_of_us_id = td_demo_content::add_post(array(
	'title' => 'Family Goals: Just the Three of Us',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_family_id,),
));

$post_td_post_what_makes_for_the_perfect_holiday_id = td_demo_content::add_post(array(
	'title' => 'What Makes For the Perfect Holiday',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_family_id,),
));

$post_td_post_the_story_on_how_i_met_your_father_id = td_demo_content::add_post(array(
	'title' => 'The Story on How I Met Your Father',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_family_id,),
));

$post_td_post_for_your_child_perfect_room_for_learning_id = td_demo_content::add_post(array(
	'title' => 'For Your Child: Perfect Room for Learning',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_learning_id,),
));

$post_td_post_parenting_tips_is_reading_a_must_at_five_id = td_demo_content::add_post(array(
	'title' => 'Parenting Tips: Is Reading a Must at Five?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_learning_id,),
));

$post_td_post_girls_first_words_come_2_months_earlier_id = td_demo_content::add_post(array(
	'title' => 'Girls: First Words Come 2 Months Earlier',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_learning_id,),
));

$post_td_post_eating_routine_for_all_kids_under_6_years_id = td_demo_content::add_post(array(
	'title' => 'Eating Routine for All Kids Under 6 Years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_learning_id,),
));

$post_td_post_picking_up_a_sport_at_only_3_years_old_id = td_demo_content::add_post(array(
	'title' => 'Picking up a Sport at Only 3 Years Old',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_learning_id,),
));

$post_td_post_prepare_the_first_baby_pet_encounter_id = td_demo_content::add_post(array(
	'title' => 'Prepare the First Baby - Pet Encounter',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_moments_id,),
));

$post_td_post_when_to_get_your_baby_out_of_the_nursery_id = td_demo_content::add_post(array(
	'title' => 'When to Get Your Baby Out of the Nursery',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_moments_id,),
));

$post_td_post_prepare_for_babys_first_scooter_ride_id = td_demo_content::add_post(array(
	'title' => 'Prepare for Baby\'s First Scooter Ride',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_moments_id,),
));

$post_td_post_newborns_what_to_do_when_darkness_falls_id = td_demo_content::add_post(array(
	'title' => 'Newborns: What to Do When Darkness Falls',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_moments_id,),
));

$post_td_post_the_anticipated_gender_reveal_moment_id = td_demo_content::add_post(array(
	'title' => 'The Anticipated Gender Reveal Moment',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_moments_id,),
));

$post_td_post_mother_issues_baby_feeding_struggles_id = td_demo_content::add_post(array(
	'title' => 'Mother Issues: Baby Feeding Struggles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_five_important_baby_proofing_advice_id = td_demo_content::add_post(array(
	'title' => 'Five Important Baby Proofing Advice',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_does_your_child_need_extra_attention_id = td_demo_content::add_post(array(
	'title' => 'Does Your Child Need Extra Attention?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_best_toys_that_develop_intelligence_id = td_demo_content::add_post(array(
	'title' => 'Best Toys that Develop Intelligence',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_to_dos_before_your_baby_turns_three_id = td_demo_content::add_post(array(
	'title' => 'To Do\'s Before Your Baby Turns Three',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_life_id,),
));

$post_td_post_its_a_miracle_little_human_is_born_id = td_demo_content::add_post(array(
	'title' => 'It\'s a Miracle: Little Human is Born',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_birth_id,),
));

$post_td_post_do_babies_look_like_their_parents_id = td_demo_content::add_post(array(
	'title' => 'Do Babies Look Like their Parents?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_birth_id,),
));

$post_td_post_10_most_important_newborn_must_haves_id = td_demo_content::add_post(array(
	'title' => '10 Most Important Newborn Must Haves',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_birth_id,),
));

$post_td_post_biggest_hospital_husband_worries_id = td_demo_content::add_post(array(
	'title' => 'Biggest Hospital Husband Worries',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_birth_id,),
));

$post_td_post_waiting_patiently_for_the_birth_day_id = td_demo_content::add_post(array(
	'title' => 'Waiting Patiently for the Birth Day',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_birth_id,),
));

$post_td_post_remember_to_stay_healthy_active_id = td_demo_content::add_post(array(
	'title' => 'Remember to Stay Healthy & Active',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_pregnancy_id,),
));

$post_td_post_monthly_pregnancy_sleep_training_id = td_demo_content::add_post(array(
	'title' => 'Monthly Pregnancy Sleep Training',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_pregnancy_id,),
));

$post_td_post_you_have_to_holiday_when_pregnant_id = td_demo_content::add_post(array(
	'title' => 'You Have to Holiday when Pregnant',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_pregnancy_id,),
));

$post_td_post_maternity_super_adventure_stories_id = td_demo_content::add_post(array(
	'title' => 'Maternity Super Adventure Stories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_pregnancy_id,),
));

$post_td_post_father_tips_baby_boy_or_baby_girl_id = td_demo_content::add_post(array(
	'title' => 'Father Tips: Baby Boy or Baby Girl?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_pregnancy_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');
$menu_td_demo_header_menu_extra_id = td_demo_menus::create_menu('td-demo-header-menu-extra', '');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


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


$template_single_post_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS CUSTOM MENU
*/
$menu_item_0_id = td_demo_menus::add_category(array(
	'title' => 'Fitness',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_fitness_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Food',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_food_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Work',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_work_id,
	'parent_id' => ''
));

/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS HEADER MENU
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Baby',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_baby_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Family',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_family_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Reviews',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_reviews_id,
	'parent_id' => ''
));

/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS HEADER MENU EXTRA
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Baby',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_baby_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Birth',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_birth_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Learning',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_learning_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Life',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_life_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Moments',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_moments_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Pregnancy',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_pregnancy_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Family',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_family_id,
	'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Fitness',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_fitness_id,
	'parent_id' => ''
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Food',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_food_id,
	'parent_id' => ''
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Reviews',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_reviews_id,
	'parent_id' => ''
));

$menu_item_11_id = td_demo_menus::add_category(array(
	'title' => 'Work',
	'add_to_menu_id' => $menu_td_demo_header_menu_extra_id,
	'category_id' => $cat_work_id,
	'parent_id' => ''
));




/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('td_pic_5');

td_demo_misc::update_background_login('td_pic_6');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
