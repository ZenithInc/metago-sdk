<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Goods\GetDepositProductListRequest;

// Create a new deposit product list request
$request = new GetDepositProductListRequest();

// Set optional parameters
$request->setMerchantId(677649)  // Example merchant ID
    ->setKeywords("art")
    ->setCategoryId(123)
    ->setSort("price_asc")
    ->setPage(1)
    ->setPageSize(10);

// Uncomment to set more optional parameters
// $request->setCategory("paintings");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;