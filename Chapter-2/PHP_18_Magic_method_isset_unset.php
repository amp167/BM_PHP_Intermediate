<?php
class PHP_18_Magic_method_isset_unset{
    function __isset($name){
        echo "You are checking the property <span style='color: red'>$name</span> isset or not";
    }
    function __unset($same){
        echo "You are checking the property <span style='color: green'>$same</span> unset or not";
    }
}
$obj=new PHP_18_Magic_method_isset_unset();

isset($obj->hohar);
echo "<br>";
unset($obj->dehar);