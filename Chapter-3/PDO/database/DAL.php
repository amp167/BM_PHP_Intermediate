<?php
require_once "DBGen.php";

class DAL
{
    private $db;

    public function __construct()
    {
        $this->db = DBGen::getInstance()->getConn();
    }

    public function getSingleShop($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $stmt->bindColumn("name", $name);
        $stmt->bindColumn("ipadd", $ipadd);
        $result = $stmt->fetchObject();

        echo $result->name . "<br>" . $result->ipadd;
    }

    public function getAllShop($state)
    {
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $stmt->bindParam(":state", $state);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $shop) {
            echo $shop->name . "<br>";
            echo $shop->ipadd . "<br>";
            echo "<hr>";
        }
    }

    public function insertSingleShop($name, $ipadd, $username, $password, $state)
    {
        $cDate = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at)
                                    VALUES (:name,:ipadd,:username,:password,:state,:cDate)");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":ipadd", $ipadd);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":state", $state);
        $stmt->bindParam(":cDate", $cDate);
        $result = $stmt->execute();
        $lastInsertID = $this->db->lastInsertId();
        $affectRow = $stmt->rowCount();
        echo $result ? "last insert id is : " . $lastInsertID . " <br> Affected Row  :" . $affectRow : "Failed";
    }
}