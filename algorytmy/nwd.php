<?php
function nwd($a, $b){
    if($b==0){
        return $a;
    }
    return nwd($b, $a%$b);
}
echo nwd(12,24);
?>