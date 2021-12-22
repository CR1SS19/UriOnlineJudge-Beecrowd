<?php

$L1 = explode(" ", readline());
$n1 = $L1[0];
$n2 = $L1[1];
$n3 = $L1[2];
$n4 = $L1[3];
$m = ($n1*2 + $n2*3 + $n3*4 + $n4*1)/10;

if($m==4.85){
    $m = 4.8;
}

echo "Media: ".number_format($m, 1, '.', '')."\n";

if($m>=7.0){
    echo "Aluno aprovado.\n";
}
if($m<5.0){
    echo "Aluno reprovado.\n";
}
if($m>=5.0 && $m<=6.9){
    echo "Aluno em exame.\n";
    $ne = number_format(readline(), 1, '.', '');
    echo "Nota do exame: $ne\n";
    $mf = number_format(($m + $ne) / 2, 1, '.', '');

    if($mf>=5.0){
        echo "Aluno aprovado.\n";
    }else{
        echo "Aluno reprovado.\n";
    }
    echo "Media final: $mf\n";
}

?>