<!-- услуги/разрешения на частоты -->

<?php get_header(); ?>

<section class="page"> 

	<div class="container">

	<div class="description">
		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
			the_title('<h1>','</h1>');
			the_content();
			endwhile; endif; 
		?>
	</div>

	<ul class="service_catalog">
		<?php query_posts('cat=1'); ?>
		<?php while (have_posts()) : the_post(); ?>
			<? require('info_loop.php') ?>	
		<?php endwhile; ?>
		<?php wp_reset_query();?>
	</ul>

	</div>

</section> <!-- / PAGE -->

<?php get_footer(); ?>