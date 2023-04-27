<?php
// Paso de parámetros por GET
// http://localhost/Ejemplo03.php?numero=8&nombre=Jorge
// estoy pasando dos parámetros
// numero = 8
// nombre = Jorge

$num = $_GET['numero'];
$name = $_GET["nombre"];

if ($num >= 0) {
    echo "El numero ".$num." es positivo";
} else {
    echo "El numero ".$num." es negativo";
}
?>