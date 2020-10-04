<!doctype html >
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> itemscope="itemscope" itemtype="<?php echo td_global::$http_or_https?>://schema.org/WebPage">

    <?php /* scroll to top */?>
    <div class="td-scroll-up"><i class="td-icon-menu-up"></i></div>

    <?php load_template( TDC_PATH_LEGACY . '/parts/menu-mobile.php', true);?>
    <?php load_template( TDC_PATH_LEGACY . '/parts/search.php', true);?>

    <div id="td-outer-wrap" class="td-theme-wrap">

        <?php

        if ( td_util::tdc_is_live_editor_iframe() || ( ! td_util::is_template_header() && ! td_util::is_no_header() ) ) {

            $hide_class = '';
            if ( td_util::is_template_header() || td_util::is_no_header() ) {
                $hide_class = 'tdc-zone-invisible';
            }

            ?>
            <div class="tdc-header-wrap <?php echo esc_attr( $hide_class ) ?>">
                <div class="td-header-wrap td-header-style-1">
                    <div class="td-banner-wrap-full td-logo-wrap-full td-container-wrap">
                        <div class="td-header-sp-logo">
                            <?php
                            $td_logo_text = get_bloginfo('name');
                            $td_tagline_text = get_bloginfo('description');

                            // H1 on logo when there's no title with H1 in page
                            $td_use_h1_logo = false;
                            if (is_home()) {
                                $td_use_h1_logo = true;
                            } ?>

                            <div class="td-logo-text-wrap">
                                <div class="td-logo-text-container">
                                    <?php
                                    if($td_use_h1_logo === true) {
                                        echo '<h1 class="td-logo">';
                                    };
                                    ?>
                                    <a class="td-logo-wrap" href="<?php echo esc_url(home_url( '/' )); ?>">
                                        <span class="td-logo-text"><?php if(!$td_logo_text) { echo "NEWSPAPER"; } else { echo esc_attr($td_logo_text); } ?></span>
                                    </a>
                                    <?php
                                    if($td_use_h1_logo === true) {
                                        echo '</h1>';
                                    };
                                    ?>
                                    <span class="td-tagline-text"><?php if(!$td_tagline_text) { echo "DISCOVER THE ART OF PUBLISHING"; } else { echo esc_attr($td_tagline_text); } ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="td-header-menu-wrap-full td-container-wrap">
                        <div class="td-header-menu-wrap td-header-gradient">
                            <div class="td-container td-header-row td-header-main-menu">
                                <div id="td-header-menu" role="navigation">
                                    <div id="td-top-mobile-toggle"><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>

                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'header-menu',
                                        'fallback_cb' => 'tagdiv_wp_page_menu',
                                        'menu_class'=> 'sf-menu',
                                    ));
                                    ?>
                                </div>

                                <div class="header-search-wrap">
                                    <div class="td-search-btns-wrap">
                                        <a id="td-header-search-button" href="#" role="button"><i class="td-icon-search"></i></a>
                                        <a id="td-header-search-button-mob" href="#" role="button"><i class="td-icon-search"></i></a>
                                    </div>

                                    <div class="td-drop-down-search">
                                        <form method="get" class="td-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
                                            <div role="search" class="td-head-form-search-wrap">
                                                <input id="td-header-search" type="text" value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
                                                <input class="wpb_button wpb_btn-inverse btn" type="submit" id="td-header-search-top" value="<?php esc_attr_e('Search', 'newspaper')?>" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

    do_action('td_wp_booster_after_header'); //used by unique articles

        ?>