
<?php if (!is_Home() && !is_404() && !is_Page() && !is_category() && !in_category(1)){
	echo '<section class="breadcrumbs">';
	yoast_breadcrumb('<div class="breadcrumbs__nav">','</div>');
	echo '</section>';
}
?>



		</div> <!-- /main -->


<!-- ФУТЕР -->
<footer>
	<section>


		<nav class="nav-info">
			<ul>
				<div class="nav__title">Разделы</div>
				<?php wp_nav_menu('menu=footer_menu_info&menu_class=&container=&'); ?>
			</ul>
		</nav>
		<nav class="nav-service">
			<ul>
				<div class="nav__title">Услуги</div>
				<?php wp_nav_menu('menu=footer_menu_service&menu_class=&container=&'); ?>
			</ul>
		</nav>

		<!-- contact block -->
		<div class="contact_block_container">

			<?php
				$query1 = new WP_Query('page_id=269'); 
					while($query1->have_posts()) $query1->the_post(); 
					the_content();
				wp_reset_query(); 
			?>

			<div class="order" id="bottomForm">Заказать лицензию</div>
		</div>

		<section class="copyright">
			<div class="gerbs">
				<div class="rf"><img src="<?php bloginfo('template_url'); ?>/images/gerbrf.png" title="Работаем по всей территории Российскаой Федерации"></div>
				<div class="minkomsvyaz" style="margin: 30px;"><img src="<?php bloginfo('template_url'); ?>/images/minkomsvyaz.png" title="При сотрудничестве с Министерством связи и массовых коммуникаций Российской Федерации (Минкомсвязь России)"></div>
				<div class="roskomnadzor"><img src="<?php bloginfo('template_url'); ?>/images/roskomnadzor.png" title="При сотрудничестве с Федеральной службой по надзору в сфере связи, информационных технологий и массовых коммуникаций"></div>
			</div>
			<div>
				<div>© Компания "Инфо-Связь Консалтинг" 2008-2017г, лицензирование услуг связи.</div>
				<div>
					<a href="http://infoscon.ru/sitemap/">Карта сайта</a> / <a href="http://infoscon.ru/license-pro.ru/" target="_blank">Old ver.</a>
				</div>
			</div>

		</section>



	</section>

</footer>
<!-- // ФУТЕР -->


<noindex>
	

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

	<div id="feedback_me"><a href="http://infoscon.ru/license-pro.ru/" target="_blank">Предыдущая версия сайта</a></div>
	<a href="#" class="scrollToTop">^</a>


<?php include('forms.php');?>

<script type="text/javascript">
/* init Call Service */
var CallSiteId = '4b3eee080bb57f99dfbbb924cde5e5cc';
var CallBaseUrl = '//uptocall.com';
(function() {
    var lt = document.createElement('script');
    lt.type ='text/javascript';
    lt.charset = 'utf-8';
    lt.async = true;
    lt.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + CallBaseUrl + '/widget/client.js?rnd='+Math.floor(Math.random(0,1000)*1000);
    var sc = document.getElementsByTagName('script')[0];
    if (sc) sc.parentNode.insertBefore(lt, sc);
    else document.documentElement.firstChild.appendChild(lt);
})();
</script>

</body>
</html>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>








<!-- smooth scroll --><script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/infoscon.css">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

<style>
		/*  imports */
	@import url(http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=cyrillic);
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=cyrillic);
	@import url(https://fonts.googleapis.com/css?family=Roboto:300,400&amp;subset=cyrillic);


		/* /imports */
	@font-face {
	  font-family: 'Roboto Slab', 'Open Sans', 'Roboto';
	  font-display: fallback;
	 }
</style>
