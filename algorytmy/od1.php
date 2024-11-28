<?php
function policz($n){
    if($n<1){
        return;
    }
    policz($n-1);
    echo $n . "\t";
}
policz(5);
?>