<?php
class PHP_6_Access_Modifier{
    private $name = "Aung Myo Oo";
    public function greet(){
        echo $this->name . " is handsome";
    }
}
$obj = new PHP_6_Access_Modifier();
echo $obj->greet();

