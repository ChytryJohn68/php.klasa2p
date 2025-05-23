
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="format.css">
    <title>Document</title>
</head>
<body>
<?php

// Check connection
include 'connect.php';
?>
  <div class="column" >
           
   <a href="index.php">Strona główna</a>
   <a href="index.php?page=czytelnicy">Tabela czytelnicy</a>
   <a href="index.php?page=działy">Tabela działy</a>
   <a href="index.php?page=książki">Tabela książki</a>
   <a href="index.php?page=pracownicy">Tabela pracownicy</a>
   <a href="index.php?page=stanowiska">Tabela stanowiska</a>
   <a href="index.php?page=wypożyczenia">Tabela wypożyczenia</a>
  </div>
  <div class="column2" >
   
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