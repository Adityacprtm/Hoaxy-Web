<?php
/**
 * Template use to render on the front end for attachment pages
 * - we start with the content context
 * tdb_state_template has a wp-query already, we only get in this template if a template is set, otherwise we load the
 * theme default template
 */
get_header();
global $wp_query;

if ( have_posts() ) {

    // save the content wp_query
    tdb_state_content::set_wp_query($wp_query);

    $wp_query = tdb_state_template::get_wp_query(); // set the global wp_query as the template one

    while ( have_posts() ) : the_post();

        ?>
        <div class="td-main-content-wrap td-container-wrap">
            <div class="tdc-content-wrap">
                <?php the_content(); ?>
            </div>
        </div>
        <?php

    endwhile;

    $wp_query = tdb_state_content::get_wp_query();

} else {
    echo td_page_generator::no_posts();
}

get_footer();
