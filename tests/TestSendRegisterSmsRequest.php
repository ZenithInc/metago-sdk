<?php

use Zenith\Metago\Requests\SendRegisterSmsRequest;

include "vendor/autoload.php";

$request = new SendRegisterSmsRequest();
$request->setMobile("18616508956");

$client = include "headers.php";
$response = $client->request($request);
echo $response.PHP_EOL;
