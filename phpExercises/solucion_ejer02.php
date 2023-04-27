<?php

/**
 * Crea un programa que php que posea una función que permita
 * sumar 3 numeros
 * Usa la función para mostrar por pantalla la suma de 4, 6 y -2
 */

function add($num1, $num2, $num3) {
    return $num1 + $num2 + $num3 ;
}

$result = add(4,6,-2);
echo 'Resultado: '.$result;

?>