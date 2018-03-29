<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  * @var $atts
  */

?>
<!-- start inside-full-desc.html-->
<section class="full-desc">

	<ul class="full-desc__navigation">
<!--		--><?php //fw_print( fw_get_db_post_option($ID,'category'))?>
		<?php foreach ($atts['tabs'][0] as $tab => $value):?>
			<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, '<?=$tab?>')" id="default"><?=$value?></button></li>
		<?php endforeach;?>
	</ul>

	<div class="full-desc__content tabcontent" id="tab-describe">
		<div class="content">
			<p class="content__text"><i class="fas fa-map-marker-alt"></i><?=$atts['title']?></p>
			<?php foreach ($atts['paragraph'] as $paragraph):?>
				<h2 class="content__title"><?=$paragraph['h2']?></h2>
				<?php if(isset($paragraph['text'])):?>
					<?php foreach ($paragraph['text'] as $text):?>
						<p class="content__text"><?=$text['p']?></p>
					<?php endforeach;?>
				<?endif;?>
			<?php endforeach;?>
		</div>

		<div class="aside-content">
			<div class="aside-content__pros">
				<p><img src="<?php bloginfo('template_url')?>/img/icons/hypothec.png" alt=""> <span><?=$atts['mortgage']?></span></p>
				<p><img src="<?php bloginfo('template_url')?>/img/icons/calendar.png" alt=""> <span><?=$atts['credit']?></span></p>
				<p><img src="<?php bloginfo('template_url')?>/img/icons/gift.png" alt=""> <span><?=$atts['bonus']?></span></p>
			</div>

			<div class="aside-content__back-call">
				<div class="aside-content__manager">
					<img src="<?=$atts['img']['url']?>" alt="">
					<p class="manager-name"><?=$atts['name']?></p>
				</div>

				<div class="aside-content__form">
					<h3 class="aside-content__form-title">Узнать подробнее у менеджера</h3>
					<p class="aside-content__form-text">Оставьте свой номер и мы сразу вам перезвоним</p>

					<form id="aside-content__form" class="aside-content__form-input">
						<input type="tel" name="tel" class="aside-content__form-tel"><input value="ЖДУ ЗВОНКА" type="submit"  class="aside-content__form-btn">
					</form>
				</div>

				<div class="aside-content__confidence">
					<p class="aside-content__confidence-text">Нажимая эту кнопку, Вы соглашаетесь с <strong class="aside-content__confidence-text_strong">условиями обработки персональных данных</strong></p>
				</div>
			</div>
		</div>
	</div>
	<!-- start tab-partners.html-->
	<div class="tab-partners tabcontent" id="tab-partners">

		<div class="tab-partners__content-wrap tabcontent" id="tab-partners-1">
			<div class="tab-partners__content tab-partners__content-blocks">
				<div class="tab-partners__content-block tab-partners__content-block_small">
					<img class="tab-partners__content-img tab-partners__content-img_small" src="<?php bloginfo('template_url')?>/img/docs.png" alt="">
					<a class="tab-partners__content-btn" href="#">Заявка на ипотеку</a>
				</div>

				<div class="tab-partners__content-block tab-partners__content-block_small">
					<img class="tab-partners__content-img tab-partners__content-img_small" src="<?php bloginfo('template_url')?>/img/baby.png" alt="">
					<a class="tab-partners__content-btn" href="#">Материнский	капитал</a>
				</div>

				<div class="tab-partners__content-block tab-partners__content-block_small">
					<img class="tab-partners__content-img tab-partners__content-img_small" src="<?php bloginfo('template_url')?>/img/captain.png" alt="">
					<a class="tab-partners__content-btn" href="#">Военная ипотека</a>
				</div>
			</div>

			<div class="tab-partners__content">


				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>

				<div class="tab-partners__content-block">
					<div class="tab-partners__content-block-top">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.png" alt="">
						<div class="tab-partners__content-text">
							<span class="tab-partners__content-text-name">МКБ</span>
							<span class="tab-partners__content-text-desc">Ипотека от 9,99% годовых</span>
							<span class="tab-partners__content-text-foot">Генеральная лицензия Банка России №1978 от 6 мая 2015г</span>
						</div>
					</div>
					<div class="tab-partners__content-block-bottom">
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Ставка</span>
							<span class="tab-partners__content-label-body">9,99%</span>
						</div>
						<div class="tab-partners__content-label">
							<span class="tab-partners__content-label-title">Срок до</span>
							<span class="tab-partners__content-label-body">20 лет</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-partners__content-wrap tabcontent" id="tab-partners-2">
			<div class="tab-partners__content">
				<div class="tab-partners__content-block tab-partners__content-block_small">
					<a class="tab-partners__content-btn" href="#">Заявка на ипотеку</a>
				</div>

				<div class="tab-partners__content-block tab-partners__content-block_small">
					<img class="tab-partners__content-img tab-partners__content-img_small" src="<?php bloginfo('template_url')?>/img/baby.svg" alt="">
					<a class="tab-partners__content-btn" href="#">Материнский	капитал</a>
				</div>

				<div class="tab-partners__content-block tab-partners__content-block_small">
					<img class="tab-partners__content-img tab-partners__content-img_small" src="<?php bloginfo('template_url')?>/img/captain.svg" alt="">
					<a class="tab-partners__content-btn" href="#">Военная ипотека</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img small" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>

				<div class="tab-partners__content-block">
					<a class="tab-partners__content-link" href="#">
						<img class="tab-partners__content-img" src="<?php bloginfo('template_url')?>/img/mkb.jpg" alt="">
					</a>
				</div>
			</div>

			<nav class="tab-partners__nav">
				<button class="tab__nav-btn tablinks" type="button"onclick="openTab(event, 'tab-partners-1')">1</button>
				<button class="tab__nav-btn tablinks" type="button"onclick="openTab(event, 'tab-partners-2')">2</button>
			</nav>
		</div>
		
		<nav class="nav-local">
			<button class="nav-local__btn tablinks" type="button"onclick="openTab(event, 'tab-partners-1')" id="partnertsDefault">1</button>
			<button class="nav-local__btn tablinks" type="button"onclick="openTab(event, 'tab-partners-2')">2</button>
		</nav>

	</div>
	<!-- end tab-partners.html-->

	<!-- start tab-apartment.html-->
	<div class="apartment tabcontent" id="tab-apartment">
		<div class="apartment__sliders">
			<div class="apartment__slider">
				<div class="header-range">
					<span class="title-range">Стоимость:</span>
					<div class="header-range__btns">
						<button class="header-range__btn header-range__btn_active"><i class="fas fa-ruble-sign"></i></button><button class="header-range__btn">$</button><button class="header-range__btn">&#8364;</button>
					</div>
				</div>
				<div id="cost" class="slider"></div>
			</div>

			<div class="apartment__slider">
				<div class="property-selection__range-slide property-selection__range-slide_area">
					<span class="title-range">Площадь, м<sup>2</sup></span>
					<div id="area" class="slider_area"></div>
				</div>
			</div>
		</div>

		<div class="apartment__filter">
			<div id="flats" class="property-selection__rooms">
				<span class="title-range">Кол-во комнат:</span>
				<div class="property-selection__numbers">1</div>
				<div class="property-selection__numbers active">2</div>
				<div class="property-selection__numbers">3</div>
				<div class="property-selection__numbers">4+</div>
			</div>
			<button class="calc__btn calc__btn_apartment" id="get_table" data-jk="<?=get_the_title()?>" type="button">Подобрать квартиру</button>
		</div>
		<?php
		global $wpdb;
		$mylink = $wpdb->get_results("SELECT * FROM wp_property WHERE jk_id = '".get_the_title()."'");?>
		<table class="apartment__table" id="table">
			<thead class="apartment__table-head">
			<tr class="apartment__table-tr">
				<th class="apartment__table-th">Корпус</th>
				<th class="apartment__table-th">Секц.</th>
				<th class="apartment__table-th">Комн</th>
				<th class="apartment__table-th">Этаж</th>
				<th class="apartment__table-th">Площадь</th>
				<th class="apartment__table-th">Отделка</th>
				<th class="apartment__table-th">Стоимость</th>
			</tr>
			</thead>

			<tbody class="apartment__table-body">
				<?php foreach ($mylink as $value):?>
					<tr class="apartment__table-tr">
						<td class="apartment__table-td"><?=$value->housing?></td>
						<td class="apartment__table-td"><?=$value->section?></td>
						<td class="apartment__table-td"><?=$value->flats?></td>
						<td class="apartment__table-td"><?=$value->floor?></td>
						<td class="apartment__table-td"><?=$value->area?></td>
						<td class="apartment__table-td"><?=$value->decoration?></td>
						<td class="apartment__table-td"><?=$value->price?></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>

	<!-- end tab-apartment.html-->
	
	<div class="tab-apartment" id="tab-apartment"></div>
	
	<!-- start tab-style.html-->
	<div class="tab-style tabcontent" id="tab-style">
		<div class="tab-style__nav-global">
			<button class="tab-style__nav-btn tab-style__nav-btn_active tablinks" type="button">Americano</button>
			<button class="tab-style__nav-btn tablinks" type="button">Арт-декор</button>
			<button class="tab-style__nav-btn tablinks" type="button">Авангард</button>
			<button class="tab-style__nav-btn tablinks" type="button">Классика</button>
			<button class="tab-style__nav-btn tablinks" type="button">Latte</button>
			<button class="tab-style__nav-btn tablinks" type="button">Mocco</button>
		</div>

		<!-- start tab-style_americano.html-->
		<div class="tab-style__content">
			<div class="tab-style__content-blocks">
				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/01.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/01.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>

				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/02.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/02.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>

				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/03.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/03.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>

				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/01.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/01.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>

				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/02.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/02.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>

				<div class="tab-style__content-block">
					<a class="tab-style__content-link" data-fancybox="gallery-style" href="<?php bloginfo('template_url')?>/img/style/03.jpg">
						<img class="tab-style__content-img" src="<?php bloginfo('template_url')?>/img/style/03.jpg">
					</a>

					<p class="tab-style__content-caption">Стиль отделки Americano</p>
				</div>
			</div>

			<nav class="nav-local">
				<button class="nav-local__btn tablinks" type="button">1</button>
				<button class="nav-local__btn tablinks" type="button">2</button>
			</nav>
		</div>
		<!-- end tab-style_americano.html-->
	</div>
	<!-- end tab-style.html-->
	<!-- start tab-progress.html-->
	<div class="tab-progress tabcontent" id="tab-progress">
		<div class="tab-progress__content">
			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/01.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/01.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/02.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/02.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/03.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/03.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/01.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/01.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/02.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/02.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/03.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/03.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/01.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/01.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, vitae.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/02.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/02.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi ducimus eligendi dignissimos saepe cum fugiat, quaerat accusantium hic cumque repudiandae.</h4>
				</div>
			</div>

			<div class="tab-progress__block">
				<a class="tab-progress__content-link" data-fancybox="gallery-progress" href="<?php bloginfo('template_url')?>/img/progress/03.jpg">
					<img class="tab-progress__content-img" src="<?php bloginfo('template_url')?>/img/progress/03.jpg" alt="">
				</a>

				<div class="tab-progress__block-desc">
					<time class="tab-progress__block-time">20.05.1997</time>

					<h4 class="tab-progress__block-title">Корпус 5. Ведутся подготовительные работы для начала строительства.</h4>
				</div>
			</div>
		</div>

		<nav class="nav-local">
			<button class="nav-local__btn tablinks" type="button">1</button>
			<button class="nav-local__btn tablinks" type="button">2</button>
		</nav>
	</div>
	<!-- end tab-progress.html-->
	<div class="tab-gallery" id="tab-gallery"></div>
	<!-- start tab-stock.html-->
	<div class="tab-stock tabcontent" id="tab-stock">
		<div class="tab-stock__content">
			<div class="tab-stock__block">
				<a class="tab-stock__link" data-fancybox data-src="#stock1" href="javascript:;">
					<img class="tab-stock__img" src="<?php bloginfo('template_url')?>/img/stock/01.jpg" alt="">
				</a>

				<div class="tab-stock__desc">
					<h4 class="tab-stock__desc-title">19.01.2018 / Группа компаний "МИЦ" дарит скидки до 18%</h4>

					<p class="tab-stock__desc-text">
						<a class="tab-stock__desc-text" data-fancybox href="#stock1" href="javascript:;">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</a>
					</p>

					<div class="stock__modal" id="stock1">
						<div class="stock__modal-wrap">
							<img class="stock__modal-img" src="<?php bloginfo('template_url')?>/img/stock/01.jpg" alt="">
							<p class="tab-stock__desc-text">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</p>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-stock__block">
				<a class="tab-stock__link" data-fancybox data-src="#stock2" href="javascript:;">
					<img class="tab-stock__img" src="<?php bloginfo('template_url')?>/img/stock/02.jpg" alt="">
				</a>

				<div class="tab-stock__desc">
					<h4 class="tab-stock__desc-title">19.01.2018 / Группа компаний "МИЦ" дарит скидки до 18%</h4>

					<p class="tab-stock__desc-text">
						<a class="tab-stock__desc-text" data-fancybox href="#stock2" href="javascript:;">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</a>
					</p>

					<div class="stock__modal" id="stock2">
						<div class="stock__modal-wrap">
							<img class="stock__modal-img" src="<?php bloginfo('template_url')?>/img/stock/02.jpg" alt="">
							<p class="tab-stock__desc-text">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</p>
						</div>

					</div>
				</div>
			</div>

			<div class="tab-stock__block">
				<a class="tab-stock__link" data-fancybox data-src="#stock3" href="javascript:;">
					<img class="tab-stock__img" src="<?php bloginfo('template_url')?>/img/stock/03.jpg" alt="">
				</a>

				<div class="tab-stock__desc">
					<h4 class="tab-stock__desc-title">19.01.2018 / Группа компаний "МИЦ" дарит скидки до 18%</h4>

					<p class="tab-stock__desc-text">
						<a class="tab-stock__desc-text" data-fancybox href="#stock3" href="javascript:;">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</a>
					</p>

					<div class="stock__modal" id="stock3">
						<div class="stock-modal-wrap">
							<img class="stock__modal-img" src="<?php bloginfo('template_url')?>/img/stock/03.jpg" alt="">
							<p class="tab-stock__desc-text">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</p>
						</div>

					</div>
				</div>
			</div>

			<div class="tab-stock__block">
				<a class="tab-stock__link" data-fancybox data-src="#stock4" href="javascript:;">
					<img class="tab-stock__img" src="<?php bloginfo('template_url')?>/img/stock/01.jpg" alt="">
				</a>

				<div class="tab-stock__desc">
					<h4 class="tab-stock__desc-title">19.01.2018 / Группа компаний "МИЦ" дарит скидки до 18%</h4>

					<p class="tab-stock__desc-text">
						<a class="tab-stock__desc-text" data-fancybox href="#stock5" href="javascript:;">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</a>
					</p>

					<div class="stock__modal" id="stock4">
						<div class="stock__modal-wrap">
							<img class="stock__modal-img" src="<?php bloginfo('template_url')?>/img/stock/01.jpg" alt="">
							<p class="tab-stock__desc-text">Группа компаний "МИЦ" и банк "Российский капитал" запустили новую ипотечную программу - "Семейная ипотека с государственной поддержкой"</p>
						</div>

					</div>
				</div>
			</div>
		</div>

		<nav class="nav-local">
			<button class="nav-local__btn tablinks" type="button">1</button>
			<button class="nav-local__btn tablinks" type="button">2</button>
		</nav>
	</div>
	<!-- end tab-stock.html-->
	
	<!-- start tab-calc.html-->
	<div class="calc tabcontent" id="tab-calc">
		<header class="calc__header"><img src="<?php bloginfo('template_url')?>/img/calc-bg.jpg" alt=""></header>
		<div class="calc__row">
			<div class="calc__time">
				<h3 class="calc__title">Срок кредита, лет</h3>
				<div class="slider_time"></div>
			</div>
		</div>

		<div class="calc__row calc__row_after-slider">
			<div class="calc__field">
				<h3 class="calc__title">Стоимость недвижимости, руб.</h3>
				<input class="calc__input" id="cost" min="0" type="number" placeholder="Введите сумму *">
			</div>

			<div class="calc__field">
				<h3 class="calc__title">Первоначальный взнос, руб</h3>
				<input class="calc__input calc__input_payment" id="first-payment" min="0" type="number" placeholder="Введите сумму *">
			</div>
		</div>

		<div class="calc__row">
			<div class="calc__rate">
				<h3 class="calc__title">Процентная ставка, % годовых</h3>
				<div class="slider_rate"></div>
			</div>
		</div>

		<div class="calc__row calc__row_after-slider">
			<h3 class="calc__title">Сумма кредита</h3>
			<p class="calc__cost calc__final-credit">0 руб.</p>
		</div>

		<div class="calc__row">
			<h3 class="calc__title">Ежемесячный платёж</h3>
			<p class="calc__cost calc__month-payment">0 руб.</p>
		</div>

		<button class="calc__btn">Посчитать</button>
		
		<button class="calc__btn js_open-modal" type="button">Заявка на ипотеку</button>
	</div>

	<div class="modal">
		<div class="modal__overlay js_close-modal"></div>
		<div class="modal__content">
			<button class="modal__close js_close-modal" type="button">X</button>
			<h3 class="modal__title">Оставьте свою заявку!</h3>
			<form class="modal__form" id="modal__form">
				<div class="modal__form-row">
					<label class="modal__form-label" for="name">Ваше имя</label>
					<input class="modal__form-input" type="text" placeholder="Ваше имя">
				</div>

				<div class="modal__form-row">
					<label class="modal__form-label" for="tel">Ваш телефон</label>
					<input class="modal__form-input js_modal-mask" type="text" placeholder="Ваш телефон">
				</div>

				<div class="modal__form-row">
					<input class="calc__btn" type="submit" value="Отправить">
				</div>
			</form>
		</div>
	</div>
	<!-- end tab-calc.html-->
</section>
<!-- end inside-full-desc.html-->