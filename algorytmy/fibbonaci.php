<?php
function fibonacci($n, $F0=0,$F1=1) {
    if($n<=0){
        return;
    }
    echo $F0 . "\n";

    fibonacci($n-1,$F1,$F0+$F1);

}
fibonacci(20);
?>