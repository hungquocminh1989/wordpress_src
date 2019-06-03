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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

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
			<!--<div class="col-lg-5 col-md-8 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="<?php echo TEMPLATE_URL; ?>/public/images/si1.jpg">
								<div class="thumb-image">
									<img src="<?php echo TEMPLATE_URL; ?>/public/images/si1.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
							</li>
							<li data-thumb="<?php echo TEMPLATE_URL; ?>/public/images/si2.jpg">
								<div class="thumb-image">
									<img src="<?php echo TEMPLATE_URL; ?>/public/images/si2.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
							</li>
							<li data-thumb="<?php echo TEMPLATE_URL; ?>/public/images/si3.jpg">
								<div class="thumb-image">
									<img src="<?php echo TEMPLATE_URL; ?>/public/images/si3.jpg" data-imagezoom="true" class="img-fluid" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>-->
			<?php
			/**
			 * Hook: repo_woo_single_product_images.
			 *
			 * @hooked woocommerce_show_product_images
			 */
			do_action( 'repo_woo_single_product_images' );
			?>

			<div class="col-lg-7 single-right-left simpleCart_shelfItem">
				<!--<h3 class="mb-3">Samsung Galaxy J7 Prime (Gold, 16 GB) (3 GB RAM)</h3>-->
				<?php
				/**
				 * Hook: repo_woo_single_product_title.
				 *
				 * @hooked woocommerce_template_single_title
				 */
				do_action( 'repo_woo_single_product_title' );
				?>
				
				<p class="mb-3">
					<!--<span class="item_price">$200.00</span>
					<del class="mx-2 font-weight-light">$280.00</del>-->
					<?php
					/**
					 * Hook: repo_woo_single_product_price.
					 *
					 * @hooked woocommerce_template_single_price
					 */
					do_action( 'repo_woo_single_product_price' );
					?>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
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
					</ul>
				</div>
				<div class="product-single-w3l">
					<p class="my-3">
						<i class="far fa-hand-point-right mr-2"></i>
						<label>1 Year</label>Manufacturer Warranty</p>
					<ul>
						<li class="mb-1">
							3 GB RAM | 16 GB ROM | Expandable Upto 256 GB
						</li>
						<li class="mb-1">
							5.5 inch Full HD Display
						</li>
						<li class="mb-1">
							13MP Rear Camera | 8MP Front Camera
						</li>
						<li class="mb-1">
							3300 mAh Battery
						</li>
						<li class="mb-1">
							Exynos 7870 Octa Core 1.6GHz Processor
						</li>
					</ul>
					<p class="my-sm-4 my-3">
						<i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
					</p>
				</div>
				<?php
				/**
				 * Hook: repo_woo_single_product_description.
				 *
				 * @hooked woocommerce_upsell_display
				 */
				do_action( 'repo_woo_single_product_description' );
				?>
				
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Samsung Galaxy J7 Prime" />
								<input type="hidden" name="amount" value="200.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>
				</div>
				<?php
				/**
				 * Hook: repo_woo_single_product_add_to_cart.
				 *
				 * @hooked woocommerce_template_single_add_to_cart
				 */
				do_action( 'repo_woo_single_product_add_to_cart' );
				?>
			</div>
		</div>
	</div>
</div>
<!-- //Single Page -->

<!--<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>-->

<?php do_action( 'woocommerce_after_single_product' ); ?>
