<?php

$l1 = explode(" ", readline());
$a = $l1[0];
$b = $l1[1];
$c = $l1[2];

$tri = number_format($a*$c/2, 3, '.', '');
$cir = number_format(3.14159*$c**2, 3, '.', '');
$tra = number_format(($a+$b)*$c/2, 3, '.', '');
$qua = number_format($b**2, 3, '.', '');
$ret = number_format($a*$b, 3, '.', '');

echo "TRIANGULO: $tri\nCIRCULO: $cir\nTRAPEZIO: $tra\nQUADRADO: $qua\nRETANGULO: $ret\n";

?>