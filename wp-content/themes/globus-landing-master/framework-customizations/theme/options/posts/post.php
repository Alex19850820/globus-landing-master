<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 14.03.2018
 * Time: 14:10
 */
if (!defined( 'FW' )) die('Forbidden');

$options = array(
	'main' => array(
		'type' => 'box',
		'title' => __('Текст для записи', '{domain}'),
		'options' => array(
//			'body-color' => array(
//				'type' => 'color-picker',
//				'label' => __('Body Color', '{domain}'),
//				'value' => '#ADFF2F',
//			),
			'price'=> [
				'type' => 'text',
				'label' => __('Цена', '{domain}'),
				'value' => '',
			],
			'price2'=> [
				'type' => 'text',
				'label' => __('Цена за м2', '{domain}'),
				'value' => '',
			],
			'city'=> [
				'type' => 'text',
				'label' => __('Город', '{domain}'),
				'value' => '',
			],
			'md'=> [
				'type' => 'text',
				'label' => __('Микрарайон', '{domain}'),
				'value' => '',
			],
			'text2'=> [
				'type' => 'text',
				'label' => __('Текст ссылки', '{domain}'),
				'value' => '',
			],
			'period'=> [
				'type' => 'text',
				'label' => __('Срок сдачи', '{domain}'),
				'value' => '',
			],
			'phone'=> [
				'type' => 'text',
				'label' => __('Телефон', '{domain}'),
				'value' => '+7 (499) 390-55-71',
			],
			'hphone'=> [
				'type' => 'text',
				'label' => __('Сылка телефона', '{domain}'),
				'value' => '+74993905571',
			],
			'mortgage'=> [
				'type' => 'text',
				'label' => __('Ипотека', '{domain}'),
				'value' => 'Ипотека 6,98%',
			],
			'address'=> [
				'type' => 'text',
				'label' => __('Адрес', '{domain}'),
				'value' => 'г. Москва, ул. Большая Лубянка 1',
				'desc'=>('Введите адрес'),
				'help'=>('Введите адрес например г. Москва, ул. Большая Лубянка 1'),
			],
//			'category' => [
//				'type'  => 'select',
//				'value' => 'ch-0',
//				'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
//				'label' => __('Label', '{domain}'),
//				'desc'  => __('Description', '{domain}'),
//				'help'  => __('Help tip', '{domain}'),
//				'choices' => array(
//					array( // optgroup
//						'attr'    => array('label' => __('Новостройки', '{domain}')),
//						'choices' => array(
//							'ch-0' => __('Выберите тип объекта','{domain}'),
//							'ch-1' => __('Новостройки', '{domain}'),
//							// ...
//						),
//					),
//					array( // optgroup
//						'attr'    => array('label' => __('Городская недвижимость', '{domain}')),
//						'choices' => array(
//							'ch-2' => __('Элитные жилые комплексы', '{domain}'),
//							'ch-3' => __('Квартиры', '{domain}'),
//							'ch-4' => __('Апартаменты', '{domain}'),
//							'ch-5' => __('Лофты', '{domain}'),
//							// ...
//						),
//					),
//					array( // optgroup
//						'attr'    => array('label' => __('Загородная недвижимость', '{domain}')),
//						'choices' => array(
//							'ch-6' => __('Коттеджные поселки', '{domain}'),
//							'ch-7' => __('Загородные дома', '{domain}'),
//							'ch-8' => __('Таунхаусы', '{domain}'),
//							'ch-9' => __('Участки', '{domain}'),
//							// ...
//						),
//					),
//				),
				/**
				 * Allow save not existing choices
				 * Useful when you use the select to populate it dynamically from js
				 */
//				'no-validate' => false,
//			],
		),
	),
);