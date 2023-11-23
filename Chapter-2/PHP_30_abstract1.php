<?php
abstract class Something{
    const DB_HOST = "localhost";
    public $name = "Aung Myo Oo";

    public abstract function doIt();
    public function hello(){
        echo "Hello from abstract";
    }
}
class Index extends Something{
    public function doIt()
    {
        echo "I am Doing somthing";
    }
}
$obj = new Index();
echo $obj->name;
$obj->doIt();
$obj->hello();
echo Something::DB_HOST;
echo Index::DB_HOST;
