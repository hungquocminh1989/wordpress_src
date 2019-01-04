<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (is_admin()) return;
add_action('wp_enqueue_scripts', function(){
	wp_enqueue_style( 'main' , THEME_URI . "/resources/assets/css/main.css", array()        , "");
	wp_enqueue_script('main' , THEME_URI . "/resources/assets/js/main.js"  , array('jquery'), "", true);

}, 99);