<?php

    class Car {
        //di dalam (class) mempunyai 3 hak akses : public, private, protected
        public $brand;
        public $color;

        //Method
        function getBrand(){
            return $this->brand;
        }
        function getColor(){
            return $this->color;
        }
    }
        //ini adalah Objek 
        $tesla = new Car(); 
        $mazda = new Car();

        // set value / setter
        $tesla->brand = "Tesla";
        $mazda->brand = "Mazda";
        $tesla->color = ": Merah";
        $mazda->color = ": Hijau";
        
        // echo 
        echo $tesla->getBrand();
        echo $tesla->getcolor();
        echo"<br>";
        echo $mazda->getBrand();
        echo $mazda->getcolor();
        echo"<br>";


?>