<?php

$i = readline();
$a = intdiv($i,365);
$m = intdiv(($i%365),30);
$d = $i % 365 % 30;

echo "$a ano(s)\n$m mes(es)\n$d dia(s)\n";

?>