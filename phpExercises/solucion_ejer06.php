<?php

/**
 * Guarda en un array 5 valores numéricos
 * Muestra por pantalla el primer y último valor almacenado en el array
 * 
 *  https://www.php.net/manual/en/function.array.php
 *  https://www.php.net/manual/en/ref.array.php
 */
// Crear funciones puras --> 
// - No cambian mada del exterior
// - Dada una entrada siempre da el mismo resultado
// - Su nombre no miente
// - Solo hace una cosa

 function getFirstElement($array) {
    return $array[0];
 }
 function getLastElement($array) {
    return $array[count($array)-1];
 }

 $numbers = array (9, -2, 1, 5, 3.6);
 echo getFirstElement($numbers);
 echo "<br>";
 echo getLastElement($numbers);

?>