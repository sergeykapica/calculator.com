( function()
{
	window.Calculate =
	{
		getCapacity: function( width, length, height, ethalonValue )
		{
			// in meters

			let calculate = ( width * length * height ) * ethalonValue;
			
			return calculate.toFixed( 6 );
		},
		
		getEthalon: function( weight, ethalon )
		{
			return ( weight * ethalon ).toFixed( 6 ) * 1;
		},
		
		getPriceByWeight: function( calculateData, params )
		{
			for( dataKey in calculateData )
			{
				let currentCountry = calculateData[ dataKey ];
                
				if( params.paramCountry == currentCountry.country && currentCountry.city !== undefined && params.paramCity == currentCountry.city || params.paramCountry == currentCountry.country )
				{
					for( paramKey in currentCountry.params.weight_list )
					{
						var currentParamsWeight = currentCountry.params.weight_list[ paramKey ];
						
						if( params.calculatedWeight < currentParamsWeight.kg )
						{
							if( paramKey == 0 )
							{
								let currentWeightData = currentCountry.params.weight_list[ 0 ];
								
								var calculatedPrice = params.calculatedWeight * currentWeightData.price_for_each_kg;
								calculatedPrice = parseFloat( calculatedPrice + ( calculatedPrice * params.fuelIncrease ) ).toFixed( 6 );
							}
							else
							{
								let prevWeightData = currentCountry.params.weight_list[ paramKey - 1 ];
								let additionalWeight = params.calculatedWeight - prevWeightData.kg;
								
								var calculatedPrice = prevWeightData.price + ( additionalWeight * prevWeightData.price_for_each_kg );
								calculatedPrice = parseFloat( calculatedPrice + ( calculatedPrice * params.fuelIncrease ) ).toFixed( 6 );
							}
							
							if( currentParamsWeight.kg <= params.minPriceMaxSegment && calculatedPrice < currentCountry.params.min_price )
							{
								return {
                                    status: 'under',
                                    value: currentCountry.delivery_type === 'cargo' ? ( currentCountry.params.optimal_price + ( currentCountry.params.optimal_price * params.fuelIncrease ) ) : currentCountry.params.min_price + ( currentCountry.params.min_price * params.fuelIncrease )
                                };
							}
                            
							return calculatedPrice * 1;
						}
						else if( params.calculatedWeight == currentParamsWeight.kg )
						{	
							var calculatedPrice = currentParamsWeight.price;
							
							calculatedPrice = parseFloat( calculatedPrice + ( calculatedPrice * params.fuelIncrease ) ).toFixed( 6 );
							
							if( currentParamsWeight.kg <= params.minPriceMaxSegment && calculatedPrice < currentCountry.params.min_price )
							{
                                return {
                                    status: 'under',
                                    value: currentCountry.delivery_type === 'cargo' ? ( currentCountry.params.optimal_price + ( currentCountry.params.optimal_price * params.fuelIncrease ) ) : currentCountry.params.min_price + ( currentCountry.params.min_price * params.fuelIncrease )
                                };
							}
							
                            return calculatedPrice * 1;
						}
						else
						{
							if( params.calculatedWeight > currentCountry.params.weight_list[ currentCountry.params.weight_list.length - 1 ].kg )
							{
                                return {
                                    status: 'undetermined'
                                };
							}
						}
					}
					
					break;
				}
			}
		}
	}
} )();