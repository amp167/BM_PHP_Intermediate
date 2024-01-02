<?php
require_once "DAL.php";

class Data extends DAL
{
    public function __construct($db_host, $db_name, $db_user, $db_pass)
    {
        parent::__construct($db_host, $db_name, $db_user, $db_pass);
    }

    public function connect()
    {
        if ($this->db == null) {
            $this->db = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        }
        return $this->db;
    }

    public function disConnect()
    {
        return $this->db = null;
    }

    public function fetchDbData($id)
    {
        $stmt = $this->db->prepare("SELECT * from shops WHERE id=:id");
        $stmt->bindparam(":id", $id);
        $result = $stmt->execute();
        if ($result) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }

}

$data = new Data("localhost", "restaurant", "root", "");
$data->connect();
$shop = $data->fetchDbData(1);
echo $shop->name;