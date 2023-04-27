<?php

/* Crea una funcion a la que se le pase
una lista de numeros (array) y un numero
y nos diga si ese numero esta dentro del array
*/

function isOnTheList($list, $value) {
    for ($i = 0; $i <= count($list); $i++) {
        if ($list[$i] == $value) return true;
    }
    return false;
}

$myList = array (1,4,6,9);
$value = 4;
$res = isOnTheList($myList, $value);

if ($res) echo $value.' está en la lista';
else echo $value.' no está en la lista';

?>