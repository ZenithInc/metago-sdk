<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Goods\GetSpotTrendsRequest;

// Create a new spot trends request
$request = new GetSpotTrendsRequest();

// Set the required parameters
$request->setSymbol("BTC-USDT") // Example symbol value
    ->setDays(7);     // Example days value (7 days)

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;