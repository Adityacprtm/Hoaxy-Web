<?php



/*  ----------------------------------------------------------------------------
	CATEGORIES
*/
$cat_advice_and_support_id = td_demo_category::add_category(array(
    'category_name' => 'Advice and support',
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

$cat_china_id = td_demo_category::add_category(array(
    'category_name' => 'China',
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

$cat_coronavirus_explained_id = td_demo_category::add_category(array(
    'category_name' => 'Coronavirus explained',
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

$cat_france_id = td_demo_category::add_category(array(
    'category_name' => 'France',
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

$cat_italy_id = td_demo_category::add_category(array(
    'category_name' => 'Italy',
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

$cat_news_id = td_demo_category::add_category(array(
    'category_name' => 'News',
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

$cat_uk_id = td_demo_category::add_category(array(
    'category_name' => 'UK',
    'parent_id' => $cat_news_id,
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

$cat_us_id = td_demo_category::add_category(array(
    'category_name' => 'US',
    'parent_id' => $cat_news_id,
    'category_template' => '',
    'top_posts_style' => '',
    'description' => '',
    'background_td_pic_id' => '',
    'boxed_layout' => 'hide',
    'sidebar_id' => '',
    'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID
    'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar
));

$cat_videos_id = td_demo_category::add_category(array(
    'category_name' => 'Videos',
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
$post_td_post_coronavirus_do_face_masks_work_id = td_demo_content::add_post(array(
    'title' => 'Coronavirus: Do face masks work?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_videos_id,),
    'featured_video_url' => 'https://www.youtube.com/watch?v=O-3Mlj3MQ_Q',
    'post_format' => 'video'
));

$post_td_post_how_to_clean_your_smartphone_safely_id = td_demo_content::add_post(array(
    'title' => 'How to clean your smartphone safely',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_videos_id,),
    'featured_video_url' => 'https://www.youtube.com/watch?v=O-3Mlj3MQ_Q',
    'post_format' => 'video'
));

$post_td_post_why_and_how_to_stop_touching_our_faces_id = td_demo_content::add_post(array(
    'title' => 'Why and how to stop touching our faces',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_videos_id,),
    'featured_video_url' => 'https://www.youtube.com/watch?v=O-3Mlj3MQ_Q',
    'post_format' => 'video'
));

$post_td_post_im_feeling_ill_do_i_have_coronavirus_id = td_demo_content::add_post(array(
    'title' => 'I\'m feeling ill, do I have coronavirus?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_videos_id,),
    'featured_video_url' => 'https://www.youtube.com/watch?v=O-3Mlj3MQ_Q',
    'post_format' => 'video'
));

$post_td_post_how_to_keep_2m_social_distancing_id = td_demo_content::add_post(array(
    'title' => 'How to keep 2m social distancing',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_videos_id,),
    'featured_video_url' => 'https://www.youtube.com/watch?v=O-3Mlj3MQ_Q',
    'post_format' => 'video'
));

$post_td_post_more_coronavirus_myths_to_ignore_id = td_demo_content::add_post(array(
    'title' => 'More coronavirus myths to ignore',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_advice_and_support_id,),
));

$post_td_post_should_more_of_us_wear_face_masks_id = td_demo_content::add_post(array(
    'title' => 'Should more of us wear face masks?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_advice_and_support_id,),
));

$post_td_post_all_your_questions_about_coronavirus_id = td_demo_content::add_post(array(
    'title' => 'All your questions about coronavirus',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_advice_and_support_id,),
));

$post_td_post_how_to_care_for_someone_with_covid_19_id = td_demo_content::add_post(array(
    'title' => 'How to care for someone with Covid-19',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_advice_and_support_id,),
));

$post_td_post_how_to_protect_your_mental_health_id = td_demo_content::add_post(array(
    'title' => 'How to protect your mental health',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_advice_and_support_id,),
));

$post_td_post_how_close_are_we_to_a_vaccine_id = td_demo_content::add_post(array(
    'title' => 'How close are we to a vaccine?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_coronavirus_explained_id,),
));

$post_td_post_different_types_of_coronavirus_test_id = td_demo_content::add_post(array(
    'title' => 'Different types of coronavirus test?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_coronavirus_explained_id,),
));

$post_td_post_what_the_virus_does_to_the_body_id = td_demo_content::add_post(array(
    'title' => 'What the virus does to the body',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_coronavirus_explained_id,),
));

$post_td_post_when_do_people_go_to_hospital_id = td_demo_content::add_post(array(
    'title' => 'When do people go to hospital?',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_coronavirus_explained_id,),
));

$post_td_post_tracking_the_global_outbreak_id = td_demo_content::add_post(array(
    'title' => 'Tracking the global pandemic outbreak',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_coronavirus_explained_id,),
));

$post_td_post_france_reports_fewer_coronavirus_deaths_in_recent_24_hour_period_id = td_demo_content::add_post(array(
    'title' => 'France reports fewer coronavirus deaths in recent 24-hour period',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_france_id,),
));

$post_td_post_france_marshals_high_speed_trains_to_transfer_coronavirus_patients_id = td_demo_content::add_post(array(
    'title' => 'France marshals high-speed trains to transfer coronavirus patients',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_france_id,),
));

$post_td_post_factory_adapts_its_ventilator_for_the_fight_against_coronavirus_id = td_demo_content::add_post(array(
    'title' => 'Factory adapts its ventilators',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_france_id,),
));

$post_td_post_coronavirus_throws_a_lifeline_to_macrons_troubled_presidency_id = td_demo_content::add_post(array(
    'title' => 'Coronavirus throws a lifeline to Macron',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_france_id,),
));

$post_td_post_abrupt_reversals_on_face_mask_policy_raise_new_questions_id = td_demo_content::add_post(array(
    'title' => 'Abrupt reversals on face mask policy raise new questions',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_france_id,),
));

$post_td_post_air_china_cuts_flights_between_china_and_us_id = td_demo_content::add_post(array(
    'title' => 'Air China cuts flights between China and US',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_china_id,),
));

