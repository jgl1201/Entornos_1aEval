<a href="Ejemplo17.php">Insertar nuevo gato</a>
<hr>

<?php

// Uso de bass de datos
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = 'prueba01';
$conn = new mysqli($host, $user, $pass, $dbName);
if ($conn->connect_error) {
    die ('Fallo al conectarse: '.$conn->connect_error);
}

if ($_GET) {
    $idABorrar = $_GET['idBorrar'];
    $query = "DELETE FROM gatos WHERE id = ".$idABorrar;
    $result = $conn->query($query);
    if ($result == TRUE) {
        echo 'El gato se borró correctamente';
        header('Location: Ejemplo18.php');
    } 
    else echo 'ERROR al intentar borrar '.$conn->error;
}

$query = 'SELECT * FROM gatos';
$result = $conn->query($query);

while ($row = $result->fetch_assoc() ) {
    echo $row['nombre'].'<br>';
    $id = $row['id'];
    echo "<a href='Ejemplo18.php?idBorrar={$id}'>Borrar</a>";
    echo "<br>";
    $img = $row['imagen'];
    //echo '<img src="'.$img.'" width="200">'.'<br>';
    echo "<img src = '{$img}' width = '150'>";
    echo '<br>';
}


echo 'Conexión ok';

$conn->close();

?>