<?php get_header(); ?>
<div>
	<?php
		if(is_active_sidebar('sidebar-1') == TRUE){
			dynamic_sidebar('sidebar-1');
		}
	?>
	Nội dung chính.
</div>
<a href="#" class="click_popup">Thông báo</a>
<a id="result_ajax">None</a>
<?php get_footer(); ?>