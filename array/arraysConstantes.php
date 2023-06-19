<div class="title">Arrays Constantes</div>
<?php

// Não se acrescenta e não se modifica o valor.

const FRUTAS = array('laranja', "abacaxi");
//FRUTAS[0] = 'banana';
echo FRUTAS[0];
echo "\n<br>";

const CARROS = ["fiat" => "uno", "ford" => "fiesta",];
// CARROS["BMW"] = '325i';
echo CARROS["fiat"];
echo "\n<br>";

define ('CIDADES', array('belo horizonte', 'recife'));
echo CIDADES[1];
echo "\n<br>";


?>