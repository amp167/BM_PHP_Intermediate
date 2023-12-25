<?php
require_once "database/DAL.php";

class index
{

    public function __construct()
    {
        $dal = new DAL();
        $dal->insertSingleShop("Huawei", "192.168.11.1", "huawei", "123", 1);
    }
}

new index();