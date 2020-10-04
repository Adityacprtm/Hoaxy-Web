<?php

class td_ajax_mob {

    // modify the module used on search
    static function on_ajax_search() {

	    $buffy = '';
        $buffy_msg = '';

        //the search string
        if (!empty($_POST['td_string'])) {
            $td_string = esc_html($_POST['td_string']);
        } elseif (!empty($_POST['s'])) {
            $td_string = esc_html($_POST['s']);;
        } else {
            $td_string = '';
        }

        //get the data
        $td_query = &td_data_source::get_wp_query_search($td_string); //by ref  do the query
        $td_query_amp = array();

        //build the results
        if (!empty($td_query->posts)) {

	        foreach ( $td_query->posts as $index => $post ) {
                $td_module_mob_1 = new td_module_mob_1($post);
                $buffy .= $td_module_mob_1->render();

                $post = (array)$post;
                $post_data = $td_module_mob_1->render_amp();

                foreach ( $post_data as $key => $value ) {
                    $post[$key] = $value;
                }

                $post = (object)$post;

                $td_query_amp[] = $post;

            }
        }

        if (count($td_query->posts) == 0) {
            //no results
            $buffy = '<div class="result-msg no-result">' . __td('No results', TD_THEME_NAME) . '</div>';
        } else {
            /**
             * show the results
             * @note:
             * we use esc_url(home_url( '/' )) instead of the wp @see get_search_link function because that's what the internal
             * wp widget it's using and it was creating duplicate links like: yoursite.com/search/search_query and yoursite.com?s=search_query
             */
            $buffy_msg .= '<div class="result-msg"><a href="' . home_url('/?s=' . urlencode($td_string )) . '">' . __td('View all results', TD_THEME_NAME) . '</a></div>';
            //add wrap
            $buffy = '<div class="td-aj-search-results">' . $buffy . '</div>' . $buffy_msg;
        }

        //prepare array for ajax
        $buffyArray = array(
            'td_query_all_results' => home_url('/?s=' . urlencode($td_string)),
            'td_query_posts' => $td_query_amp,
            'td_data' => $buffy,
            'td_total_results' => 2,
            'td_total_in_list' => count($td_query->posts),
            'td_search_query'=> $td_string
        );

        // Return the String
        die(json_encode($buffyArray));
    }
}