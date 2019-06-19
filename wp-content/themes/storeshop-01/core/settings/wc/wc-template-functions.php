<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE TEMPLATE FUNCTIONS
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $woocommerce;
global $product;

function woocommerce_get_sidebar(){
	get_template_part('inc/content/bottom-section');
}

function get_product_right_sidebar(){
	get_template_part('inc/content/product-right-section');
}

function get_loop_product_title(){
	echo '<h4 class="pt-1"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
}

function apply_single_product_thumbnail_size($size){
	$size = 'img_100_200';
	return $size;
}

function apply_woocommerce_breadcrumb_defaults($arr){
	return array(
		'delimiter'   => '<i>|</i>',
		'wrap_before' => '<ul class="w3_short">',
		'wrap_after'  => '</ul>',
		'before'      => '<li>',
		'after'       => '</li>',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	);
}

function get_single_product_description() {
	wc_get_template( 'single-product/repo_description.php' );
}

function get_single_product_short_description(){
	wc_get_template( 'single-product/short-description.php' );
}

function apply_product_image_thumbnail_html($html){
	$html = str_replace('<div','<li',$html);
	$html = str_replace('</div>','</li>',$html);
	return $html;
}

function apply_custome_fields_billing($fields){
	//repoDebugVar($fields);die();
	/*unset($fields['billing']);
	$fields['billing'] = [
		'billing_fullname' => [			
			'type'              => 'text',
			'label'             => 'Ho Ten',
			'description'       => '',
			'placeholder'       => 'Ho Ten',
			'maxlength'         => 2,
			'required'          => TRUE,
			'autocomplete'      => false,
			'id'                => $key,
			'class'             => ['form-control'],
			'label_class'       => array(),
			'input_class'       => array(),
			'return'            => false,
			'options'           => array(),
			'custom_attributes' => array(),
			'validate'          => array(),
			'default'           => '',
			'autofocus'         => '',
			'priority'          => '',
		]
	];*/
	return $fields;
}