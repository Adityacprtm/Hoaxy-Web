<?php
/**
 * register rest endpoints
 */
add_action( 'rest_api_init', function(){
    $namespace = 'td-cloud-library';


    /**
     * new_template endpoint
     */
    register_rest_route($namespace, '/new_template/', array(
        'methods'  => 'POST',
        'callback' => function($request){

			$duplicate_request = $request->get_param( 'duplicateTemplate' );
			$duplicate_template = ! empty( $duplicate_request ) ? $duplicate_request : false;

            if ( $duplicate_template ) {
                $reply['duplicate_template'] = 'We have a duplicate template request!';

                // check for post id
                $post_id = $request->get_param( 'postId' );
                if (empty($post_id)) {
                    $reply['error'] = 'The template id ( post id ) is missing and it\'s required!';
                    die( json_encode( $reply ) );
                }
            }

            // permission check
            if ( ! current_user_can( 'edit_pages' ) ) {
                $reply['error'] = 'no permission';
                die( json_encode( $reply ) );
            }


            // no empty title templates :) - not required but it's nice to have a title
            $template_title = wp_strip_all_tags($request->get_param( 'templateName' ));
            if (empty($template_title)) {
                $reply['error'] = 'Please enter a title for your template.';
                die( json_encode( $reply ) );
            }


            // check the template type
            $template_type = $request->get_param('templateType');
            $template_types = array(
                'single', 'category', 'author', 'search', 'date', 'tag', 'attachment', '404', 'page', 'header', 'footer'
            );
	        $template_types = apply_filters( 'tdb_template_types', $template_types );

            if ( in_array( $template_type, $template_types) === false ) {
                $reply['error'] = 'Invalid template type!';
                die( json_encode( $reply ) );
            }

            $post_type = 'page' === $template_type ? 'page' : 'tdb_templates';

            global $wpdb;

            // search for titles with same name( template title )
            $results = $wpdb->get_results(
                $wpdb->prepare(
                    "
                        SELECT post_title 
                        FROM {$wpdb->posts} 
                        WHERE post_title LIKE '%s' 
                        AND post_type = '%s' 
                        AND post_status = '%s'",
                    array( '%' . $wpdb->esc_like( $template_title ) . '%', $post_type, 'publish' )
                )
            );

            // here we store the titles we need
            $titles = array();

            // the query might return titles like 'Single Post Template 10' as 'Single Post Template 1' so we need to make sure these don't count
            foreach ( $results as $post ) {
                $title = $post->post_title;

//                $reply['initial_found_posts'][] = array(
//                    'title' => $title,
//                    'strpos_val' => strpos( $title, $template_title . ' ' ) !== false,
//                    'temp_title_vs_post_title' => $template_title !== $title,
//                );

                if ( strpos( $title, $template_title . ' ' ) !== false or $template_title === $title ) {
                    $titles[] = $title;
                }
            }

            /*
             * the sql query doesn't return expected results ordered by titles, it orders like this
             * .. Single Post Template 1 (10) ..after.. Single Post Template 1 .. Single Post Template 1 (20) ..after.. Single Post Template 1 (2) and so on..
             * this dose not work for us so we need to sort the titles array using the "natural order" algorithm
            */
            natsort($titles);

            $titles = array_values( $titles );

            foreach ( $titles as $title ) {
                //$reply['posts_after_natsort'][] = $title;
            }

            // count found posts
            $titles_count = count($titles);
            //$reply['posts_count'] = $titles_count;

            // if we have more than one post with the same title we need to alter the template title
            if ( $titles_count >= 1 ) {

                // flag to check whether we set a index template title in the foreach loop
                $flag = false;

                foreach ( $titles as $index => $title ) {

                    // check if the first post is the original template like 'Single Post Template 1'
                    if ( $index == 0 ) {

//                        $reply['original_template'] = array(
//                            '$template_title' => $template_title,
//                            '$title' => $title,
//                        );

                        // if the first post is not the original template
                        if ( $template_title !== $title ) {
                            //$reply['case'] = 'the first post is not the original template';

                            // just set the flag and bail, we don't need to alter the temp title because the original template title is missing
                            $flag = true;
                            break;
                        }

                        continue;
                    }

                    // check for missing template titles
                    if ( ! in_array( $template_title . ' (' . ( $index + 1 ) . ')' , $titles ) ) {
                        $template_title = $template_title . ' (' . ( $index + 1 ) . ')';
                        //$reply['case'] = 'one of the Single Post Template 1 (2) .. (3) .. (4) .. is missing';

                        // set the flag
                        $flag = true;
                        break;
                    }
                }

                // if we haven't set the title above set the posts count title
                if ( !$flag ) {
                    $template_title = $template_title . ' (' . ( $titles_count + 1 ) . ')';
                    //$reply['case'] = 'we haven\'t set the title in the foreach loop so we set the posts count to the template title';
                }

            }

            if ( 'page' === $template_type ) {
            	$new_post = array(
	                'post_title' => $template_title,
	                'post_status' => 'publish',
	                'post_type' => 'page',
	                'post_content' => '',
	            );
            } else {

                if ( $duplicate_template ) {
                    $new_post = array(
                        'post_title' => $template_title,
                        'post_status' => 'publish',
                        'post_type' => 'tdb_templates',
                        'post_content' => get_post_field( 'post_content', $post_id ),
                        'meta_input'   => array(
                            'tdb_template_type' => $template_type
                        )
                    );
                } else {
                    $new_post = array(
                        'post_title' => $template_title,
                        'post_status' => 'publish',
                        'post_type' => 'tdb_templates',
                        'post_content' => '',
                        'meta_input'   => array(
                            'tdb_template_type' => $template_type
                        )
                    );
                }
            }

            // This pre title string is used as a flag by wpml hooks, to avoid touching these posts at creation
            if (class_exists('SitePress')) {
	            $new_post[ 'post_title' ] = 'NEW_CLOUD_TEMPLATE' . $new_post[ 'post_title' ];
            }

            // new post / page + error check
            $template_id = wp_insert_post ($new_post);
            if (is_wp_error($template_id)) {
                $reply['error'] = 'error - ' . $template_id->get_error_message();
                die( json_encode( $reply ) );
            }
            if ($template_id === 0) {
                $reply['error'] = 'wp_insert_post returned 0. Not ok!';
                die( json_encode( $reply ) );
            }
            if ( $duplicate_template && 'header' === $template_type ) {
                add_post_meta(
                    $template_id, 'tdc_header_template_id', $template_id
                );
            }


            // WPML FIX - used to ensure translations for saved posts. Without it the post is saved in wp by wp_insert_post, but can't be used
            if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
                global $sitepress;

                $sitepress->verify_post_translations( 'page' );
            }


            $reply['template_title'] = $template_title;
            $reply['template_id'] = $template_id;
            $reply['template_edit_url'] = admin_url("post.php?post_id=$template_id&td_action=tdc&tdbTemplateType=$template_type");

            die( json_encode( $reply ) );
        },
    ));


    /**
     * tagDiv Cloud api proxy - to prevent issues with cross domain requests we proxy all the request via php
     */
    register_rest_route($namespace, '/td_cloud_proxy/', array(
        'methods'  => 'POST',
        'callback' => function($request) {

	        $reply = array();

	        $cloud_end_point = $request->get_param('cloudEndPoint');

            // permission check
            if ( ! current_user_can( 'edit_pages' ) && 'templates/get_all' !== $cloud_end_point ) {
	            $reply['error'] = array(
	            	array(
			            'type' => 'Proxy ERROR',
			            'message' => 'You have no permission to access this endpoint.',
			            'debug_data' => ''
		            )
	            );
                die( json_encode( $reply ) );
            }

            if (empty($cloud_end_point)) {
	            $reply['error'] = array(
	            	array(
			            'type' => 'Proxy ERROR',
			            'message' => 'No cloudEndPoint received. Please use tdApi.cloudRun for proxy requests.',
			            'debug_data' => $request
		            )
	            );
                die( json_encode( $reply ) );
            }

	        $cloud_post = $request->get_param('cloudPost');

	        //POST parameters
	        $cloud_post['envato_key'] = '';
	        $cloud_post['theme_version'] = TD_THEME_VERSION;
	        $cloud_post['deploy_mode'] = TDB_DEPLOY_MODE;

	        if ( ! isset( $cloud_post['wp_type'] ) ) {
	        	$cloud_post['wp_type'] = '';
	        }

	        $api_url = tdb_util::get_api_url();

            if (TDB_DEPLOY_MODE !== 'dev') {
	            $envato_key = base64_decode(td_util::get_option('td_011'));

	            //theme is not registered
//	            if (empty($envato_key)) {
//		            $reply['error'] = array(
//		            	array(
//				            'type' => 'Proxy ERROR',
//				            'message' => 'The theme is not activated. You can activate it from ' . TD_THEME_NAME . ' > Activate Theme section',
//				            'debug_data' => array(
//					            'envato_key' => $envato_key
//				            )
//			            )
//		            );
//		            die(json_encode($reply));
//	            }

	            $cloud_post['envato_key'] = $envato_key;
            }

	        $api_response = wp_remote_post($api_url . '/' . $cloud_end_point, array (
		        'method' => 'POST',
		        'body' => $cloud_post,
		        'timeout' => 12
	        ));

//            $file = fopen("d:\log.txt", "w");
//            ob_start();
//            var_dump( $api_url . '/' . $cloud_end_point );
//            var_dump( $cloud_post );
//            fwrite( $file, ob_get_clean() );
//			fclose( $file );

	        if (is_wp_error($api_response)) {
		        //http error
			    $reply['error'] = array(
				    array(
					    'type' => 'Proxy ERROR',
					    'message' => 'Failed to contact the templates API server.',
					    'debug_data' => $api_response
				    )
			    );
		        die(json_encode($reply));
	        }

	        if (isset($api_response['response']['code']) and $api_response['response']['code'] != '200') {
		        //response code != 200
		        $reply['error'] = array(
			        array(
				        'type' => 'Proxy ERROR',
				        'message' => 'Received a response code != 200 while trying to contact the templates API server.',
				        'debug_data' => $api_response
			        )
		        );
		        die(json_encode($reply));
	        }

	        if (empty($api_response['body'])) {
		        //response body is empty
		        $reply['error'] = array(
			        array(
				        'type' => 'Proxy ERROR',
				        'message' => 'Received an empty response body while contacting the templates API server.',
				        'debug_data' => $api_response
			        )
		        );
		        die(json_encode($reply));
	        }

	        //var_dump($api_response['body']);

	        $body = json_decode($api_response['body'], true);

	        if (isset($body['api_reply'])) {
	        	if (isset($body['api_reply']['error'])) {
	        		//cloud error
			        $proxy_error = array(
				        'type' => 'Proxy ERROR',
				        'message' => 'The templates API server responded with an error.',
				        'debug_data' => ''
			        );
			        array_unshift($body['api_reply']['error'], $proxy_error);
			        $reply['error'] = $body['api_reply']['error'];
		        } elseif(isset($body['api_reply']['fatal_error'])) {
	        		//fatal error
			        $reply['error'] = array(
				        array(
					        'type' => 'Proxy ERROR',
					        'message' => 'The templates API server responded with a fatal error.',
					        'debug_data' => $body['api_reply']['fatal_error']
				        )
			        );
		        } else {
	        		//regular reply
			        $reply = $body['api_reply'];
		        }
	        } else {
		        $reply['error'] = array(
			        array(
				        'type' => 'Proxy ERROR',
				        'message' => 'Invalid API reply, it does not contain the expected response.',
				        'debug_data' => $api_response
			        )
		        );
	        }

            die(json_encode($reply));
        },
    ));

    /**
     * image download endpoint
     */
	register_rest_route($namespace, '/download_image/', array(
        'methods' => 'POST',
        'callback' => function ($request) {

            // permission check
            if (!current_user_can('edit_pages')) {
	            $reply['error'] = array(
		            array(
			            'type' => 'Proxy ERROR',
			            'message' => 'You have no permission to access this endpoint.',
			            'debug_data' => ''
		            )
	            );
                die(json_encode($reply));
            }

            $image = $request->get_param('image');
            $templateId = $request->get_param('template_id');
            $install_uid = $request->get_param('install_uid');
            $current_step = $request->get_param('current_step');
            $total_steps = $request->get_param('total_steps');


            // params checks
            if (empty($image['uid'])) {
	            $reply['error'] = array(
		            array(
			            'type' => 'Proxy ERROR',
			            'message' => 'No uid provided.',
			            'debug_data' => ''
		            )
	            );
                die(json_encode($reply));
            }

	        $folder_a = substr($image['uid'], 0, 4);
            $folder_b = substr($image['uid'], 4, 2);

            $api_url = tdb_util::get_api_url('images');
	        $image_url = $api_url . '/' . $folder_a . '/' . $folder_b . '/' . $image['uid'] . '.' . $image['ext'];

	        require_once(ABSPATH . 'wp-admin/includes/media.php');
	        require_once(ABSPATH . 'wp-admin/includes/file.php');
	        require_once(ABSPATH . 'wp-admin/includes/image.php');

	        // Set variables for storage, fix file filename for query strings.
	        preg_match( '/[^\?]+\.(jpe?g|jpe|gif|png)\b/i', $image_url, $matches );
	        $file_array = array();
	        $file_array['name'] = basename( $matches[0] );

	        // Download file to temp location.
	        $file_array['tmp_name'] = download_url( $image_url );

	        // If error storing temporarily, return the error.
	        if ( is_wp_error( $file_array['tmp_name'] ) ) {
	            @unlink($file_array['tmp_name']);
		        $reply['error'] = array(
			        array(
				        'type' => 'Proxy ERROR',
				        'message' => 'is_wp_error - error storing temporarily.',
				        'debug_data' => array(
				        	'image_url' => $image_url,
					        'tmp_name' => $file_array['tmp_name']
				        )
			        )
		        );
		        die(json_encode($reply));
	        }

	        // Do the validation and storage stuff.
	        $id = media_handle_sideload( $file_array, '', '' ); //$id of attachement or wp_error

	        // If error storing permanently, unlink.
	        if ( is_wp_error( $id ) ) {
	            @unlink( $file_array['tmp_name'] );
		        $reply['error'] = array(
			        array(
				        'type' => 'Proxy ERROR',
				        'message' => 'is_wp_error - error storing permanently.',
				        'debug_data' => array(
					        'image_url' => $image_url,
					        '$id' => $id->get_error_messages()
				        )
			        )
		        );
		        die(json_encode($reply));
	        }

	        // The next commented code was used to delete not used images
	        // Instead of it we add 'tdb_image' meta on each attachment
	        update_post_meta( $id, 'tdb_image', true );


//	        // Delete any temp (not finished install) images
//	        if ( 1 === $current_step ) {
//
//	        	$temp_installed_images = get_post_meta( $templateId, 'tdb_temp_installed_images', true );
//
//	        	if ( ! empty( $temp_installed_images ) ) {
//	        		$att_ids = explode(';', $temp_installed_images );
//	        		foreach ( $att_ids as $att_id ) {
//	        			wp_delete_attachment( $att_id, true );
//			        }
//		        }
//
//	        	delete_post_meta( $templateId, 'tdb_temp_installed_images' );
//	        }
//
//
//	        // Delete any images loaded by a previous install
//	        $meta_installed_uid = get_post_meta( $templateId, 'tdb_install_uid', true );
//
//	        // Delete all attachments of the previous installations
//	        if ( $meta_installed_uid !== $install_uid ) {
//	        	$temp_installed_images = get_post_meta( $templateId, 'tdb_temp_installed_images', true );
//
//	        	if ( ! empty( $temp_installed_images ) ) {
//	        		$att_ids = explode(';', $temp_installed_images );
//	        		foreach ( $att_ids as $att_id ) {
//	        			wp_delete_attachment( $att_id, true );
//			        }
//		        }
//
//		        $temp_installed_images = '';
//	        } else {
//		        $temp_installed_images = get_post_meta( $templateId, 'tdb_temp_installed_images', true );
//	        }
//
//	        if ( empty( $temp_installed_images ) ) {
//	            $temp_installed_images = $id;
//	        } else {
//	            $temp_installed_images .= ';' . $id;
//	        }
//
//	        // As final step, delete previous installed images
//	        if ( $total_steps === $current_step ) {
//	            delete_post_meta( $templateId, 'tdb_temp_installed_images' );
//
//	            $installed_images = get_post_meta( $templateId, 'tdb_installed_images', true );
//
//	        	if ( ! empty( $installed_images ) ) {
//	        		$att_ids = explode(';', $installed_images );
//	        		foreach ( $att_ids as $att_id ) {
//	        			wp_delete_attachment( $att_id, true );
//			        }
//		        }
//
//	            update_post_meta( $templateId, 'tdb_installed_images', $temp_installed_images );
//	        } else {
//	        	update_post_meta( $templateId, 'tdb_temp_installed_images', $temp_installed_images );
//	        }

	        update_post_meta( $templateId, 'tdb_install_uid', $install_uid );



            die(json_encode(array(
	            'uid' => $image['uid'],
	            'attachment_id' => $id,
	            'url' => wp_get_attachment_image_src( $id, 'full' )[0]
            )));
        },
    ));


	/**
     * assign cloud template endpoint
     */
	register_rest_route($namespace, '/assign_template/', array(
        'methods' => 'POST',
        'callback' => function ($request) {

            // permission check
            if (!current_user_can('edit_pages')) {
	            $reply['error'] = array(
		            array(
			            'type' => 'Proxy ERROR',
			            'message' => 'You have no permission to access this endpoint.',
			            'debug_data' => ''
		            )
	            );
                die(json_encode($reply));
            }

            // check for post id
            $ref_id = $request->get_param( 'refId' );
            if (empty($ref_id)) {
                $reply['error'] = 'The ref id is missing and it\'s required!';
                die( json_encode( $reply ) );
            }

            // check for template id
            $template_id = $request->get_param( 'templateId' );
            if (empty($template_id)) {
                $reply['error'] = 'The template id is missing and it\'s required!';
                die( json_encode( $reply ) );
            }

            // check for template type
            $template_type = $request->get_param( 'templateType' );
            if (empty($template_type)) {
                $reply['error'] = 'The template type is missing and it\'s required!';
                die( json_encode( $reply ) );
            }

            if ( 'single' === $template_type ) {
                $td_post_theme_settings = get_post_meta($ref_id, 'td_post_theme_settings', true);
                $td_post_theme_settings = maybe_unserialize( $td_post_theme_settings );

                $td_post_theme_settings['td_post_template'] = 'tdb_template_' . $template_id;

                $result = update_post_meta($ref_id, 'td_post_theme_settings', $td_post_theme_settings);

                if ( false !== $result ) {
                    die(json_encode(array(
                        'post_url' => get_permalink($ref_id)
                    )));
                }

            } else if ( 'category' === $template_type ) {

                td_panel_data_source::update_category_option( $ref_id, 'tdb_category_template', 'tdb_template_' . $template_id );

                die(json_encode(array(
                    'post_url' => get_category_link(intval($ref_id))
                )));

            } else if ( '404' === $template_type ) {

                td_util::update_option( 'tdb_404_template', 'tdb_template_' . $template_id );

                die(json_encode(array(
                    'post_url' => $ref_id,
                    'encoded_url' => true
                )));

            } else if ( 'date' === $template_type ) {

                td_util::update_option( 'tdb_date_template', 'tdb_template_' . $template_id );

                die(json_encode(array(
                    'post_url' => $ref_id,
                    'encoded_url' => true
                )));
            } else if ( 'search' === $template_type ) {

                td_util::update_option( 'tdb_search_template', 'tdb_template_' . $template_id );

                die(json_encode(array(
                    'post_url' => $ref_id,
                    'encoded_url' => true
                )));
            } else if ( 'attachment' === $template_type ) {

                td_util::update_option( 'tdb_attachment_template', 'tdb_template_' . $template_id );

                die(json_encode(array(
                    'post_url' => $ref_id,
                    'encoded_url' => true
                )));
            } else if ( 'author' === $template_type ) {

                $td_options = &td_options::get_all_by_ref();
                if ( empty($template_id)) {
                    if ( ! empty($td_options['tdb_author_templates'][$ref_id])) {
                        unset($td_options['tdb_author_templates'][$ref_id]);
                    }
                } else {
                    $td_options['tdb_author_templates'][$ref_id] = 'tdb_template_' . $template_id;
                }

                die(json_encode(array(
                    'post_url' => get_author_posts_url( $ref_id )
                )));
            } else if ( 'tag' === $template_type ) {

                $td_options = &td_options::get_all_by_ref();

                $tag = get_tag($ref_id);

                if ( $tag instanceof WP_Term ) {

	                if ( empty( $template_id ) ) {

		                foreach ( $td_options[ 'tdb_tag_templates' ] as $tdb_tag_template_id => $tags ) {
			                $arr_tags = explode( ',', $tags );
			                if ( ! empty( $arr_tags ) ) {
				                $final_arr_tags = [];
                                foreach ( $arr_tags as $val ) {
                                    if ( trim( $val ) !== $tag->slug ) {
                                        $final_arr_tags[] = trim( $val );
                                    }
                                }
				                if ( empty($final_arr_tags)) {
                                    $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = '';
                                } else {
                                    $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $final_arr_tags ) );
                                }
			                }
		                }
                    } else {

	                    $skip_step = false;
	                    if ( empty($td_options[ 'tdb_tag_templates' ][ 'tdb_template_' . $template_id ])) {
		                    $td_options[ 'tdb_tag_templates' ][ 'tdb_template_' . $template_id ] = $tag->slug;
		                    $skip_step = true;
	                    }

                        foreach ( $td_options[ 'tdb_tag_templates' ] as $tdb_tag_template_id => $tags ) {

                            // Add slug in slug list
                            if ( $tdb_tag_template_id === 'tdb_template_' . $template_id ) {
                                if ( $skip_step ) {
                                    continue;
                                }

                                $arr_tags = explode( ',', $tags );
                                if ( empty( $arr_tags ) ) {
                                    $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = $tag->slug;
                                } else {
                                    $arr_tags[] = $tag->slug;
                                    $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $arr_tags ) );
                                }

                            // clear slug from slug list
                            } else {

                                $arr_tags = explode( ',', $tags );
                                if ( ! empty( $arr_tags ) ) {
                                    $final_arr_tags = [];
                                    foreach ( $arr_tags as $val ) {
                                        if ( trim( $val ) !== $tag->slug ) {
                                            $final_arr_tags[] = trim( $val );
                                        }
                                    }
                                    if ( empty($final_arr_tags)) {
                                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = '';
                                    } else {
                                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $final_arr_tags ) );
                                    }
                                }
                            }
                        }
	                }

	                die( json_encode( array(
		                'post_url' => get_tag_link( $ref_id )
	                ) ) );
                }
            }

            die(json_encode(array(
	            'post_url' => ''
            )));
        },
    ));


    /**
     * posts ajax autoload(infinite) using iframes
     */
    register_rest_route($namespace, '/ajax_autoload/', array(
        'methods'  => 'POST',
        'callback' => function($request){

            // check for post id
            $id = $request->get_param('currentPostId');

            if ( empty($id) ) {
                $reply['error'] = 'Post id is missing and it\'s required!';
                die( json_encode($reply) );
            }

            global $post;

            $post = get_post($id);

            $tdb_p_infinite_type = td_util::get_option('tdb_p_autoload_type', '');

            switch ( $tdb_p_infinite_type ) {
                case '':
                    // get the previous post
                    $next_post = get_previous_post();

                    break;

                case 'next':
                    // get the next post
                    $next_post = get_next_post();

                    break;

                case 'same_cat_prev':
                    // get the previous post from the same category
                    $next_post = get_previous_post(true);

                    break;

                case 'same_cat_next':
                    // get the next post from the same category
                    $next_post = get_next_post(true);

                    break;

                case 'cat':
                    /*
                    // get the loaded posts ids
                    $posts_to_exclude = $request->get_param('loadedPosts');

                    // get the original post id
                    $original_post_id = $request->get_param('originalPostId');

                    // query arguments to get the next post to display
                    $args = array(
                        'ignore_sticky_posts' => 1,
                        'post_status' => 'publish',
                        'posts_per_page' => 1,
                        'category__in' => wp_get_post_categories($original_post_id),
                        'post__not_in' => $posts_to_exclude,
                    );

                    $reply['currentPostId'] = $request->get_param('currentPostId');
                    $reply['originalPostId'] = $request->get_param('originalPostId');
                    $reply['loadedPosts'] = $request->get_param('loadedPosts');
                    $reply['args'] = $args;

                    // get the next post to show
                    $posts = get_posts($args);

                    $reply['nextPost'] = $posts;

                    if ( !empty($posts) ) {
                        // get the post to load from the posts array ( the posts array should contain just one post or be empty )
                        $next_post = $posts[0];
                    }
                    */

                    break;

                default:
                    $next_post = get_previous_post();

            }

            if ( !empty($next_post) ) {
                $post_to_load_id = $next_post->ID;

                $reply['type'] = $tdb_p_infinite_type;
                $reply['id'] = $post_to_load_id;

                $post_to_load_url = get_permalink($post_to_load_id);
                $post_to_load_edit_url = get_edit_post_link($post_to_load_id);
                $post_to_load_title = get_the_title($post_to_load_id);

                if ( strpos( $post_to_load_url,'?' ) === false ) {
                    $post_iframe_src = $post_to_load_url . '?tdb_action=tdb_ajax';
                } else {
                    $post_iframe_src = $post_to_load_url . '&tdb_action=tdb_ajax';
                }

                ob_start();

                ?>

                <iframe
                        id="tdb-infinte-post-<?php echo $post_to_load_id ?>-iframe"
                        class="tdb-infinte-post-iframe"
                        name="tdb-infinte-post-iframe"
                        src="<?php echo $post_iframe_src ?>"
                        scrolling="auto"
                        style="
                            display: block;
                            width: 100%;
                            height: 0;
                            border: 0;
                            /*outline: #000 dashed 1px;*/
                            opacity: 0;
                            -webkit-transition: opacity 0.4s;
                            transition: opacity 0.4s;
                            overflow: hidden;
                        "
                        data-post-url="<?php echo esc_url($post_to_load_url); ?>"
                        data-post-edit-url="<?php echo esc_url($post_to_load_edit_url); ?>"
                        data-post-title="<?php echo esc_attr($post_to_load_title); ?>"
                ></iframe>

                <?php

                $reply['article'] = ob_get_contents();

                if ( ob_get_contents() ) {
                    ob_end_clean();
                }

            } else {
                $reply['noPosts'] = array(
                    array(
                        'type' => $tdb_p_infinite_type,
                        'message' => 'No other corresponding post exists to be loaded!'
                    )
                );
            }

            die( json_encode($reply) );
        },
    ));

});

