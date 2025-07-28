<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostCardVerifyRequest;

$request = new PostCardVerifyRequest();
$request->setAlias('cpb9p')
    ->setMessageCode('969661');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
echo $response . PHP_EOL;