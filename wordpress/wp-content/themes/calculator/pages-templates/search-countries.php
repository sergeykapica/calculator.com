<?php
/*
Template Name: Поиск стран
*/

get_header();

require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wordpress/wp-content/plugins/mps-calculator/lang/ua.php' );
require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/wordpress/wp-content/plugins/mps-calculator/lang/ru.php' );

?>

<input type="text" name="location_query" placeholder="Шукати країну або місто" class="input-field bsizing-border-box"/>
<div class="prices-table-wrapper">
	<table class="prices-table">
		<thead class="table-head">
			<tr>
				<th class="table-th table-city">до міст світу із а/п Бориспіль</th>
				<th class="table-th table-country">Країна</th>
				<th class="table-th">мінімальна вага (кг), ціна грн***.</th>
				<th class="table-th">оптимальна вага (кг) ціна, грн***.</th>
				<th class="table-th">вага(кг) +45 ціна, грн.***</th>
				<th class="table-th">вага(кг) +100, ціна, грн.***</th>
				<th class="table-th">вага (кг) +250, ціна грн.***</th>
				<th class="table-th">вага (кг) +500, ціна грн***.</th>
				<th class="table-th">вага (кг) +1000 ціна, грн.***</th>
				<th class="table-th">код аеропорту призначення</th>
				<th class="table-th">транзитний аеропорт</th>
				<th class="table-th">наступний перевізник</th>
				<th class="table-th">Примітки</th>
				<th class="table-th">Авіакомпанія</th>
			</tr>
		</thead>
		<tbody>
			<tr class="table-tr price-data">
				<td class="table-td table-city">VIENNA</td>
				<td class="table-td table-country">Austria</td>
				<td class="table-td">2611.96</td>
				<td class="table-td">101.21</td>
				<td class="table-td">97.95</td>
				<td class="table-td">94.68</td>
				<td class="table-td">89.79</td>
				<td class="table-td">88.15</td>
				<td class="table-td">86.52</td>
				<td class="table-td">86.52</td>
				<td class="table-td">ALG</td>
				<td class="table-td">CAI</td>
				<td class="table-td">MS</td>
				<td class="table-td">МАУ</td>
			</tr>
			
			<tr class="table-tr price-data">
				<td class="table-td table-city">ALGIERS</td>
				<td class="table-td table-country">Algeria</td>
				<td class="table-td">2611.96</td>
				<td class="table-td">101.21</td>
				<td class="table-td">97.95</td>
				<td class="table-td">94.68</td>
				<td class="table-td">89.79</td>
				<td class="table-td">88.15</td>
				<td class="table-td">86.52</td>
				<td class="table-td">86.52</td>
				<td class="table-td">ALG</td>
				<td class="table-td">CAI</td>
				<td class="table-td">MS</td>
				<td class="table-td">МАУ</td>
			</tr>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$( window ).ready( function()
	{
		let locationQuery = $( 'input[name="location_query"]' );
		var priceData = $( '.price-data' );
		var translateString = JSON.parse( '<?php echo json_encode( $translate_strings ); ?>' );
		
		locationQuery.on( 'keydown', function( e )
		{
			e = e || window.event;
			
			if( e.keyCode === 13 )
			{
				let thisInput = $( this );
				var thisInputValue = thisInput.val().toLowerCase();
				
				for( let i in translateString )
				{
					if( i.toLowerCase() === thisInputValue )
					{
						thisInputValue = translateString[ i ];
					}
				}
				
				priceData.each( function( i )
				{
					let currentEntry = priceData.eq( i );
					let country = currentEntry.find( '.table-country' ).text().toLowerCase();
					let city = currentEntry.find( '.table-city' ).text().toLowerCase();
					
					if( country !== thisInputValue.toLowerCase() && city !== thisInputValue.toLowerCase() )
					{
						currentEntry.hide();
					}
					else
					{
						currentEntry.show();
					}
				} );
			}
		} );
	} );
</script>

<?php

get_footer();

?>