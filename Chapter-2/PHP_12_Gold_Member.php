<?php

class Member{
    public $name = "Aung Myo Oo";
    public $age = 23;
    public $edu = "php";
    function __construct(){
        echo "Hello";
    }
}
class PHP_12_Gold_Member extends Member
{

}
$obj = new PHP_12_Gold_Member();
echo $obj->name;
