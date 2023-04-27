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

$query = 'SELECT * FROM gatos';
$result = $conn->query($query);

while ($row = $result->fetch_assoc() ) {
    echo $row['nombre'].'<br>';
    $img = $row['imagen'];
    //echo '<img src="'.$img.'" width="200">'.'<br>';
    echo "<img src = '{$img}' width = '150'>";
    echo '<br>';
}


echo 'Conexión ok';

$conn->close();

?>