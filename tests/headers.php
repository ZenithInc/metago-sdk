<?php

use Zenith\Metago\Client;
use Zenith\Metago\Configs;

$configs = new Configs(677389, 'bb5ff2d4215fb8d3a66edba35b44d081', 'dev');
$client = new Client($configs);

// 王畅
//const ACCESS_TOKEN = '3154e2fa-5914-40fc-8977-265c883107cf';

// 夜雨
const ACCESS_TOKEN = 'b6ceded0-adfd-42e4-ab39-ebbaf68963f5';

return $client;
