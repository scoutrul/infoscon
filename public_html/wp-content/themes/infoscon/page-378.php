<!-- услуги/разрешения на частоты -->

<?php get_header(); ?>

<section class="page"> 

	<div class="container">

	<?php 
		if (have_posts()): while (have_posts()): the_post(); 
		the_title();
		the_content();
		endwhile; endif; 
	?>

			<ul class="service_catalog">
				<?php query_posts('cat=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<? require('services_loop.php') ?>	
				<?php endwhile; ?>
			</ul>

	</div>

</section> <!-- / PAGE -->

<?php get_footer(); ?>