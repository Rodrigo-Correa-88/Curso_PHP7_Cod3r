<div class="title">foreach</div>


<?php

$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sabado',    
];

foreach ($array as $valor) {
    echo "\n<br>$valor";
}

foreach ($array as $key => $value) {
    echo "\n<br> $key => $value";
}

echo "\n<br>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as $linha) {
    //echo "$linha";
        foreach ($linha as $valor) {
            echo "$valor";
        }
}

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $dobrar ) {
    $dobrar *= 2;
    echo "\n<br$dobrar>";
}
print_r($numeros);

?>