<?php
/**
 * Created by PhpStorm.
 * User: tagdiv
 * Date: 30.12.2014
 * Time: 13:26
 */

class td_video_playlist_render {

	/**
	 * @param $atts the shortcode atts
	 * @param $list_type string youtube|vimeo
	 *
	 * @return string the playlist HTML
	 */
    static function render_generic($atts, $list_type, $get_wrapper_class, $block_uid = '', $block_css = '') {
        if ( $block_uid == '' ) {
            $block_uid = td_global::td_generate_unique_id(); //update unique class on each render
        }
        $buffy = ''; //output buffer
        $el_class = '';
        if (!empty($atts['el_class'])) {
            $el_class = $atts['el_class'];
        }

        $playlist_source = 'video_ids';
        if ( isset( $atts['playlist_source'] ) ) {
            $playlist_source = $atts['playlist_source'];
        }

        $buffy .= '<div class="td_block_video_playlist ' . $get_wrapper_class . ' ' . $el_class . ' ' .  $block_uid . '">';
            $buffy .= $block_css;

	        $buffy .= '<div class="td_block_inner">';

                // display error if api key was not provided
                if( $list_type == 'youtube' && td_util::get_option('tds_yt_api_key') == '' && TD_DEPLOY_MODE == 'deploy' ) {
                    $buffy .= td_util::get_block_error('Video playlist', '<strong>A YouTube API key</strong> has not been provided. Go to <strong>Theme Panel > Social Networks > YouTube API Configuration</strong>');
                } else {
                    //inner content of the block
                    $playlist_html = self::inner($atts, $list_type);
                    $buffy .= $playlist_html;

                    // display error if either video ids/username/playlist id fields are empty
                    // or can't retrieve videos
                    switch ($playlist_source) {
                        case 'video_ids':
                            if ( ( isset($atts['playlist_yt']) && empty($atts['playlist_yt']) ) || ( isset($atts['playlist_v']) && empty($atts['playlist_v']) ) ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Video id field</strong> is empty. Configure this block/widget and enter a list of video id\'s');
                            } else if ( $playlist_html == '' ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Video ids</strong> were not found or can\'t be retrieved.');
                            }
                            break;
                        case 'channel_id':
                            if ( empty($atts['channel_id']) ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Channel ID field</strong> is empty. Configure this block/widget and enter a youtube channel id');
                            } else if ( $playlist_html == '' ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Channel</strong> doesn\'t exist or does not have any uploads');
                            }
                            break;
                        case 'username':
                            if ( empty($atts['username']) ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Username field</strong> is empty. Configure this block/widget and enter a youtube username');
                            } else if ( $playlist_html == '' ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Channel</strong> doesn\'t exist or does not have any uploads');
                            }
                            break;
                        case 'playlist_id':
                            if ( empty($atts['playlist_id']) ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Playlist id field</strong> is empty. Configure this block/widget and enter a playlist id');
                            } else if ( $playlist_html == '' ) {
                                $buffy .= td_util::get_block_error('Video playlist', '<strong>Playlist</strong> doesn\'t exist or has no videos');
                            }
                            break;
                        default:
                            break;
                    }
                }

	        $buffy .= '</div>';
        $buffy .= '</div> <!-- ./block_video_playlist -->';
        return $buffy;
    }


    private static function get_option($option_name) {
        $option_contents = get_option($option_name);
        if( !is_array($option_contents) ) {
            $option_contents = array();
        }

        return $option_contents;
    }


	private static function get_video_data($atts, $list_type) {
		global $post;

		// When the TagDiv composer is requesting by ajax, the $postId is set by the 'postId' param
		if ( td_util::tdc_is_live_editor_ajax() ) {
			$postId = $_POST['postId'];
		} else {
			$postId = $post->ID;
		}

		$atts_playlist_name = 'playlist_yt';
		$list_name = 'youtube_ids'; //array key for youtube in the pos meta db array

		if($list_type != 'youtube') {
			$atts_playlist_name = 'playlist_v';
			$list_name = 'vimeo_ids'; //array key for vimeo in the pos meta db array
		}

		$playlist_source = 'video_ids';
		if( isset( $atts['playlist_source'] ) ) {
            $playlist_source = $atts['playlist_source'];
        }

		$limit = '10';
        if( isset( $atts['limit'] ) && $atts['limit'] != '' && is_numeric($atts['limit']) ) {
            if( $atts['limit'] > 50 ) {
                $limit = 50;
            } else {
                $limit = $atts['limit'];
            }
        }

        $cache_timeout = 3 * HOUR_IN_SECONDS;
        if( isset( $atts['cache'] ) && $atts['cache'] == '0' ) {
            $cache_timeout = 0;
        } else {
            if( isset( $atts['cache_timeout'] ) && $atts['cache_timeout'] != '' ) {
                $cache_timeout = $atts['cache_timeout'];
            }
        }


		switch ($playlist_source) {
            case 'video_ids':
                // read the youtube and vimeo ids from the DB
                $td_playlist_videos = self::get_option('td_playlist_video_' . $playlist_source);
                $playlist_videos_pool = self::get_option('td_playlist_videos_pool');

                // read the video ids from the shortcode
                if ( !empty($atts[$atts_playlist_name]) ) {

                    $playlist_video_ids = array_map('trim', explode(",", $atts[$atts_playlist_name]));

                    if( isset($td_playlist_videos[$list_name]) ) {

                        $uncached_ids = array();
                        foreach ($playlist_video_ids as $video_id) {
                            if ( !in_array( $video_id, $td_playlist_videos[$list_name]['items'] ) ) {
                                $uncached_ids[] = $video_id;
                            } else if ( !isset( $playlist_videos_pool[$list_name][$video_id] ) ) {
                                $uncached_ids[] = $video_id;
                            }
                        }

                        if( !empty($uncached_ids) ) {
                            $uncached_pool_ids = array();
                            foreach ($uncached_ids as $video_id) {
                                if ( !isset($playlist_videos_pool[$list_name][$video_id]) ) {
                                    $uncached_pool_ids[] = $video_id;
                                    $td_playlist_videos[$list_name]['items'][] = $video_id;
                                }
                            }

                            if( !empty($uncached_pool_ids) ) {
                                $uncached_videos = td_remote_video::api_get_videos_info($uncached_pool_ids, $list_type);

                                if( $uncached_videos !== FALSE ) {
                                	if (empty($playlist_videos_pool[$list_name])) {
                                	    $playlist_videos_pool[$list_name] = $uncached_videos;
	                                } else {
                                	    $playlist_videos_pool[$list_name] = $playlist_videos_pool[$list_name] + $uncached_videos;
	                                }

                                    update_option('td_playlist_videos_pool', $playlist_videos_pool);

                                    update_option('td_playlist_video_' . $playlist_source, $td_playlist_videos);
                                }
                            }

                        }

                    } else {

                        $uncached_pool_ids = array();
                        foreach ($playlist_video_ids as $video_id) {
                            if ( !isset($playlist_videos_pool[$list_name][$video_id]) ) {
                                $uncached_pool_ids[] = $video_id;
                            }
                        }

                        if( !empty( $uncached_pool_ids ) ) {
                            $uncached_videos = td_remote_video::api_get_videos_info($uncached_pool_ids, $list_type);
                            if( $uncached_videos !== FALSE ) {
                                if (empty($playlist_videos_pool[$list_name])) {
                                    $playlist_videos_pool[$list_name] = $uncached_videos;
                                } else {
                                    $playlist_videos_pool[$list_name] = $playlist_videos_pool[$list_name] + $uncached_videos;
                                }
                                update_option('td_playlist_videos_pool', $playlist_videos_pool);

                                $td_playlist_videos[$list_name]['items'] = $playlist_video_ids;
                                update_option('td_playlist_video_' . $playlist_source, $td_playlist_videos);
                            }
                        }

                    }

                    $buffy_array = array();
                    foreach ($playlist_video_ids as $key => $video_id) {
                        if( isset( $playlist_videos_pool[$list_name][$video_id] ) ) {
                            $buffy_array[$video_id] = $playlist_videos_pool[$list_name][$video_id];
                        }
                    }
                } else {
                    return false;
                }

                break;

            case 'channel_id':
            case 'username':
            case 'playlist_id':
                $td_playlist_videos = self::get_option('td_playlist_video_' . $playlist_source);
                $playlist_videos_pool = self::get_option('td_playlist_videos_pool');

                if( !empty($atts[$playlist_source]) ) {

                    if( isset($td_playlist_videos[$list_name][$atts[$playlist_source]]) ) {

                        if( ( ( time() - $td_playlist_videos[$list_name][$atts[$playlist_source]]['timestamp'] ) > $cache_timeout )
                            || $limit > count( $td_playlist_videos[$list_name][$atts[$playlist_source]]['items'] ) ) {

                            if( $playlist_source == 'username' || $playlist_source == 'channel_id' ) {
                                $playlist_video_ids = td_remote_video::youtube_api_get_channel_videos_ids($atts[$playlist_source], $playlist_source, $limit);
                            } else if ( $playlist_source == 'playlist_id' ) {
                                $playlist_video_ids = td_remote_video::youtube_api_get_playlist_videos_ids($atts[$playlist_source], $limit);
                            }

                            if( $playlist_video_ids !== false ) {
                                $uncached_ids = array();
                                foreach ($playlist_video_ids as $video) {
                                    if ( !in_array( $video['id'], $td_playlist_videos[$list_name][$atts[$playlist_source]]['items'] ) ) {
                                        $uncached_ids[] = $video['id'];
                                    } else if ( !isset( $playlist_videos_pool[$list_name][$video['id']] ) && $video['status'] == 'public' ) {
                                        $uncached_ids[] = $video['id'];
                                    } else if ( isset( $playlist_videos_pool[$list_name][$video['id']] ) && ( time() - $playlist_videos_pool[$list_name][$video['id']]['timestamp'] ) > $cache_timeout ) {
                                        $uncached_ids[] = $video['id'];
                                    }

                                    if( isset( $playlist_videos_pool[$list_name] ) && $video['status'] != 'public' ) {
                                        unset($playlist_videos_pool[$list_name]);
                                    }
                                }

                                if( !empty($uncached_ids) ) {

                                    $uncached_pool_ids = array();
                                    foreach ($uncached_ids as $video_id) {
                                        if ( !isset($playlist_videos_pool[$list_name][$video_id]) ) {
                                            $uncached_pool_ids[] = $video_id;
                                        } else if ( ( time() - $playlist_videos_pool[$list_name][$video_id]['timestamp'] ) > $cache_timeout ) {
                                            $uncached_pool_ids[] = $video_id;
                                        }
                                    }

                                    if( !empty($uncached_pool_ids) ) {

                                        $uncached_videos = td_remote_video::api_get_videos_info($uncached_pool_ids, $list_type);

                                        if( $uncached_videos !== FALSE ) {
                                            foreach ( $uncached_pool_ids as $video_id ) {
                                                $playlist_videos_pool[$list_name][$video_id] = $uncached_videos[$video_id];
                                            }
                                            update_option('td_playlist_videos_pool', $playlist_videos_pool);
                                        }
                                    }

                                }

                                $td_playlist_videos[$list_name][$atts[$playlist_source]]['items'] = $playlist_video_ids;

                            } else {
                                return false;
                            }

                            $td_playlist_videos[$list_name][$atts[$playlist_source]]['timestamp'] = time();
                            update_option('td_playlist_video_' . $playlist_source, $td_playlist_videos);

                        }

                    } else {

                        if( $playlist_source == 'username' || $playlist_source == 'channel_id' ) {
                            $playlist_video_ids = td_remote_video::youtube_api_get_channel_videos_ids($atts[$playlist_source], $playlist_source, $limit);
                        } else if ( $playlist_source == 'playlist_id' ) {
                            $playlist_video_ids = td_remote_video::youtube_api_get_playlist_videos_ids($atts[$playlist_source], $limit);
                        }

                        if( $playlist_video_ids !== false ) {
                            $uncached_pool_ids = array();
                            foreach ($playlist_video_ids as $video_id) {
                                if ( !isset($playlist_videos_pool[$list_name][$video_id]['id']) && $video_id['status'] == 'public' ) {
                                    $uncached_pool_ids[] = $video_id['id'];
                                }
                            }

                            if( !empty( $uncached_pool_ids ) ) {
                                $uncached_videos = td_remote_video::api_get_videos_info($uncached_pool_ids, $list_type);

                                if( $uncached_videos !== FALSE ) {
                                    if (empty($playlist_videos_pool[$list_name])) {
                                        $playlist_videos_pool[$list_name] = $uncached_videos;
                                    } else {
                                        $playlist_videos_pool[$list_name] = $playlist_videos_pool[$list_name] + $uncached_videos;
                                    }
                                    update_option('td_playlist_videos_pool', $playlist_videos_pool);
                                }
                            }

                            $td_playlist_videos[$list_name][$atts[$playlist_source]]['items'] = $playlist_video_ids;
                            $td_playlist_videos[$list_name][$atts[$playlist_source]]['count'] = count($playlist_video_ids);
                            $td_playlist_videos[$list_name][$atts[$playlist_source]]['timestamp'] = time();
                            update_option('td_playlist_video_' . $playlist_source, $td_playlist_videos);
                        } else {
                            return false;
                        }

                    }

                    $buffy_array = array();
                    foreach ( array_slice($td_playlist_videos[$list_name][$atts[$playlist_source]]['items'], 0, $limit ) as $key => $video_id ) {
                        if( isset($playlist_videos_pool[$list_name][$video_id['id']]) ) {
                            $buffy_array[$video_id['id']] = $playlist_videos_pool[$list_name][$video_id['id']];
                        }
                    }
                }

                break;

            default:
                break;
        }

        if( !empty( $buffy_array ) ) {
            return $buffy_array;
        }
        return false;
	}


	private static function inner ($atts, $list_type) {


        if(is_single() && 'tdb_templates' !== get_post_type()) {
            //get the column number on single post page
            if(td_global::$cur_single_template_sidebar_pos == 'no_sidebar'){
                $td_column_number = 3;
            } else {
                $td_column_number = 2;
            }
        } else {
            if (td_global::$cur_single_template_sidebar_pos == 'no_sidebar') {
                $td_column_number = 3;
            } else {
                //page
                $td_column_number = td_global::vc_get_column_number(); // get the column width of the block
            }
        }

        if($list_type == 'youtube') {
            //array key for youtube in the pos meta db array
            $list_name = 'youtube_ids';
        } else {
            //array key for vimeo in the pos meta db array
            $list_name = 'vimeo_ids';
        }


	    // read the youtube and vimeo ids
	    //$playlist_video_db = get_post_meta($post->ID, td_video_playlist_support::$td_playlist_video_key, true);

	    $videos_meta = self::get_video_data($atts, $list_type);


        if ( $videos_meta !== false ) {

            $first_video_id = '';
            $contor_first_video = 0;
            $js_object = '';
            $click_video_container = '';

			$js_variable = ';if (undefined === window.td_' . $list_type . '_list_ids) {window.td_' . $list_type . '_list_ids = {}};';

			$firstVid = true;
            foreach($videos_meta as $video_id => $video_data) {

                //take the id of first video
                if($contor_first_video == 0) {$first_video_id = $video_id;}
                $contor_first_video++;

                //add comma (,) for next value
                if(!empty($js_object)) {$js_object .= ',';}
                //$js_object .= "\n'td_".$video_id."':{";

                $video_data_propeties = '';

                //get thumb
                $playlist_structure_thumb = '';
                if(!empty($video_data['thumb'])){

                    //if on https & we do not have an https image set it on https
                    if ( td_global::$http_or_https === 'https' && strpos( $video_data['thumb'], 'https://' ) === false ) {
                        $video_data['thumb'] = str_replace( 'http://', 'https://', $video_data['thumb'] );
                    }

                    $playlist_structure_thumb = '<div class="td_video_thumb"><img src="' . $video_data['thumb'] . '" alt="Video thumbnail" /></div>';
                    //$video_data_propeties .= 'thumb:"' . $video_data['thumb'] . '",';
                }

                //get title
                $playlist_structure_title = '<div class="td_video_title_and_time">';
                if(!empty($video_data['title'])){
                    $playlist_structure_title .= '<div class="td_video_title">' . mb_convert_encoding($video_data['title'], 'UTF-8') . '</div>';
                    $video_data_propeties .= 'title:"' . esc_attr(mb_convert_encoding($video_data['title'], 'UTF-8')) . '",';
                }

                //get time
                $playlist_structure_time = '';
                if(!empty($video_data['time'])){

                    $get_video_time = '';
                    if(substr($video_data['time'], 0, 3) == '00:') {
                        $get_video_time = substr($video_data['time'], 3);
                    } else {
                        $get_video_time = $video_data['time'];
                    }

                    $playlist_structure_title .= '<div class="td_video_time">' . $get_video_time . '</div>';
                    $video_data_propeties .= 'time:"' . $get_video_time . '"';
                }
                $playlist_structure_title .= '</div>';

                //creating click-able playlist video
                $currVidClass = '';
                if ( (td_util::tdc_is_live_editor_iframe() or td_util::tdc_is_live_editor_ajax()) && $firstVid == true ) {
                    $currVidClass = 'td_video_currently_playing';
                    $firstVid = false;
                }
				//$click_video_container .= '<a id="td_' . $video_id . '" class="td_click_video td_click_video_' . $list_type . '" data-video-id="' . $video_id . '"> ' . $playlist_structure_thumb . $playlist_structure_title . '</a>';
				$click_video_container .= '<a class="td_' . $video_id . ' td_click_video td_click_video_' . $list_type . ' ' . $currVidClass . '" data-video-id="' . $video_id . '"> ' . $playlist_structure_thumb . $playlist_structure_title . '</a>';

				//$js_object .= $video_data_propeties . "}";

				$js_variable .= 'window.td_' . $list_type . '_list_ids[\'td_' . $video_id . '\'] = {' . $video_data_propeties . '};';
			}



//            if(!empty($js_object)) {
//                $js_object = 'var td_' . $list_type . '_list_ids = {' .$js_object. '}';
//            }

            //creating column number classes
            $column_number_class = 'td_video_playlist_column_2';

            if($td_column_number == 1) {
                $column_number_class = 'td_video_playlist_column_1';
            }

            if($td_column_number == 3) {
                $column_number_class = 'td_video_playlist_column_3';
            }




            //autoplay
            $td_playlist_autoplay = 0;
            $td_class_autoplay_control = 'td-sp-video-play';


            if( !empty($atts['playlist_auto_play']) and $atts['playlist_auto_play'] == 1) {
                $td_playlist_autoplay = 1;

                //$td_class_autoplay_control = 'td-sp-video-pause';
            }

            //check how many video ids we have; if there are more then 5 then add a class that is used on chrome to add the playlist scroll bar
            $td_class_number_video_ids = '';
            $td_playlist_video_count = count($videos_meta);

            if(intval($td_playlist_video_count) > 4) {
                $td_class_number_video_ids = 'td_add_scrollbar_to_playlist_for_mobile';
            }

            if(intval($td_playlist_video_count) > 5) {
                $td_class_number_video_ids = 'td_add_scrollbar_to_playlist';
            }


			//creating title wrapper if any
			$td_video_title = '';
			if ( !empty($atts['playlist_title']) ) {
				$td_video_title = '<div class="td_video_playlist_title"><div class="td_video_title_text">' . $atts['playlist_title'] . '</div></div>';
			}

	        // When the tagDiv composer is not available, DO NOT add the css class ('td_wrapper_playlist_player_youtube' or 'td_wrapper_playlist_player_vimeo')
	        // They are used by the tdVideoPlaylist js script, as player selectors
	        $cssWrapperPlayer = 'td_wrapper_playlist_player_' . $list_type;
	        $playerPlaceholder = '';
	        $currVidTitlePlaceholder = '';
            $currVidTimePlaceholder = '';

	        if (td_util::tdc_is_live_editor_iframe() or td_util::tdc_is_live_editor_ajax()) {
	            $firstVid = reset($videos_meta);

		        $cssWrapperPlayer = '';
		        $playerPlaceholder = "<div>$list_type placeholder</div>";
                $currVidTitlePlaceholder = mb_convert_encoding($firstVid['title'], 'UTF-8');
                if(substr($firstVid['time'], 0, 3) == '00:') {
                    $currVidTimePlaceholder = substr($firstVid['time'], 3);
                } else {
                    $currVidTimePlaceholder = $firstVid['time'];
                }
	        }

			//$js_object is there so we can take the string and parsit as json to create an object in jQuery
			return '<div class="' . $column_number_class . '">' . $td_video_title  . '<div class="td_wrapper_video_playlist"><div class="td_wrapper_player ' . $cssWrapperPlayer . '" data-first-video="' . esc_attr($first_video_id) . '" data-autoplay="' . $td_playlist_autoplay . '">
                            <div id="player_' . $list_type . '">' . $playerPlaceholder . '</div>
                       </div><div class="td_container_video_playlist " >
                                                <div class="td_video_controls_playlist_wrapper"><div class="td_video_stop_play_control"><a class="' . $td_class_autoplay_control . ' td-sp td_' . $list_type . '_control"></a></div><div class="td_current_video_play_title_' . $list_type . ' td_video_title_playing">' . $currVidTitlePlaceholder . '</div><div class="td_current_video_play_time_' . $list_type . ' td_video_time_playing">' . $currVidTimePlaceholder . '</div></div>
                                                <div id="td_' . $list_type . '_playlist_video" class="td_playlist_clickable ' . $td_class_number_video_ids . '">' . $click_video_container . '</div>
                       </div>
                    </div>
                    </div>
                    <script>' . $js_variable . '</script>';
		}




		return '';
	}
}//end td_playlist_render
