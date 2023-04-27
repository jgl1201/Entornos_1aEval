<?php

if($_POST) {
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $imagen = $_POST['imagen'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbName = 'prueba01';
    $conn = new mysqli($host, $user, $pass, $dbName);
    if ($conn->connect_error) {
        die ('Fallo al conectarse: '.$conn->connect_error);
    }
    $query = "INSERT INTO gatos(nombre, raza, imagen) 
              VALUES( '{$nombre}', '{$raza}', '{$imagen}' )";

    $result = $conn->query($query);
    if ($result == TRUE) echo 'Gato guardado correctamente';
    else echo 'ERROR: '.$conn->error;

    $conn->close();
}

?>

<style>
    form{
        display:flex;
        flex-direction:column;
    }
    input{
        margin-top:10px;
    }
</style>

<html>
    <body>

        <form action="Ejemplo17.php" method="POST">
            Nombre: <input type="text" placeholder="Inserta el nombre del gato" name="nombre">
            Raza: <input type="text" placeholder="Inserta la raza del gato" name="raza">
            Imagen: <input type="text" placeholder="Inserta la url de la imagen" name="imagen">
            <input type="submit" value="Crear gato">
        </form>
        <a href="Ejemplo18.php">Ver los gatos</a>
    </body>
</html>