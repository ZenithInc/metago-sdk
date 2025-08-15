<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\LoginByMobilePasswordRequest;

// Example: Login with mobile and password
$request = new LoginByMobilePasswordRequest();
$request->setMobile("18701627065")
    ->setPassword("Xbcd20198$")
    ->setMerchantId(677389);

// Optional parameters
// $request->setInviteCode("INVITE123");
// $request->setShopId(12345);

$client = include "headers.php";
$response = $client->request($request);
echo $response . PHP_EOL;