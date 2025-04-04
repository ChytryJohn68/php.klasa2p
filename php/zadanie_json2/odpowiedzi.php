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
    <div class="tekst">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['answer'])) {
        ?>
        
            <p>Poziom: <?= $_SESSION['difficulty'] ?></p>
            <p>Kategoria: <?= $_SESSION['category'] ?></p>
            <p>Pytanie: <?= $_SESSION['question'] ?></p>
            <p>Wybrałeś: <?= $_POST['answer'] ?></p>
            <p>
                <?php

                if ($_POST['answer'] == $_SESSION['correct_answer']) {

                    ?>
                    <p class='good'>Dobra odpowiedź!</p>
                    <div class="check">
                    <a class="wid"  href='pytania.php'>Kolejne</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <p class='bad'>ŹLE</p>
                    <p >Poprawna odpowiedź to: </p>
                    <p class="good"><?= $_SESSION['correct_answer'] ?></p>
                    <div class="check">
                    <a class="wid"  href='pytania.php'>Kolejne</a>
                    </div>
                    <?php
                }
                ?>
            </p>
        
        <?php
    }
    ?>
</div>
</body>

</html>
