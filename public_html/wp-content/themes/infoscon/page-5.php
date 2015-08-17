

<!-- О КОМАНИИ -->


<?php get_header(); ?>


<section class="page"> 
	<div class="container">
					
		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
		?>

		<h1 style="font-weight: 400;">«ИнфоСвязь Консалтинг» специализируется на оказании помощи компаниям в получении лицензий связи на всей территории РФ.</h1>
		

	

		<?php the_content(); ?>


	<?php endwhile; endif; ?>

	</div>
</section> <!-- / PAGE -->










<?php get_footer(); ?>