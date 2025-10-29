<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container cont_1">
        <h1 class="text-center text_title_1">LISTA DE TAREAS</h1>
      <a href="crear.php" class="btn btn-primary">Agregar Tarea</a>
    <table class="table table-bordered">
      <thead>
            <tr>
                <th>ID</th>
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
   
            </thead>
            <tbody>

        <tr>
            <td>1</td>
            <td>Tarea 1</td>
            <td>Descripción 1</td>
            <td><button class="btn btn-primary">Editar</button></td>
            <td><button class="btn btn-danger">Eliminar</button></td>

        </tr>
    </tbody>
    </table>
    </div>

    <footer>
        <p>Derechos reservados &copy; 2025</p>
    </footer>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/main.js"></script>
</body>
</html>