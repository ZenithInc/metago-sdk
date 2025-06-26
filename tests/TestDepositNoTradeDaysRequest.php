<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\DepositNoTradeDaysRequest;

// Create a new no-trade-days request
$request = new DepositNoTradeDaysRequest();

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;