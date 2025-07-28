<?php

use Zenith\Metago\Client;
use Zenith\Metago\Configs;

$configs = new Configs(677389, 'bb5ff2d4215fb8d3a66edba35b44d081', 'dev');
$client = new Client($configs);

const ACCESS_TOKEN = 'fe3b5a14-abc0-4f7f-9dcc-6014f0816132';

return $client;
