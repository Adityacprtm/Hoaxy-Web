<?php
if ( ! defined( 'ABSPATH' ) ) exit;

class td_instagram_access_tk {

    private static $instance = null;

    public static function get_instance(){
        if ( is_null(self::$instance) ) {
            self::$instance = new td_instagram_access_tk();
        }
        return self::$instance;
    }

    public function __construct() {

        if ( ! wp_next_scheduled( 'td_instagram_cron_job' ) ) {
            wp_schedule_event( time(), 'twicedaily', 'td_instagram_cron_job' );
        }

        add_action( 'td_instagram_cron_job', array( $this, 'td_token_refresher' ) );

        if( is_admin() ) {
            //add_action( 'wp_ajax_td_after_connection', array( $this, 'td_after_connection' ) );
            add_action( 'wp_ajax_td_save_account', array( $this, 'td_save_account' ) );
            add_action( 'wp_ajax_td_remove_account', array( $this, 'td_remove_account' ) );
        }
    }

    /*
     * used to test an instagram account and generate a long lived access token after app authorization has been made
     *
     * @since 29.07.2020 - not used anymore.. ( the test and long lived access token is made on https://tagdiv.com/td_instagram_api/v2/td-instagram-api-v2.php )
     */
    function td_after_connection() {

        $reply = array(
            'status' => '',
            'account_data' => array(),
        );

        if ( isset( $_POST['access_token'] ) ) {

            $access_token = sanitize_text_field( $_POST['access_token'] );
            $account_data = $this->td_account_data_for_token( $access_token );

            if ( isset( $account_data['error_message'] ) ) {
                $reply['status'] = 'error - ' . $account_data['error_message'] . ' - on verifying access token';
                $account_data['access_token'] = $access_token;
                td_log::log(__FILE__, __FUNCTION__, 'instagram connect account > td_account_data_for_token ERROR', $account_data );
            } elseif ( $account_data !== false ) {

                // token exchange request ( this request will exchange the short lived access token to a long lived one.. )
                $url = 'https://graph.instagram.com/access_token?grant_type=ig_exchange_token&client_secret=' . self::$client_secret . '&access_token=' . $access_token;

                $args = array(
                    'timeout' => 60,
                    'sslverify' => false
                );
                $result = wp_remote_get( $url, $args );

                if ( ! is_wp_error( $result ) ) {
                    $data = json_decode( $result['body'] );
                } else {
                    $data = array();
                }

                /*
                    successful response should be like:

                    {
                      "access_token": "{access-token}",
                      "token_type": "{token-type}",
                      "expires_in": {expires-in}
                    }
                */

                if ( isset( $data->access_token ) ) {

                    $account_data['access_token'] = $data->access_token;
                    $account_data['token_type'] = $data->token_type;
                    $account_data['expires_in'] = $data->expires_in;

                    $reply['status'] = 'success - a long lived access token was successfully exchanged for the short lived one !';

                } elseif ( isset( $data->error ) ) {
                    $reply['status'] = 'error - ' . $account_data['username'] . ' account short lived access token was successfully processed but the request for exchange it to a long lived access token has returned the following error: ' . $data->error->message;
                    td_log::log(__FILE__, __FUNCTION__, 'access_token/ig_exchange_token', $data );
                }

                td_log::log(__FILE__, __FUNCTION__, 'instagram $account_data', $account_data );
                $reply['account_data'] = $account_data;

            } else {
                $reply['status'] = 'error - a successful connection could not be made.!';
            }
        }  else {
            $reply['status'] = 'error - no access_token provided!';
        }

        die( json_encode( $reply ) );
    }

    /*
     * this function check's the validity of a user instagram access token
     * @param $access_token
     * @return bool|bool[] - array with the user name & id based on the access token / the instagram graph error / false if unknown data was received
     */
    function td_account_data_for_token( $access_token ) {

        $return = array(
            'id' => false,
            'username' => false,
        );

        if ( empty( $access_token ) ) {
            return array(
                'error_message' => 'error - no access_token provided!'
            );
        }

        $url = 'https://graph.instagram.com/me?fields=id,username,media_count&access_token=' . $access_token;
        $args = array(
            'timeout' => 60,
            'sslverify' => false
        );
        $result = wp_remote_get( $url, $args );

        if ( ! is_wp_error( $result ) ) {
            $data = json_decode( $result['body'] );
        } else {
            $data = array();
        }

        if ( isset( $data->id ) ) {
            $return['id'] = $data->id;
            $return['username'] = $data->username;
        } elseif ( isset( $data->error ) && $data->error->type === 'OAuthRateLimitException' ) {
            $return['error_message'] = 'This account\'s access token is currently over the rate limit. Try removing this access token from all feeds and wait an hour before reconnecting.';
        } elseif ( isset( $data->error->message ) ) {
            $return['error_message'] = $data->error->message;
            td_log::log(__FILE__, __FUNCTION__, 'instagram connect account > td_account_data_for_token ERROR', $data );
        } else {
            $return = false;
        }

        return $return;
    }

