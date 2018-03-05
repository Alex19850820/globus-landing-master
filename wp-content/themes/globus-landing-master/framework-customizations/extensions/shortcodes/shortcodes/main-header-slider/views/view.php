<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start slider.html-->
<div class="head">
	<div class="owl-carousel-header owl-carousel">
		<?php foreach ( $atts['slider'] as $slide ):?>
			<div class="head__slider" style="background-image: url(<?=$slide['img']['url']?>)">
				<div class="head__slider--description">
					<span><?=$slide['title']?></span>
					<h1>
						<?=$slide['h1']?>
					</h1>
					<h2>
						<?=$slide['h2']?>
					</h2>
					<div class="price-slider">от <span><?=$slide['price']?> </span>р. за м2</div>
					<a href="<?=$slide['href']?>" class="btn-white"><?=$slide['info']?></a>
	
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>
<!-- end slider.html-->