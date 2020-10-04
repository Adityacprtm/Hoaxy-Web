<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
    wp_head(); /** we hook up in wp_booster @see td_wp_booster_functions::hook_wp_head */
    ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>

    <?php load_template( TDC_PATH_LEGACY . '/parts/menu-mobile.php', true);?>
    <?php load_template( TDC_PATH_LEGACY . '/parts/search.php', true);?>


    <div id="td-outer-wrap" class="td-theme-wrap">
    <?php //this is closing in the footer.php file ?>

        <?php

        if ( td_util::tdc_is_live_editor_iframe() || ( ! td_util::is_template_header() && ! td_util::is_no_header() ) ) {

            $hide_class = '';
            if ( td_util::is_template_header() || td_util::is_no_header() ) {
                $hide_class = 'tdc-zone-invisible';
            }

            ?>

            <div class="tdc-header-wrap <?php echo esc_attr( $hide_class ) ?>">

            <?php
            /*
             * loads the header template set in Theme Panel -> Header area
             * the template files are located in ../parts/header
             */
                td_api_header_style::show_header();
            ?>

            </div>

            <?php
        }

        if ( td_util::tdc_is_live_editor_iframe() || td_util::is_template_header() ) {

            $tdc_header_template_content = td_util::get_header_template_content();

            $hide_class = '';

            ?>
            <div class="td-header-template-wrap" style="position: relative">
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_mobile'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_mobile"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                    $hide_class = 'tdc-zone-invisible';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_mobile'];
                }

                ?>
                    <div class="td-header-mobile-wrap <?php echo esc_attr( $hide_class ) ?>">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_mobile_sticky'] ) || ( ! td_util::tdc_is_live_editor_iframe() && isset( $tdc_header_template_content['tdc_is_mobile_header_sticky'] ) && false === $tdc_header_template_content['tdc_is_mobile_header_sticky'] )) {
                    $shortcode = '[tdc_zone type="tdc_header_mobile_sticky"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_mobile_sticky'];
                }

                ?>
                    <div class="td-header-mobile-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>
                <?php

                $hide_class = '';

                if ( empty( $tdc_header_template_content['tdc_header_desktop'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_desktop"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                    $hide_class = 'tdc-zone-invisible';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_desktop'];
                }

                ?>

                    <div class="td-header-desktop-wrap <?php echo esc_attr( $hide_class ) ?>">
                        <?php echo do_shortcode( $shortcode ) ?>
                    </div>
                <?php

                if ( empty( $tdc_header_template_content['tdc_header_desktop_sticky'] ) || ( ! td_util::tdc_is_live_editor_iframe() && isset( $tdc_header_template_content['tdc_is_header_sticky'] ) && false === $tdc_header_template_content['tdc_is_header_sticky'] ) ) {
                    $shortcode = '[tdc_zone type="tdc_header_desktop_sticky"][vc_row][vc_column][/vc_column][/vc_row][/tdc_zone]';
                } else {
                    $shortcode = $tdc_header_template_content['tdc_header_desktop_sticky'];
                }

                ?>
                <div class="td-header-desktop-sticky-wrap tdc-zone-sticky-invisible tdc-zone-sticky-inactive" style="display: none">
                    <?php echo do_shortcode( $shortcode ) ?>
                </div>
            </div>
            <?php

        }

        ?>

<?php

do_action('td_wp_booster_after_header'); //used by unique articles
