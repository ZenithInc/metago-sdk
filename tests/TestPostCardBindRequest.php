<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostCardBindRequest;

$request = new PostCardBindRequest();
$request->setMobile('18701627065')
    ->setBankCardNo('6217565300040888104')
    ->setPurpose(2);
    // HF/zhenli
//    ->setPayChannel('zhenli');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
echo $response . PHP_EOL;