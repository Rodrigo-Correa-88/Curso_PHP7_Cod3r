<div class="title">Multidimensionais</div>

<?php

$dados = [ 

    [// indice 0
        "nome" => "Roberto", // *Seria o indice 0 do indice 0
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [ // indice 1
        "nome" => "Maria", // Seria o indice 0 do indice 1
        "idade" => 25,
        "naturalidade" => "Bahia" 
    ]

    ];

print_r($dados);
echo "\n<br>";
print_r ($dados[0]["idade"]);
echo "\n<br>";
print_r ($dados[1]["idade"]);

/*
colocar um array vazio ira adicionar um novo array
e não sobreescrever o array existente.
*/

$dados [] = [

    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do Mexico",
];

echo "\n<br>";
print_r ($dados[2]);
print_r ($dados[2]["idade"]);

// para adiconar um elemento novo dentro do array se deve indicar em qual

$dados[2]["vizinho"] = "Chaves";

echo "\n<br>";
print_r ($dados[2]);

/*
unset remove os elementos porem ele não retira os 
indices se retirar o indice 1 ele fica com os indices 0 , 2,
e o php não reordena os indices. 
*/

unset($dados[1]);
echo "\n<br>";
print_r($dados);
// tentando ver o indice 1 gera um valor NULL 
var_dump($dados[1])
;

?>