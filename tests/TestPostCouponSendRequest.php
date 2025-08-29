<?php

include "vendor/autoload.php";

use Zenith\Metago\Requests\Ump\PostCouponSendRequest;

$request = new PostCouponSendRequest();
$request->setMemberId(677389)
    ->setCouponAlias('yeq4h')
    ->addMobiles(['18701627065']);

$client = include "headers.php";
// example: {"code":200,"msg":"success","data":{"list":[{"alias":"8dvdx","name":"111","discount_type":0,"discount_amount":200000,"threshold":"提货劵","product_alias":"","product_category_id":0,"scope":"仅限指定商品可用","instructi","valid_begin_at":0,"valid_end_at":1758856967,"status":1}]}}
$response = $client->request($request, ACCESS_TOKEN, true);;
