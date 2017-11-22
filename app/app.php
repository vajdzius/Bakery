<?php

$data = json_decode (file_get_contents('data/bakery-data.json'), true);

@include_once('view/data-table.php');