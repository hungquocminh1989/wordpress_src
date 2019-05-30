<?php
/*
|--------------------------------------------------------------------------
| REST API
|-------------------------------------------------------------------------- 
*/
defined( 'ABSPATH' ) || exit;

function my_awesome_func($request) {
	
	echo "<pre>";
	var_dump($request->get_params());	
	die();

	$posts = get_posts( array(
		'author' => $data['id'],
	) );
 	
	if ( empty( $posts ) ) {
		return new WP_Error( 'no_author', 'Invalid author', array( 'status' => 404 ) );
	}
	/*if ( empty( $posts ) ) {
		return null;
	}*/
 
  return $posts[0]->post_title;
}

add_action('rest_api_init', function () {
	register_rest_route('myplugin/v1', '/author/(?P<id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'my_awesome_func',
	));
});