<?php defined( 'ABSPATH' ) || exit; ?>

<?php get_header(); ?>

<?php get_template_part('inc/content/intro-section');?>

<?php get_template_part('inc/content/product-single-section');?>

<!-- top Products -->
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>O</span>ur
			<span>N</span>ew
			<span>P</span>roducts</h3>
		<!-- //tittle heading -->
		<div class="row">
		
			<?php get_template_part('inc/content/product-left-section');?>
			
			<?php get_template_part('inc/content/product-right-section');?>
		
		</div>
	</div>
</div>

<?php get_template_part('inc/content/bottom-section');?>
           
<?php get_footer(); ?>