<?php

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/


$cat_blog_id = td_demo_category::add_category(array(
    'category_name' => 'Blog',
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

$cat_recommendations_id = td_demo_category::add_category(array(
    'category_name' => 'Recommendations',
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

$cat_art_id = td_demo_category::add_category(array(
	'category_name' => 'Art',
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_1',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_art_supplies_id = td_demo_category::add_category(array(
	'category_name' => 'Art Supplies',
	'parent_id' => $cat_recommendations_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_books_id = td_demo_category::add_category(array(
	'category_name' => 'Books',
	'parent_id' => $cat_recommendations_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_8',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_environment_id = td_demo_category::add_category(array(
	'category_name' => 'Environment',
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_4',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_graphic_tablets_id = td_demo_category::add_category(array(
	'category_name' => 'Graphic Tablets',
	'parent_id' => $cat_recommendations_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_opinions_id = td_demo_category::add_category(array(
	'category_name' => 'Opinions',
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_7',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_stories_id = td_demo_category::add_category(array(
	'category_name' => 'Stories',
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_10',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_tech_id = td_demo_category::add_category(array(
	'category_name' => 'Tech',
	'parent_id' => $cat_blog_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_9',
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


$post_td_post_getting_lost_with_my_best_friend_on_the_outskirts_of_town_id = td_demo_content::add_post(array(
    'title' => 'Getting Lost with my Best Friend on the Outskirts of Town',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_art_id,$cat_art_supplies_id,$cat_books_id,$cat_environment_id,$cat_graphic_tablets_id,$cat_opinions_id,$cat_stories_id,$cat_tech_id,),
));

$post_td_post_my_favourite_cereal_brands_reasons_why_recommendations_id = td_demo_content::add_post(array(
    'title' => 'My Favourite Cereal Brands: Reasons Why & Recommendations',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_art_id,$cat_art_supplies_id,$cat_books_id,$cat_environment_id,$cat_graphic_tablets_id,$cat_opinions_id,$cat_stories_id,$cat_tech_id,),
));

$post_td_post_what_do_i_think_about_the_current_political_situation_id = td_demo_content::add_post(array(
    'title' => 'What Do I Think About the Current Political Situation?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_art_id,$cat_art_supplies_id,$cat_books_id,$cat_environment_id,$cat_graphic_tablets_id,$cat_opinions_id,$cat_stories_id,$cat_tech_id,),
));

$post_td_post_going_from_art_gallery_to_art_gallery_in_my_city_id = td_demo_content::add_post(array(
    'title' => 'Going from Art Gallery to Art Gallery in my City',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_art_id,$cat_art_supplies_id,$cat_books_id,$cat_environment_id,$cat_graphic_tablets_id,$cat_opinions_id,$cat_stories_id,$cat_tech_id,),
));

$post_td_post_talking_about_my_pets_my_dogs_rolf_and_riley_id = td_demo_content::add_post(array(
    'title' => 'Talking About my Pets: my Dogs Rolf and Riley',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_art_id,$cat_art_supplies_id,$cat_books_id,$cat_environment_id,$cat_graphic_tablets_id,$cat_opinions_id,$cat_stories_id,$cat_tech_id,),
));


$post_td_post_an_art_book_you_need_to_read_asap_why_it_will_help_you_id = td_demo_content::add_post(array(
	'title' => 'An Art Book You Need to Read ASAP & Why it Will Help You',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_my_favorite_books_of_all_time_any_genre_goes_id = td_demo_content::add_post(array(
	'title' => 'My Favorite Books of All Time: Any Genre Goes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_reading_at_a_cafe_to_escape_personal_problems_and_life_id = td_demo_content::add_post(array(
	'title' => 'Reading at a Cafe to Escape Personal Problems and Life',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_whats_on_my_to_read_shelf_that_you_should_join_me_in_reading_id = td_demo_content::add_post(array(
	'title' => 'What\'s on my To Read Shelf that You Should Join me in Reading',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_here_are_my_top_10_favorite_romance_books_of_2019_id = td_demo_content::add_post(array(
	'title' => 'Here are My Top 10 Favorite Romance Books of 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_books_id,),
));

$post_td_post_tips_tricks_to_finding_great_art_supplies_at_a_cheap_price_id = td_demo_content::add_post(array(
	'title' => 'Tips & Tricks to Finding Great Art Supplies At a Cheap Price',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_art_supplies_id,),
));

$post_td_post_what_to_look_for_when_you_get_to_the_art_section_id = td_demo_content::add_post(array(
	'title' => 'What to Look For when You Get to the Art Section',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_art_supplies_id,),
));

$post_td_post_my_favorite_crayons_and_why_i_absolutely_adore_them_id = td_demo_content::add_post(array(
	'title' => 'My Favorite Crayons and why I Absolutely Adore Them',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_art_supplies_id,),
));

$post_td_post_the_best_type_of_brushes_you_can_get_from_any_local_art_store_id = td_demo_content::add_post(array(
	'title' => 'The Best Type of Brushes you can Get From any Local Art Store',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_art_supplies_id,),
));

$post_td_post_what_are_my_own_art_supplies_a_list_explanation_id = td_demo_content::add_post(array(
	'title' => 'What Are my own Art Supplies? A List & Explanation',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_art_supplies_id,),
));

$post_td_post_taking_care_of_your_graphic_tablets_after_buying_it_id = td_demo_content::add_post(array(
	'title' => 'Taking Care of your Graphic Tablets after Buying it',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_graphic_tablets_id,),
));

$post_td_post_top_5_phones_that_are_great_for_drawing_on_the_go_id = td_demo_content::add_post(array(
	'title' => 'Top 5 Phones that are Great for Drawing on the Go',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_graphic_tablets_id,),
));

$post_td_post_would_a_display_graphic_tablet_affect_your_drawing_ability_id = td_demo_content::add_post(array(
	'title' => 'Would a Display Graphic Tablet Affect your Drawing Ability?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_graphic_tablets_id,),
));

$post_td_post_getting_used_to_your_new_graphic_tablet_tips_tricks_id = td_demo_content::add_post(array(
	'title' => 'Getting Used to your New Graphic Tablet Tips & Tricks',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_graphic_tablets_id,),
));

$post_td_post_how_to_choose_the_perfect_graphic_tablet_for_your_needs_id = td_demo_content::add_post(array(
	'title' => 'How to Choose the Perfect Graphic Tablet For your Needs',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_graphic_tablets_id,),
));

$post_td_post_i_started_a_project_in_my_hometown_for_planting_trees_join_me_id = td_demo_content::add_post(array(
	'title' => 'I Started a Project in my Hometown for Planting Trees: Join me!',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_renewable_energy_is_the_future_of_all_humanity_id = td_demo_content::add_post(array(
	'title' => 'This is Why I Believe Renewable Energy is the Future of all Humanity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_save_the_bees_movement_take_care_of_your_local_honeybees_id = td_demo_content::add_post(array(
	'title' => 'Save the Bees Movement: Take care of your Local Honeybees',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_coffee_as_a_natural_way_of_cleansing_skin_and_the_environment_id = td_demo_content::add_post(array(
	'title' => 'Coffee as a Natural way of Cleansing Skin and the Environment',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_using_plastic_straws_is_the_first_step_you_need_to_take_id = td_demo_content::add_post(array(
	'title' => 'Using Plastic Straws is the First Step you Need to Take',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_environment_id,),
));

$post_td_post_overpricing_products_to_ensure_a_brand_ideal_is_overdone_id = td_demo_content::add_post(array(
	'title' => 'Overpricing Products to Ensure a Brand Ideal is Overdone',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_why_investing_in_a_smart_watch_is_both_good_and_bad_id = td_demo_content::add_post(array(
	'title' => 'Why Investing in a Smart Watch is Both Good and Bad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_a_review_of_the_new_apple_iphone_and_its_spider_camera_id = td_demo_content::add_post(array(
	'title' => 'A Review of the new Apple iPhone and its Spider Camera',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_is_amazon_alexa_the_best_gadget_you_can_get_or_not_id = td_demo_content::add_post(array(
	'title' => 'Is Amazon Alexa the Best Gadget you can Get or Not?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_my_favorite_camera_to_come_out_in_2019_and_why_i_love_it_id = td_demo_content::add_post(array(
	'title' => 'My Favorite Camera to Come out in 2019 and Why I Love it',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_tech_id,),
));

$post_td_post_old_bands_t_shirts_that_inspired_me_to_create_something_new_id = td_demo_content::add_post(array(
	'title' => 'Old Bands T-Shirts that Inspired me to Create Something New',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_collaging_how_and_why_you_should_learn_and_apply_it_to_your_medium_id = td_demo_content::add_post(array(
	'title' => 'Collaging: How and Why you Should Learn and Apply it to Your Medium',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_a_garage_sale_that_prompted_me_to_splurge_on_everything_id = td_demo_content::add_post(array(
	'title' => 'A Garage Sale that Prompted me to Splurge on Everything',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_copy_paste_art_a_new_way_to_encourage_creativity_id = td_demo_content::add_post(array(
	'title' => 'Copy & Paste Art: A New Way to Encourage Creativity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_contemporary_art_that_i_absolutely_adored_from_2019_id = td_demo_content::add_post(array(
	'title' => 'Contemporary Art that I Absolutely Adored from 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_art_id,),
));

$post_td_post_how_i_managed_to_keep_a_diary_all_the_way_through_college_id = td_demo_content::add_post(array(
	'title' => 'How I Managed to Keep a Diary all the Way Through College',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_stories_id,),
));

$post_td_post_i_bought_a_box_of_arts_crafts_supplies_to_make_this_id = td_demo_content::add_post(array(
	'title' => 'I Bought a Box of Arts & Crafts Supplies to Make This',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_stories_id,),
));

$post_td_post_the_time_i_read_10_books_in_one_week_for_art_college_id = td_demo_content::add_post(array(
	'title' => 'The Time I Read 10 Books in one Week for Art College',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_stories_id,),
));

$post_td_post_appreciating_the_beauty_of_nature_and_wildlife_id = td_demo_content::add_post(array(
	'title' => 'Appreciating the Beauty of Nature and Wildlife',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_stories_id,),
));

$post_td_post_how_i_met_my_best_friend_and_kept_in_touch_with_the_distance_id = td_demo_content::add_post(array(
	'title' => 'How I Met my Best Friend and Kept in Touch with the Distance',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_stories_id,),
));

$post_td_post_why_i_wish_i_had_a_cabin_in_the_woods_id = td_demo_content::add_post(array(
	'title' => 'Reasons Why I Wish I Had a Cabin in the Woods',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_opinions_id,),
));

$post_td_post_talking_about_my_pets_my_cute_fluffy_cat_lola_id = td_demo_content::add_post(array(
	'title' => 'Talking About my Pets: my Cute Fluffy Cat Lola',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_opinions_id,),
));

$post_td_post_my_thoughts_on_smoking_and_why_i_will_never_do_it_id = td_demo_content::add_post(array(
	'title' => 'My Thoughts on Smoking and Why I will Never Do it',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_opinions_id,),
));

$post_td_post_spending_too_much_time_on_your_smartphone_daily_id = td_demo_content::add_post(array(
	'title' => 'Spending Too Much Time on your Smartphone Daily',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_opinions_id,),
));

$post_td_post_the_time_i_almost_broke_my_shelf_trying_to_repair_it_id = td_demo_content::add_post(array(
	'title' => 'The Time I Almost Broke my Shelf Trying to Repair it',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_opinions_id,),
));



/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', '');
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_mobile_menu_id = td_demo_menus::create_menu('td-demo-mobile-menu', '');



/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/

$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);

$template_footer_template_global_id = td_demo_content::add_cloud_template(array(
    'title' => 'Zodiac Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_global_id);

$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$td_cloud_global_author_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Zodiac Author Template',
    'file' => 'author_cloud_template.txt',
    'template_type' => 'author'
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $td_cloud_global_author_template_id );


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Single Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);



$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Zodiac Header Template',
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

$page_about_id = td_demo_content::add_page(array(
    'title' => 'About',
    'file' => 'about.txt',
));

$page_homepage_id = td_demo_content::add_page(array(
    'title' => 'Homepage',
    'file' => 'homepage.txt',
    'homepage' => true,
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS FOOTER
*/
$menu_item_0_id = td_demo_menus::add_category(array(
    'title' => 'Art',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_art_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'Environment',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_environment_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Opinions',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_opinions_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Stories',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_stories_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Tech',
    'add_to_menu_id' => $menu_td_demo_footer_menu_id,
    'category_id' => $cat_tech_id,
    'parent_id' => ''
));




/*  ----------------------------------------------------------------------------
	MENUS ITEMS MOBILE
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
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Recommendations',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_recommendations_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_about_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_contact_id,
    'parent_id' => ''
));



/*  ----------------------------------------------------------------------------
	MENUS ITEMS HEADER
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
    'title' => 'Opinions',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_opinions_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Stories',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_stories_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Art',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_art_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
    'title' => 'Environment',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_environment_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_6_id = td_demo_menus::add_category(array(
    'title' => 'Tech',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_tech_id,
    'parent_id' => $menu_item_1_id
));

$menu_item_7_id = td_demo_menus::add_category(array(
    'title' => 'Recommendations',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_recommendations_id,
    'parent_id' => ''
));

$menu_item_8_id = td_demo_menus::add_category(array(
    'title' => 'Art Supplies',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_art_supplies_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
    'title' => 'Books',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_books_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
    'title' => 'Graphic Tablets',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'category_id' => $cat_graphic_tablets_id,
    'parent_id' => $menu_item_7_id
));

$menu_item_11_id = td_demo_menus::add_page(array(
    'title' => 'About',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'page_id' => $page_about_id,
    'parent_id' => ''
));

$menu_item_12_id = td_demo_menus::add_page(array(
    'title' => 'Contact',
    'add_to_menu_id' => $menu_td_demo_mobile_menu_id,
    'page_id' => $page_contact_id,
    'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_6');

td_demo_misc::update_background_login('tdx_pic_7');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
