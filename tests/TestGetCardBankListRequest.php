<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\GetCardBankListRequest;

$request = new GetCardBankListRequest();

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;