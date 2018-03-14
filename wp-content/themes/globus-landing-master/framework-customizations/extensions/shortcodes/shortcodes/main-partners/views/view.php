<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start partners.html-->
<section class="partners">
	<h2 class="partners__title">наши постоянные партнеры</h2>
	<div class="partners__wrap owl-carousel">
		<?php foreach ( $atts['slider'] as $slider ):?>
			<a href="<?=$slider['href']?>" class="partners__item">
				<img src="<?=$slider['img']['url']?>" alt="">
			</a>
		<?php endforeach;?>
	</div>
	<div class="partners__contacts">
		<span><?=$atts['title']?></span>
		<a href="tel:<?=$atts['href']?>" class="btn-phone"><span><?=$atts['phone']?></span></a>
		<a href="<?=$atts['href2']?>" class="sidebar__feedback"><?=$atts['info']?></a>
	</div>
</section>
<!-- end partners.html-->