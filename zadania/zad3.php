<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1 {
            border: 2px solid black ;
            color: brown;
        }
        h2 {
            border: 2px dotted navy ;
            padding: 10px; 
            color: indigo;
        }
    </style>
</head>
<body>
    <?php $wiek=rand(0,100);?>
    <h1>
        Mam <?= $wiek ?>
    </h1>
    <h2>
        <?php
            if($wiek<18){
                echo "Jeszcze nie możesz glosować.";
            }
            elseif($wiek<21 && $wiek>=18){
                echo "Możesz tylko glosować.";
            }
            elseif($wiek<30 && $wiek>=21){
                echo "Możesz glosować i kandydować do Sejmu.";
            }
            elseif($wiek<35 && $wiek>=30){
                echo "Możesz glosować i kandydować do Sejmu i Senatu.";
            }
            elseif($wiek>=35){
                echo "Możesz glosować i kandydować do Sejmu i Senatu, oraz na prezydenta.";
            }
        ?>
    </h2>
</body>
</html>