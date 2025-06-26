<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\LoginByMobilePasswordRequest;

// Example: Login with mobile and password
$request = new LoginByMobilePasswordRequest();
$request->setMobile("17757139533")
    ->setPassword("NewPassw0rd123$")
    ->setMerchantId(677649);

// Optional parameters
// $request->setInviteCode("INVITE123");
// $request->setShopId(12345);

$client = include "headers.php";
$response = $client->request($request);
echo $response . PHP_EOL;