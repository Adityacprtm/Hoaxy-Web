<?php

class td_module_mob_1 extends td_module {

    function __construct($post) {
        //run the parrent constructor
        parent::__construct($post);
    }

    function render() {
        ob_start();
        ?>

        <div class="<?php echo $this->get_module_classes();?>">
            <?php echo $this->get_image('td_265x198');?>
            <div class="item-details">
                <?php echo $this->get_title();?>

                <div class="td-module-meta-info">
	                <?php if ( td_util::get_option('tds_category_mobule_mob_1') == 'yes' ) { echo $this->get_category(); }?>
	                <?php echo $this->get_date();?>
                </div>
            </div>

        </div>

        <?php return ob_get_clean();
    }

	/**
     * this is used to render amp data for amp ajax search
	 * @return array
	 */
    function render_amp() {

        $post_data = array(
            'post_url' => $this->href,
            'post_title_attribute' => $this->title_attribute
        );

        /**
         * post featured image
         */
        $tds_hide_featured_image_placeholder = td_util::get_option('tds_hide_featured_image_placeholder');

        //retina image
        $srcset_sizes = '';

        // do we have a post thumb or a placeholder?
        if ( !is_null( $this->post_thumb_id ) or ( $tds_hide_featured_image_placeholder != 'hide_placeholder' ) ) {

            if ( !is_null( $this->post_thumb_id ) ) {

                if ( td_util::get_option('tds_thumb_td_265x198' ) != 'yes' ) {

                    $td_temp_image_url[1] = '265';
                    $td_temp_image_url[2] = '198';
                    $td_temp_image_url[0] = TDC_URL_LEGACY . '/assets/images/thumb-disabled/td_265x198.png';

                    $attachment_alt = 'alt=""';
                    $attachment_title = '';
                } else {
                    $td_temp_image_url = wp_get_attachment_image_src($this->post_thumb_id, 'td_265x198');
                    $attachment_alt = get_post_meta($this->post_thumb_id, '_wp_attachment_image_alt', true );
                    $attachment_alt = 'alt="' . esc_attr(strip_tags($attachment_alt)) . '"';
                    $attachment_title = ' title="' . esc_attr(strip_tags($this->title)) . '"';

                    if (empty($td_temp_image_url[0])) {
                        $td_temp_image_url[0] = '';
                    }

                    if (empty($td_temp_image_url[1])) {
                        $td_temp_image_url[1] = '';
                    }

                    if (empty($td_temp_image_url[2])) {
                        $td_temp_image_url[2] = '';
                    }

                    //retina
                    $srcset_sizes = td_util::get_srcset_sizes($this->post_thumb_id, 'td_265x198', $td_temp_image_url[1], $td_temp_image_url[0]);

                }

            } else {

                $td_temp_image_url[1] = '265';
                $td_temp_image_url[2] = '198';
                $td_temp_image_url[0] = TDC_URL_LEGACY . '/assets/images/no-thumb/td_265x198.png';

                $attachment_alt = 'alt=""';
                $attachment_title = '';
            }

            $post_data['post_thumb_url'] = $td_temp_image_url[0];
            $post_data['post_thumb_width'] = $td_temp_image_url[1];
            $post_data['post_thumb_height'] = $td_temp_image_url[2];
            $post_data['post_thumb_alt'] = $attachment_alt;
            $post_data['post_thumb_title'] = $attachment_title;
            $post_data['post_thumb_srcset_sizes'] = $srcset_sizes;

        }

        /**
         * post category
         */
        $selected_category_obj = '';
        $selected_category_obj_id = '';
        $selected_category_obj_name = '';

        //read the post meta to get the custom primary category
        $td_post_theme_settings = td_util::get_post_meta_array($this->post->ID, 'td_post_theme_settings');
        if ( !empty( $td_post_theme_settings['td_primary_cat'] ) ) {
            //we have a custom category selected
            $selected_category_obj = get_category($td_post_theme_settings['td_primary_cat']);
        } else {

            //get one auto
            $categories = get_the_category($this->post->ID);

            if ( is_category() ) {
                foreach ( $categories as $category ) {
                    if ( $category->term_id == get_query_var('cat' ) ) {
                        $selected_category_obj = $category;
                        break;
                    }
                }
            }

            if ( empty($selected_category_obj) and !empty($categories[0]) ) {
                if ( $categories[0]->name === TD_FEATURED_CAT and !empty($categories[1]) ) {
                    $selected_category_obj = $categories[1];
                } else {
                    $selected_category_obj = $categories[0];
                }
            }
        }

        $post_data['post_cat_link'] = '';
        $post_data['post_cat_name'] = '';
        $post_data['post_no_cat'] = '';

        if ( !empty($selected_category_obj) ) {
            $selected_category_obj_id = $selected_category_obj->cat_ID;
            $selected_category_obj_name = $selected_category_obj->name;
        }

        if ( !empty($selected_category_obj_id) && !empty($selected_category_obj_name) ) {
            $post_data['post_cat_link'] = get_category_link($selected_category_obj_id);
            $post_data['post_cat_name'] = $selected_category_obj_name;
        } else {
            $post_data['post_no_cat'] = 'td-mod-no-cat';
        }

        /**
         * post date
         */
        $td_article_date_unix = get_the_time('U', $this->post->ID);

        $post_data['post_date_unix'] = date(DATE_W3C, $td_article_date_unix);
        $post_data['post_date'] = get_the_time(get_option('date_format'), $this->post->ID);

        return $post_data;
    }
}