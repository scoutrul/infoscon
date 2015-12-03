<?php get_header(); ?>

<section class="page"> 

	<div class="container">

			<h1>СМИ</h1>

			<ul class="service_catalog">
				<?php query_posts('cat=15'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<? require('services_loop.php') ?>	
				<?php endwhile; ?>
			</ul>

	</div>

</section> <!-- / PAGE -->

<?php get_footer(); ?>