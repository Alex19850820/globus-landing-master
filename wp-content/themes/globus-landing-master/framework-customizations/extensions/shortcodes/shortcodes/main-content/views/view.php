<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start content.html-->
<main class="housing">
	<?php foreach ($atts['house'] as $house):?>
		<div class="housing__item" style="background-image: url(<?=$house['img']['url']?>)">
			<div class="housing__content">
				<h2 class="housing__title"><?=$house['h2']?></h2>
				<div>
					<div class="housing__price"><?=$house['price']?></div>
					<div class="housing__area"><?=$house['area']?></div>
				</div>
				<div class="housing__city">
					<?=$house['city']?>
					<?php if(isset($house['md'])):?>
						<span> <?=$house['md']?>м. Марьино</span>
					<?php endif;?>
				</div>
			</div>
			<a href="<?=$house['href']?>" class="btn-white"><?=$house['info']?></a>
		</div>
	<?php endforeach;?>
	<!--textblock in wp then shortcode main-content2-->