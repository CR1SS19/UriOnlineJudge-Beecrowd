<?php

$l1 = explode(" ", readline());
$l2 = explode(" ", readline());

$a = intval($l1[0]);
$b = intval($l1[1]);
$c = doubleval($l1[2]);

$d = intval($l2[0]);
$e = intval($l2[1]);
$f = doubleval($l2[2]);

echo "VALOR A PAGAR: R$ " .  number_format(($b * $c) + ($e * $f), 2, '.', '') . "\n";

?>