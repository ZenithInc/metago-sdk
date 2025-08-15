<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Payment\PostCardUnbindRequest;

$request = new PostCardUnbindRequest();
$request->setAlias('pnb25');

$client = include "headers.php";
$client->request($request, ACCESS_TOKEN, true);
