<?php

    class Calculator{
        private $Bil1;
        private $Bil2;
    
    public function __construct($b1,$b2){
        $this ->Bil1 = $b1;
        $this ->Bil2 = $b2;
    }
    public function tambah(){
        return $this -> Bil1 + $this -> Bil2;
    }
    public function kurang(){
        return $this -> Bil1 - $this -> Bil2;
    }
    public function bagi(){
        return $this -> Bil1 / $this -> Bil2;
    }
    public function kali(){
        return $this -> Bil1 * $this -> Bil2;
    }
    }

        $kalkulator1 = new Calculator(2,2);
        $kalkulator2 = new Calculator(200,141);
        $kalkulator3 = new Calculator(100,2);
        $kalkulator4 = new Calculator(32,4);

        echo 'Hasil Pertambahan : ' . $kalkulator1->tambah(). '<br>';
        echo 'Hasil Pengurangan : ' . $kalkulator2->kurang(). '<br>';
        echo 'Hasil Pembagian : ' . $kalkulator3->bagi(). '<br>';
        echo 'Hasil Perkalian : ' . $kalkulator4->kali(). '<br>';

?>