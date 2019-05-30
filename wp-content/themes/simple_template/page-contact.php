<?php defined( 'ABSPATH' ) || exit; ?>

<?php get_header(); ?>
<div>
	<?php
		if(is_active_sidebar('sidebar-1') == TRUE){
			dynamic_sidebar('sidebar-1');
		}
	?>
    
    <!--Page Content-->
    <div class="page-content">
		Page contact.
    </div>	
</div>
<?php get_footer(); ?>
