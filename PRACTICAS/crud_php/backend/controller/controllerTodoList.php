<?php
include_once '../crud/query.php';
class ControllerTodoList{


    public static function UpdateEventListenner(){
       
        //MOSTRAR TODAS LAS TAREAS EN EL INDEX.PHP
       if(!empty($_POST['TodoList'])){
             $query = Query::todo_el_listado();
             echo $query;
          return $query;
        }
        if(!empty($_POST['agregar_tarea'])){
            $query = Query::agregar_tarea($_POST['tareas'], $_POST['descripcion']);
            echo $query;
        }
        if(!empty($_POST['editar_tarea'])){
            $query = Query::editar_tarea($_POST['id'], $_POST['tareas'], $_POST['descripcion']);
            echo $query;
        }
        if(!empty($_POST['eliminar_tarea'])){
            $query = Query::eliminar_tarea($_POST['id']);
            echo $query;
        }
  
    }

  
}

 ControllerTodoList::UpdateEventListenner();
?>