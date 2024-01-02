<?php

class MycustomException extends Exception
{
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
        $handler = fopen("log.txt", 'a');
        $data = "\n\nError Message => \n" . $message . "\nError number => \n" . $code . "\nError Timestamp\n" . date("Y-m-d H:m:s", time());
        fwrite($handler, $data);
        fclose($handler);
    }
}

function fileupload($file)
{
    if (!file_exists($file)) {
        throw new MyCustomException("There is no data", 20);
    }
}

try {
    fileupload("haha.txt");
} catch (Exception $e) {
    echo $e->getMessage();
}