<?php

// Mobile Theme logo + retina logo
$td_header_logo_mob = td_util::get_option('tds_logo_menu_upload_mob');
$td_header_logoR_mob = td_util::get_option('tds_logo_menu_upload_r_mob');

// read the mobile logo + retina logo
$td_mobile_customLogo = td_util::get_option('tds_logo_menu_upload');
$td_mobile_customLogoR = td_util::get_option('tds_logo_menu_upload_r');

// read the header logo + retina logo
$td_header_logo = td_util::get_option('tds_logo_upload');
$td_header_logoR = td_util::get_option('tds_logo_upload_r');

// read the header text logo + tagline
$td_logo_text = stripslashes(td_util::get_option('tds_logo_text'));
$td_tagline_text = stripslashes(td_util::get_option('tds_tagline_text'));

// Mobile Theme text logo + tagline
//$td_logo_text_mob = stripslashes(td_util::get_option('tds_logo_text_mob'));
//$td_tagline_text_mob = stripslashes(td_util::get_option('tds_tagline_text_mob'));

$td_logo_alt = td_util::get_option('tds_logo_alt');
$td_logo_title = td_util::get_option('tds_logo_title');

// Mobile Theme alt & title
$td_logo_alt_mob = td_util::get_option('tds_logo_alt_mob');
$td_logo_title_mob = td_util::get_option('tds_logo_title_mob');

// specific Mobile Theme options
if(!empty($td_header_logo_mob)) {
    $td_mobile_customLogo = $td_header_logo_mob;
}
if(!empty($td_header_logoR_mob)) {
    $td_mobile_customLogoR = $td_header_logoR_mob;
}
//if(!empty($td_logo_text_mob)) {
//    $td_logo_text = $td_logo_text_mob;
//}
//if(!empty($td_tagline_text_mob)) {
//    $td_tagline_text = $td_tagline_text_mob;
//}
if (!empty($td_logo_alt_mob)) {
    $td_logo_alt = $td_logo_alt_mob;
}
if (!empty($td_logo_title_mob)) {
    $td_logo_title = ' title="' . $td_logo_title_mob . '"';
} elseif (!empty($td_logo_title)) {
    $td_logo_title = ' title="' . $td_logo_title . '"';
}

// H1 on logo when there's no title with H1 in page
$td_use_h1_logo = false;
if ( ( is_front_page() || is_home() ) && td_util::get_option('tds_h1_on_logo') != 'hide' ) {
    $td_use_h1_logo = true;
}


if (!empty($td_mobile_customLogo)) {

    // mobile logo here
    if (!empty($td_mobile_customLogoR)) {
        //if retina

        if($td_use_h1_logo === true) {
            echo '<h1 class="td-logo">';
        }
        ?>

        <a class="td-mobile-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="td-retina-data"
                 data-retina="<?php echo esc_attr($td_mobile_customLogoR) ?>"
                 src="<?php echo $td_mobile_customLogo ?>"
                 alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/>
        </a>
    <?php
        if($td_use_h1_logo === true) {
            echo '</h1>';
        }
    } else {
        //not retina
        if (!empty($td_mobile_customLogo)) {
            if($td_use_h1_logo === true) {
                echo '<h1 class="td-logo">';
            }
            ?>
            <a class="td-mobile-logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $td_mobile_customLogo ?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/>
            </a>
        <?php
            if($td_use_h1_logo === true) {
                echo '</h1>';
            }
        }
    }

} else {

    // header logo here
    if (!empty($td_header_logoR)) {
        //if retina
        if($td_use_h1_logo === true) {
            echo '<h1 class="td-logo">';
        }
        ?>

        <a class="td-header-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="td-retina-data"
                 data-retina="<?php echo esc_attr($td_header_logoR) ?>"
                 src="<?php echo $td_header_logo ?>"
                 alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/>
        </a>
    <?php
        if($td_use_h1_logo === true) {
            echo '</h1>';
        }
    } else {
        //not retina
        if (!empty($td_header_logo)) {
            if($td_use_h1_logo === true) {
                echo '<h1 class="td-logo">';
            }
            ?>
            <a class="td-header-logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $td_header_logo ?>" alt="<?php echo $td_logo_alt ?>"<?php echo $td_logo_title ?>/>
            </a>
        <?php
            if($td_use_h1_logo === true) {
                echo '</h1>';
            }
        } else { ?>
            <div class="td-logo-text-wrap">
                <span class="td-logo-text-container">
                    <a class="td-logo-wrap" href="<?php echo esc_url(home_url( '/' )); ?>">
                        <span class="td-logo-text"><?php if(!$td_logo_text) { echo TD_THEME_NAME; } else { echo $td_logo_text; } ?></span>
                        <span class="td-tagline-text"><?php if(!$td_tagline_text) { echo "DISCOVER THE ART OF PUBLISHING"; } else { echo $td_tagline_text; } ?></span>
                    </a>
                </span>
            </div>
	        <?php
        }
    }
}