<?php

class Index
{
    public static $name = "Aung Aung";
    public static $instance;

    public function __construct()
    {
        self::$name = "Mg Mg";
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Index();
        }
        return self::$instance;
    }

    public function getName()
    {
        echo self::$name;
    }
}

Index::getInstance();
$aa = new Index();
$aa->getName();