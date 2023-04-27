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
echo 'Conexión ok';

$conn->close();

?>