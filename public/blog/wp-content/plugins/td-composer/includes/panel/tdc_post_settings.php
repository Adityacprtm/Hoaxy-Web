<?php
/**
 * Created by PhpStorm.
 * User: lucian
 * Date: 12/20/2018
 * Time: 4:41 PM
 */


/*
 * At runtime:
 * - the 'action' of the 'tdc-live-panel' frame is set to the tdcAdminIFrameUI._$liveIframe url parameter
 * - the 'tdc_content' hidden param is set to the current content (the content generated from the backbone structure)
 */

global $post;

?>


<form id="tdc-live-panel" method="post">

    <input type="hidden" id="td_magic_token" name="td_magic_token" value="<?php echo wp_create_nonce("td-update-panel") ?>"/>
    <input type="hidden" id="tdc_action" name="tdc_action" value="tdc_ajax_save_post">
    <input type="hidden" id="tdc_post_id" name="tdc_post_id" value="<?php echo $post->ID ?>">
    <input type="hidden" id="tdc_content" name="tdc_content" value="">
    <input type="hidden" id="tdc_single_post_content_width" name="tdc_single_post_content_width" value="">
    <input type="hidden" id="tdb_post_settings" name="tdc_customized" value="" data-changed="false">

    <?php if ( current_user_can("switch_themes") ) { ?>

        <!-- Posts AutoLoad -->
        <?php echo td_panel_generator::box_start('Articles Auto Loading', true); ?>

        <!-- Autoloading(Inf) Status -->
        <div class="td-box-row td-box-autoload-status">
            <div class="td-box-description">
                <span class="td-box-title" title="Enable or disable the articles auto loading on scrolling feature on article pages.">ENABLE AUTO LOADING</span>
            </div>
            <div class="td-box-control-full">
                <?php
                echo td_panel_generator::checkbox(array(
                    'ds' => 'td_option',
                    'option_id' => 'tdb_p_autoload_status',
                    'true_value' => 'on',
                    'false_value' => 'off'
                ));
                ?>
            </div>
        </div>

        <!-- Autoloading(Inf) Type -->
        <div class="td-box-row td-box-autoload-type">
            <div class="td-box-description">
                <span class="td-box-title">Auto Loading Type</span>
            </div>
            <div class="td-box-control-full">
                <?php
                echo td_panel_generator::radio_button_control(array(
                    'ds' => 'td_option',
                    'option_id' => 'tdb_p_autoload_type',
                    'values' => array(
                        array('text' => 'previous posts', 'val' => '', 'descr' => 'Previous published post - load posts that were published before the current post.'),
                        array('text' => 'next posts', 'val' => 'next', 'descr' => 'Next published post - load posts that were published after the current post.'),
                        array('text' => 'same category previous', 'val' => 'same_cat_prev', 'descr' => 'Same category previous - load older posts that are in the same category as the current post.'),
                        array('text' => 'same category next', 'val' => 'same_cat_next', 'descr' => 'Same category next - load newer posts that are in the same category as the current post.'),
                    )
                ));
                ?>
            </div>
        </div>

        <!-- Autoloading(Inf) Posts Count -->
        <div class="td-box-row td-box-autoload-count">
            <div class="td-box-description">
                <span class="td-box-title" title="Number of articles to load on scroll. Default value is 5 articles.">Limit Articles Number</span>
            </div>
            <div class="td-box-control-full">
                <?php
                echo td_panel_generator::input(array(
                    'ds' => 'td_option',
                    'placeholder' => '5',
                    'option_id' => 'tdb_p_autoload_count'
                ));
                ?>
            </div>
        </div>

        <!-- Autoloading(Inf) Posts > Page Scroll Percent For Next Post Loading Start  -->
        <div class="td-box-row td-box-autoload-scroll-percent">
            <div class="td-box-description">
                <span class="td-box-title" title="The percent from the page to load before the next post starts loading. Default value is 50%.">Page Scroll Percent</span>
            </div>
            <div class="td-box-control-full">
                <?php
                echo td_panel_generator::input(array(
                    'ds' => 'td_option',
                    'placeholder' => '50',
                    'option_id' => 'tdb_p_autoload_scroll_percent'
                ));
                ?>
            </div>
        </div>

        <?php echo td_panel_generator::box_end(); ?>

    <?php } ?>

</form>

