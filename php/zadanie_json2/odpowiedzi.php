<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>SITE</title>
</head>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['anser'])){
    ?>
    <div class="tekst">
    <p>Poziom: <?= $_SESSION['difficulty']?></p>
    <p>Kategoria: <?= $_SESSION['category']?></p>
    <p>Pytanie: <?= $_SESSION['question']?></p>
    <p>Wybrałeś: <?= $_POST['anser']?></p>
    <p>
        <?php
        if($_POST['anser']==$_SESSION['correct_answer']){
            echo "<p class='good'>Dobra</p>";
            echo "<a href='pytania.php'>Kolejne</a>";
        }
        else{
            echo "<p class='bad'>źle</p>";
            echo "<a href='pytania.php'>Kolejne</a>";
        }
        ?>
    </p>
    </div>
    <?php
}
?>

</body>
</html>