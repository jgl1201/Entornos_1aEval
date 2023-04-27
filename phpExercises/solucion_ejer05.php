<?php

/*
    Crea un programa que admita por GET un parametro llamado valor
    http://localhost/ejer02.php?valor=4
    mostrarlo por pantalla
    convertirlo a positivo y mostrarlo por pantalla
*/

function toPositive($num) {
   /*  if ($num < 0) {
        return $num * -1;
    }
    return $num; */
    // return condicion?se cumple : no se cumple
    return $num<0 ? $num*-1 : $num;
}

$num = $_GET['valor'];
echo "El valor pasado por GET es ".$num;
$positiveNum = toPositive($num);
echo "<br>";
echo "El valor convertido a positivo es ".$positiveNum;

?>