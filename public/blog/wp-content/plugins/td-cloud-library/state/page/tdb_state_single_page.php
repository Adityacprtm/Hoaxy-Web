<?php


/**
 * Class tdb_state_single_page
 * @property tdb_method loop
 * @property tdb_method menu
 * @property tdb_method page_breadcrumbs
 * @property tdb_method title
 *
 *
 */
class tdb_state_single_page extends tdb_state_base {

    private $page_obj;

    /**
     * set the page wp_query
     * @param WP_Query $wp_query
     */
    function set_wp_query( $wp_query ) {
        parent::set_wp_query( $wp_query );
    }

    function set_page_obj($page_obj) {
        $this->page_obj = $page_obj;
    }

    function get_page_obj() {
        return $this->page_obj;
    }

    public function __construct() {

        // latest posts loop
        $this->loop = function ( $atts ) {

            // previous text icon class
            $prev_class = 'td-icon-menu-left';
            if( isset( $atts['prev_tdicon'] ) ) {
                $prev_class = $atts['prev_tdicon'];
            }
            // next text icon class
            $next_class = 'td-icon-menu-right';
            if( isset( $atts['next_tdicon'] ) ) {
                $next_class = $atts['next_tdicon'];
            }

            // pagination options
            $pagenavi_options = array(
                'pages_text'    => __td( 'Page %CURRENT_PAGE% of %TOTAL_PAGES%', TD_THEME_NAME ),
                'current_text'  => '%PAGE_NUMBER%',
                'page_text'     => '%PAGE_NUMBER%',
                'first_text'    => __td( '1' ),
                'last_text'     => __td( '%TOTAL_PAGES%' ),
                'next_text'     => '<i class="' . $next_class . '"></i>',
                'prev_text'     => '<i class="' . $prev_class . '"></i>',
                'dotright_text' => __td( '...' ),
                'dotleft_text'  => __td( '...' ),
                'num_pages'     => 3,
                'always_show'   => true
            );

            // pagination defaults
            $pagination_defaults = array(
                'pagenavi_options' => $pagenavi_options,
                'paged' => 1,
                'max_page' => 3,
                'start_page' => 1,
                'end_page' => 3,
                'pages_to_show' => 3,
                'previous_posts_link' => '<a href="#"><i class="' . $prev_class . '"></i></a>',
                'next_posts_link' => '<a href="#"><i class="' . $next_class . '"></i></a>'
            );

            // posts limit - by default get the global wp loop posts limit setting
            $limit = get_option( 'posts_per_page' );
            if ( isset( $atts['limit'] ) ) {
                $limit = $atts['limit'];
            }

            // posts offset
            $offset = 0;
            if ( isset( $atts['offset'] ) ) {
                $offset = $atts['offset'];
            }

            $dummy_data_array = array(
                'loop_posts' => array(),
                'limit'      => $limit,
                'offset'     => $offset
            );

            for ( $i = (int)$offset; $i < (int)$limit + (int)$offset; $i++ ) {
                $dummy_data_array['loop_posts'][$i] = array(
                    'post_id' => '-' . $i, // negative post_id to avoid conflict with existent posts
                    'post_type' => 'sample',
                    'post_link' => '#',
                    'post_title' => 'Sample post title ' . $i,
                    'post_title_attribute' => esc_attr( 'Sample post title ' . $i ),
                    'post_excerpt' => 'Sample post no ' . $i .  ' excerpt.',
                    'post_content' => 'Sample post no ' . $i .  ' content.',
                    'post_date_unix' =>  get_the_time( 'U' ),
                    'post_date' => date( get_option( 'date_format' ), time() ),
                    'post_modified' => date( get_option( 'date_format' ), time() ),
                    'post_author_url' => '#',
                    'post_author_name' => 'Author name',
                    'post_author_email' => get_the_author_meta( 'email', 1 ),
                    'post_comments_no' => '11',
                    'post_comments_link' => '#',
                    'post_theme_settings' => array(
                        'td_primary_cat' => '1'
                    ),
                );
            }

            $dummy_data_array['loop_pagination'] = $pagination_defaults;

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $data_array = array();
            $wp_query = $this->get_wp_query();

            $data_array['limit'] = $limit;
            $paged = isset( $wp_query->query['paged'] ) ? $wp_query->query['paged'] : $wp_query->query_vars['paged'];

            if ( $paged > 1 ) {
                $offset = intval($offset) + ( ( $paged - 1 ) * (int)$limit );
            }

            $args = array(
                'post_type' => 'post',
                'ignore_sticky_posts' => true,
                'post_status' => 'publish',
                'posts_per_page' => $limit,
                'offset' => $offset,
                'paged' => $paged,
                'main_query_offset' => true //fix the pagination on offset, see tdb_functions.php
            );

            $post_ids = isset( $atts['post_ids'] ) ? $atts['post_ids'] : '';

            if ( !empty($post_ids) ) {

                // split posts ids string
                $post_ids_array = explode (',', $post_ids);
                $posts_not_in = array();
                $posts_in = array();

                // split ids
                foreach ($post_ids_array as $post_id) {
                    $post_id = trim($post_id);

                    // check if the ID is actually a number
                    if (is_numeric($post_id)) {
                        if (intval($post_id) < 0) {
                            $posts_not_in[] = str_replace('-', '', $post_id);
                        } else {
                            $posts_in[] = $post_id;
                        }
                    }
                }

                // don't pass an empty post__in because it will return has_posts()
                if (!empty($posts_in)) {
                    $args['post__in'] = $posts_in;
                    $args['orderby'] = 'post__in';
                }

                // check if the post__not_in is already set, if it is merge it with $posts_not_in
                if (!empty($posts_not_in)) {
                    if (!empty($args['post__not_in'])){
                        $args['post__not_in'] = array_merge($args['post__not_in'], $posts_not_in);
                    } else {
                        $args['post__not_in'] = $posts_not_in;
                    }
                }

            }

            // sort posts
            $sort = isset( $atts['sort'] ) ? $atts['sort'] : '';

            if( !empty($sort) ) {
                switch ($sort) {
                    case 'oldest_posts':
                        $args['order'] = 'ASC';
                        break;
                    case 'modified_date':
                        $args['orderby'] = 'post_modified';
                        break;
                    case 'alphabetical_order':
                        $args['orderby'] = 'title';
                        $args['order'] = 'ASC';
                        break;
                    case 'popular':
                        $args['meta_key'] = td_page_views::$post_view_counter_key;
                        $args['orderby'] = 'meta_value_num';
                        $args['order'] = 'DESC';
                        break;
                    case 'popular7':
                        $args['meta_query'] = 	array(
                            'relation' => 'AND',
                            array(
                                'key'     => td_page_views::$post_view_counter_7_day_total,
                                'type'    => 'numeric'
                            ),
                            array(
                                'key'     => td_page_views::$post_view_counter_7_day_last_date,
                                'value'   => (date('U') - 604800), // current date minus 7 days
                                'type'    => 'numeric',
                                'compare' => '>'
                            )
                        );
                        $args['orderby'] = td_page_views::$post_view_counter_7_day_total;
                        $args['order'] = 'DESC';
                        break;
                    case 'review_high':
                        $args['meta_key'] = 'td_review_key';
                        $args['orderby'] = 'meta_value_num';
                        $args['order'] = 'DESC';
                        break;
                    case 'comment_count':
                        $args['orderby'] = 'comment_count';
                        $args['order'] = 'DESC';
                        break;
                }
            }


            $wp_query_loop = new WP_Query($args);

            foreach ( $wp_query_loop->posts as $loop_post ) {

                $data_array['loop_posts'][$loop_post->ID] = array(
                    'post_id' => $loop_post->ID,
                    'post_type' => get_post_type( $loop_post->ID ),
                    'has_post_thumbnail' => has_post_thumbnail( $loop_post->ID ),
                    'post_thumbnail_id' => get_post_thumbnail_id( $loop_post->ID ),
                    'post_link' => esc_url( get_permalink( $loop_post->ID ) ),
                    'post_title' => get_the_title( $loop_post->ID ),
                    'post_title_attribute' => esc_attr( strip_tags( get_the_title( $loop_post->ID ) ) ),
                    'post_excerpt' => $loop_post->post_excerpt,
                    'post_content' => $loop_post->post_content,
                    'post_date_unix' =>  get_the_time( 'U', $loop_post->ID ),
                    'post_date' => get_the_time( get_option( 'date_format' ), $loop_post->ID ),
                    'post_modified' => get_the_modified_date(get_option( 'date_format' ), $loop_post->ID),
                    'post_author_url' => get_author_posts_url( $loop_post->post_author ),
                    'post_author_name' => get_the_author_meta( 'display_name', $loop_post->post_author ),
                    'post_author_email' => get_the_author_meta( 'email', $loop_post->post_author ),
                    'post_comments_no' => get_comments_number( $loop_post->ID ),
                    'post_comments_link' => get_comments_link( $loop_post->ID ),
                    'post_theme_settings' => td_util::get_post_meta_array( $loop_post->ID, 'td_post_theme_settings' ),
                );

            }

            $data_array['loop_pagination'] = $pagination_defaults;

            $paged = intval( $wp_query_loop->query['paged'] );

            if ( $paged === 0 ) {
                $paged = 1;
            }

            $max_page = $wp_query_loop->max_num_pages;

            $pages_to_show         = intval( $pagenavi_options['num_pages'] );
            $pages_to_show_minus_1 = $pages_to_show - 1;
            $half_page_start       = floor($pages_to_show_minus_1/2 );
            $half_page_end         = ceil($pages_to_show_minus_1/2 );
            $start_page            = $paged - $half_page_start;

            if( $start_page <= 0 ) {
                $start_page = 1;
            }

            $end_page = $paged + $half_page_end;
            if( ( $end_page - $start_page ) != $pages_to_show_minus_1 ) {
                $end_page = $start_page + $pages_to_show_minus_1;
            }

            if( $end_page > $max_page ) {
                $start_page = $max_page - $pages_to_show_minus_1;
                $end_page = $max_page;
            }

            if( $start_page <= 0 ) {
                $start_page = 1;
            }

            $data_array['loop_pagination']['paged'] = $paged;
            $data_array['loop_pagination']['max_page'] = $max_page;
            $data_array['loop_pagination']['start_page'] = $start_page;
            $data_array['loop_pagination']['end_page'] = $end_page;
            $data_array['loop_pagination']['pages_to_show'] = $pages_to_show;

            global $wp_query, $tdb_state_single_page, $paged;
            $template_wp_query = $wp_query;

            $wp_query = $tdb_state_single_page->get_wp_query();
            $paged = intval( $wp_query_loop->query['paged'] );

            $data_array['loop_pagination']['previous_posts_link'] = get_previous_posts_link( $pagenavi_options['prev_text'] );
            $data_array['loop_pagination']['next_posts_link'] = get_next_posts_link( $pagenavi_options['next_text'], $max_page );

            $wp_query = $template_wp_query;

            return $data_array;
        };

        // page breadcrumbs
        $this->page_breadcrumbs = function ( ) {

            $dummy_data_array = array(
                array(
                    'title_attribute' => '',
                    'url' => '',
                    'display_name' => 'Sample Page'
                )
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $data_array = array(
                array(
                    'title_attribute' => $this->get_page_obj()->post_title,
                    'url' => '',
                    'display_name' => ucfirst( $this->get_page_obj()->post_title )
                )
            );
            return $data_array;

        };

        // page title
        $this->title = function ( $atts ) {

            $dummy_data_array = array(
                'title' => 'Sample Page Title',
                'page_number' => '1',
                'class' => 'tdb-page-title'
            );

            if ( !$this->has_wp_query() ) {
                return $dummy_data_array;
            }

            $page_number = intval( $this->get_wp_query()->query_vars['paged'] );

            $data_array = array(
                'title' => $this->get_page_obj()->post_title,
                'page_number' => $page_number ? $page_number : 1,
                'class' => 'tdb-page-title'
            );

            return $data_array;

        };

        parent::lock_state_definition();
    }


}