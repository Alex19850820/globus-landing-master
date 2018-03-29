<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 27.03.2018
 * Time: 11:04
 */
get_header();

$cat_name = get_query_var('category_name');
$cur_id = get_the_category( $post->ID );

?>
	<!-- start crumbs.html-->
	<section class="crumbs">
		<ul class="crumbs__link">
			<?php echo fw_ext_get_breadcrumbs('<i class="fas fa-chevron-right"></i>');?>
			<?php preg_match_all('|<span class="last-item">(.*)</span>|', fw_ext_get_breadcrumbs(), $match);
			?>
		</ul>
		
	</section>
	<!-- end crumbs.html-->
	<!-- start map.html-->
	<div class="map">
		<h2 class="map__title">
			<?=$match[1][0]?>
		</h2>
		<div id="result">
			<div class="map__wrap" id="yaMap">
				<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			</div>
		</div>

		<div class="map__wrapper">
			<a href="#" class="map__btn">показать объекты на карте</a>
		</div>
	</div>
	<!-- end map.html-->
	<!-- start new-buildings.html-->
	<section class="property-selection">

		<form action="#">

			<div class="property-selection__range-slide">

				<div class="header-range">
					<span class="title-range">Стоимость:</span>
					<div class="header-range__btns">
						<button class="header-range__btn header-range__btn_active"><i class="fas fa-ruble-sign"></i></button><button class="header-range__btn">$</button><button class="header-range__btn">&#8364;</button>
					</div>
				</div>
				<div class="slider"></div>

				<div class="custom-select">
					<select>
						<option value="0">Выберете регион</option>
						<option value="1">в Ростовской обл.</option>
						<option value="2">в Московской обл.</option>
						<option value="3">в Ростовской обл.</option>
						<option value="4">в Московской обл.</option>
						<option value="5">в Ростовской обл.</option>
						<option value="6">в Московской обл.</option>
						<option value="7">в Ростовской обл.</option>
					</select>
				</div>
				<div class="custom-select">
					<select>
						<option value="0">Вся недвижимость</option>
						<option value="1">Апартаменты</option>
						<option value="2">Апартаменты</option>
						<option value="3">Апартаменты</option>
						<option value="4">Апартаменты</option>
						<option value="5">Апартаменты</option>
						<option value="6">Апартаменты</option>
						<option value="7">Апартаменты</option>
					</select>
				</div>

			</div>

			<div class="property-selection__range-slide property-selection__range-slide_area">
				<span class="title-range">Площадь, м<sup>2</sup></span>
				<div class="slider_area"></div>

				<div class="property-selection__rooms">
					<span class="title-range">Кол-во комнат:</span>
					<div class="property-selection__numbers">1</div>
					<div class="property-selection__numbers active">2</div>
					<div class="property-selection__numbers">3</div>
					<div class="property-selection__numbers">4+</div>
				</div>

			</div>

			<a href="#" class="btn-white">показать</a>
		</form>

	</section>

	<section class="build">

		<?php
		
		$blogQuery = new WP_Query([
			'category_name' => $cat_name,
			'posts_per_page' => 6,
		]);
		$contacts = fw_get_db_customizer_option();

		?>
		
		<?php $z = 0; while ( $blogQuery->have_posts() ) { $z++; $blogQuery->the_post();  ?>
			<div class="build__item">
				<div class="build__img">
					<a  class="build__img-bg" href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</a>
					<a href="#" class="build__btn-sale">Скидки</a>
					<a href="#" class="build__start-sales">Старт продаж</a>
					<span class="build__label"><?=fw_get_db_post_option($blogQuery->post->ID, 'mortgage')?><i class="far fa-calendar-check"></i></span>
				</div>
				<div class="build__desc">
					<h2 class="build__title"><?php the_title(); ?></h2>
					<div class="build__desc-wrap">
						<div class="build__location">
							<span><?=fw_get_db_post_option($blogQuery->post->ID, 'city')?></span>
							<?php if(fw_get_db_post_option($blogQuery->post->ID, 'md')):?>
								<?=fw_get_db_post_option($blogQuery->post->ID, 'md')?>
							<?php endif;?>
						</div>
						<div class="build__price">
							<span><?=fw_get_db_post_option($blogQuery->post->ID, 'price')?></span>
							Срок сдачи: <?=fw_get_db_post_option($blogQuery->post->ID, 'period')?>
						</div>
						<a href="#" class="build__btn" data-address="<?=fw_get_db_post_option($blogQuery->post->ID, 'address')?>">Смотреть на карте</a>
						<a href="<?php the_permalink(); ?>" class="build__btn">Подробнее</a>
					</div>
				</div>
			</div>
		<?php };?>

	</section>

	<div class="build__pagination">
		<?php $n = get_the_category($post->ID)[0]->category_count/6; ?>
		<?php for($i=1; $i<= $n; $i++):?>
			<a href="#" id="next" data-page="<?=$i?>" data-cat="<?=$cat_name?>" ><?=$i?></a>
		<?php endfor;?>
	</div>
	<div class="partners__contacts">
		<span><?=$contacts['more']?></span>
		<a href="tel:<?=$contacts['phone']?>" class="btn-phone"><span><?=$contacts['phone']?></span></a>
		<a href="<?=$contacts['horder']?>" class="sidebar__feedback"><?=$contacts['order']?></a>
	</div>

<?php get_footer(); ?>