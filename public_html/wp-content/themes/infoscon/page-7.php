<?php get_header(); ?>


<!-- Услуги -->



<section class="page  page-services"> 
	
	<?php 
		if (have_posts()): while (have_posts()): the_post(); 
		the_content();
		endwhile; endif; 
	?>

	<div class="container">
			<ul>
			<h2>Лицензии на услуги связи</h2>
				<?php query_posts('cat=12'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Телематические услуги связи</h2>
				<?php query_posts('cat=5'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензирование услуг телефонии</h2>
				<?php query_posts('cat=7'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензии на радио-связь</h2>
				<?php query_posts('cat=10'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензии на услуги вещания</h2>
				<?php query_posts('cat=6'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензирование передачи данных</h2>
				<?php query_posts('cat=9'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Прочие</h2>
				<?php query_posts('cat=11'); ?>
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; endif; ?>
			</ul>








	</div>

</section> <!-- / PAGE -->










<?php get_footer(); ?>