<?php

// Check connection
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="format.css">
    <title>Document</title>
</head>
<body>
    
  <div class="column" >
   
        <a href="index.php">Strona główna</a>
        <a href="index.php?PAGE=czytelnicy">Tabela czytelnicy</a>
        <a href="index.php?PAGE=działy">Tabela działy</a>
        <a href="index.php?PAGE=książki">Tabela książki</a>
        <a href="index.php?PAGE=pracownicy">Tabela pracownicy</a>
        <a href="index.php?PAGE=stanowiska">Tabela stanowiska</a>
        <a href="index.php?PAGE=wypożyczenia">Tabela wypożyczenia</a>
  </div>
  <div class="column2" >
    <h1>Strona główna</h1>
    <?php
        if (isset($_GET['page'])) {
            if (file_exists('pages/' . $_GET['page'] . '.php')) {
                include 'pages/' . $_GET['page'] . '.php';
            } else {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
        } else {
            include 'pages/glowna.php';
        }
    ?>
  </div>

</body>
</html>
<?php
//include "disconnect.php";
?>