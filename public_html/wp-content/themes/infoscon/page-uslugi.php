<?php get_header(); ?>


<!-- Услуги -->


<section class="page  page-services"> 
	<div class="container">

	<div class="description">
		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
			the_content();
			endwhile; endif; 
			wp_reset_query(); 
		?>
	</div>

	<?php
	$args=array(
		'orderby' => 'id',
		'order' => 'DESC'
	);
	$categories=get_categories($args);
	foreach($categories as $category) {
		echo '<ul>';
		echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> ';
		if($category->description) echo '<p>Описание:'. $category->description . '</p>';

		get_posts('cat=$category->term_id'); 
				while (have_posts()) : the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile; 
		echo '</ul>';
		wp_reset_query();  
	 }
	?>






	</div>

</section> <!-- / PAGE -->


<?php get_footer(); ?>