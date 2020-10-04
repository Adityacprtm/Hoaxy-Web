<?php

load_template( TDC_PATH_LEGACY_COMMON . '/wp_booster/td_single_template_vars.php', true );

get_header();

global $loop_module_id, $loop_sidebar_position, $post, $td_sidebar_position;

//used if file exists in child theme
$td_child_theme_file_path = STYLESHEETPATH . '/loop-single.php';

$td_mod_single = new td_module_single($post);
?>
    <div class="td-main-content-wrap td-container-wrap">

        <div class="td-container td-post-template-default <?php echo esc_attr($td_sidebar_position) ?>">
            <div class="td-crumb-container"><?php echo td_page_generator::get_single_breadcrumbs($td_mod_single->title); ?></div>

            <div class="td-pb-row">
                <?php

                //the default template
                switch ($loop_sidebar_position) {
                    default: //sidebar right
                        ?>
                        <div class="td-pb-span8 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                if ( defined('TD_STANDARD_PACK' ) ) {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once(TDSP_THEME_PATH . '/loop-single.php');
                                } else {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once('loop-single.php');
                                }

                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'sidebar_left':
                        ?>
                        <div class="td-pb-span8 td-main-content <?php echo esc_attr($td_sidebar_position) ?>-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                if ( defined('TD_STANDARD_PACK' ) ) {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once(TDSP_THEME_PATH . '/loop-single.php');
                                } else {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once('loop-single.php');
                                }

                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <div class="td-pb-span4 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'no_sidebar':
                        td_global::$load_featured_img_from_template = 'td_1068x0';
                        ?>
                        <div class="td-pb-span12 td-main-content" role="main">
                            <div class="td-ss-main-content">
                                <?php
                                if ( defined('TD_STANDARD_PACK' ) ) {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once(TDSP_THEME_PATH . '/loop-single.php');
                                } else {
                                    if ( is_child_theme() && file_exists( $td_child_theme_file_path ) ) {
                                        require_once($td_child_theme_file_path);
                                    }
                                    require_once('loop-single.php');
                                }

                                comments_template('', true);
                                ?>
                            </div>
                        </div>
                        <?php
                        break;

                }
                ?>
            </div> <!-- /.td-pb-row -->
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->

<?php

get_footer();