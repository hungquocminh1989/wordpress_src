<?php
add_action( 'after_setup_theme',  function(){
	
	add_theme_support('title-tag');

	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support('post-thumbnails');

	// Add default posts and comments RSS feed links to head
	add_theme_support('automatic-feed-links');

	load_theme_textdomain('mmen', THEME_PATH . '/resources/lang');

	register_nav_menus(array(
		'top-menu' 		=> __('Top Navigation'),
		'bottom-menu' 	=> __('Bottom Navigation'),
	));
	
	register_sidebar(array(
		'name'          => 'Sidebar 1',
		'id'            => "sidebar-1",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	));

});

