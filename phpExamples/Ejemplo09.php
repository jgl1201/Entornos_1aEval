<?php

function areaTriangulo($base, $altura = 1) {
    return $base * $altura / 2;
}

$resultado = areaTriangulo(2 , 3);
echo "El area del triangulo de 2 y 3 es ".$resultado;
echo "<br>";
$resultado = areaTriangulo(5); // no se le pasa la altura y coge la que está por defecto
echo "El area del triangulo de 2 y por defecto es ".$resultado;

?>