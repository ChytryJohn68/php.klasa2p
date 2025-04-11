<?php
$servername = "localhost";
$username = "chalupka";
$password = "monitor123";
$db = "chalupka";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "SELECT Tytul, Imie, Nazwisko FROM ksiazki";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <p>Książka <i>"<?= $row["Tytul"] ?>"</i> została napisana przez <b><?= $row["Imie"] ?>         <?= $row["Nazwisko"] ?>.</b>
            </p>
            <?php
        }
        
    } else {
        echo "Brak rekordów";
    }
    
    mysqli_close($conn);

    ?>

</body>

</html>