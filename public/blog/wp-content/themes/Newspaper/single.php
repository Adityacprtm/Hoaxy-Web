<?php get_header();
    global $content_width;

    $content_width = 1068;
?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                    'template' => 'single',
                    'title' => get_the_title(),
                )); ?>
            </div>

            <div class="td-pb-row">
                <div class="td-pb-span12 td-main-content">
                    <div class="td-ss-main-content">
                        <?php
                        get_template_part('loop-single' );
                        comments_template('', true);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>