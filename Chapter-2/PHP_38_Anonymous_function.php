<?php

$num = 20;
$var  = function (&$num){
    $num = 50;
    echo "the num is ".$num;
};
$var($num);
echo "<br>";
echo $num;