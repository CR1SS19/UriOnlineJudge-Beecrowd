<?php

$L1 = explode(" ", readline());
$L2 = explode(" ", readline());

$X1 = $L1[0];
$Y1 = $L1[1];
$X2 = $L2[0];
$Y2 = $L2[1];

$dis = (($X2-$X1)**2 + ($Y2-$Y1)**2)**0.5;

echo number_format($dis, 4, '.', '') . "\n";

?>