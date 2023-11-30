<?php

function doIt($p1,$p2,$p3){
    $result = $p1 + $p2;
    $p3($result);
};

doIt(1,2,function($num){
    echo "the result is ".$num;
});