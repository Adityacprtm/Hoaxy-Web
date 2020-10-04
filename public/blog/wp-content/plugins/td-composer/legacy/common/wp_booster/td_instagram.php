<?php

class td_instagram {

    private static $caching_time = 10800;  // 3 hours
    private static $instagram_connected_account = array();

    public static function render_generic($atts) {

        $demo_array = self::render_demo($atts);

        if ( $demo_array['status'] === 'ok' && !empty( $demo_array['buffy'] ) ) {
            // render the HTML
            $buffy = '<!-- td instagram source: DEMO -->';

            // renders the block template
            $buffy .= $demo_array['buffy'];

            return $buffy;
        }

        // get db saved inst account settings
        $instagram_access_settings = td_options::get_array( 'td_instagram_connected_account');

        self::$instagram_connected_account = isset( $instagram_access_settings['connected_account'] ) ? $instagram_access_settings['connected_account'] : array();

        // if we don't have an Instagram id set.. check to see if we have a connected account before returnign a block error
        if ( empty( $atts['instagram_id'] ) ) {
            if ( empty( self::$instagram_connected_account ) ) {
                return td_util::get_block_error(
                    'Instagram Gallery',
                    'Block Render failed - no data received, please check the Instagram ID <a href="' . admin_url('admin.php?page=td_theme_panel') . '" target="_blank">connect to your Instagram Account</a>.'
                );
            }
        }

        // prepare the data
        $instragram_data = array(
            'user' => '',
        );

        // get instagram data
        if ( ! empty( $atts['instagram_id'] ) ) {

            // if we have an Insta ID set try to get the data the traditional way
            $instagram_data_status = self::get_instagram_data_with_user( $atts, $instragram_data );

        } elseif( ! empty( self::$instagram_connected_account ) ) {

            // if we have an account connected we can try to get the data using the accunt access token
            $instagram_data_status = self::get_instagram_data_with_token( self::$instagram_connected_account, $instragram_data);

        } else {
            return td_util::get_block_error(
                'Instagram',
                'Render failed - no data is received, please check the ID or go to <a href="' . admin_url('admin.php?page=td_theme_panel') . '" target="_blank">Theme\'s Panel</a> Social Networks > Instagram Account Access Configuration to connect to your Instagram account.' );
        }

        // if we miss the cache and traditional instagram data request fails..
        // check if we have an account connected so we can get the data using a token
        if ( $instagram_data_status === 'instagram_fail_cache_miss' ) {
            if ( ! empty( self::$instagram_connected_account ) ) {

                // if we have an account connected go ahead and try to retrive its feeds using the connected account access token
                $instagram_data_status = self::get_instagram_data_with_token( self::$instagram_connected_account, $instragram_data);
            } else {

                // if no account is connected direct the theme user/website owner to theme's instagram account panel config section
                return td_util::get_block_error(
                    'Instagram',
                    'Instagram data error: The data could not be retrived using the <em>' . $atts['instagram_id'] . '</em> Instagram ID. If you own this account, please connect to it in <a href="' . admin_url('admin.php?page=td_theme_panel') . '" target="_blank" >Theme\'s Panel</a> Social Networks > Instagram Account Access Configuration section.' );
            }
        }

        // check if we have an error and return that
        if ( $instagram_data_status != 'instagram_fail_cache' and
            $instagram_data_status != 'instagram_cache_updated' and
            $instagram_data_status != 'instagram_cache'
        ) {
            return $instagram_data_status;
        }

        // render the HTML
        $buffy = '<!-- td instagram source: ' . $instagram_data_status . ' -->';

        // renders the block template
        $buffy .= self::render_block_template($atts, $instragram_data);

        return $buffy;
    }

