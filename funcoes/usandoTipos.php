<div class="title">Usando Tipos</div>

<?php

function somar1($a, $b){
    echo "<spam>$a + $b = </spam>";
    return $a + $b;
}

echo somar1(1,2);
echo "\n<br>";
echo somar1(1.7,2.5);
echo "\n<br>";
echo somar1(1,'4dois');
echo "\n<br>";

echo "<hr>";

function somar2(int $a, int $b){
    echo "<spam>$a + $b = </spam>";
    return $a + $b;
}

echo somar2(1,2);
echo "\n<br>";
echo somar2(3.7,2.5);
echo "\n<br>";
//echo somar2(1,"4dois"); // não reconhece mais variáveis não numéricas

echo "<hr>";

function somar3($a, $b): int{ //  sintaxe que define o tipo de retorno da variável
    echo "<spam>$a + $b = </spam>";
    return $a + $b;
}

echo somar3(1,2);
echo "\n<br>";
echo somar3(3.7,2.5);
echo "\n<br>";
echo somar3(1,"4dois");


?>