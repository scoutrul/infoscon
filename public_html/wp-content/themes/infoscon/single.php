<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()): the_post(); ?>

<section class="post">								
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<div class="post_content"><?php the_content(); ?></div>
			<?php
						if( get_post_meta($post->ID, 'price', true) ) {?>
						<div class="post_order">Заказать</div>
						<div class="price">
							<div class="price-text">
								<? 
								if( get_post_meta($post->ID, 'text', true)) {
										echo get_post_meta($post->ID, 'text', true);
									} 
								?> 
							</div>
							<div class="price-price">
								 <?
								 	echo get_post_meta($post->ID, 'price', true); 
								 ?>
							</div>
							 
						</div>	
			<?}?>
	</div>


</section>

<?php endwhile; endif; ?>





<?php get_footer(); ?>