<?php

require_once "vendor/autoload.php";

use abb\Middlewares\tester;
use  abb\best\Best;

class Auto
{
    public function __construct()
    {
        $he = new tester();
        $he->saytesterName();

        $be = new Best();
        $be->sayBestName();

        $ha = new \haha\HaHa();
        $ha->sayHaha();
    }
}

new Auto();