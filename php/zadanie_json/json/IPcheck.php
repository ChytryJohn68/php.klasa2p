
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<p>sprawdz przyblizona lokalizacje adresu IP v. 4</p>
<form method="post">
            <a>http://ip-api.com/json/</a> <input  type="text" id="ip" name="ip" placeholder="wprowadz ip">
            <label for="pas"></label>
            <input  type="submit" id="sub" name="submi" value="Sprawdź IP" >
            <label for="sub"></label>
</form>
<?php
file_get_contents("http://ip-api.com/json/" , $_POST["ip"])
?>
    


</body>
</html>