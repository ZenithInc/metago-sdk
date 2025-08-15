<?php

use Zenith\Metago\Requests\Payment\PostAccountRegisterRequest;

include_once 'vendor/autoload.php';

$request = new PostAccountRegisterRequest();
$request->setDevice('pc');

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
file_put_contents("TestPostAccountRegisterRequest.json", $response);
