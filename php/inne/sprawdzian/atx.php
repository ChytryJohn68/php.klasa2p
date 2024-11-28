<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h3>
    <?php
    $a=mb_str_split('Płyta głowna ATX');
    foreach($a as $tekst){
        if($tekst=="A" or $tekst=="a"){
            echo '<h3 style="color: magenta;">';
            echo $tekst;
            
        }
        else{
        echo "<h3>";
        echo $tekst;
        
    }
    }
    
    ?>
    </h3>
</body>
</html>