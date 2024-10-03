<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
td{
border:2px, solid black;
padding: 20px;
}
table{
border-collapse: collapse;
}
</style>
</head>
<body>
<?php
$i=0;
?>
<table>
<?php
$dni=array("pon","wto","śro","czw","pią","sob","nie");
foreach($dni as $dzien)
if($i%2==0){
echo'<td style="background-color: cyan;" > ';
echo $dzien;
echo "</td>";
$i++;
}else{
echo"<td>";
echo $dzien;
echo"</td>";
$i++;
}
?>
</table>

</body>
</html>