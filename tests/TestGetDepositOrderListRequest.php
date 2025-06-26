<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\TestDepositOrderListRequest;

// Create a new deposit order list request
$request = new TestDepositOrderListRequest();

// Set optional parameters
$request->setProductName("Gold Necklace")  // Example product name
    ->setOrderSn("ORD123456")              // Example order number
    ->setMerchantAlias("merchant123")      // Example merchant alias
    ->setOrderType("presale")              // Example order type (presale or spot)
    ->setStatus("WAIT_PAY")                // Example status
    ->setPage(1)
    ->setPageSize(10);

// Example of setting date range
// $request->setCreatedAt(["2023-01-01", "2023-12-31"]);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;