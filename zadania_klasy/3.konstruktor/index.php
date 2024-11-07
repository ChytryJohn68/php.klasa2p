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
            Wynik Dodawania liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->suma()?></strong>
        </li>
        <li>
            Wynik Odejmowania liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->roznica()?></strong>
        </li>
        <li>
            Wynik Mnozenia liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->iloczyn()?></strong>
        </li>
        <li>
            Wynik Dzielenia liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->iloraz()?></strong>
        </li>
        <li>
            Wynik reszty z dzielenia liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->reszta()?></strong>
        </li>
        <li>
            Wynik Potegowania liczb <strong><?=$DodawanieObj->liczbaA?></strong> i <strong><?=$DodawanieObj->liczbaB?></strong> jest równy <strong><?=$DodawanieObj->poteg()?></strong>
        </li>
    </ul> 
</body>
</html>