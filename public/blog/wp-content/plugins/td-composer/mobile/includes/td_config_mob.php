<?php


class td_config_mob {

	/**
	 * setup the global theme specific variables.
	 * @depends td_global_mob
	 */
	static function on_td_global_after_config() {

        /**
         * js files list - loaded from the legacy /mobile theme
         */
        td_global_mob::$js_files = array(
            'tdExternal' =>             '/mobile/includes/js_dev/tdExternal.js',
            'tdDetect' =>               '/mobile/includes/js_dev/tdDetect.js',
            'tdUtil' =>                 '/mobile/includes/js_dev/tdUtil.js',
            'tdSite' =>                 '/mobile/includes/js_dev/tdSite.js',
            'tdAjaxSearch' =>           '/mobile/includes/js_dev/tdAjaxSearch.js',
            'vimeo_froogaloop' =>       '/mobile/includes/js_dev/vimeo_froogaloop.js',
            'tdVideoPlaylist' =>        '/mobile/includes/js_dev/tdVideoPlaylist.js',
            'tdEvents' =>               '/mobile/includes/js_dev/tdEvents.js',
            'tdAjaxCount' =>            '/mobile/includes/js_dev/tdAjaxCount.js',
            'tdCustomEvents' =>         '/mobile/includes/js_dev/tdCustomEvents.js',
            'tdAffix' =>                '/mobile/includes/js_dev/tdAffix.js',
            'tdLogin' =>                '/mobile/includes/js_dev/tdLogin.js',
        );

        /**
         * js files list - loaded from the main theme
         */
		td_global_mob::$js_files_main = array(
            'tdViewport' =>             '/legacy/common/wp_booster/js_dev/tdViewport.js',
            'tdPullDown' =>             '/legacy/common/wp_booster/js_dev/tdPullDown.js',
            'tdSocialSharing'=>         '/legacy/common/wp_booster/js_dev/tdSocialSharing.js',
            'tdShowVideo'=>             '/legacy/common/wp_booster/js_dev/tdShowVideo.js'
        );

		/**
		 * modules list
		 */
		$td_api_module_components = td_api_module::get_all();

		td_api_module::add('td_module_single_mob',
			array(  // this module is for internal use only
				'file' => TDC_PATH . '/mobile/includes/modules/td_module_single_mob.php',
				'text' => 'Single Module',
				'img' => '',
				'used_on_blocks' => '',
				'excerpt_title' => '',
				'excerpt_content' => '',
				'enabled_on_more_articles_box' => false,
				'enabled_on_loops' => false,
				'uses_columns' => false, // if the module uses columns on the page template + loop
				'category_label' => false,
				'class' => '',
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

		td_api_module::add('td_module_mob_1',
			array(
				'file' => TDC_PATH . '/mobile/includes/modules/td_module_mob_1.php',
				'text' => 'Module M1',
				'img' => '',
				'used_on_blocks' => '',
				'excerpt_title' => 12,
				'excerpt_content' => '',
				'enabled_on_more_articles_box' => false,
				'enabled_on_loops' => true,
				'uses_columns' => false,
				'category_label' => true,
				'class' => 'td_module_wrap td-animation-stack',
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

		td_api_module::add('td_module_mob_2',
			array(
				'file' => TDC_PATH . '/mobile/includes/modules/td_module_mob_2.php',
				'text' => 'Module M2',
				'img' => '',
				'used_on_blocks' => '',
				'excerpt_title' => 12,
				'excerpt_content' => '',
				'enabled_on_more_articles_box' => false,
				'enabled_on_loops' => true,
				'uses_columns' => false,
				'category_label' => true,
				'class' => 'td_module_wrap td-animation-stack',
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

		if (!array_key_exists('td_module_mx9', $td_api_module_components)) {
			td_api_module::add('td_module_mx9',
				array(
					'file'                         => td_global_mob::$get_parent_template_directory . '/includes/modules/td_module_mx9.php',
					'text'                         => 'Module MX9',
					'img'                          => '',
					'used_on_blocks'               => array( 'tdm_block_big_grid_2' ),
					'excerpt_title'                => 25,
					'excerpt_content'              => '',
					'enabled_on_more_articles_box' => false,
					'enabled_on_loops'             => false,
					'uses_columns'                 => false,
					'category_label'               => true,
					'class'                        => 'td-animation-stack',
					'group'                        => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
				)
			);
		}

		if (!array_key_exists('td_module_mx10', $td_api_module_components)) {
			td_api_module::add( 'td_module_mx10',
				array(
					'file'                         => td_global_mob::$get_parent_template_directory . '/includes/modules/td_module_mx10.php',
					'text'                         => 'Module MX10',
					'img'                          => '',
					'used_on_blocks'               => array( 'tdm_block_big_grid_2' ),
					'excerpt_title'                => 25,
					'excerpt_content'              => '',
					'enabled_on_more_articles_box' => false,
					'enabled_on_loops'             => false,
					'uses_columns'                 => false,
					'category_label'               => true,
					'class'                        => 'td-animation-stack',
					'group'                        => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
				)
			);
		}

		/**
		 * thumb list
		 */
		$td_api_thumb_components = td_api_thumb::get_all();

		if (!array_key_exists('td_265x198', $td_api_thumb_components)) {
			td_api_thumb::add( 'td_265x198',
				array(
					'name'                  => 'td_265x198',
					'width'                 => 265,
					'height'                => 198,
					'crop'                  => array( 'center', 'top' ),
					'post_format_icon_size' => 'normal',
					'used_on'               => array(
						'Module M1 (Mobile Theme)'
					),
					'no_image_path' => TDC_URL_LEGACY . '/assets',
				)
			);
		}

		if (!array_key_exists('td_741x486', $td_api_thumb_components)) {
			td_api_thumb::add( 'td_741x486',
				array(
					'name'                  => 'td_741x486',
					'width'                 => 741,
					'height'                => 486,
					'crop'                  => array( 'center', 'top' ),
					'post_format_icon_size' => 'normal',
					'used_on'               => array(
						'Big grid M1 (Mobile Theme)'
					),
					'no_image_path' => TDC_URL_LEGACY . '/assets',
				)
			);
		}

		/**
		 * block templates
		 */
		$td_api_block_template_components = td_api_block_template::get_all();

		if (!array_key_exists('td_block_template_1', $td_api_block_template_components)) {
			td_api_block_template::add( 'td_block_template_1',
				array(
					'text' => 'Block Header 1 - Default',
	                'img' => '',
	                'file' => TDC_PATH_LEGACY . '/includes/block_templates/td_block_template_1.php',
		            'params' => array(
						// title settings
	                    array(
	                        "type" => "colorpicker",
	                        "holder" => "div",
	                        "class" => "",
	                        "heading" => 'Title background color:',
	                        "param_name" => "header_color",
	                        "value" => '',
	                        "description" => 'Optional - Choose a custom title background color for this block',
	                        'td_type' => 'block_template',
	                    ),
						array(
							"type" => "colorpicker",
							"holder" => "div",
							"class" => "",
							"heading" => 'Title text color:',
							"param_name" => "header_text_color",
							"value" => '',
							"description" => 'Optional - Choose a custom title text color for this block',
							'td_type' => 'block_template',
						)
					)//end generic array
				)
			);
		}

		/**
		 * block
		 */
		$td_api_block_components = td_api_block::get_all();

		td_api_block::add('td_block_ad_box_mob',
			array(
				'map_in_visual_composer' => false,
				"name" => 'Ad box mobile',
				"base" => 'td_block_ad_box_mob',
				"class" => "",
				"controls" => "full",
				"category" => 'Blocks',
				'icon' => 'icon-pagebuilder-ads',
				'file' => TDC_PATH . '/mobile/includes/shortcodes/td_block_ad_box_mob.php',
			)
		);

		td_api_block::add('td_block_related_posts_mob',
			array(
				'map_in_visual_composer' => false,
				"name" => 'Mobile related posts',
				"base" => 'td_block_related_posts_mob',
				"class" => 'td_block_related_posts_mob',
				"controls" => "full",
				"category" => 'Blocks',
				'icon' => 'icon-pagebuilder-td_block_related_posts_mob',
				'file' => TDC_PATH . '/mobile/includes/shortcodes/td_block_related_posts_mob.php',
				"params" => td_config::td_block_big_grid_params(),
			)
		);

		td_api_block::add('td_block_big_grid_mob_1',
			array(
				'map_in_visual_composer' => false,
				"name" => 'Big Grid 1',
				"base" => 'td_block_big_grid_mob_1',
				"class" => 'td_block_big_grid_mob_1',
				"controls" => "full",
				"category" => 'Blocks',
				'icon' => 'icon-pagebuilder-td_block_big_grid_mob_1',
				'file' => TDC_PATH . '/mobile/includes/shortcodes/td_block_big_grid_mob_1.php',
				"params" => td_config::td_block_big_grid_params(),
			)
		);

		if (!array_key_exists('td_block_video_youtube', $td_api_block_components)) {
			td_api_block::add('td_block_video_youtube',
				array(
					'map_in_visual_composer' => true,
					"name"                   => 'Video Playlist',
					"base"                   => "td_block_video_youtube",
					"class"                  => "td_block_video_playlist_youtube",
					"controls"               => "full",
					"category"               => 'Blocks',
					'icon'                   => 'icon-pagebuilder-td-youtube',
					'file'                   => TDC_PATH . '/mobile/includes/shortcodes/td_block_video_youtube_mob.php',
				)
			);
		}

		if (!array_key_exists('td_block_video_vimeo', $td_api_block_components)) {
			td_api_block::add('td_block_video_vimeo',
				array(
					'map_in_visual_composer' => true,
					"name"                   => 'Video Playlist',
					"base"                   => "td_block_video_vimeo",
					"class"                  => "td_block_video_playlist_vimeo",
					"controls"               => "full",
					"category"               => 'Blocks',
					'icon'                   => 'icon-pagebuilder-td-vimeo',
					'file'                   => TDC_PATH . '/mobile/includes/shortcodes/td_block_video_vimeo_mob.php',
				)
			);
		}

		/**
		 * category templates
		 */
		td_api_category_template::add('td_category_template_mob_1',
			array (
				'file' => TDC_PATH . '/mobile/includes/category_templates/td_category_template_mob_1.php',
				'img' => td_global_mob::$get_parent_template_directory_uri . '/images/panel/category_templates/icon-category-1.png',
				'text' => 'Style 1',
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

		/**
		 * category top posts styles
		 */
		td_api_category_top_posts_style::add('td_category_top_posts_style_mob_1',
			array (
				'file' => TDC_PATH . '/mobile/includes/category_top_posts_styles/td_category_top_posts_style_mob_1.php',
				'posts_shown_in_the_loop' => 3,
				'img' => td_global_mob::$get_parent_template_directory_uri . '/images/panel/category_templates/icon-category-top-2.png',
				'text' => 'Grid 2',
				'td_block_name' => 'td_block_big_grid_mob_1',
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

        /**
         * smart lists
         */
        td_api_smart_list::add('td_smart_list_mob_1',
            array(
                'file' => TDC_PATH . '/mobile/includes/smart_lists/td_smart_list_mob_1.php',
                'text' => 'Smart list mobile 1',
                'img' => '',
                'extract_first_image' => true,
                'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
            )
        );

		td_api_smart_list::add('td_smart_list_mob_2',
			array(
				'file' => TDC_PATH . '/mobile/includes/smart_lists/td_smart_list_mob_2.php',
				'text' => 'Smart list mobile 2',
				'img' => '',
				'extract_first_image' => true,
				'group' => 'mob' // '' - main theme, 'mob' - mobile theme, 'woo' - woo theme
			)
		);

        td_api_smart_list::add('td_smart_list_amp_1',
            array(
                'file' => TDC_PATH . '/mobile/amp/smart_lists/td_smart_list_amp_1.php',
                'text' => 'Smart list amp 1',
                'img' => '',
                'extract_first_image' => true,
                'group' => 'mob'
            )
        );
		
		td_api_smart_list::add('td_smart_list_amp_2',
			array(
				'file' => TDC_PATH . '/mobile/amp/smart_lists/td_smart_list_amp_2.php',
				'text' => 'Smart list amp 2',
				'img' => '',
				'extract_first_image' => true,
				'group' => 'mob'
			)
		);
		
        /**
         * social sharing styles
         */
        $td_api_social_sharing_components = td_api_social_sharing_styles::get_all();

        if (!array_key_exists('style1', $td_api_social_sharing_components)) {
            td_api_social_sharing_styles::add('style1', array(
                'wrap_classes' => 'td-ps-bg td-ps-notext',
                'text' => 'Style 1',
                'img' => TDC_URL . '/assets/images/panel/post_sharing_styles/icon-post-sharing-1.png'
            ));
        }

		/**
		 * The typography settings for the panel and css compiler
		 */
		td_global_mob::$typography_settings_list = array (
			'mt_Header' => array (
				'mt_main_menu_mob' => array(
					'text' => 'Main Menu',
					'type' => 'default',
				),
                'mt_text_logo' => array(
                    'text' => 'Text logo',
                    'type' => 'default',
                ),
                'mt_tagline_text' => array(
                    'text' => 'Tagline text',
                    'type' => 'default',
                )
			),
            'mt_Modules - Article title' => array (
                'mt_module_general' => array(
                    'text' => 'General',
                    'type' => 'general_setting',
                ),
                'mt_module_1' => array(
                    'text' => 'Module 1',
                    'type' => 'default',
                ),
                'mt_module_2' => array(
                    'text' => 'Module 2',
                    'type' => 'default',
                )
            ),
			'mt_Post content' => array (
                'mt_post_title' => array(
                    'text' => 'Post Title',
                    'type' => 'default',
                ),
				'mt_post_content' => array(
					'text' => 'Post Content',
					'type' => 'default',
				),
                'mt_blockquote' => array(
                    'text' => 'Default blockquote',
                    'type' => 'default',
                ),
                'mt_box_quote' => array(
                    'text' => 'Box quote',
                    'type' => 'default',
                ),
                'mt_pull_quote' => array(
                    'text' => 'Pull quote',
                    'type' => 'default',
                ),
                'mt_lists' => array(
                    'text' => 'Lists',
                    'type' => 'default',
                ),
                'mt_h1' => array(
                    'text' => 'H1',
                    'type' => 'default',
                ),
                'mt_h2' => array(
                    'text' => 'H2',
                    'type' => 'default',
                ),
                'mt_h3' => array(
                    'text' => 'H3',
                    'type' => 'default',
                ),
                'mt_h4' => array(
                    'text' => 'H4',
                    'type' => 'default',
                ),
                'mt_h5' => array(
                    'text' => 'H5',
                    'type' => 'default',
                ),
                'mt_h6' => array(
                    'text' => 'H6',
                    'type' => 'default',
                )
			),
			'mt_Post elements' => array (
				'mt_post_category' => array(
					'text' => 'Category tag',
					'type' => 'default',
				),
                'mt_post_author' => array(
                    'text' => 'Author',
                    'type' => 'default',
                ),
                'mt_post_date' => array(
                    'text' => 'Date',
                    'type' => 'default',
                ),
                'mt_post_views_comments' => array(
                    'text' => 'Views and comments',
                    'type' => 'default',
                ),
                'mt_post_via_source_tags' => array(
                    'text' => 'Via/source/tags',
                    'type' => 'default',
                ),
                'mt_post_next_prev_title' => array(
                    'text' => 'Next/prev post title',
                    'type' => 'default',
                ),
                'mt_post_author_name' => array(
                    'text' => 'Box author name',
                    'type' => 'default',
                ),
                'mt_post_author_url' => array(
                    'text' => 'Box author url',
                    'type' => 'default',
                ),
                'mt_post_author_descr' => array(
                    'text' => 'Box author description',
                    'type' => 'default',
                ),
                'mt_post_related_title' => array(
                    'text' => 'Related article title',
                    'type' => 'default',
                )
			),
            'mt_Footer' => array (
                'mt_footer_text_about' => array(
                    'text' => 'Text under logo',
                    'type' => 'default',
                ),
                'mt_footer_copyright' => array(
                    'text' => 'Copyright text',
                    'type' => 'default',
                ),
                'mt_footer_menu' => array(
                    'text' => 'Footer menu',
                    'type' => 'default',
                )
            ),
		);

		td_global::$typography_settings_list = array_merge(
			td_global::$typography_settings_list,
			td_global_mob::$typography_settings_list
		);

		add_action('after_setup_theme', function() {
			global $td_translation_map;

			$theme = strtolower(TD_THEME_NAME);
			$td_translation_map = array(
				//top bar
				'Tel:' => __('Tel:', $theme),
				'Email:' => __('Email:', $theme),

				//header search
				'View all results' => __('View all results', $theme),
				'No results' => __('No results', $theme),

				'Home' => __('Home', $theme),

				//mobile menu
				'CLOSE' => __('CLOSE', $theme),

				//title tag
				'Page' => __('Page', $theme),


				//blocks
				'All' => __('All', $theme),
				'By' => __('By', $theme),
				'Load more' => __('Load more', $theme),
				'Modified date:' => __('Modified date:', $theme),

				//breadcrumbs
				'View all posts in' => __('View all posts in', $theme),
				'Tags' => __('Tags', $theme),

				//article / page
				'Previous article' => __('Previous article', $theme),
				'Next article' => __('Next article', $theme),
				'Authors' => __('Authors', $theme),
				'Author' => __('Author', $theme),
				'RELATED ARTICLES' => __('RELATED ARTICLES', $theme),   //on newspaper 4 it was: SIMILAR ARTICLES
				'MORE FROM AUTHOR' => __('MORE FROM AUTHOR', $theme),
				'VIA' => __('VIA', $theme),   //on newspaper4 it was lowercase
				'SOURCE' => __('SOURCE', $theme), //on newspaper4 it was lowercase
				'TAGS' => __('TAGS', $theme),
				'Share' => __('Share', $theme),
				'SHARE' => __('SHARE', $theme),
				'Continue' => __('Continue', $theme),
				'Read more' => __('Read more', $theme),
				'views' => __('views', $theme),


				//comments
				'Name:' => __('Name:', $theme),
				'Website:' => __('Website:', $theme),
				'Comment:' => __('Comment:', $theme),
				'LEAVE A REPLY' => __('LEAVE A REPLY', $theme),  //on newspaper4 it was lowercase
				'Post Comment' => __('Post Comment', $theme),
				'Cancel reply' => __('Cancel reply', $theme),
				'Reply' => __('Reply', $theme),
				'Log in to leave a comment' => __('Log in to leave a comment', $theme),
				'NO COMMENTS' => __('NO COMMENTS', $theme),
				'1 COMMENT' => __('1 COMMENT', $theme),
				'COMMENTS' => __('COMMENTS', $theme),
				'Your comment is awaiting moderation' => __('Your comment is awaiting moderation', $theme),
				'Please enter your name here' => __('Please enter your name here', $theme),
				'Please enter your email address here' => __('Please enter your email address here', $theme),
				'You have entered an incorrect email address!' => __('You have entered an incorrect email address!', $theme),
				'Please enter your comment!' => __('Please enter your comment!', $theme),
				'Logged in as'                        => __('Logged in as', $theme),
				'Log out?'                            => __('Log out?', $theme),
				'Logged in as %s. Edit your profile.' => __('Logged in as %s. Edit your profile.', $theme),
				'Edit' => __('Edit', $theme),
                'At' => __('At', $theme),


				//review
				'REVIEW OVERVIEW' => __('REVIEW OVERVIEW', $theme),  //on newspaper4 it was lowercase
				'SUMMARY' => __('SUMMARY', $theme),  //on newspaper4 it was lowercase
				'OVERALL SCORE' => __('OVERALL SCORE', $theme),

				//404
				'Ooops... Error 404' => __('Ooops... Error 404', $theme),
				"Sorry, but the page you are looking for doesn_t exist." => __("Sorry, but the page you are looking for doesn't exist.", $theme),
				'You can go to the' => __('You can go to the', $theme),
				'HOMEPAGE' => __('HOMEPAGE', $theme),


				'OUR LATEST POSTS' => __('OUR LATEST POSTS', $theme),

				//author page title atribute
				'Posts by' => __('Posts by', $theme),
				'POSTS' => __('POSTS', $theme),


				'Posts tagged with' => __('Posts tagged with', $theme),
				'Tag' => __('Tag', $theme),

				//archives
				'Daily Archives:' => __('Daily Archives:', $theme),
				'Monthly Archives:' => __('Monthly Archives:', $theme),
				'Yearly Archives:' => __('Yearly Archives:', $theme),
				'Archives' => __('Archives', $theme),


				//homepage
				'LATEST ARTICLES' => __('LATEST ARTICLES', $theme),

				//search page
				'search results' => __('search results', $theme),
				'Search' => __('Search', $theme),
				"If you_re not happy with the results, please do another search" => __("If you're not happy with the results, please do another search", $theme),

				//footer widget
				'Contact us' => __('Contact us', $theme),

				//footer instagram
				'Follow us on Instagram' => __('Follow us on Instagram', $theme),

				//pagination
				'Page %CURRENT_PAGE% of %TOTAL_PAGES%' => __('Page %CURRENT_PAGE% of %TOTAL_PAGES%', $theme),
				'Next' => __('Next', $theme),
				'Prev' => __('Prev', $theme),
				'Back' => __('Back', $theme),


				'No results for your search' => __('No results for your search', $theme),
				'No posts to display' => __('No posts to display', $theme),

				//modal window
				'LOG IN'  => __('LOG IN', $theme),
				'Sign in / Join'  => __('Sign in / Join', $theme),
				'Sign in' => __('Sign in', $theme),
				'Sign up' => __('Sign up', $theme),
				'Join' => __('Join', $theme),
				'Log In'  => __('Log In', $theme),
				'Login'  => __('Login', $theme),
				'REGISTER'  => __('REGISTER', $theme),
				'Welcome!' => __('Welcome!', $theme),
				'Log into your account' => __('Log into your account', $theme),
				'Password recovery' => __('Password recovery', $theme),
				'Send My Pass'  => __('Send My Pass', $theme),
				'Send My Password'  => __('Send My Password', $theme),
				'Forgot your password?'  => __('Forgot your password?', $theme),
				'Forgot your password? Get help'  => __('Forgot your password? Get help', $theme),
				'Create an account'  => __('Create an account', $theme),
				'Please wait...'  => __('Please wait...', $theme),
				'User or password incorrect!'  => __('User or password incorrect!', $theme),
				'Email or username incorrect!'  => __('Email or username incorrect!', $theme),
				'Email incorrect!'  => __('Email incorrect!', $theme),
				'User or email already exists!'  => __('User or email already exists!', $theme),
				'Please check your email (inbox or spam folder), the password was sent there.'  => __('Please check your email (inbox or spam folder), the password was sent there.', $theme),
				'Email address not found!'  => __('Email address not found!', $theme),
				'Your password is reset, check your email.'  => __('Your password is reset, check your email.', $theme),
				'Welcome! Log into your account' => __('Welcome! Log into your account', $theme),
				'Welcome! Register for an account' => __('Welcome! Register for an account', $theme),
				'Register for an account' => __('Register for an account', $theme),
				'Recover your password' => __('Recover your password', $theme),
				'your username' => __('your username', $theme),
				'your password' => __('your password', $theme),
				'your email' => __('your email', $theme),
				'A password will be e-mailed to you.' => __('A password will be e-mailed to you.', $theme),
				'Logout' => __('Logout', $theme),

				//more article box
				'MORE STORIES' => __('MORE STORIES', $theme),

				//filter drop down options on category page
				'Latest' => __('Latest', $theme),
				'Featured posts' => __('Featured posts', $theme),
				'Most popular' => __('Most popular', $theme),
				'7 days popular' => __('7 days popular', $theme),
				'By review score' => __('By review score', $theme),
				'Random' => __('Random', $theme),

				'Trending Now' => __('Trending Now', $theme),

				//used in Popular Category widget (td_block_popular_categories.php file)
				'POPULAR CATEGORY' => __('POPULAR CATEGORY', $theme),
				'POPULAR POSTS' => __('POPULAR POSTS', $theme),
				'EDITOR PICKS' => __('EDITOR PICKS', $theme),
				'ABOUT US' => __('ABOUT US', $theme),
				'About me' => __('About me', $theme),
				'FOLLOW US' => __('FOLLOW US', $theme),
				'EVEN MORE NEWS' => __('EVEN MORE NEWS', $theme),


				//magnific popup
				'Previous (Left arrow key)' => __('Previous (Left arrow key)', $theme),
				'Next (Right arrow key)' => __('Next (Right arrow key)', $theme),
				'%curr% of %total%' => __('%curr% of %total%', $theme),
				'The content from %url% could not be loaded.' => __('The content from %url% could not be loaded.', $theme),
				'The image #%curr% could not be loaded.' => __('The image #%curr% could not be loaded.', $theme),

				//blog
				'Blog' => __('Blog', $theme),
				'Share on Facebook' => __('Share on Facebook', $theme),
				'Tweet on Twitter' => __('Tweet on Twitter', $theme),

				'Featured' => __('Featured', $theme),
				'All time popular' => __('All time popular', $theme),

				'More' => __('More', $theme),
				'Register' => __('Register', $theme),

				'of' => __('of', $theme),

				'Save my name, email, and website in this browser for the next time I comment.' => __('Save my name, email, and website in this browser for the next time I comment.', $theme),
				'Privacy Policy' => 'Privacy Policy',
				'Print' => __('Print', $theme),

			);
		}, 11);

	}
}
