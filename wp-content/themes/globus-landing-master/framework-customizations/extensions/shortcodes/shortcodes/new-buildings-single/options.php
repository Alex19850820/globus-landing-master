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
	'text'     => [
		'type'  => 'text',
		'value' => 'Узнать больше по телефону:',
		'label' => __('Текст', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	'hphone'     => [
		'type'  => 'text',
		'value' => '+74993905571',
		'label' => __('Телефон ссылка', '{domain}'),
		'desc'  => __('Введите ссылку телефона', '{domain}'),
		'help'  => __('Введите ссылку телефона', '{domain}'),
	],
	'phone'     => [
		'type'  => 'text',
		'value' => '+7 (499) 390-55-71',
		'label' => __('Телефон', '{domain}'),
		'desc'  => __('Введите телефон', '{domain}'),
		'help'  => __('Введите телефон', '{domain}'),
	],
	'info'     => [
		'type'  => 'text',
		'value' => 'Заказать обратный звонок',
		'label' => __('Текст', '{domain}'),
		'desc'  => __('Введите текст', '{domain}'),
		'help'  => __('Введите текст', '{domain}'),
	],
	
];