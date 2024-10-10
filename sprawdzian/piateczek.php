<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Document</title>
   <style>
        th{
        border:1px, solid rosybrown;
        padding: 10px;
        }
        table{
        border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
    $i=1;
    ?>
<table>
    <?php
        $dni=array("poniedziałek","wtorek","środa","czwartek","piątek","sobota","niedziela");
        foreach($dni as $dzien)
            if($i%5==0)
            {
                echo'<th style="background-color: sandybrown;" > ';
                echo $dzien;
                echo "<tr>";
                echo "</th>";
                echo "</tr>";
                $i++;
            }
            else
            {
                echo"<th>";
                
                echo $dzien;
                echo "<tr>";
                echo"</th>";
                echo "</tr>";
                $i++;
            }

    ?>
</table>
</body>
</html>