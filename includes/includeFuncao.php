<div class="title">Include Função</div>

<?php
echo "Carregando: includeFuncao<br>";

function carregarArquivo() 
{
    include('includeArquivo.php');
    echo $variavel . "<br>";
    echo soma(2,5) . "<br>";
}

echo "Novamente o aquivo includeFuncao<br>";
carregarArquivo();
echo "Variável = '{$variavel}'";
var_dump($variavel);
echo "<br>" . soma(3,8);
?>