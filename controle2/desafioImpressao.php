<div class="title">Desafio Impressão</div>

<!--

- Imprima apenas os valores do array que contén o indice par.
- Resolver com for e foreach.
- Valores esperados: AAA , CCC , EEE

-->

<?php

$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"    
];


 for ($i = 0 ; $i < count($array) ; $i++) { 
    if ($i % 2 === 1) continue;
    echo "{$array[$i]}\n<br>";
}

foreach ($array as $key => $value) {
    if ($key % 2 === 1) {
        continue;
    } echo "$value \n<br>";
}

?>