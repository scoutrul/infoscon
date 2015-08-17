					<li>
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="excerpt"><?php the_excerpt(); ?></div>	

						<div class="services_readmore"><a href="<?php the_permalink(); ?>">Подробнее</a></div>

						<div class="price">
							<span class="price-price"><?php echo get_post_meta($post->ID, 'price', true) ?></span>
						</div>	
					</li>	