<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\DepositTradeTimeRequest;

// Create a new trade time request
$request = new DepositTradeTimeRequest();

// Set the required symbol parameter
$request->setSymbol("BTC-USDT"); // Example symbol value

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;