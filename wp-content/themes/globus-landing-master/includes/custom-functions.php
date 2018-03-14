<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 02.10.2017
 * Time: 14:22
 */


add_action( 'wp_ajax_get_next_page', 'get_next_page' );
add_action( 'wp_ajax_nopriv_get_next_page', 'get_next_page' );
//
function get_next_page () { ?>
	<?php $blogQuery = new WP_Query([
		'category_name' => 'house',
		'posts_per_page' => 6,
		'paged' => $_POST['page'],
		
	]);
	$contacts = fw_get_db_customizer_option();
	?>
	
	<?php $i = 0; while ( $blogQuery->have_posts() ) { $blogQuery->the_post();  ?>
		<div class="build__item">
			<div class="build__img">
				<a  class="build__img-bg" href="<?php the_permalink(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="">
				</a>
				<a href="#" class="build__btn-sale">Скидки</a>
				<a href="#" class="build__start-sales">Старт продаж</a>
				<span class="build__label">Ипотека 6,98% <i class="far fa-calendar-check"></i></span>
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
					<a href="#" class="build__btn">Смотреть на карте</a>
					<a href="<?php the_permalink(); ?>" class="build__btn">Подробнее</a>
				</div>
			</div>
		</div>
	<?php };?>
	<div class="build__pagination">
		<?php $n = round(get_posts_count_per_cat(2)/6)?>
		<?php for($i=1; $i<= $n; $i++):?>
			<a href="#" id="next" data-page="<?=$i?>" ><?=$i?></a>
		<?php endfor;?>
	</div>
	<div class="partners__contacts">
		<span><?=$contacts['more']?></span>
		<a href="tel:<?=$contacts['phone']?>" class="btn-phone"><span><?=$contacts['phone']?></span></a>
		<a href="<?=$contacts['horder']?>" class="sidebar__feedback"><?=$contacts['order']?></a>
	</div>
<?php }?>