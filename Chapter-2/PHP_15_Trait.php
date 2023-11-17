<?php
trait member{
    function doIt(){
        echo "We are doing it.";
    }
}
trait hacker{
    function hackIt(){
        echo "We are Hacking it.";
    }
}
trait tester{
    function testIt(){
        echo "We are testing it.";
    }
}
class PHP_15_Trait{
    use member,hacker,tester;
}
$obj = new PHP_15_Trait();
$obj->doIt();
$obj->hackIt();
$obj->testIt();