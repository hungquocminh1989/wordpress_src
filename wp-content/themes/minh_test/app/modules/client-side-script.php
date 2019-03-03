<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (is_admin()) return;
add_action('wp_enqueue_scripts', function(){
	//Inlcude CSS
	wp_enqueue_style( 'bootstrap-3.3.7' , "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
	wp_enqueue_style( 'main' , THEME_URI . "/resources/assets/css/main.css");
	wp_enqueue_style( 'bootstrap-dialog-css' , THEME_URI . "/resources/assets/librarys/bootstrap3-dialog/css/bootstrap-dialog.css");
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	//Include JS
	wp_enqueue_script( 'bootstrap-js-3.3.7' , "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'));
	wp_enqueue_script('main' , THEME_URI . "/resources/assets/js/main.js"  , array('jquery'));
	wp_enqueue_script('bootstrap-dialog-js' , THEME_URI . "/resources/assets/librarys/bootstrap3-dialog/js/bootstrap-dialog.js"  , array('jquery'));

}, 99);