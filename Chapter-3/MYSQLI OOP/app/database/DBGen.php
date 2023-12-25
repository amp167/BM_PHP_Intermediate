<?php

namespace app\database;

use mysqli;

class DBGen
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }

    public function getSingleShop($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param('i', $id);
        $result = $stmt->execute();
        $stmt->bind_result($id, $user, $ipadd, $username, $password, $state, $created_at);
        while ($stmt->fetch()) {
            echo "ID : " . $id . "<br>";
            echo "User : " . $user . "<br>";
            echo "IP ADDRESS :" . $ipadd . "<br>";
            echo $username . "<br>";
            echo $password . "<br>";
            echo $state . "<br>";
            echo $created_at . "<br>";
        }
    }

    public function getMultipleShop($state)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i', $state);
        $stmt->execute();
        $stmt->bind_result($id, $user, $ipadd, $username, $password, $state, $created_at);
        while ($stmt->fetch()) {
            echo "ID : " . $id . "<br>";
            echo "User : " . $user . "<br>";
            echo "IP ADDRESS :" . $ipadd . "<br>";
            echo $username . "<br>";
            echo $password . "<br>";
            echo $state . "<br>";
            echo $created_at . "<br>";
        }
    }

    public function getAllShop()
    {
        $result = $this->conn->query("SELECT * FROM shops");
        while ($row = $result->fetch_object()) {
            echo $row->name;
        }

    }

    public function InsertSingleShop($name, $ipadd, $username, $password, $state)
    {
        $datty = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) 
        VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('ssssis', $name, $ipadd, $username, $password, $state, $datty);
        $result = $stmt->execute();
        echo $result ? "Datainserted" : "insert Failed";

    }

    public function InsertMultipleshops($shops)
    {
        $datty = date("Y-m-d H:m:s");
        $stmt = $this->conn->prepare("INSERT INTO shops (name,ipadd,username,password,state,created_at) 
        VALUES (?,?,?,?,?,?)");
        foreach ($shops as $shop) {
            $stmt->bind_param('ssssis', $shop[0], $shop[1], $shop[2], $shop[3], $shop[4], $datty);
            $stmt->execute();
            $lastInsertId = $stmt->insert_id;
            echo "Successfully insert " . $shop[0] . " to ID : " . $lastInsertId . "<hr>";

        }
    }

    public function updateShop($shopID, $name)
    {
        $stmt = $this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param('si', $name, $shopID);
        $result = $stmt->execute();
        echo $result ? "updated" : "Failed";
    }

    public function deleteShop($shopID)
    {
        $stmt = $this->conn->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param('i', $shopID);
        $result = $stmt->execute();
        echo $result ? "Deleted" : "Failed";
    }

    public function getJoinData($state)
    {
        $stmt = $this->conn->prepare("
        SELECT 
            od.id as Order_ID,
            sh.name as Shop_Name,
            dh.name as Dish_Name,
            od.price*od.amount as Total,
            od.created_at as Order_Date
        FROM
                     orders as od
        LEFT JOIN
            shops 
        AS sh ON 
            sh.id = od.shopid
        INNER JOIN 
            dishes
        AS dh ON 
            dh.shopid = sh.id
        WHERE od.state = ?
        GROUP BY od.id
        ");
        $stmt->bind_param('i', $state);
        $result = $stmt->execute();
        $stmt->bind_result($orderId, $shopName, $dishName, $total, $date);
        while ($stmt->fetch()) {
            echo $orderId . "<br>" . $shopName . "<br>" . $dishName . "<br>" . $total . "<br>" . $date . "<hr>";
        }

    }

    public function fetchAllShops($state)
    {
        $stmt = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $stmt->bind_param('i', $state);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_all();
        foreach ($data as $item) {
            echo $item[1] . "<br>";
        }


    }
}