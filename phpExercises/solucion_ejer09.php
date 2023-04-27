<?php
/**
 * Crea una clase que permita almacenar los datos de un animal
 * En concreto tendremos que guardar:
 * - Nombre (texto)
 * - Edad (numérico)
 * - Si es salvaje (booleano)
 * - peso(numéro)
 * La clase tendrá un método que determine si el animal es peligroso
 * - Será peligroso cuando su peso supere los 10 kilos y sea salvaje
 * Añade un constructor a la clase
 * 
 * Por último, crea un objeto de tipo Animal
 * - Muestra por pantalla sus datos
 */

 class Animal {
    // ATRIBUTOS
    public $name;
    public $age;
    public $isWild;
    public $weight;

    // CONSTRUCTOR
    function __construc($name, $age) {
        $this->name = $name;
        $this->age = $age;
        $this->isWild = false;
        $this->weight = 10;
    }

    // METODOS
    public function isDangerous() {
        if ($this->weight > 10 && $this->isWild == true) {
            return true;
        } else {
            return false;
        }
    }
 }

$oso = new Animal('Yogui', 26);
$oso->weigth = 180;

if($oso->isDangerous()) { echo "El oso es peligroso"; }
else{echo "El oso no es peligroso";}
echo "<br/>";
echo "El oso "
    .($oso->isDangerous()?"es peligroso":"no es peligroso");

?>