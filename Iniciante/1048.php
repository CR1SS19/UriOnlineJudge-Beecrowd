<?php

$s = readline();

if($s >= 0 && $s <= 400.00){
    $per = (15 * $s) / 100;
    echo "Novo salario: ".number_format($s+$per, 2, '.', '')."\nReajuste ganho: ".number_format($per, 2, '.', '')."\nEm percentual: 15 %\n";
}elseif($s >= 400.01 && $s <= 800.00){
    $per = (12 * $s) / 100;
    echo "Novo salario: ".number_format($s+$per, 2, '.', '')."\nReajuste ganho: ".number_format($per, 2, '.', '')."\nEm percentual: 12 %\n";
}elseif($s >= 800.01 && $s <= 1200.00){
    $per = (10 * $s) / 100;
    echo "Novo salario: ".number_format($s+$per, 2, '.', '')."\nReajuste ganho: ".number_format($per, 2, '.', '')."\nEm percentual: 10 %\n";
}elseif($s >= 1200.01 && $s <= 2000.00){
    $per = (7 * $s) / 100;
    echo "Novo salario: ".number_format($s+$per, 2, '.', '')."\nReajuste ganho: ".number_format($per, 2, '.', '')."\nEm percentual: 7 %\n";
}elseif($s > 2000.00){
    $per = (4 * $s) / 100;
    echo "Novo salario: ".number_format($s+$per, 2, '.', '')."\nReajuste ganho: ".number_format($per, 2, '.', '')."\nEm percentual: 4 %\n";
}

?>