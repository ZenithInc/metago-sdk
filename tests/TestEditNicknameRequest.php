<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\EditNicknameRequest;

$request = new EditNicknameRequest();
$request->setNickname("Bob Smith");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;