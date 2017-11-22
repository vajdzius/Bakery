<?php

$new_data = ($_POST);

$required_fields = ["date", "product", "VL", "PG", "PR", "SG", "GL"];

$validData = true;

foreach ($required_fields as $value)
{
	if (!isset($new_data[$value]) || empty($new_data[$value]))
	{
		$validData = false;
		echo "Nerastas parametras: $value <br>";
	}
}
if (!$validData)
	return;

	/*$date = $_POST['date'];
	$product = $_POST['product'];
	$VL = $_POST['VL'];
	$PG = $_POST['PG'];
	$PR = $_POST['PR'];
	$SG = $_POST['SG'];
	$GL = $_POST['GL'];

	if(empty($date) || empty($product) || empty($VL) || empty($PG) || empty($PR) || empty($SG) || empty($GL))
	{
    echo "Užpildyti ne visi būtini laukeliai!";
	}
	else
	{
		$existing_data = json_decode (file_get_contents('data/bakery-data.json'), true);
		updateDate($existing_data, $new_data);
		file_put_contents('data/bakery-data.json', json_encode($existing_data));
	}*/


//reading data

//$existing_data = objectToArray($existing_data);

$existing_data = json_decode (file_get_contents('data/bakery-data.json'), true);
updateDate ($existing_data, $new_data);
file_put_contents('data/bakery-data.json', json_encode($existing_data));


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
	//print_r($existing_data);
	//print_r($new_data);

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
	//print_r($existing_data);
}

function createNewProduct ($existing_data, $new_data)
{
	$existing_data[$new_data['date']][$new_data['product']] = [
			(int) $new_data["VL"],
			(int) $new_data["PG"],
			(int) $new_data["PR"],
			(int) $new_data["SG"],
			(int) $new_data["GL"]
		];
	return $existing_data;
}