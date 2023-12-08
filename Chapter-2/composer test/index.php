<?php
require_once "vendor/autoload.php";

class index
{
    public function __construct()
    {
        $ho = new Home();
        $ho->sayHomeName();

        $st = new Start();
        $st->sayStartName();

        $fil = new Filter();
        $fil->sayFilterName();

        $help = new Helper();
        $help->sayHelperName();
    }
}

new index();