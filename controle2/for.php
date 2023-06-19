<div class="title">Laço For</div>

<?php

// Estrutura usada para uma quantidade determinada de repetições.


// Sintaxe

for ($cont = 1 ; $cont <= 5; $cont++){
    echo "$cont \n<br>";
};

echo "<hr>";

for (; $cont <= 10; $cont++) { 
    echo "$cont \n<br>";
};

echo "<hr>";

for(; $cont <= 15;) {
    echo "$cont \n<br>";
    $cont ++;
};

echo "<hr>";

$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sabado',    
];

print_r($array);
echo "\n <br>";

echo "<hr>";

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} \n<br>";
}

$matrix = [

    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']

];

for ($i=0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i][$j]} \n<br>";
    }
}



?>