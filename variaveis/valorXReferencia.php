<?php

$a = 4;
$b = $a; // atribuição por copia

$a++;

echo $b;

$c = "Rodrigo";
$d = &$c; // atribuiçaõ por referência

$c = "caroline";

echo $d;
?>