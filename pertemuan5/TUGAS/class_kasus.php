<?php

    class buah{
        protected $type;
        protected $flavor;
        protected $color;

        protected function __construct($type,$flavor,$color){
            $this->type = $type;
            $this->flavor = $flavor;
            $this->color = $color;
        }

        protected function getInfo(){
            echo 'Jenis Buah : ' . $this->type . '<br>' ;
            echo 'Rasa Buah : ' . $this->flavor . '<br>' ;
            echo 'Warna Buah : ' . $this->color . '<br>' ;
        }
    }
        class kedongdong extends buah{
            public function __construct($type,$flavor,$color){
                $this->type = $type;
                $this->flavor = $flavor;
                $this->color = $color;
            }
            public function getInfokedongdong(){
                parent::getInfo();
            }

        }
        class Kelengkeng extends buah{
            public function __construct($type,$flavor,$color){
                $this->type = $type;
                $this->flavor = $flavor;
                $this->color = $color;
            }
            public function getInfoKelengkeng(){
                parent::getInfo();
            }

        }
        class Jambu extends buah{
            public function __construct($type,$flavor,$color){
                $this->type = $type;
                $this->flavor = $flavor;
                $this->color = $color;
            }
            public function getInfoJambu(){
                parent::getInfo();
            }

        }
    

?>