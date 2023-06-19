<div class="title">Comparação entre Arrays</div>

<?php


$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];

var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo "\n<br>";
//igualdade é true pois eles possuem os mesmos elementos so que em ordens diferentes
var_dump($arr1 == $arr3);
//igualdade estrita  é false pois eles possuem os mesmos elementos so que em ordens diferentes
var_dump($arr1 === $arr3);
//diferença é false pois eles possuem os mesmos elementos so que em ordens diferentes
var_dump($arr1 != $arr3);
//diferença estrita é true pois eles possuem os mesmos elementos so que em ordens diferentes
var_dump($arr1 !== $arr3);

echo "\n<br>";
// mesmo trocando os tipos ainda assim a comparação pode gerar um true
$arr4 = ['idade' => '20', 'nome' => 'Maria'];
var_dump($arr1 == $arr4);
// somente a comparação estrita gera um false
var_dump($arr1 === $arr4);

?>