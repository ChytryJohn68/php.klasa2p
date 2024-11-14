<?php
include_once 'zadanie7.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <?php
        $r=rand(0,99);
        $DodawanieObj = new arytmetyka($r);
    ?>
<table>
    <tr>
        <th colspan="3">Promień kuli: r=<?=$r?></th>
    </tr>
    <tr>
        <td>Obwód</td>
        <td>Pole powierzchni</td>
        <td>Objętość</td>
    </tr>
    <tr>
        <td><i>L=2πr</i></td>
        <td><i>P=4πr²</i></td>
        <td><i>V=⅓∙4πr³</i></td>
    </tr>
    <tr>
        <td><?=$DodawanieObj->obwod()?></td>
        <td><?=$DodawanieObj->pole()?></td>
        <td><?=$DodawanieObj->objetosc()?></td>
    </tr>
</table>
</body>
</html>