<?php
/*
Template Name: Калькулятор типа доставки стандарт
*/

get_header();

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

Calculator::get_calculator( 'standart', false, $countries_list[ 'standart' ] );

get_footer();