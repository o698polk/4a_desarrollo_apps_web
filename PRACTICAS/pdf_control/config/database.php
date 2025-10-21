
<?php

   class Database{

   public static function db_connect(){
/*    
if(!defined('DB_HOST')){
define('DB_HOST', 'localhost'); 
}
if(!defined('DB_USER')){
define('DB_USER', 'root');
}
if(!defined('DB_PASS')){
define('DB_PASS', '');
}
if(!defined('DB_NAME')){
define('DB_NAME', 'db_pdf_control');
}
*/
$DB_HOST="localhost";
$DB_USER="root";
$DB_PASS="";
$DB_NAME="db_pdf_control";

try{
    $conn= new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if($conn->connect_error){
  
    
    }   else{
       
        return $conn;
    }
    
 }catch(Exception $e){
    echo "Error de conexion: ".$e->getMessage();
 }

}


}






?>