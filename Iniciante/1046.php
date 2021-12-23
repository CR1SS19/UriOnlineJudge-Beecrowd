<?php

$L = explode(" ", readline());
$i = $L[0];
$f = $L[1];

if($i==$f){
    echo "O JOGO DUROU 24 HORA(S)\n";
}elseif($i>$f){
    echo "O JOGO DUROU ".(24-$i+$f)." HORA(S)\n";
}else{
    echo "O JOGO DUROU ".($f-$i)." HORA(S)\n";
}

?>