<div class="title">Escrever Arquivo</div>
<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segundo Inicial\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo," com, novos valores\n");
fwrite($arquivo,"Adicionado em um segundo momento");
fclose($Arquivo);

ini_set('display_errors',1);
$arquivo = fopen('teste.txt', 'x');
fwrite($arquivo,"arquivo Novo\n");
fclose($Arquivo);

?>