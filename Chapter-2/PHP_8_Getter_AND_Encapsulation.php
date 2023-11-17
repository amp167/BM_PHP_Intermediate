<?php
class PHP_8_Getter_AND_Encapsulation{
    private $var = 30;
    public function getData(){
        return $this->var;
    }
}
$obj = new PHP_8_Getter_AND_Encapsulation();

echo "My age is ";
echo $obj->getData();