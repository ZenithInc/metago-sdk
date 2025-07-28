<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostCardUnbindRequest;

$request = new PostCardUnbindRequest();
$request->setAlias('9m5j2');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
echo $response . PHP_EOL;
