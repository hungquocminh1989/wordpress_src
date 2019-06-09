<?php
/*
|--------------------------------------------------------------------------
| WOOCOMMERCE SETTING
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

global $woocommerce;
global $product;

/**
* Checkout Hook
*/

/**
* Checkout Filter
*/
add_filter('woocommerce_checkout_fields','repo_filter_custome_fields_billing');

/**
* Functions Hook
*/

/**
* Functions Filter
*/
function repo_filter_custome_fields_billing($fields){
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