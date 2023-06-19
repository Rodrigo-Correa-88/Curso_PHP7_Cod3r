<div class="title">Ler Arquivos</div>

<?php

$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 20);
echo "\n";
echo fread($arquivo, 10);
fclose($arquivo);

echo "\n\n";

$arquivo = fopen('teste.txt' , 'r');
$tamanho = filesize('teste.txt');
echo $tamanho . "\n";
echo fread($arquivo, filesize('teste.txt'));
fclose($arquivo);

echo "\n\n";

$arquivo = fopen('teste.txt' , 'r');
echo fgets($arquivo);
echo "Fim"

?>