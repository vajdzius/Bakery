<?php
    	
    	@include_once('database.php');

    	$query = "SELECT * FROM `bakery_products` WHERE `prime_cost` = 1.5 OR `sales_price` = 0.8";

		$result = db_query ($query);

		foreach ($result as $value) 

    		{
    			print_r ($value);
    		}
	    	


    	$query = "SELECT * FROM `bakery_products` ORDER BY `ean` ASC";

    	$result = db_query ($query);

    		foreach ($result as $value) 
    		{
    			print_r ($value);
    		}

?>