<?php

class MyCustomException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        echo "Error Up<br>";
    }
}

function fileUpload($file)
{
    if (!file_exists($file)) {
        throw new MyCustomException("File Not Exit", 0);
    }
}

try {
    fileUpload("haha.txt");
} catch (Exception $e) {
    echo $e->getMessage();
}