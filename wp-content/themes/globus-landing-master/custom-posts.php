<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 26.03.2018
 * Time: 17:04
 */
// Регистрация пользовательского типа записи 'Городская недвижимость'
function wptp_create_post_type() {
	$labels = array(
		'name' => __( 'Городская недвижимость' ),
		'singular_name' => __( 'Городская недвижимость' ),
		'add_new' => __( 'Новая запись' ),
		'add_new_item' => __( 'Добавить новую запись' ),
		'edit_item' => __( 'Редактировать запись' ),
		'new_item' => __( 'Новая запись' ),
		'view_item' => __( 'Просмотреть запись' ),
		'search_items' => __( 'Поиск записи' ),
		'not_found' =>  __( 'Записи не найдены' ),
		'not_found_in_trash' => __( 'Записи не найдены в корзине' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'taxonomies' => array('category'),
	);
	register_post_type( 'cityb', $args );
}
add_action( 'init', 'wptp_create_post_type' );

// Регистрация пользовательского типа записи 'Загородная недвижимость'
function wpn_create_post_type() {
	$labels = array(
		'name' => __( 'Загородная недвижимость' ),
		'singular_name' => __( 'Загородная недвижимость' ),
		'add_new' => __( 'Новая запись' ),
		'add_new_item' => __( 'Добавить новую запись' ),
		'edit_item' => __( 'Редактировать запись' ),
		'new_item' => __( 'Новая запись' ),
		'view_item' => __( 'Просмотреть запись' ),
		'search_items' => __( 'Поиск записи' ),
		'not_found' =>  __( 'Записи не найдены' ),
		'not_found_in_trash' => __( 'Записи не найдены в корзине' ),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'taxonomies' => array('category'),
	);
	register_post_type( 'cside', $args );
	
}
add_action( 'init', 'wpn_create_post_type' );