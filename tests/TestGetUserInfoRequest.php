<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\GetUserInfoRequest;

$request = new GetUserInfoRequest();

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;