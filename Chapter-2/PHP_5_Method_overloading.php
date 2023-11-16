<?php
class PHP_5_Method_overloading{
    public function doIt($default=20){
        echo "I am ".$default;
    }
}
$obj = new PHP_5_Method_overloading();
$obj->doIt(40);