<?php
/**
*Dado un texto $data que contiene una frase con 
*números separados por el caracter ':'
*Mostrar por pantalla la suma de todos esos numeros
* Pasos:
* - Convierte primero la cadena de texto a un array (usa la funcion explode https://www.php.net/manual/es/ref.strings.php)
* - Recorre el array y ve sumando sus distintos valores
* - Muestra por pantalla el resultado
*/

function stringToArray ($string) {
    return explode(":", $string);
}
function addArrayNumbers ($array) {
    $total = 0;
    for ($i = 1; $i <= count($array) - 1; $i++) {
        $total += $array[$i];
    }
    return $total;
}

$data='3:56:2.5:33';
$numbersArray = stringToArray($data);
$totalAdd = addArrayNumbers($numbersArray);
echo 'Total: '.$totalAdd;

?>