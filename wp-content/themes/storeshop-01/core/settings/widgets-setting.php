<?php
if (!defined('ABSPATH')) die('Direct access forbidden.');
if (!is_admin()) return;

add_action( 'after_setup_theme',  function(){
	
});

//Load widget
add_action( 'widgets_init', 'repo_LoadWidgets');

function repo_LoadWidgets(){
	
	register_widget( 'Foo_Widget' );
	
}