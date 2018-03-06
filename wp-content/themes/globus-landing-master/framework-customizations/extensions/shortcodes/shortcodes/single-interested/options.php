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
	'house' => [
		'type' => 'addable-popup',
		'label' => __('Добавить информацию', '{domain}'),
		'template' => '{{- city }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
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
			'price'     => [
				'type'  => 'text',
				'value' => 'от <b>900</b> тыс. руб.',
				'label' => __('Цена', '{domain}'),
			],
			'area'     => [
				'type'  => 'text',
				'value' => '2кв. 2018г.',
				'label' => __('Цена за кв метр', '{domain}'),
			],
			'city'     => [
				'type'  => 'text',
				'value' => 'Видное',
				'label' => __('Город', '{domain}'),
			],
			'md'     => [
				'type'  => 'text',
				'value' => 'м. Домодедовская',
				'label' => __('Микрорайон', '{domain}'),
			],
		],
	],
];