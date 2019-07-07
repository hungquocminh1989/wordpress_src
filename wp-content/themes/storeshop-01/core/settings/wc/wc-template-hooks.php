<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE TEMPLATE HOOKS
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

/**
* Hooks
*/
add_action('storeshop_loop_item_image','woocommerce_template_loop_product_thumbnail');
add_action('storeshop_loop_item_title','woocommerce_template_loop_product_title');
add_action('storeshop_loop_item_price','woocommerce_template_loop_price');
//remove_action();
/*add_action('storeshop01_sidebar','woocommerce_get_sidebar');
add_action('storeshop01_right_sidebar','get_product_right_sidebar');
add_action('storeshop01_loop_product_thumbnail','woocommerce_template_loop_product_thumbnail');
add_action('storeshop01_loop_product_title','get_loop_product_title');
add_action('storeshop01_loop_product_price','woocommerce_template_loop_price');
add_action('storeshop01_loop_product_add_to_cart','woocommerce_template_loop_add_to_cart');
add_action('storeshop01_breadcrumb','woocommerce_breadcrumb');
add_action('storeshop01_single_product_images','woocommerce_show_product_images');
add_action('storeshop01_single_product_title','woocommerce_template_single_title');
add_action('storeshop01_single_product_price','woocommerce_template_single_price');
add_action('storeshop01_single_product_description','get_single_product_description');
add_action('storeshop01_single_product_add_to_cart','woocommerce_template_single_add_to_cart');
add_action('storeshop01_single_product_short_description','get_single_product_short_description');*/

/**
* Filters
*/
/*add_filter('single_product_archive_thumbnail_size','apply_single_product_thumbnail_size');
add_filter('woocommerce_breadcrumb_defaults','apply_woocommerce_breadcrumb_defaults');
add_filter('woocommerce_single_product_image_thumbnail_html','apply_product_image_thumbnail_html');
//add_filter('woocommerce_gallery_thumbnail_size','repo_gallery_thumbnail_size');
add_filter('woocommerce_checkout_fields','apply_custome_fields_billing');*/