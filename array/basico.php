<div class="title">Array</div>

<?php

$lista = array (1, 2, 3.4, "texto"); // estrutra básica

echo $lista . "\n<br>";
var_dump($lista);

print_r($lista);

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[2];

$texto = 'Esse é um texto de exemplo';
echo '<br>' . $texto[0];
echo '<br>' . $texto[1];
echo '<br>' . $texto[2];
echo '<br>' . $texto[3];
echo '<br>' . $texto[4];
// Cudiar com caracteres especiais

?>