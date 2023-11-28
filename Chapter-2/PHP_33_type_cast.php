<?php
class PHP_33_type_cast
{
    public function showResult(int $something){
        echo $something;
    }
}
$obj = new PHP_33_type_cast();
$obj->showResult(false);