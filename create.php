<?php

$new_data = ($_POST);
//formatData($new_data);
var_dump($new_data);

$existing_data = json_decode (file_get_contents('data/bakery-data.json'));
$existing_data = objectToArray($existing_data);

updateDate ($existing_data, $new_data);

function objectToArray(stdClass $obj) : array
{
	$obj = (array) $obj;
	foreach ($obj as $key => &$value) {

		if (gettype($value) == 'object')
		{
			$value = objectToArray($value);
		}
	}
	return $obj;
}

function updateDate (&$existing_data, $new_data)
{
	print_r($existing_data);
	print_r($new_data);

	if (isset($existing_data[$new_data ['date']]))
	{
		echo 'YES';

			if (isset($existing_data[$new_data ['date']][$new_data['product']]))
			echo "ERROR";

			else
			{
				$existing_data = createNewProduct($existing_data, $new_data);
			}
		
	}
	else 
	{

		$existing_data[$new_data['date']] = [];
		$existing_data = createNewProduct($existing_data, $new_data);

		
	}
	print_r($existing_data);
}

function createNewProduct ($existing_data, $new_data)
{
	$existing_data[$new_data['date']][$new_data['product']] = [
			$new_data["VL"],
			$new_data["PG"],
			$new_data["PR"],
			$new_data["SG"],
			$new_data["GL"]
		];
	return $existing_data;
}