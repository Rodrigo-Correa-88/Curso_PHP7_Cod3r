<div class="title">Operadores Lógicos</div>

<style>
p{
    margin-bottom: 0px;
    font-weight: 500;
}

hr{
    margin-top: 0px;
}

</style>

<?php

echo "<p>Verdadeiro(true) ou Falso (false)</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not !

echo "<p>Tabela verdade 'AND' (E)</p><hr>\n";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p>Tabela verdade do 'OR' (OU)</p><hr>\n";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p>Tabela verdade do 'XOR' (OU Exclusivo)</p><hr>\n";
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p>Exemplo</p><hr>\n";

$idade = 65;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioMulher || $criterioHomem;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;

echo "pode se aponsentar -> $podeSeAposentar. <br>";

if ($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
} elseif ($idade >= 65 && $sexo === 'M'){
    echo "Pode se aposentar -> $sexo";
} else {
    echo "Vai ter que trabalhar mais um pouco ...";
}


?>