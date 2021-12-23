<?php

$L = explode(" ", readline());
$a = $L[0];
$b = $L[1];
$c = $L[2];

if($a+$b > $c && $b+$c > $a && $c+$a > $b){
    echo "Perimetro = ".number_format($a+$b+$c, 1, '.', '')."\n";
}else{
    echo "Area = ".number_format((($a+$b)*$c)/2, 1, '.', '')."\n";
}

?>