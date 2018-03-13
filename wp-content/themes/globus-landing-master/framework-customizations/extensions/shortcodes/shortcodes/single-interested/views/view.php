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
				< class="build__desc">
				<h2 class="build__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="build__desc-wrap">
						<div class="build__location">
							<span><?=$atts[$i]['city']?></span>
							<?=$atts[$i]['city']?>
							<?php if(isset($atts[$i]['md'])):?>
								<?=$atts[$i]['md']?>
							<?php endif;?>
						</div>
						<div class="build__price">
							<span><?=$atts['house'][$i]['price']?></span>
							Срок сдачи: <?=$atts['house'][$i]['area']?>
						</div>
					</div>
				</div>
			</div>
		<?php $i++; }?>
	</div>

	<div class="partners__contacts" style="margin-top: 40px">
		<span>Узнать больше по телефону:</span>
		<a href="tel:+74993905571" class="btn-phone"><span>+7 (499) 390-55-71</span></a>
		<a href="#" class="sidebar__feedback">Заказать обратный звонок</a>
	</div>

</section>
<!-- end inside-interesting.html-->