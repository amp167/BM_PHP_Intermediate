<?php
class Test
{}
class Best
{}

class PHP_34_Array_type_and_object_type_cast{
    public function showResult(Best $something){
        var_dump($something);
    }
}
$t = new Best();
$obj = new PHP_34_Array_type_and_object_type_cast();
$obj->showResult($t);
