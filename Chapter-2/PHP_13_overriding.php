<?php
class Member{
    var $name = "Mg Mg";
    function doIt(){
        echo "This is Do it Function";
    }
    function friendCount(){
        echo "I'm Counting Your friend";
    }
}
class PHP_13_overriding extends Member
{
    function friendCount()
    {
        echo "This is function from child class";
    }
}
$obj = new PHP_13_overriding();
$obj->doIt();
$obj->friendCount();