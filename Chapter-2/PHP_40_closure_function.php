<?php
$num = 20;

$var = function () use ($num){
    echo $num;
};
$var();