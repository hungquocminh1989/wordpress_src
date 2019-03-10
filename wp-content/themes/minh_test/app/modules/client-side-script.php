<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (is_admin()) return;
add_action('wp_enqueue_scripts', function(){
	
	//Load Defautl
	repoLoadDefaultCss();
	repoLoadDefaultScript();
	
	//Load Template
	repoLoadTemplateCss();
	repoLoadTemplateScript();
	
	//Load style.css Wordpress, it's use overide
	wp_enqueue_style('style',get_stylesheet_uri());	

}, 99);

function repoLoadTemplateCss(){
		
	wp_enqueue_style( '1' , THEME_URI . "/resources/assets/bushido_template/masterslider/style/masterslider.css");
	wp_enqueue_style( '2' , THEME_URI . "/resources/assets/bushido_template/css/styles.css");
	wp_enqueue_style( '3' , THEME_URI . "/resources/assets/bushido_template/css/colors/color-default.css");
	
}

function repoLoadTemplateScript(){
	
	wp_enqueue_script('main' , THEME_URI . "/resources/assets/bushido_template/js/libs/modernizr.custom.js");
	
}

function repoLoadDefaultCss(){
	
	wp_enqueue_style( 'bootstrap.min' , THEME_URI . "/resources/assets/default/css/bootstrap/bootstrap.min.css");
	//wp_enqueue_style( 'bootstrap-dialog' , THEME_URI . "/resources/assets/librarys/bootstrap3-dialog/css/bootstrap-dialog.css");
	
}

function repoLoadDefaultScript(){
	
	wp_enqueue_script( 'bootstrap.min' , THEME_URI . "/resources/assets/default/js/bootstrap/bootstrap.min.js", array('jquery'));
	//wp_enqueue_script('bootstrap-dialog' , THEME_URI . "/resources/assets/librarys/bootstrap3-dialog/js/bootstrap-dialog.js");
	
}