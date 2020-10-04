<?php

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_architecture_id = td_demo_category::add_category(array(
	'category_name' => 'Architecture',
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

$cat_celebrity_style_id = td_demo_category::add_category(array(
	'category_name' => 'Celebrity Style',
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

$cat_dream_estates_id = td_demo_category::add_category(array(
	'category_name' => 'Dream Estates',
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

$cat_entrance_id = td_demo_category::add_category(array(
	'category_name' => 'Entrance',
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

$cat_innovation_id = td_demo_category::add_category(array(
	'category_name' => 'Innovation',
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

$cat_inspiration_id = td_demo_category::add_category(array(
	'category_name' => 'Inspiration',
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

$cat_kitchen_id = td_demo_category::add_category(array(
	'category_name' => 'Kitchen',
	'parent_id' => $cat_inspiration_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_bathroom_id = td_demo_category::add_category(array(
    'category_name' => 'Bathroom',
    'parent_id' => $cat_inspiration_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_bedroom_id = td_demo_category::add_category(array(
    'category_name' => 'Bedroom',
    'parent_id' => $cat_inspiration_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_living_room_id = td_demo_category::add_category(array(
	'category_name' => 'Living Room',
	'parent_id' => $cat_inspiration_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_tips_advices_id = td_demo_category::add_category(array(
	'category_name' => 'Tips &amp; Advices',
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

$post_td_post_restore_a_bath_unit_to_create_a_super_stylish_piece_of_furniture_id = td_demo_content::add_post(array(
    'title' => 'Restore a bath unit to create a super-stylish piece of furniture',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_architecture_id,$cat_bathroom_id,$cat_bedroom_id,$cat_celebrity_style_id,$cat_dream_estates_id,$cat_entrance_id,$cat_innovation_id,$cat_kitchen_id,$cat_living_room_id,$cat_tips_advices_id,),
));

$post_td_post_newly_renovated_with_original_details_medieval_cottage_in_england_id = td_demo_content::add_post(array(
    'title' => 'Newly renovated with original details medieval cottage in England',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_architecture_id,$cat_bathroom_id,$cat_bedroom_id,$cat_celebrity_style_id,$cat_dream_estates_id,$cat_entrance_id,$cat_innovation_id,$cat_kitchen_id,$cat_living_room_id,$cat_tips_advices_id,),
));

$post_td_post_light_and_bright_scandi_style_newly_renovated_double_home_in_glasgow_id = td_demo_content::add_post(array(
    'title' => 'Light and bright Scandi-style newly renovated double home in Glasgow',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_architecture_id,$cat_bathroom_id,$cat_bedroom_id,$cat_celebrity_style_id,$cat_dream_estates_id,$cat_entrance_id,$cat_innovation_id,$cat_kitchen_id,$cat_living_room_id,$cat_tips_advices_id,),
));

$post_td_post_300_year_old_property_that_was_originally_two_separate_dwellings_id = td_demo_content::add_post(array(
    'title' => '300-year-old property that was originally two separate dwellings',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_architecture_id,$cat_bathroom_id,$cat_bedroom_id,$cat_celebrity_style_id,$cat_dream_estates_id,$cat_entrance_id,$cat_innovation_id,$cat_kitchen_id,$cat_living_room_id,$cat_tips_advices_id,),
));

$post_td_post_edwardian_semi_in_essex_renovated_and_brought_to_life_with_colours_id = td_demo_content::add_post(array(
    'title' => 'Edwardian semi in Essex, renovated and  brought to life with colours',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_architecture_id,$cat_bathroom_id,$cat_bedroom_id,$cat_celebrity_style_id,$cat_dream_estates_id,$cat_entrance_id,$cat_innovation_id,$cat_kitchen_id,$cat_living_room_id,$cat_tips_advices_id,),
));

$post_td_post_the_best_gray_rock_how_to_choose_the_right_shade_for_your_walls_id = td_demo_content::add_post(array(
	'title' => 'The best gray rock – how to choose the right shade for your walls',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_tips_advices_id,),
));

$post_td_post_flooring_everything_you_need_to_know_about_fitting_and_cleaning_id = td_demo_content::add_post(array(
	'title' => 'Flooring – everything you need to know about fitting and cleaning',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_tips_advices_id,),
));

$post_td_post_how_to_clean_and_maintain_your_terrace_floors_and_patio_for_summer_id = td_demo_content::add_post(array(
	'title' => 'How to clean and maintain your terrace floors and patio for summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_tips_advices_id,),
));

$post_td_post_8_essentials_for_harmonious_hallway_and_entryway_interior_design_id = td_demo_content::add_post(array(
	'title' => '8 essentials for harmonious hallway and entryway interior design',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_tips_advices_id,),
));

$post_td_post_the_best_5_last_minute_fall_table_decorating_ideas_to_try_this_year_id = td_demo_content::add_post(array(
	'title' => 'The best 5 last minute fall table decorating ideas to try this year',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_tips_advices_id,),
));

$post_td_post_examining_the_architectural_impact_of_indonesian_volcanic_geography_id = td_demo_content::add_post(array(
	'title' => 'The architectural impact of Indonesian volcanic geography',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_architecture_id,),
));

$post_td_post_landscape_architecture_is_experiencing_a_new_golden_age_id = td_demo_content::add_post(array(
	'title' => 'Landscape architecture is experiencing a new golden age',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_architecture_id,),
));

$post_td_post_japanese_house_in_a_forest_landscape_with_views_of_trees_and_sky_id = td_demo_content::add_post(array(
	'title' => 'Japanese house in a forest landscape with views of trees and sky',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_architecture_id,),
));

$post_td_post_architectural_details_the_perfect_prefabricated_home_options_id = td_demo_content::add_post(array(
	'title' => 'Architectural details: the perfect prefabricated home options',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_architecture_id,),
));

$post_td_post_porcelanosa_design_festival_opening_doors_to_an_inspiring_crowd_id = td_demo_content::add_post(array(
	'title' => 'Porcelanosa Design Festival opening doors to an inspiring crowd',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_architecture_id,),
));

$post_td_post_tastefully_decorated_rustic_mountain_home_in_a_breathtaking_landscape_id = td_demo_content::add_post(array(
	'title' => 'Tastefully decorated, rustic mountain home in a breathtaking landscape',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_dream_estates_id,),
));

$post_amazing_mountain_chalet_overlooking_the_alps_is_all_you_need_id = td_demo_content::add_post(array(
	'title' => 'Amazing mountain chalet overlooking the alps is all you need',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_dream_estates_id,),
));

$post_td_post_swedish_villa_house_with_modern_garden_and_large_patio_space_at_night_id = td_demo_content::add_post(array(
	'title' => 'Swedish villa house with modern garden and large patio space at night',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_dream_estates_id,),
));

$post_tropical_modern_home_manages_to_blend_nature_and_architecture_id = td_demo_content::add_post(array(
	'title' => 'Tropical & modern: home manages to blend nature and architecture',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_dream_estates_id,),
));

$post_td_post_classic_farmhouse_aesthetics_meet_modern_refinement_in_a_dreamy_setting_id = td_demo_content::add_post(array(
	'title' => 'Classic farmhouse aesthetics meet modern refinement in a dreamy setting',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_dream_estates_id,),
));

$post_td_post_modern_monochrome_home_with_calm_and_cosy_terrace_and_rocky_steps_id = td_demo_content::add_post(array(
	'title' => 'Modern monochrome home with calm and cosy terrace and rocky steps',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_celebrity_style_id,),
));

$post_td_post_scandinavian_boho_three_bed_decorated_with_neutral_tones_in_malibu_id = td_demo_content::add_post(array(
	'title' => 'Scandinavian boho three-bed decorated with neutral tones in Malibu',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_celebrity_style_id,),
));

$post_td_post_have_a_look_around_this_bold_and_colourful_1930s_semi_in_london_id = td_demo_content::add_post(array(
	'title' => 'Have a look around this bold and colourful 1930s semi in London',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_celebrity_style_id,),
));

