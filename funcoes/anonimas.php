<div class="title">Função Anonima</div>

<?php

$soma = function ($a,$b) { // atribuindo uma função a uma variável.
    return $a + $b;
};
echo $soma(1,2);
echo "\n<hr>";
function executar ($a,$b,$op,$funcao) { // atribuindo uma função como parametro
    $resultado = $funcao($a,$b);
    echo "$a $op $b = $resultado \n<br>";
}
executar(2,3,"+",$soma);
echo "\n<hr>";
$multiplicacao = function ($a,$b) {
    return $a * $b;
};
executar(2,3,"*",$multiplicacao); // outro exemplo de função dentro de uma variável
echo "\n<hr>";
function divisao($a, $b){ // função nova criada
    return $a / $b;
};
executar (9, 3, "/", "divisao"); // para acrescentar uma função como parametro deve-se colocar
                                  // o nome da função entre aspas
?>                                