<?php

class MyErrorClass extends Exception
{

}

function myfunctionHandler($errNo, $errmessage, $file, $lineNo)
{
    echo "Error No : " . $errNo . "<br>";
    echo "Error Message : " . $errmessage . "<br>";
    echo "Error File : " . $file . "<br>";
    echo "Error line Number : " . $lineNo . "<br>";
    throw new MyErrorClass($errmessage, $errNo);

}


set_error_handler("myfunctionHandler");
try {
    include "helo.php";
} catch (Exception $e) {
    echo $e->getMessage();
    echo $e->getCode();
}