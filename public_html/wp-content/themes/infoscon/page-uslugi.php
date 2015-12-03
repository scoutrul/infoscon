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
				<?php query_posts('cat=13'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензии на услуги телефонной связи</h2>
				<?php query_posts('cat=17'); ?>
				<?php while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Лицензии на вещание</h2>
				<?php query_posts('cat=14'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Разрешения на частоты</h2>
				<?php query_posts('cat=16'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>СМИ</h2>
				<?php query_posts('cat=15'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>

			<ul>
			<h2>Информация</h2>
				<?php query_posts('cat=1'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>


	</div>

</section> <!-- / PAGE -->

<?php get_footer(); ?>