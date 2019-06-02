<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE SETTING
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $product;

add_action('woocommerce_sidebar','woocommerce_get_sidebar');
add_action('repo_right_sidebar','repo_right_sidebar');
add_action('repo_woo_loop_product_thumbnail','woocommerce_template_loop_product_thumbnail');
add_action('repo_woo_loop_product_title','repo_woo_loop_product_title');
add_action('repo_woo_loop_product_price','woocommerce_template_loop_price');
add_action('repo_woo_loop_product_add_to_cart','woocommerce_template_loop_add_to_cart');

//add_filter('woocommerce_loop_add_to_cart_link','abc',1,3);

function woocommerce_get_sidebar(){
	get_template_part('inc/content/bottom-section');
}

function repo_right_sidebar(){
	get_template_part('inc/content/product-right-section');
}

function repo_woo_loop_product_title(){
	echo '<h4 class="pt-1"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
}

function abc($a1,$a2,$a3){
	/*repoDebugVar($a1);
	repoDebugVar($a2);
	repoDebugVar($a3);
	die();*/
}
