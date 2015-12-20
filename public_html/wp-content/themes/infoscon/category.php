<? get_header(); ?>

<section class="page"> 

	<div class="container">

			<h1><?php single_cat_title( '', true ); ?></h1>

			<ul class="service_catalog">
				<? $catcat = 'cat='.the_category_ID(false); 
				query_posts($catcat); ?>
				<? while (have_posts()) : the_post(); ?>
					<? require('services_loop.php') ?>	
				<? endwhile; ?>
			</ul>

	</div>

</section> <!-- / PAGE -->

<? get_footer(); ?>