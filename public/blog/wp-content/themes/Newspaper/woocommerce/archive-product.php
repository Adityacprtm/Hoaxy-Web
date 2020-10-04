<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.1
 */

do_action( 'tdc_woo_archive_product' );
if ( has_action( 'tdc_woo_archive_product' ) ) {
    return;
}

get_header();

?>
	<div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
		<div class="td-container tdc-content-wrap">
			<div class="td-pb-row">
                <div class="td-pb-span8 td-main-content">
                    <div class="td-ss-main-content">
                        <?php
                            //woocommerce_breadcrumb();
                            woocommerce_content();
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
	</div> <!-- /.td-main-content-wrap -->

<?php
get_footer();
?>