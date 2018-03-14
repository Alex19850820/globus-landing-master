<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start crumbs.html-->
<section class="crumbs">
	<ul class="crumbs__link">
		<li><a href="/">Главная <i class="fas fa-chevron-right"></i> </a> </li>
		<li> <a href="#">Новостройки Москвы и МО</a></li>
	</ul>
</section>
<!-- end crumbs.html-->
<!-- start map.html-->
<div class="map">
	<h2 class="map__title">новостройки <span>москвы и мо</span></h2>
	<div class="map__wrap">
		<iframe src="https://yandex.ua/map-widget/v1/?um=constructor%3Abb86c324f976967ffdbe619e3a34ae9f40d8b437bafb8b3395f4d3b5352ebd62&amp;source=constructor"
				width="100%" height="365" frameborder="0"></iframe>
	</div>
	<div class="map__wrapper">
		<a href="#" class="map__btn">показать объекты на карте</a>
	</div>
</div>
<!-- end map.html-->