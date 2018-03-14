<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<?php $blogQuery = new WP_Query([
	'category_name' => 'house',
	'posts_per_page' => 4,
]); ?>

<!-- start inside-interesting.html-->
<section class="interesting">

	<h2 class="interesting__title">Возможно, вас <span class="interesting__title_colored">заинтересуют</span></h2>

	<div class="interesting__wrap">
		
		<?php $i = 0; while ( $blogQuery->have_posts() ) { $blogQuery->the_post(); ?>
			<div class="build__item build__item_interesting">
				<a href="<?php the_permalink(); ?>">
					<div class="build__img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
				</a>
<!--				< class="build__desc">-->
				<h2 class="build__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
				</div>
<!--				</div>-->
			</div>
		<?php $i++; }?>
	</div>

	<div class="partners__contacts" style="margin-top: 40px">
		<span>Узнать больше по телефону:</span>
		<a href="tel:<?=$atts['hphone']?>" class="btn-phone"><span><?=$atts['phone']?></span></a>
		<a href="<?=$atts['href']?>" class="sidebar__feedback">Заказать обратный звонок</a>
	</div>

</section>
<!-- end inside-interesting.html-->