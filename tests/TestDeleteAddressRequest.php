<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\DeleteAddressRequest;

$request = new DeleteAddressRequest();
$request->setAlias("address123"); // Example alias value

$client = include "headers.php";
$response = $client->request($request);
echo $response . PHP_EOL;