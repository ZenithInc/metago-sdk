<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\GetAccountBalanceRequest;

$request = new GetAccountBalanceRequest();

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;