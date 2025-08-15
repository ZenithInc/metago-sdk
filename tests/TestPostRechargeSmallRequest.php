<?php

use Zenith\Metago\Requests\Payment\PostRechargeSmallRequest;

include "vendor/autoload.php";

$request = new PostRechargeSmallRequest();
$request->setAmount(100);
// 测试快捷支付
// $request->setBankAlias('pnb25');
// $request->setPayChannel('HF');
// $request->setPayType('bank');

// 测试支付宝
$request->setPayType('wx_native')
    ->setPayChannel('zhenli');


$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
file_put_contents("recharge.json", $response);