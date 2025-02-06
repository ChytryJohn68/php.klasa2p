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
  <fieldset border-width="2px">
    <legend>Roczniki</legend>
    <?php
    $rok = 2010;
    for ($i = 0; $i <= 15; $i++) {
    ?>
            <input type="radio" id="a<?=$rok?>" name="rocznik">
            <label for="a<?=$rok?>"><?=$rok?></label>
      <br>
    <?php
      $rok++;
    }
    ?>
  </fieldset>
</body>

</html>