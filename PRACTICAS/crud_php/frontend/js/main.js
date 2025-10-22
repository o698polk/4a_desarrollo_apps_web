document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM cargado');
    agregarTareas();
    obtenerTareas();
    function obtenerTareas(){
     let datos = {
        TodoList: true
     }
        $.post('../backend/controller/controllerTodoList.php', datos, function(response) {
            console.log(response);
            let data = JSON.parse(response);
            console.log(data);
            let tbody = document.querySelector('tbody');
            tbody.innerHTML = '';
            data.forEach(element => {
                tbody.innerHTML += `<tr><td>${element.id}</td><td>${element.tareas}</td><td>${element.descripcion}</td><td><button class="btn btn-primary">Editar</button></td><td><button class="btn btn-danger">Eliminar</button></td></tr>`;
            });
        });
    }
  function  agregarTareas(){ 
    $('#form_agregar_tarea').submit(function(e) {
        e.preventDefault();
        let datos = {
            agregar_tarea: true,
            tareas: $('#tarea').val(),
            descripcion: $('#descripcion').val()
        }
        $.post('../backend/controller/controllerTodoList.php', datos, function(response) {
            console.log(response);
            alert("Datos agregados correctamente");
        
        });
    });
    }
});

