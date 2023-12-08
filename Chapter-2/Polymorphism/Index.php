<?php
require_once "vendor/autoload.php";

class Index
{
    public function __construct()
    {
        $sq = new \app\square(20, 40);
        echo "Area of Square is " . $sq->getArea() . "<hr>";

        $cir = new \app\circle(10);
        echo "Area of Circle is " . $cir->getArea();
    }
}

new Index();