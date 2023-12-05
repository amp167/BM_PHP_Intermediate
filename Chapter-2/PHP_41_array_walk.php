<?php

$arr = ["1" => "One", "2" => "Two", "3" => "Three"];

function fonky($value, $key)
{
    echo "Key is " . $key . " and value is " . $value . "<hr>";
}

array_walk($arr, "fonky");