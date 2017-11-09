<!DOCTYPE html>
<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" href="css/app.css">
</head>
<body>

<table class="table">
	<thead class="table-header">
		<tr>
			<th class="table-th" rowspan="2">Pavadinimas</th>
			<th class="table-th" colspan="6">2017-11-09</th>
			<th class="table-th" colspan="6">2017-11-10</th>
		</tr>
		<tr>
			<th class="table-th">VL</th> <!-- Vakarykštis likutis-->
			<th class="table-th">PG</th> <!-- Pagaminta-->
			<th class="table-th">PR</th> <!-- Parduota-->
			<th class="table-th">SG</th> <!-- Sugadinta-->
			<th class="table-th">GL</th> <!-- Galutinis likutis-->
			<th class="table-th">VL</th> <!-- Vakarykštis likutis-->
			<th class="table-th">PG</th> <!-- Pagaminta-->
			<th class="table-th">PR</th> <!-- Parduota-->
			<th class="table-th">SG</th> <!-- Sugadinta-->
			<th class="table-th">GL</th> <!-- Galutinis likutis-->
	</thead>
	<tbody class="table-body">
		<tr>
			<td>Aguoninė</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
			<td>5</td>
			<td>20</td>
			<td>19</td>
			<td>4</td>
			<td>2</td>
		</tr>
		<tr>
			<td>Varškės</td>
			<td>7</td>
			<td>10</td>
			<td>8</td>
			<td>2</td>
			<td>7</td>
			<td>7</td>
			<td>10</td>
			<td>8</td>
			<td>2</td>
			<td>7</td>
		</tr>
		<tr>
			<td>Duona balta</td>
			<td>5</td>
			<td>15</td>
			<td>19</td>
			<td>1</td>
			<td>0</td>
			<td>5</td>
			<td>15</td>
			<td>19</td>
			<td>1</td>
			<td>0</td>
		</tr>
		<tr>
			<td>Duona juoda</td>
			<td>9</td>
			<td>30</td>
			<td>27</td>
			<td>2</td>
			<td>10</td>
			<td>9</td>
			<td>30</td>
			<td>27</td>
			<td>2</td>
			<td>10</td>
		</tr>
		<tr>
			<td>Duona ruginė</td>
			<td>6</td>
			<td>12</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
			<td>6</td>
			<td>12</td>
			<td>15</td>
			<td>0</td>
			<td>3</td>
		</tr>
	</tbody>
</table>

<script type="text/javascript">

	//OPTION 1

	var _arrayOfObjects = [

		{
			"date": "2017-11-09",
			"product": "Aguoninė",
			"data": [5, 20, 19, 4, 2]
		},
		{
			"date": "2017-11-10",
			"product": "Varškės",
			"data": [7, 10, 8, 2, 7]
		}

	];

  
	// OPTION 2 - sort by date

	var _objectByDay = {
		"2017-11*-09" :
		[
			{
			"product" : "Aguoninė",
			"data" : [5, 20, 19, 4, 2]
			},
			{
			"product" : "Varškės",
			"data" : [7, 10, 8, 2, 7]
			}
		],
		"2017-11*-10" :
		[
			{
			"product" : "Aguoninė",
			"data" : [5, 20, 19, 4, 2]
			},
			{
			"product" : "Varškės",
			"data" : [7, 10, 8, 2, 7]
			}
		]
	};
	// OPTION 3 - sort by product

	var _objectByProduct ={
		"Varškės" :
		[
			{
				"date": "2017-11-09",
				"data": [7, 10, 8, 2, 7]
			},
			{
				"date": "2017-11-10",
				"data": [7, 10, 8, 2, 7]
			}
		],
		"Aguoninė" :
		[
			{
				"date": "2017-11-09",
				"data": [5, 20, 19, 4, 2]
			},
			{
				"date": "2017-11-10",
				"data": [5, 20, 19, 4, 2]
			}
		],
	};

// OPTION 4 - optimized by date

var _optimizedByDate = {
	"2017-11-09":
	{
		"Varškės" : [7, 10, 8, 2, 7],
		"Aguoninė" : [5, 20, 19, 4, 2],
	},

};

// OPTION 5 - optimized by product

var _optimizedByProduct = {
	"Varškės" :
	{
		"2017-11-09" : [7, 10, 8, 2, 7],
		"2017-11-10" : [7, 10, 8, 2, 7],
	},
	"Aguoninė" :
	{
		"2017-11-09" : [5, 20, 19, 4, 2],
		"2017-11-10" : [5, 20, 19, 4, 2],
	},
};

// OPTION FINAL

var _products = 
{
	"p-1": "Varškės",
	"p-2": "Aguoninė",
}

var _finalByProduct = {
	"p-1" :
	{
		"2017-11-09" : [7, 10, 8, 2, 7],
		"2017-11-10" : [7, 10, 8, 2, 7],
	},
	"p-2" :
	{
		"2017-11-09" : [5, 20, 19, 4, 2],
		"2017-11-10" : [5, 20, 19, 4, 2],
	}

}

var _finalByDate = {
	"2017-11-09" :
	{
		"p-1" : [7, 10, 8, 2, 7],
		"p-2" : [5, 20, 19, 4, 2],
	},
	"2017-11-10" :
	{
		"p-1" : [7, 10, 8, 2, 7],
		"p-2" : [5, 20, 19, 4, 2],
	}

}

// OPTION DATABASE

var _products = 
{
	"p-1" : "Varškės",
	"p-2" : "Aguoninė",
}

var _productsAmountKey = 
{
	"VL" : "Likutis pradžiai",
	"PG" : "Pagaminta",
}

var _products_history =
[
 	{
 		"date" : "2017-10-22",
 		"product_id" : "p-1",
 		"key id" : "VL",
 		"amount": 3
 	}
];

console.log (_arrayOfObjects);
console.log (_objectByDay);
console.log (_objectByProduct);
console.log (_optimizedByDate);
console.log (_optimizedByProduct);


</script>
</body>
</html>