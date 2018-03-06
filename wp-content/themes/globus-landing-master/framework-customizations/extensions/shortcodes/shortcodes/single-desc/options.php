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
	'title'     => [
		'type'  => 'text',
		'value' => 'Одинцово',
		'label' => __('Заголовок', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст например "Одинцово"', '{domain}'),
	],
	'md'     => [
		'type'  => 'text',
		'value' => '<strong>м. Мякино</strong> (15 минут пешком)',
		'label' => __('Микрорайон', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст например "м. Мякино"', '{domain}'),
	],
	'station'     => [
		'type'  => 'text',
		'value' => '<strong>ж/д станция:</strong> Павшино',
		'label' => __('Станция', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'road'     => [
		'type'  => 'text',
		'value' => '<strong>Шоссе:</strong> Волоколамское',
		'label' => __('Дорога', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'price'     => [
		'type'  => 'text',
		'value' => 'от <span class="cost__number">900</span> тыс. руб.',
		'label' => __('Цена', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'cur'     => [
		'type'  => 'text',
		'value' => '2кв. 2018г.',
		'label' => __('Срок сдачи', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	
//	'slider' => [
//		'type' => 'addable-popup',
//		'label' => __('Добавить слайд', '{domain}'),
//		'template' => '{{- text }}',
//		'size' => 'large', // small, medium, large
//		'limit' => 0, // limit the number of popup`s that can be added
//		'add-button-text' => __('добавить', '{domain}'),
//		'sortable' => true,
//		'popup-options' => [
//			'img'     => [
//				'type'  => 'upload',
//				'value' => '',
//				'label' => __('Добавить картинку слайда', '{domain}'),
//				'images_only' => true,
//			],
//			'text'     => [
//				'type'  => 'text',
//				'value' => '',
//				'label' => __('Текст слайд', '{domain}'),
//				'desc'  => __('Введите текст', '{domain}'),
//				'help'  => __('Введите текст например "Первоначальный взнос 0%"', '{domain}'),
//			],
//		],
//	],
	
];