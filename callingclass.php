<?php
require('RedisHelper.php');

///summary
///this class does the Redis instantiation
class Caller{
    function calling(){
        // the Redis connection parameters would be gotten from the .env file
        $connection_string = ['redis', 6379];
        $called = new RedisHelper($connection_string, true);
        echo $called->RedisConnector();
    }
}

$caller = new Caller();
$caller->calling();
