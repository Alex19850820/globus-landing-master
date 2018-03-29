<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package globus-landing-master
 */
$contacts = fw_get_db_customizer_option();

// Получим элементы меню на основе параметра $menu_name (тоже что и 'theme_location' или 'menu' в аргументах wp_nav_menu)
// Этот код - основа функции wp_nav_menu, где получается ID меню из слага
$menu_name = 'menu 3';
$locations = get_nav_menu_locations();
$menu_name2 = 'menu 4';
$locations2 = get_nav_menu_locations();
$menu_name3 = 'menu 5';
$locations3 = get_nav_menu_locations();


?>

<!-- start footer.html-->
<footer class="footer">
	<div class="footer__wrap">
				<div class="footer__item">
					<?php
					if( $locations && isset($locations[ $menu_name ]) ){
						$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем объект меню
						$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
						// создаем список
						$menu_list = '<h3 class="footer__title">';
						foreach ( (array) $menu_items as $key => $menu_item ){
							$menu_list .= '<a href="' . $menu_item->url . '" style ="color:#b89855;">' . $menu_item->title . '</a>';
						}
						echo $menu_list .= '</h3>';
					}
					else
						echo $menu_list = '<ul><li>Меню "' . $menu_name . '" не определено.</li></ul>';
					?>
					<ul class="footer__nav">
					</ul>
				</div>
				<div class="footer__item">
					
						<?php
						if( $locations2 && isset($locations2[ $menu_name2 ]) ){
							$menu = wp_get_nav_menu_object( $locations2[ $menu_name2 ] ); // получаем объект меню
							$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
							// создаем список
							$menu_list = '<h3 class="footer__title">'.$menu_items[0]->title.'</h3>';
							$menu_list .= '<ul class="footer__nav" >';
							foreach ( (array) $menu_items as $key => $menu_item ){
								$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
							}
							echo $menu_list .= '</ul>';
						}
						else
							echo $menu_list = '<ul><li>Меню "' . $menu_name . '" не определено.</li></ul>';
						?>
					<ul class="footer__nav">
					</ul>
				</div>
				<div class="footer__item">
					
					<?php
					if( $locations3 && isset($locations3[ $menu_name3 ]) ){
						$menu = wp_get_nav_menu_object( $locations3[ $menu_name3 ] ); // получаем объект меню
						$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
						// создаем список
						$menu_list = '<h3 class="footer__title">'.$menu_items[0]->title.'</h3>';
						$menu_list .= '<ul class="footer__nav" >';
						foreach ( (array) $menu_items as $key => $menu_item ){
							$menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
						}
						echo $menu_list .= '</ul>';
					}
					else
						echo $menu_list = '<ul><li>Меню "' . $menu_name . '" не определено.</li></ul>';
					?>
					<ul class="footer__nav">
					</ul>
				</div>
		
		

		
		
		
		
		<div class="footer__item">
			<h3 class="footer__title">Контакты</h3>
			<ul class="footer__nav">
				<li><a href="tel:<?=$contacts['phone']?>"><i class="fa fa-phone" aria-hidden="true"></i><?=$contacts['phone']?></a></li>
				<li><a href="mailto:<?=$contacts['email']?>"><i class="fas fa-envelope"></i> <?=$contacts['email']?></a></li>
				<li><a href="#"><i class="far fa-clock"></i> <?=$contacts['time']?> </a></li>
				<li><a href="#"><i class="fas fa-map-marker"></i> <?=$contacts['address']?></a></li>
			</ul>
		</div>
	</div>
	<div class="footer__copyright">
		© Globus Estate 2018 г.  Все права защищены
		Представленная информация не является публичной офертой
	</div>
</footer>
<!-- end footer.html-->
</div>
<?php wp_footer(); ?>
