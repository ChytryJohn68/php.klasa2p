<?php
class dzielenie{
    public $liczbaA;
    public $liczbaB;

    public function sumadziel(){
        if((is_numeric($this->liczbaA))&&(is_numeric($this->liczbaB))){
            return $this->liczbaA / $this->liczbaB;
        }
        return null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klasy Dzielenie</title>
</head>
<body>
    <h1>Dzielenie</h1>
    <?php
    $DodawanieObj = new dzielenie();
    $DodawanieObj->liczbaA = 24;
    $DodawanieObj->liczbaB = 7;
    ?>
    <p>Wynik dzielenia liczb <?=$DodawanieObj->liczbaA?> i <?=$DodawanieObj->liczbaB?> jest równy <?=$DodawanieObj->sumadziel()?></p>
</body>
</html>