<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE TEMPLATE CUSTOMIZE FUNCTIONS
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'storeshop01_archive_content' ) ) {

	function storeshop01_archive_content() {
		apply_filters( 'storeshop01_show_page_title');
		do_action( 'storeshop01_archive_description' );
		if ( woocommerce_product_loop() ) 
		{
			do_action( 'storeshop01_before_shop_loop' );
			woocommerce_product_loop_start();
			if( wc_get_loop_prop( 'total' ) )
			{
				while ( have_posts() ){
					the_post();
					wc_get_template_part( 'content', 'product' );
				}
			}
			woocommerce_product_loop_end();
			do_action( 'storeshop01_after_shop_loop' );
		}
		else{
			do_action( 'storeshop01_no_products_found' );
		}
	}
	
}

if ( ! function_exists( 'storeshop01_single_content' ) ) {

	function storeshop01_single_content() {
		if ( is_singular( 'product' ) ) {
			while ( have_posts() ) {
				the_post();
				wc_get_template_part( 'content', 'single-product' );
			}
		}
	}
	
}