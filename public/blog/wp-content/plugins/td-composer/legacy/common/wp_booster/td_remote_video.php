<?php
/**
 * Created by ra.
 * Date: 10/9/2015
 */


/**
 * Class td_remote_video - used to gather information about remove videos
 */
class td_remote_video {


    /**
     * Retrieves the YouTube API key from the themepannel
     *
     * @return string
     */
    static function get_yt_api_key() {

        $yt_api_key = '';
        if ( TDC_DEPLOY_MODE == 'dev' || TD_DEPLOY_MODE == 'demo' ) {
            $yt_api_key = 'AIzaSyAIJUvOPvZ66iV2PV065As0FbxzI0QUItA';
        } else {
            if( td_util::get_option('tds_yt_api_key') != '' ) {
                $yt_api_key = td_util::get_option('tds_yt_api_key');
            }
        }

        return $yt_api_key;
    }


	/**
	 * Pulls information about multiple video ids
	 * @param $video_ids - the video ids that we want to get info. This function does not work with mixed video ids from multiple services
	 * @param $list_type - youtube|vimeo
	 *
	 * @return array|bool
	 */
	static function api_get_videos_info($video_ids, $list_type) {
		switch ($list_type) {
			case 'youtube':
				return self::youtube_api_get_videos_info($video_ids);
				break;
			case 'vimeo':
				return self::vimeo_api_get_videos_info($video_ids);
				break;
            case 'dailymotion':
                return self::dailymotion_api_get_videos_info($video_ids);
                break;
		}

		return false;
	}


	static function check_api_response($json_api_response, $api_url) {
        // check for a response
        if ($json_api_response === false) {
            td_log::log(__FILE__, __FUNCTION__, 'api call failed', $api_url);
            return false;
        }

        // try to decode the json
        $api_response = @json_decode($json_api_response, true);
        if ($api_response === null and json_last_error() !== JSON_ERROR_NONE) {
            td_log::log(__FILE__, __FUNCTION__, 'Error decoding the json', $api_response);
            return false;
        }

        return $api_response;
    }


    /**
     * Pulls information about YT channel, in order to get the most recent uploaded videos ids
     * @param $username
     * @param $limit
     *
     * @return array|bool
     */
    static function youtube_api_get_channel_videos_ids($channel, $type, $limit) {

        $video_ids_comma = array();

        $channel_variable = '&forUsername=' . $channel;
        if( $type == 'channel_id' ) {
            $channel_variable = '&id=' . $channel;
        }

        $username_api_url = 'https://www.googleapis.com/youtube/v3/channels?part=contentDetails' . $channel_variable . '&key=' . self::get_yt_api_key();
        $json_username_api_response = self::check_api_response( td_remote_http::get_page($username_api_url, __CLASS__), $username_api_url );

        if( !empty($json_username_api_response['items']) and is_array($json_username_api_response['items']) ) {
            $playlist = $json_username_api_response['items'][0]['contentDetails']['relatedPlaylists']['uploads'];
            $json_uploads_api_response = self::youtube_api_get_playlist_videos_ids($playlist, $limit);

            if ($json_uploads_api_response !== FALSE) {
                $video_ids_comma = $json_uploads_api_response;
            }
        }


        if( !empty( $video_ids_comma ) ) {
            return $video_ids_comma;
        }
        return false;

    }


    /**
     * Pulls information about YT playlist, in order to get the most recent videos ids
     * @param $playlist_id
     * @param $limit
     *
     * @return array|bool
     */
    static function youtube_api_get_playlist_videos_ids($playlist_id, $limit) {

        $video_ids = array();

        $json_playlist_api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=id,snippet,contentDetails,status&maxResults=' . $limit . '&playlistId=' . $playlist_id . '&key=' . self::get_yt_api_key();
        $json_playlist_api_response = self::check_api_response(td_remote_http::get_page($json_playlist_api_url, __CLASS__), $json_playlist_api_url);

        if (!empty($json_playlist_api_response['items']) and is_array($json_playlist_api_response['items'])) {
            foreach ($json_playlist_api_response['items'] as $video_item) {
                $video_ids[] = array(
                    'id' => $video_item['contentDetails']['videoId'],
                    'status' => $video_item['status']['privacyStatus']
                );
            }
        }

        if( !empty( $video_ids ) ) {
            return $video_ids;
        }
        return false;

    }


