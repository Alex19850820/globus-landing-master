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
			<li><a href="<?=$menu['href']?>"><?=$menu['text']?></a></li>
			<li><a href="<?=$menu['href2']?>"><?=$menu['text2']?></a></li>
			<li><a href="<?=$menu['href3']?>"><?=$menu['text3']?></a></li>
			<li><a href="<?=$menu['href4']?>"><?=$menu['text4']?></a></li>
		</ul>

		<div class="menu btn5" data-menu="5">
			<div class="icon"></div>
		</div>
	</header>
	<!-- end header.html-->