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
			print '<div class="post_order pricetable">Подробнее</div><br><br><br>
			<div align=center>Информационная линия: +7(985) 126-43-14</div><br><br>';
		}
		 ?>

	</div>

	<?php endwhile; endif; ?>

	<div class="single_footer">

		<?php include('steps.php');?>
		<?php include('features.php');?>

<?php 

		next_post_link('%link', 'Так же в этом разделе: %title', TRUE);
?>
	</div>
</section>





<?php get_footer(); ?>