<?php get_header();
    $current_category_obj = get_category(get_query_var('cat'));
?>

    <div class="td-category-header td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span12">
                    <div class="td-crumb-container">
                        <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                            'template' => 'category',
                            'category_obj' => $current_category_obj,
                        )); ?>
                    </div>

                    <h1 class="entry-title td-page-title"><?php printf( '%1$s', $current_category_obj->name ) ?></h1>

                    <?php if( category_description() != '' ) { ?>
                        <div class="td-category-description"><p><?php echo category_description() ?></p></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
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