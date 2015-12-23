<? get_header(); ?>

<section class="page"> 

	<div class="container">

			<h1><?php single_cat_title( '', true ); ?></h1>

			<ul class="service_catalog">
				<? $catcat = 'cat='.the_category_ID(false); 
				query_posts($catcat); ?>
				<? while (have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>
						
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>	

						<div class="services_readmore">
							<a href="<?php the_permalink(); ?>"><span>Подробнее</span></a>
						</div>
							<? 
								echo (get_post_meta($post->ID, 'days', true)) ? '<div class="services_days">Срок: до <span>'.get_post_meta($post->ID, 'days', true).'</span> дней</div>' : "-"; 
							?>

							<? 
								echo (get_post_meta($post->ID, 'price', true)) ? '<div class="services_price">Цена: от <span>'.get_post_meta($post->ID, 'price', true).'</span> рублей</div>' : "-";
							?>
					</li>	
					
				<? endwhile; ?>
			</ul>

	</div>

</section> <!-- / PAGE -->

<? get_footer(); ?>