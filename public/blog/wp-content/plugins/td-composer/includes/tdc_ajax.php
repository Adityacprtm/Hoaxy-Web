<?php
/**
 * Created by ra.
 * Date: 3/4/2016
 */


// ajax: save post hook
//add_action('wp_ajax_tdc_ajax_save_post',        array('tdc_ajax', 'on_ajax_save_post'));


add_action( 'rest_api_init', 'tdc_register_api_routes');
function tdc_register_api_routes() {
	$namespace = 'td-composer';

	register_rest_route($namespace, '/do_job/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_render_shortcode'),
	));


	register_rest_route($namespace, '/save_post/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_save_post'),
	));

	register_rest_route($namespace, '/save_history/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_save_history'),
	));

	register_rest_route($namespace, '/load_header_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_load_header_template'),
	));

	register_rest_route($namespace, '/update_header_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_update_header_template'),
	));

	register_rest_route($namespace, '/get_header_templates/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_header_templates'),
	));

	register_rest_route($namespace, '/get_header_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_header_template'),
	));

	register_rest_route($namespace, '/decode_html_content/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_decode_html_content'),
	));

	register_rest_route($namespace, '/get_image_url/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_image_url'),
	));


	register_rest_route($namespace, '/get_image_id/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_image_id'),
	));

	register_rest_route($namespace, '/save_parts/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_save_parts'),
	));

	register_rest_route($namespace, '/change_template_name/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_change_template_name'),
	));

	register_rest_route($namespace, '/save_header_mobile_menu/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_save_header_mobile_menu'),
	));

	register_rest_route($namespace, '/load_footer_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_load_footer_template'),
	));

	register_rest_route($namespace, '/update_footer_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_update_footer_template'),
	));

	register_rest_route($namespace, '/get_footer_templates/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_footer_templates'),
	));

	register_rest_route($namespace, '/get_footer_template/', array(
		'methods'  => 'POST',
		'callback' => array ('tdc_ajax', 'on_ajax_get_footer_template'),
	));
}

/**
 * Add the 'tdc_dirty_content' flag
 * 1 - when the post content is altered from wp-admin
 * 0 - when the post content is set by tagDiv Composer
 */
add_action( 'save_post', 'tdc_on_save_post', 10, 3 );
function tdc_on_save_post( $post_id, $post, $update) {

	// Do nothing for newly created posts
	$post_status = get_post_status( $post_id );
	if ( 'auto-draft' === $post_status || 'heartbeat' === @$_POST[ 'action' ] ) {
		return;
	}

	td_util::check_header( $post );

	td_util::check_footer( $post );

	// Set the 'tdc_dirty_content' flag
	if ($update === false) {
		update_post_meta( $post_id, 'tdc_dirty_content', 1 );
	} else {
		$tdcContent = get_post_meta($post_id, 'tdc_content', true);
		if ( $tdcContent !== $post->post_content) {
			update_post_meta($post_id, 'tdc_dirty_content', 1 );
		}
	}

	// Set icon fonts used in post
	$icon_font_list = tdc_util::get_required_icon_fonts_ids( $post_id );
	update_post_meta( $post_id, 'tdc_icon_fonts', $icon_font_list );

	// Set icon fonts used in post
    $post_type = get_post_type( $post_id );
    if ( in_array( $post_type, array( 'page', 'tdb_templates' ))) {
        $google_font_list = td_util::get_required_google_fonts_ids( $post_id );
	    update_post_meta( $post_id, 'tdc_google_fonts_settings', $google_font_list );
    }
}


add_action( 'current_screen', 'tdc_on_current_screen' );
function tdc_on_current_screen() {

	$current_screen = get_current_screen();

	if ($current_screen->post_type === 'page' && isset($_GET['post'])) {

		$isTdcDirtyContent = get_post_meta($_GET['post'], 'tdc_dirty_content', true);

		if (isset($isTdcDirtyContent) && $isTdcDirtyContent === '0') {

			function tdc_on_admin_notices() {
				?>
				<div class="notice notice-success is-dismissible">
					<p><?php _e( 'Content compatible with TagDiv Composer. Modify it carefully!', 'td_composer' ); ?></p>
				</div>
			<?php
			}

			add_action( 'admin_notices', 'tdc_on_admin_notices' );
		}
	}
}



class tdc_ajax {
	static $_td_block__get_block_js_buffer = '';
	static $_td_block__get_block_uid = '';

