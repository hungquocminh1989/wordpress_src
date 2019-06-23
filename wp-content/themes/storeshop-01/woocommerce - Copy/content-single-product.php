<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

do_action( 'storeshop01_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>S</span>ingle
			<span>P</span>age</h3>
		<!-- //tittle heading -->
		<div class="row">
			<div class="col-lg-5 col-md-8 single-right-left ">
				<div class="grid images_3_of_2">
					<?php
					/**
					 * Hook: storeshop01_single_product_images.
					 *
					 * @hooked woocommerce_show_product_images
					 */
					do_action( 'storeshop01_single_product_images' );
					?>
				</div>
			</div>

			<div class="col-lg-7 single-right-left simpleCart_shelfItem">
				<!--<h3 class="mb-3">Samsung Galaxy J7 Prime (Gold, 16 GB) (3 GB RAM)</h3>-->
				<?php
				/**
				 * Hook: storeshop01_single_product_title.
				 *
				 * @hooked woocommerce_template_single_title
				 */
				do_action( 'storeshop01_single_product_title' );
				?>
				
				<p class="mb-3">
					<!--<span class="item_price">$200.00</span>
					<del class="mx-2 font-weight-light">$280.00</del>-->
					<?php
					/**
					 * Hook: storeshop01_single_product_price.
					 *
					 * @hooked woocommerce_template_single_price
					 */
					do_action( 'storeshop01_single_product_price' );
					?>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<!--<ul>
						<li class="mb-3">
							Cash on Delivery Eligible.
						</li>
						<li class="mb-3">
							Shipping Speed to Delivery.
						</li>
						<li class="mb-3">
							EMIs from $655/month.
						</li>
						<li class="mb-3">
							Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
						</li>
					</ul>-->
					<?php
					/**
					 * Hook: storeshop01_single_product_short_description.
					 *
					 * @hooked storeshop01_single_product_short_description
					 */
					do_action( 'storeshop01_single_product_short_description' );
					?>
				</div>
				<div class="product-single-w3l">
					<?php
					/**
					 * Hook: storeshop01_single_product_description.
					 *
					 * @hooked woocommerce_upsell_display
					 */
					do_action( 'storeshop01_single_product_description' );
					?>
				</div>
				
				<div class="occasion-cart">
					<?php
					/**
					 * Hook: storeshop01_single_product_add_to_cart.
					 *
					 * @hooked woocommerce_template_single_add_to_cart
					 */
					do_action( 'storeshop01_single_product_add_to_cart' );
					?>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- //Single Page -->

<?php do_action( 'storeshop01_after_single_product' ); ?>
