<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\OrderDepositCreateRequest;

$request = new OrderDepositCreateRequest();
$request->setNum(1)
    ->setProductAlias('zsqyz')
    ->setDirection('now_price')
    ->setUseCoupon(false)
    ->setFallPrice(48)
    ->setRisePrice(1260)
    ->setPrice(6);

// example for error: {"code":0,"msg":"余额不足，请充值"}
// example for success: {"code":200,"msg":"success","data":{"order_sn":"M250815140049352738696325"}}
$client = include "headers.php";
$client->request($request, ACCESS_TOKEN, true);