/**
 * ajax: sets the dark mode shortcode cookie
 */
add_action('wp_ajax_nopriv_td_set_dark_mode_cookie', 'on_ajax_set_dark_mode_cookie');
add_action('wp_ajax_td_set_dark_mode_cookie',        'on_ajax_set_dark_mode_cookie');
function on_ajax_set_dark_mode_cookie() {

	$reply = array(
		'status' => '',
		'cookie_data' => array()
	);

	// die if request is fake
	check_ajax_referer('td-block', 'td_magic_token' );

	// check status
	$td_status = $_POST['td_status'];
	if ( ! in_array( $td_status, array( 'on', 'off' ) ) ) {
		$reply['status'] = 'error - invalid status: ' . $td_status;
		die( json_encode( $reply ) );
	}

	//$expiry = time() + MINUTE_IN_SECONDS;
	$expiry = time() + 10;
	$cookieData = array(
		'status' => $td_status,
		'expiry' => $expiry
	);

	// set cookie and return status
	$setcookie_satus = setcookie(
		"td_dark_mode_cookie",
		base64_encode ( json_encode( $cookieData ) ),
		$expiry,
		COOKIEPATH,
		COOKIE_DOMAIN
	);

	// check status
	if ( $setcookie_satus ) {
		$reply['status'] = 'success - the cookie was set to: ' . strtoupper($td_status);
	} else {
		$reply['status'] = 'error - the cookie was NOT set';
	}

	$reply['cookie_data'] = array(
		"td_dark_mode_cookie",
		json_encode( $cookieData ),
		$expiry, // expiration time in seconds
		COOKIEPATH,
		COOKIE_DOMAIN
	);

	die( json_encode( $reply ) );
}



