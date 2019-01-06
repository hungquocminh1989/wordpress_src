<?php
add_action( 'after_setup_theme',  function(){
	
	add_theme_support('title-tag');

	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');

	load_theme_textdomain('mmen', THEME_PATH . '/resources/lang');

});

