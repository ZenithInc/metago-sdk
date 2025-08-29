<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Ump\GetCouponShopListRequest;

$request = new GetCouponShopListRequest();
$request->setPage(1)
    ->setPageSize(20)
    ->setMerchantId(677389);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
