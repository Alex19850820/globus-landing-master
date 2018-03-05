<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start progress.html-->
<section class="progress">
	<h2 class="progress__title">наши достижения</h2>
	<div class="progress__wrap">
		<?php foreach ($atts['progress'] as $progress):?>
			<div class="progress__item">
				<div class="number" data-num="<?=intval($progress['count'])?>">0</div>
				<?=$progress['text']?>
			</div>
		<?php endforeach;?>
	</div>
</section>
<!-- end progress.html-->