<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
$cat_name = get_query_var('post_type');
$cur_id = get_the_category( $post->ID );
$count = get_the_category($post->ID)[0]->category_count;

?>

<section class="build">
	<?php $blogQuery = new WP_Query([
		'category_name' => 'house',
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
	
	<?php   $n = round(get_the_category($post->ID)[0]->category_count/6)?>
	<?php for($i=1; $i<= $n; $i++):?>
		<a href="#" id="next" data-page="<?=$i?>" data-cat="house" ><?=$i?></a>
	<?php endfor;?>
</div>
<div class="partners__contacts">
	<span><?=$contacts['more']?></span>
	<a href="tel:<?=$contacts['phone']?>" class="btn-phone"><span><?=$contacts['phone']?></span></a>
	<a href="<?=$contacts['horder']?>" class="sidebar__feedback"><?=$contacts['order']?></a>
</div>