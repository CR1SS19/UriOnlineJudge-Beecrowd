<?php

$L1 = explode(" ", readline());

$a = $L1[0];
$b = $L1[1];
$c = $L1[2];

$delta = $b**2 -4*$a*$c;

if($delta<0 || $a==0){
    echo "Impossivel calcular\n";
}else{
    $x1 = (-$b + $delta**0.5)/(2*$a);
    $x2 = (-$b - $delta**0.5)/(2*$a);
    echo "R1 = ".number_format($x1, 5, '.', '')."\n";
    echo "R2 = ".number_format($x2, 5, '.', '')."\n";
}

?>