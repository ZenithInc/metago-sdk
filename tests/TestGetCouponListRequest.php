<?php

include "vendor/autoload.php";

use Zenith\Metago\Enums\CouponStatusEnum;
use Zenith\Metago\Requests\Ump\GetCouponListRequest;

$request = new GetCouponListRequest();
$request->setMerchantId(677389)
    ->setStatus(CouponStatusEnum::UNUSED);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);