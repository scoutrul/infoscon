<?php get_header(); ?>


<!-- Цены -->


<section class="page  page-services"> 
	<div class="container">

		<div class="description">
			<?php 
				if (have_posts()): while (have_posts()): the_post(); 
				the_content();
				endwhile; endif; 
				wp_reset_query(); 
			?>
		</div>


		
		<?php include('pricetable.php'); ?>

		<?php include('steps.php');?>

	</div>

</section> <!-- / PAGE -->


<?php get_footer(); ?>