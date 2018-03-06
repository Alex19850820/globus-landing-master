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

<!-- start content.html-->
<main class="housing">
	<?php $i = 0; while ( $blogQuery->have_posts() ) { $blogQuery->the_post();  ?>
			<div class="housing__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
				<div class="housing__content">
					<h2 class="housing__title"><?php the_title(); ?></h2>
					<div>
						<div class="housing__price"><?=$atts['house'][$i]['price']?></div>
						<div class="housing__area"><?=$atts['house'][$i]['area']?></div>
					</div>
					<div class="housing__city">
						<?=$atts['house'][$i]['city']?>
						<?php if(isset($atts['house'][$i]['md'])):?>
							<span> <?=$atts['house'][$i]['md']?></span>
						<?php endif;?>
					</div>
				</div>
				<a href="<?php the_permalink(); ?>" class="btn-white"><?=$atts['house'][$i]['info']?></a>
			</div>
	<?php $i++; } ?>
	<!--textblock in wp then shortcode main-content2-->