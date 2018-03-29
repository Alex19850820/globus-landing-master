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
	'region' => [
		'type' => 'addable-popup',
		'label' => __('Добавить регион', '{domain}'),
		'template' => '{{- text }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'text'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Область', '{domain}'),
				'help' => __('Введите область например Московская обл.', '{domain}'),
			],
			'text2'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Текст области', '{domain}'),
				'help' => __('Введите область например в Московской обл.', '{domain}'),
			],
		]
	],
	'jk' => [
		'type' => 'addable-popup',
		'label' => __('Добавить недвижимость', '{domain}'),
		'template' => '{{- text }}',
		'size' => 'large', // small, medium, large
		'limit' => 0, // limit the number of popup`s that can be added
		'add-button-text' => __('добавить', '{domain}'),
		'sortable' => true,
		'popup-options' => [
			'text'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Навзвание недвижимости', '{domain}'),
				'help' => __('Введите недвижимость например Квартира', '{domain}'),
			],
			'text2'     => [
				'type'  => 'text',
				'value' => '',
				'label' => __('Ярлык рубрики', '{domain}'),
				'help' => __('Введите ярлык рубрики например house', '{domain}'),
			],
		]
	],
];