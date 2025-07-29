<?php

use Zenith\Metago\Requests\Payment\PostRechargeSmallRequest;

include "vendor/autoload.php";

$request = new PostRechargeSmallRequest();
$request->setAmount(10);
// 测试快捷支付
// $request->setBankAlias('cpb9p');
// $request->setPayChannel('HF');
// $request->setPayType('bank');

// 测试支付宝
$request->setPayType('ali_native')
    ->setPayChannel('zhenli');


$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
file_put_contents("recharge.json", $response);