<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SITE</title>
</head>

<body>
    <p>
        <?php
        $suma = 0;
        for ($a = 10; $a <= 99; $a++) {
            if ($a % 2 == 0) {
                echo $a;
                $suma += $a;
                if ($a < 98) {
                    echo " | ";
                }
            }
        }
        ?>
    </p>

</body>

</html>