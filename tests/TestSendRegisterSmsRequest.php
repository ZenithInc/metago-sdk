<?php

use Zenith\Metago\Requests\SendRegisterSmsRequest;

include "vendor/autoload.php";

$request = new SendRegisterSmsRequest();
$request->setMobile("17757139533");

$client = include "headers.php";
$response = $client->request($request);
echo $response.PHP_EOL;
