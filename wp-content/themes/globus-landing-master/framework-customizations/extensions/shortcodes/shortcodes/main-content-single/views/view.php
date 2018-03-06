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
	<?php while ( $blogQuery->have_posts() ) { $blogQuery->the_post(); ?>
		<div class="housing__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="housing__content">
				<h2 class="housing__title"><?php the_title(); ?></h2>
				<div>
					<div class="housing__price"><?=$atts['price']?></div>
					<div class="housing__area"><?=$atts['area']?></div>
				</div>
				<div class="housing__city">
					<?=$atts['city']?>
					<?php if(isset($atts['md'])):?>
						<span> <?=$atts['md']?></span>
					<?php endif;?>
				</div>
			</div>
			<a href="<?php the_permalink(); ?>" class="btn-white"><?=$atts['info']?></a>
		</div>
	<?php } ?>
	<!--textblock in wp then shortcode main-content2-->