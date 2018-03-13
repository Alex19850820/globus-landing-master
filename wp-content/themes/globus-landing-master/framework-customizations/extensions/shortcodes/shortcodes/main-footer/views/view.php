<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
$contacts = fw_get_db_customizer_option();
?>
<!-- start footer.html-->
<footer class="footer">
	<div class="footer__wrap">
		<?php foreach ($atts['menu'] as $menu):?>
			<div class="footer__item">
				<h3 class="footer__title"><?=$menu['h3']?></h3>
				<ul class="footer__nav">
					
					<?php foreach ($menu['nav'] as $nav):?>
						<li><a href="<?=$nav['href']?>"><?=$nav['title']?></a></li>
					<?php endforeach;?>
				</ul>
			</div>
		<?php endforeach;?>
		<div class="footer__item">
			<h3 class="footer__title">Контакты</h3>
			<ul class="footer__nav">
				<li><a href="tel:<?=$contacts['phone']?>"><i class="fa fa-phone" aria-hidden="true"></i><?=$contacts['phone']?></a></li>
				<li><a href="mailto:<?=$contacts['email']?>"><i class="fas fa-envelope"></i> <?=$contacts['email']?></a></li>
				<li><a href="#"><i class="far fa-clock"></i> <?=$contacts['time']?> </a></li>
				<li><a href="#"><i class="fas fa-map-marker"></i> <?=$contacts['address']?></a></li>
			</ul>
		</div>
	</div>
	<div class="footer__copyright">
		© Globus Estate 2018 г.  Все права защищены
		Представленная информация не является публичной офертой
	</div>
</footer>
<!-- end footer.html-->
</div>