add_action('wp_ajax_nopriv_tdb_get_single_templates', 'tdb_get_single_templates');
add_action('wp_ajax_tdb_get_single_templates', 'tdb_get_single_templates');
function tdb_get_single_templates (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'single',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'td_default_site_post_template';
        $td_default_site_post_template = td_util::get_option( $option_id );

        $global_single_template_id = '';
        if ( ! empty( $td_default_site_post_template ) && td_global::is_tdb_template( $td_default_site_post_template, true ) ) {
            $global_single_template_id = td_global::tdb_get_template_id( $td_default_site_post_template );
        }

        $find_current = true;

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $is_current = false;

            $post_id = $_POST['single_id'];

            if ( !empty($post_id) && $find_current ) {

                $td_post_theme_settings = td_util::get_post_meta_array($post_id, 'td_post_theme_settings');
                if ( ! empty($td_post_theme_settings['td_post_template'] ) && $td_post_theme_settings['td_post_template'] == 'tdb_template_' . $post->ID ) {
                    $is_current = true;
                    $find_current = false;
                }
            }

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_global' => intval($global_single_template_id) === intval($post->ID) ? true : false,
                'is_current' => $is_current
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_single_template_to_post', 'tdb_assign_single_template_to_post');
add_action('wp_ajax_tdb_assign_single_template_to_post', 'tdb_assign_single_template_to_post');
function tdb_assign_single_template_to_post (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $post_id = $_POST['single_id'];
    $template_id = $_POST['template_id'];

    if ( empty($post_id) ) {
        die( json_encode( $reply ) );
    }

    $td_post_theme_settings = td_util::get_post_meta_array($post_id, 'td_post_theme_settings');
    if ( empty($template_id )) {
        $td_post_theme_settings['td_post_template']  = '';
    } else {
        $td_post_theme_settings['td_post_template']  = 'tdb_template_' . $template_id;
    }

    $result = update_post_meta( $post_id, 'td_post_theme_settings', $td_post_theme_settings );

    if ( false !== $result ) {
        $reply['current_template_id'] = $template_id;
    }

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_single_template_global', 'tdb_assign_single_template_global');
add_action('wp_ajax_tdb_assign_single_template_global', 'tdb_assign_single_template_global');
function tdb_assign_single_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $post_id = $_POST['single_id'];
    $template_id = $_POST['template_id'];

    if ( empty($post_id) || empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('td_default_site_post_template', 'tdb_template_' . $template_id);

    // read back the global setting
    $default_template_id = td_util::get_option( 'td_default_site_post_template' );

    if ( td_global::is_tdb_template( $default_template_id, true ) ) {
        $tdb_template_id = td_global::tdb_get_template_id( $default_template_id );

        if ( intval($template_id) === $tdb_template_id ) {
            $reply['global_template_id'] = $template_id;
        }
    }

    $td_post_theme_settings = td_util::get_post_meta_array($post_id, 'td_post_theme_settings');
    if (empty($td_post_theme_settings['td_post_template'])) {
        $reply['reload'] = true;
    }

    wp_die( json_encode( $reply ) );
}

add_action('wp_ajax_nopriv_tdb_get_category_templates', 'tdb_get_category_templates');
add_action('wp_ajax_tdb_get_category_templates', 'tdb_get_category_templates');
function tdb_get_category_templates (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'category',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'tdb_category_template';
        $td_default_site_category_template = td_util::get_option( $option_id );

        $global_category_template_id = '';
        if ( ! empty( $td_default_site_category_template ) && td_global::is_tdb_template( $td_default_site_category_template, true ) ) {
            $global_category_template_id = td_global::tdb_get_template_id( $td_default_site_category_template );
        }

        $td_options = td_options::get_all();
        $find_current = true;

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $is_current = false;

            $cat_id = $_POST['category_id'];

            if ( $find_current && !empty($cat_id)
                && !empty($td_options['category_options'][$cat_id]['tdb_category_template'])
                && 'tdb_template_' . $post->ID === $td_options['category_options'][$cat_id]['tdb_category_template'] ) {

                $is_current = true;
                $find_current = false;
            }

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_global' => intval($global_category_template_id) === intval($post->ID) ? true : false,
                'is_current' => $is_current
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_cat_template_to_cat', 'tdb_assign_cat_template_to_cat');
add_action('wp_ajax_tdb_assign_cat_template_to_cat', 'tdb_assign_cat_template_to_cat');
function tdb_assign_cat_template_to_cat (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $cat_id = $_POST['category_id'];
    $template_id = $_POST['template_id'];

    if ( empty($cat_id) ) {
        die( json_encode( $reply ) );
    }

    $option_id = 'tdb_category_template';
    $new_template_id = $template_id;
    $old_template_id = td_util::get_category_option( $cat_id, $option_id);

    if (!empty($new_template_id)) {
        $new_template_id = 'tdb_template_' . $new_template_id;
    }

    td_panel_data_source::update_category_option( $cat_id, $option_id, $new_template_id );

    if ( $old_template_id !== $template_id ) {
        $reply['current_template_id'] = $template_id;
    }

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_cat_template_global', 'tdb_assign_cat_template_global');
add_action('wp_ajax_tdb_assign_cat_template_global', 'tdb_assign_cat_template_global');
function tdb_assign_cat_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $cat_id = $_POST['category_id'];
    $template_id = $_POST['template_id'];

    if ( empty($cat_id) || empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('tdb_category_template', 'tdb_template_' . $template_id);
    $reply['global_template_id'] = $template_id;

    // read back the global setting
    $default_template_id = td_util::get_option( 'td_default_site_post_template' );

    if ( td_global::is_tdb_template( $default_template_id, true ) ) {
        $tdb_template_id = td_global::tdb_get_template_id( $default_template_id );

        if ( intval($template_id) === $tdb_template_id ) {
            $reply['global_template_id'] = $template_id;
        }
    }

    $tdb_category_template = td_util::get_category_option( $cat_id, 'tdb_category_template');
    if (empty($tdb_category_template)) {
        $reply['reload'] = true;
    }

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_404_templates', 'tdb_get_404_templates');
add_action('wp_ajax_tdb_get_404_templates', 'tdb_get_404_templates');
function tdb_get_404_templates(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => '404',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'tdb_404_template';
        $td_default_site_template = td_util::get_option( $option_id );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_current' => intval($global_template_id) === intval($post->ID) ? true : false
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_404_template_global', 'tdb_assign_404_template_global');
add_action('wp_ajax_tdb_assign_404_template_global', 'tdb_assign_404_template_global');
function tdb_assign_404_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];

    if ( empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('tdb_404_template', 'tdb_template_' . $template_id);

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_date_templates', 'tdb_get_date_templates');
add_action('wp_ajax_tdb_get_date_templates', 'tdb_get_date_templates');
function tdb_get_date_templates(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'date',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'tdb_date_template';
        $td_default_site_template = td_util::get_option( $option_id );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_current' => intval($global_template_id) === intval($post->ID) ? true : false
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_date_template_global', 'tdb_assign_date_template_global');
add_action('wp_ajax_tdb_assign_date_template_global', 'tdb_assign_date_template_global');
function tdb_assign_date_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];

    if ( empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('tdb_date_template', 'tdb_template_' . $template_id);

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_search_templates', 'tdb_get_search_templates');
add_action('wp_ajax_tdb_get_search_templates', 'tdb_get_search_templates');
function tdb_get_search_templates(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'search',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'tdb_search_template';
        $td_default_site_template = td_util::get_option( $option_id );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_current' => intval($global_template_id) === intval($post->ID) ? true : false
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_search_template_global', 'tdb_assign_search_template_global');
add_action('wp_ajax_tdb_assign_search_template_global', 'tdb_assign_search_template_global');
function tdb_assign_search_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];

    if ( empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('tdb_search_template', 'tdb_template_' . $template_id);

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_attachment_templates', 'tdb_get_attachment_templates');
add_action('wp_ajax_tdb_get_attachment_templates', 'tdb_get_attachment_templates');
function tdb_get_attachment_templates(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'attachment',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $option_id = 'tdb_attachment_template';
        $td_default_site_template = td_util::get_option( $option_id );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_current' => intval($global_template_id) === intval($post->ID) ? true : false
            );
        }
    }

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_attachment_template_global', 'tdb_assign_attachment_template_global');
add_action('wp_ajax_tdb_assign_attachment_template_global', 'tdb_assign_attachment_template_global');
function tdb_assign_attachment_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];

    if ( empty($template_id)) {
        die( json_encode( $reply ) );
    }

    td_util::update_option('tdb_attachment_template', 'tdb_template_' . $template_id);

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_author_templates', 'tdb_get_author_templates');
add_action('wp_ajax_tdb_get_author_templates', 'tdb_get_author_templates');
function tdb_get_author_templates (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'author',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $td_default_site_template = td_util::get_option( 'tdb_author_template' );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }

        $find_current = true;

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $is_current = false;

            $author_id = $_POST['author_id'];

            if ( ! empty($author_id) && $find_current ) {
                $tdb_author_templates = td_options::get( 'tdb_author_templates' );
                if ( ! empty($tdb_author_templates[$author_id]) && 'tdb_template_' . $post->ID === $tdb_author_templates[$author_id] ) {
                    $is_current = true;
                    $find_current = false;
                }
            }

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_global' => intval($global_template_id) === intval($post->ID) ? true : false,
                'is_current' => $is_current
            );
        }
    }

    die( json_encode( $reply ) );
}



add_action('wp_ajax_nopriv_tdb_assign_author_template_to_author', 'tdb_assign_author_template_to_author');
add_action('wp_ajax_tdb_assign_author_template_to_author', 'tdb_assign_author_template_to_author');
function tdb_assign_author_template_to_author (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $author_id = $_POST['author_id'];
    $template_id = $_POST['template_id'];

    if ( empty($author_id) ) {
        die( json_encode( $reply ) );
    }

    $td_options = &td_options::get_all_by_ref();
    if ( empty($template_id)) {
        if ( ! empty($td_options['tdb_author_templates'][$author_id])) {
            unset($td_options['tdb_author_templates'][$author_id]);
        }
    } else {
        $td_options['tdb_author_templates'][$author_id] = 'tdb_template_' . $template_id;
    }

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_author_template_global', 'tdb_assign_author_template_global');
add_action('wp_ajax_tdb_assign_author_template_global', 'tdb_assign_author_template_global');
function tdb_assign_author_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $author_id = $_POST['author_id'];
    $template_id = $_POST['template_id'];

    if ( empty($author_id) || empty($template_id)) {
        die( json_encode( $reply ) );
    }

    $td_options = &td_options::get_all_by_ref();
    $td_options['tdb_author_template'] = 'tdb_template_' . $template_id;
    if ( empty( $td_options['tdb_author_templates'][$author_id] ) ) {
        $reply['reload'] = true;
    }

    $reply['global_template_id'] = $template_id;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_get_tag_templates', 'tdb_get_tag_templates');
add_action('wp_ajax_tdb_get_tag_templates', 'tdb_get_tag_templates');
function tdb_get_tag_templates (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $args = array(
        'post_type' => array('tdb_templates'),
        'meta_query' => array(
            array(
                'key'     => 'tdb_template_type',
                'value'   => 'tag',
            ),
        ),
        'posts_per_page' => '-1'
    );

    $wp_query_templates = new WP_Query( $args );

    if (!empty($wp_query_templates->posts)) {

        $td_default_site_template = td_util::get_option( 'tdb_tag_template' );

        $global_template_id = '';
        if ( ! empty( $td_default_site_template ) && td_global::is_tdb_template( $td_default_site_template, true ) ) {
            $global_template_id = td_global::tdb_get_template_id( $td_default_site_template );
        }


        $tdb_tag_templates = td_options::get( 'tdb_tag_templates' );
        $find_current = true;

        /**
         * @var $post WP_Post
         */
        foreach ($wp_query_templates->posts as $post) {

            $is_current = false;

            $tag_id = $_POST['tag_id'];

            if ( !empty($tag_id) && $find_current ) {
                $tag = get_tag( $tag_id );
                if ( $tag instanceof WP_Term ) {

                    if ( is_array($tdb_tag_templates)) {
                        foreach ( $tdb_tag_templates as $tdb_tag_template_id => $tags ) {

                            if ( 'tdb_template_' . $post->ID === $tdb_tag_template_id ) {

                                $arr_tags = explode( ',', $tags );

                                if ( !empty($arr_tags) && is_array($arr_tags) ) {

                                    $arr_tags = array_map( function($val) { return trim($val); }, $arr_tags);

                                    if (in_array($tag->slug, $arr_tags)) {

                                        $is_current = true;
                                        $find_current = false;
                                        break;
                                    }
                                }
                            }
                        }
                    }

                }
            }

            $reply[] = array(
                'template_id' => $post->ID,
                'template_title' => $post->post_title,
                'is_global' => intval($global_template_id) === intval($post->ID) ? true : false,
                'is_current' => $is_current
            );
        }
    }

    die( json_encode( $reply ) );
}



add_action('wp_ajax_nopriv_tdb_assign_tag_template_to_tag', 'tdb_assign_tag_template_to_tag');
add_action('wp_ajax_tdb_assign_tag_template_to_tag', 'tdb_assign_tag_template_to_tag');
function tdb_assign_tag_template_to_tag (){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $tag_id = $_POST['tag_id'];
    $template_id = $_POST['template_id'];

    if ( empty($tag_id) ) {
        die( json_encode( $reply ) );
    }

    $tag = get_tag($tag_id);
    if ( $tag instanceof WP_Term) {

        $td_options = &td_options::get_all_by_ref();

        if ( empty( $template_id ) ) {

            foreach ( $td_options[ 'tdb_tag_templates' ] as $tdb_tag_template_id => $tags ) {
                $arr_tags = explode( ',', $tags );
                if ( ! empty( $arr_tags ) ) {
                    $final_arr_tags = [];
                    foreach ( $arr_tags as $val ) {
                        if ( trim( $val ) !== $tag->slug ) {
                            $final_arr_tags[] = trim( $val );
                        }
                    }
                    if ( empty($final_arr_tags)) {
                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = '';
                    } else {
                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $final_arr_tags ) );
                    }
                }
            }
        } else {

            $skip_step = false;
            if ( empty($td_options[ 'tdb_tag_templates' ][ 'tdb_template_' . $template_id ])) {
                $td_options[ 'tdb_tag_templates' ][ 'tdb_template_' . $template_id ] = $tag->slug;
                $skip_step = true;
            }

            foreach ( $td_options[ 'tdb_tag_templates' ] as $tdb_tag_template_id => $tags ) {

                // Add slug in slug list
                if ( $tdb_tag_template_id === 'tdb_template_' . $template_id ) {
                    if ( $skip_step ) {
                        continue;
                    }

                    $arr_tags = explode( ',', $tags );
                    if ( empty( $arr_tags ) ) {
                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = $tag->slug;
                    } else {
                        $arr_tags[] = $tag->slug;
                        $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $arr_tags ) );
                    }

                // clear slug from slug list
                } else {

                    $arr_tags = explode( ',', $tags );
                    if ( ! empty( $arr_tags ) ) {
                        $final_arr_tags = [];
                        foreach ( $arr_tags as $val ) {
                            if ( trim( $val ) !== $tag->slug ) {
                                $final_arr_tags[] = trim( $val );
                            }
                        }
                        if ( empty($final_arr_tags)) {
                            $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = '';
                        } else {
                            $td_options[ 'tdb_tag_templates' ][ $tdb_tag_template_id ] = implode( ',', array_unique( $final_arr_tags ) );
                        }
                    }
                }
            }
        }
    }

    $reply['reload'] = true;

    wp_die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_assign_tag_template_global', 'tdb_assign_tag_template_global');
