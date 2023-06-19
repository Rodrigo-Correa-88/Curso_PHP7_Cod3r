<div class="title">Datas #02</div>

<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();
print_r($agora);

echo $agora->format($formatoData1) . "\n";

//strftime nao funciona maissss !!!!!!!!!!!!!!!!!!!


?>