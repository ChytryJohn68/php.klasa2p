<?php
    class arytmetyka{
        public ?float $liczbaA=NULL;
        public ?float $liczbaB=NULL;

        public function __construct($a,$b){
            $this->liczbaA=$a;
            $this->liczbaB=$b;
        }

        public function suma(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                return $this->liczbaA + $this->liczbaB;
            }
            return null;
        }
        public function roznica(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                return $this->liczbaA - $this->liczbaB;
            }
            return null;
        }
        public function iloczyn(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                return $this->liczbaA * $this->liczbaB;
            }
            return null;
        }
        public function iloraz(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                if($this->liczbaB != 0){
                    return $this->liczbaA / $this->liczbaB;
                }
                return "BŁĄD";
            }
            return null;
        }
        public function reszta(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                if($this->liczbaB != 0){
                    return (fmod($this->liczbaA, $this->liczbaB));
                }
                return "BŁĄD";
            }
            return null;
        }
        public function poteg(){
            if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                return (pow($this->liczbaA, $this->liczbaB));
            }
            return null;
        }
    }

?>