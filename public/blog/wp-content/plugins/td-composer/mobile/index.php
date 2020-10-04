<?php
/*  ----------------------------------------------------------------------------
    the blog index template
 */

if ( td_util::is_amp() ) {
    get_header('amp');
} else {
    get_header();
}

?>

<div class="td-main-content-wrap td-blog-index">
	<div class="td-container">
		<div class="td-crumb-container">
			<?php

			// Important! The main theme breadcrumbs settings are used
			echo td_page_generator_mob::get_home_breadcrumbs();

			?>
		</div>
		<div class="td-main-content">
			<?php
			locate_template('loop.php', true);

			echo td_page_generator_mob::get_pagination();

			?>
		</div>
	</div> <!-- /.td-container -->
</div> <!-- /.td-main-content-wrap -->

<?php

if ( td_util::is_amp() ) {
    get_footer('amp');
} else {
    get_footer();
}