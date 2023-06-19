<div class="title">Funções & Escopo</div>


<?php

// sistaxe de uma função
function imprimirMensagens () {
    echo "olá ";
    echo "Até a próxima!";
}

//simtaxe pata chamar uma função
imprimirMensagens();

//Escopo
$variavel = 1; // variavel global vale para o programa fora de funções

function trocaValor () {
    $variavel = 2; // variavel local dentro da função
    echo "Durante a função: $variavel \n<br>";
}

echo "Antes: $variavel \n<br>";
trocaValor();
echo "Depois: $variavel \n<br>";

echo "\n<br>";

function trocaValorDeVerdade () {
    global $variavel; // palavra reservada para acessar uma variavel global
    $variavel = 2; 
    echo "Durante a função: $variavel \n<br>";
}

echo "Antes: $variavel \n<br>";
trocaValorDeVerdade();
echo "Depois: $variavel \n<br>";

var_dump(trocaValor());


?>