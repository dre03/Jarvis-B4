<?php 

class Motor{
    public $merek;
    public $tipe;
    public $warna;
    public $roda;
    public $bensin;

    public function __construct($merek,$tipe,$warna,$roda,$bensin){
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->warna =$warna;
        $this->roda = $roda;
        $this->bensin = $bensin;

    }

    public function jalan($jarak){
        $this->bensin = $this->bensin - ($jarak / 10);
        echo "Jarak Yang Anda Tempuh saat ini adalah " . $jarak / 1000 . " Km <br>";
        echo "Maka Sisa Bensin Anda adalah " . $this->bensin / 1000 . " Liter \n";
    }


}

$motor = new Motor("Beat","CBS-ISS Series", "Silver", 2 , 3000);
echo "Bensin anda " . $motor->bensin / 1000 . " Liter" . "<br>";
$motor->jalan(10000);

