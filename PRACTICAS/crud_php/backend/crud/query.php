<?php
include_once '../db/dbconexion.php';
class Query{
   public static function todo_el_listado(){
    $db=Conexion::conectar();
    $pdo=$db->prepare("SELECT * FROM tareaslista");
    $pdo->execute();
    
    return  json_encode($pdo->fetchAll(PDO::FETCH_ASSOC));

   }
   public static function agregar_tarea($tareas, $descripcion){
    $db=Conexion::conectar();
    $pdo=$db->prepare("INSERT INTO tareaslista (tareas, descripcion) VALUES (:tareas, :descripcion)");
    $pdo->bindParam(':tareas', $tareas);
    $pdo->bindParam(':descripcion', $descripcion);
    $pdo->execute();
    return json_encode(['success' => 'Tarea agregada correctamente']);
   }
   public static function editar_tarea($id, $tareas, $descripcion){
    $db=Conexion::conectar();
    $pdo=$db->prepare("UPDATE tareaslista SET tareas = :tareas, descripcion = :descripcion WHERE id = :id");
    $pdo->bindParam(':id', $id);
    $pdo->bindParam(':tareas', $tareas);
    $pdo->bindParam(':descripcion', $descripcion);
    $pdo->execute();
    return $pdo->rowCount();
   }
}

?>