<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostBankSmsRequest;

$request = new PostBankSmsRequest();
$request->setOrderSn("R250728232314949338676782");
$request->setBankAlias("cpb9p");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);


