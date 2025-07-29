<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostBankPayRequest;

$request = new PostBankPayRequest();
$request->setOrderSn('R250729145624405850614234');
$request->setSmsCode('668981');
$client = include "headers.php";
$client->request($request, ACCESS_TOKEN, true);