<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Goods\GetSpotDataRequest;

// Create a new spot data request
$request = new GetSpotDataRequest();

// Set the required symbol parameter
$request->setSymbol("BTC-USDT"); // Example symbol value

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;