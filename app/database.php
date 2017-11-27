<?php

function db_connect ()
{
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'vm_bakery';

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if(!$conn)
	{
		die("Could not connect");
	}

	$conn->set_charset('utf8mb4');

	return $conn;
}

function db_query(string $query)
{
	$conn = db_connect();
	$result = $conn->query ($query);
	$conn->close();
	return $result;
}