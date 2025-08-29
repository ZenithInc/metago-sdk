<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\RegisterWithPhoneAndPasswordRequest;

$request = new RegisterWithPhoneAndPasswordRequest();
$request->setMobile("18616508956")
    ->setSms("123456")
    ->setPassword("fGG0lnXmXA6okA9JRXQZCQ%3D%3D")
    ->setMerchantId(677649);

$client = include "headers.php";
$response = $client->request($request, '', true);
echo $response . PHP_EOL;