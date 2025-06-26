<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\PasswordResetSmsRequest;

$request = new PasswordResetSmsRequest();
$request->setMobile("17757139533"); // Example mobile number

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;