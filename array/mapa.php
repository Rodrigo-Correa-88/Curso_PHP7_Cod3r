<div class="title">Mapa</div>

<?php

// SINTAXE DO ARRAY COM CHAVE E VALOR.

$array = array(
    "chave" => "valor",
    "chave2" => "valor2",
    "chave3" => "valor3"
);


$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados["idade"]);
echo "\n<br>";
print_r($dados["cor"]);
echo "\n<br>";
print_r($dados["peso"]);
echo "\n<br>";
print_r($array["chave"]);

$lista = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e"
);
echo "\n<br>";
print_r($lista);

$lista[] = "Adicionar"; // Adiciona um elemento no array.

echo "\n<br>";
print_r($lista);


?>