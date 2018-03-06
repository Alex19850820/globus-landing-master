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
	'slider' => [
		'type' => 'addable-popup',
		'label' => __('Добавить слайд', '{domain}'),
		'template' => '{{- text }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку слайда', '{domain}'),
				'images_only' => true,
			],
			'text'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Текст слайд', '{domain}'),
				'desc'  => __('Введите текст', '{domain}'),
				'help'  => __('Введите текст например "Первоначальный взнос 0%"', '{domain}'),
			],
		],
	],
	
];