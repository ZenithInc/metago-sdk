<?php

include "vendor/autoload.php";

use Zenith\Metago\Enums\OrderStatusEnum;
use Zenith\Metago\Requests\Order\GetOrderListRequest;

$request = new GetOrderListRequest();
$request->setPage(1)
    ->setPageSize(10)
    ->setStatus(OrderStatusEnum::CLOSED);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN, true);
file_put_contents("order_list.json", $response);

