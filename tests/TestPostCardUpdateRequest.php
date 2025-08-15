<?php

use Zenith\Metago\Requests\Payment\PostCardUpdateRequest;

include "vendor/autoload.php";

$request = new PostCardUpdateRequest();
$request->setAlias('495hy');

$client = include "headers.php";
// example: {"code":200,"msg":"success","data":{"url":"https://my.orangebank.com.cn/corporplat/paybFastUpdateCard_index_H5.do?CustAcctId=888800242002273\u0026MainAcctId=11017717351000\u0026OldRelatedAcctId=6217565300040888104\u0026ThirdCustId=test_s10003677691\u0026clubName=%E7%8E%8B%E7%95%85\u0026clubType=P\u0026idnumber=231005200103250021\u0026idtype=1\u0026mobile="}}
$client->request($request, ACCESS_TOKEN, true);
