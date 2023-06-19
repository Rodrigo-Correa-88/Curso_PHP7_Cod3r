<div class="title">Argumentos e Retorno</div>

<?php

function obterMsg(){
    return 'Seja bem Vindo!'; // Retur permite trabalhar com o tipo  dentro da função
}

echo obterMsg();

$funcao = obterMsg();

echo "\n<br>$funcao";
echo "\n<br>";
echo strtoupper($funcao); // exemplo de trabalho com o tipo dentro da função
echo "\n<br>";
var_dump($funcao);


// recebendo parametro / argumentos
function obterMensagemComNome ($nome) {
    return "Bem Vindo,{$nome}!";  // **por que foi colocado entre chaves ? ? **
}

echo "\n<br>", obterMensagemComNome("Rodrigo");


function soma($a, $b) {
    return $a + $b;
}

$x = 4;
$y = 5;
echo "\n<br>" , soma(16 , 16);
echo "\n<br>" , soma($x , $y); // atribuição por valor não por referência

function trocaValor ($a ,$novoValor) {
    $a = $novoValor;
}
$variavel = 1;
trocaValor($variavel, 3);
echo "\n<br>", $variavel;

function trocaValorDeVerdade(&$a , $novoValor) { // & indica que a variável e por referencia
    $a = $novoValor;
}

TrocaValorDeVerdade($variavel, 5000);
echo "\n<br>$variavel";

?>