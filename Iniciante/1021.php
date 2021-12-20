<?php

$n = readline();

echo "NOTAS:\n";
echo intdiv($n,100) . " nota(s) de R$ 100.00\n";
$x = $n%100;
echo intdiv($x,50) . " nota(s) de R$ 50.00\n";
$x = $x%50;
echo intdiv($x,20) . " nota(s) de R$ 20.00\n";
$x = $x%20;
echo intdiv($x,10) . " nota(s) de R$ 10.00\n";
$x = $x%10;
echo intdiv($x,5) . " nota(s) de R$ 5.00\n";
$x = $x%5;
echo intdiv($x,2) . " nota(s) de R$ 2.00\n";
$x = $x%2;

$m = $n*100;

echo "MOEDAS:\n";
echo intdiv($x,1) . " moeda(s) de R$ 1.00\n";
$y = $m%100;
echo intdiv($y,50) . " moeda(s) de R$ 0.50\n";
$y = $y%50;
echo intdiv($y,25) . " moeda(s) de R$ 0.25\n";
$y = $y%25;
echo intdiv($y,10) . " moeda(s) de R$ 0.10\n";
$y = $y%10;
echo intdiv($y,5) . " moeda(s) de R$ 0.05\n";
$y = $y%5;
echo "$y moeda(s) de R$ 0.01\n";

?>