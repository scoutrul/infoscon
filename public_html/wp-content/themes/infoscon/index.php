<?php get_header(); ?>

<?php
if ( is_home() ) {
		 require('header_services.php'); 
		 
?>


		<section class="about">

			<?php
				$post_id = 51;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $queried_post->post_content;
			?>

			<?php include('pricetable.php'); ?>
		</section>
		
	
<?
	include('whywe.php');

}?>			



<?php get_footer(); ?>