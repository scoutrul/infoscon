<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>ИНФОСВЯЗЬ КОНСАЛТИНГ / лицензии на услуги связи (регистрация, продление, переоформление)</title>

<!-- 	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
	<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" /> -->
	
	<?php $host = $_SERVER['REQUEST_URI']; ?>

<?php 
	wp_head();
	?>

</head>
<body>



	<header>
		<section class="header">
		    <div class="xmenu">
				<div class="x1"></div>
				<div class="x2"></div>
				<div class="x3"></div>
		    </div>	
			<div class="logo">
				<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="Компания ИнфоСвязь Консалтинг" class="gohome"><br>
				<img src="<?php bloginfo('template_url'); ?>/images/logo-slogan.png" alt="Связисты для связистов" class="gohome">
			</div>

			<ul class="poduslugi">
				<li><a href="/uslugi/litsenzii-svyazi/">Лицензии связи</a></li>
				<li><a href="/uslugi/litsenzii-na-veshhanie/">Лицензии на вещание</a></li>
				<li><a href="/uslugi/razresheniya-na-chastoty/">Разрешения на частоты</a></li>
				<li><a href="/uslugi/smi/">Регистрация СМИ</a></li>
				<li><a href="/prodlenie-litsenzij-svyazi/">Продление и переоформление</a></li>
			</ul>
			<?php wp_nav_menu('menu=top_menu&menu_class=top_menu&container=&'); ?>


			<div class="info">
				<div class="v"><img src="<?php bloginfo('template_url'); ?>/images/viber.png">Viber</div>
				<div class="w"><img src="<?php bloginfo('template_url'); ?>/images/whatsup.png">WhatsUp</div>
				<div class="num">+7 916 594-9208</div>
				<div class="mail"><a href="mailto:info@infoscon.ru">info@infoscon.ru</a></div>
			</div>
			<div class="contacts">
				<div class="phone">8-800-550-1089 <sub>(бесплатный звонок для РФ)</sub></div>		
				<a class="order" id="freeCons">Узнать свою скидку</a>
			</div>
		</section>
	</header>


<div class="mobile_menu">
<a href="/">
	<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome">
</a>
</div>


<div class="main">


	<?php if (!is_Home() && !is_404() && !is_Page() && !is_category() && !in_category(1)){
		echo '<section class="breadcrumbs">';
		yoast_breadcrumb('<div class="breadcrumbs__nav">','</div>');
		echo '</section>';
	}
	?>

