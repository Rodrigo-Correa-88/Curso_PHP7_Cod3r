<div class="title">Valor X Referência</div>

<?php 

$variavel = 'valor incial';
echo $variavel;

// atribuição por valor.
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavel = 'novo Valor';
echo "<br> $variavel";
echo " $variavelValor";

// Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';

echo "<br>$variavel $variavelReferencia";

?>