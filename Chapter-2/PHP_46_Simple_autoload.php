<?php

class PHP_46_Simple_autoload
{
    public $name;

    public function __contract($name)
    {
        $this->name = $name;
    }

    public function SayName()
    {
        echo "My Name is " . $this->name;
    }
}

$na = new PHP_46_Simple_autoload('Aung Myo Oo');
