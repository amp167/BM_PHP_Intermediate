<?php

class PHP_19_Magic_method_call_callstatic
{
    public function __call($methods,$para){
        echo "you are trying to call methods $methods with parameters of";
        echo "<hr>"."<pre>";
        print_r($para);
    }
    public static function __callstatic($methods,$para){
        echo "you are trying to call methods $methods with parameters of";
        echo "<hr>"."<pre>";
        print_r($para);
    }
}
//$obj=new PHP_19_Magic_method_call_callstatic();
//$obj->hey("Mg Mg","Aung Aung");
PHP_19_Magic_method_call_callstatic::hey("Soe Soe","Aung Aung");