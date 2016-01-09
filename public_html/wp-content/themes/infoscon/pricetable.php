
<!-- 	<h2>Таблица услуг</h2> -->
	<table class="price" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
		<thead class="price_thead">
			<tr>
				<th>#</th>
				<th>Применение</th>
				<th>Стоимость</th>
				<th>Срок рассмотрения</th>
			</tr>
		</thead>

	<? 
	$categories_in_table=get_categories('orderby=id&order=ASC');
	$num = 0;
	
	foreach($categories_in_table as $categoryTab) {

	?>

		<? if ($categoryTab->term_id!=1){ ?>

	<?
	echo '
			<thead>
				<tr>
					<td class="price-header">&nbsp;</td>
					<th colspan="3" class="price-header">
						<h2 class="h">' .$categoryTab->name. '</h2>
					</th>
				</tr>
			</thead>'
	?>

			<?	$IDcatTab = 'cat='.$categoryTab->term_id.'&showposts=-1';
				query_posts($IDcatTab); 
				while (have_posts()) : the_post(); ?>

				<tbody class="price-section-in">

					<tr class="price-section-open">
						<td class="price-section-in-num"><?$num++; print $num;?></td>
						<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
						<td class="price-section-in-price"><? echo (get_post_meta($post->ID, 'price', true)) ? 'от <span>'.get_post_meta($post->ID, 'price', true).'</span> руб.' : "-" ?></td>
						<td class="price-section-in-days"><? echo (get_post_meta($post->ID, 'days', true)) ? '<span>'.get_post_meta($post->ID, 'days', true).'</span> дней' : "-"; ?></td>
					</tr>
					<tr class="price-section-in-excerpt">
						<td>&nbsp;</td>
						<td colspan="4" class="price-section-excerpt">
							<?php 
								the_excerpt();
								?>
								<a class="price-section-more" href="<?the_permalink();?>">
								<svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
								  <path d="M0 0h24v24H0z" fill="none"/>
								  <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
								</svg>
								Подробнее</a>
								<?
							?>
						</td>
					</tr>

				</tbody>
			<?php endwhile; ?>

		<? 
		echo '

				<tr>
					<th colspan="4" class="price-section-end">&nbsp;</th>
				</tr>
			';
		?>
		<? } ?>
<? } ?>

<? 
echo '
	<tfoot>
		<tr>
			<th colspan="4" class="price-section-end" style="font-size: 160%;">Внимание! Получите скидку при заказе двух и более лицензий!</th>
		</tr>
		<tr>
			<th colspan="4">
				<div class="post_order pricetable">Заказать</div>
			</th>
		</tr>
	</tfoot>';
?>
	</table>




	<script>
		// price table
		$(function(){

			$('.price-section-in-excerpt').hide();

			$('.price-section-open').click(function() {
				event.preventDefault();
				$(this).parent('.price-section-in').children('.price-section-in-excerpt').toggle();
				$(this).parent('.price-section-in').toggleClass('active');
				
			});

		});
	</script>
