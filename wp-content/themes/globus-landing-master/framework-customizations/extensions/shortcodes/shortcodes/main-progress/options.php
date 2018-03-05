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
	'progress' => [
		'type' => 'addable-popup',
		'label' => __('Добавить объект продаж', '{domain}'),
		'template' => '{{- text }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'count'     => [
				'type'  => 'text',
				'value' => '0',
				'label' => __('Количество', '{domain}'),
				'desc'  => __('Количество', '{domain}'),
				'help'  => __('Введите число', '{domain}'),
			],
			'text'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Объект', '{domain}'),
				'desc'  => __('Объект', '{domain}'),
				'help'  => __('Введите название объекта', '{domain}'),
			],
		],
	],
	
];