<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
	<!--textblock in wp then shortcode main-content2-->
	<div class="housing__item-wrap">
		<?php $i=0; foreach ($atts['item'] as $item): $i++;?>
			<div class="<?= ($i == 1) ? 'housing__item-small' : 'housing__item-x-small'?>" style="background-image: url(<?=$item['img']['url']?>)">
				<a href="<?=$item['href']?>" class="btn-white"><?=$item['info']?></a>
			</div>
		<?php endforeach;?>
	</div>
</main>
<!-- end content.html-->