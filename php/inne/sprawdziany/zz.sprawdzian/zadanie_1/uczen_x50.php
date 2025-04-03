<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Zadanie 1</title>
<style>
table{
    border: 1px solid;
    border-color: lightgray;
    border-collapse: collapse;
    
 }
 td{
    border: 1px solid;
    padding:  7px;
 }
</style>

</head>

<body>
    <h2>Oceny</h2>
  <form>
    <table>
            
            <?php
            $uczen = 1;
            for ($i = 0; $i <= 49; $i++) {
            ?>
                    <tr>
                    <td><label for="a<?=$uczen?>">Uczen <?=$uczen?>:</label></td>
                    <td><input type="text" id="a<?=$uczen?>" name="Ocena"></td>
                    </tr>
            
            <?php
            $uczen++;
            }
            ?>
        <td colspan="2" align="center"><input type="submit"  name="Submit" value="Zapisz"></td>
    </table>
  </form>
</body>

</html>


