

<!-- О КОМАНИИ -->

<?php get_header(); ?>



		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
		?>
		<?php
			$morestring = '<!--more-->';
			$explode_content = explode( $morestring, $post->post_content );
			$content_before = apply_filters( 'the_content', $explode_content[0] );
			$content_after = apply_filters( 'the_content', $explode_content[1] );
		?>
<section class="page"> 
	<div class="container">
					


	<? echo $content_before;?>
		
	</div>
</section> <!-- / PAGE -->

<?php include('steps.php');?>
<?php include('whywe.php');?>


<section class="page"> 
	<div class="container">

		

	<? echo $content_after;?>
<?php endwhile; endif; ?>

	</div>
</section> <!-- / PAGE -->









<?php get_footer(); ?>