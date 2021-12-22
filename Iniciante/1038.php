<?php

$L1 = explode(" ", readline());
$c = $L1[0];
$q = $L1[1];

if($c==1){
    $v = number_format($q * 4.00, 2, '.', '');
    echo "Total: R$ $v\n";
}elseif($c==2){
    $v = number_format($q * 4.50, 2, '.', '');
    echo "Total: R$ $v\n";
}elseif($c==3){
    $v = number_format($q * 5.00, 2, '.', '');
    echo "Total: R$ $v\n";
}elseif($c==4){
    $v = number_format($q * 2.00, 2, '.', '');
    echo "Total: R$ $v\n";
}elseif($c==5){
    $v = number_format($q * 1.50, 2, '.', '');
    echo "Total: R$ $v\n";
}

?>