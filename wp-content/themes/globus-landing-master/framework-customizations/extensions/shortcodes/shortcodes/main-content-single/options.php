<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
//    //ключ - slug опции, к которому будем обращаться во view
    //значение - массив конфигураций для опции
	/*'title'     => [
		'type'  => 'text',
		'value' => 'наши результаты',
		'label' => __('Заголовок', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'value' => '',
		'label' => __('Добавить картинку', '{domain}'),
		'images_only' => true,
	],
	'title2'     => [
		'type'  => 'text',
		'value' => 'Наша миссия - Ваша красота',
		'label' => __('Заголовок поста', '{domain}'),
	],*/
//	'house' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить место', '{domain}'),
//		'template' => '{{- h2 }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
//			'img'     => [
//				'type'  => 'upload',
//				'value' => '',
//				'label' => __('Добавить картинку здания', '{domain}'),
//				'images_only' => true,
//			],
//			'h2'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Заголовок', '{domain}'),
//			],
//
//			'href'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Ссылка', '{domain}'),
//				'desc'  => __('Введите адрес на который будет ссылаться страница', '{domain}'),
//				'help'  => __('Введите страницу', '{domain}'),
//			],
//		],
//	],
	'price'     => [
		'type'  => 'text',
		'value' => 'от <span>2</span> млн. руб.',
		'label' => __('Цена', '{domain}'),
	],
	'area'     => [
		'type'  => 'text',
		'value' => 'от 184 500 р./м<sup>2</sup>',
		'label' => __('Цена за кв метр', '{domain}'),
	],
	'city'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Город', '{domain}'),
	],
	'md'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Микрорайон', '{domain}'),
	],
	'info'     => [
		'type'  => 'text',
		'value' => '',
		'label' => __('Текст ссылки', '{domain}'),
		'desc'  => __('Подробнее или еще или узнать больше...', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
];