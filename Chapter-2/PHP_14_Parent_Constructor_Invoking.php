<?php

class Member{
    public function __construct(){
        echo "Parent Is Working.";
    }
}
class PHP_14_Parent_Constructor_Invoking extends Member
{
    public function __construct()
    {
        parent::__construct();
        echo "Child is Working.";
    }
}
$obj = new PHP_14_Parent_Constructor_Invoking();
