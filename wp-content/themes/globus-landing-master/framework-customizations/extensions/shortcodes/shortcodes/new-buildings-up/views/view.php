<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start new-buildings.html-->
<section class="property-selection">

	<form action="#">

		<div class="property-selection__range-slide">

			<div class="header-range">
				<span class="title-range">Стоимость:</span>
				<div class="header-range__btns">
					<button class="header-range__btn header-range__btn_active"><i class="fas fa-ruble-sign"></i></button><button class="header-range__btn">$</button><button class="header-range__btn">&#8364;</button>
				</div>
			</div>
			<div class="slider"></div>

			<div class="custom-select">
				<select>
					<option value="0">Выберете регион</option>
					<?php $i=1; foreach ($atts['region'] as $region):?>
						<option value="<?=$i?>"><?=$region['text']?></option>
					<?php $i ++; endforeach;?>
				</select>
			</div>
			<div class="custom-select">
				<select>
					<option value="0">Вся недвижимость</option>
					<?php $i=1; foreach ($atts['property'] as $property):?>
						<option value="<?=$i?>"><?=$property['text']?></option>
					<?php $i ++; endforeach;?>
				</select>
			</div>

		</div>

		<div class="property-selection__range-slide property-selection__range-slide_area">
			<span class="title-range">Площадь, м<sup>2</sup></span>
			<div class="slider_area"></div>

			<div class="property-selection__rooms">
				<span class="title-range">Кол-во комнат:</span>
				<div class="property-selection__numbers">1</div>
				<div class="property-selection__numbers active">2</div>
				<div class="property-selection__numbers">3</div>
				<div class="property-selection__numbers">4+</div>
			</div>

		</div>

		<a href="#" class="btn-white">показать</a>
	</form>

</section>