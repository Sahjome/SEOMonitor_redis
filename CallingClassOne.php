<?php
require('UtilityHelper.php');

///summary
///this class does the Redis instantiation
class Called{
    function decider(){
        $utilityhelper = new UtilityHelper();
        echo $utilityhelper.get_calling_class();
    }
}

class Caller{
    function calling(){
        $called = new Called();
        $called->decider();
    }
}

$caller = new Caller();
$caller->calling();
