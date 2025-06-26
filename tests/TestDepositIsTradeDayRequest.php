<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\DepositIsTradeDayRequest;

// Create a new is-trade-day request
$request = new DepositIsTradeDayRequest();

// Set the required parameters
$request->setSymbol("BTC-USDT") // Example symbol value
    ->setDay("2023-12-25");     // Example date value

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;