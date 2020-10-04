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

$cat_chicken_id = td_demo_category::add_category(array(
	'category_name' => 'Chicken',
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

$cat_cookbook_id = td_demo_category::add_category(array(
	'category_name' => 'Cookbook',
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

$cat_dessert_id = td_demo_category::add_category(array(
	'category_name' => 'Dessert',
	'parent_id' => $cat_cookbook_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_fish_id = td_demo_category::add_category(array(
	'category_name' => 'Fish',
	'parent_id' => $cat_cookbook_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_health_id = td_demo_category::add_category(array(
	'category_name' => 'Health',
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

$cat_recipe_inspiration_id = td_demo_category::add_category(array(
	'category_name' => 'Recipe Inspiration',
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

$cat_salad_id = td_demo_category::add_category(array(
	'category_name' => 'Salad',
	'parent_id' => $cat_cookbook_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_steak_id = td_demo_category::add_category(array(
	'category_name' => 'Steak',
	'parent_id' => $cat_cookbook_id,
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
$post_crunchy_creamy_cucumber_avocado_salad_id = td_demo_content::add_post(array(
	'title' => 'Crunchy, Creamy Cucumber-Avocado Salad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_moros_warm_squash_chickpea_salad_with_tahini_id = td_demo_content::add_post(array(
	'title' => 'Moro\'s Warm Squash & Chickpea Salad with Tahini',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_citrus_ginger_tofu_salad_with_buckwheat_soba_noodles_id = td_demo_content::add_post(array(
	'title' => 'Citrus Ginger Tofu Salad with Buckwheat Soba Noodles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_cucumber_and_red_onion_salad_id = td_demo_content::add_post(array(
	'title' => 'Cucumber and Red Onion Salad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_southwestern_quinoa_salad_by_way_of_the_pantry_id = td_demo_content::add_post(array(
	'title' => 'Southwestern Quinoa Salad, by Way of the Pantry',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_pan_bagnat_le_french_tuna_salad_sandwich_id = td_demo_content::add_post(array(
	'title' => 'Pan Bagnat: Le French Tuna Salad Sandwich',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_recipe_inspiration_id,),
));

$post_is_coffee_bad_for_you_the_answer_may_surprise_you_id = td_demo_content::add_post(array(
	'title' => 'Is Coffee Bad For You? The Answer May Surprise You',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_health_id,),
));

$post_10_hearty_soup_recipes_with_extra_health_benefits_id = td_demo_content::add_post(array(
	'title' => '10 Hearty Soup Recipes with Extra Health Benefits',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_health_id,),
));

$post_friendsgiving_giving_back_this_year_id = td_demo_content::add_post(array(
	'title' => 'Friendsgiving & Giving Back This Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_health_id,),
));

$post_roasted_strawberry_milkshake_with_buttermilk_id = td_demo_content::add_post(array(
	'title' => 'Roasted Strawberry Milkshake with Buttermilk',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_health_id,),
));

$post_natural_cold_flu_remedies_to_feel_better_fast_id = td_demo_content::add_post(array(
	'title' => 'Natural Cold & Flu Remedies to Feel Better Fast',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_health_id,),
));

$post_kombuchas_health_benefits_which_claims_are_true_id = td_demo_content::add_post(array(
	'title' => 'Kombucha\'s Health Benefits: Which Claims Are True?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_health_id,),
));

$post_the_best_type_of_mattress_for_every_kind_of_sleeper_id = td_demo_content::add_post(array(
	'title' => 'The Best Type of Mattress for Every Kind of Sleeper',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_the_best_way_to_clean_your_eyeglasses_is_also_the_simplest_id = td_demo_content::add_post(array(
	'title' => 'The Best Way to Clean Your Eyeglasses Is Also the Simplest',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_21_dorm_room_ideas_were_totally_stealing_for_ourselves_id = td_demo_content::add_post(array(
	'title' => '21 Dorm Room Ideas We\'re Totally Stealing for Ourselves',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_12_design_ideas_courtesy_of_the_most_unexpected_interiors_trend_id = td_demo_content::add_post(array(
	'title' => 'Cool Ideas of the Most Unexpected Interiors Trend',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_how_to_make_a_wreath_one_easy_step_at_a_time_id = td_demo_content::add_post(array(
	'title' => 'How to Make a Wreath, One Easy Step at a Time',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_the_secret_shortcut_to_decorating_your_home_this_childrens_toy_id = td_demo_content::add_post(array(
	'title' => 'The Secret Shortcut to Decorating Your Home? This Children\'s Toy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_lifestyle_id,),
));

$post_cutler_cos_wood_grilled_prawns_with_fried_garlic_and_chilli_oil_id = td_demo_content::add_post(array(
	'title' => 'Cutler & Co\'s wood-grilled prawns with fried garlic and chilli oil',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_steak_id,),
));

$post_pork_dumplings_with_black_vinegar_and_ginger_id = td_demo_content::add_post(array(
	'title' => 'Pork dumplings with black vinegar and ginger',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_steak_id,),
));

$post_pot_stickers_with_chicken_and_chilli_sauce_id = td_demo_content::add_post(array(
	'title' => 'Pot-stickers with chicken and chilli sauce',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_steak_id,),
));

$post_lemon_and_herb_roasted_chicken_id = td_demo_content::add_post(array(
	'title' => 'Lemon and Herb Roasted Chicken',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_steak_id,),
));

$post_pistachio_mint_spice_crusted_lamb_chops_id = td_demo_content::add_post(array(
	'title' => 'Pistachio, Mint & Spice Crusted Lamb Chops',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_steak_id,),
));

$post_jamaican_beef_patties_id = td_demo_content::add_post(array(
	'title' => 'Jamaican Beef Patties',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_steak_id,),
));

$post_summer_panzanella_salad_recipe_with_pesto_vinaigrette_id = td_demo_content::add_post(array(
	'title' => 'Summer Panzanella Salad Recipe with Pesto Vinaigrette',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_jamaican_jerk_chicken_recipe_with_pineapple_rum_sauce_id = td_demo_content::add_post(array(
	'title' => 'Jamaican Jerk Chicken Recipe with Pineapple Rum Sauce',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_the_best_fried_chicken_recipe_ever_id = td_demo_content::add_post(array(
	'title' => 'The Best Fried Chicken Recipe Ever',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_authentic_indian_chicken_curry_recipe_id = td_demo_content::add_post(array(
	'title' => 'Authentic Indian Chicken Curry Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_chicken_bruschetta_sandwich_recipe_id = td_demo_content::add_post(array(
	'title' => 'Chicken Bruschetta Sandwich Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_perfectly_cooked_boneless_chicken_breast_recipe_id = td_demo_content::add_post(array(
	'title' => 'Perfectly Cooked Boneless Chicken Breast Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_chicken_id,),
));

$post_steamed_fish_with_ginger_scallions_id = td_demo_content::add_post(array(
	'title' => 'Steamed Fish with Ginger & Scallions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fish_id,),
));

$post_fish_with_sauce_niaoise_id = td_demo_content::add_post(array(
	'title' => 'Fish with Sauce Niçoise',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fish_id,),
));

$post_whole_baked_fish_in_sea_salt_with_parsley_gremolata_id = td_demo_content::add_post(array(
	'title' => 'Whole Baked Fish in Sea Salt with Parsley Gremolata',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fish_id,),
));

$post_vietnamese_inspired_sweet_spicy_catfish_id = td_demo_content::add_post(array(
	'title' => 'Vietnamese-Inspired Sweet & Spicy Catfish',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fish_id,),
));

$post_whole_roasted_fish_with_rosemary_potatoes_id = td_demo_content::add_post(array(
	'title' => 'Whole Roasted Fish with Rosemary Potatoes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fish_id,),
));

$post_blushing_new_england_fish_chowder_id = td_demo_content::add_post(array(
	'title' => 'Blushing New England Fish Chowder',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_fish_id,),
));

$post_quinoa_salad_with_hazelnuts_apple_and_dried_cranberries_id = td_demo_content::add_post(array(
	'title' => 'Quinoa Salad with Hazelnuts, Apple, and Dried Cranberries',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_salad_id,),
));

$post_grilled_peach_and_apricot_salad_id = td_demo_content::add_post(array(
	'title' => 'Grilled Peach and Apricot Salad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_salad_id,),
));

$post_roasted_potato_salad_with_mustard_walnut_vinaigrette_id = td_demo_content::add_post(array(
	'title' => 'Roasted Potato Salad With Mustard-Walnut Vinaigrette',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_salad_id,),
));

$post_tomato_salad_with_corn_summer_squash_roasted_id = td_demo_content::add_post(array(
	'title' => 'Tomato Salad With Corn, Summer Squash & Roasted',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_salad_id,),
));

$post_garlicky_roasted_potato_salad_id = td_demo_content::add_post(array(
	'title' => 'Garlicky Roasted Potato Salad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_salad_id,),
));

$post_crispy_salmon_with_corn_blackberry_shishito_salad_id = td_demo_content::add_post(array(
	'title' => 'Crispy Salmon With Corn, Blackberry & Shishito Salad',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_salad_id,),
));

$post_raspberry_jam_crumb_cake_recipe_id = td_demo_content::add_post(array(
	'title' => 'Raspberry Jam Crumb Cake Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_strawberry_pavlova_recipe_the_book_id = td_demo_content::add_post(array(
	'title' => 'Sweet  Frosé Strawberry Desserts That Taste Like Summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_peanut_studded_milk_chocolate_brownies_id = td_demo_content::add_post(array(
	'title' => 'Peanut-Studded Milk Chocolate Brownies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_mini_pineapple_upside_down_cakes_id = td_demo_content::add_post(array(
	'title' => 'Mini Pineapple Upside-Down Cakes',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_chocolate_strawberry_layer_cake_recipe_id = td_demo_content::add_post(array(
	'title' => 'Chocolate & Strawberry Layer Cake Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_chocolate_brownies_recipe_id = td_demo_content::add_post(array(
	'title' => 'Chocolate Brownies Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_dessert_id,),
));

$post_creamy_gorgonzola_farfalle_with_apples_pecans_id = td_demo_content::add_post(array(
	'title' => 'Creamy Gorgonzola Farfalle With Apples & Pecans',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_cookbook_id,),
));

$post_duck_breast_with_blueberry_port_sauce_id = td_demo_content::add_post(array(
	'title' => 'Duck Breast With Blueberry-Port Sauce',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_cookbook_id,),
));

$post_fudgy_brownies_from_deliciously_ella_id = td_demo_content::add_post(array(
	'title' => 'Fudgy Brownies From Deliciously Ella',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_cookbook_id,),
));

$post_croque_madame_recipe_id = td_demo_content::add_post(array(
	'title' => 'Croque Madame Recipe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_cookbook_id,),
));

$post_how_to_make_a_vision_board_that_works_id = td_demo_content::add_post(array(
	'title' => 'How to Make a Vision Board That Works',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_5_lists_you_should_make_before_january_1st_id = td_demo_content::add_post(array(
	'title' => '5 Lists You Should Make Before January 1st',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_manuka_honey_face_mask_benefits_how_to_do_it_id = td_demo_content::add_post(array(
	'title' => 'Manuka Honey Face Mask Benefits + How to Do It',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_checking_your_beauty_routine_for_toxic_ingredients_id = td_demo_content::add_post(array(
	'title' => 'Checking Your Beauty Routine For Toxic Ingredients',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_longer_thicker_eyelashes_without_extensions_id = td_demo_content::add_post(array(
	'title' => 'Longer, Thicker Eyelashes without Extensions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_beauty_id,),
));

$post_easy_natural_diy_beauty_products_and_remedies_id = td_demo_content::add_post(array(
	'title' => 'Easy, Natural DIY Beauty Products and Remedies',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_beauty_id,),
));


/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_homepage_id = td_demo_content::add_page(array(
	'title' => 'Homepage',
	'file' => 'homepage.txt',
	'template' => 'default',
	'homepage' => true,
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_main_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_main_menu_id,
	'page_id' => $page_homepage_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Cookbook',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_cookbook_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Lifestyle',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_lifestyle_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Recipe Inspiration',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_recipe_inspiration_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Health',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_health_id,
	'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Beauty',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_beauty_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_link(array(
	'title' => 'More',
	'add_to_menu_id' => $menu_main_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Dessert',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_dessert_id,
	'parent_id' => $menu_item_6_id
));

$menu_item_8_id = td_demo_menus::add_category(array(
	'title' => 'Salad',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_salad_id,
	'parent_id' => $menu_item_6_id
));

$menu_item_9_id = td_demo_menus::add_category(array(
	'title' => 'Fish',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_fish_id,
	'parent_id' => $menu_item_6_id
));

$menu_item_10_id = td_demo_menus::add_category(array(
	'title' => 'Chicken',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_chicken_id,
	'parent_id' => $menu_item_6_id
));

$menu_item_11_id = td_demo_menus::add_category(array(
	'title' => 'Steak',
	'add_to_menu_id' => $menu_main_menu_id,
	'category_id' => $cat_steak_id,
	'parent_id' => $menu_item_6_id
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_tag_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template – Gourmet PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_gourmet_pro_id);


$template_date_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template – Gourmet PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_gourmet_pro_id);


$template_404_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Gourmet PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_gourmet_pro_id);


$template_search_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Search Template - Gourmet PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_gourmet_pro_id);


$template_author_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template – Gourmet PRO',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_gourmet_pro_id);


$template_category_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Category Template - Gourmet PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_gourmet_pro_id);


$template_single_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Single Template - Gourmet PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_gourmet_pro_id);


$template_footer_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Footer Template - Gourmet PRO',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));
td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_gourmet_pro_id);

$template_header_template_gourmet_pro_id = td_demo_content::add_cloud_template(array(
	'title' => 'Header Template - Gourmet PRO',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_gourmet_pro_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_gourmet_pro_id, 'header_mobile_menu_id', $menu_main_menu_id );



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('tdx_pic_9');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array('facebook' => '#','instagram' => '#','vk' => '#','youtube' => '#',));