$post_td_post_china_sees_rise_in_asymptomatic_coronavirus_cases_id = td_demo_content::add_post(array(
    'title' => 'China sees rise in asymptomatic coronavirus cases',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_china_id,),
));

$post_td_post_china_faces_new_wave_of_coronavirus_infections_id = td_demo_content::add_post(array(
    'title' => 'China faces new wave of coronavirus infections',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_china_id,),
));

$post_td_post_china_releases_jailed_human_rights_lawyer_id = td_demo_content::add_post(array(
    'title' => 'China releases jailed human rights lawyer',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_china_id,),
));

$post_td_post_people_have_started_leaving_their_houses_again_id = td_demo_content::add_post(array(
    'title' => 'People have started leaving their houses again',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_china_id,),
));

$post_td_post_italian_mayor_flies_his_student_daughters_out_of_england_id = td_demo_content::add_post(array(
    'title' => 'Italian mayor flies his student daughters out of England',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_italy_id,),
));

$post_td_post_popes_blessing_in_empty_st_peters_square_id = td_demo_content::add_post(array(
    'title' => 'Pope\'s blessing in empty St Peter\'s Square',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_italy_id,),
));

$post_td_post_italy_sets_aside_e400m_as_social_unrest_mounts_id = td_demo_content::add_post(array(
    'title' => 'Italy sets aside €400m as social unrest mounts',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_italy_id,),
));

$post_td_post_italy_records_lowest_coronavirus_death_toll_for_a_week_id = td_demo_content::add_post(array(
    'title' => 'Italy records lowest coronavirus death toll for a week',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_italy_id,),
));

$post_td_post_lombardy_insists_on_face_masks_to_stop_covid_19_id = td_demo_content::add_post(array(
    'title' => 'Lombardy insists on face masks to stop Covid-19',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_italy_id,),
));

$post_td_post_couples_fear_after_cruise_coronavirus_lock_in_id = td_demo_content::add_post(array(
    'title' => 'Couple\'s \'fear\' after cruise coronavirus lock-in',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_1',
    'categories_id_array' => array($cat_uk_id,),
));

