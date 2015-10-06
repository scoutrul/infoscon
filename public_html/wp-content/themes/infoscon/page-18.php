<?php get_header(); ?>

<!-- Контакты -->

<section class="page"> 
	<div class="container">
					
		<?php 
			if (have_posts()): while (have_posts()): the_post(); 
		?>
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
		<?php endwhile; endif; ?>

		<div class="contactpage">
			<div class="contactpage__contact">

				<form action="" class="contactpage__form">
					<div class="contactpage__form__label">
						<h3>Напишите нам:</h3>
					</div>

					<input type="text" placeholder="Организация" id="contact_org">
					<input type="text" placeholder="Контактное лицо" id="contact_face">
					<input type="text" placeholder="E-mail" id="contact_email">
					<input type="text" placeholder="Телефон" id="contact_phone">

					<div class="contactpage__form__about">
						<div class="contactpage__form__label--check">Тема сообщения:</div>
						<label>
							<input type="checkbox" checked>Общие вопросы
						</label>
						<label>
							<input type="checkbox">Лицензирование услуг связи
						</label>
						<label>
							<input type="checkbox">Продление лицензий связи
						</label>
					</div>
					<textarea placeholder="Введите сообщение" id="contact_text"></textarea>
					<button id="contact_send">Отправить</button>

				</form>
			</div>
			<div class="contactpage__contact">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.3347417642135!2d37.5392718!3d55.6831678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54cf1b83cf23d%3A0x7e9101657d17e3c8!2z0JvQtdC90LjQvdGB0LrQuNC5INC_0YAuLCA4MSwg0JzQvtGB0LrQstCwLCAxMTkyNjE!5e0!3m2!1sru!2sru!4v1438117634318" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>



	</div>
</section> <!-- / PAGE -->










<?php get_footer(); ?>