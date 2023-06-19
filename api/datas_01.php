<div class="title">Datas #01</div>

<?php

setlocale(LC_TIME, 'pt_BR','pt_BR.utf-8');
echo time() . '<br>';
echo date('D, d \d\e M \d\e Y H:i A' . '<br>');


//echo strftime('%A, %d de %B de %Y', time(). '<br>');

$amanha = time() + (24 * 60 * 60);
echo $amanha;

//strftime nao funciona maissss !!!!!!!!!!!!!!!!!!!


?>