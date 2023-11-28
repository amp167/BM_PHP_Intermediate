<?php

//is_bool()
//is_int()
//is_string()
//is_float()
//is_null
class PHP_32_Checking_variables_type
{
    public function checkType($something){
        if (is_null($something)){
            echo "Good to go!!";
        }else{
            echo "We need float data type";
        }
    }
}
$obj = new PHP_32_Checking_variables_type();
$obj->checkType(Null);