<?php
echo "<br>";
function fibo($n , $f0=0, $f1=1){
    if($n<=0){
        return;
    }
    echo $f0 . "\n";
    fibo($n-1,$f1,$f0+$f1);
}
fibo(20);
?>
<?php
echo "<br>";
function silnia($n){
    if($n==0){
        return 1;
    }
    return $n*silnia($n-1);
}
echo silnia(5);

?>
<?php
echo "<br>";
function nwd($a,$b){
    if($b==0){
        return $a;
    }
    return nwd($b,$a%$b);
}
echo nwd(12,24);

?>
<?php
echo "<br>";
function od1($n){
    if($n<1){
        return;
    }
    od1($n-1);
    echo $n . "\t";
}
od1(5);

?>
<?php
echo "<br>";
function fib($n,$f0=0,$f1=1){
    if($n<=0){
        return;
    }
    echo $f0 . "'\n";
    return fibo($n-1,$f1,$f0+$f1);
}
fibo(5);

?>

<?php
echo "<br>";
function suma($n){
    if($n==0){
        return;
    }
    return $n+suma($n-1);
}
echo suma(230);
echo "<br>";
$suma = 0;
for($i=0;$i<=230;$i++){
    $suma=$suma+$i;
}
echo $suma;