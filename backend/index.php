<?php

include_once dirname(__FILE__) . "/vendor/autoload.php";

@error_reporting(E_ALL);
@ini_set('display_errors', 1);

$redis = new Predis\Client([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379
]);

$redis->publish('foo', 'hello, world!');