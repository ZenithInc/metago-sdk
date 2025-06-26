<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\SendSmsWithBindMobileRequest;

$client = include "headers.php";
$request = new SendSmsWithBindMobileRequest();
$response = $client->request($request);
echo $response . PHP_EOL;
