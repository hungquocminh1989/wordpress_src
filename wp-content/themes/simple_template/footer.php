		<!--End Main-->
		</main>
		<?php 
			if (has_nav_menu('bottom-menu') === TRUE){
			     wp_nav_menu(array(
			     	'theme_location' => 'bottom-menu',
			     	'menu_class' => 'css_class'
			     ));
			}
		?>
		<?php //get_template_part('template-parts/footer/footer');?>
		<?php wp_footer(); ?>
	</body>
</html>