			<!--...-->
		</main>
		<?php 
			if (has_nav_menu('bottom-menu') === TRUE){
			     wp_nav_menu(array(
			     	'theme_location' => 'bottom-menu',
			     	'menu_class' => 'css_class'
			     ));
			}
		?>
		<?php wp_footer(); ?>
	</body>
</html>