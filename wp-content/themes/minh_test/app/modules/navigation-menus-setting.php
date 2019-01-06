<?php
add_action( 'after_setup_theme',  function(){

	register_nav_menus(array(
		'top-menu' 		=> THEME_TEXT_START . __('Top Navigation') . THEME_TEXT_END,
		'bottom-menu' 	=> THEME_TEXT_START . __('Bottom Navigation') . THEME_TEXT_END,
	));

});

