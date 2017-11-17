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
	if (isset($existing_data[$new_data ['date']]))
	{
		echo 'YES';
	}
	else 
	{
		echo 'NO';
	}
}
