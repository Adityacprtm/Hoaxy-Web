<?php

class td_covid19 {

    /**
     * Get data
     *
     * @return array|boolean
     */
    static function get_data() {

        $data_from_db = self::get_option('td_covid19_data');
        $cache_timeout = HOUR_IN_SECONDS * 1;

        if( isset($data_from_db['data']) ) {

            if( ( time() - $data_from_db['timestamp'] ) > $cache_timeout ) {

                // get data from novel api
                $data = self::get_data_from_novel();

                if( $data !== FALSE ) {
                    // if data is returned, update the db
                    $data_from_db = $data;
                    update_option('td_covid19_data', $data_from_db);
                }

            }

        } else {
            // get data from novel api
            $data_from_db = self::get_data_from_novel();

            if( $data_from_db !== FALSE ) {

                // if data exists, save it to the db
                update_option('td_covid19_data', $data_from_db);

            } else {
                return false;
            }
        }


        return $data_from_db;

    }



    private static function get_option($option_name) {
        $option_contents = get_option($option_name);
        if( !is_array($option_contents) ) {
            $option_contents = array();
        }

        return $option_contents;
    }



    /**
     * Check if data exists for current or previous day on github
     * and return if it does
     *
     * @return array|boolean
     */
    static function get_data_from_novel() {

        $url = 'https://corona.lmao.ninja/v2/countries';
        // initialize a new cURL session
        $curl = curl_init($url);
        // set CURLOPT_RETURNTRANSFER option to true,
        // so we get data returned on success
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // execute cURL request
        $curl_response = curl_exec($curl);
        // close cURL session
        curl_close($curl);

        // try to decode our cURL request response
        $data = json_decode($curl_response);

        // if data is in json format, try and parse it
        if( $data != NULL ) {
            $data_parsed = self::parse_data($data);
        }

        // if data parsed successful, return it
        if( !empty($data_parsed) ) {
            return array(
                'data' => $data_parsed,
                'timestamp' => time()
            );
        }

        // if data failed to return or parse, return false
        return false;

    }



    /**
     * Parse data retrieved from github
     * @param $data - the data string we have to parse
     *
     * @return array
     */
    static function parse_data($data) {

        $data_parsed = array();

        // pass through each country and store its
        // data in an array of countries
        foreach ( $data as $country ) {
            $data_parsed[$country->country] = array(
                'confirmed_cases' => $country->cases,
                'todayCases' => $country->todayCases,
                'deaths' => $country->deaths,
                'todayDeaths' => $country->todayDeaths,
                'recovered' => $country->recovered,
                'active' => $country->active
            );
        }

        return $data_parsed;

    }

}