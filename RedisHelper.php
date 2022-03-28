<?php
require('UtilityHelper.php');
class RedisHelper{

    private $callingClass;
    
    function __construct(private array $options, private bool $prefix)
    {
        $utilityHelper = new UtilityHelper();
        $this->callingClass = $utilityHelper->get_calling_class();
    }

    function RedisConnector()
    {
        try {
            $redis = new Redis();
            // using a default connection for 
            $host = is_null($this->options["host"]) ? "redis" : $this->options["host"];
            $host = is_null($this->options["port"]) ? 6379 : $this->options["port"];
            $connect = $redis->connect($host, $port, 15);
            if ($this->prefix == true){
                $redis->setOption(Redis::OPT_PREFIX, $this->callingClass);
            }
            return "Redis connected successfully";
        } catch (Exception $e) {
            return "Redis unable to connect:"." ".$e->getMessage();
        }
       
    }
}




