<div class="title">Retornando Função</div>

<?php

function soma($a) 
{
    return function ($b) use ($a) 
    {
        return $a + $b;
    };
}
echo soma(13) (6);
echo "\n <br>";

$doisMais = soma(2);
echo $doisMais(10);
echo "\n <br>";
echo $doisMais(18);
echo "\n <br>";


?>