<?php

$l1 = explode(" ", readline());
$l2 = explode(" ", readline());

$a = $l1[0];
$b = $l1[1];
$c = $l1[2];

$d = $l2[0];
$e = $l2[1];
$f = $l2[2];

echo "VALOR A PAGAR: R$ " .  number_format(($b * $c) + ($e * $f), 2, '.', '') . "\n";

?>