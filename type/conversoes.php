<div class="title">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);


// Converter float para int 
echo ('<br>');
echo('int para float' . '<br>');
var_dump(PHP_INT_MAX + 1);
echo ('<br>');
var_dump(1 + 1.0);
echo ('<br>');
var_dump((float) 3);
echo ('<br>');

// Converter int para float

echo('Float para int' . '<br>');
var_dump((int)6.8);
echo('<br>');
var_dump(intval(2.999));
echo('<br>');
var_dump((int)round(2.8));
echo('<br>');

//Operações com string
echo('Strings' . '<br>');
var_dump(3 + "2");
echo('<br>');
var_dump("3" + 2);
echo('<br>');
var_dump("3" . 2);
echo('<br>');
//var_dump(1 + "cinco");
//echo('<br>');
//var_dump(1 + "5 cinco"); // Na Versão PHP8 algumas conversões estão gerando erros 
//echo('<br>');
//var_dump(1 + "cinco 5");
//echo('<br>');
var_dump(1 + "2 + 5");
echo('<br>');
var_dump(1 + "3.2");
echo('<br>');
var_dump(1 + "-3.2e2");
echo('<br>');
var_dump((int) "10.5");
echo('<br>');
?>