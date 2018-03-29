<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/**
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  *@var $atts array
  *
  **/

?>
<!-- start property-selection.html-->
<section class="property-selection">

	<h2 class="property-selection__title">подбор недвижимости</h2>

	<form action="#">

		<div class="property-selection__range-slide">

			<div class="header-range">
				<span class="title-range">Стоимость:</span>
				<div class="header-range__btns">
					<button class="header-range__btn header-range__btn_active"><i class="fas fa-ruble-sign"></i></button><button class="header-range__btn">$</button><button class="header-range__btn">&#8364;</button>
				</div>
			</div>
			<div class="slider" id="cost"></div>

			<div class="custom-select">
				<select id="region" required>
					<option value="0">Выберете регион</option>
					<?php foreach ($atts['region'] as $region):?>
						<option value="<?=$region['text']?>"><?=$region['text2']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="custom-select">
				<select id="property">
					<option value="0">Вся недвижимость</option>
					<?php foreach ($atts['jk'] as $region):?>
						<option value="<?=$region['text2']?>"><?=$region['text']?></option>
					<?php endforeach;?>
				</select>
			</div>

		</div>

		<div class="property-selection__range-slide property-selection__range-slide_area">
			<span class="title-range">Площадь, м<sup>2</sup></span>
			<div class="slider_area" id="area"></div>

			<div class="property-selection__rooms" id="flats">
				<span class="title-range">Кол-во комнат:</span>
				<div class="property-selection__numbers">1</div>
				<div class="property-selection__numbers active">2</div>
				<div class="property-selection__numbers">3</div>
				<div class="property-selection__numbers">4+</div>
			</div>

		</div>

		<a href="#" class="btn-white" id="get_table">показать</a>
	</form>
	<div id="result"></div>

</section>
<!-- end property-selection.html-->