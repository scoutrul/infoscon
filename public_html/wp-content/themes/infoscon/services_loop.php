					<li>
						<a href="<?php the_permalink(); ?>"><h2 class="title"><?php the_title(); ?></h2></a>
						
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>	

						<div class="services_readmore">
							<a href="<?php the_permalink(); ?>"><span>Подробнее</span></a>
						</div>


						<?php
						/*
						if( get_post_meta($post->ID, 'price', true) ) {?>
						<div class="price">
							<span class="price-price"><?php echo get_post_meta($post->ID, 'price', true) ?></span>
						</div>	
						<?}
						*/?>
					</li>	
