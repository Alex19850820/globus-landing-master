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
	<?php while ( $blogQuery->have_posts() ) { $blogQuery->the_post();?>
		<div class="housing__item" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="housing__content">
				<h2 class="housing__title"><?php the_title(); ?></h2>
				<div>
					<div class="housing__price"><?=fw_get_db_post_option($blogQuery->post->ID, 'price')?></div>
					<div class="housing__area"><?=fw_get_db_post_option($blogQuery->post->ID, 'price2')?></div>
				</div>
				<div class="housing__city">
					<?=fw_get_db_post_option($blogQuery->post->ID, 'city')?>
					<?php if(fw_get_db_post_option($blogQuery->post->ID, 'md')):?>
						<span> <?=fw_get_db_post_option($blogQuery->post->ID, 'md')?></span>
					<?php endif;?>
				</div>
			</div>
			<a href="<?php the_permalink(); ?>" class="btn-white"><?=fw_get_db_post_option($blogQuery->post->ID, 'text2')?></a>
		</div>
	<?php } ?>
	<!--textblock in wp then shortcode main-content2-->