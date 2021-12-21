<?php

$L1 = explode(" ", readline());

$a = $L1[0];
$b = $L1[1];
$c = $L1[2];
$d = $L1[3];

if($b > $c && $d > $a && $c + $d > $a + $b && $c >= 0 && $d >= 0 && $a % 2 == 0){
    echo "Valores aceitos\n";
}else{
    echo "Valores nao aceitos\n";
}

?>