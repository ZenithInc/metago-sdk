<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Goods\GetSpotKlineRequest;

// Create a new spot kline request
$request = new GetSpotKlineRequest();

// Set the required symbol parameter
$request->setSymbol("BTC-USDT"); // Example symbol value

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;