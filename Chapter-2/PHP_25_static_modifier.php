<?php
class PHP_25_static_modifier{
    public static $count = 0;
    public function getCount(){
        self::$count++;
        echo self::$count . "<br>";
    }
}
$aa = new PHP_25_static_modifier();
$aa->getCount();
$aa->getCount();
$aa->getCount();

echo "<hr>";

$bb = new PHP_25_static_modifier();
$bb->getCount();
$bb->getCount();
$bb->getCount();