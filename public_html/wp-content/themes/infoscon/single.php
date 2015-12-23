<?php get_header(); ?>






<section class="post">								
	<div class="container">

	<?php if (have_posts()): while (have_posts()): the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<div class="post_content">
			<?php the_content(); ?>
		</div>

		<?php
						if( get_post_meta($post->ID, 'price', true) ) 
							{?>
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
							<?}

		if(!in_category(1)) {
			print '<div class="post_order">Заказать</div>';
		}
		 ?>

	</div>

	<?php endwhile; endif; ?>

	<div class="single_footer">

	<?php
		$query_info = new WP_Query('page_id=16'); 
			while($query_info->have_posts()) $query_info->the_post(); 
			the_content();
		wp_reset_query(); 
	?>

		<?
			if(!in_category(1)) {

				echo 	'<div class="post_order" style="width:100%"><h4 style="color: #0488EE">Заказать оформление/продление: <br>',
						the_title(),
						'</h4></div>';
			}
		?>

		<div class="single_footer_right">
			<i>"Нам нравится то, что мы делаем,<br>
			и <b>мы рады быть полезными Вам</b><br>
			в развитии бизнеса."</i><br>
			<b><i style="font-size: 80%;">Гениральный директор "ИнфоСвязь Консалтинг"</i></b><br><br>
		</div>

		<div class="single_footer_left">
			<b>Контактный телефон:</b> 8 (985) 126-43-14 <br>
			<b>E-mail:</b> <a href="mailto:info@infoscon.ru">info@infoscon.ru</a>
		</div>
	</div>
</section>







<?php get_footer(); ?>