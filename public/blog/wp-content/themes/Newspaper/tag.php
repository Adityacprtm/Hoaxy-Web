<?php get_header(); ?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                    'template' => 'tag',
                    'tag_name' => single_tag_title( '', false ),
                )); ?>
            </div>

            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <div class="td-page-header">
                            <h1 class="entry-title td-page-title">
                                <span>Tag: <?php single_tag_title() ?></span>
                            </h1>
                        </div>

                        <?php
                            get_template_part('loop-archive');
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