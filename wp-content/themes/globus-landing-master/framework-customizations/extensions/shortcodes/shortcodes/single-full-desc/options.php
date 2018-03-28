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
		'value' => 'Полный адрес: Одинцово, ул. Мякининская, мкр. Пашинский, д.2',
		'label' => __('Заголовок', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст например "Одинцово"', '{domain}'),
	],
	'paragraph' => [
		'type' => 'addable-popup',
		'label' => __('Добавить абзац', '{domain}'),
		'template' => '{{- h2 }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'h2'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Заголовок', '{domain}'),
				'desc'  => __('Введите текст', '{domain}'),
				'help'  => __('Введите текст', '{domain}'),
			],
			'text' => [
				'type' => 'addable-popup',
				'label' => __('Добавить текст', '{domain}'),
				'template' => '{{- p }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'p'     => [
						'type'  => 'textarea',
						'value' => '',
						'label' => __('Текст', '{domain}'),
						'desc'  => __('Введите текст', '{domain}'),
						'help'  => __('Введите текст ', '{domain}'),
					],
				],
			],
		],
	],
	'mortgage'     => [
		'type'  => 'text',
		'value' => 'Ипотека 6,98%',
		'label' => __('Ипотека', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'credit'     => [
		'type'  => 'text',
		'value' => 'Рассрочка',
		'label' => __('Рассрочка', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'bonus'     => [
		'type'  => 'text',
		'value' => 'Подарочные сертификаты',
		'label' => __('Бонус', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'img'     => [
		'type'  => 'upload',
		'label' => __('Фото менеджера', '{domain}'),
		'desc'  => __('Выберите фото', '{domain}'),
		'help'  => __('Выберите фото', '{domain}'),
		'images_only' => true,
	],
	'name'     => [
		'type'  => 'text',
		'value' => 'Владимир Чистяков',
		'label' => __('Имя менеджера', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'tabs' => [
		'type' => 'addable-popup',
		'label' => __('Редактировать табы', '{domain}'),
		'template' => __('Табы', '{domain}'),
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'tab-describe' => [
				'type'  => 'switch',
				'value' => 'Описание',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Описание', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Описание',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-apartment' => [
				'type'  => 'switch',
				'value' => 'Выбор квартиры',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Выбор квартиры', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Выбор квартиры',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-style' => [
				'type'  => 'switch',
				'value' => 'Стиль отделки',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Стиль отделки', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Стиль отделки',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-gallery' => [
				'type'  => 'switch',
				'value' => 'Галерея',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Галерея', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Галерея',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-stock' => [
				'type'  => 'switch',
				'value' => 'Акции',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Акции', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Акции',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-progress' => [
				'type'  => 'switch',
				'value' => 'Ход строительства',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Ход строительства', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Ход строительства',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-partners' => [
				'type'  => 'switch',
				'value' => 'Банки партнёры',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Банки партнёры', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Банки партнёры',
					'label' => __('Показывать', '{domain}'),
				),
			],
			'tab-calc' => [
				'type'  => 'switch',
				'value' => 'Ипотечный калькулятор',
				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
				'label' => __('Ипотечный калькулятор', '{domain}'),
				'desc'  => __('Description', '{domain}'),
				'help'  => __('Help tip', '{domain}'),
				'left-choice' => array(
					'value' => '',
					'label' => __('Не показывать', '{domain}'),
				),
				'right-choice' => array(
					'value' => 'Ипотечный калькулятор',
					'label' => __('Показывать', '{domain}'),
				),
			],
		],
	]
	
];