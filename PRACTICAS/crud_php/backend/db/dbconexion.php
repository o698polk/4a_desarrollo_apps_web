<?php
class Conexion{
   public static function conectar(){
    try{
     
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "todolist"; 
            
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
  
   
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
}

?>
