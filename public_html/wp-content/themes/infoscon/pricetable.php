
	<h2>Таблица услуг</h2>
	<table class="price" cellpadding="0" cellspacing="0" border="0">

	<? 
	$categories_in_table=get_categories('orderby=id&order=DESC');
	foreach($categories_in_table as $categoryTab) {
	?>

		<? if ($categoryTab->term_id!=1){ ?>

	<?
echo <<<END
			<thead>
				<tr>
					<th colspan="3" class="price-header">
						<h2 class="h">$categoryTab->name</h2>
					</th>
				</tr>
				<tr>
					<th>Применение</th>
					<th>Срок рассмотрения</th>
					<th>Стоимость</th>
				</tr>
			</thead>
END;
	?>

			<?	$IDcatTab = 'cat='.$categoryTab->term_id;
				query_posts($IDcatTab); 
				while (have_posts()) : the_post(); ?>

				<tbody class="price-section-in">

					<tr>
						<th><h3 class="h"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></th>
						<td class="price-section-in-days">
						<? 
							echo (get_post_meta($post->ID, 'days', true)) ? '<span>'.get_post_meta($post->ID, 'days', true).'</span> дней' : "-"; 
						?>
						</td>
						<td class="price-section-in-price"><? echo (get_post_meta($post->ID, 'price', true)) ? '<span>от '.get_post_meta($post->ID, 'price', true).'</span> руб.' : "-" ?></td>
					</tr>
					<tr>
						<td colspan="3" class="price-section-in-excerpt">
							<?php 
								the_excerpt(); 
								print '<a href="';
								the_permalink();
								echo '">Подробнее...</a>';
							?>
						</td>
					</tr>
				</tbody>
			<?php endwhile; ?>

		<? 
		echo '
			<tfoot>
				<tr>
					<th colspan="3" class="price-section-end"></th>
				</tr>
			</tfoot>';
		?>
		<? } ?>
<? } ?>

<? 
echo '
	<tfoot>
		<tr>
			<th colspan="3" class="price-section-end" style="font-size: 160%;">Внимание! Получите большую скидку при заказе двух и более лицензий!</th>
		</tr>
	</tfoot>';
?>
	</table>