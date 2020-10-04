<?php


class tdb_state {


	/**
	 * the current post that we're editing
	 * @var WP_Post
	 */
	private static $post;


	/**
	 * @var bool
	 */
	private static $is_ajax;


	/**
	 * @param $new_state bool
	 */
	public static function set_is_ajax( $new_state ) {
        if ( isset( self::$is_ajax ) ) {
            echo 'The tdb_state::$is_ajax is already set';
        }
		self::$is_ajax = $new_state;
	}

	/**
     * return true if we are in an ajax request done by the cloud library plugin on single post templates > infinite post feature.
     * @return bool
	 */
	public static function is_ajax() {
        if ( ! isset( self::$is_ajax ) ) {
            echo 'The tdb_state::$is_ajax is NOT set';
        }
		return self::$is_ajax;
	}


	/**
	 * Returns the current post/page/CTP that we are editing
	 * @return mixed
	 */
	public static function get_post() {
        if ( ! isset( self::$post ) ) {
            echo 'The tdb_state::$post is NOT set';
        }
		return self::$post;
	}

	/**
	 * Sets the current post/page/CTP that we are editing
	 * @param WP_Post $post
	 */
	public static function set_post( $post ) {
		if ( isset( self::$post ) ) {
		    echo 'The tdb_state::$post is already set';
		}

		// we can add here additional checks if needed
		if (get_class($post) != 'WP_Post') {
		    echo '$post is not a WP_Post class';
			die;
		}
		self::$post = $post;
	}


}