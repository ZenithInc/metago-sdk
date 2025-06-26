<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\RegisterWithPhoneAndPasswordRequest;

$request = new RegisterWithPhoneAndPasswordRequest();
$request->setMobile("17757139533")
    ->setSms("123456")
    ->setPassword("Xbcd20198$")
    ->setMerchantId(677649);

$client = include "headers.php";
$response = $client->request($request);
echo $response . PHP_EOL;