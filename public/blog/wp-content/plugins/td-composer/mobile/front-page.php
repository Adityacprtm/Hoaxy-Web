<?php
/* Home page */

if ( td_util::is_amp() ) {
    get_header('amp');
} else {
    get_header();
}

// display - Your latest posts
// @see https://codex.wordpress.org/Function_Reference/is_home
if ('posts' == get_option('show_on_front')) {

    ?>
    <div class="td-main-content-wrap td-blog-index">
        <div class="td-container">
            <div class="td-crumb-container">
                <?php echo td_page_generator_mob::get_home_breadcrumbs(); ?>
            </div>
            <div class="td-main-content">
                <?php
                load_template( TDC_PATH . '/mobile/loop.php', true);
                echo td_page_generator_mob::get_pagination();
                ?>
            </div>
        </div> <!-- /.td-container -->
    </div> <!-- /.td-main-content-wrap -->
    <?php

// display - A static page
} elseif (('page' == get_option('show_on_front')) && is_front_page()) {

	//prepare the loop variables
	global $paged;

	$td_page = get_query_var('page') ? get_query_var('page') : 1; //rewrite the global var
    $td_paged = get_query_var('paged') ? get_query_var('paged') : 1; //rewrite the global var

    //paged works on single pages, page - works on homepage
    $paged = max( $td_page, $td_paged );

    $td_list_custom_title =__td('LATEST ARTICLES', TD_THEME_NAME);
    ?>

    <div class="td-main-content-wrap td-main-page-wrap">
        <?php

        // panel grid settings
        $tdm_home_grid = td_util::get_option('tdm_frontpage_grid');

        // the category id filter
        $tdm_frontpage_grid_cat_filter = td_util::get_option('tdm_frontpage_grid_cat_filter');

        // the panel filter type for the front page grid, if not set the 'featured' category filter type will be used
        $tdm_frontpage_grid_sort = td_util::get_option('tdm_frontpage_grid_sort');

        // the panel global posts limit for grids
        $tdm_grids_posts_limit = td_util::get_option('tdm_grids_posts_limit');

        // display Big Grid Mob 1 and the content at the top of the page
        if ( ( empty( $paged ) or $paged < 2 ) and $tdm_home_grid !== 'hide' ) { //show this only on the first page and only if the grid it's enabled from theme's panel
            if ( have_posts() ) { ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <div class="td-container">
                        <?php

                        // the block attributes
                        $block_atts = array();
                        $block_atts['limit'] = ( !empty( $tdm_grids_posts_limit ) ? $tdm_grids_posts_limit : 3 );
                        $block_atts['category_id'] = $tdm_frontpage_grid_cat_filter;
                        
                        if( empty( $tdm_frontpage_grid_sort ) && get_cat_ID(TD_FEATURED_CAT ) !== 0 ) {
	                        $block_atts['sort'] = 'featured';
                        } else {
                            // if the sort value is 'latest' we need to send am empty sort value to the block renderer
	                        $block_atts['sort'] = ( $tdm_frontpage_grid_sort === 'latest' ? '' : $tdm_frontpage_grid_sort );
                        }

                        echo td_global_blocks::get_instance( 'td_block_big_grid_mob_1' )->render( $block_atts );
                        
                        ?>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php }
        }
        ?>

        <div class="td-container td-pb-article-list td-main-content" role="main">
            <?php if ( empty( $paged ) or $paged < 2 ) { ?>
                <h4 class="block-title"><span><?php echo $td_list_custom_title; ?></span></h4>
            <?php }

            $posts_per_page = get_query_var('posts_per_page') ? get_query_var('posts_per_page') : 10;

            // the panel posts limit
            $tdm_frontpage_latest_articles_posts_limit = td_util::get_option('tdm_frontpage_latest_articles_posts_limit' );

            if ( !empty( $tdm_frontpage_latest_articles_posts_limit ) ) {
                $posts_per_page = $tdm_frontpage_latest_articles_posts_limit;
            }

            // posts offset
            $offset = '';
            $tdm_frontpage_latest_articles_posts_offset = td_util::get_option('tdm_frontpage_latest_articles_posts_offset');

            if ( $tdm_frontpage_grid_sort === 'latest' ) {
	            if ( empty( $paged ) or $paged < 2 ) {
		            $offset = ( !empty( $tdm_frontpage_latest_articles_posts_offset ) ? $tdm_frontpage_latest_articles_posts_offset : '' );
	            } else {
		            $offset = ( $paged - 1 ) * $posts_per_page;
	            }
            }

            // query used on Latest Articles section
            $wp_query_args = array(
                'ignore_sticky_posts' => 1,
                'post_status' => 'publish',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'offset' => $offset
            );
            query_posts($wp_query_args);

            load_template( TDC_PATH . '/mobile/loop.php', true);
            echo td_page_generator_mob::get_pagination();
            wp_reset_query();
            ?>
        </div>
    </div>
<?php

}

if ( td_util::is_amp() ) {
    get_footer('amp');
} else {
    get_footer();
}