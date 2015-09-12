
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


			<div class="order" id="freeCons">Бесплатная консультация</div>


			<?php
			// Цикл 1
			$query1 = new WP_Query('page_id=269'); // страница с id 28
			while($query1->have_posts()) $query1->the_post(); ;?>

			<?php the_content(); ?>
			<?php wp_reset_query(); ?>
			
		<section class="copyright">© Cайт компании "ИнфоСвязь Консалтинг", мы занимаемся лицензированием услуг связи. </section>
	</section>

</footer>
<!-- // ФУТЕР -->


<noindex>
	<!-- Feedback form -->
	<div id="contactForm" class="contactForm">
	<div class="orderclose">+</div>
		<form action="#">
			<div class="contactform-label">Вопросы?</div>
			<input type="text" placeholder="Представьтесь">
			<input type="text" placeholder="Как с Вами связаться?">
			<textarea name="" id="" cols="30" rows="10" placeholder="Что Вас интересует?"></textarea>
			<div class="send">Отправить</div>
		</form>
	</div>
	<!-- //Feedback form -->

	<!-- order form -->
	<div id="orderForm" class="contactForm">
	<div class="orderclose">+</div>
		<form action="#">
			<div class="h1">Предварительный заказ:</div>
			<input type="text" placeholder="Представьтесь">
			<input type="text" placeholder="Как с Вами связаться?">
			<textarea name="" id="" cols="30" rows="6" placeholder="Хотите что-нибудь добавить?"></textarea>
			<div class="send">Заказать</div>
		</form>
	</div>
	<!-- //order form -->



	<!-- Yandex.Metrika counter -->
		<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter32281124 = new Ya.Metrika({ id:32281124, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/32281124" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- google-analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-67070394-1', 'auto');
	  ga('send', 'pageview');
	</script>	
	<!-- /google-analytics -->

</noindex>

<?php wp_footer(); ?>



</body>
</html>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

	<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>

	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

	<style>
			/*  imports */
		@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=cyrillic);
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic);
			/* /imports */
	</style>

