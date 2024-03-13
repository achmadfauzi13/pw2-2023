<?php

    class lingkaran {

        private $jari; // property
        const PHI = 3.14; // konstanta
    
        function __construct($r){
            $this->jari = $r; 
        }
        function getluas(){
            return self::PHI * $this->jari * $this->jari;
        }
        function getkeliling(){
            return 2 * self::PHI * $this->jari;
        }
    }

?>