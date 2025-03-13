<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roczniki</title>
  <link rel="icon" href="fa fa-thermometer-empty" type="image/x-icon">

</head>

<body>
    <h2 id="Ciastko" class="ciastko">
        <?php 
        if(isset($_SESSION["zawartosc"])) {
             ?>Twój ulubiony film to <?php 
             echo $_SESSION["zawartosc"];
        }else{
            ?>Twój ulubiony film to <?php 
            
        }
        
        ?>
    </h2>
    <a  href="ustaw_ciastko.php">USTAW CIASTKO</a>
</body>

</html>