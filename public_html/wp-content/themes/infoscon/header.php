<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>ИНФОСВЯЗЬ КОНСАЛТИНГ / лицензии на услуги связи (регистрация, продление, переоформление)</title>

	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
	<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" />
	
	<?php $host = $_SERVER['REQUEST_URI']; ?>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/infoscon.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>


	<script>
document.addEventListener('DOMContentLoaded', function () {

	var switchBlock = document.createElement('div');
		switchBlock.setAttribute("id", "siteswitcher");
		switchBlock.style.position = "fixed";
		switchBlock.style.top = "50%";
		switchBlock.style.width = "175px";
		switchBlock.style.right = "-75px";
		switchBlock.style.fontSize = "13px";
		switchBlock.style.textAlign = "center";
		switchBlock.style.transform = "rotate(90deg)";
		switchBlock.style.zIndex = "111";

		switchBlock.style.backgroundColor = '#E8E8E8';
		switchBlock.style.padding = '5px 15px 10px';
		switchBlock.style.borderBottomLeftRadius = '15px';
		switchBlock.style.borderBottomRightRadius = '15px';


	var link = document.createElement('a');
		var url = "/license-pro.ru/";
		
		link.setAttribute("href", url);
		link.innerHTML = "Старая версия сайта";

		document.body.appendChild(switchBlock);
		switchBlock.appendChild(link)

});
</script>

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
			<a class="order" id="freeCons">Вопросы?</a>
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

