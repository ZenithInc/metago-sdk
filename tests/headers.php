<?php

use Zenith\Metago\Client;
use Zenith\Metago\Configs;

$configs = new Configs(677649, '2d5dbd922eceeb7edecda0196f037a50', 'dev');
$client = new Client($configs);

const ACCESS_TOKEN = '57c764ea-a097-4ba4-a348-06da99e63461';

return $client;
