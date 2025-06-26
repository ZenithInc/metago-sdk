<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\GetCountryListRequest;

// Example 1: Without name parameter
$request1 = new GetCountryListRequest();
echo "Example 1: Without name parameter\n";
$client = include "headers.php";
$response1 = $client->request($request1, ACCESS_TOKEN);
echo $response1 . PHP_EOL;