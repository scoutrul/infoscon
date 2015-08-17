<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>ИНФОСВЯЗЬ КОНСАЛТИНГ</title>

	<?php $host = $_SERVER['REQUEST_URI']; ?>


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
				<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome">
			</div>
			<?php wp_nav_menu('menu=top_menu&menu_class=top_menu&container=&'); ?>
			<a class="order">Заказать лицензию</a>
		</section>
	</header>


<div class="mobile_menu">
<a href="/">
	<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome">
</a>
</div>


<div class="main">


	<?php if (!is_Home() && !is_404()) {
		echo '<section class="breadcrumbs">';
		yoast_breadcrumb('<div class="breadcrumbs__nav">','</div>');
		echo '</section>';

	} ?>

