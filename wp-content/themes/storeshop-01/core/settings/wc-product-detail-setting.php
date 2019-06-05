<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE SETTING
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $product;

/**
* Product Detail Hook
*/
add_action('repo_woo_single_product_breadcrumb','woocommerce_breadcrumb');
add_action('repo_woo_single_product_images','woocommerce_show_product_images');
add_action('repo_woo_single_product_title','woocommerce_template_single_title');
add_action('repo_woo_single_product_price','woocommerce_template_single_price');
add_action('repo_woo_single_product_description','repo_woo_single_product_description');
add_action('repo_woo_single_product_add_to_cart','woocommerce_template_single_add_to_cart');
add_action('repo_woo_single_product_short_description','repo_woo_single_product_short_description');

/**
* Product Detail Filter
*/
add_filter('woocommerce_single_product_image_thumbnail_html','repo_add_li_tag');
//add_filter('woocommerce_gallery_thumbnail_size','repo_gallery_thumbnail_size');

/**
* Functions Hook
*/
function repo_woo_single_product_description() {
	wc_get_template( 'single-product/repo_description.php' );
}

function repo_woo_single_product_short_description(){
	wc_get_template( 'single-product/short-description.php' );
}

/**
* Functions Filter
*/
function repo_add_li_tag($html){
	$html = str_replace('<div','<li',$html);
	$html = str_replace('</div>','</li>',$html);
	return $html;
}
