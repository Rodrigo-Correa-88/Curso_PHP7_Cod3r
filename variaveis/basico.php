<div class="title">Básico</div>
 <?php

$numeroA = 13;
echo $numeroA , '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;

$somaDosNumeros = $a + $b;
echo $somaDosNumeros;
$somaDosNumeros = 0;

echo '<br>';
echo isset ($somaDosNumeros); // isset verifica se a variável possui algun valor padrão.
echo '<br>';    
unset($somaDosNumeros); // Retira o valor padrão da variável.
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>'. $variavel;
$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Regras de nomenclatura de variáveis

$var = 'Valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
// $vâr5 = 'invalida'; // não utilizar ascentuação
// $6var = 'invalida'; // não começar com números
// $%var7 = 'invalida'; // não começar com caracteres especiais
// $var8% = 'invalida'; // não finalizar com caracters especiais






 ?>