					<li>
						<a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>
						
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>	

						<div class="services_readmore">
							<a href="<?php the_permalink(); ?>"><span>Подробнее</span></a>
						</div>
							<? 
								echo (get_post_meta($post->ID, 'days', true)) ? '<div class="services_days">Сроки: '.get_post_meta($post->ID, 'days', true).' дней</div>' : "-"; 
							?>

							<? 
								echo (get_post_meta($post->ID, 'price', true)) ? '<div class="services_price">Цена: от '.get_post_meta($post->ID, 'price', true).' рублей</div>' : "-";
							?>
					</li>	
 