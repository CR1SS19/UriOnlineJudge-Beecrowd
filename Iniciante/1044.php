<?php

$L = explode(" ", readline());
$a = $L[0];
$b = $L[1];

if($a%$b==0 || $b%$a==0){
    echo "Sao Multiplos\n";
}else{
    echo "Nao sao Multiplos\n";
}

?>