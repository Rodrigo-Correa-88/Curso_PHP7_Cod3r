<div class="title">Operadores Relacionais</div>

<style>
p{
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}

</style>



<?php

var_dump( 1 == 1);
var_dump( 1 >= 1);
var_dump( 1 == 0);
var_dump(4 < 23);
var_dump(1 <= 7);

echo "==========\n";

var_dump(111 == '111'); // igualde
var_dump(111 === '111'); // igualdade estrita 3 sinais de =.
var_dump(111 != '111'); // diferença
var_dump(111 !== "111"); // diferença estrita

echo "\n<p>Usando Relacionais no if else</p><hr>";

$idade = 25;

if ($idade < 18){
    echo "\nMenor de idade<br>";
} else if($idade <= 65) {
    echo "\nAdulto<br>";
} else {
    echo "\nTerceira Idade";
}

echo "<p>Spaceship</p><hr>\n";

var_dump(500 <=> 3); // bastante utilizado para ordenação dos numeros
var_dump(50 <=> 50);
var_dump(5 <=> 500);

echo "<p>Descobrir se os valores são verdadeiros ou falsos</p><hr>\n";
var_dump(!!5); //somente utilizar dupla negação
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ")
?>