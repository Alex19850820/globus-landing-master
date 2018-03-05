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
		'label' => __('Добавить картинку партнера', '{domain}'),
		'template' => '{{- img }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'img'     => [
				'type'  => 'upload',
				'value' => '',
				'label' => __('Добавить картинку', '{domain}'),
				'images_only' => true,
			],
			'href'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Ссылка', '{domain}'),
				'desc'  => __('Ссылка на страницу партнера', '{domain}'),
				'help'  => __('Введите ссылка страница партнера', '{domain}'),
			],
		],
	],
	'title'     => [
		'type'  => 'text',
		'value' => 'Узнать больше по телефону:',
		'label' => __('Заголовок', '{domain}'),
	],
	'phone'     => [
		'type'  => 'text',
		'value' => '+7 (499) 390-55-71',
		'label' => __('Телефон', '{domain}'),
	],
	'href'     => [
		'type'  => 'text',
		'value' => '+74993905571',
		'label' => __('Cылка телефон', '{domain}'),
	],
	'info'     => [
		'type'  => 'text',
		'value' => '+74993905571',
		'label' => __('Текст', '{domain}'),
		'desc' => __('Заказать или что-то еще', '{domain}'),
		'help' => __('Введите текст', '{domain}'),
	],
	'href2'     => [
		'type'  => 'text',
		'value' => '#',
		'label' => __('Ссылка', '{domain}'),
		'desc' => __('Ссылка', '{domain}'),
		'help' => __('Введите ссылку', '{domain}'),
	],
	
];