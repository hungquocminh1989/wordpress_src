<?php get_header(); ?>
<div>
	<?php
		if(is_active_sidebar('sidebar-1') == TRUE){
			dynamic_sidebar('sidebar-1');
		}
	?>
	N?i dung page.
</div>
<a href="#" class="click_popup">Th�ng b�o</a>
<a id="result_ajax">None</a>
<?php get_footer(); ?>