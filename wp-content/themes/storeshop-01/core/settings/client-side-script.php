<?php
defined( 'ABSPATH' ) || exit;
if (is_admin()) return;

add_action('wp_enqueue_scripts', 'repoLoadEnqueueScripts', 99);
add_action('wp_print_footer_scripts', 'repoLoadTagScript', 99);

function repoLoadEnqueueScripts(){
	//Load Defautl
	repoLoadTemplate();	
	//Load style.css Wordpress, it's use overide
	wp_enqueue_style('style',get_stylesheet_uri());	
}

function repoLoadTemplate(){
	wp_enqueue_style( 'css1' , TEMPLATE_URL . "/public/css/bootstrap.css");
	wp_enqueue_style( 'css2' , TEMPLATE_URL . "/public/css/style.css");
	wp_enqueue_style( 'css3' , TEMPLATE_URL . "/public/css/fontawesome-all.css");
	wp_enqueue_style( 'css4' , TEMPLATE_URL . "/public/css/popuo-box.css");
	wp_enqueue_style( 'css5' , TEMPLATE_URL . "/public/css/menu.css");
	wp_enqueue_style( 'css6' , TEMPLATE_URL . "/public/css/flexslider.css");
	wp_enqueue_style( 'font1' , "//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext");
	wp_enqueue_style( 'font2' , "//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese");
	
	wp_enqueue_script('js1' , TEMPLATE_URL . "/public/js/jquery-2.2.3.min.js",NULL,NULL,TRUE);
	wp_enqueue_script('js2' , TEMPLATE_URL . "/public/js/jquery.magnific-popup.js",NULL,NULL,TRUE);
	wp_enqueue_script('js3' , TEMPLATE_URL . "/public/js/minicart.js",NULL,NULL,TRUE);
	wp_enqueue_script('js4' , TEMPLATE_URL . "/public/js/scroll.js",NULL,NULL,TRUE);
	wp_enqueue_script('js5' , TEMPLATE_URL . "/public/js/SmoothScroll.min.js",NULL,NULL,TRUE);
	wp_enqueue_script('js6' , TEMPLATE_URL . "/public/js/move-top.js",NULL,NULL,TRUE);
	wp_enqueue_script('js7' , TEMPLATE_URL . "/public/js/easing.js",NULL,NULL,TRUE);
	wp_enqueue_script('js8' , TEMPLATE_URL . "/public/js/bootstrap.js",NULL,NULL,TRUE);
	wp_enqueue_script('js9' , TEMPLATE_URL . "/public/js/imagezoom.js",NULL,NULL,TRUE);
	wp_enqueue_script('js10' , TEMPLATE_URL . "/public/js/jquery.flexslider.js",NULL,NULL,TRUE);
}

function repoLoadTagScript() {
    locate_template('/inc/script/index.php', TRUE);
    locate_template('/inc/script/product-single.php', TRUE);
}