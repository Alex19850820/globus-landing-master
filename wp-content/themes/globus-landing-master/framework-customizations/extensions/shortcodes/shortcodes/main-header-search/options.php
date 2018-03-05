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
	'regions' => [
		'type' => 'addable-popup',
		'label' => __('Добавить область', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Область', '{domain}'),
				'desc'  => __('Введите область', '{domain}'),
				'help'  => __('Введите область например "в Московской обл."', '{domain}'),
			],
		],
	],
	'objects' => [
		'type' => 'addable-popup',
		'label' => __('Добавить недвижимость', '{domain}'),
		'template' => '{{- title }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'title'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Недвижимость', '{domain}'),
				'desc'  => __('Введите недвижиммость', '{domain}'),
				'help'  => __('Введите например "Апартамент"', '{domain}'),
			],
		],
	],
];