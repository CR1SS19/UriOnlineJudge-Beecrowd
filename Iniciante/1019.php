<?php

$n = readline();
$h = intdiv(intdiv($n,60),60);
$m = intdiv($n,60) % 60;
$s = $n % 60;

echo "$h:$m:$s\n";

?>