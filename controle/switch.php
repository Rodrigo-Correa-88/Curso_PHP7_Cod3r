<div class="title">Switch</div>


<?php

$categoria = 'Luxo';
$preco = 0.0;
$carro = ' ';

if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco =  33000;
}

$precoFormatatdo = number_format($preco, 2 , ',' , '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatatdo</p>";

$categoria = 'suv';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'mercedes';
        $preco = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $carro = 'renegade';
        $preco = 80000;
        break;
        case 'sedan':
            $carro = 'etios';
            $preco = 55000;
            break;
    default:
        $carro = 'mobi';
        $preco = 33000;
        break;
}

$precoFormatatdo = number_format($preco, 2 , ',' , '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatatdo</p>";
 
?>