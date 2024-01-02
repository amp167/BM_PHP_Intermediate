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

    public function multipleInsertShop($shops)
    {
        $datte = date("Y-m-d H:m:s");
        $rowCount = 0;
        $stmt = $this->db->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) 
                VALUES (:name,:ipadd,:username,:password,:state,:created_at)");
        foreach ($shops as $shop) {
            $stmt->bindParam(":name", $shop[0]);
            $stmt->bindParam(":ipadd", $shop[1]);
            $stmt->bindParam(":username", $shop[2]);
            $stmt->bindParam(":password", $shop[3]);
            $stmt->bindParam(":state", $shop[4]);
            $stmt->bindParam(":created_at", $datte);
            $result = $stmt->execute();
            $rowCount++;
            $lastId = $this->db->lastInsertId();
            echo $result ? "Data Inserted Successfully <br> ID : " . $lastId . "<hr>" : "Insert Failed";
        }
        echo $rowCount . "rows affected";
    }

    public function updateShop($id, $name)
    {
        $stmt = $this->db->prepare("UPDATE shops set name=:name WHERE id=:id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "Updated" : "Failed";
    }

    public function deleteShop($id)
    {
        $stmt = $this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "Deleted" : "Failed";

    }

    public function joinData()
    {
        $stmt = $this->db->prepare("SELECT sh.`name` AS ShopName,
                        dh.`name` DishName,
                        od.amount AS QTY ,
                        od.price AS Price,
                        (od.price*od.amount) as Amount
                        FROM orders AS od
                        LEFT JOIN shops AS sh 
                        ON sh.id = od.shopid
                        LEFT JOIN dishes AS dh 
                        ON dh.id = od.dishid
                        ");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        $total = 0;
        foreach ($result as $order) {
            $total += $order->Amount;
            echo "Shop name : " . $order->ShopName . "<br>";
            echo "Dish name : " . $order->DishName . "<br>";
            echo "Price : " . $order->Price . "<br>";
            echo "QTY : " . $order->QTY . "<br>";
            echo "Amount : " . $order->Amount . "<br>";
            echo "<hr>";
        }
        echo "Total Amount is : " . $total;
    }
}