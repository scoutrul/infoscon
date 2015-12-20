
<!-- 	<h2>Таблица услуг</h2> -->
	<table class="price" cellpadding="0" cellspacing="0" border="0">
	<thead>
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
echo <<<END
			<thead>
				<tr>
					<td class="price-header">&nbsp;</td>
					<th colspan="3" class="price-header">
						<h2 class="h">$categoryTab->name</h2>
					</th>
				</tr>
			</thead>
END;
	?>

			<?	$IDcatTab = 'cat='.$categoryTab->term_id;
				query_posts($IDcatTab); 
				while (have_posts()) : the_post(); ?>

				<tbody class="price-section-in">

					<tr>
						<td class="price-section-in-num"><?$num++; print $num;?></td>
						<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
						<td class="price-section-in-price"><? echo (get_post_meta($post->ID, 'price', true)) ? 'от <span>'.get_post_meta($post->ID, 'price', true).'</span> руб.' : "-" ?></td>
						<td class="price-section-in-days"><? echo (get_post_meta($post->ID, 'days', true)) ? '<span>'.get_post_meta($post->ID, 'days', true).'</span> дней' : "-"; ?></td>
					</tr>
					<tr class="price-section-in-excerpt">
						<td>&nbsp;</td>
						<td colspan="4">
							<?php 
								the_excerpt();
								print '<a href="'; the_permalink(); print '">Подробнее</a>';
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
			<th colspan="3" class="price-section-end" style="font-size: 160%;">Внимание! Получите большую скидку при заказе двух и более лицензий!</th>
		</tr>
	</tfoot>';
?>
	</table>

