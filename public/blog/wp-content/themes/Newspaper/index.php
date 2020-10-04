<?php

if (!defined('ABSPATH')) {
    die('No direct access allowed');
}

get_header(); 

?>

<div class="td-main-content-wrap td-container-wrap">
    <div class="td-container td-blog-index">
        <div class="td-crumb-container">
            <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                'template' => 'home',
            )); ?>
        </div>

        <div class="td-pb-row">
            <div class="td-pb-span8 td-main-content">
                <div class="td-ss-main-content">
                    <?php
                        get_template_part('loop' );
                        tagdiv_page_generator::get_pagination();
                    ?>
                </div>
            </div>

            <div class="td-pb-span4 td-main-sidebar">
                <div class="td-ss-main-sidebar">
                    <?php dynamic_sidebar( 'td-default' ) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>