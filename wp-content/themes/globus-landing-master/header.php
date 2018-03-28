<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package globus-landing-master
 */
$menu = fw_get_db_customizer_option();
$args = array(
	'menu'            => '',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
	// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
	'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
	'container_class' => '',              // (string) class контейнера (div тега)
	'container_id'    => '',              // (string) id контейнера (div тега)
	'menu_class'      => 'filter__select_list',          // (string) class самого меню (ul тега)
	'menu_id'         => '',              // (string) id самого меню (ul тега)
	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
	'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
	'before'          => '',              // (string) Текст перед <a> каждой ссылки
	'after'           => '',              // (string) Текст после </a> каждой ссылки
	'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
	'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
	'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
	'theme_location'  => ''               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Globus-landing-master</title>
	<?php wp_head(); ?>
</head>
<body>
<!-- open .header -->
<!-- end html_open.html-->

<!-- start main-sidebar.html-->
<aside class="sidebar">
	<a href="/ " class="sidebar__logo">
		<img src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
	</a>
	<div class="sidebar__phone-number">
		<a href="tel:<?=$menu['phone']?>"><?=$menu['phone']?></a>
	</div>
	<a href="<?=$menu['hrefd']?>" class="sidebar__discount-btn"><?=$menu['discount']?></a>
	<a href="<?=$menu['href_order']?>" class="sidebar__feedback"><?=$menu['order']?></a>
	<ul class="header__nav">
		<li><a href="<?=$menu['href']?>"><?=$menu['text']?></a></li>
		<li><a href="<?=$menu['href2']?>"><?=$menu['text2']?></a></li>
		<li><a href="<?=$menu['href3']?>"><?=$menu['text3']?></a></li>
		<li><a href="<?=$menu['href4']?>"><?=$menu['text4']?></a></li>
	</ul>
	<ul class="sidebar__nav">
		<li><a href="<?=$menu['href_mortgage']?>"><?=$menu['mortgage']?></a></li>
		<li><a href="<?=$menu['href_investments']?>"><?=$menu['investments']?></a></li>
		<li><a href="<?=$menu['href_about']?>"><?=$menu['about']?></a></li>
		<li><a href="<?=$menu['href_build']?>"><?=$menu['build']?></a></li>
		<li><a href="<?=$menu['href_contacts']?>"><?=$menu['contacts']?></a></li>
	</ul>
	<div class="sidebar__socials">
		<a href="<?=$menu['vk']?>"><i class="fab fa-vk"></i></a>
		<a href="<?=$menu['facebook']?>"><i class="fab fa-facebook-f"></i></a>
		<a href="<?=$menu['instagram']?>"><i class="fab fa-instagram"></i></a>
		<a href="<?=$menu['google_plus']?>"><i class="fab fa-google-plus-g"></i></a>
		<a href="<?=$menu['youtube']?>"><i class="fab fa-youtube"></i></a>
		<a href="<?=$menu['twitter']?>"><i class="fab fa-twitter"></i></a>
	</div>
</aside>
<!-- end main-sidebar.html-->

<div class="right-container">
	<!-- start header.html-->
	<header class="header">

		<ul class="header__nav">
			<li><a class="header__nav-link" href="/<?=$menu['href']?>"><?=$menu['text']?></a></li>
			<li>
				<div class="filter__select_wrap" id="city">
					<div  class="filter__select">
						<span class="filter__select_active header__nav-link"><?=$menu['text2']?></span>
					</div>
					
<!--					<ul class="filter__select_list">-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Элитные жилые комплексы</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Квартиры</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Апартаменты</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Лофты</a></li>-->
<!--					</ul>-->
					<?php
					wp_nav_menu( array('theme_location'=> 'menu 1', 'menu_class' => 'filter__select_list',));
					?>
				</div>
			</li>
			<li>
				<div class="filter__select_wrap" id="out-of-town">
					<div  class="filter__select">
						<span class="filter__select_active header__nav-link"><?=$menu['text3']?></span>
					</div>

<!--					<ul class="filter__select_list">-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Коттеджные поселки</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Загородные дома</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Таунхаусы</a></li>-->
<!--						<li><a class="header__nav-link header__nav-link_list" href="#">Участки</a></li>-->
<!--					</ul>-->
					<?php
					wp_nav_menu( array('theme_location'=> 'menu 2', 'menu_class' => 'filter__select_list',));
					?>
				</div>
			</li>
			<li><a class="header__nav-link" href="<?=$menu['href4']?>"><?=$menu['text4']?></a></li>
		</ul>

		<div class="menu btn5" data-menu="5">
			<div class="icon"></div>
		</div>
	</header>
	<!-- end header.html-->