<?php
    class arytmetyka{
        private ?float $liczbaR=NULL;

        public function __construct($r){
            $this->liczbaR=$r;
        }

        public function obwod(){
            if((is_numeric($this->liczbaR))){
                $ob=2*3.14*$this->liczbaR;
                return number_format($ob,2,","," ");
            }
            return null;
        }
        public function pole(){
            if((is_numeric($this->liczbaR))){
               $p=4*3.14*$this->liczbaR*$this->liczbaR;
                return number_format($p,2,","," ");
            }
            return null;
        }
        public function objetosc(){
            if((is_numeric($this->liczbaR))){
                $o=(4*3.14*$this->liczbaR*$this->liczbaR*$this->liczbaR)/3;
                return number_format($o,2,","," ");
            }
            return null;
        }
    }
?>