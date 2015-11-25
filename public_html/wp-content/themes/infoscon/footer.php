
		</div> <!-- /main -->

<!-- ФУТЕР -->
<footer>
	<section>

		<nav class="nav-info">
			<ul>
				<div class="nav__title">Информация</div>
				<?php wp_nav_menu('menu=footer_menu_info&menu_class=&container=&'); ?>
			</ul>
		</nav>
		<nav class="nav-service">
			<ul>
				<div class="nav__title">Услуги</div>
				<?php wp_nav_menu('menu=footer_menu_service&menu_class=&container=&'); ?>
			</ul>
		</nav>


			<div class="order">Бесплатная консультация</div>

		<section class="copyright">© Cайт компании "ИнфоСвязь Консалтинг", мы занимаемся лицензированием услуг связи. </section>
	</section>

</footer>
<!-- // ФУТЕР -->



<div id="contactForm" class="contactForm">
<div class="orderclose">+</div>
	<form action="#">
		<input type="text" placeholder="Представьтесь">
		<input type="text" placeholder="Как с Вами связаться?">
		<textarea name="" id="" cols="30" rows="10" placeholder="Что Вас интересует?"></textarea>
		<button>Отправить</button>
	</form>
</div>


<?php wp_footer(); ?>


</body>
</html>
