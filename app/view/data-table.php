<?php

$rows = $days = [];
$keys = '';


	foreach ($products as $value) {
		
		if (!isset($rows[$value['id']]))
		{
			$rows[$value['id']] = [];
			$rows[$value['id']]['name'] = '<td>' . $value['name'] . '</td>';
		}
	}

		foreach ($productsHistory as $value) {

			if (!isset($days[$value['date']]))
			{
				$days[$value['date']] = $value['date'];
				$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
			
				foreach ($rows as &$product) {

				$product[$value['date']] = '<td></td><td></td><td></td><td></td><td></td>';

				}
			}

			$rows[$value['product_id']][$value['date']] = '<td>' . $value['initial'] . '</td>' . '<td>' . $value['produced'] . '</td>' . '<td>' . $value['sold'] .'</td>' . '<td>' . $value['damaged'] . '</td>' . '<td>' . $value['closed'] . '</td>';		

		}

?>

<table>
	<thead>
		<tr>
			<th rowspan="2">Pavadinimas</th>
			<?php
				 foreach ($days as $date) {
				 echo '<th colspan="5">' . $date . '</th>';	
				 }
			?>
		</tr>
		<tr>
			 <?php
				 echo $keys;
			?>	
		</tr>

	</thead>
	<tbody>

	<?php
		foreach ($rows as $data) {

			echo '<tr>';

			foreach ($data as $key => $value) {
				
				echo $value;	
			}	

			echo '</tr>';
		}
	?>
	</tbody>
</table>