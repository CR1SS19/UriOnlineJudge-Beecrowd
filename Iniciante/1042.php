<?php

$L = explode(" ", readline());
$a = $L[0];
$b = $L[1];
$c = $L[2];

if($a<$b && $a<$c){
    if($b<$c){
        echo "$a\n$b\n$c\n";
    }else{
        echo "$a\n$c\n$b\n";
    }
}elseif($b<$a && $b<$c){
    if($a<$c){
        echo "$b\n$a\n$c\n";
    }else{
        echo "$b\n$c\n$a\n";
    }
}elseif($c<$a && $c<$b){
    if($a<$b){
        echo "$c\n$a\n$b\n";
    }else{
        echo "$c\n$b\n$a\n";
    }
}
echo "\n$a\n$b\n$c\n";

?>