<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */
$contacts = fw_get_db_customizer_option();
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
							<span>Стоимость: <?=fw_get_db_post_option($blogQuery->post->ID, 'price')?></span>
							Срок сдачи: <?=fw_get_db_post_option($blogQuery->post->ID, 'period')?>
						</div>
					</div>
				</div>
			</div>
		<?php $i++; }?>
	</div>

	<div class="partners__contacts" style="margin-top: 40px">
		<span><?=$contacts['more']?></span>
		<a href="tel:<?=$contacts['phone']?>" class="btn-phone"><span><?=$contacts['phone']?></span></a>
		<a href="<?=$contacts['horder']?>" class="sidebar__feedback"><?=$contacts['order']?></a>
	</div>

</section>
<!-- end inside-interesting.html-->