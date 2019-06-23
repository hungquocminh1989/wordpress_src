<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-md-4 product-men mt-5">						
	<div class="men-pro-item simpleCart_shelfItem">
		<div class="men-thumb-item text-center">
			<img src="images/m1.jpg" alt="">
			<div class="men-cart-pro">
				<div class="inner-men-cart-pro">
					<a href="single.html" class="link-product-add-cart">Quick View</a>
				</div>
			</div>
		</div>
		<div class="item-info-product text-center border-top mt-4">
			<h4 class="pt-1">
				<a href="single.html">Samsung Galaxy J7</a>
			</h4>
			<div class="info-product-price my-2">
				<span class="item_price">$200.00</span>
				<del>$280.00</del>
			</div>
			<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
				<form action="#" method="post">
					<fieldset>
						<input type="hidden" name="cmd" value="_cart" />
						<input type="hidden" name="add" value="1" />
						<input type="hidden" name="business" value=" " />
						<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
						<input type="hidden" name="amount" value="200.00" />
						<input type="hidden" name="discount_amount" value="1.00" />
						<input type="hidden" name="currency_code" value="USD" />
						<input type="hidden" name="return" value=" " />
						<input type="hidden" name="cancel_return" value=" " />
						<input type="submit" name="submit" value="Add to cart" class="button btn" />
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>

