<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start contacts-crumbs.html-->
<section class="crumbs">
	<ul class="crumbs__link">
		<li><a href="/">Главная <i class="fas fa-chevron-right"></i> </a> </li>
		<li><a href="/contacts">Контакты</a></li>
	</ul>
</section>
<!-- end contacts-crumbs.html-->
<!-- start contacts.html-->
<section class="contacts">
	<h2 class="head__title">Контактная информация</h2>

	<div class="contacts__map">
		<div class="map__wrap">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95badf0f3c6340527501c3858d5eaa3b521158405b5617d94f9a75914fed35aa&amp;width=100%25&amp;height=400&amp;lang=ru_UA&amp;scroll=true"></script>
		</div>

		<div class="map__wrapper">
			<a href="#" class="map__btn">Показать наш офис</a>
		</div>
	</div>

	<div class="contacts__address-wrapper">
		<h3 class="contacts__small-title">Главный офис компании Globus Estate</h3>

		<div class="contacts__address">
			<div class="contacts__address-row">
				<p class="contacts__address-text contacts__address-text_th"><strong>Адрес</strong></p>
				<p class="contacts__address-text contacts__address-text_td">г. Москва, Кронштадский бульвар, дом 6, кор. 5</p>
			</div>

			<div class="contacts__address-row">
				<p class="contacts__address-text contacts__address-text_th"><strong>Телефон</strong></p>
				<p class="contacts__address-text contacts__address-text_td">8 (499) 390-55-71</p>
			</div>

			<div class="contacts__address-row">
				<p class="contacts__address-text contacts__address-text_th"><strong>Почта</strong></p>
				<a class="contacts__address-text contacts__address-text_td contacts__address-text_link" href="mailto:globus_estate@mail.ru">globus_estate@mail.ru</a>
			</div>

			<div class="contacts__address-row">
				<p class="contacts__address-text contacts__address-text_th"><strong>Режим работы</strong></p>
				<p class="contacts__address-text contacts__address-text_td"> Без выходных с 9:00 до 22:00</p>
			</div>
		</div>
	</div>

	<hr class="contacts__divider" noshade color="#b89855" size="2">

	<div class="contacts__persons-wrapper">
		<h3 class="contacts__small-title">По дополнительный вопросам, Вы можете написать:</h3>
		<div class="contacts__persons">
			<div class="contacts__persons-row">
				<div class="contacts__persons-photo">
					<img class="contacts__persons-img" src="<?php bloginfo('template_url')?>/img/manager.jpg" alt="">
				</div>

				<div class="contacts__persons-person">
					<div class="contacts__person-post">
						<p class="contacts__address-text"><strong>Директор по продажам</strong></p>
					</div>

					<div class="contacts__person-name">
						<p class="contacts__address-text">Михаил Александрович</p>
					</div>
				</div>

				<div class="contacts__persons-email">
					<a href="mailto:m.tarasov@globus-estate.com" class="contacts__address-text contacts__address-text_link">m.tarasov@globus-estate.com </a>
				</div>
			</div>

			<div class="contacts__persons-row">
				<div class="contacts__persons-photo">
					<img class="contacts__persons-img" src="<?php bloginfo('template_url')?>/img/manager.jpg" alt="">
				</div>

				<div class="contacts__persons-person">
					<div class="contacts__person-post">
						<p class="contacts__address-text"><strong>Директор по маркетингу </strong></p>
					</div>

					<div class="contacts__person-name">
						<p class="contacts__address-text">Анжела Сергеевна</p>
					</div>
				</div>

				<div class="contacts__persons-email">
					<a href="mailto:a.malakhova@globus-estate.com" class="contacts__address-text contacts__address-text_link">a.malakhova@globus-estate.com</a>
				</div>
			</div>

			<div class="contacts__persons-row">
				<div class="contacts__persons-photo">
					<img class="contacts__persons-img" src="<?php bloginfo('template_url')?>/img/manager.jpg" alt="">
				</div>

				<div class="contacts__persons-person">
					<div class="contacts__person-post">
						<p class="contacts__address-text"><strong>Генеральный директор</strong></p>
					</div>

					<div class="contacts__person-name">
						<p class="contacts__address-text">Елена Сергеевна</p>
					</div>
				</div>

				<div class="contacts__persons-email">
					<a href="mailto:e.yakhnina@globus-estate.com" class="contacts__address-text contacts__address-text_link">e.yakhnina@globus-estate.com</a>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- end contacts.html-->