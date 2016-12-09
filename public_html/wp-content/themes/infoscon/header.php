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


<div class="deshevle">
	<a href="/uslugi/">
		<img src="<?php bloginfo('template_url'); ?>/images/deshevle.png" alt="Самые низкие цены на лицензии связи">
	</a>
</div>	


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
			<a class="order" id="freeCons">Задать вопрос</a>
		</section>
	</header>


<div class="mobile_menu">
<a href="/">
	<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome">
</a>
</div>


<div class="main">


	<?php if (!is_Home() && !is_404() && !is_Page()){
		echo '<section class="breadcrumbs">';
		yoast_breadcrumb('<div class="breadcrumbs__nav">','</div>');
		echo '</section>';
	}
	?>

