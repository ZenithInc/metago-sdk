<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Content\GetAdsListRequest;

// Example 1: Without merchant_alias parameter
$request1 = new GetAdsListRequest();
$client = include "headers.php";
$response1 = $client->request($request1, ACCESS_TOKEN);
echo $response1 . PHP_EOL;