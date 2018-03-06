<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  * @var $atts
  */

?>
<!-- start inside-desc.html-->
<div class="inside-desc">
	<div class="inside-desc__wrap">
		<div class="inside-desc__address">
			<h3 class="address__title"><?=$atts['title']?></h3>
			<p class="address__text"><?=$atts['md']?></p>
			<p class="address__text"><?=$atts['station']?></p>
			<p class="address__text"><?=$atts['road']?></p>
		</div>

		<div class="inside-desc__cost">
			<p class="cost__text"><strong>Стоимость:</strong><?=$atts['price']?></p>
			<p class="cost__text"><strong>Срок сдачи:</strong><?=$atts['cur']?></p>
		</div>
	</div>

	<button class="inside-desc__map-btn" type="button">Смотреть на карте</button>
</div>
<!-- end inside-desc.html-->
