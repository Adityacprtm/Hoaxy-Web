<?php get_header(); ?>

    <div class="td-main-content-wrap td-container-wrap">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo tagdiv_page_generator::get_breadcrumbs(array(
                    'template' => 'search',
                )); ?>
            </div>

            <div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <div class="td-page-header">
                            <h1 class="entry-title td-page-title">
                                <?php
                                    if (get_search_query() != '') { ?>
                                        <span class="td-search-query"><?php echo get_search_query(); ?></span> - <span> <?php esc_html_e('search results', 'newspaper');?></span>
                                    <?php } else { ?>
                                        <span><?php esc_html_e('Search', 'newspaper');?></span>
                                <?php } ?>
                            </h1>

                            <div class="search-page-search-wrap">
                                <form method="get" class="td-search-form-widget" action="<?php echo esc_url(home_url( '/' )); ?>">
                                    <div role="search">
                                        <input class="td-widget-search-input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /><input class="wpb_button wpb_btn-inverse btn" type="submit" id="searchsubmit" value="<?php esc_html_e('Search', 'newspaper')?>" />
                                    </div>
                                </form>
                                <?php
                                    if (get_search_query() != '') { ?>
                                        <div class="td_search_subtitle">
                                            <?php esc_html_e('If you\'re not happy with the results, please do another search', 'newspaper');?>
                                        </div>
                                <?php } ?>
                            </div>
                        </div>

                        <?php
                            get_template_part('loop-archive' );
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