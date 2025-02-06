<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roczniki</title>
  <link rel="icon" href="https://pl.freepik.com/ikona/szklarnia_5563175#fromView=family&page=1&position=1&uuid=1c025c4c-9ffd-4c94-9433-fa8dc5890a68" type="image/x-icon">

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