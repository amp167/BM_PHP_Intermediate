<?php
require_once("Autoload/loader.php");

class index
{
    public function __construct()
    {
        loader::loading("Greet");
        $gre = new Greet("Aung Myo Oo");
        $gre->SayName();

        loader::loading("Hello/Hello");
        $he = new Hello();
        $he->Hello();

        loader::loading("Haha/Haha");
        $he = new Haha();
        $he->Haha();
    }
}

$ind = new index();