	static function on_ajax_render_shortcode( WP_REST_Request $request ) {

		//sleep(5);


		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		// change the main state
		//tdc_state::set_is_live_editor_ajax(true);


		// get the $_POST parameters only
		$parameters = $request->get_body_params();



		td_global::vc_set_custom_column_number( $request->get_param( 'columns' ) );


		/**
		 * Hook to set param blockUid.
		 * It's called by those shortcodes who needs an unique id in DOM, but without any other block settings (ex. rows, inner rows). Usually these shortcodes does not call 'td_block__get_block_js' hook
		 */
		add_action( 'td_block_set_unique_id', 'tdc_on_td_block_set_unique_id', 10, 1 );
		function tdc_on_td_block_set_unique_id( $by_ref_block_obj ) {
			tdc_ajax::$_td_block__get_block_uid = $by_ref_block_obj->block_uid;
		}


		/**
		 * hook td_block__get_block_js so we can receive the JS for EVAL form the block when do_shortcode is called below
		 */
		add_action( 'td_block__get_block_js', 'tdc_on_td_block__get_block_js', 10, 1 );
		/** @param $by_ref_block_obj td_block */
		function tdc_on_td_block__get_block_js( $by_ref_block_obj ) {
			// APPEND to the buffer for eval(). We may do eval on multiple shortcodes and we must gather all the js form all the blocks
			tdc_ajax::$_td_block__get_block_js_buffer .= $by_ref_block_obj->js_tdc_callback_ajax();
			tdc_ajax::$_td_block__get_block_uid = $by_ref_block_obj->block_uid;
		}


		/*
		 * DEPRECATED, WE FIXED THE BLOCKS!!!
			- we need to call the shortcode with output buffering because our style generator from our blocks just echoes it's generated
				style. No bueno :(
			- when the do_shortcode runs, our blocks usually call @see td_block->get_block_js(). get_block_js() calls the do_action for td_block__get_block_js hook.
				we hook td_block__get_block_js above to read that reply
			- that reply contains the JS for EVAL
		*/
//		ob_start();
//		echo do_shortcode(stripslashes($request->get_param('shortcode')));  // do shortcode usually renders with the blocks td_block->render method
//		$reply_html = ob_get_clean();

		//tdc_map_not_registered_shortcodes($request->get_param('postId'));

        $shortcode = $request->get_param( 'shortcode' );




        function td_replace_vc_column_text($matches) {
            return '[vc_column_text' . $matches[1] . ']' . base64_encode( $matches[2] ) . '[/vc_column_text]';
        }

        if ( shortcode_exists( 'vc_column_text' ) && has_shortcode( $shortcode, 'vc_column_text' ) ) {
            // Double regex instead of one regex (preg_match and preg_replace_callback) - with one regex we need to parse content for replacing text, to supply what does the second regex
            // This first regex check is to allow second regex replacement to apply only when 'vc_column_text' has content
            preg_match("/\[vc_column_text(.*)\](.*)\[\/vc_column_text\]/sU", $shortcode, $matches);
            if ( is_array( $matches ) && count( $matches ) ) {
                $shortcode = preg_replace_callback( "/\[vc_column_text(.*)\](.*)\[\/vc_column_text\]/sU", 'td_replace_vc_column_text', $shortcode );
            }
        }

        function td_replace_td_block_text_with_title($matches) {
            return '[td_block_text_with_title' . $matches[1] . ']' . base64_encode( $matches[2] ) . '[/td_block_text_with_title]';
        }

        if ( shortcode_exists( 'td_block_text_with_title' ) && has_shortcode( $shortcode, 'td_block_text_with_title' ) ) {

            // Double regex instead of one regex (preg_match and preg_replace_callback) - with one regex we need to parse content for replacing text, to supply what does the second regex
            // This first regex check is to allow second regex replacement to apply only when 'td_block_text_with_title' has content
            preg_match("/\[td_block_text_with_title(.*)\](.*)\[\/td_block_text_with_title\]/sU", $shortcode, $matches);
            if ( is_array( $matches ) && count( $matches ) ) {
                $shortcode = preg_replace_callback("/\[td_block_text_with_title(.*)\](.*)\[\/td_block_text_with_title\]/sU", 'td_replace_td_block_text_with_title', $shortcode);
            }
        }

        $parameters['shortcode'] = $shortcode;



        //$reply_html = do_shortcode( stripslashes( $request->get_param( 'shortcode' ) ) );
		$reply_html = do_shortcode( $shortcode );


		// read the buffer that was set by the 'td_block__get_block_js' hook above
		if ( ! empty( self::$_td_block__get_block_js_buffer ) ) {
			$parameters['replyJsForEval'] = self::$_td_block__get_block_js_buffer;
		}

		$parameters['blockUid'] = self::$_td_block__get_block_uid;


		$parameters['replyHtml'] = $reply_html;



		//sleep(rand(0, 1));


//		if (rand(0,1)) {
//			echo 'fuckshit';
//			die;
//		}

		//print_r($request);
		//die;




		die( json_encode( $parameters ) );
	}




