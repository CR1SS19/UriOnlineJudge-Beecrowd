<?php

$L1 = explode(" ", readline());
rsort($L1);

if($L1[0] >= $L1[1] + $L1[2]){
    printf("NAO FORMA TRIANGULO\n");

}elseif($L1[0]**2 == $L1[1]**2 + $L1[2]**2){
    printf("TRIANGULO RETANGULO\n");

}elseif($L1[0]**2 > $L1[1]**2 + $L1[2]**2){
    printf("TRIANGULO OBTUSANGULO\n");

}else{
    printf("TRIANGULO ACUTANGULO\n");

}
if($L1[0] == $L1[1] && $L1[1] == $L1[2]){
    printf("TRIANGULO EQUILATERO\n");

}elseif($L1[0] == $L1[1] || $L1[1] == $L1[2]){
    printf("TRIANGULO ISOSCELES\n");

}

?>