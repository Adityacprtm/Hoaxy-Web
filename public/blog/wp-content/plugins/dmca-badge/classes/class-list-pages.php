<?php
/**
 * List pages class
 */

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class DMCA_Pages_list_table extends WP_List_Table {

	/**
	 * DMCA_Pages_list_table constructor.
	 */
	public function __construct() {
		parent::__construct( array(
			'singular' => 'dmca_page',
			'plural'   => 'dmca_pages',
			'ajax'     => false,
		) );
	}


	/**
	 * Render single item
	 *
	 * @param object $item
	 */
	public function single_row( $item ) {

		echo '<tr class="single-row single-row-' . $item->ID . ' dmca-status-' . get_dmca_submission_status_raw( $item->ID ) . '" data-row-id="' . $item->ID . '">';
		$this->single_row_columns( $item );
		echo '</tr>';
	}


	/**
	 * Prepare Items
	 */
	public function prepare_items() {

		$per_page   = $this->get_items_per_page( 'dmca_items_per_page' );
		$settings   = dmca_get_option( 'dmca_badge_settings' );
		$post_types = array();

		foreach ( get_post_types( array( 'public' => true ) ) as $post_type => $label ) {

			if ( isset( $settings->values['theme'][ 'dmca_post_type_' . $post_type ] ) && $settings->values['theme'][ 'dmca_post_type_' . $post_type ] ) {
				$post_types[] = $post_type;
			}
		}

		$args = array(
			'post_type'      => $post_types,
			'posts_per_page' => $per_page,
			'offset'         => ( $this->get_pagenum() - 1 ) * $per_page,
		);

		if ( isset( $_REQUEST['ds'] ) && sanitize_text_field( $_REQUEST['ds'] ) === 'sent' ) {

			$args['meta_query'][] = array(
				'key'     => 'dmca_submission_status',
				'value'   => sanitize_text_field( $_GET['ds'] ),
				'compare' => '=',
			);
		}

		if ( isset( $_REQUEST['ds'] ) && sanitize_text_field( $_REQUEST['ds'] ) === 'not_sent' ) {

			$args['meta_query'][] = array(
				'key'     => 'dmca_submission_status',
				'compare' => 'NOT EXISTS',
			);
		}

		$q           = new WP_Query();
		$this->items = $q->query( $args );

		$total_items = $q->found_posts;
		$total_pages = ceil( $total_items / $per_page );

		$this->set_pagination_args( array(
			'total_items' => $total_items,
			'total_pages' => $total_pages,
			'per_page'    => $per_page,
		) );
	}


	/**
	 * Add filter box by page status
	 *
	 * @param string $which
	 */
	public function extra_tablenav( $which ) {

		if ( $which != 'top' ) {
			return;
		}

		echo '<div class="alignleft actions filter-by-form">';
		echo "<select name='ds' id='ds'>";
		printf( "<option value=''>%s</option>", __( 'Select Submission Status', 'dmca-badge' ) );
		printf( "<option value='sent'>%s</option>", __( 'Sent', 'dmca-badge' ) );
		printf( "<option value='not_sent'>%s</option>", __( 'Not Sent', 'dmca-badge' ) );
		echo "</select>";

		submit_button( __( 'Filter pages', 'dmca-badge' ), '', '', false, array( 'id' => 'filter-submit' ) );

		printf( '<div class="add-all-pages" data-token="%s" data-ajaxurl="%s">%s</div>',
			dmca_get_login_token(), admin_url( 'admin-ajax.php' ), esc_html__( 'Submit all Pages', 'dmca-badge' )
		);

		echo "</div>";
	}


	/**
	 * Column dmca date
	 *
	 * @param WP_Post $item
	 *
	 * @return string
	 */
	public function column_dmca_date( \ WP_Post $item ) {

		$human_time_diff = human_time_diff( get_the_time( 'U', $item ), current_time( 'timestamp' ) ) . __( ' ago', 'dmca-badge' );

		ob_start();

		printf( '<span>%s</span>', get_the_time( 'F j, Y g:i A', $item ) );
		printf( '<div class="row-actions"><span class="timeago-view">%s</span></div>', $human_time_diff );

		return ob_get_clean();
	}


	/**
	 * Column protection status
	 *
	 * @param WP_Post $item
	 *
	 * @return string
	 */
	public function column_dmca_status( \ WP_Post $item ) {

		return sprintf( '<span class="dmca-status %s">%s</span>', get_dmca_submission_status_raw( $item->ID ), get_dmca_submission_status( $item->ID ) );
	}


	/**
	 * Column Title
	 *
	 * @param WP_Post $item
	 *
	 * @return false|string
	 */
	public function column_title( \WP_Post $item ) {

		$edit_link = add_query_arg( array( 'post' => $item->ID, 'action' => 'edit' ), admin_url( 'post.php', false ) );

		ob_start();

		printf( '<strong><span>%3$s</span> <span class="dashicons dashicons-minus"></span> <a target="_blank" class="row-title" href="%1$s">%2$s</a></strong>',
			esc_url( $edit_link ),
			esc_html( get_the_title( $item->ID ) ),
			ucfirst( $item->post_type )
		);
		printf( '<div class="row-actions">' );
		printf( '<span class="edit"><a target="_blank" href="%1$s">%2$s</a></span>  | ', $edit_link, __( 'Edit', 'dmca-badge' ) );
		printf( '<span class="view"><a target="_blank" href="%1$s">%2$s</a></span> | ', get_the_permalink( $item->ID ), __( 'View', 'dmca-badge' ) );
		printf( '<span class="add">%s</span>', __( 'Submit for Protection', 'dmca-badge' ) );
		printf( '</div>' );

		return ob_get_clean();
	}


	/**
	 * Column CB
	 *
	 * @param $item
	 *
	 * @return string|void
	 */
	public function column_check_status( $item ) {

		$settings   = get_option( 'dmca_badge_settings' );
		$settings   = isset( $settings->values ) ? $settings->values : array();
		$account_id = isset( $settings['authenticate']['AccountID'] ) ? $settings['authenticate']['AccountID'] : '';
		$account_id = empty( $account_id ) ? get_user_meta( get_current_user_id(), 'dmca_account_id', true ) : $account_id;

		return sprintf( '<a target="_blank" href="%s?refurl=%s&id=%s">%s</a>', esc_url_raw( 'https://www.dmca.com/protection/status.aspx' ),
			get_the_permalink( $item->ID ), $account_id, esc_html__( 'Test Status', 'dmca-badge' )
		);
	}


	/**
	 * Column Default
	 *
	 * @param object $item
	 * @param string $column_name
	 *
	 * @return string|void
	 */
	protected function column_default( $item, $column_name ) {
		return '';
	}


	/**
	 * Return columns for this screen
	 *
	 * @return array
	 */
	public function get_columns() {
		return get_column_headers( get_current_screen() );
	}


	/**
	 * Define columns
	 *
	 * @return array
	 */
	public static function define_columns() {

		return array(
			'title'        => __( 'Page Title', 'dmca-badge' ),
			'dmca_status'  => __( 'Submission Status', 'dmca-badge' ),
			'check_status' => __( 'Check Status', 'dmca-badge' ),
			'dmca_date'    => __( 'Published Date', 'dmca-badge' ),
		);
	}


	/**
	 * Return Post Meta Value
	 *
	 * @param bool $meta_key
	 * @param bool $post_id
	 * @param string $default
	 *
	 * @return mixed|string|void
	 */
	public function get_meta( $meta_key = false, $post_id = false, $default = '' ) {

		if ( ! $meta_key ) {
			return '';
		}

		$post_id    = ! $post_id ? get_the_ID() : $post_id;
		$meta_value = get_post_meta( $post_id, $meta_key, true );
		$meta_value = empty( $meta_value ) ? $default : $meta_value;

		return apply_filters( 'dmca_filters_get_meta', $meta_value, $meta_key, $post_id, $default );
	}
}

