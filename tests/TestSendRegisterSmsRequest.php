<?php

use Zenith\Metago\Requests\SendRegisterSmsRequest;

include "vendor/autoload.php";

$request = new SendRegisterSmsRequest();
$request->setMobile("18701627065");

$client = include "headers.php";
$response = $client->request($request);
echo $response.PHP_EOL;
