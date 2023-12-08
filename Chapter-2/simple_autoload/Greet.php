<?php

class Greet
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function SayName()
    {
        echo "My Name is " . $this->name . "<hr>";
    }
}
