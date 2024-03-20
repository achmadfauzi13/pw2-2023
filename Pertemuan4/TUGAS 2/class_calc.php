<?php
        /**
        * Task 1
        * Buatlah class Calculator 2 bilangan
        * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
        * Tampilkan masing-masing method dengan object
        */
        class Calculator{
            private $Bil1;
            private $Bil2;
        
        public function __construct($b1,$b2){
            $this ->Bil1 = $b1;
            $this ->Bil2 = $b2;
        }
        // method 
        public function pertambahan(){
            return $this -> Bil1 + $this -> Bil2;
        }
        public function pengurangan(){
            return $this -> Bil1 - $this -> Bil2;
        }
        public function pembagian(){
            return $this -> Bil1 / $this -> Bil2;
        }
        public function perkalian(){
            return $this -> Bil1 * $this -> Bil2;
        }
        }
    
     // Buat object dan tampilkan masing-masing method
        $kalkulator = new Calculator(5,5);

        echo '<br>';
        echo 'Hasil Pertambahan : ' . $kalkulator->pertambahan(). '<br>';
        echo '<br>';
        echo 'Hasil Pengurangan : ' . $kalkulator->pengurangan(). '<br>';
        echo '<br>';
        echo 'Hasil Pembagian : ' . $kalkulator->pembagian(). '<br>';
        echo '<br>';
        echo 'Hasil Perkalian : ' . $kalkulator->perkalian(). '<br>';
        echo '<br>';

?>