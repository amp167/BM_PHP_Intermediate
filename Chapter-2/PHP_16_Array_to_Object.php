<?php
$ary = ["one"=>1,"two"=>2,"three"=>3,"four"=>4];

var_dump($ary);
echo "<hr>";
echo $ary["one"];
echo "<hr>";
$obj = (object) $ary;
var_dump($obj);
echo "<hr>";
echo $obj->one;

