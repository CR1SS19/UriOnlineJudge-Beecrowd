<?php

readline();
$S = readline();
$V = readline();

echo "TOTAL = R$ " . number_format($S + $V * 0.15, 2, '.', '') . "\n";

?>
