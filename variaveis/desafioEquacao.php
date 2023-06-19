<div class="title">Desafio Equação</div>

<?php

$prt1 = (6 *(2 + 3)) ** 2;
$prta = 3 * 2;
$prt1a = $prt1 / $prta;
$prt2 = ((1-5) * (2 - 7)) / 2;
$prtb = $prt2 ** 2;
$prt3 = (($prt1a - $prtb) ** 3 );
$prt4 = $prt3 / 10 ** 3;

echo $prt1a , '<br>';
echo $prtb , '<br>';
echo $prt3 , '<br>';
echo "O resultado final é " . $prt4 . ".";


?>