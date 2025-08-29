<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Goods\GetDepositDetailRequest;

$request = new GetDepositDetailRequest();
$request->setAlias('zsqyz');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
file_put_contents("deposit_detail.json", $response);
