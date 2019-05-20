<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (is_admin()) return;
add_action('wp_enqueue_scripts', function(){
	
	//Load Defautl
	repoLoadTemplate();	
	
	//Load style.css Wordpress, it's use overide
	wp_enqueue_style('style',get_stylesheet_uri());	

}, 99);
function repoLoadTemplate(){
	wp_enqueue_style( '1' , TEMPLATE_URL . "/public/css/toystore-template.webflow.d76cf7e67.css");
	//wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/html5shiv.min.js");
	wp_enqueue_script('2' , TEMPLATE_URL . "/public/js/jquery-3.3.1.min.js",NULL,NULL,TRUE);
	//wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/placeholders.min.js");
	wp_enqueue_script('3' , TEMPLATE_URL . "/public/js/webflow.994f4272d.js",NULL,NULL,TRUE);
	wp_enqueue_script('4' , TEMPLATE_URL . "/public/js/webfont.js");
}