<?php

/*
Guarda en 4 variables, 4 valores numericos.
Muestra por pantalla el valor de los 2 últimos.
*/

$values = array('7', '12', '58', '9');
echo 'Ultimo: '.$values[count($values) - 1];
echo "<br>";
echo 'Penultimo: '.$values[count($values)-2];

?>