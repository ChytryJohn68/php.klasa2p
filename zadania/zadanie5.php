<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table{
        border:1px, solid, black;
        text-align: center;
        border-collapse: collapse;
        font-family: Verdana;
        font-size: large;
        }
        th,td{
        border:1px, dashed, black;
        padding: 5px;
        }
        th{
            background-color: burlywood;
        }
        td{
            background-color: beige;
        }
    </style>
</head>
<body>
    <table>
        <caption>Tabliczka mnożenia</caption>
    <?php
        echo "<th>x</th>";
        for($i=1;$i<=10;$i++){
            echo "<th>".$i."</th>";
        }
        
        for($j=1;$j<=10;$j++){
            echo "<tr>";
            echo "<th>".$j;
            for($h=1;$h<=10;$h++){
                if($h==$j){
                    echo '<td style="background-color:bisque;">';
                    echo $h*$j;
                    echo "</td>";
                }
                else{
                echo "<td>";
                echo $h*$j;
                echo "</td>";
            }
            }      
        }
        echo "</th>";
        echo "</tr>";

        
    ?>
    </table>
</body>
</html>