<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Delivery\GetCityTreeRequest;

// Create a new city tree request
$request = new GetCityTreeRequest();

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;