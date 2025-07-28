<?php

use Zenith\Metago\Requests\Payment\GetCardListRequest;

include "vendor/autoload.php";

$request = new GetCardListRequest();
$request->setPurpose(2);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
echo $response . PHP_EOL;