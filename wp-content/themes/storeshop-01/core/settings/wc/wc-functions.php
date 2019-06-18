<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE TEMPLATE FUNCTIONS
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'repostore_content' ) ) {

	function repostore_content() {
		if ( is_singular( 'product' ) ) {
			while ( have_posts() ) {
				the_post();
				wc_get_template_part( 'content', 'single-product' );
			}
		} else {
			apply_filters( 'repostore_show_page_title', true );
			do_action( 'repostore_archive_description' );
			if ( woocommerce_product_loop() ) 
			{
				do_action( 'repostore_before_shop_loop' );
				woocommerce_product_loop_start();
				if( wc_get_loop_prop( 'total' ) )
				{
					while ( have_posts() ){
						the_post();
						wc_get_template_part( 'content', 'product' );
					}
				}
				woocommerce_product_loop_end();
				do_action( 'repostore_after_shop_loop' );
			}
			else{
				do_action( 'repostore_no_products_found' );
			}
		}
	}
}