$post_td_post_social_distancing_in_dairy_farms_milking_parlour_id = td_demo_content::add_post(array(
    'title' => 'Social distancing in dairy farm\'s milking parlour',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_2',
    'categories_id_array' => array($cat_uk_id,),
));

$post_td_post_victoria_beckham_humbled_by_nhs_staff_id = td_demo_content::add_post(array(
    'title' => 'Victoria Beckham \'humbled\' by NHS staff',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_3',
    'categories_id_array' => array($cat_uk_id,),
));

$post_td_post_employers_told_to_keep_staff_two_metres_apart_id = td_demo_content::add_post(array(
    'title' => 'Employers told to keep staff two metres apart',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_4',
    'categories_id_array' => array($cat_uk_id,),
));

$post_td_post_pm_in_intensive_care_after_virus_symptoms_worsen_id = td_demo_content::add_post(array(
    'title' => 'PM in intensive care after virus symptoms worsen',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_5',
    'categories_id_array' => array($cat_uk_id,),
));

$post_td_post_us_death_rates_v_china_italy_and_south_korea_id = td_demo_content::add_post(array(
    'title' => 'US death rates v China, Italy and South Korea',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_6',
    'categories_id_array' => array($cat_us_id,),
));

$post_td_post_the_us_governor_who_saw_it_coming_early_id = td_demo_content::add_post(array(
    'title' => 'The US governor who saw it coming early',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_7',
    'categories_id_array' => array($cat_us_id,),
));

$post_td_post_trumps_changing_views_on_covid_19_id = td_demo_content::add_post(array(
    'title' => 'Trump\'s changing views on Covid-19',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_8',
    'categories_id_array' => array($cat_us_id,),
));

$post_td_post_pregnancy_during_a_pandemic_is_terrifying_id = td_demo_content::add_post(array(
    'title' => 'Pregnancy during a pandemic is terrifying',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_9',
    'categories_id_array' => array($cat_us_id,),
));

$post_td_post_things_the_us_has_got_wrong_and_got_right_id = td_demo_content::add_post(array(
    'title' => 'Things the US has got wrong - and got right',
    'file' => 'post_default.txt',
    'featured_image_td_id' => 'td_pic_10',
    'categories_id_array' => array($cat_us_id,),
));


/*  ----------------------------------------------------------------------------
	PAGES
*/
$page_home_id = td_demo_content::add_page(array(
    'title' => 'Home',
    'file' => 'home.txt',
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
    'title' => 'Home',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'page_id' => $page_home_id,
    'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_mega_menu(array(
    'title' => 'News',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_news_id,
    'parent_id' => ''
), true);

$menu_item_2_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Coronavirus explained',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_coronavirus_explained_id,
    'parent_id' => ''
), true);

$menu_item_3_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Advice and support',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_advice_and_support_id,
    'parent_id' => ''
), true);

$menu_item_4_id = td_demo_menus::add_mega_menu(array(
    'title' => 'Videos',
    'add_to_menu_id' => $menu_td_demo_header_menu_id,
    'category_id' => $cat_videos_id,
    'parent_id' => ''
), true);


/*  ----------------------------------------------------------------------------
	CLOUD TEMPLATES
*/
$template_404_template_id = td_demo_content::add_cloud_template(array(
    'title' => '404 Template',
    'file' => '404_cloud_template.txt',
    'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id);


$template_tag_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Tag Template',
    'file' => 'tag_cloud_template.txt',
    'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id);


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


$template_date_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Date Template',
    'file' => 'date_cloud_template.txt',
    'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id);


$template_category_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Category Template',
    'file' => 'cat_cloud_template.txt',
    'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id);


$template_single_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Single Template',
    'file' => 'post_cloud_template.txt',
    'template_type' => 'single',
));

td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_single_template_id);


$template_footer_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Footer Template',
    'file' => 'footer_cloud_template.txt',
    'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id);


$template_header_template_id = td_demo_content::add_cloud_template(array(
    'title' => 'Header Template',
    'file' => 'header_cloud_template.txt',
    'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id);


update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id);



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
