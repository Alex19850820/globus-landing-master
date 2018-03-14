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
				'label' => __('Сылка телефона', '{domain}'),
				'value' => 'Ипотека 6,98%',
			],
		),
	),
);