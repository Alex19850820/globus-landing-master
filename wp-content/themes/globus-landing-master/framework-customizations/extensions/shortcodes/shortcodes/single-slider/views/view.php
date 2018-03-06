<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start inside-slider.html-->
<div class="head head_inside">
	<h2 class="head__title"><?php the_title(); ?></h2>

	<div class="owl-carousel-header owl-carousel">
		<?php foreach ( $atts['slider'] as $slider ):?>
			<div class="head__slider head__slider_inside" style="background-image: url(<?=$slider['img']['url']?>)">
				<div class="head__slider--description head__slider--description_inside transformX-0 nopadding">
					<h2  class="inside-slide__title"><?=$slider['text']?></h2>
				</div>
			</div>
		<?php endforeach;?>
	</div>
</div>
<!-- end inside-slider.html-->
