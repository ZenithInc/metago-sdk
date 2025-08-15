<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\OrderDepositCloseRequest;

$request = new OrderDepositCloseRequest();
$request->setOrderSn("M250815153335947177509794");

$client = include "headers.php";
// example: {"code":200,"msg":"success","data":{}}
$client->request($request, ACCESS_TOKEN, true);