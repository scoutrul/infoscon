	<?php get_header(); ?>



		<div class="main">	

<?php
if ( is_home() ) {

			 require('header_services.php') ?>

			<div class="header_padding">
				<div class="whois arrow bounce" ></div>
			</div>

			<section class="about">


				<?php
					$post_id = 51;
					$queried_post = get_post($post_id);
					$title = $queried_post->post_title;
					 echo $queried_post->post_content;
				?>


			</section>
<?}?>			<!--<section class="portfolio"></section>-->

		</div> <!-- /main -->


	<?php get_footer(); ?>