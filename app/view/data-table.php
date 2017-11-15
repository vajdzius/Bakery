<?php

$days = $keys = '';

	foreach ($data as $key => $value) {
					$days .= "<th class=\"table-th\" colspan=\"5\">$key</th>";
					$keys .= "<th>VL</th><th>PG</th><th>PR</th><th>SG</th><th>GL</th>";
					//echo '<th class="table-th" colspan="5">'.$key.'</th>';

			foreach ($value as $name => $data){
				
				if (!isset($rows[$name]))
					{
					$rows[$name] = "<td>$name</td>";
					}
				
					foreach ($data as $amount) {
						$rows[$name] .= "<td>$amount</td>";
						//$rows=[$name]
					}


		 	}
	}
?>

<table>
	<thead>
		<tr>
			<th class="table-th" rowspan="2">Pavadinimas</th>
			<?php
				 echo $days;
			?>
		</tr>
		<tr>
			 <?php
				 echo $keys;
			?>	
		</tr>

	</thead>
	<tbody class="table-body">

	<?php
		foreach ($rows as $row) {
			echo '<tr>' . $row . '</tr>';		
		}
	?>
	</tbody>
</table>

<?php
/*
var_dump($data);
return;

$html = '';

$html .= '<table>';
$html .= '<thead>';

$html .= '</thead>';
$html .= '</table>';

echo $html;

return;*/
?>