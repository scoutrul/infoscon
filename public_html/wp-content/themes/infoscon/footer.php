
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


	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/infoscon.css">
</body>
</html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>


	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">




	<style>
			/* /imports */

		@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=cyrillic);
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic);



			/* /imports */
	</style>



	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>