	static function on_ajax_save_post( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		// get the $_POST parameters only
		//$parameters = $request->get_body_params();


		//print_r($request);

		$action       = $_POST['tdc_action'];
		$post_id      = $_POST['tdc_post_id'];
		$post_content = $_POST['tdc_content'];

		$meta = $_POST['tdc_customized'];
		$single_post_content_width = @$_POST['tdc_single_post_content_width'];

		if ( ! isset( $action ) || 'tdc_ajax_save_post' !== $action || ! isset( $post_id ) || ! isset( $post_content ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {
			$data_post = array(
				'ID'           => $post_id,
				'post_content' => $post_content
			);

			$post_id = wp_update_post( $data_post, true );
			if ( is_wp_error( $post_id ) ) {
				$errors = $post_id->get_error_messages();

				$parameters['errors'] = array();
				foreach ( $errors as $error ) {
					$parameters['errors'][] = $error;
				}
			} else {
				update_post_meta( $post_id, 'tdc_dirty_content', 0 );
				update_post_meta( $post_id, 'tdc_content', $post_content );

				$td_homepage_loop = get_post_meta( $post_id, 'td_homepage_loop', true );
				$td_page = get_post_meta( $post_id, 'td_page', true );

				if ( isset( $meta ) ) {
					$decoded_meta = json_decode( wp_unslash( $meta ), true );

					if ( is_array( $decoded_meta ) && isset( $decoded_meta['page_settings'] ) ) {
						$decoded_page_settings = json_decode( wp_unslash( $decoded_meta['page_settings'] ), true );

						if ( is_array( $decoded_page_settings ) ) {

							if ( isset( $decoded_page_settings['td_homepage_loop'] ) ) {
                                $td_homepage_loop = array();
                                $td_homepage_loop[0] = array();

								foreach ( $decoded_page_settings['td_homepage_loop'] as $key => $val ) {
									$td_homepage_loop[0][ $key ] = $val;
								}

								update_post_meta( $post_id, 'td_homepage_loop', $td_homepage_loop[0] );
							}

							if ( isset( $decoded_page_settings['td_page'] ) ) {
                                $td_page = array();
                                $td_page[0] = array();

								foreach ( $decoded_page_settings['td_page'] as $key => $val ) {
									$td_page[0][ $key ] = $val;
								}

								update_post_meta( $post_id, 'td_page', $td_page[0] );
							}

							if ( isset( $decoded_page_settings['page_template'] ) ) {
								update_post_meta( $post_id, '_wp_page_template', $decoded_page_settings['page_template'] );
							}
						}
					}
				}

				// Reset the vc status
				update_post_meta( $post_id, '_wpb_vc_js_status', false );

				delete_post_meta( $post_id, 'tdb_installed_images' );
				delete_post_meta( $post_id, 'tdb_install_uid' );


				$val_for_single_post_content = false;

				preg_match_all( '/\[\s*tdb_single_content(\X*)\]\s*\[/miU', $post_content, $content_matches );
                if ( is_array( $content_matches ) && count( $content_matches ) && ! empty( $content_matches[ 1 ] ) && is_array( $content_matches[ 1 ] ) ) {

                    foreach ( $content_matches[ 1 ] as $str_atts ) {

                        $arr_atts = shortcode_parse_atts( $str_atts );
                        if (is_array($arr_atts)) {
	                        foreach ( $arr_atts as $arr_att ) {
		                        if ( 0 === strpos( $arr_att, 'content_width' ) ) {
			                        $arr_att_val = str_replace( array( 'content_width="', '"' ), '', $arr_att );

			                        $final_val = $arr_att_val;
			                        if ( base64_decode( $arr_att_val, true ) && base64_encode( base64_decode( $arr_att_val, true ) ) === $arr_att_val ) {
				                        $arr_att_val = json_decode( base64_decode( $arr_att_val ), true );

				                        if ( ! empty( $arr_att_val[ 'all' ] ) ) {
					                        $final_val = $arr_att_val[ 'all' ];
				                        }
			                        }

			                        if ( ! empty( $final_val ) ) {
				                        update_post_meta( $post_id, 'tdc_single_post_content_width', $final_val );
				                        $val_for_single_post_content = true;
			                        }

			                        break;
		                        }
	                        }
                        }

                        // Do it just for the first tdb_single_content shortcode
                        break;
                    }
                }

				if ( ! $val_for_single_post_content && ! empty( $single_post_content_width )) {
				    update_post_meta( $post_id, 'tdc_single_post_content_width', $single_post_content_width );
                }

				// Update the live panel settings
				td_panel_data_source::update();

				// Extensions do their own savings
				do_action( 'tdc_extension_save', $request );
			}
		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_save_history( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action       = $_POST['tdc_action'];
		$post_id      = $_POST['tdc_post_id'];
		$post_content = $_POST['tdc_content'];

		if ( ! isset( $action ) || 'tdc_ajax_save_history' !== $action || ! isset( $post_id ) || ! isset( $post_content ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {
			$the_post = get_post( $post_id );

			if ( is_null( $the_post ) ) {
			    $parameters['errors'][] = 'Post not found!';
            } else {
                update_post_meta( $post_id, 'tdc_history', $post_content );
            }
		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_load_header_template( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action = $_POST['tdc_action'];
		$header_template_content = $_POST['tdc_header_template_content'];
		$header_template_title = $_POST['tdc_header_template_title'];

		if ( ! isset( $action ) || 'load_header_template' !== $action || ! isset( $header_template_content ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else if ( empty( $_POST['tdc_header_template_id'] ) ) {

		    global $wpdb;

		    $results = $wpdb->get_results(
                $wpdb->prepare(
                    "
                        SELECT post_title 
                        FROM {$wpdb->posts} 
                        WHERE post_title LIKE '%s' 
                        AND post_type = '%s' 
                        AND post_status = '%s'",
                    array( '%' . $wpdb->esc_like( $header_template_title ) . '%', 'tdb_templates', 'publish' )
                )
            );

		    $titles = [];

		    foreach ( $results as $post ) {
                $title = $post->post_title;

                if ( strpos( $title, $header_template_title . ' ' ) !== false || $header_template_title === $title ) {
                    $titles[] = $title;
                }
            }

            natsort($titles);
            $titles = array_values( $titles );
            $titles_count = count($titles);

            // if we have more than one post with the same title we need to alter the template title
            if ( $titles_count >= 1 ) {

                // flag to check whether we set a index template title in the foreach loop
                $flag = false;

                foreach ( $titles as $index => $title ) {

                    // check if the first post is the original template like 'Single Post Template 1'
                    if ( $index == 0 ) {

                        // if the first post is not the original template
                        if ( $header_template_title !== $title ) {
                            // just set the flag and bail, we don't need to alter the temp title because the original template title is missing

                            $flag = true;
                            break;
                        }
                        continue;
                    }

                    // check for missing template titles
                    if ( ! in_array( $header_template_title . ' (' . ( $index + 1 ) . ')' , $titles ) ) {
                        $header_template_title = $header_template_title . ' (' . ( $index + 1 ) . ')';

                        // set the flag
                        $flag = true;
                        break;
                    }
                }

                // if we haven't set the title above set the posts count title
                if ( !$flag ) {
                    $header_template_title = $header_template_title . ' (' . ( $titles_count + 1 ) . ')';
                }
            }

			$data_template = array(
                'post_title' => $header_template_title,
                'post_type' => 'tdb_templates',
				'post_content' => $header_template_content,
                'post_status' => 'publish',
                'meta_input'   => array(
                    'tdb_template_type' => 'header',
                ),
			);


			$template_id = wp_insert_post( $data_template, true );

			if ( is_wp_error( $template_id ) ) {
				$errors = $template_id->get_error_messages();

				$parameters['errors'] = array();
				foreach ( $errors as $error ) {
					$parameters['errors'][] = $error;
				}
			} else {
			    $parameters['header_template_id'] = $template_id;
			}

		} else {

		    $data_template = array(
                'ID' => $_POST['tdc_header_template_id'],
                'post_content' => $header_template_content,
                'meta_input' => array(
                    'tdc_header_template_id' => $_POST['tdc_header_template_id']
                )
			);

		    $template_id = wp_update_post( $data_template, true );

			if ( is_wp_error( $template_id ) ) {
				$errors = $template_id->get_error_messages();

				$parameters['errors'] = array();
				foreach ( $errors as $error ) {
					$parameters['errors'][] = $error;
				}
			} else {
			    $parameters['header_template_id'] = $template_id;
			}
        }

		die( json_encode( $parameters ) );
	}




	static function on_ajax_update_header_template( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action = $_POST['tdc_action'];
		$post_id = $_POST['tdc_post_id'];
		$header_template_id = $_POST['tdc_header_template_id'];
		$header_template_content = $_POST['tdc_header_template_content'];
		$assoc_header_template = $_POST['tdc_assoc_header_template'];

		if ( ! isset( $action ) || 'update_header_template' !== $action || ! isset( $header_template_content ) || ( ! empty( $header_template_id ) && 'no_header' !== $header_template_id && ! get_post( $header_template_id ) instanceof WP_Post ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {

		    if ( empty( $header_template_id ) ) {

			    delete_post_meta( $post_id, 'tdc_header_template_id' );
			    $parameters['header_template_id'] = '';

		    } else if ( 'no_header' === $header_template_id ) {

		        $updated = update_post_meta( $post_id, 'tdc_header_template_id', $header_template_id );

                if ( $updated ) {
                    $parameters['header_template_id'] = $header_template_id;
                }

		    } else {

			    $data_template = array(
				    'ID'           => $header_template_id,
				    'post_content' => $header_template_content,
			    );


			    $template_id = wp_update_post( $data_template, true );

			    if ( is_wp_error( $template_id ) ) {
				    $errors = $template_id->get_error_messages();

				    $parameters['errors'] = array();
				    foreach ( $errors as $error ) {
					    $parameters['errors'][] = $error;
				    }

			    } else {

			        if ( empty( $assoc_header_template ) ) {

			            $deleted = delete_post_meta( $post_id, 'tdc_header_template_id' );

			            if ( $deleted ) {
			                $parameters['header_template_id'] = '';
                        }

			        } else {

			            $updated = update_post_meta( $post_id, 'tdc_header_template_id', $template_id );

				        if ( $updated ) {
					        $parameters['header_template_id'] = $template_id;
				        }
                    }

                    // Set header template as header template for header template itself!
                    update_post_meta( $template_id, 'tdc_header_template_id', $template_id );
			        update_post_meta( $template_id, 'tdc_dirty_content', 0 );

			        $extra_google_fonts_ids = [];

			        if ( base64_decode( $header_template_content, true ) && base64_encode( base64_decode( $header_template_content, true ) ) === $header_template_content ) {
                        $header_template_content = json_decode( base64_decode( $header_template_content ), true );

                        foreach ( ['tdc_header_desktop', 'tdc_header_desktop_sticky', 'tdc_header_mobile', 'tdc_header_mobile_sticky'] as $viewport ) {
                            if ( ! empty( $header_template_content[ $viewport ] ) ) {
                                $google_fonts_ids = td_util::get_content_google_fonts_ids( $header_template_content[ $viewport ] );

                                foreach ( $google_fonts_ids as $google_fonts_id => $font_settings ) {
                                    if ( array_key_exists( $google_fonts_id, $extra_google_fonts_ids ) ) {
                                        $extra_google_fonts_ids[ $google_fonts_id ] = array_unique( array_merge( $extra_google_fonts_ids[ $google_fonts_id ], $google_fonts_ids[ $google_fonts_id ] ) );
                                    } else {
                                        $extra_google_fonts_ids[ $google_fonts_id ] = $font_settings;
                                    }
                                }
                            }
                        }
                    }

                    if ( ! empty( $extra_google_fonts_ids ) ) {
                        update_post_meta( $template_id, 'tdc_google_fonts_settings', $extra_google_fonts_ids );
                    }
			    }
		    }
		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_get_header_templates() {
	    if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

	    $parameters = array();

		$header_templates = new WP_Query( array(
                'post_type' => 'tdb_templates',
                'posts_per_page' => -1,
                'meta_key' => 'tdb_template_type',
                'meta_value' => 'header'
            )
        );

		if ( $header_templates->found_posts ) {
		    foreach ( $header_templates->posts as $header_template ) {
		        $parameters[ 'tdb_header_templates' ][] = array(
                    'id' => $header_template->ID,
                    'title' => $header_template->post_title
                );
            }
        }

        die( json_encode( $parameters ) );
    }




    static function on_ajax_get_header_template() {
	    $parameters = array();

	    $action = $_POST['tdc_action'];
	    $header_template_id = $_POST['tdc_header_template_id'];

	    if ( ! isset( $action ) || 'get_header_template' !== $action || ( ! empty( $header_template_id ) && 'no_header' !== $header_template_id && ! ( get_post( $header_template_id ) instanceof WP_Post ) ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {

	        $parameters['global_template'] = false;
	        $parameters['no_header'] = false;
	        $parameters['template_content'] = '';
	        $parameters['template_id'] = '';

	        if ( empty( $header_template_id ) ) {

	            $global_header_template_id = td_api_header_style::get_header_template_id();

                if ( empty( $global_header_template_id ) ) {
                    $parameters['global_template'] = true;
                } else {
                    $global_header_template_id = str_replace( 'tdb_template_', '', $global_header_template_id );
                    $meta_header_template_content = get_post_field('post_content', $global_header_template_id );

                    if ( empty( $meta_header_template_content ) ) {

                        // $parameters['errors'][] = 'Invalid template';

                        // Use legacy global template (maybe the existing global template was deleted)
                        $parameters['global_template'] = true;

                    } else {
                        $parameters['global_template'] = true;
                        $parameters['template_id'] = $global_header_template_id;
                        $parameters['template_content'] = $meta_header_template_content;
                    }
                }
            } else if ( 'no_header' === $header_template_id ) {

	            $parameters['no_header'] = true;

            } else {

		        $post_template = get_post( $header_template_id );

		        if ( $post_template instanceof WP_Post ) {
			        $parameters['template_id'] = $header_template_id;
			        $parameters['template_content'] = $post_template->post_content;
		        } else {
			        $parameters['errors'][] = 'Invalid template';
		        }
	        }
	    }

        die( json_encode( $parameters ) );
    }




	static function on_ajax_decode_html_content( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action  = $_POST['action'];
		$post_id = $_POST['post_id'];
		$content = $_POST['content'];

		if ( ! isset( $action ) || 'tdc_ajax_decode_html_content' !== $action || ! isset( $post_id ) || ! isset( $content ) ) {
			$parameters['errors'][] = 'Invalid data';

		} else {
			$parameters['parsed_content'] = htmlentities( rawurldecode( base64_decode( $content ) ), ENT_QUOTES, "UTF-8" );
		}
		die( json_encode( $parameters ) );
	}




    /**
     * the $_POST['image_id'] can be either an image ID from the media library OR a url for one of the default placeholder images.
     * This is done to allow the multipurpose plugin to load shortcodes with url placeholders instead of image IDs so we don't have to load them in the media gallery
     * @see tdc_config::$default_placeholder_images
     * @param WP_REST_Request $request
     */
	static function on_ajax_get_image_url( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action  = $_POST['action'];
		$image_id = $_POST['image_id'];

		if ( ! isset( $action ) || 'tdc_ajax_get_image_url' !== $action || ! isset( $image_id ) ) {
			$parameters['errors'][] = 'Invalid data';

		} else {
		        // if it's a picture id, try to get the attachement url
		    if (is_numeric($image_id)) {
                $parameters['image_url'] = wp_get_attachment_url($image_id);
            } else {
		        // if it's not numeric, probably it's a url :)
                $parameters['image_url'] = $image_id;
            }
		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_get_image_id( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action  = $_POST['action'];
		$image_class = $_POST['image_class'];

		if ( ! isset( $action ) || 'tdc_ajax_get_image_id' !== $action || ! isset( $image_class ) ) {
			$parameters['errors'][] = 'Invalid data';

		} else {
			if (preg_match( '/wp-image-([0-9]+)/i', $image_class, $class_id ) && ( $attachment_id = absint( $class_id[1] ) ) ) {

				if (wp_get_attachment_image($attachment_id) !== '') {
					$parameters['image_id'] = $attachment_id;
				}
			}

		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_save_parts( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action  = $_POST['action'];
		$tdc_savings = @$_POST['tdc_savings'];

		if ( ! isset( $action ) || 'tdc_ajax_save_parts' !== $action ) {
			$parameters['errors'][] = 'Invalid data';

		} else {
			if ( isset( $tdc_savings ) ) {
				$parameters['tdc_savings'] = td_util::update_option( 'tdc_savings', $tdc_savings );
			} else {
				$parameters['tdc_savings'] = td_util::update_option( 'tdc_savings', '' );
			}
		}

		die( json_encode( $parameters ) );
	}




	static function on_ajax_change_template_name( WP_REST_Request $request ) {

        // permission check
        if ( ! current_user_can( 'edit_pages' ) ) {
            $reply['error'] = 'no permission';
            die( json_encode( $reply ) );
        }

        // no empty title templates
        $template_title = wp_strip_all_tags( $request->get_param( 'newTemplateName' ) );
        if ( empty( $template_title ) ) {
            $reply['error'] = 'Please enter a title for your template.';
            die( json_encode( $reply ) );
        }

        // check the template type
        $template_type = $request->get_param('templateType');
        $template_types = array(
            'single', 'category', 'author', 'search', 'date', 'tag', 'attachment', '404', 'page', 'header'
        );

        if ( in_array( $template_type, $template_types) === false ) {
            $reply['error'] = 'Invalid template type! Please make sure your are editing a supported template type title.';
            die( json_encode( $reply ) );
        }

        $post_type = 'page' === $template_type ? 'page' : 'tdb_templates';

        $posts = get_posts(
            array(
                'post_status' => 'publish',
                'post_type' => $post_type,
                'numberposts' => -1
            )
        );

        foreach ( $posts as $post ) {
            if ( $post->post_title === $template_title ) {
                $reply['error'] = 'This ' . $template_type . ' template title is already used!';
                die( json_encode( $reply ) );
            }
        }

        // check the template id
        $template_id = $request->get_param( 'templateID' );
        if ( empty( $template_id ) ) {
            $reply['error'] = 'The template/page id is missing!';
            die( json_encode( $reply ) );
        }

        // update post
        $post_id = wp_update_post( array(
            'ID'           => $template_id,
            'post_title'   => $template_title,
        ));

        // treat errors
        if ( is_wp_error( $post_id ) ) {
            $errors = $post_id->get_error_messages();
            $reply['error'] = array(
                   'Post update error!'
            );
            foreach ( $errors as $error ) {
                $reply['error'][] = $error;
            }
            die( json_encode( $reply ) );
        }

        $reply['template_title'] = $template_title;
        $reply['template_type']  = $template_type;
        $reply['template_id']    = $template_id;

        die( json_encode( $reply ) );
    }



    static function on_ajax_save_header_mobile_menu( WP_REST_Request $request ) {
	    // permission check
        if ( ! current_user_can( 'edit_pages' ) ) {
            $reply['error'] = 'no permission';
            die( json_encode( $reply ) );
        }

        $parameters = array();

        $template_id = $_POST['template_id'];
        $menu_id = $_POST['menu_id'];

        if ( ! isset( $template_id ) || ! isset( $menu_id ) ) {
			$parameters['errors'][] = 'Invalid data';
		} else {
            $parameters[] = update_post_meta( $template_id, 'header_mobile_menu_id', $menu_id );
        }

        die( json_encode( $parameters ) );
    }


    static function on_ajax_get_footer_templates() {
	    if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

	    $parameters = array();

		$footer_templates = new WP_Query( array(
                'post_type' => 'tdb_templates',
                'posts_per_page' => -1,
                'meta_key' => 'tdb_template_type',
                'meta_value' => 'footer'
            )
        );

		if ( $footer_templates->found_posts ) {
		    foreach ( $footer_templates->posts as $footer_template ) {
		        $parameters[ 'tdb_footer_templates' ][] = array(
                    'id' => $footer_template->ID,
                    'title' => $footer_template->post_title
                );
            }
        }

        die( json_encode( $parameters ) );
    }


    static function on_ajax_load_footer_template( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action = $_POST['tdc_action'];
		$footer_template_content = $_POST['tdc_footer_template_content'];
		$footer_template_title = $_POST['tdc_footer_template_title'];

		if ( ! isset( $action ) || 'load_footer_template' !== $action || ! isset( $footer_template_content ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else if ( empty( $_POST['tdc_footer_template_id'] ) ) {

		    global $wpdb;

		    $results = $wpdb->get_results(
                $wpdb->prepare(
                    "
                        SELECT post_title 
                        FROM {$wpdb->posts} 
                        WHERE post_title LIKE '%s' 
                        AND post_type = '%s' 
                        AND post_status = '%s'",
                    array( '%' . $wpdb->esc_like( $footer_template_title ) . '%', 'tdb_templates', 'publish' )
                )
            );

		    $titles = [];

		    foreach ( $results as $post ) {
                $title = $post->post_title;

                if ( strpos( $title, $footer_template_title . ' ' ) !== false || $footer_template_title === $title ) {
                    $titles[] = $title;
                }
            }

            natsort($titles);
            $titles = array_values( $titles );
            $titles_count = count($titles);

            // if we have more than one post with the same title we need to alter the template title
            if ( $titles_count >= 1 ) {

                // flag to check whether we set a index template title in the foreach loop
                $flag = false;

                foreach ( $titles as $index => $title ) {

                    // check if the first post is the original template like 'Single Post Template 1'
                    if ( $index == 0 ) {

                        // if the first post is not the original template
                        if ( $footer_template_title !== $title ) {
                            // just set the flag and bail, we don't need to alter the temp title because the original template title is missing

                            $flag = true;
                            break;
                        }
                        continue;
                    }

                    // check for missing template titles
                    if ( ! in_array( $footer_template_title . ' (' . ( $index + 1 ) . ')' , $titles ) ) {
                        $footer_template_title = $footer_template_title . ' (' . ( $index + 1 ) . ')';

                        // set the flag
                        $flag = true;
                        break;
                    }
                }

                // if we haven't set the title above set the posts count title
                if ( !$flag ) {
                    $footer_template_title = $footer_template_title . ' (' . ( $titles_count + 1 ) . ')';
                }
            }

			$data_template = array(
                'post_title' => $footer_template_title,
                'post_type' => 'tdb_templates',
				'post_content' => $footer_template_content,
                'post_status' => 'publish',
                'meta_input'   => array(
                    'tdb_template_type' => 'footer',
                ),
			);


			$template_id = wp_insert_post( $data_template, true );

			if ( is_wp_error( $template_id ) ) {
				$errors = $template_id->get_error_messages();

				$parameters['errors'] = array();
				foreach ( $errors as $error ) {
					$parameters['errors'][] = $error;
				}
			} else {
			    $parameters['footer_template_id'] = $template_id;
			}

		} else {

		    $data_template = array(
                'ID' => $_POST['tdc_footer_template_id'],
                'post_content' => $footer_template_content,
                'meta_input' => array(
                    'tdc_footer_template_id' => $_POST['tdc_footer_template_id']
                )
			);

		    $template_id = wp_update_post( $data_template, true );

			if ( is_wp_error( $template_id ) ) {
				$errors = $template_id->get_error_messages();

				$parameters['errors'] = array();
				foreach ( $errors as $error ) {
					$parameters['errors'][] = $error;
				}
			} else {
			    $parameters['footer_template_id'] = $template_id;
			}
        }

		die( json_encode( $parameters ) );
	}


    static function on_ajax_get_footer_template() {
	    $parameters = array();

	    $action = $_POST['tdc_action'];
	    $footer_template_id = $_POST['tdc_footer_template_id'];

	    if ( ! isset( $action ) || 'get_footer_template' !== $action || ( ! empty( $footer_template_id ) && 'no_footer' !== $footer_template_id && ! ( get_post( $footer_template_id ) instanceof WP_Post ) ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {

	        $parameters['global_template'] = false;
	        $parameters['no_header'] = false;
	        $parameters['template_content'] = '';
	        $parameters['template_id'] = '';

	        if ( empty( $footer_template_id ) ) {

	            $global_footer_template_id = td_api_footer_template::get_footer_template_id();

                if ( empty( $global_footer_template_id ) ) {
                    $parameters['global_template'] = true;
                } else {
                    $global_footer_template_id = str_replace( 'tdb_template_', '', $global_footer_template_id );
                    $meta_footer_template_content = get_post_field('post_content', $global_footer_template_id );

                    if ( empty( $meta_footer_template_content ) ) {

                        // $parameters['errors'][] = 'Invalid template';

                        // Use legacy global template (maybe the existing global template was deleted)
                        $parameters['global_template'] = true;

                    } else {
                        $parameters['global_template'] = true;
                        $parameters['template_id'] = $global_footer_template_id;
                        $parameters['template_content'] = $meta_footer_template_content;
                    }
                }
            } else if ( 'no_footer' === $footer_template_id ) {

	            $parameters['no_footer'] = true;

            } else {

		        $post_template = get_post( $footer_template_id );

		        if ( $post_template instanceof WP_Post ) {
			        $parameters['template_id'] = $footer_template_id;
			        $parameters['template_content'] = $post_template->post_content;
		        } else {
			        $parameters['errors'][] = 'Invalid template';
		        }
	        }
	    }

        die( json_encode( $parameters ) );
    }


    static function on_ajax_update_footer_template( WP_REST_Request $request ) {
		if ( ! current_user_can( 'edit_pages' ) ) {
			//@todo - ceva eroare sa afisam aici
			echo 'no permission';
			die;
		}

		$parameters = array();

		$action = $_POST['tdc_action'];
		$post_id = $_POST['tdc_post_id'];
		$footer_template_id = $_POST['tdc_footer_template_id'];
		$footer_template_content = $_POST['tdc_footer_template_content'];
		$assoc_footer_template = $_POST['tdc_assoc_footer_template'];

		if ( ! isset( $action ) || 'update_footer_template' !== $action || ! isset( $footer_template_content ) || ( ! empty( $footer_template_id ) && 'no_footer' !== $footer_template_id && ! get_post( $footer_template_id ) instanceof WP_Post ) ) {

			$parameters['errors'][] = 'Invalid data';

		} else {

		    if ( empty( $footer_template_id ) ) {

			    delete_post_meta( $post_id, 'tdc_footer_template_id' );
			    $parameters['footer_template_id'] = '';

		    } else if ( 'no_footer' === $footer_template_id ) {

		        $updated = update_post_meta( $post_id, 'tdc_footer_template_id', $footer_template_id );

                if ( $updated ) {
                    $parameters['footer_template_id'] = $footer_template_id;
                }

		    } else {

			    $data_template = array(
				    'ID'           => $footer_template_id,
				    'post_content' => $footer_template_content,
			    );


			    $template_id = wp_update_post( $data_template, true );

			    if ( is_wp_error( $template_id ) ) {
				    $errors = $template_id->get_error_messages();

				    $parameters['errors'] = array();
				    foreach ( $errors as $error ) {
					    $parameters['errors'][] = $error;
				    }

			    } else {

			        if ( empty( $assoc_footer_template ) ) {

			            $deleted = delete_post_meta( $post_id, 'tdc_footer_template_id' );

			            if ( $deleted ) {
			                $parameters['footer_template_id'] = '';
                        }

			        } else {

			            $updated = update_post_meta( $post_id, 'tdc_footer_template_id', $template_id );

				        if ( $updated ) {
					        $parameters['footer_template_id'] = $template_id;
				        }
                    }

                    // Set header template as header template for header template itself!
                    update_post_meta( $template_id, 'tdc_footer_template_id', $template_id );
			        update_post_meta( $template_id, 'tdc_dirty_content', 0 );

			        $footer_template_content = get_post( $template_id )->post_content;

			        $google_font_list = td_util::get_content_google_fonts_ids( $footer_template_content );
			        update_post_meta( $template_id, 'tdc_google_fonts_settings', $google_font_list );
			    }
		    }
		}

		die( json_encode( $parameters ) );
	}
}