$post_td_post_step_inside_this_modern_dream_home_placed_on_the_edge_of_the_forest_id = td_demo_content::add_post(array(
	'title' => 'Step inside this modern dream home placed on the edge of the forest',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_celebrity_style_id,),
));

$post_td_post_luxurious_four_bedroom_house_with_roman_stone_bath_house_built_in_la_id = td_demo_content::add_post(array(
	'title' => 'Luxurious four bedroom house with roman stone bath house, built in LA',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_celebrity_style_id,),
));

$post_td_post_mit_named_worlds_top_architecture_school_for_innovative_vision_id = td_demo_content::add_post(array(
	'title' => 'MIT named world\'s top architecture school for innovative vision',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_innovation_id,),
));

$post_td_post_berlin_frame_nears_completion_despite_architects_claims_of_breach_id = td_demo_content::add_post(array(
	'title' => 'Berlin frame nears completion despite architect\'s claims of breach',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_innovation_id,),
));

$post_td_post_denmark_to_get_its_first_purpose_built_architecture_institutions_id = td_demo_content::add_post(array(
	'title' => 'Denmark to get its first purpose-built architecture institutions',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_innovation_id,),
));

$post_td_post_studio_unveils_a_twisting_tree_covered_skyscraper_for_toulouse_id = td_demo_content::add_post(array(
	'title' => 'Studio unveils a twisting, tree-covered skyscraper for toulouse',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_innovation_id,),
));

