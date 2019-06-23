<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

get_template_part('inc/content/intro-section');

?>

<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<?php
			/**
			 * Hook: storeshop01_single_product_breadcrumb.
			 *
			 * @hooked woocommerce_breadcrumb
			 */
			do_action( 'storeshop01_breadcrumb' );
			?>
		</div>
	</div>
</div>

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
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<?php storeshop01_archive_content(); ?>
				</div>
			</div>
			<!-- //product left -->
			
			<?php
			/**
			* storeshop01_right_sidebar
			*/
			do_action( 'storeshop01_right_sidebar' );
			?>
		</div>
	</div>
</div>

<?php 
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'storeshop01_sidebar' );
?>

<?php
get_footer( 'shop' );
