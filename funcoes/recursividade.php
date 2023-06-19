<div class="title">Recursividade</div>

<?php

function somaUmAte($numero)
{
    $soma = 0;
    for ($i = 0; $i <= $numero; $i++) {
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150);
echo "\n<br>";

function somaRecursivaUmAte($numero)
{
    // Condição de parada !!!!
    if ($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(150);
echo "\n<br>";

function somaRecursivaEconomica ($numero)
{
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1);
}

echo somaRecursivaEconomica(150);
echo "\n<br>";


?>