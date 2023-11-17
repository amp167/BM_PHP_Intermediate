<?php

class PHP_11_Destructor
{
    var $t = 0;
    public function __construct()
    {
        echo "I am Construcotr and Start Working"."<br>";
    }
    public function loopIt(){
        for($i = 0 ; $i < 10000 ; $i++){
            $this->t += $i;
        }
        echo $this->t . "<br>";
    }
    public function __destruct(){
        echo "I am Destructor and end of class";
    }
}
$obj = new PHP_11_Destructor();
$obj->loopIt();