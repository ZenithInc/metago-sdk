<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Ump\CouponShopListRequest;

// Create a new coupon shop list request
$request = new CouponShopListRequest();

// Set required parameters
$request->setMerchantId(677649)  // Example merchant ID
    ->setPage(1)
    ->setPageSize(10);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;