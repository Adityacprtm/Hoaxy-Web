<?php
/*  ----------------------------------------------------------------------------
    the default page template
 */
if ( td_util::is_amp() ) {
    get_header('amp');
} else {
    get_header();
}

//get theme panel variable for page comments side wide
$td_enable_or_disable_page_comments = td_util::get_option('tds_disable_comments_pages');

// the page is rendered using the page builder template (no sidebars)
if (have_posts()) {
	while ( have_posts() ) : the_post(); ?>

		<div class="td-main-content-wrap td-main-page-wrap">
			<div class="td-container">
				<div class="td-crumb-container">
					<?php echo td_page_generator_mob::get_page_breadcrumbs(get_the_title()); ?>
				</div>
				<div class="td-main-content">
					<div class="td-page-header">
						<h1 class="entry-title td-page-title">
							<span><?php the_title() ?></span>
						</h1>
					</div>
					<div class="td-page-content">

                        <?php

                        // get the mob theme status from post meta
                        $status = get_post_meta( get_the_ID(), 'tdm_grid_status', true );

		                if ( $status && $status === 'enabled' ) {
			                echo td_global_blocks::get_instance( 'td_block_big_grid_mob_1' )->render( array() );
                        }

                        ?>
                        <?php the_content(); ?>
					</div>
					<?php
					if($td_enable_or_disable_page_comments == 'show_comments') {
						comments_template('', true);
					}?>
				</div>
			</div>
		</div> <!-- /.td-main-content-wrap -->
	<?php endwhile;
}

if ( td_util::is_amp() ) {
    get_footer('amp');
} else {
    get_footer();
}
