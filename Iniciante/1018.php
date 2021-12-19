<?php

$n = readline();

echo "$n\n";
echo intdiv($n,100) . " nota(s) de R$ 100,00\n";
$x = $n%100;
echo intdiv($x,50) . " nota(s) de R$ 50,00\n";
$x = $x%50;
echo intdiv($x,20) . " nota(s) de R$ 20,00\n";
$x = $x%20;
echo intdiv($x,10) . " nota(s) de R$ 10,00\n";
$x = $x%10;
echo intdiv($x,5) . " nota(s) de R$ 5,00\n";
$x = $x%5;
echo intdiv($x,2) . " nota(s) de R$ 2,00\n";
$x = $x%2;
echo intdiv($x,1) . " nota(s) de R$ 1,00\n";

?>