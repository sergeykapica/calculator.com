<?php

class Calculator 
{
	static public function get_calculator( $type, $delivery_sub_types = false, $countries_list )
	{
		global $wpdb, $translate_locations_ua_reverse, $translate_locations, $translate_strings;
		
		// get delivery types
		
		if( $type === 'our' )
		{
			if( $delivery_type_data = $wpdb->get_results( 'SELECT mpt.id, mpt.delivery_type, mpt.type_description, mptp.delivery_type_id, mptp.param_slug, mptp.param_value '
								. 'FROM mps_delivery_types as mpt JOIN mps_delivery_types_params as mptp ON mpt.id = mptp.delivery_type_id' ) )
			{
				$delivery_types = self::get_sorted_structure( $delivery_type_data );
				
				require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wordpress/wp-content/plugins/mps-calculator/public-pages/calculator.php' );
			}
		}
		else
		{
			if( $delivery_type_data = $wpdb->get_results( $wpdb->prepare( 'SELECT mpt.id, mpt.delivery_type, mpt.type_description, mptp.delivery_type_id, mptp.param_slug, mptp.param_value '
								. 'FROM mps_delivery_types as mpt JOIN mps_delivery_types_params as mptp ON mpt.id = mptp.delivery_type_id '
								. 'WHERE mpt.delivery_type = %s', $type ) ) )
			{
				$calculate_data = self::get_sorted_structure( $delivery_type_data );
				$calculate_data = array_values( $calculate_data )[ 0 ];
				
				require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wordpress/wp-content/plugins/mps-calculator/public-pages/calculator.php' );
			}
		}
	}
	
	static public function get_sorted_structure( $delivery_type_data )
	{
		$delivery_types = array();
			
		foreach( $delivery_type_data as $delivery_data_object )
		{
			if( ! isset( $delivery_types[ $delivery_data_object->id ][ 'delivery_type' ] ) )
			{
				$delivery_types[ $delivery_data_object->id ][ 'delivery_type' ] = $delivery_data_object->delivery_type;
			}
			
			if( ! isset( $delivery_types[ $delivery_data_object->id ][ 'type_description' ] ) )
			{
				$delivery_types[ $delivery_data_object->id ][ 'type_description' ] = $delivery_data_object->type_description;
			}
			
			if( $delivery_data_object->param_slug === 'delivery_ethalon_parcels' )
			{
				$delivery_types[ $delivery_data_object->id ][ 'ethalon_value' ][ 'parcels' ] = $delivery_data_object->param_value;
			}
			else if( $delivery_data_object->param_slug === 'delivery_ethalon_documents' )
			{
				$delivery_types[ $delivery_data_object->id ][ 'ethalon_value' ][ 'documents' ] = $delivery_data_object->param_value;
			}
			else
			{
				$delivery_types[ $delivery_data_object->id ][ $delivery_data_object->param_slug ] = $delivery_data_object->param_value;
			}
		}
		
		return $delivery_types;
	}
}