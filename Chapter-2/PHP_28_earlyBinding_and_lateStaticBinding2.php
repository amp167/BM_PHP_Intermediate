<?php
class One{
    public static $authorname = "Aung Myo Oo";
    public static function authorname (){
        return static::$authorname;
    }
    public function getName(){
        echo static::authorname();
    }
}
class Two extends One {
    public static function authorname(){
        return static::$authorname . " with Pann Nu";
    }
}
$aa = new Two();
$aa->getName();
