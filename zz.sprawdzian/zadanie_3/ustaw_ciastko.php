<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["Ustaw"]) ) {
    $nazwa_ciastka = $_POST['nazwa'];
    $zawartosc = $_POST['zawartosc'];
    $_SESSION["zawartosc"] = $zawartosc;
    $czas_ciastka = $_POST['czas'];

    setcookie($nazwa, $zawartosc, time() + $czas);
    header($_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Roczniki</title>
  

</head>

<body>

        <form method="post">
            <label for="nazwa">Nazwa :</label>
            <br>
            <input type="text" name="nazwa" id="nazwa" value="favourite_movie" required>
            <br>

            <label for="zawartosc">Zawartość:</label><br>
            <textarea name="zawartosc" id="zawartosc" cols="40" rows="3" required><?= isset($_SESSION['zawartosc']) ? $_SESSION['zawartosc'] : "" ?></textarea>
            <br>

            <label for="czas">Wygasa: </label><br>
            <input type="number" name="czas" id="czas" value="<?= isset($czas) ? $czas : 60 ?>" >
            <br>
            <input type="submit" name="Ustaw" value="Ustaw">
            <br>

            
        </form>

</body>

</html>