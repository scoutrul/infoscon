<?php get_header(); ?>


		<section class="newsart">
			<section>
<!-- 				<h1>Новости и статьи</h1> -->
				<ul class="service_catalog newsart">
					<?php query_posts('cat=1&posts_per_page=3'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<? require('info_loop.php') ?>	
					<?php endwhile; ?>
					<?php wp_reset_query();?>

				</ul>
					<div style="width: 100%; text-align: right;"><a href="/informrazdel/">Архив статей</a></div>
			</section>
		</section>


		<section class="about">





			<?php include('pricetable.php'); ?>
			<?php include('steps.php');?>



			<?php
				$post_id = 51;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $queried_post->post_content;
			?>
	


			




		</section>
		
	



<?php get_footer(); ?>