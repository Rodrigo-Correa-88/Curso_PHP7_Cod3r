<div class="title">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); // var_dump condidera acentos na contagem
echo '<br>';
// concatenção
echo ("Nós também " . "somos");
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'teste '", '"teste "', "\"teste\" ", '\'teste\'';
print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções da string

echo '<br>' . strtoupper('maximizado'); // coloca todos os caracteres da sting em caixa alta
echo('<br>' . strtolower("MINIMIZADO")); // coploca todos os caracteres em caixa baixa 
echo('<br>') . ucfirst('só a primeira letra');
echo('<br>') . ucwords('todas as palavras');
echo ('<br>') . strlen('Quantas letras?');
echo('<br>') . mb_strlen("Eu também", "utf-8");
echo('<br>') . substr('Só uma parte mesmo' , 7 ,6);
echo('<br>') . str_replace('isso' , 'aquilo' , 'Trocar isso');
?>