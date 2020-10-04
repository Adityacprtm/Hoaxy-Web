<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 12/14/2017
 * Time: 5:29 PM
 */

class td_amp_video_playlist_render {

	/**
	 * @param $atts - the shortcode atts
	 * @param $list_type string - youtube|vimeo
	 *
	 * @return string the playlist HTML
	 */
    static function render_generic($atts, $list_type){
        $buffy = ''; //output buffer
        $buffy .= '<div class="td_block_wrap td_block_video_playlist">';
	        $buffy .= '<div class="td_block_inner">';

	            if (empty($atts['playlist_v']) && empty($atts['playlist_yt']) ) {
                    $buffy .= td_util::get_block_error('Video playlist', '<strong>Video id field</strong> is empty. Configure this block/widget and enter a list of video id\'s');
	            }
		        //inner content of the block
		        $buffy .= self::inner($atts, $list_type);
	        $buffy .= '</div>';
        $buffy .= '</div>';

        return $buffy;
    }


	private static function get_video_data($atts, $list_type) {
		global $post;

        $postId = $post->ID;

		$atts_playlist_name = 'playlist_yt';
		$list_name = 'youtube_ids'; //array key for youtube in the pos meta db array

		if($list_type != 'youtube') {
			$atts_playlist_name = 'playlist_v';
			$list_name = 'vimeo_ids'; //array key for vimeo in the pos meta db array
		}

		// read the youtube and vimeo ids from the DB
		$td_playlist_videos = td_util::get_post_meta_array($postId, 'td_playlist_video');

		// read the video ids from the shortcode
		if ( !empty($atts[$atts_playlist_name]) ) {

			$video_ids = array_map('trim', explode(",", $atts[$atts_playlist_name]));

			// get the video id's that are not in the cache
			$uncached_ids = array();
			foreach ($video_ids as $video_id) {
				if (!isset($td_playlist_videos[$list_name][$video_id])) {
					$uncached_ids []= $video_id;
				}
			}

			// do we have ids that are not in the cache?
			if (!empty($uncached_ids)) {
				// request data for the id's that are not in the cache
				$uncached_videos = td_remote_video::api_get_videos_info($uncached_ids, $list_type);

				// update the cache
				if ($uncached_videos !== false) {
					if (empty($td_playlist_videos[$list_name])) {
						$td_playlist_videos[$list_name] = $uncached_videos;
					} else {
						// array_merge can't be used because it reindex integer indexes ( and youtube indexes are integers)
						$td_playlist_videos[$list_name] = $td_playlist_videos[$list_name] + $uncached_videos;
					}
					update_post_meta($postId, 'td_playlist_video', $td_playlist_videos);
				}
			}

			// after we updated the cache with the missing videos (if any) we build our buffer of videos
			$buffy_array = array();
			foreach ($video_ids as $video_id) {
				if (!empty($td_playlist_videos[$list_name][$video_id])) {
					$buffy_array[$video_id] = $td_playlist_videos[$list_name][$video_id];
				}
			}

			return $buffy_array;
		}

		return false;
	}


	private static function inner ($atts, $list_type) {
		$videos_meta = self::get_video_data( $atts, $list_type );

		if ( $videos_meta !== false ) {
			$videos = '';
			foreach ( $videos_meta as $video_id => $video_data ) {

            	//echo '<pre>';
//            	print_r($video_id);
//            	print_r($video_data);
//	            echo '</pre>';

				//playlist video
				if ( $list_type == 'youtube' ) {
					$videos .= '
                    <amp-youtube
							    data-videoid="' . $video_id . '"
							    layout="responsive"
							    width="480" height="270"></amp-youtube>
                    ';
				} else {
					$videos .= '
                    <amp-vimeo
							    data-videoid="' . $video_id . '"
							    layout="responsive"
							    width="500" height="281"></amp-vimeo>
                    ';
				}
			}

			//creating title wrapper if any
			$td_video_title = '';
			if ( ! empty( $atts['playlist_title'] ) ) {
				$td_video_title = $atts['playlist_title'];
			}

			return '
                    <div class="td_video_playlist_title">
                        <div class="td_video_title_text">' . $td_video_title . '</div>
                    </div>
                    <div class="td_wrapper_video_playlist td-video-playlist-amp">
                        <div class="td_container_video_playlist">
                            <div class="td_playlist">' . $videos . '</div>
                        </div>
                    </div>
            ';

		}

		return '';
	}
}