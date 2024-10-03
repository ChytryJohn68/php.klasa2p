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

        }
        th,td{
        border:1px, dotted, black;
        
        }
        th{
            background-color: burlywood;
            padding: 5px;
        }
        td{
            background-color: beige;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
    <?php
        for($i=0;$i<=10;$i++){
            echo "<th>".$i."<th>";
            
        for($j=1;$j<=10;$j++){
                echo $j."<th>";
                
        }
        
        for($i=1;$i<=10;$i++){
            echo "<tr><th>$i</th>";
            echo "<td>".($i*$i)."<td>";
            echo "<tr><td>".($i*$i)."<td>";
        }
        
   
    }
    
    ?>
    </table>
</body>
</html>