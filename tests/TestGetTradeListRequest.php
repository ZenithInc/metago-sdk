<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\GetTradeListRequest;

// Create a new trade list request
$request = new GetTradeListRequest();

// Set optional parameters
$request->setStartAt(strtotime('-30 days'))  // Example: 30 days ago
    ->setEndAt(time())                       // Example: current time
    ->setTradeType("payment")                // Example trade type
    ->setPage(1)
    ->setPageSize(10);

// Uncomment to set only pagination parameters
// $request = new GetTradeListRequest();
// $request->setPage(1)->setPageSize(20);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;