    private static function render_block_template($atts, $instagram_data) {

        // determine the instagram user id
        if( $instagram_data['user']['with_access_token'] ){
            $instagram_user = $instagram_data['user']['instagram_id'];
        } else {
            $instagram_user = $atts['instagram_id'];
        }

        // stop render when no data is received
        if ( $instagram_data['user'] == '' ) {
            return td_util::get_block_error('Instagram', 'Render failed - no data is received, please check the ID: ' . $instagram_user );
        }

        ob_start();

        // number of images per row - by default display 3 images
        $images_per_row = 3;
        if ( !empty( $atts['instagram_images_per_row'] ) ) {
            $images_per_row = $atts['instagram_images_per_row'];
        }

        // number of rows
        $number_of_rows = 1;
        if ( !empty( $atts['instagram_number_of_rows'] ) ) {
            $number_of_rows = $atts['instagram_number_of_rows'];
        }

        // number of total images displayed - images_row x number_of_rows
        $images_total_number = $images_per_row * $number_of_rows;

        // image gap
        $image_gap = '';
        if ( !empty( $atts['instagram_margin'] ) ) {
            $image_gap = ' td-image-gap-' . $atts['instagram_margin'];
        }

        // profile picture
        $instagram_profile_picture = '';
        if( isset($atts['instagram_user_photo']) && $atts['instagram_user_photo'] != '' ) {
            $instagram_profile_picture = tdc_util::get_image_or_placeholder($atts['instagram_user_photo']);
        } else if ( isset( $instagram_data['user']['profile_pic_url'] ) ) {
            $instagram_profile_picture = $instagram_data['user']['profile_pic_url'];
        }

        // instagram followers
        $instagram_followers = 0;
        if ( isset( $instagram_data['user']['edge_followed_by']['count'] ) ) {
            $instagram_followers = $instagram_data['user']['edge_followed_by']['count'];
        }

        if ( ! empty( $instagram_followers ) ) {

            // instagram followers - check followers count data type
            $instagram_followers_type = gettype($instagram_followers);
            if ( $instagram_followers_type == 'string' ) {
                // retrieve number from string
                $number_from_string = self::get_number_from_string($instagram_followers);
                if ($number_from_string !== false) {
                    $instagram_followers = $number_from_string;
                } else {
                    td_log::log(__FILE__, __FUNCTION__, 'Instagram followers is a string with no numbers included', $instagram_followers);
                    $instagram_followers = 0;
                }
            } elseif ( $instagram_followers_type == 'integer' ) {
                // do nothing, integer is ok
            } else {
                // for other types return 0
                td_log::log(__FILE__, __FUNCTION__, 'Instagram followers has an unsupported type', $instagram_followers);
                $instagram_followers = 0;
            }

            // instagram followers - format the followers number (the number is not rounded because it may return unrealistic values)
            if ( $instagram_followers >= 1000000 ) {
                // display 1.100.000 as 1.1m
                $instagram_followers = number_format_i18n($instagram_followers / 1000000, 1) . 'm';
            } elseif ( $instagram_followers >= 10000 ) {
                // display 10.100 as 10.1k
                $instagram_followers = number_format_i18n($instagram_followers / 1000, 1) . 'k';
            } else {
                // default
                $instagram_followers = number_format_i18n($instagram_followers);
            }

        }

        ?>
        <!-- header section -->
        <?php
        if ( empty( $atts['instagram_header'] ) ) {
            ?>
            <div class="td-instagram-header">
                <div class="td-instagram-profile-image">
                    <!-- profile img -->
                    <?php
                    if ( ! empty( $instagram_profile_picture ) ) {
                        ?>
                        <div class="td-instagram-profile-image-elem" style="background-image: url(<?php echo $instagram_profile_picture ?>)"></div>
                        <?php
                    } else {
                        ?>
                        <svg class="sbi_new_logo fa-instagram fa-w-14"
                             aria-hidden="true"
                             data-fa-processed=""
                             aria-label="Instagram"
                             data-prefix="fab"
                             data-icon="instagram"
                             role="img"
                             viewBox="0 0 448 512"
                             style="
                                position: absolute;
                                top: 49%;
                                left: 52%;
                                margin-top: -14px;
                                margin-left: -16px;
                                width: 30px;
                                height: 30px;
                                font-size: 30px;
                             "
                        >
                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                        </svg>
                        <?php
                    }
                    ?>
                </div>
                <div class="td-instagram-meta">
                    <div class="td-instagram-user"><a href="https://www.instagram.com/<?php echo self::strip_instagram_user($instagram_user) ?>" target="_blank">@<?php echo self::strip_instagram_user($instagram_user) ?></a></div>
                    <!-- followers -->
                    <?php
                    if ( ! empty( $instagram_followers ) ) {
                        ?>
                        <div class="td-instagram-followers"><span><?php echo $instagram_followers . '</span> ' .  __td('Followers', TD_THEME_NAME); ?></div>
                        <?php
                    }
                    ?>
                    <a class="td-instagram-button" href="https://www.instagram.com/<?php echo self::strip_instagram_user($instagram_user) ?>" target="_blank"><?php echo __td('Follow', TD_THEME_NAME); ?></a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php
        }
        ?>

        <!-- user shared images -->
        <?php

        if( $instagram_data['user']['with_access_token'] ){
            $user_feeds = $instagram_data['user']['feeds'];

            if ( isset( $user_feeds ) and is_array( $user_feeds ) ) {
                ?>
                <div class="td-instagram-main td-images-on-row-<?php echo $images_per_row . $image_gap; ?>">
                    <?php
                    $feed_count = 0;
                    foreach ( $user_feeds as $feed ){

                        $media_type = strtolower( str_replace( '_ALBUM','', $feed['media_type'] ) );
                        $media_url = $media_type === 'video' ? $feed['thumbnail_url'] : $feed['media_url'];

                        ?>
                        <div class="td-instagram-element">
                            <!-- image -->
                            <a class="td-instagram-image" href="<?php echo $feed['permalink'] ?>" target="_blank" style="background-image: url(<?php echo $media_url ?>)">
                            </a>
                            <!-- video icon -->
                            <?php
                            if ( $media_type === 'video' ) {
                                ?>
                                <span class="td-video-play-ico">
                                    <i class="td-icon-video-thumb-play"></i>
                                </span>
                                <?php
                            } elseif ( $media_type === 'carousel' ) {
                                ?>
                                <span class="td-video-play-ico td-insta-carousel-ico">
                                    <i class="td-icon-insta-carousel"></i>
                                </span>
                                <?php
                            }
                            ?>
                        </div>
                        <!-- number of feeds to display -->
                        <?php
                        $feed_count ++;
                        if ( $feed_count == $images_total_number ) {
                            break;
                        }
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <?php
            }

        } else {
            $user_shared_images = $instagram_data['user']["edge_owner_to_timeline_media"]["edges"];

            if ( isset( $user_shared_images ) and is_array( $user_shared_images ) ) {
                ?>
                <div class="td-instagram-main td-images-on-row-<?php echo $images_per_row . $image_gap; ?>">
                    <?php
                    $image_count = 0;
                    foreach ( $user_shared_images as $image ) {
                        // display only if the code and thumbnail are set
                        if ( isset( $image['node']['shortcode'] ) && isset( $image['node']['thumbnail_src'] ) ) {
                            ?>
                            <div class="td-instagram-element">
                                <!-- image -->
                                <a href="https://www.instagram.com/p/<?php echo $image['node']['shortcode'] ?>" target="_blank">
                                    <img class="td-instagram-image" src="<?php echo $image['node']['thumbnail_src'] ?>"/>
                                </a>
                                <!-- video icon -->
                                <?php
                                if ( $image['node']['is_video'] === true ) {
                                    ?>
                                    <span class="td-video-play-ico">
                                    <i class="td-icon-video-thumb-play"></i>
                                </span>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <!-- number of images to display -->
                        <?php
                        $image_count ++;
                        if ( $image_count == $images_total_number ) {
                            break;
                        }
                    }
                    ?>
                    <div class="clearfix"></div>
                </div>
                <?php
            }
        }

        return ob_get_clean();
    }


    /**
     * @param $str
     * @return bool|int
     * - bool: false - $str is not a string or we don't have a number
     * - integer - return the number
     */
    private static function get_number_from_string($str) {
        // no string received
        if (gettype($str) != 'string') {
            return false;
        }
        // retrieve the numbers
        $string_length = strlen($str);
        $id = '';
        for( $i = 0; $i <= $string_length; $i++ ) {
            $char = substr($str, $i, 1);
            if(is_numeric($char)) {
                $id .= $char;
            }
        }
        // we have a number
        if ($id != '') {
            return intval($id);
        }
        return false;
    }


    /**
     * @param $atts
     * @param $instragram_data - the precomputed instagram data
     * @return bool|string
     *  - bool:true - we have the $instragram_data (from cache or from a real request)
     *  - string - error message
     */
    private static function get_instagram_data_with_user($atts, &$instragram_data) {

        $cache_key = 'td_instragram_' . strtolower( isset( $atts['instagram_id'] ) ? $atts['instagram_id'] : '' );

        // check the cache
        if ( td_remote_cache::is_expired(__CLASS__, $cache_key) === true ) {

            // cache is expired - do a request
            $instagram_get_data = self::instagram_get_json($atts, $instragram_data);

            // check the call response
            if ( $instagram_get_data !== true ) {

                // we have an error in the data retrieval process
                $instragram_data = td_remote_cache::get(__CLASS__, $cache_key);

                // no cache data .. log this step and return.. we will try the token method after this.. !! if we have an account connected !!
                if ( $instragram_data === false ) {
                    td_log::log(
                        __FILE__,
                        __FUNCTION__,
                        '<span style="color: orangered;">The old instagram data retrieval process failed!</span>' . $atts['instagram_id']
                    );
                    return 'instagram_fail_cache_miss';
                }

                // extend the cache valability for now.. will try to get the data again when the chache expires
                td_remote_cache::extend(__CLASS__, $cache_key, self::$caching_time);
                return 'instagram_fail_cache';
            }

            // we have a reply and we set it in the cache
            td_remote_cache::set(__CLASS__, $cache_key, $instragram_data, self::$caching_time);
            return 'instagram_cache_updated';

        } else {

            // cache is valid
            $instragram_data = td_remote_cache::get(__CLASS__, $cache_key);
            return 'instagram_cache';
        }
    }

    /**
     * @param $atts
     * @param $instagram_data
     * @return bool|string
     * - bool: true when data is retrieved
     * - string - error message
     */
    private static function instagram_get_json($atts, &$instagram_data){

        $instagram_html_data = self::parse_instagram_html(self::strip_instagram_user( isset( $atts['instagram_id'] ) ? $atts['instagram_id'] : ''  ));

        if ($instagram_html_data === false) {
            td_log::log(__FILE__, __FUNCTION__, 'Instagram html data cannot be retrieved', $atts['instagram_id']);
            return 'Instagram html data cannot be retrieved';
        }

        // try to decode the json
        $instagram_json = json_decode($instagram_html_data, true);
        if ($instagram_json === null and json_last_error() !== JSON_ERROR_NONE) {
            td_log::log(__FILE__, __FUNCTION__, 'Error decoding the instagram json', $instagram_json);
            return 'Error decoding the instagram json';
        }

        // current instagram data is not set
        if (!isset($instagram_json['entry_data']['ProfilePage'][0]["graphql"]['user'])) {
            return 'Instagram data is not set, plese check the ID';
        }

        $instagram_data['user'] = $instagram_json['entry_data']['ProfilePage'][0]["graphql"]['user'];
        $instagram_data['user']['with_access_token'] = false;

        return true;
    }


    /**
     * @param $instagram_id
     * @return bool|string
     * - bool: false - no match was found, data not retrieved
     * - string - return the serialized data present in the page script
     */
    private static function parse_instagram_html($instagram_id) {

        $data = td_remote_http::get_page('https://www.instagram.com/' . $instagram_id, __CLASS__);
        if ($data === false) {
            return false;
        }

        // get the serialized data string present in the page script
        $pattern = '/window\._sharedData = (.*);<\/script>/';
        preg_match($pattern, $data, $matches);

        if (!empty($matches[1])) {
            return $matches[1];
        } else {
            return false;
        }

    }


    /**
     * Show an error if the user is logged in. It does not check for admin
     * @param $msg
     * @return string
     */
    private static function error($msg) {
        if (is_user_logged_in()) {
            return $msg;
        }
        return '';
    }

    /**
     * @param $id - the instagram ID
     * @return string - user inserted instagram ID without @
     */
    public static function strip_instagram_user($id) {
        $pos = strpos($id, '@');

        if ( $pos !== false ) {
            $id = substr($id, $pos+1);
            return $id;
        }

        return $id;
    }


    /**
     * @param $connected_account - the Instagram account connected from theme's panel > social nteworks
     * @param $instragram_data
     *
     * @return string - the data retrieval status
     */
    private static function get_instagram_data_with_token( $connected_account, &$instragram_data ) {

        $cache_key = 'td_instragram_tk_' . strtolower( $connected_account['username'] );

        $access_token = $connected_account['access_token'];
        $user_id = $connected_account['user_id'];

        // check the cache
        if ( td_remote_cache::is_expired(__CLASS__, $cache_key ) === true ) {

            // cache is expired - do a request
            $instagram_get_media_data = td_remote_http::get_page('https://graph.instagram.com/' . $user_id . '/media?fields=media_url,thumbnail_url,caption,id,media_type,timestamp,username,comments_count,like_count,permalink,children{media_url,id,media_type,timestamp,permalink,thumbnail_url}&limit=33&access_token=' . $access_token, __CLASS__ );

            // check the call response
            if ( $instagram_get_media_data === false ) {

                // check the cache and return the last stored data even if it's expired
                $instagram_data = td_remote_cache::get(__CLASS__, $cache_key );

                if ( $instagram_data === false ) {
                    td_log::log(
                        __FILE__,
                        __FUNCTION__,
                        'Instagram access token api account data cannot be retrieved for the connected account: ' . $connected_account['username']
                    );
                }

                // extend the cache valability for now.. will try to get the data again when the cache expires
                td_remote_cache::extend(__CLASS__, $cache_key, self::$caching_time );
                return 'instagram_fail_cache';

            }

            // try to decode the json
            $instagram_media_json = json_decode( $instagram_get_media_data, true );

            if ( ( $instagram_media_json === null ) and json_last_error() !== JSON_ERROR_NONE ) {
                td_log::log(__FILE__, __FUNCTION__, 'Error decoding the instagram API json', $instagram_media_json );
                return 'Error decoding the Instagram API json';
            }

            // current instagram data is not set
            if ( ! isset( $instagram_media_json['data'] ) ) {

                $error_message = '';

                if ( isset( $instagram_media_json['error'] ) ) {

                    // if we have an error message like an invalid access token, if the access token is over the rate limit..etc set a specific message to let the user know that
                    if ( isset( $instagram_media_json['error']['message'] ) ) {

                        if ( $instagram_media_json['error']['type'] === 'OAuthRateLimitException' ) {
                            $error_message = 'Block Render Failed - This account\'s access token is currently over the rate limit. Please try removing this account and wait at leats an hour before reconnecting it.';
                        } else {
                            $error_message = 'Block Render Failed - ' . $instagram_media_json['error']['message'];
                        }
                    }
                }

                // log the instagram reply json for debugging
                td_log::log(__FILE__, __FUNCTION__, 'Instagram access token API reply: ', $instagram_media_json );
                return td_util::get_block_error('Instagram Gallery', $error_message );
            }

            $instragram_data['user'] = array();
            $instragram_data['user']['with_access_token'] = true;
            $instragram_data['user']['profile_pic_url'] = isset( $connected_account['profile_picture'] ) ? $connected_account['profile_picture'] : '';
            $instragram_data['user']['instagram_id'] = $connected_account['username'];
            $instragram_data['user']['edge_followed_by']['count'] = isset( $connected_account['followers'] ) ? $connected_account['followers'] : '';
            $instragram_data['user']['feeds'] = $instagram_media_json['data'];

            td_remote_cache::set(__CLASS__, $cache_key, $instragram_data, self::$caching_time); // we have a reply and we set it
            return 'instagram_cache_updated';

        } else {

            // cache is valid
            $instragram_data = td_remote_cache::get(__CLASS__, $cache_key );
            return 'instagram_cache';
        }

    }

    private static function render_demo($block_atts) {

        $reply = array(
            'status' => '',
            'buffy' => ''
        );

        if ( TD_DEPLOY_MODE == 'dev' || TD_DEPLOY_MODE == 'demo' ) {

            if ( empty( $block_atts['instagram_demo_data'] ) ) {
                $reply['status'] = 'missing_demo_data';
                return $reply;
            }

            // number of images per row - by default display 3 images
            $images_per_row = 3;
            if ( !empty( $block_atts['instagram_images_per_row'] ) ) {
                $images_per_row = $block_atts['instagram_images_per_row'];
            }
            // number of rows
            $number_of_rows = 1;
            if ( !empty( $block_atts['instagram_number_of_rows'] ) ) {
                $number_of_rows = $block_atts['instagram_number_of_rows'];
            }
            // number of total images displayed - images_row x number_of_rows
            $images_total_number = $images_per_row * $number_of_rows;
            // image gap
            $image_gap = '';
            if ( !empty( $block_atts['instagram_margin'] ) ) {
                $image_gap = ' td-image-gap-' . $block_atts['instagram_margin'];
            }
            $instagram_user = '';
            if ( !empty( $block_atts['instagram_id'] ) ) {
                $instagram_user = $block_atts['instagram_id'];
            }

            $instagram_demo_data = explode(',', $block_atts['instagram_demo_data']);
            //widget data is not encoded, but the shortcode is (we have some old demos)
            if ( base64_decode( $block_atts['instagram_demo_data'], true ) && base64_encode( base64_decode( $block_atts['instagram_demo_data'], true ) ) === $block_atts['instagram_demo_data'] ) {
                $instagram_demo_data = explode(',', rawurldecode(base64_decode($block_atts['instagram_demo_data'])));
            }
            $instagram_profile_picture = wp_get_attachment_image_url($instagram_demo_data[0], 'thumbnail');
            $instagram_followers = $instagram_demo_data[1];
            $instagram_image_ids = array_slice($instagram_demo_data, 2);
            $reply['status'] = 'ok';

            ob_start();?>

            <!-- header section -->
            <?php
            if ( empty($block_atts['instagram_header'] ) ) {
                ?>
                <div class="td-instagram-header">
                    <div class="td-instagram-profile-image"><img src="<?php echo $instagram_profile_picture ?>"/></div>
                    <div class="td-instagram-meta">
                        <div class="td-instagram-user"><a href="https://www.instagram.com/<?php echo self::strip_instagram_user($instagram_user) ?>" target="_blank">@<?php echo self::strip_instagram_user($instagram_user) ?></a></div>
                        <div class="td-instagram-followers"><span><?php echo $instagram_followers . '</span> ' .  __td('Followers', TD_THEME_NAME); ?></div>
                        <a class="td-instagram-button" href="https://www.instagram.com/<?php echo self::strip_instagram_user($instagram_user) ?>" target="_blank"><?php echo __td('Follow', TD_THEME_NAME); ?></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- user custom images -->
            <div class="td-instagram-main td-images-on-row-<?php echo $images_per_row . $image_gap; ?>">
                <?php
                $image_count = 0;
                if ($instagram_image_ids != ''){
                    foreach ($instagram_image_ids as $image_id) {
                        $image_url = wp_get_attachment_image_url($image_id, 'td_696x0');
                        ?>
                        <div class="td-instagram-element">
                            <a class="td-instagram-image" href="#"
                               style="background-image: url(<?php echo $image_url ?>)">
                            </a>
                        </div>
                        <?php
                        $image_count++;
                        if ($image_count == $images_total_number) {
                            break;
                        }
                    } }?>
                <div class="clearfix"></div>
            </div>

            <?php $reply['buffy'] = ob_get_clean();



        }
        return $reply;
    }

}

