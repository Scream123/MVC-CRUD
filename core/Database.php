<?php
namespace core;

use PDO;
use PDOException;


class Database extends PDO
{
    static public function getConnect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123321";
        try{
            $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}