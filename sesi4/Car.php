<?php

class Car{
    //Constructor
    public function __construct(){
        echo "ini konstruktor\n";
        echo "<br>";
    }
    //Atribut
    public $color = "Red";
    public $max_speed = 300;

    // Method
    public function jalan(){
        echo "Mobil berjalan....\n";
    }

}

$avanza = new Car;
$avanza->jalan();

