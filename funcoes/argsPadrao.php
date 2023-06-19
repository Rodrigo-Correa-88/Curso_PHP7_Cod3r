<div class="title">Argumentos Padão</div>

<?php
function saudacao($nome = "Senhora(a)", $sobrenome = "Cliente") {
    return " Bem vindo, $nome $sobrenome! \n<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null,null);
echo saudacao("Mestre", "Supremo");

function anotarPedido ($comida, $bebida = "Água") { // gerando um parametro variavel com um fixo 
    echo "Para comer: $comida \n<br>";
    echo "Para beber: $bebida \n<br>";
}

anotarPedido("Hamburguer");
anotarPedido("Pizza", "Refrigerante");

function anotarPedido2 ( $bebida = "Água", $comida) { // sempre cuidar para colocar o parametro fixo no final 
    echo "Para comer: $comida \n<br>";                // senão pode gerar algum erro, 
    echo "Para beber: $bebida \n<br>";                // alem de sempre ter que informar o parametro fixo
}
//anotarPedido2("Hamburguer"); // gerando um erro pois o parametro fixo não foi informado
anotarPedido2("Refrigerante 2", "Pizza 2");
?>