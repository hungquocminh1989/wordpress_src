<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE SETTING
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $product;

/**
* Product Hook
*/
add_action('woocommerce_sidebar','woocommerce_get_sidebar');
add_action('repo_right_sidebar','repo_right_sidebar');
add_action('repo_woo_loop_product_thumbnail','woocommerce_template_loop_product_thumbnail');
add_action('repo_woo_loop_product_title','repo_woo_loop_product_title');
add_action('repo_woo_loop_product_price','woocommerce_template_loop_price');
add_action('repo_woo_loop_product_add_to_cart','woocommerce_template_loop_add_to_cart');

/**
* Product Filter
*/
add_filter('single_product_archive_thumbnail_size','repo_woo_filter_single_product_thumbnail_size');
add_filter('woocommerce_breadcrumb_defaults','repo_filter_woocommerce_breadcrumb_defaults');

/**
* Product detail Hook
*/
add_action('repo_woo_single_product_breadcrumb','woocommerce_breadcrumb');
add_action('repo_woo_single_product_images','woocommerce_show_product_images');
add_action('repo_woo_single_product_title','woocommerce_template_single_title');
add_action('repo_woo_single_product_price','woocommerce_template_single_price');
add_action('repo_woo_single_product_description','woocommerce_upsell_display');
add_action('repo_woo_single_product_add_to_cart','woocommerce_template_single_add_to_cart');

/**
* Product detail Filter
*/
add_filter('woocommerce_single_product_image_thumbnail_html','repo_add_li_tag');
//add_filter('woocommerce_gallery_thumbnail_size','repo_gallery_thumbnail_size');

/**
* Functions Hook
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

/**
* Functions Filter
*/
function repo_woo_filter_single_product_thumbnail_size($size){
	$size = 'img_100_200';
	
	return $size;
}

function repo_filter_woocommerce_breadcrumb_defaults($arr){
	return array(
		'delimiter'   => '<i>|</i>',
		'wrap_before' => '<ul class="w3_short">',
		'wrap_after'  => '</ul>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}

function repo_add_li_tag($html){
	$html = str_replace('<div','<li',$html);
	$html = str_replace('</div>','</li>',$html);
	return $html;
}
