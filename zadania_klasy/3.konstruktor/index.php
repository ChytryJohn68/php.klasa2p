<?php
include_once 'Arytmetyka.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KONSTRUKTOR</title>
    <style>
        ul{
            font-size: 20px;
            background-color: cyan;
        }
    </style>
</head>
<body>
<?php
    $DodawanieObj = new arytmetyka(5,0);
    
    ?>

    <ul style="list-style-type: square;">
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
            Wynik reszty z dzielenia liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->reszta()?>
        </li>
        <li>
            Wynik Potegowania liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->poteg()?>
        </li>
    </ul> 
</body>
</html>