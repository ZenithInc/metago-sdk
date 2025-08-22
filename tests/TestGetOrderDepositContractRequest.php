<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Order\GetOrderDepositContractRequest;

$request = new GetOrderDepositContractRequest();
$request->setOrderSn('M250815153335947177509794');

$client = include "headers.php";
$client->request($request, ACCESS_TOKEN, true);
