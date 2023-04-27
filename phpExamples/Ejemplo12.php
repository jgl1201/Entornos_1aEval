<?php

/* $fruta1 = 'fresa';
$fruta2 = 'pera';
$fruta3 = 'manzana'; */

$frutas = array('fresa', 'pera', 'manzana');
print_r($frutas);
echo "<br>";
echo "En la posición 2 del array hay ".$frutas[1];
echo "<br>";
foreach ($frutas as $indice => &$valor) { // posiciones
    echo " ".$indice;
}
echo "<br>";
foreach ($frutas as $indice => &$valor) { // valores
    echo " ".$valor;
}
echo "<br>";
foreach ($frutas as $indice => &$valor) { // valores 2.0
    echo " ".$frutas[$indice];
}
echo "<br>";
for($i = 0; $i < count($frutas); $i++) {
    echo " ".$frutas[$i];
}

?>