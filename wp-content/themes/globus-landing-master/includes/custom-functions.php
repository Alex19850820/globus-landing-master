<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 02.10.2017
 * Time: 14:22
 */


add_action( 'wp_ajax_get_next_page', 'get_next_page' );
add_action( 'wp_ajax_nopriv_get_next_page', 'get_next_page' );
add_action( 'wp_ajax_take_map', 'take_map' );
add_action( 'wp_ajax_nopriv_take_map', 'take_map' );
add_action( 'wp_ajax_get_table', 'get_table' );
add_action( 'wp_ajax_nopriv_get_table', 'get_table' );

//
function get_next_page () { ?>
	<?php $blogQuery = new WP_Query( [
		'category_name'  => $_POST['cat'],
		'posts_per_page' => 6,
		'paged'          => $_POST['page'],
	] );
	$contacts = fw_get_db_customizer_option();
	?>
	
	<?php $i = 0;
	while( $blogQuery->have_posts() ) {
		$blogQuery->the_post(); ?>
		<div class="build__item">
			<div class="build__img">
				<a class="build__img-bg" href="<?php the_permalink(); ?>">
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
						<span><?=fw_get_db_post_option( $blogQuery->post->ID,'city' )?></span>
						<?php if ( fw_get_db_post_option( $blogQuery->post->ID,'md' ) ): ?>
							<?=fw_get_db_post_option( $blogQuery->post->ID,'md' )?>
						<?php endif; ?>
					</div>
					<div class="build__price">
						<span><?=fw_get_db_post_option( $blogQuery->post->ID,'price' )?></span>
						Срок сдачи: <?=fw_get_db_post_option( $blogQuery->post->ID,'period' )?>
					</div>
					<a href="#" class="build__btn"
							data-address="<?=fw_get_db_post_option( $blogQuery->post->ID,'address' )?>">Смотреть на
						карте</a>
					<a href="<?php the_permalink(); ?>" class="build__btn">Подробнее</a>
				</div>
			</div>
		</div>
	<?php;}
};?>
<?php function take_map () { ?>
	<div class="map__wrap" id="yaMap">
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
		<script>
			var map = new ACMap();
			var districtAddress;
			districtAddress = '<?=$_POST['address']?>';
			$('.map__wrap').slideDown(0);
			$('.map__btn').addClass('active');
			map.customGeoCoder(districtAddress, [], function (coor) {
				map.init({
					mapId: 'yaMap',
					height: '365px',
					zoom: 11,
					center: coor,
					controls: ['default', 'routeButtonControl'],
					placeMarks: [
						{
							address: districtAddress,
							properties: {
								hintContent: districtAddress,
								// balloonContent: districtAddress + ' - шикарные апартаменты!'
								balloonContent: districtAddress + ''
							},
							options: {
								draggable: true
							}
						}
					]
				});
				// console.log(coor); координаты
			});
		</script>
	</div>
<?php die();}?>
<?php function get_table (){ ?>
	<?php global $wpdb;
	$cost = explode(' млн.', $_POST['cost']);
	$cost = ($cost[0]) * 1000000;
	$area = explode(' м2', $_POST['area']);
	$area = $area[0];
	$flats = $_POST['flats'];
	$jk = $_POST['jk_id'];
	$region = $_POST['region'];
	$property = $_POST['property'];
	
	if(isset($property)) {
		$Query = new WP_Query( [
			'category_name' => $property,
		] );
		$title = [];
		foreach( $Query->posts as $pst => $val ){
			$title[] = $val->post_title;
		}
		
		
		$nlink = $wpdb->get_results("SELECT *
												  FROM wp_property
												  WHERE jk_id IN (  '". implode("," , $title)."')
												  AND price >= '".$cost."'
												  AND area >=  '".$area."'
												  AND flats = ".$flats."
												   ");
		
		fw_print($nlink);
	}

	
	?>
	<?php if($flats == '4+'):?>
		<?php $mylink = $wpdb->get_results("SELECT *
												  FROM wp_property
												  WHERE jk_id = '".$jk."'
												  AND price >= '".$cost."'
												  AND area >=  '".$area."'
												  AND flats >=  '4'
												   ");?>
	<?php else:?>
		<?php $mylink = $wpdb->get_results("SELECT *
												  FROM wp_property
												  WHERE jk_id = '".$jk."'
												  AND price >= '".$cost."'
												  AND area >=  '".$area."'
												  AND flats = '".$flats."'
												   ");?>
	<?php endif;?>
	
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
<?php }?>
