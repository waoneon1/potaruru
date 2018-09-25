<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
	
defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>


<?php 
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
// do_action( 'woocommerce_before_main_content' );

?>
<section class="hero" style="background-image: url('https://i.ytimg.com/vi/D3pYbbA1kfk/maxresdefault.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="hero-block text-left">
			<h2 class="hero-title">Potaruru <?php woocommerce_page_title() ?></h2>
			<p>Potaruru store, mods & add-ons - to make your gaming experience perfect</p>
			<a class="btn btn-outline-default btn-shadow m-l-10 btn-md btn-rounded btn-lg" href="#" target="_blank" role="button">
				Chart <i class="fa fa-shopping-cart"></i>
			</a>
		</div>
	</div>
</section>

<section class="p-t-30">
	<div class="container">
		<?php
		if ( woocommerce_product_loop() ) {

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked wc_print_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			?>
			<div class="toolbar-custom">
				<div class="pagination-results">
					<?php do_action( 'woocommerce_before_shop_loop' ) ?>	
				</div>	
			</div>

			<div class="row products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>" style="margin-bottom: 30px">
				<!-- <ul class="products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>"> -->
				<?php if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
						wc_get_template_part( 'content', 'product' );
					}
				} ?>
				<!-- </ul> -->
			</div>

			<div class="pagination-results m-t-0">
				<?php woocommerce_result_count() ?>
				<?php do_action( 'woocommerce_after_shop_loop' ) ?>
			</div>

		<?php } else {
			/**
			 * Hook: woocommerce_no_products_found.
			 *
			 * @hooked wc_no_products_found - 10
			 */
			do_action( 'woocommerce_no_products_found' );
		} ?>
	</div>
</section>

<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
// do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
?>

<?php get_footer( 'shop' ) ?>
