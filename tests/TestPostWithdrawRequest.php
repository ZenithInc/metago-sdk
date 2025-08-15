<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostWithdrawRequest;

$request = new PostWithdrawRequest();
$request->setAmount(100);
$request->setBankAlias('495hy');
$request->setMerchantId(677389);

$client = include "headers.php";
$client->request($request, ACCESS_TOKEN, true);