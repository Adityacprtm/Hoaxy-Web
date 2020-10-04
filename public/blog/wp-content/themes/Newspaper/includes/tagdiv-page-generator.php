<?php


class tagdiv_page_generator {


    /**
     * generate single post breadcrumbs array
     * @param $post_title
     * @return array|string
     */
    private static function single_breadcrumbs_array($post_title) {

        $post = get_post();

        if ( ! $post ) {
            return false;
        }

        $primary_category_id = '';
        $categories = get_the_category($post->ID);
        foreach( $categories as $category ) {
            $primary_category_id = $category->cat_ID;
            break;
        }

        $category_1_name = '';
        $category_1_url = '';
        $category_2_name = '';
        $category_2_url = '';

        $primary_category_obj = get_category($primary_category_id);

        if (!empty($primary_category_obj)) {
            if (!empty($primary_category_obj->name)) {
                $category_1_name = $primary_category_obj->name;
            } else {
                $category_1_name = '';
            }

            if (!empty($primary_category_obj->cat_ID)) {
                $category_1_url = get_category_link($primary_category_obj->cat_ID);
            }

            if (!empty($primary_category_obj->parent) and $primary_category_obj->parent != 0) {
                $parent_category_obj = get_category($primary_category_obj->parent);
                if (!empty($parent_category_obj)) {
                    $category_2_name = $parent_category_obj->name;
                    $category_2_url = get_category_link($parent_category_obj->cat_ID);
                }
            }
        }

        $breadcrumbs_array = array();
        if (!empty($category_1_name)) {

            //parent category (only if we have one and if the theme is set to show it)
            if (!empty($category_2_name)) {
                $breadcrumbs_array [] = array (
                    'title_attribute' => esc_html__('View all posts in', 'newspaper') . ' ' . htmlspecialchars($category_2_name),
                    'url' => $category_2_url,
                    'display_name' => $category_2_name
                );
            }

            //child category
            $breadcrumbs_array [] = array (
                'title_attribute' => esc_html__('View all posts in', 'newspaper') . ' ' . htmlspecialchars($category_1_name),
                'url' => $category_1_url,
                'display_name' => $category_1_name
            );

            //article title
            $breadcrumbs_array [] = array (
                'title_attribute' => $post_title,
                'url' => get_permalink( $post ),
                'display_name' => $post_title
            );
        }

        return $breadcrumbs_array;
    }


