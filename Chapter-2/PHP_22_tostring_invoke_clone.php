<?php
class PHP_22_tostring_invoke_clone{
    public function __tostring(){
        return "There is no properties and method in this class";
    }
    public function __invoke(){
        echo "you are trying to call method";
    }
    public function __clone(){
        echo "you are cloning me";
    }
}
$obj = new PHP_22_tostring_invoke_clone();
echo $obj;
$obj();
$aa = clone $obj;