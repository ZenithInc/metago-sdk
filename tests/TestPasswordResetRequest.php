<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\PasswordResetRequest;

// Create a new password reset request
$request = new PasswordResetRequest();

// Set required parameters
$request->setMobile("17757139533")
    ->setPassword("NewPassw0rd123$")
    ->setSms("123456");

// Optional: Set ID card number
 $request->setIdCardNo("330324199407044510");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;