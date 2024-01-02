<?php

function myfileupload($file)
{
    if (file_exists($file)) {
        $handler = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($handler, $size);
    } else {
        throw new Exception("The File you upload is not found!");
    }
}

try {
    myfileupload("Hi.txt");
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
    echo $e->getCode() . "<br>";
    echo $e->getFile() . "<br>";
    echo $e->getLine() . "<br>";
}