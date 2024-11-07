<?php
        class arytmetyka{
            public ?float $liczbaA=NULL;
            public ?float $liczbaB=NULL;

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
                    return " ERROR nie mozna dzielic przez zero";
                }
                return null;
            }
            public function reszta(){
                if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
                    if($this->liczbaB != 0){
                        return (fmod($this->liczbaA, $this->liczbaB));
                    }
                    return " ERROR nie mozna dzielic przez zero";
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
<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $DodawanieObj = new arytmetyka();
    $DodawanieObj->liczbaA = 3;
    $DodawanieObj->liczbaB = 0;
    ?>

    <ul>
        <li>
            Wynik Dodawania liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->suma()?>
        </li>
        <li>
            Wynik Odejmowania liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->roznica()?>
        </li>
        <li>
            Wynik Mnozenia liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->iloczyn()?>
        </li>
        <li>
            Wynik Dzielenia liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->iloraz()?>
        </li>
        <li>
            Wynik dzielenia reszty liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->reszta()?>
        </li>
        <li>
            Wynik Potegowania liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->poteg()?>
        </li>
    </ul> 
</body>
</html>