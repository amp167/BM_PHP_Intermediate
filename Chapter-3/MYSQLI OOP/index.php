<?php

use app\database\DBGen;

require_once "vendor/autoload.php";

class index
{
    private $db;

    public function __construct()
    {
        $shops = [
            ['Panasonic', '192.168.4.254', 'panasonic', '123', 1],
            ['Asus', '192.168.5.254', 'asus', '123', 1],
            ['Msi', '192.168.6.254', 'msi', '123', 1],
            ['Hp', '192.168.7.254', 'hp', '123', 1],
        ];
        $this->db = new DBGen();
//        $this->db->InsertMultipleshops($shops);
//        $this->db->updateShop(10, "Toshiba");
        $this->db->fetchAllShops(1);
    }


}

new index();