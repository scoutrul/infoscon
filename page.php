<?php get_header(); ?>


<section class="page"> 
	<div class="container">
					
		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
			$image_id = get_post_thumbnail_id();
			$image_url = wp_get_attachment_image_src($image_id, 'large');
			$image_url = $image_url[0];
			$id = get_the_id();
		?>


		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>


		<?php endwhile; endif; ?>

	</div>
</section> <!-- / PAGE -->










<?php get_footer(); ?>