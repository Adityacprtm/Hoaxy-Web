<!-- Instagram -->
<?php

if ( td_util::tdc_is_live_editor_iframe() || ( ! td_util::is_template_footer() && ! td_util::is_no_footer() ) ) {

    $hide_class = '';
    $tdbTemplateType = tdc_util::get_get_val('tdbTemplateType');
    if ( td_util::is_template_footer() || td_util::is_no_footer() || 'header' === $tdbTemplateType ) {
        $hide_class = 'tdc-zone-invisible';
    }

    ?>

    <?php if ( td_util::get_option( 'tds_footer_instagram' ) == 'show' ) { ?>

        <div class="td-main-content-wrap td-footer-instagram-container td-container-wrap <?php echo td_util::get_option( 'td_full_footer_instagram' ) ?><?php echo esc_attr( $hide_class ) ?>">
            <?php
            // get the instagram id from the panel
            $tds_footer_instagram_id = td_instagram::strip_instagram_user( td_util::get_option( 'tds_footer_instagram_id' ) );

            // check for a connected account
            if ( empty( $tds_footer_instagram_id ) ) {
                $td_instagram_connected_account = td_options::get_array( 'td_instagram_connected_account');

                if ( ! empty( $td_instagram_connected_account['connected_account'] ) ) {
                    $footer_instagram_id = $td_instagram_connected_account['connected_account']['username'];
                }

            } else {
                $footer_instagram_id = $tds_footer_instagram_id;
            }

            ?>

            <div class="td-instagram-user">
                <h4 class="td-footer-instagram-title">
                    <?php echo __td( 'Follow us on Instagram', TD_THEME_NAME ); ?>
                    <a class="td-footer-instagram-user-link" href="https://www.instagram.com/<?php echo esc_attr( $footer_instagram_id ) ?>" target="_blank">@<?php printf( '%1$s', $footer_instagram_id ) ?></a>
                </h4>
            </div>

            <?php
            // get the other panel settings
            $tds_footer_instagram_data             = base64_encode( td_util::get_option( 'tds_footer_instagram_data' ) );
            $tds_footer_instagram_nr_of_row_images = intval( td_util::get_option( 'tds_footer_instagram_on_row_images_number' ) );
            $tds_footer_instagram_nr_of_rows       = intval( td_util::get_option( 'tds_footer_instagram_rows_number' ) );
            $tds_footer_instagram_img_gap          = td_util::get_option( 'tds_footer_instagram_image_gap' );
            $tds_footer_instagram_header           = td_util::get_option( 'tds_footer_instagram_header_section' );

            //show the insta block
            echo td_global_blocks::get_instance( 'td_block_instagram' )->render(
                array(
                    'instagram_id'             => $tds_footer_instagram_id,
                    'instagram_demo_data'      => $tds_footer_instagram_data,
                    'instagram_header'         => /*td_util::get_option('tds_footer_instagram_header_section')*/ 1,
                    'instagram_images_per_row' => $tds_footer_instagram_nr_of_row_images,
                    'instagram_number_of_rows' => $tds_footer_instagram_nr_of_rows,
                    'instagram_margin'         => $tds_footer_instagram_img_gap
                )
            );

            ?>
        </div>

    <?php } ?>

    <?php

    $tds_footer_page = td_util::get_option( 'tds_footer_page' );
    $footer_page     = null;

    if ( $tds_footer_page !== '' && intval( $tds_footer_page ) !== get_the_ID() ) {
        $footer_page = get_post( $tds_footer_page );
    }

    if ( $footer_page instanceof WP_Post ) {

        ?>

        <div class="td-footer-page td-footer-container td-container-wrap <?php echo esc_attr( $hide_class ) ?>">
            <?php

            // Add suffix class to tdc_zone shortcode, to avoid wrapper in composer.
            // For the moment, it's necessary to not have more than 5 zones in composer (1 from content and 4 from header template)
            if ( td_util::tdc_is_live_editor_iframe() ) {
                tdc_zone::set_suffix_class( '-in-footer' );
            }

            // This action must be removed, because it's added by TagDiv Composer, and it affects footers with custom content
            remove_action( 'the_content', 'tdc_on_the_content', 10000 );
            remove_filter( 'the_content', 'wpautop' );

            /**
             * reset post data before getting the post content
             * fix for attachment img appearing before footer content on composer iframe when when editing an attachment template whit real data
             * @since 12.02.2019
             */
            if ( td_util::tdc_is_live_editor_iframe() ) {
                wp_reset_postdata();
            }

            $content = apply_filters( 'the_content', $footer_page->post_content );
            $content = str_replace( ']]>', ']]&gt;', $content );

            //bbpress removes all the filters
            //if is bbpress template run do_shortcode()
            if ( td_global::$current_template == 'bbpress' ) {
                echo do_shortcode( $content );
            } else {
                echo '<!-- footer content -->' . $content;
            }

            wp_reset_query();

            // Reset previous modified tdc_zone suffix class
            if ( td_util::tdc_is_live_editor_iframe() ) {
                tdc_zone::set_suffix_class( '' );
            }

            ?>
        </div>

        <?php

    } else {

        if ( td_util::tdc_is_live_editor_iframe() || ( ! td_util::is_template_footer() && ! td_util::is_no_footer() ) ) {

            ?>

            <div class="tdc-footer-wrap <?php echo esc_attr( $hide_class ) ?>">

                <!-- Footer -->
                <?php
                if ( td_util::get_option( 'tds_footer' ) != 'no' ) {
                    td_api_footer_template::_helper_show_footer();
                }
                ?>

                <!-- Sub Footer -->
                <?php
                if ( td_util::get_option( 'tds_sub_footer' ) != 'no' ) {
                    td_api_sub_footer_template::_helper_show_sub_footer();
                }


                ?>
            </div><!--close td-footer-wrap-->
            <?php
        }
    }
}



if ( td_util::tdc_is_live_editor_iframe() || td_util::is_template_footer() ) {

    $tdc_footer_template_content = td_util::get_footer_template_content();

    $hide_class = '';
    $tdbTemplateType = tdc_util::get_get_val('tdbTemplateType');
    if ( 'header' === $tdbTemplateType ) {
        $hide_class = 'tdc-zone-invisible';
    }

    ?>
    <div class="td-footer-template-wrap" style="position: relative">
        <?php

        if ( empty( $tdc_footer_template_content ) ) {
            $shortcode = '[tdc_zone type="tdc_footer"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
            $hide_class = 'tdc-zone-invisible';
        } else {
            $shortcode = $tdc_footer_template_content;
        }

        ?>
        <div class="td-footer-wrap <?php echo esc_attr( $hide_class ) ?>">
            <?php echo do_shortcode( shortcode_unautop( $shortcode ) ) ?>
        </div>

    </div>
    <?php
}

?>

</div><!--close td-outer-wrap-->


<?php wp_footer(); ?>

</body>
</html>