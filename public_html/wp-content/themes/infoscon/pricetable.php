
	<h2>Таблица услуг</h2>
	<table class="price">
	<?php
	wp_reset_query(); ?>

	<?echo '
			<thead>
				<tr>
					<th>Наименование услуги связи</th>
					<th>Применение</th>
					<th>Срок рассмотрения, дней</th>
					<th>Стоимость, руб.</th>
				</tr>'; ?>
	<? 
	$categories_in_table=get_categories('orderby=id&order=DESC');
	foreach($categories_in_table as $categoryTab) {
	?>

	<? echo '
			<tr>
				<th colspan="4">';
		echo  '<h3>'.$categoryTab->name.'</h3>';
		echo '
				</th>
			</tr>
		</thead>';
	?>



			<?	$IDcatTab = 'cat='.$categoryTab->term_id;
				query_posts($IDcatTab); 
				while (have_posts()) : the_post(); ?>


		<tbody>

			<tr>
				<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</td>
				<td>
				

				</td>
				<td><?echo get_post_meta($post->ID, 'days', true);?></td>
				<td><?echo get_post_meta($post->ID, 'price', true);?></td>
			</tr>
		</tbody>



		<?php endwhile; ?>

		<? echo '
		<tfoot>
			<tr>
				<th colspan="4">---</th>
			</tr>
		</tfoot>';?>
<? }?>
	</table>