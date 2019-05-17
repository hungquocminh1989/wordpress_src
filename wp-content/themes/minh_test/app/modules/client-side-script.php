<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (is_admin()) return;
add_action('wp_enqueue_scripts', function(){
	
	//Load Defautl
	//repoLoadDefaultCss();
	//repoLoadDefaultScript();
	
	//Load Template
	//repoLoadTemplateCss();
	//repoLoadTemplateScript();
	
	//wp_enqueue_style( '1' , TEMPLATE_FW7_URL . "/css/framework7.bundle.min.css");
	//wp_enqueue_script( '2' , TEMPLATE_FW7_URL . "/js/framework7.bundle.min.js");
	
	repoLoadTestTemplate();
	
	//Load style.css Wordpress, it's use overide
	wp_enqueue_style('style',get_stylesheet_uri());	

}, 99);

function repoLoadTemplateCss(){
	wp_enqueue_style( '1' , TEMPLATE_BUSHIDO_URL . "/masterslider/style/masterslider.css");
	wp_enqueue_style( '2' , TEMPLATE_BUSHIDO_URL . "/css/styles.css");
	wp_enqueue_style( '3' , TEMPLATE_BUSHIDO_URL . "/css/colors/color-default.css");
}

function repoLoadTemplateScript(){
	
	wp_enqueue_script( '1' , TEMPLATE_BUSHIDO_URL . "/js/libs/modernizr.custom.js");
	wp_enqueue_script( '2' , TEMPLATE_BUSHIDO_URL . "/js/libs/jquery-1.11.1.min.js");
	wp_enqueue_script( '3' , TEMPLATE_BUSHIDO_URL . "/js/libs/jquery-ui-1.10.4.custom.min.js");
	wp_enqueue_script( '4' , TEMPLATE_BUSHIDO_URL . "/js/libs/jquery.easing.min.js");
	wp_enqueue_script( '5' , TEMPLATE_BUSHIDO_URL . "/js/plugins/bootstrap.min.js");
	wp_enqueue_script( '6' , TEMPLATE_BUSHIDO_URL . "/js/plugins/smoothscroll.js");
	wp_enqueue_script( '7' , TEMPLATE_BUSHIDO_URL . "/js/plugins/jquery.validate.min.js");
	wp_enqueue_script( '8' , TEMPLATE_BUSHIDO_URL . "/js/plugins/icheck.min.js");
	wp_enqueue_script( '9' , TEMPLATE_BUSHIDO_URL . "/js/plugins/jquery.placeholder.js");
	wp_enqueue_script( '10' , TEMPLATE_BUSHIDO_URL . "/js/plugins/jquery.stellar.min.js");
	wp_enqueue_script( '11' , TEMPLATE_BUSHIDO_URL . "/js/plugins/jquery.touchSwipe.min.js");
	wp_enqueue_script( '12' , TEMPLATE_BUSHIDO_URL . "/js/plugins/jquery.shuffle.min.js");
	wp_enqueue_script( '13' , TEMPLATE_BUSHIDO_URL . "/js/plugins/lightGallery.min.js");
	wp_enqueue_script( '14' , TEMPLATE_BUSHIDO_URL . "/js/plugins/owl.carousel.min.js");
	wp_enqueue_script( '15' , TEMPLATE_BUSHIDO_URL . "/js/plugins/masterslider.min.js");
	wp_enqueue_script( '16' , TEMPLATE_BUSHIDO_URL . "/mailer/mailer.js");
	wp_enqueue_script( '17' , TEMPLATE_BUSHIDO_URL . "/js/scripts.js");
	
}

function repoLoadDefaultCss(){
	
	wp_enqueue_style( 'bootstrap.min' , TEMPLATE_URL . "/resources/assets/default/css/bootstrap/bootstrap.min.css");
	//wp_enqueue_style( 'bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/librarys/bootstrap3-dialog/css/bootstrap-dialog.css");
	
}

function repoLoadDefaultScript(){
	
	wp_enqueue_script( 'bootstrap.min' , TEMPLATE_URL . "/resources/assets/default/js/bootstrap/bootstrap.min.js", array('jquery'));
	wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/librarys/bootstrap3-dialog/js/bootstrap-dialog.js");
	
}

function repoLoadTestTemplate(){
	wp_enqueue_style( '1' , TEMPLATE_URL . "/resources/assets/shop_template_001/css/toystore-template.webflow.d76cf7e67.css");
	//wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/html5shiv.min.js");
	wp_enqueue_script('2' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/jquery-3.3.1.min.js",NULL,NULL,TRUE);
	//wp_enqueue_script('bootstrap-dialog' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/placeholders.min.js");
	wp_enqueue_script('3' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/webflow.994f4272d.js",NULL,NULL,TRUE);
	wp_enqueue_script('4' , TEMPLATE_URL . "/resources/assets/shop_template_001/js/webfont.js");
}