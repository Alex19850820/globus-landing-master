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
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-describe')" id="default">Описание</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-apartment')">Выбор квартиры</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-style')">Стиль отделки</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-gallery')">Галерея</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-stock')">Акции</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-progress')">Ход строительства</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-partners')">Банки партнёры</button></li>
		<li><button class="full-desc__btn tablinks" type="button" onclick="openTab(event, 'tab-calc')">Ипотечный калькулятор</button></li>
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
	<div class="tab-calc" id="tab-calc"></div>
</section>
<!-- end inside-full-desc.html-->