<?php

class PHP_9_Getter_Setter
{
    private $name = "Mg Mg";
    public function setter($name){
        $this->name = $name;
    }
    public function getter(){
        return $this->name;
    }
}
$obj = new PHP_9_Getter_Setter();
$obj->setter("Aung Myo Oo");
echo $obj->getter();