<?php


require_once "vendor/autoload.php";

use app\gem\shape;

class Index
{
    public function __construct()
    {
        $sq = new \app\square(20, 40);
        $this->getAreaPrice($sq);

        $cir = new \app\circle(10);
        $this->getAreaPrice($cir);
    }

    public function getAreaPrice(Shape $shape)
    {
        $area = $shape->getArea();
        echo "The price of Area is " . number_format(($area * 17), 2) . " Ks<hr>";
    }
}

new Index();