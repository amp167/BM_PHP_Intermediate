<?php
class PHP_35_Return_type
{
    public function showData(int $num) : int
    {
        return $num;
    }
}
$obj = new PHP_35_Return_type();
$vv=$obj->showData(true);
var_dump($vv);
