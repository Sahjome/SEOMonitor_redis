<?php
require('RedisHelper.php');
require_once('../vendor/autoload.php');


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

///summary
///this class does the Redis instantiation
class Caller{
    function calling(){
        $redis = new PhpRedisExtended\RedisHelper();
    }
}

$caller = new Caller();
$caller->calling();
