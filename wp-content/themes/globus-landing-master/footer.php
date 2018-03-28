<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package globus-landing-master
 */
$contacts = fw_get_db_customizer_option();
?>

<!-- start footer.html-->
<footer class="footer">
	<div class="footer__wrap">
		<?php if(!empty($contacts['new_build'])):?>
			<?php foreach ($contacts['new_build'] as $footer):?>
				<div class="footer__item">
					<h3 class="footer__title"><?=$footer['text']?></h3>
					<ul class="footer__nav">
						
						<?php foreach ($footer['new_build'] as $nav):?>
							<li><a href="<?=$nav['href']?>"><?=$nav['text']?></a></li>
						<?php endforeach;?>
					</ul>
				</div>
			<?php endforeach;?>
		<?php endif;?>
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
<?php wp_footer(); ?>