    /*
     * used to test and save a user instagram account via ajax
     */
    function td_save_account() {

        $reply = array(
            'status' => '',
            'account_data' => array(),
        );

        if ( current_user_can( 'edit_posts' ) ) {

            $options = td_options::get_array('td_instagram_connected_account');
            $account_data = isset( $_POST['account_data'] ) ? $_POST['account_data'] : false;

            if ( $account_data !== false && is_array( $account_data ) ) {
                $access_token = isset( $account_data['access_token'] ) ? sanitize_text_field( $account_data['access_token'] ) : '';
            }

            $test_connection_data = $this->td_account_data_for_token( $access_token ); // verifies access token and returns account user id and username

            if ( isset( $test_connection_data['error_message'] ) ) {
                $reply['status'] = 'error - ' . $test_connection_data['error_message'] . ' - on verifying access token';
                td_log::log(__FILE__, __FUNCTION__, 'instagram > td_save_account $test_connection_data returned an error', $test_connection_data );
            } elseif ( $test_connection_data !== false ) {
                $options['connected_account'] = array(
                    'access_token' => $access_token,
                    'user_id' => $test_connection_data['id'],
                    'username' => $test_connection_data['username'],
                    'expires_in' => isset( $account_data['expires_in'] ) ? (int) $account_data['expires_in']  : '',
                    'expires_in_ts' => isset( $account_data['expires_in'] ) ? time() + (int) $account_data['expires_in'] : '',
                    'token_type' => isset( $account_data['token_type'] ) ? $account_data['token_type'] : '',
                    'media_count' => isset( $account_data['media_count'] ) ? (int) $account_data['media_count'] : ''
                );

                td_options::update_array('td_instagram_connected_account', $options);

                $reply['status'] = 'success - ' . $test_connection_data['username'] . ' account was successfully connected!';

                $expires_in = 'N/A';
                if ( ! empty( $options['connected_account']['expires_in_ts'] ) ) {
                    $human_readable_time_string = td_human_readable_ts( $options['connected_account']['expires_in_ts'] );
                    if ( strpos( $human_readable_time_string, 'ago' ) === false ) {
                        $expires_in = '<span style="color: #0a9e01;">expires in ' . $human_readable_time_string . '</span>';
                    } else {
                        $expires_in = '<span style="color: orangered;">expired ' . $human_readable_time_string . '</span>';
                    }
                }

                $options['connected_account']['expires_in'] = $expires_in;
                $reply['account_data'] = $options['connected_account'];

            } else {
                $reply['status'] = 'error - a successful connection could not be made.!';
            }

        } else {
            $reply['status'] = 'error - user doesn\'t have admin rights!';
        }

        die( json_encode($reply) );
    }

    /*
     * used to remove a user instagram account via ajax
     */
    function td_remove_account() {

        $reply = array(
            'status' => '',
        );

        if ( isset( $_POST['account_id'] ) ) {

            $options = td_options::get_array('td_instagram_connected_account');
            if ( !empty( $options ) ) {

                if ( $_POST['account_id'] === $options['connected_account']['user_id'] ){
                    td_options::update_array('td_instagram_connected_account', array());
                    $reply['status'] = 'success - ' . $_POST['account_username'] . ' account deleted!';
                } else {
                    $reply['status'] = 'warning - no connected account found with the given user id!';
                }

            } else {
                $reply['status'] = 'warning - no connected account found!';
            }
        } else {
            $reply['status'] = 'error - no account id provided!';
        }

        die( json_encode( $reply ) );
    }

    function td_get_parts( $whole ) {
        if ( substr_count ( $whole , '.' ) !== 2 ) {
            return $whole;
        }

        $parts = explode( '.', trim( $whole ) );
        $return = $parts[0] . '.' . base64_encode( $parts[1] ). '.' . base64_encode( $parts[2] );

        return substr( $return, 0, 40 ) . '.' . substr( $return, 40, 100 );
    }

    function td_maybe_clean( $maybe_dirty ) {
        if ( substr_count ( $maybe_dirty , '.' ) < 3 ) {
            return $maybe_dirty;
        }

        $parts = explode( '.', trim( $maybe_dirty ) );
        $last_part = $parts[2] . $parts[3];
        $cleaned = $parts[0] . '.' . base64_decode( $parts[1] ) . '.' . base64_decode( $last_part );

        return $cleaned;
    }

    function td_token_refresher() {
        $current_time = time();

        td_log::log(__FILE__, __FUNCTION__, 'Cron Instagram token refresher run', array() );
    }
}

td_instagram_access_tk::get_instance();