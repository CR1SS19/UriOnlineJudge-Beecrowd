<?php

$l1 = explode(" ", readline());
$a = $l1[0];
$b = $l1[1];
$c = $l1[2];

$m = ($a+$b+abs($a-$b))/2;
$m = ($m+$c+abs($m-$c))/2;

echo "$m eh o maior\n";

?>