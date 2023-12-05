<?php
$arr = ["1" => "One", "2" => "Two", "3" => "Three"];
$num = 20;
array_walk($arr, function ($value, $key) use (&$num) {
    $num++;
    echo "Key is " . $key . " and value is " . $value . "current value is " . $num . "<hr>";
});
