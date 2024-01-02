<?php
require_once "database/DAL.php";

class index
{

    public function __construct()
    {
        $shops = [
            ["Oppo", "192.168.13.1", "oppo", "123", 1],
            ["Vivo", "192.168.14.1", "vivo", "123", 1],
            ["HTC", "192.168.15.1", "htc", "123", 1],
            ["Techno", "192.168.16.1", "techno", "123", 1]
        ];
        $dal = new DAL();
        $dal->joinData();
    }
}

new index();