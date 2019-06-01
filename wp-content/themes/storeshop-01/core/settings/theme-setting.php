<?php
defined( 'ABSPATH' ) || exit;
if (!is_admin()) return;

add_action( 'after_setup_theme', 'repoSetupTheme');
add_action('switch_theme', 'repoDeactivateTheme');
add_action('after_switch_theme', 'repoActiveTheme');

function repoSetupTheme(){
	add_theme_support('title-tag');

	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');
	add_image_size('img_215_170',215,170,TRUE);
	add_image_size('img_253_187',253,187,TRUE);
	add_image_size('img_258_185',258,185,TRUE);
	add_image_size('img_383_265',383,265,TRUE);
	add_image_size('img_400_185',400,185,TRUE);

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');
	add_theme_support( 'woocommerce' );

	//load_theme_textdomain('mmen', TEMPLATE_DIRECTORY . '/resources/lang');
}

function repoActiveTheme(){
	 
}

function repoDeactivateTheme(){
	 
}