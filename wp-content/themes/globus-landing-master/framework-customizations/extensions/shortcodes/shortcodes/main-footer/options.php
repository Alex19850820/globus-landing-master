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
	'menu' => [
		'type' => 'addable-popup',
		'label' => __('Добавить пункт меню', '{domain}'),
		'template' => '{{- h3 }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'h3'     => [
				'type'  => 'text',
				'value' => 'Новостройки',
				'label' => __('Заголовок', '{domain}'),
			],
			'nav' => [
				'type' => 'addable-popup',
				'label' => __('Добавить пункт меню', '{domain}'),
				'template' => '{{- title }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'title'     => [
						'type'  => 'text',
						'value' => '',
						'label' => __('Текст меню', '{domain}'),
						'desc'  => __('Введите текст например "Квартиры"', '{domain}'),
						'help'  => __('Введите текст', '{domain}'),
					],
					'href'     => [
						'type'  => 'text',
						'value' => '',
						'label' => __('Ссылка', '{domain}'),
						'desc'  => __('Введите адрес на который будет ссылаться страница', '{domain}'),
						'help'  => __('Введите страницу', '{domain}'),
					],
				],
			],
		],
	],
	
];