$post_td_post_desert_home_built_from_volcanic_stone_contrasts_with_white_stucco_id = td_demo_content::add_post(array(
	'title' => 'Desert home built from volcanic stone contrasts with white stucco',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_innovation_id,),
));

$post_td_post_spacious_hallway_filled_with_plants_with_chic_flooring_and_ceiling_id = td_demo_content::add_post(array(
	'title' => 'Spacious hallway filled with plants with chic flooring and ceiling',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_entrance_id,),
));

$post_td_post_white_and_light_filled_hallway_with_large_green_window_covers_id = td_demo_content::add_post(array(
	'title' => 'White and light-filled hallway with large green window covers',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_entrance_id,),
));

$post_td_post_modern_monochrome_hallway_with_striped_wallpaper_and_brown_floor_id = td_demo_content::add_post(array(
	'title' => 'Modern monochrome hallway with striped wallpaper and brown floor',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_entrance_id,),
));

$post_td_post_luxe_hallway_with_chess_table_flooring_and_large_rounded_windows_id = td_demo_content::add_post(array(
	'title' => 'Luxe hallway with chess table flooring and large rounded windows',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_entrance_id,),
));

$post_td_post_classic_hallway_with_eucalyptus_wreath_and_metallic_accessories_id = td_demo_content::add_post(array(
	'title' => 'Classic hallway with eucalyptus wreath and metallic accessories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_entrance_id,),
));

$post_td_post_eclectic_living_room_with_tall_windows_and_suede_sofa_set_id = td_demo_content::add_post(array(
	'title' => 'Explore this eclectic living room with tall windows and suede sofa set',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_living_room_id,),
));

$post_td_post_white_living_room_light_canvas_sofa_and_large_plant_setting_id = td_demo_content::add_post(array(
	'title' => 'White living room, light canvas sofa and large plant setting',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_living_room_id,),
));

$post_td_post_modern_living_room_with_spectacular_windows_and_garden_view_id = td_demo_content::add_post(array(
	'title' => 'Modern living room with spectacular windows and garden view',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_living_room_id,),
));

$post_td_post_traditional_living_room_with_decorative_mahogany_furniture_id = td_demo_content::add_post(array(
	'title' => 'Traditional living room with decorative mahogany furniture',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_living_room_id,),
));

$post_td_post_living_room_with_lilac_sofa_floral_feature_wall_and_cosy_id = td_demo_content::add_post(array(
	'title' => 'Living room with lilac sofa, floral feature wall and cosy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_living_room_id,),
));

$post_td_post_peach_bedroom_with_oriental_style_bed_curtains_and_oak_furniture_id = td_demo_content::add_post(array(
	'title' => 'Peach bedroom with oriental style bed curtains and oak furniture',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_bedroom_id,),
));

$post_td_post_neutral_bedroom_with_floor_to_ceiling_windows_and_pastel_colors_id = td_demo_content::add_post(array(
	'title' => 'Neutral bedroom with floor to ceiling windows and pastel colors',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_bedroom_id,),
));

$post_td_post_minimalistic_bedroom_with_strong_wooden_walls_and_white_ceiling_id = td_demo_content::add_post(array(
	'title' => 'Minimalistic bedroom with strong wooden walls and white ceiling',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_bedroom_id,),
));

$post_td_post_white_bedroom_with_hollywood_star_portraits_and_blue_accents_id = td_demo_content::add_post(array(
	'title' => 'White bedroom with Hollywood star portraits and blue accents',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_bedroom_id,),
));

$post_td_post_boutique_style_bedroom_with_feature_wall_and_upholstered_bed_id = td_demo_content::add_post(array(
	'title' => 'Boutique style bedroom with feature wall and upholstered bed',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_bedroom_id,),
));

