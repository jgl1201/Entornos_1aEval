<?php

//Tengo en un array almacenadas mis 3 notas
$notas = array(10,4);
array_push($notas, 6);

//Muestra la nota media final del curso
$suma = 0;  // Existe una funcion array_sum que suma los valores de un array
foreach($notas as $indice=>&$valor) {
    $suma += $valor;
}
echo "La suma es ".$suma;
echo "<br>";
$media = $suma / count($notas);
echo "La media es ".$media;

?>