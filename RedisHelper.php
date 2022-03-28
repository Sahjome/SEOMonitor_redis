<?php
public class Redis{

    private $callingClass;

    public function __construct()
    {
        $utilityHelper = new UtilityHelper();
        $this->callingClass = $utilityHelper.get_calling_class();
    }

    public function RedisUtilityHelper()
    {
        
    }
}