add_action('wp_ajax_tdb_assign_tag_template_global', 'tdb_assign_tag_template_global');
function tdb_assign_tag_template_global(){
    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $tag_id = $_POST['tag_id'];
    $template_id = $_POST['template_id'];

    if ( empty($tag_id) || empty($template_id)) {
        die( json_encode( $reply ) );
    }

    $td_options = &td_options::get_all_by_ref();
    $td_options['tdb_tag_template'] = 'tdb_template_' . $template_id;

    $reload = true;

    $tag = get_tag($tag_id);
    if ( $tag instanceof WP_Term) {

        $option_id = 'tdb_tag_templates';

        $tdb_tag_templates = td_options::get( $option_id );
        if ( is_array($tdb_tag_templates)) {
            foreach ( $tdb_tag_templates as $tdb_tag_template_id => $tags ) {

                $arr_tags = explode( ',', $tags );

                if ( !empty($arr_tags) && is_array($arr_tags) ) {

                    $arr_tags = array_map( function($val) { return trim($val); }, $arr_tags);

                    if (in_array($tag->slug, $arr_tags)) {

                        $reload = false;
	                    break;
                    }
                }
            }
        }
    }

    if ( $reload ) {
	    $reply[ 'reload' ] = true;
    }

    $reply['global_template_id'] = $template_id;

    wp_die( json_encode( $reply ) );
}

