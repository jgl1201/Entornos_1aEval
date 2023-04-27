<?php

class Person {
    // ATRIBUTOS
    public $name;
    public $surname;
    public $age = 18;
    private $height;
    private $direction;
    public static $max_age = 122; // si creo 60 brothas tengo 60 nombres pero un solo max_age

    // CONSTRUCTOR
    function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }

    // MÉTODOS
    public function getFullName() {
        return $this->name.' '.$this->surname;
    }
    public function isAdult() {
        if ($this->age >= 18) return "si";
        else return "no";
    }
}

$brotha = new Person('Alberto', 'El del culo Abierto');
//$brotha->name = 'Alberto';
//$brotha->surname = 'O do cu Aberto';
$brotha->age = 23;
echo $brotha->getFullName();
echo "<br>";
echo 'Esta persona '.$brotha->isAdult().' es adulta';
echo "<br>";
echo 'Lo máximo que puede vivir esta persona es '.Person::$max_age;

?>