<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $a=mb_str_split('Płyta głowna ATX');
    echo "<h3>";
    foreach($a as $tekst){
        
        if($tekst=="A" or $tekst=="a"){
            echo "<font color='magenta'>";
            echo $tekst;
            echo "</font>";
        }
        else{

        echo $tekst;

    }
    }
    echo "</h3>";
    ?>
   
</body>
</html>