$post_td_post_ultra_chic_glossy_bath_with_wide_black_cabinets_and_copper_tub_id = td_demo_content::add_post(array(
	'title' => 'Ultra chic glossy bath with wide black cabinets and copper tub',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_bathroom_id,),
));

$post_td_post_royal_style_bathroom_with_freestanding_bath_and_ceramic_floors_id = td_demo_content::add_post(array(
	'title' => 'Royal style bathroom with freestanding bath and ceramic floors',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_bathroom_id,),
));

$post_td_post_classic_bathroom_with_wood_furniture_and_window_side_bath_tub_id = td_demo_content::add_post(array(
	'title' => 'Classic bathroom with wood furniture and window side bath tub',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_bathroom_id,),
));

$post_td_post_modern_bathroom_with_metro_rocks_large_plant_and_neutral_tiles_id = td_demo_content::add_post(array(
	'title' => 'Modern bathroom with metro rocks, large plant and neutral tiles',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_bathroom_id,),
));

$post_td_post_contemporary_clean_bathroom_with_gray_walls_and_exposed_bath_tub_id = td_demo_content::add_post(array(
	'title' => 'Contemporary clean bathroom with gray walls and exposed bath tub',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_bathroom_id,),
));

$post_td_post_cool_chic_kitchen_with_pretty_wood_accents_and_white_accessories_id = td_demo_content::add_post(array(
	'title' => 'Cool & chic kitchen with pretty wood accents and white accessories',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_kitchen_id,),
));

$post_td_post_wood_floring_kitchen_with_white_worktops_and_glass_and_metal_accents_id = td_demo_content::add_post(array(
	'title' => 'Wood floring kitchen with white worktops and glass and metal accents',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_kitchen_id,),
));

$post_td_post_clean_kitchen_with_chairs_minimalistic_style_and_ceiling_lights_id = td_demo_content::add_post(array(
	'title' => 'Clean kitchen with chairs, minimalistic style and ceiling lights',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_kitchen_id,),
));

$post_td_post_urban_kitchen_with_granite_tops_exposed_bulb_lights_and_island_id = td_demo_content::add_post(array(
	'title' => 'Urban kitchen with granite tops, exposed bulb lights and island',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_kitchen_id,),
));

$post_td_post_scandinavian_style_open_plan_kitchen_diner_with_wood_accents_id = td_demo_content::add_post(array(
	'title' => 'Scandinavian style open-plan kitchen-diner with wood accents',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_kitchen_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/

$template_header_template_main_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template Main – Estates',
    'file' => 'header_cloud_template_main.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_main_estates_id);


$template_header_template_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Estates',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));


$template_footer_template_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template - Estates',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_estates_id);


$template_search_template_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Search Template - Estates',
    'file' => 'search_cloud_template.txt',
    'template_type' => 'search',
));

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_estates_id);


$template_category_template_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template - Estates',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_estates_id);


$template_single_post_template_estates_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Post Template - Estates',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_post_template_estates_id);


$template_date_template_estates_id = td_demo_content::add_cloud_template(array(
	'title' => 'Date Template - Estates',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_estates_id);


$template_tag_template_estates_id = td_demo_content::add_cloud_template(array(
	'title' => 'Tag Template - Estates',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_estates_id);


$template_author_template_estates_id = td_demo_content::add_cloud_template(array(
	'title' => 'Author Template - Estates',
	'file' => 'author_cloud_template.txt',
	'template_type' => 'author',
    'header_template_id' => $template_header_template_estates_id,
));

td_demo_misc::update_global_author_template( 'tdb_template_' . $template_author_template_estates_id);


$template_404_template_estates_id = td_demo_content::add_cloud_template(array(
	'title' => '404 Template - Estates',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_estates_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
    'header_template_id' => $template_header_template_estates_id,
));


/*  ----------------------------------------------------------------------------
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Inspiration',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_inspiration_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
    'title' => 'Architecture',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_architecture_id,
    'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
    'title' => 'Dream Estates',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_dream_estates_id,
    'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_category(array(
    'title' => 'Celebrity Style',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_celebrity_style_id,
    'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_category(array(
    'title' => 'Innovation',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_innovation_id,
    'parent_id' => ''
));

$menu_item_5_id = td_demo_menus::add_category(array(
    'title' => 'Tips&Advices',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_tips_advices_id,
    'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator();if (function_exists('tdsp_css_generator')) { $generated_css .= tdsp_css_generator(); }td_util::update_option('tds_user_compile_css', $generated_css);
