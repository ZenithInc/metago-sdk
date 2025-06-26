<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\AddressChangeDefaultRequest;

$request = new AddressChangeDefaultRequest();
$request->setAlias("address123"); // Example alias value

$client = include "headers.php";
$response = $client->request($request);
echo $response . PHP_EOL;