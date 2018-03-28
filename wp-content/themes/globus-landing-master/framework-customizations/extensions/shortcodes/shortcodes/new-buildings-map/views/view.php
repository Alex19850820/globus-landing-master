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
	<div id="result">
		<div class="map__wrap" id="yaMap">
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		</div>
	</div>


	<div class="map__wrapper">
		<a href="#" class="map__btn">показать объекты на карте</a>
	</div>
</div>
<!-- end map.html-->