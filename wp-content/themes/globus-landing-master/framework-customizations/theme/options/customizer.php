<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
 * Настройки сайта (телефоны, соц-сети и пр.)
 * Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
	'panel_contacts' => [
		'title'   => __( 'Контакты', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '',
			],
			'email' => [
				'type'  => 'text',
				'label' => __( 'E-mail', '{domain}' ),
				'value' => 'info@globusestate.ru',
			],
			'time' => [
				'type'  => 'text',
				'label' => __( 'Время работы', '{domain}' ),
				'value' => 'Пн-пт: с 8:00 до 22:00',
			],
			'address' => [
				'type'  => 'text',
				'label' => __( 'Время работы', '{domain}' ),
				'value' => '141407, г. Москва, <br>ул. Кронштадский бул.,  д.6, корп. 5',
			],
			'vk' => [
				'type'  => 'text',
				'label' => __( 'VK', '{domain}' ),
				'value' => '',
			],
			'facebook' => [
				'type'  => 'text',
				'label' => __( 'Facebook', '{domain}' ),
				'value' => '',
			],
			'instagram' => [
				'type'  => 'text',
				'label' => __( 'Instagram', '{domain}' ),
				'value' => '',
			],
			'google_plus' => [
				'type'  => 'text',
				'label' => __( 'Google +', '{domain}' ),
				'value' => '',
			],
			'youtube' => [
				'type'  => 'text',
				'label' => __( 'Youtube', '{domain}' ),
				'value' => '',
			],
			'twitter' => [
				'type'  => 'text',
				'label' => __( 'Twitter', '{domain}' ),
				'value' => '',
			],
		],
	],
	'panel_h' => [
		'title'   => __( 'Верхнее меню', '{domain}' ),
		'options' => [
			'text' => [
				'type'  => 'text',
				'label' => __( 'Меню1', '{domain}' ),
				'value' => 'Новостройки',
			],
			'href' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text2' => [
				'type'  => 'text',
				'label' => __( 'Меню2', '{domain}' ),
				'value' => 'Городская недвижимость',
			],
			'href2' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text3' => [
				'type'  => 'text',
				'label' => __( 'Меню3', '{domain}' ),
				'value' => 'Загородная недвижимость',
			],
			'href3' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'text4' => [
				'type'  => 'text',
				'label' => __( 'Меню4', '{domain}' ),
				'value' => 'Скидки на новостройки',
			],
			'href4' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
		],
	],
	'panel_l' => [
		'title'   => __( 'Боковое меню', '{domain}' ),
		'options' => [
			'phone' => [
				'type'  => 'text',
				'label' => __( 'Телефон', '{domain}' ),
				'value' => '+7(499)390-55-71',
			],
			'discount' => [
				'type'  => 'text',
				'label' => __( 'Текст кнопки', '{domain}' ),
				'value' => 'получить сКИдку',
			],
			'hrefd' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'order' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Заказать звонок',
			],
			'href_order' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'mortgage' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Ипотека',
			],
			'href_mortgage' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'investments' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Инвестиции',
			],
			'href_investments' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'about' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'О компании',
			],
			'href_about' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'build' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Застройщикам',
			],
			'href_build' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'contacts' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Контакты',
			],
			'href_contacts' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
		],
	],
	'footer' => [
		'title'   => __( 'Футер', '{domain}' ),
		'options' => [
			'more' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Узнать больше по телефону:',
			],
			'order' => [
				'type'  => 'text',
				'label' => __( 'Текст', '{domain}' ),
				'value' => 'Заказать обратный звонок',
			],
			'horder' => [
				'type'  => 'text',
				'label' => __( 'Ссылка', '{domain}' ),
				'value' => '#',
			],
			'new_build' => [
				'type' => 'addable-popup',
				'label' => __('Добавить информацию', '{domain}'),
				'template' => '{{- text }}',
				'size' => 'large', // small, medium, large
				'limit' => 0, // limit the number of popup`s that can be added
				'add-button-text' => __('добавить', '{domain}'),
				'sortable' => true,
				'popup-options' => [
					'text' => [
						'type'  => 'text',
						'label' => __( 'Заголовок блока', '{domain}' ),
						'value' => '',
					],
					'new_build' => [
						'type' => 'addable-popup',
						'label' => __('Добавить информацию блока', '{domain}'),
						'template' => '{{- text }}',
						'size' => 'large', // small, medium, large
						'limit' => 0, // limit the number of popup`s that can be added
						'add-button-text' => __('добавить', '{domain}'),
						'sortable' => true,
						'popup-options' => [
							'text' => [
								'type'  => 'text',
								'label' => __( 'Текст', '{domain}' ),
								'value' => '',
							],
							'href' => [
									'type'  => 'text',
									'label' => __( 'Ссылка', '{domain}' ),
									'value' => '#',
							],
						],
					],
				],
			],
		],
	],
];


