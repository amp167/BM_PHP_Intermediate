<?php
class PHP_17_Magic_method_Get_Set{
    function __get($var)
    {
        echo "you are trying to get $var property" . "<br>";
    }
    function __set($var,$value){
        echo "you are trying to set property $var to $value";
    }
}
$obj = new PHP_17_Magic_method_Get_Set();
$obj->shilar;
$obj->name = "Aung Aung";