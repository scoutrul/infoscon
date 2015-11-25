<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()): the_post(); ?>

<section class="post">								
	<div class="container">
		<h1><?php the_title(); ?></h1>

		<div class="post_content"><?php the_content(); ?></div>
			<?php
						if( get_post_meta($post->ID, 'price', true) ) {?>
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
		<div class="post_order">Заказать</div>


	</div>

	<div>
		<i>Нам нравится то, что мы делаем, и <b>мы будем рады быть Вам полезными</b> в развитии Вашего бизнеса.</i><br>
		<b>Контактный телефон:</b> 8 (985) 126-43-14 <br>
		<b>E-mail:</b> <a href="mailto:info@infoscon.ru">info@infoscon.ru</a>
	</div>
</section>

<?php endwhile; endif; ?>





<?php get_footer(); ?>