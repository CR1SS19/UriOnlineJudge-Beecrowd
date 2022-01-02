<?php

$s = readline();

if($s <= 2000.00){
    echo "Isento\n";
}elseif($s >= 2000.01 && $s <= 3000.00){
    $ir = ($s - 2000.00) * 0.08;
    echo "R$ ".number_format($ir, 2, '.', '')."\n";
}elseif($s >= 3000.01 && $s <= 4500.00){
    $ir = (($s - 3000.00) * 0.18) + 80.00;
    echo "R$ ".number_format($ir, 2, '.', '')."\n";
}elseif($s > 4500.00){
    $ir = (($s - 4500.00) * 0.28) + 350.00;
    echo "R$ ".number_format($ir, 2, '.', '')."\n";
}

?>