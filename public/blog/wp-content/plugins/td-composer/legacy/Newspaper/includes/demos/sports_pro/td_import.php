<?php



/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_athletics_id = td_demo_category::add_category(array(
	'category_name' => 'Athletics',
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

$cat_cycling_id = td_demo_category::add_category(array(
	'category_name' => 'Cycling',
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

$cat_football_id = td_demo_category::add_category(array(
	'category_name' => 'Football',
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

$cat_formula_1_id = td_demo_category::add_category(array(
	'category_name' => 'Formula 1',
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

$cat_gossip_id = td_demo_category::add_category(array(
	'category_name' => 'Gossip',
	'parent_id' => $cat_football_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_leagues_cups_id = td_demo_category::add_category(array(
	'category_name' => 'Leagues & Cups',
	'parent_id' => $cat_football_id,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));

$cat_womens_id = td_demo_category::add_category(array(
	'category_name' => 'Women\'s',
	'parent_id' => $cat_football_id,
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
$post_td_post_froome_close_to_return_after_crash_id = td_demo_content::add_post(array(
	'title' => 'Froome close to return after crash',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_the_cyclist_who_turns_pain_into_triumph_id = td_demo_content::add_post(array(
	'title' => 'The cyclist who turns pain into triumph',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_wrong_to_use_rio_experience_as_guide_for_tokyo_id = td_demo_content::add_post(array(
	'title' => 'Wrong to use Rio experience as guide for Tokyo',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_koren_and_bozic_banned_for_two_years_id = td_demo_content::add_post(array(
	'title' => 'Koren and Bozic banned for two years',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_simmons_wins_mens_junior_road_title_id = td_demo_content::add_post(array(
	'title' => 'Simmons wins men\'s junior road title',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_mollema_captures_tour_of_lombardy_id = td_demo_content::add_post(array(
	'title' => 'Mollema captures Tour of Lombardy',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_cycling_id,),
));

$post_td_post_do_you_know_these_sporting_records_id = td_demo_content::add_post(array(
	'title' => 'Do you know these sporting records?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_hughes_flying_high_on_and_off_the_track_id = td_demo_content::add_post(array(
	'title' => 'Hughes \'flying high\' on and off the track',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_usain_bolt_the_race_that_shook_the_world_id = td_demo_content::add_post(array(
	'title' => 'Usain Bolt: The race that shook the world',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_the_inside_story_of_salazars_downfall_id = td_demo_content::add_post(array(
	'title' => 'The inside story of Salazar\'s downfall',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_kosgei_shatters_womens_marathon_record_id = td_demo_content::add_post(array(
	'title' => 'Kosgei shatters women\'s marathon record',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_kipchoge_breaks_two_hour_marathon_mark_id = td_demo_content::add_post(array(
	'title' => 'Kipchoge breaks two-hour marathon mark',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_athletics_id,),
));

$post_td_post_ferraris_vettel_leclerc_say_dispute_is_over_id = td_demo_content::add_post(array(
	'title' => 'Ferrari\'s Vettel & Leclerc say dispute is over',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_for_leclerc_success_comes_with_a_darker_side_id = td_demo_content::add_post(array(
	'title' => 'For Leclerc, success comes with a darker side',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_bottas_wins_in_japan_and_mercedes_sixth_title_id = td_demo_content::add_post(array(
	'title' => 'Bottas wins in Japan and Mercedes sixth title',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_bottas_gets_ahead_of_vettel_off_the_line_id = td_demo_content::add_post(array(
	'title' => 'Bottas gets ahead of Vettel off the line',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_mercedes_gain_greatest_label_id = td_demo_content::add_post(array(
	'title' => 'Mercedes gain \'greatest\' label',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_how_florsch_came_back_from_her_170mph_crash_id = td_demo_content::add_post(array(
	'title' => 'How Florsch came back from her 170mph crash',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_formula_1_id,),
));

$post_td_post_james_player_of_match_before_being_sent_off_id = td_demo_content::add_post(array(
	'title' => 'James player of match - before being sent off',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_thomas_shines_as_west_ham_beat_brighton_id = td_demo_content::add_post(array(
	'title' => 'Thomas shines as West Ham beat Brighton',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_who_will_win_the_womens_super_league_id = td_demo_content::add_post(array(
	'title' => 'Who will win the Women\'s Super League?',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_theres_a_lot_more_to_life_than_football_id = td_demo_content::add_post(array(
	'title' => '\'There\'s a lot more to life than football\'',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_manchester_united_win_handsomely_at_spurs_id = td_demo_content::add_post(array(
	'title' => 'Manchester United win handsomely at Spurs',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_chelsea_comeback_ends_arsenals_unbeaten_run_id = td_demo_content::add_post(array(
	'title' => 'Chelsea comeback ends Arsenal\'s unbeaten run',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_womens_id,),
));

$post_td_post_how_england_players_rated_in_bulgaria_id = td_demo_content::add_post(array(
	'title' => 'How England players rated in Bulgaria',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_spain_wanted_benitez_at_world_cup_2_id = td_demo_content::add_post(array(
	'title' => 'Spain wanted Benitez at World Cup',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_neymar_limps_off_as_brazil_held_by_nigeria_id = td_demo_content::add_post(array(
	'title' => 'Neymar limps off as Brazil held by Nigeria',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_7',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_goalkeeper_vorm_rejoins_tottenham_id = td_demo_content::add_post(array(
	'title' => 'Goalkeeper Vorm rejoins Tottenham',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_8',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_football_suspended_in_catalonia_id = td_demo_content::add_post(array(
	'title' => 'Football suspended in Catalonia',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_9',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_ronaldo_scores_700th_career_goal_id = td_demo_content::add_post(array(
	'title' => 'Ronaldo scores 700th career goal',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_10',
	'categories_id_array' => array($cat_leagues_cups_id,),
));

$post_td_post_christian_eriksen_wants_real_madrid_move_in_summer_id = td_demo_content::add_post(array(
	'title' => 'Christian Eriksen wants Real Madrid move in summer',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_gossip_id,),
));

$post_td_post_spain_wanted_benitez_at_world_cup_id = td_demo_content::add_post(array(
	'title' => 'Spain wanted Benitez at World Cup',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_gossip_id,),
));

$post_td_post_investor_can_get_leeds_up_to_level_of_man_city_id = td_demo_content::add_post(array(
	'title' => 'Investor \'can get Leeds up to level of Man City\'',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_gossip_id,),
));

$post_td_post_olivier_giroud_cannot_accept_frank_lampard_snub_id = td_demo_content::add_post(array(
	'title' => 'Olivier Giroud \'cannot accept\' Frank Lampard snub',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_gossip_id,),
));

$post_td_post_tottenham_keeps_bruno_fernandes_under_the_eye_id = td_demo_content::add_post(array(
	'title' => 'Tottenham keeps Bruno Fernandes under the eye',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_gossip_id,),
));

$post_td_post_man_utd_reach_verbal_agreement_with_mario_mandzukic_id = td_demo_content::add_post(array(
	'title' => 'Man Utd reach verbal agreement with Mario Mandzukic',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_6',
	'categories_id_array' => array($cat_gossip_id,),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', '');
$menu_td_demo_custom_menu_id = td_demo_menus::create_menu('td-demo-custom-menu', '');


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


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


$template_header_template_normal_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Normal',
    'file' => 'header_normal_cloud_template.txt',
    'template_type' => 'header',
));
td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_normal_id);
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_normal_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );


$template_header_template_overlay_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template - Overlay',
    'file' => 'header_overlay_cloud_template.txt',
    'template_type' => 'header',
));
//update mobile menu id in cloud header template
update_post_meta( $template_header_template_overlay_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template('tdb_template_' . $template_footer_template_id);


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_football_menu_page_id = td_demo_content::add_page(array(
    'title' => 'Football Menu Page',
    'file' => 'football_menu_page.txt',
));

$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
    'homepage' => true,
    'header_template_id' => $template_header_template_overlay_id
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Football',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_football_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_category(array(
	'title' => 'Gossip',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_gossip_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_3_id = td_demo_menus::add_category(array(
	'title' => 'Leagues & Cups',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_leagues_cups_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_4_id = td_demo_menus::add_category(array(
	'title' => 'Women\'s',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_womens_id,
	'parent_id' => $menu_item_1_id
));

$menu_item_5_id = td_demo_menus::add_category(array(
	'title' => 'Formula 1',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_formula_1_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_category(array(
	'title' => 'Athletics',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_athletics_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_category(array(
	'title' => 'Cycling',
	'add_to_menu_id' => $menu_td_demo_custom_menu_id,
	'category_id' => $cat_cycling_id,
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Home',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_home_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_category(array(
	'title' => 'Football',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_football_id,
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Formula 1',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_formula_1_id,
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Athletics',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_athletics_id,
	'parent_id' => ''
));

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
	'title' => 'Cycling',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'category_id' => $cat_cycling_id,
	'parent_id' => ''
));





/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_util::update_option('tds_footer_page', $template_footer_template_id);

td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());
