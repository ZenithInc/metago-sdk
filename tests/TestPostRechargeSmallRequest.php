<?php

use Zenith\Metago\Requests\Payment\PostRechargeSmallRequest;

include "vendor/autoload.php";

$request = new PostRechargeSmallRequest();
$request->setAmount(100);
$request->setBankAlias('cpb9p');
$request->setPayChannel('HF');
$request->setPayType('bank');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
echo $response . PHP_EOL;