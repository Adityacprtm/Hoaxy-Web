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
	'background_td_pic_id' => 'td_pic_1',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_bodycare_id = td_demo_category::add_category(array(
	'category_name' => 'Bodycare',
	'parent_id' => $cat_beauty_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_6',
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
	'background_td_pic_id' => 'td_pic_9',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_haircare_id = td_demo_category::add_category(array(
	'category_name' => 'Haircare',
	'parent_id' => $cat_beauty_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_10',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_makeup_id = td_demo_category::add_category(array(
	'category_name' => 'Makeup',
	'parent_id' => $cat_beauty_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_2',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_nailcare_id = td_demo_category::add_category(array(
	'category_name' => 'Nailcare',
	'parent_id' => $cat_beauty_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_5',
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
	'background_td_pic_id' => 'td_pic_7',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_skincare_id = td_demo_category::add_category(array(
	'category_name' => 'Skincare',
	'parent_id' => $cat_beauty_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => 'td_pic_3',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_wellness_id = td_demo_category::add_category(array(
	'category_name' => 'Wellness',
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


/*  ---------------------------------------------------------------------------- 
	ATTACHMMENTS
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/

$post_just_add_water_photoshoot_in_the_sun_id = td_demo_content::add_post(array(
    'title' => 'Just add Water: Photoshoot in the Sun',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_glitter_used_throughout_makeup_history_id = td_demo_content::add_post(array(
    'title' => 'Glitter used through Makeup History',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_spend_time_in_the_sun_for_healthy_skin_id = td_demo_content::add_post(array(
    'title' => 'Spend Time in the Sun for Healthy Skin',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_transparency_in_relationships_opens_up_ways_id = td_demo_content::add_post(array(
    'title' => 'Be Transparent in Your Relationships',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_picking_out_the_perfect_earrings_id = td_demo_content::add_post(array(
    'title' => 'Picking out the Perfect Earrings',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_leave_the_worries_with_a_simple_mindset_id = td_demo_content::add_post(array(
    'title' => 'Leave the Worries with a Simple Mindset',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_rock_out_your_inner_rocknroll_soul_id = td_demo_content::add_post(array(
    'title' => 'Rock Out your Inner Rock\'n\'Roll Soul',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_protect_your_skin_with_sunscreen_id = td_demo_content::add_post(array(
    'title' => 'Protect your Skin with Sunscreen',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_find_peace_with_the_flaws_of_one_another_id = td_demo_content::add_post(array(
    'title' => 'Find Peace with the Flaws of one Another',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_how_to_accesorize_for_a_night_out_id = td_demo_content::add_post(array(
    'title' => 'How to Accesorize for a Night Out',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_bodycare_id,$cat_fashion_id,$cat_haircare_id,$cat_makeup_id,$cat_nailcare_id,$cat_photography_id,$cat_skincare_id,$cat_wellness_id,),
));

$post_td_post_a_view_out_of_the_ordinary_lilianne_id = td_demo_content::add_post(array(
	'title' => 'A View Out of the Ordinary: Lilianne',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_couple_photoshoot_with_diane_and_riley_id = td_demo_content::add_post(array(
	'title' => 'Couple Photoshoot with Diane and Riley',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_give_the_gift_of_beauty_to_everyone_id = td_demo_content::add_post(array(
	'title' => 'Give the Gift of Beauty to Everyone',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_my_perspective_michael_smoke_glass_id = td_demo_content::add_post(array(
	'title' => 'My Perspective: Michael, smoke glass',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_bubble_fun_julliane_the_redhead_id = td_demo_content::add_post(array(
	'title' => 'Bubble Fun: Julliane the Redhead',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_photography_id,),
));

$post_td_post_beat_the_heat_with_cold_brew_tea_infusions_id = td_demo_content::add_post(array(
	'title' => 'Beat the Heat with Cold Tea Infusions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_how_to_keep_work_and_personal_life_apart_id = td_demo_content::add_post(array(
	'title' => 'How to Keep Work and Personal Life Apart',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_inspire_yourself_by_organizing_your_desk_id = td_demo_content::add_post(array(
	'title' => 'Inspire yourself by Organizing your Desk',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_clear_signs_for_serious_relationships_id = td_demo_content::add_post(array(
	'title' => 'Clear Signs for Serious Relationships',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_low_carb_diet_recipes_and_general_advice_id = td_demo_content::add_post(array(
	'title' => 'Low Carb Diet: Recipes and General Advice',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_wellness_id,),
));

$post_td_post_berrets_are_a_must_have_item_this_year_id = td_demo_content::add_post(array(
	'title' => 'Berrets are a Must-Have Item this Year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_all_out_all_denim_how_to_style_and_wear_id = td_demo_content::add_post(array(
	'title' => 'All-Denim: How to Style and Wear',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_choker_necklaces_that_break_boundaries_id = td_demo_content::add_post(array(
	'title' => 'Choker Necklaces that Break Boundaries',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_outfit_of_the_day_flower_patterns_for_summer_id = td_demo_content::add_post(array(
	'title' => 'Outfit of the Day: Flower Power',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_the_a_to_z_guide_for_fashion_trends_in_2019_id = td_demo_content::add_post(array(
	'title' => 'The A-to-Z guide for Fashion Trends in 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_fashion_id,),
));

$post_td_post_color_of_the_year_in_nail_art_form_id = td_demo_content::add_post(array(
	'title' => 'Color of the Year in Nail Art Form',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_nailcare_id,),
));

$post_td_post_how_to_apply_a_design_stamp_on_your_nails_id = td_demo_content::add_post(array(
	'title' => 'How to Apply a Design Stamp on your Nails',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_nailcare_id,),
));

$post_td_post_gel_nail_kits_dos_and_donts_id = td_demo_content::add_post(array(
	'title' => 'Gel Nail Kits: List of Do\'s and Don\'ts',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_nailcare_id,),
));

$post_td_post_easy_to_do_nail_art_tutorials_for_home_use_id = td_demo_content::add_post(array(
	'title' => 'Easy to do Nail Art Tutorials for Home',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_nailcare_id,),
));

$post_td_post_summer_colors_from_your_favorite_products_id = td_demo_content::add_post(array(
	'title' => 'Summer Colors as Favorite Products',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_nailcare_id,),
));

$post_td_post_why_lip_liners_make_a_huge_difference_id = td_demo_content::add_post(array(
	'title' => 'Why Lip Liners Make a Huge Difference',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_makeup_id,),
));

$post_td_post_a_new_way_to_wear_the_classic_red_lip_id = td_demo_content::add_post(array(
	'title' => 'A new Way to Wear the Classic Red Lip',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_makeup_id,),
));

$post_td_post_bronzer_dos_and_donts_a_simple_guide_id = td_demo_content::add_post(array(
	'title' => 'Bronzer Do\'s and Don\'ts: A simple Guide',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_makeup_id,),
));

$post_td_post_the_best_foundation_for_every_skin_type_id = td_demo_content::add_post(array(
	'title' => 'The Best Foundation for every Skin Type',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_makeup_id,),
));

$post_td_post_whats_in_my_makeup_bag_summer_2019_id = td_demo_content::add_post(array(
	'title' => 'What\'s in my Makeup Bag? Summer 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_makeup_id,),
));

$post_td_post_instant_deep_sleep_pillow_spray_id = td_demo_content::add_post(array(
	'title' => 'Get Instant Deep Sleep with this Pillow Spray',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_hand_massage_techniques_to_get_energized_id = td_demo_content::add_post(array(
	'title' => 'Get Energized with a Hand Massage Tip',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_four_sexy_summer_scents_for_your_skin_id = td_demo_content::add_post(array(
	'title' => 'Four Sexy Summer Scents for your Skin',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_new_body_lotion_to_replace_your_scrub_id = td_demo_content::add_post(array(
	'title' => 'New Body Lotion to Replace your Scrub',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_luxury_summer_skin_prep_with_lila_doe_id = td_demo_content::add_post(array(
	'title' => 'Luxury Summer Skin Prep with Lila Doe',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_bodycare_id,),
));

$post_td_post_how_to_choose_a_new_hairstyle_id = td_demo_content::add_post(array(
	'title' => 'How to Choose a new Hairstyle for Yourself',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_haircare_id,),
));

$post_td_post_simple_stylish_hair_care_that_works_id = td_demo_content::add_post(array(
	'title' => 'Simple Stylish Hair Care that Works',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_haircare_id,),
));

$post_td_post_beach_hair_with_no_added_heat_or_risk_id = td_demo_content::add_post(array(
	'title' => 'Beach Hair with no added Heat or Risk',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_haircare_id,),
));

$post_td_post_a_review_of_popular_hair_dryers_id = td_demo_content::add_post(array(
	'title' => 'A Review of Popular Hair Dryers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_haircare_id,),
));

$post_td_post_how_i_style_my_short_hair_every_day_id = td_demo_content::add_post(array(
	'title' => 'How I Style My Short Hair Every Day',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_haircare_id,),
));

$post_td_post_budget_friendly_cleansing_oil_for_everyone_id = td_demo_content::add_post(array(
	'title' => 'Budget Friendly Cleansing Oil for Everyone',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_skincare_id,),
));

$post_td_post_collagen_face_creams_to_revive_your_skin_id = td_demo_content::add_post(array(
	'title' => 'Collagen Face Creams to revive your Skin',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_skincare_id,),
));

$post_td_post_my_skincare_routine_summer_of_2019_id = td_demo_content::add_post(array(
	'title' => 'My Skincare Routine: Summer of 2019',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_skincare_id,),
));

$post_td_post_cleansing_gel_review_is_it_worth_picking_up_id = td_demo_content::add_post(array(
	'title' => 'Cleansing Gel Review: Is it Worth Picking Up?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_skincare_id,),
));

$post_td_post_5_amazing_moisturisers_for_very_dry_skin_id = td_demo_content::add_post(array(
	'title' => '5 Amazing Moisturisers for very Dry Skin',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_skincare_id,),
));



/*  ----------------------------------------------------------------------------
	MENUS
*/
$menu_beauty_pro_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');



// cloud template
$template_header_template_overlay_id = td_demo_content::add_cloud_template(array(
    'title' => 'Overlay Beauty Pro Header',
    'file' => 'header_cloud_template_overlay.txt',
    'template_type' => 'header',
));
//update mobile menu id in cloud header template // cloud_header_template_ID, mobile_menu_id, menu_ID
update_post_meta( $template_header_template_overlay_id, 'header_mobile_menu_id', $menu_beauty_pro_menu_id );

/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_homepage_id = td_demo_content::add_page(array(
    'title' => 'Homepage',
    'file' => 'homepage.txt',
    'homepage' => true,
    'header_template_id' => $template_header_template_overlay_id
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
    'title' => 'Homepage',
    'add_to_menu_id' => $menu_beauty_pro_menu_id,
    'page_id' => $page_homepage_id,
    'parent_id' => '',
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Beauty',
    'add_to_menu_id' => $menu_beauty_pro_menu_id,
    'category_id' => $cat_beauty_id,
    'parent_id' => '',
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Fashion',
    'add_to_menu_id' => $menu_beauty_pro_menu_id,
    'category_id' => $cat_fashion_id,
    'parent_id' => ''
), true);

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Photography',
    'add_to_menu_id' => $menu_beauty_pro_menu_id,
    'category_id' => $cat_photography_id,
    'parent_id' => ''
), true);

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Wellness',
    'add_to_menu_id' => $menu_beauty_pro_menu_id,
    'category_id' => $cat_wellness_id,
    'parent_id' => ''
), true);



/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_footer_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro - Footer Template',
	'file' => 'footer_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Tag Template',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);

$template_date_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Date Template',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_404_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro 404 Template',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_search_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Search Template',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_id);


$template_author_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Author Template',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Global Beauty Pro Header',
	'file' => 'header_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Category Template',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
	'title' => 'Beauty Pro Single Post Template',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);
//update mobile menu id in cloud header template
update_post_meta( $template_single_template_id, 'header_mobile_menu_id', $menu_beauty_pro_menu_id );




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
