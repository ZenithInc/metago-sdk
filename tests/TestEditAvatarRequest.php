<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\EditAvatarRequest;

$request = new EditAvatarRequest();
$request->setAvatar("https://example.com/avatar.jpg");

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;