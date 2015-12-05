<?php get_header(); ?>

<section class="page"> 

	<div class="container">

			<h1><?php single_cat_title( '', true ); ?></h1>

			<ul class="service_catalog">
				<?php query_posts('cat=get_the_category()'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<? require('services_loop.php') ?>	
				<?php endwhile; ?>
			</ul>

	</div>

</section> <!-- / PAGE -->

<?php get_footer(); ?>