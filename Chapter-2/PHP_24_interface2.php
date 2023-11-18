<?php
interface sheInter{
    public function setWeapon($weapon);
}
class PHP_24_interface2 implements sheInter{

    private $weapon;
    public function setWeapon($weapon)
    {
        return $this->weapon = $weapon;
    }
    public function killIt(){
        echo "you are trying to kill with ". $this->weapon;
    }
}
$obj = new PHP_24_interface2();
$obj->setWeapon("knife");
$obj->killIt();