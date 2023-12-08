<?php

class loader
{
    public static function loading($load)
    {
        require_once $load . ".php";
    }
}