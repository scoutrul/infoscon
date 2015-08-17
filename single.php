<?php get_header(); ?>




<?php if (have_posts()): while (have_posts()): the_post(); ?>
<?php
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id, 'large');
	$image_url = $image_url[0];
?>

<section class="post">								
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<div class="pic"><?php if ($image_url!='') echo "<img src='$image_url'>" ?></div>

		<div class="excerpt"><?php the_content(); ?></div>
	</div>

</section>


	<?php endwhile; endif; ?>





<?php get_footer(); ?>