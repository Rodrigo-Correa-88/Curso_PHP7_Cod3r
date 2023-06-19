<div class="title">Argumentos e Variáveis</div>

<?php

function soma($a, $b) {
    return $a + $b;
}

echo soma(4,5); // variaveis  de acordo com a quantidade de parametros
echo "\n<br>";
echo soma(5,4,6); // passando mais variaveis que parametro a linguagem descondidera o excesso

function somaCompleta (...$numeros) { // gera uma função com parametros indefinidos
    $soma = 0; 
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo "\n<br>";
echo somaCompleta(1, 2, 3, 4, 5,);

$array = [6,7,8];
echo "\n<br>";
echo somaCompleta(...$array); // aqui os ... serve para abrir o array para a função.


function membros ($titular, ...$dependentes) {
    echo "Titular : $titular \n<br>";
    if($dependentes) {
        foreach ($dependentes as $dep) {
            echo "Dependentes: $dep \n<br>";
        }
    }    
}

echo "\n<br>";
membros("Ana" , "Pedro", "Rafaela", "Amanda");
echo "\n<br>";
membros("Roberto");

?>