<?php get_header(); ?>




		<section class="about">

		<?php include('steps.php');?>

		<div class="price-section-hot">
				<div  style="font-size: 160%;"><span style="color:red">Внимание!</span><br>Получите скидку при заказе двух или более лицензий!</div>
				<div class="post_order pricetable">Заказать</div>
		</div>

		<?php
			$post_id = 51;
			$queried_post = get_post($post_id);
			$title = $queried_post->post_title;
			echo $queried_post->post_content;
		?>
	

		<?php include('features.php');?>
			

				<div class="post_order pricetable" style="width: 400px">Заказать лицензию связи</div>


		</section>
		
	



<?php get_footer(); ?>