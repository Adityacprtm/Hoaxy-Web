<?php
/*
Plugin Name: DMCA Website Protection Badge
Plugin URI: https://www.dmca.com/WordPress/default.aspx?r=wpd1
Description: Protect your content with a DMCA.com Website Protection Badge. Our badges deter content theft, provide tracking of unauthorized usage (with account), and make takedowns easier and more effective. Visit the plugin site to learn more about DMCA Website Protection Badges, or to register.
Version:           2.0.4
Author:            DMCA.com
Author URI:        https://wordpress.org/plugins/dmca-badge/
Plugin URI:        https://www.dmca.com/WordPress/default.aspx?r=wpd
License: GPLv2
 */

require( dirname( __FILE__ ) . '/libraries/imperative/imperative.php' );

require_library( 'restian', '0.4.1', __FILE__, 'libraries/restian/restian.php' );
require_library( 'sidecar', '0.5.1', __FILE__, 'libraries/sidecar/sidecar.php' );
require_library( 'dmca-api-client', '0.1.0', __FILE__, 'libraries/dmca-api-client/dmca-api-client.php' );

register_plugin_loader( __FILE__ );

define( 'DMCA_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
define( 'DMCA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

function dmca_custom_scripts_addition() {

	$screen = get_current_screen();

	if ( $screen->id != 'settings_page_dmca-badge-settings' ) {
		return;
	}

	?>

    <script>window.intercomSettings = {app_id: "ypgdx31r", messengerLocation: "wp-plugin"};</script>
    <script>(function () {
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === "function") {
                ic('reattach_activator');
                ic('update', intercomSettings);
            } else {
                var d = document;
                var i = function () {
                    i.c(arguments)
                };
                i.q = [];
                i.c = function (args) {
                    i.q.push(args)
                };
                w.Intercom = i;

                function l() {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/ypgdx31r';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }

                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })()</script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-16080641-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-16080641-10');
    </script>
	<?php
}

add_action( 'admin_footer', 'dmca_custom_scripts_addition' );


if ( ! function_exists( 'dmca_sync_page' ) ) {
	function dmca_sync_page() {

		$page_id     = isset( $_POST['page_id'] ) ? sanitize_text_field( $_POST['page_id'] ) : '';
		$login_token = isset( $_POST['login_token'] ) ? wp_unslash( $_POST['login_token'] ) : '';

		if ( ! $page_id || empty( $page_id ) ) {
			wp_send_json_error();
		}

		wp_send_json_success( dmca_add_protected_item( $page_id, $login_token ) );
	}
}
add_action( 'wp_ajax_dmca_sync_page', 'dmca_sync_page' );


if ( ! function_exists( 'dmca_get_login_token' ) ) {
	/**
	 * Return login token for api
	 *
	 * @return mixed|void
	 */
	function dmca_get_login_token() {

		$dmca_login_token = get_transient( 'dmca_login_token' );

		if ( empty( $dmca_login_token ) ) {
			$settings   = get_option( 'dmca_badge_settings' );
			$settings   = isset( $settings->values ) ? $settings->values : array();
			$email      = isset( $settings['authenticate']['email'] ) ? $settings['authenticate']['email'] : '';
			$password   = isset( $settings['authenticate']['password'] ) ? $settings['authenticate']['password'] : '';
			$base_url   = esc_url_raw( 'https://api.dmca.com', array( 'https' ) );
			$curl       = curl_init();
			$login_data = array( 'email' => $email, 'password' => $password );

			curl_setopt_array( $curl, array(
				CURLOPT_URL            => sprintf( '%s/login', $base_url ),
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING       => "",
				CURLOPT_MAXREDIRS      => 10,
				CURLOPT_TIMEOUT        => 30,
				CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST  => "POST",
				CURLOPT_POSTFIELDS     => json_encode( $login_data ),
				CURLOPT_HTTPHEADER     => array(
					"Content-Type: application/json",
				),
			) );

			$response = curl_exec( $curl );
			$err      = curl_error( $curl );

			curl_close( $curl );

			$dmca_login_token = ! $err ? str_replace( '"', '', $response ) : '';
			set_transient( 'dmca_login_token', $dmca_login_token );
		}

		return apply_filters( 'dmca_login_token', $dmca_login_token );
	}
}


if ( ! function_exists( 'dmca_add_protected_item' ) ) {
	/**
	 * Add protected Item
	 *
	 * @param bool $post_id
	 * @param string $token
	 * @param string $item_type
	 *
	 * @return bool|mixed|void
	 */
	function dmca_add_protected_item( $post_id = false, $token = '', $item_type = '' ) {

		if ( ! $post_id || empty( $post_id ) ) {
			return false;
		}

		$settings   = get_option( 'dmca_badge_settings' );
		$settings   = isset( $settings->values ) ? $settings->values : array();
		$account_id = isset( $settings['authenticate']['AccountID'] ) ? $settings['authenticate']['AccountID'] : '';
		$account_id = empty( $account_id ) ? get_user_meta( get_current_user_id(), 'dmca_account_id', true ) : $account_id;
		$token      = empty( $token ) ? dmca_get_login_token() : $token;
		$item_type  = empty( $item_type ) ? __( 'Web Page' ) : $item_type;
		$item_post  = get_post( $post_id );
		$item_data  = array(
			'badgeid'     => $account_id,
			'title'       => $item_post->post_title,
			'url'         => get_the_permalink( $item_post ),
			'description' => wp_trim_words( $item_post->post_content, 10 ),
			'status'      => $item_post->post_status,
			'source'      => site_url(),
			'type'        => $item_type,
		);
		$base_url   = esc_url_raw( 'https://api.dmca.com', array( 'https' ) );
		$curl       = curl_init();

		curl_setopt_array( $curl, array(
			CURLOPT_URL            => sprintf( '%s/addProtectedItem', $base_url ),
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING       => "",
			CURLOPT_MAXREDIRS      => 10,
			CURLOPT_TIMEOUT        => 30,
			CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST  => 'POST',
			CURLOPT_POSTFIELDS     => json_encode( $item_data ),
			CURLOPT_HTTPHEADER     => array(
				"Content-Type: application/json",
				"Token: $token",
			),
		) );

		$response = curl_exec( $curl );
		$err      = curl_error( $curl );

		curl_close( $curl );

		if ( $err ) {
			return $err;
		}

		update_post_meta( $post_id, 'dmca_submission_status', 'sent' );

		error_log( $response );

		return apply_filters( 'dmca_add_protected_item', $response );
	}
}


if ( ! function_exists( 'dmca_get_option' ) ) {
	/**
	 * Return option value
	 *
	 * @param string $option_key
	 * @param string $default_val
	 *
	 * @return mixed|string|void
	 */
	function dmca_get_option( $option_key = '', $default_val = '' ) {

		if ( empty( $option_key ) ) {
			return '';
		}

		$option_val = get_option( $option_key, $default_val );
		$option_val = empty( $option_val ) ? $default_val : $option_val;

		return apply_filters( 'dmca_filters_option_' . $option_key, $option_val );
	}
}


if ( ! function_exists( 'dmca_get_meta' ) ) {
	/**
	 * Return Post Meta Value
	 *
	 * @param bool $meta_key
	 * @param bool $post_id
	 * @param string $default
	 *
	 * @return mixed|string|void
	 */
	function dmca_get_meta( $meta_key = false, $post_id = false, $default = '' ) {

		if ( ! $meta_key ) {
			return '';
		}

		$post_id    = ! $post_id ? get_the_ID() : $post_id;
		$meta_value = get_post_meta( $post_id, $meta_key, true );
		$meta_value = empty( $meta_value ) ? $default : $meta_value;

		return apply_filters( 'dmca_filters_get_meta', $meta_value, $meta_key, $post_id, $default );
	}
}


if ( ! function_exists( 'get_dmca_submission_status' ) ) {
	/**
	 * Return html submission status
	 *
	 * @param bool $post_id
	 *
	 * @return mixed|void
	 */
	function get_dmca_submission_status( $post_id = false ) {

		$submission_status_r = get_dmca_submission_status_raw( $post_id );
		$submission_status_e = $submission_status_r === 'sent' ? esc_html( 'Sent' ) : esc_html( 'Not Sent' );

		return apply_filters( 'dmca_filters_get_dmca_submission_status', $submission_status_e, $post_id, $submission_status_r );
	}
}


if ( ! function_exists( 'get_dmca_submission_status_raw' ) ) {
	/**
	 * Return html submission raw status
	 *
	 * @param bool $post_id
	 *
	 * @return mixed|void
	 */
	function get_dmca_submission_status_raw( $post_id = false ) {

		$post_id             = ! $post_id || empty( $post_id ) ? get_the_ID() : $post_id;
		$submission_status_r = dmca_get_meta( 'dmca_submission_status', $post_id, 'pending' );

		return apply_filters( 'dmca_filters_get_dmca_submission_status_raw', $submission_status_r, $post_id );
	}
}

