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
		<img src="img/logo.png" alt="">
	</a>
	<div class="sidebar__phone-number">
		<a href="tel:+7(499)390-55-71">+7(499)390-55-71</a>
	</div>
	<a href="#" class="sidebar__discount-btn">получить сКИдку</a>
	<a href="#" class="sidebar__feedback">Заказать звонок</a>
	<ul class="header__nav">
		<li><a href="#">Новостройки</a></li>
		<li><a href="#">Городская недвижимость</a></li>
		<li><a href="#">Загородная недвижимость</a></li>
		<li><a href="#">Скидки на новостройки</a></li>
	</ul>
	<ul class="sidebar__nav">
		<li><a href="#">Ипотека</a></li>
		<li><a href="#">Инвестиции</a></li>
		<li><a href="#">О компании</a></li>
		<li><a href="#">Застройщикам</a></li>
		<li><a href="#">Контакты</a></li>
	</ul>
	<div class="sidebar__socials">
		<a href="#"><i class="fab fa-vk"></i></a>
		<a href="#"><i class="fab fa-facebook-f"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-google-plus-g"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
	</div>
</aside>
<!-- end main-sidebar.html-->

<div class="right-container">
	<!-- start header.html-->
	<header class="header">

		<ul class="header__nav">
			<li><a href="new-buildings.html">Новостройки</a></li>
			<li><a href="#">Городская недвижимость</a></li>
			<li><a href="#">Загородная недвижимость</a></li>
			<li><a href="#">Скидки на новостройки</a></li>
		</ul>

		<div class="menu btn5" data-menu="5">
			<div class="icon"></div>
		</div>
	</header>
	<!-- end header.html-->