add_action('wp_ajax_nopriv_tdb_delete_template', 'tdb_delete_template');
add_action('wp_ajax_tdb_delete_template', 'tdb_delete_template');
function tdb_delete_template() {

    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];

    if ( empty($template_id)) {
        die( json_encode( $reply ) );
    }

    // update post
    $post_id = wp_trash_post($template_id);

    // treat errors
    if ( is_wp_error( $post_id ) ) {
        $reply['error'] = $post_id->get_error_messages();
        die( json_encode( $reply ) );
    }

    $reply['template_id'] = $template_id;

    die( json_encode( $reply ) );
}


add_action('wp_ajax_nopriv_tdb_change_template_name', 'tdb_change_template_name');
add_action('wp_ajax_tdb_change_template_name', 'tdb_change_template_name');
function tdb_change_template_name() {

    $reply = array();

    $nonce = $_POST['_nonce'];
    if ( ! wp_verify_nonce( $nonce, 'wp_rest' ) ) {
        die( json_encode( $reply ) );
    }

    $template_id = $_POST['template_id'];
    $template_title = $_POST['template_title'];

    if ( empty($template_id) || empty($template_title)) {
        die( json_encode( $reply ) );
    }

    // update post
    $post_id = wp_update_post(array(
        'ID' => $template_id,
        'post_title' => $template_title,
    ));

    // treat errors
    if ( is_wp_error( $post_id ) ) {
        $reply['error'] = $post_id->get_error_messages();
        die( json_encode( $reply ) );
    }

    $reply['template_id'] = $template_id;
    $reply['template_title'] = $template_title;

    die( json_encode( $reply ) );
}