    /**
     * generate author breadcrumbs array
     * @param $part_cur_auth_obj
     * @return array|string
     */
    private static function author_breadcrumbs_array($part_cur_auth_obj) {

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => '',
            'display_name' => esc_html__('Authors', 'newspaper')
        );

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => get_author_posts_url($part_cur_auth_obj->ID),
            'display_name' => esc_html__('Posts by', 'newspaper') . ' ' . $part_cur_auth_obj->display_name
        );

        return $breadcrumbs_array;
    }


    /**
     * generate category breadcrumbs array
     * @param $primary_category_obj
     * @return array|string
     */
    private static function category_breadcrumbs_array($primary_category_obj) {

        $category_1_name = '';
        $category_1_url = '';
        $category_2_name = '';
        $category_2_url = '';

        $breadcrumbs_array = array();

        if (!empty($primary_category_obj)) {
            if (!empty($primary_category_obj->name)) {
                $category_1_name = $primary_category_obj->name;
                $category_1_url = get_category_link($primary_category_obj->term_id);
            } else {
                $category_1_name = '';
            }

            if (!empty($primary_category_obj->cat_ID)) {
                $category_1_url = get_category_link($primary_category_obj->cat_ID);
            }

            if (!empty($primary_category_obj->parent) and $primary_category_obj->parent != 0) {
                $parent_category_obj = get_category($primary_category_obj->parent);
                if (!empty($parent_category_obj)) {
                    $category_2_name = $parent_category_obj->name;
                    $category_2_url = get_category_link($parent_category_obj->cat_ID);
                }
            }
        }

        if (!empty($category_1_name)) {
            //parent category
            if (!empty($category_2_name) ) {
                $breadcrumbs_array [] = array (
                    'title_attribute' => esc_html__('View all posts in', 'newspaper') . ' ' . htmlspecialchars($category_2_name),
                    'url' => $category_2_url,
                    'display_name' => $category_2_name
                );
            }



            //child category
            $breadcrumbs_array [] = array (
                'title_attribute' => '',
                'url' => $category_1_url,
                'display_name' => $category_1_name
            );

            //pagination
            $td_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if ($td_paged > 1) {
                $breadcrumbs_array [] = array (
                    'title_attribute' => '',
                    'url' => '',
                    'display_name' =>  esc_html__('Page', 'newspaper') . ' ' . $td_paged
                );
            }
        }

        return $breadcrumbs_array;
    }


    /**
     * generate tag breadcrumbs array
     * @param $current_tag_name
     * @return array|string
     */
    private static function tag_breadcrumbs_array($current_tag_name) {

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => '',
            'display_name' =>  esc_html__('Tags', 'newspaper')
        );

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => get_tag_link(get_queried_object()->term_id),
            'display_name' =>  ucfirst($current_tag_name)
        );

        return $breadcrumbs_array;
    }


    /**
     * generate archive breadcrumbs array
     * @return array|string
     */
    private static function archive_breadcrumbs_array() {

        $cur_archive_year = get_the_date('Y');
        $cur_archive_month = get_the_date('n');
        $cur_archive_day = get_the_date('j');

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => get_year_link($cur_archive_year),
            'display_name' =>  get_the_date('Y')
        );

        if (is_month() or is_day()) {
            $breadcrumbs_array [] = array (
                'title_attribute' => '',
                'url' => get_month_link($cur_archive_year, $cur_archive_month),
                'display_name' =>  get_the_date('F')
            );
        }

        if (is_day()) {
            $breadcrumbs_array [] = array (
                'title_attribute' => '',
                'url' => get_day_link($cur_archive_year, $cur_archive_month, $cur_archive_day),
                'display_name' =>  get_the_date('j')
            );
        }

        return $breadcrumbs_array;
    }


    /**
     * generate home breadcrumbs array
     * @return array|string
     */
    private static function home_breadcrumbs_array() {

        $breadcrumbs_array [] = array (
            'title_attribute' => esc_html__('Blog', 'newspaper'),
            'url' => get_home_url(),
            'display_name' =>  esc_html__('Blog', 'newspaper')
        );

        //pagination
        $td_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        if ($td_paged > 1) {
            global $wp;
            $breadcrumbs_array [] = array (
                'title_attribute' => '',
                'url' => home_url($wp->request),
                'display_name' =>  esc_html__('Page', 'newspaper') . ' ' . $td_paged
            );
        }

        return $breadcrumbs_array;
    }


    /**
     * generate page breadcrumbs array
     * @param $page_title
     * @return array|string
     */
    private static function page_breadcrumbs_array($page_title) {

        global $post;
        if( is_page() ) {
            $parents = get_post_ancestors ($post->ID);

            if (!empty($parents)) {
                $parents = array_reverse($parents);
                foreach ($parents as $parent_id) {
                    $breadcrumbs_array [] = array (
                        'title_attribute' => get_the_title($parent_id),
                        'url' => esc_url(get_permalink($parent_id)),
                        'display_name' =>  get_the_title($parent_id)
                    );
                }
            }
        }

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => get_permalink($post->ID),
            'display_name' =>  $page_title
        );

        return $breadcrumbs_array;
    }


    /**
     * generate attachment breadcrumbs array
     * @param $parent_id
     * @param $attachment_title
     * @return array|string
     */
    private static function attachment_breadcrumbs_array($parent_id, $attachment_title) {

        //show the attachment parent
        if ($parent_id != '') {
            $breadcrumbs_array [] = array (
                'title_attribute' => get_the_title($parent_id),
                'url' => esc_url(get_permalink($parent_id)),
                'display_name' =>  get_the_title($parent_id)
            );
        }

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => '',
            'display_name' =>  $attachment_title
        );

        return $breadcrumbs_array;
    }


    /**
     * generate search breadcrumbs array
     * @return array|string
     */
    private static function search_breadcrumbs_array() {

        $breadcrumbs_array [] = array (
            'title_attribute' => '',
            'url' => '',
            'display_name' =>  esc_html__('Search', 'newspaper')
        );

        return $breadcrumbs_array;
    }

    /**
     * theme pagination
     */
    static function get_pagination() {

        global $wp_query;

        if( is_404() ) {
            return;
        }

        $pagenavi_options = array();
        $pagenavi_options['pages_text'] = esc_html__('Page %CURRENT_PAGE% of %TOTAL_PAGES%', 'newspaper');
        $pagenavi_options['current_text'] = '%PAGE_NUMBER%';
        $pagenavi_options['page_text'] = '%PAGE_NUMBER%';
        $pagenavi_options['first_text'] = esc_html__('1', 'newspaper');
        $pagenavi_options['last_text'] = esc_html__('%TOTAL_PAGES%', 'newspaper');
        if (is_rtl()) {
            $pagenavi_options['next_text'] = '<i class="td-icon-menu-right"></i>';
            $pagenavi_options['prev_text'] = '<i class="td-icon-menu-left"></i>';
        } else {
            $pagenavi_options['next_text'] = '<i class="td-icon-menu-right"></i>';
            $pagenavi_options['prev_text'] = '<i class="td-icon-menu-left"></i>';
        }
        $pagenavi_options['dotright_text'] = esc_html__('...', 'newspaper');
        $pagenavi_options['dotleft_text'] = esc_html__('...', 'newspaper');
        $pagenavi_options['num_pages'] = 3;
        $pagenavi_options['always_show'] = 0;
        $pagenavi_options['num_larger_page_numbers'] = 3;
        $pagenavi_options['larger_page_numbers_multiple'] = 1000;


        $paged = intval(get_query_var('paged'));
        $max_page = $wp_query->max_num_pages;

        if(empty($paged) || $paged == 0) {
            $paged = 1;
        }

        $pages_to_show = intval($pagenavi_options['num_pages']);
        $larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
        $larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
        $pages_to_show_minus_1 = $pages_to_show - 1;
        $half_page_start = floor($pages_to_show_minus_1/2);
        $half_page_end = ceil($pages_to_show_minus_1/2);
        $start_page = $paged - $half_page_start;
        if($start_page <= 0) {
            $start_page = 1;
        }
        $end_page = $paged + $half_page_end;
        if(($end_page - $start_page) != $pages_to_show_minus_1) {
            $end_page = $start_page + $pages_to_show_minus_1;
        }
        if($end_page > $max_page) {
            $start_page = $max_page - $pages_to_show_minus_1;
            $end_page = $max_page;
        }
        if($start_page <= 0) {
            $start_page = 1;
        }
        $larger_per_page = $larger_page_to_show*$larger_page_multiple;
        $larger_start_page_start = (self::td_round_number($start_page, 10) + $larger_page_multiple) - $larger_per_page;
        $larger_start_page_end = self::td_round_number($start_page, 10) + $larger_page_multiple;
        $larger_end_page_end = self::td_round_number($end_page, 10) + ($larger_per_page);
        if($larger_start_page_end - $larger_page_multiple == $start_page) {
            $larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
            $larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
        }
        if($larger_start_page_start <= 0) {
            $larger_start_page_start = $larger_page_multiple;
        }
        if($larger_start_page_end > $max_page) {
            $larger_start_page_end = $max_page;
        }
        if($larger_end_page_end > $max_page) {
            $larger_end_page_end = $max_page;
        }

        if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
            $pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
            $pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);

            echo '<div class="page-nav td-pb-padding-side">';

            previous_posts_link($pagenavi_options['prev_text']);
            if ($start_page >= 2 && $pages_to_show < $max_page) {
                $first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
                echo '<a href="' . esc_url(get_pagenum_link()) . '" class="first" title="' . $first_page_text . '">' . $first_page_text . '</a>';
                if(!empty($pagenavi_options['dotleft_text']) && ($start_page > 2)) {
                    echo '<span class="extend">' . $pagenavi_options['dotleft_text'] . '</span>';
                }
            }

            for($i = $start_page; $i  <= $end_page; $i++) {
                if($i == $paged) {
                    $current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
                    echo '<span class="current">' . $current_page_text . '</span>';
                } else {
                    $page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
                    echo '<a href="' . esc_url(get_pagenum_link($i)) . '" class="page" title="' . $page_text . '">' . $page_text . '</a>';
                }
            }

            if ($end_page < $max_page) {
                if(!empty($pagenavi_options['dotright_text']) && ($end_page + 1 < $max_page)) {
                    echo '<span class="extend">' . $pagenavi_options['dotright_text'] . '</span>';
                }

                $last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
                echo '<a href="' . esc_url(get_pagenum_link($max_page)) . '" class="last" title="' . $last_page_text . '">' . $last_page_text . '</a>';
            }
            next_posts_link($pagenavi_options['next_text'], $max_page);
            if(!empty($pages_text)) {
                echo '<span class="pages">' . $pages_text . '</span>';
            }

            echo '<div class="clearfix"></div>';
            echo '</div>';
        }
    }
    static function td_round_number($num, $tonearest) {
        return floor($num/$tonearest)*$tonearest;
    }


    /**
     * the breadcrumb generator
     * @param $template_data - the template
     * @return string
     */
    static function get_breadcrumbs($template_data = array()) {

        if (empty($template_data) || !isset($template_data['template'])) {
            return '';
        }

        $breadcrumbs_array = array();

        switch ($template_data['template']) {
            case 'single':
                $breadcrumbs_array = self::single_breadcrumbs_array($template_data['title']);
                break;
            case 'author':
                $breadcrumbs_array = self::author_breadcrumbs_array($template_data['author']);
                break;
            case 'category':
                $breadcrumbs_array = self::category_breadcrumbs_array($template_data['category_obj']);
                break;
            case 'tag':
                $breadcrumbs_array = self::tag_breadcrumbs_array($template_data['tag_name']);
                break;
            case 'archive':
                $breadcrumbs_array = self::archive_breadcrumbs_array();
                break;
            case 'home':
                $breadcrumbs_array = self::home_breadcrumbs_array();
                break;
            case 'page':
                $breadcrumbs_array = self::page_breadcrumbs_array($template_data['page_title']);
                break;
            case 'attachment':
                $breadcrumbs_array = self::attachment_breadcrumbs_array($template_data['parent_id'], $template_data['attachment_title']);
                break;
            case 'search':
                $breadcrumbs_array = self::search_breadcrumbs_array();
                break;
        }

        if (empty($breadcrumbs_array)) {
            return '';
        }

        // add home breadcrumb
        array_unshift($breadcrumbs_array, array(
            'title_attribute' => '',
            'url' => esc_url(home_url( '/' )),
            'display_name' => esc_html__('Home', 'newspaper')
        ));

        $buffy = '';

        $buffy .= '<div class="entry-crumbs">';

        $array_elements = count($breadcrumbs_array);

        foreach ($breadcrumbs_array as $key => $breadcrumb) {

            if ($key == $array_elements - 1) {
                //last element should not display the url
                $breadcrumb['url'] = '';
            }

            if (empty($breadcrumb['url'])) {
                if ($key != 0) { //add separator only after first
                    $buffy .= ' <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> ';
                }
                //no link - breadcrumb
                $buffy .=  '<span class="td-bred-no-url-last">' . esc_html( $breadcrumb['display_name'] ) . '</span>';

            } else {
                if ($key != 0) { //add separator only after first
                    $buffy .= ' <i class="td-icon-right td-bread-sep"></i> ';
                }
                //normal links
                $buffy .= '<span><a title="' . esc_attr( $breadcrumb['title_attribute'] ) . '" class="entry-crumb" href="' . esc_url( $breadcrumb['url'] ) . '">' . esc_html( $breadcrumb['display_name'] ) . '</a></span>';
            }


        }
        $buffy .= '</div>';

        return $buffy;
    }


}