	/**
	 * Pulls information about multiple youtube ids using just one api call to YT
	 * @param $video_ids
	 *
	 * @return array|bool
	 */
	private static function youtube_api_get_videos_info($video_ids) {

        $buffy_videos = array();

        $video_ids_comma = implode(',', $video_ids);

        if( !empty( $video_ids_comma ) ) {
            $api_url = 'https://www.googleapis.com/youtube/v3/videos?id=' . $video_ids_comma . '&part=id,contentDetails,snippet,player&key=' . self::get_yt_api_key();
            $json_api_response = self::check_api_response( td_remote_http::get_page($api_url, __CLASS__), $api_url );

            if (!empty($json_api_response['items']) and is_array($json_api_response['items'])) {
                foreach ($json_api_response['items'] as $video_item) {
                    // if no item id, skip
                    if (empty($video_item['id'])) {
                        continue;
                    }

                    try {
                        // duration hack for the strange youtube duration
                        $duration = $video_item['contentDetails']['duration'];
                        if (!empty($duration)) {
                            preg_match('/(\d+)H/', $duration, $match);
                            $h = count($match) ? filter_var($match[0], FILTER_SANITIZE_NUMBER_INT) : 0;

                            preg_match('/(\d+)M/', $duration, $match);
                            $m = count($match) ? filter_var($match[0], FILTER_SANITIZE_NUMBER_INT) : 0;

                            preg_match('/(\d+)S/', $duration, $match);
                            $s = count($match) ? filter_var($match[0], FILTER_SANITIZE_NUMBER_INT) : 0;

                            $duration = gmdate("H:i:s", intval($h * 3600 + $m * 60  + $s));
                        }
    //var_dump($video_item);

                        $buffy_videos[$video_item['id']] = array(
                            'thumb' => td_global::$http_or_https . '://img.youtube.com/vi/' . $video_item['id'] . '/default.jpg',
                            'standard' => td_global::$http_or_https . '://img.youtube.com/vi/' . $video_item['id'] . '/sddefault.jpg',
                            'title' => $video_item['snippet']['title'],
                            'time' => $duration,
                            'embedHtml' => $video_item['player']['embedHtml'],
                            'timestamp' => time()
                        );
                    } catch( Exception $e ) { }
                }
            }
        }

        // return false on no videos
        if (!empty($buffy_videos)) {
            return $buffy_videos;
        }
		return false;
	}


	/**
	 * Pulls information about multiple vimeo IDs but for each id it makes an api call
	 * @param $video_ids
	 *
	 * @return array|bool
	 */
    private static function vimeo_api_get_videos_info($video_ids) {
		$buffy_videos = array();

		foreach ($video_ids as $video_id) {
			$api_url = 'http://vimeo.com/api/v2/video/' . $video_id . '.php';   // this is the old api vimeo maintained for thumbnail_small which should not be gotten without OAuth of the new api
			$php_serialized_api_response = td_remote_http::get_page($api_url, __CLASS__);

			// check for a response
			if ($php_serialized_api_response === false) {
				td_log::log(__FILE__, __FUNCTION__, 'api call failed', $api_url);
				continue; // try with the next one
			}


			// try to deserialize
			$api_response = @unserialize($php_serialized_api_response);
			if ($api_response === false) {
				td_log::log(__FILE__, __FUNCTION__, 'Error decoding the php serialized vimeo api', $api_response);
				continue;
			}

			try {
                $buffy_videos[$video_id] = array(
                    'thumb' => $api_response[0]['thumbnail_small'],
                    'title' => $api_response[0]['title'],
                    'time' => gmdate("H:i:s", intval($api_response[0]['duration'])),
                );
            } catch ( Exception $e ) { }
		}


		// return false on no videos
		if (!empty($buffy_videos)) {
			return $buffy_videos;
		}
		return false;
	}


    /**
     * Pulls information about multiple dailymotion ids but for each id it makes an api call
     * @param $video_ids
     *
     * @return array|bool
     */
    private static function dailymotion_api_get_videos_info($video_ids) {

        $buffy_videos = array();

        foreach ( $video_ids as $video_id ) {
            $api_url = ' https://api.dailymotion.com/video/' . $video_id . '?fields=thumbnail_480_url,title,duration';
            $json_api_response = self::check_api_response( td_remote_http::get_page($api_url, __CLASS__), $api_url );

            if( $json_api_response === FALSE ) {
                td_log::log(__FILE__, __FUNCTION__, 'api call failed', $api_url);
                continue;
            }
            if( isset($json_api_response['error']) ){
                continue;
            }

            $buffy_videos[$video_id] = array(
                'thumb' => $json_api_response['thumbnail_480_url'],
                'title' => $json_api_response['title'],
                'time' => gmdate('H:i:s', $json_api_response['duration'])
            );
        }

        // return false on no videos
        if (!empty($buffy_videos)) {
            return $buffy_videos;
        }
        return false;

    }



}