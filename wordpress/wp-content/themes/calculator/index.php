<?php

get_header();

$delivery_sub_types = array(
	array(
		'title' => 'Документи',
		'slug' => 'documents',
		'delivery_type' => 'express'
	),
	
	array(
		'title' => 'Посилки',
		'slug' => 'parsels',
		'delivery_type' => 'express'
	),
	
	array(
		'title' => 'Генеральний вантаж',
		'slug' => 'general_cargo',
		'delivery_type' => 'cargo'
	),
	
	array(
		'title' => 'Небезпечний вантаж',
		'slug' => 'dangerous_cargo',
		'delivery_type' => 'cargo'
	),
	
	array(
		'title' => 'Вантаж людських залишків',
		'slug' => 'human_remains_cargo',
		'delivery_type' => 'cargo'
	),
	
	array(
		'title' => 'Цінний вантаж',
		'slug' => 'valuable_cargo',
		'delivery_type' => 'cargo'
	)
);

$countries_list = array(
	'express' => array(
		array(
			'country' => 'Albania',
			'city' => 'Tirana',
			'params' => array(
				'min_price' => 3473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'express'
		),
		
		array(
			'country' => 'Ukraine',
			'city' => 'Kiev',
			'params' => array(
				'min_price' => 3473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'express'
		)
	),
	
	'standart' => array(
		array(
			'country' => 'Albania',
			'city' => 'Tirana',
			'params' => array(
				'min_price' => 3473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'standart'
		),
		
		array(
			'country' => 'Ukraine',
			'city' => 'Kiev',
			'params' => array(
				'min_price' => 3473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'standart'
		)
	),
	
	'cargo' => array(
		array(
			'country' => 'Albania',
			'city' => 'Tirana',
			'params' => array(
				'min_price' => 3473.82,
				'optimal_price' => 2473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'cargo'
		),
		
		array(
			'country' => 'Ukraine',
			'city' => 'Kiev',
			'params' => array(
				'min_price' => 3473.82,
				'optimal_price' => 2473.82,
				'weight_list' => array(
					array(
						'kg' => 20,
						'price' => 4302.18,
						'price_for_each_kg' => 159.23
					),

					array(
						'kg' => 30,
						'price' => 5982.02,
						'price_for_each_kg' => 166.73
					),

					array(
						'kg' => 45,
						'price' => 7572.75,
						'price_for_each_kg' => 146.51
					)
				),
				'appointment_code' => 'TIA',
				'flights' => '',
				'next_carrier' => '',
				'note' => 'по запиту',
				'aviacompany' => 'Lufthansa'
			),
			'delivery_type' => 'cargo'
		)
	)
);

Calculator::get_calculator( 'our', $delivery_sub_types, $countries_list );

get_footer();

?>