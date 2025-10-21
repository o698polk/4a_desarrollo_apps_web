<?php
$nombre="";
if(isset($_POST['nombre'])){
    $nombre=$_POST['nombre'];
}
echo $nombre;


?>
<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <h1>FORMULARIO</h1>
        <form action="varibles.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <input type="submit" value="Enviar">
        </form>
      
    </body>
</html>