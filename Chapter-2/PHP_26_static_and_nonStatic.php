<?php
class PHP_26_static_and_nonStatic{
    public static function something(){
        echo "this is something";
    }
    public function doit(){
        self::something();
    }
}
$obj = new PHP_26_static_and_nonStatic();
$obj->doit();
