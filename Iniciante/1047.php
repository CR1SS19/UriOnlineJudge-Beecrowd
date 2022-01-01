<?php

$L1 = explode(" ", readline());
$hi = $L1[0];
$mi = $L1[1];
$hf = $L1[2];
$mf = $L1[3];

$duracao = (($hf*60)+$mf)-(($hi*60)+$mi);

    if($duracao <= 0){
        $duracao += 24*60;
    }

    echo "O JOGO DUROU ". intdiv($duracao,60) ." HORA(S) E ". $duracao%60 ." MINUTO(S)\n";

?>