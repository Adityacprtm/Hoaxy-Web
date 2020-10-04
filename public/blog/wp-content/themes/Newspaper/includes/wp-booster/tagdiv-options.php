<?php

/**
 * Theme options class
 */
class tagdiv_options {

	/**
	 * @var bool flag used to hook the shutdown action only once
	 */
	private static $is_shutdown_hooked = false;


	/**
	 * @var null keep a local copy of all the settings
	 */
	static $td_options = NULL;


	/**
	 * get one td_option
	 * @param $option_name
	 * @param string $default_value - what you get if the option is empty or not set, default is EMPTY STRING ''
	 * @return string
	 */
	static function get( $option_name, $default_value = '' ) {
		self::read_from_db();

		if ( !empty( self::$td_options[$option_name] ) ) {
			return self::$td_options[$option_name];
		} else {
			if ( !empty($default_value) ) {
				return $default_value;
			} else {
				return '';
			}
		}
	}


	/**
	 * Updates a string td_option
	 * @param $option_name string
	 * @param $new_value string
	 */
	static function update( $option_name, $new_value ) {
		self::read_from_db();
		self::$td_options[$option_name] = $new_value;
		self::schedule_save();
	}


    /**
     * Read an array from the options
     * @param $option_name
     * @param array $default_value - what you get if the setting is not set
     * @return array
     */
	static function get_array( $option_name, $default_value = array() ) {

        self::read_from_db();

        // if we have a setting in the database and IT IS ARRAY
        if ( !empty( self::$td_options[$option_name] ) && is_array( self::$td_options[$option_name] ) ) {
            return self::$td_options[$option_name];
        }

        // no setting or the setting is stored as a string
        return $default_value;
    }


    /**
     * Updates an array td_option
     * @param $option_name string
     * @param $new_value array
     */
    static function update_array( $option_name, $new_value ) {
        self::$td_options[$option_name] = $new_value;
        self::schedule_save();
    }


	/**
	 * read the setting from db only once
	 */
	static private function read_from_db() {
		if ( is_null( self::$td_options ) ) {
			self::$td_options = get_option(TD_THEME_OPTIONS_NAME);
		}
	}

	/**
	 * Schedules a save on the shutdown hook.
	 */
	static function schedule_save() {

		// make sure that we hook only once
		if ( self::$is_shutdown_hooked === false ) {
			add_action( 'shutdown', array( __CLASS__, 'on_shutdown_save_options' ) );
			self::$is_shutdown_hooked = true;
		}
	}


	/**
	 * @internal
	 * save the options hook
	 */
	static function on_shutdown_save_options() {
		update_option( TD_THEME_OPTIONS_NAME, self::$td_options );

		$options_settings_id = TD_THEME_OPTIONS_NAME . '_settings';
		$current_time = current_time('Y-m-d H:i:s');

		$option_settings = get_option( $options_settings_id );
		if ( false === $option_settings || ! is_array( $option_settings ) ) {
			update_option($options_settings_id, array(
				$current_time => self::$td_options
			));
		} else {
			foreach ($option_settings as $key => $option_setting) {
				if ( $option_setting !== self::$td_options ) {
					$option_settings = array_merge(
						array(
							$current_time => self::$td_options
						),
						$option_settings
					);
				}
				break;
			}
			// keep 100 positions
			$option_settings = array_slice( $option_settings, 0, 10);
			update_option($options_settings_id, $option_settings );
		}
	}

}
