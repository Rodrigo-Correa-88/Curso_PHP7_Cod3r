<div class="title">Operações</div>

<?php 

$dados = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A"; // Sintase para adicionar um novo conteúdo no array


$dadosCompletos = $dados + $dados2;
print_r($dadosCompletos);

echo "\n<br>" . is_array($dadosCompletos);
echo "\n<br>" . count($dadosCompletos);

echo "\n<br>";

$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

echo "\n<br>";
echo "{$dadosCompletos['idade']}"; // acessa um dado de dentro de um array

unset($dadosCompletos["nome"]);
echo "\n<br>";
print_r($dadosCompletos);


$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo "\n<br>";
print_r($decimais);

$decimais = array_merge($pares , $impares); // função que uni os arrays
echo "\n<br>";
print_r($decimais);


sort($decimais); // Função que ordena os arrays 
echo "\n<br>";
print_r($decimais);

?> 