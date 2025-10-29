<?php
class Database {
   

    public static function getConnection() {
        $host = "localhost";
        $database_name = "dbmcp";
        $username = "root";
        $password = "";
        $conn;

        try {
            $conn = new PDO("mysql:host=$host;dbname=$database_name",$username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
         
            return $conn;
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
       
    }
}

?>