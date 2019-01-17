<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body>
		<?php 
			if (has_nav_menu('top-menu') === TRUE){
			     wp_nav_menu(array(
			     	'theme_location' => 'top-menu',
			     	'menu_class' => 'css_class'
			     ));
			}
		?>
		<main id="app" class="main">
		<!--Start Main-->