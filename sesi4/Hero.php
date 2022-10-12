<?php
// paradigma prosedural
$hero1_nama = "Alucard";
$hero1_hp = 4000;
$hero1_defanse = 120;
$hero1_demage = 300;
$hero1_mana = 0;

$hero2_nama = "AAkailucard";
$hero2_hp = 4100;
$hero2_defanse = 300;
$hero2_demage = 50;
$hero2_mana = 0;

// paradigma oop
Class Hero{
    // Atribut
    public $nama;
    public $hp;
    public $defanse;
    public $damage;
    public $mana;

    // method 
    // konstruktor
    public function __construct($nama,$hp,$defanse,$damage,$mana){
        $this->nama = $nama;
        $this->hp = $hp;
        $this->defanse =$defanse;
        $this->damage = $damage;
        $this->mana = $mana;
    }

    public function attack($target){
        $target->hp = $target->hp - ($this->damage - $target->defanse);
        echo "$this->nama menyerang $target->nama <br>";

        echo "Hp $target->nama saat ini adalah $target->hp \n";
    }

}

$hero1 = new Hero("Alucard",4000,120,400,0);
$hero2 = new Hero("Akai",4100,200,50,0);

// memanggil method
$hero1->attack($hero2);
