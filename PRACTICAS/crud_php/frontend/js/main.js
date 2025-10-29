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
                tbody.innerHTML += `
                    <tr>
                        <td>${element.id}</td>
                        <td>${element.tareas}</td>
                        <td>${element.descripcion}</td>
                        <td><button class="btn btn-primary btn-editar" data-id="${element.id}" data-tarea="${element.tareas}" data-descripcion="${element.descripcion}">Editar</button></td>
                        <td><button class="btn btn-danger btn-eliminar" data-id="${element.id}">Eliminar</button></td>
                    </tr>`;
            });
            agregarEventosEliminar();
            agregarEventosEditar();
        });
    }
    function agregarTareas(){ 
        $('#form_agregar_tarea').submit(function(e) {
            e.preventDefault();
            let datos = {
                agregar_tarea: true,
                tareas: $('#tarea').val(),
                descripcion: $('#descripcion').val()
            }
            $.post('../backend/controller/controllerTodoList.php', datos, function(response) {
                console.log(response);
                Swal.fire({
                    icon: 'success',
                    title: '¡Éxito!',
                    text: 'Tarea agregada correctamente',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#0d6efd'
                }).then(() => {
                    obtenerTareas();
                    $('#tarea').val('');
                    $('#descripcion').val('');
                });
            }).fail(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo agregar la tarea',
                    confirmButtonText: 'Aceptar',
                    confirmButtonColor: '#dc3545'
                });
            });
        });
    }

    function agregarEventosEliminar() {
        $('.btn-eliminar').off('click').on('click', function() {
            let id = $(this).data('id');
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    let datos = {
                        eliminar_tarea: true,
                        id: id
                    };
                    $.post('../backend/controller/controllerTodoList.php', datos, function(response) {
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'Eliminado',
                            text: 'La tarea ha sido eliminada',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#0d6efd'
                        }).then(() => {
                            obtenerTareas();
                        });
                    }).fail(function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo eliminar la tarea',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#dc3545'
                        });
                    });
                }
            });
        });
    }

    function agregarEventosEditar() {
        $('.btn-editar').off('click').on('click', function() {
            let id = $(this).data('id');
            let tarea = $(this).data('tarea');
            let descripcion = $(this).data('descripcion');
            
            Swal.fire({
                title: 'Editar Tarea',
                html: `
                    <input id="swal-tarea" class="swal2-input" placeholder="Tarea" value="${tarea}">
                    <input id="swal-descripcion" class="swal2-input" placeholder="Descripción" value="${descripcion}">
                `,
                showCancelButton: true,
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#6c757d',
                preConfirm: () => {
                    return {
                        tarea: document.getElementById('swal-tarea').value,
                        descripcion: document.getElementById('swal-descripcion').value
                    }
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    let datos = {
                        editar_tarea: true,
                        id: id,
                        tareas: result.value.tarea,
                        descripcion: result.value.descripcion
                    };
                    $.post('../backend/controller/controllerTodoList.php', datos, function(response) {
                        console.log(response);
                        Swal.fire({
                            icon: 'success',
                            title: 'Actualizado',
                            text: 'La tarea ha sido actualizada',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#0d6efd'
                        }).then(() => {
                            obtenerTareas();
                        });
                    }).fail(function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo actualizar la tarea',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#dc3545'
                        });
                    });
                }
            });
        });
    }
});

