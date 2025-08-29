<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\LoginByMobilePasswordRequest;

// Example: Login with mobile and password
$request = new LoginByMobilePasswordRequest();
$request->setMobile("18616508803")
//    ->setPassword("IcOdbsGSA9inH09G%2BzHH9g%3D%3D")
    ->setPassword("EpbF60%2FSmakCS%2F5wKCJUnQ%3D%3D")
    ->setMerchantId(677389);

// Optional parameters
// $request->setInviteCode("INVITE123");
// $request->setShopId(12345);

$client = include "headers.php";
$response = $client->request($request, "", true);
echo $response . PHP_EOL;