<?php get_header(); ?>
<div>
	<?php
		if(is_active_sidebar('sidebar-1') == TRUE){
			dynamic_sidebar('sidebar-1');
		}
	?>
	Nội dung chính.
</div>
<?php get_footer(); ?>