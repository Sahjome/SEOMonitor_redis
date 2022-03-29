<?php
namespace PhpRedisExtended;
require('UtilityHelper.php');
class RedisHelper{

    private $callingClass;
    
    function __construct()
    {
        $utilityHelper = new UtilityHelper();
        $this->callingClass = $utilityHelper->get_calling_class();
        $this->RedisConnector();
    }

    function RedisConnector()
    {
        try {
            $redis = new \Redis();
            //using connection from .env
            $host = $_ENV["REDIS_HOST"];
            $port = $_ENV["REDIS_PORT"];
            $prefix = $_ENV["REDIS_OPTIONS_PREFIX"];
            $connect = $redis->connect($host, $port, 15);
            if ($prefix == true){
                $redis->setOption(\Redis::OPT_PREFIX, $this->callingClass);
            }
            return "Redis connected successfully";
        } catch (Exception $e) {
            return "Redis unable to connect:"." ".$e->getMessage();
        }
       
    }
}




