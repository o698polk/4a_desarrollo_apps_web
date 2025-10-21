<?php
include_once 'database.php';


     class  functiondb{

//funcion para obtener el usuario por el id o todos los usuarios
   public static function get_user_by_id($id){
        $db=new Database();

if($id==null){
    $sql="SELECT * FROM usuarios";
}else{
    $sql="SELECT * FROM usuarios WHERE id_user =$id";
}
        $result=$db->db_connect()->query($sql);

       
        foreach($result as $row){
        
        echo "<div class='container'> <table class='table' border='1'>";
            echo "<tr>";
            echo "<td>" .$row['nombre_completo']."</td>";
            echo "<td>" .$row['correo']."</td>";
            echo "<td>" .$row['cedula']."</td>";
            echo "<td>" .$row['nike_user']."</td>";
            echo "</tr>";
        echo "</table>";
        echo "</div>";
   
 
        }
     
    }

    // Validar cédula ecuatoriana (persona natural) usando dígito verificador
    public static function validate_cedula($cedula){
        $numero = preg_replace('/[^0-9]/', '', $cedula);
        if(strlen($numero) !== 10){
            return false;
        }
        $provincia = intval(substr($numero, 0, 2));
        if($provincia < 1 || $provincia > 24){
            return false;
        }
        $tercerDigito = intval($numero[2]);
        if($tercerDigito >= 6){
            return false;
        }
        $coeficientes = array(2,1,2,1,2,1,2,1,2);
        $suma = 0;
        for($i = 0; $i < 9; $i++){
            $producto = intval($numero[$i]) * $coeficientes[$i];
            if($producto >= 10){
                $producto -= 9;
            }
            $suma += $producto;
        }
        $digitoCalculado = (10 - ($suma % 10)) % 10;
        return $digitoCalculado === intval($numero[9]);
    }

    public static function set_user($nombre_completo, $correo, $cedula, $nike_user){
        try{
        if(!self::validate_cedula($cedula)){
            echo "Cédula no válida";
            return false;
        }
        $db=new Database();
        $sql="INSERT INTO usuarios (nombre_completo, correo, cedula, nike_user) VALUES ('$nombre_completo', '$correo', '$cedula', '$nike_user')";
           $resultado= $db->db_connect()->query($sql);
           if($resultado){
            return true;
           }else{
            return false;
           }
            return true;
        }catch(Exception $e){
            return false;
        }
       
        
    }




}

//$user=functiondb::get_user_by_id("2");
$user=functiondb::set_user("Jeremy Quiñonez", "jeremyquinones55@gmail.com", "1729274298", "jeremy");
if($user){
    echo "Usuario creado correctamente";
}else{
    echo "Error al crear el usuario";
}

?>
