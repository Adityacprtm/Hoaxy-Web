<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( td_util::is_amp() ) {
	get_header('amp');
} else {
	get_header();
}?>

<div class="td-main-content-wrap td-main-page-wrap">
	<div class="td-container">
		<div class="td-main-content">
			<?php
				woocommerce_breadcrumb();
				woocommerce_content();
			?>
		</div>
	</div>
</div> <!-- /.td-main-content-wrap -->

<?php
if ( td_util::is_amp() ) {
	get_footer('amp');
} else {
	get_footer();
}
?>