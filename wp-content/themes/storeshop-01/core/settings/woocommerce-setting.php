<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE SETTING
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $product;

/**
* Product
*/
add_action('woocommerce_sidebar','woocommerce_get_sidebar');
add_action('repo_right_sidebar','repo_right_sidebar');
add_action('repo_woo_loop_product_thumbnail','woocommerce_template_loop_product_thumbnail');
add_action('repo_woo_loop_product_title','repo_woo_loop_product_title');
add_action('repo_woo_loop_product_price','woocommerce_template_loop_price');
add_action('repo_woo_loop_product_add_to_cart','woocommerce_template_loop_add_to_cart');

/**
* Product detail
*/


function woocommerce_get_sidebar(){
	get_template_part('inc/content/bottom-section');
}

function repo_right_sidebar(){
	get_template_part('inc/content/product-right-section');
}

function repo_woo_loop_product_title(){
	echo '<h4 class="pt-1"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
}
