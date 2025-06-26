<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\EditInfoRequest;

$request = new EditInfoRequest();
$request->setNickname("Test User")
    ->setAvatar("https://example.com/avatar_2.jpg");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;