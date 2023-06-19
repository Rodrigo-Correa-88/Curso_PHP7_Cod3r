<div class="title">Interpolação</div>
<?php

 $numero = 10;
 echo $numero;
 echo '<br> $numero'; // aspas simples não interpreta(interpola) a variável
 echo "<br> $numero"; // aspas duplas sim interpreta(interpola) a variável

 $texto = "A sua nota é : $numero";
 echo "<br> $texto";

 $objeto = 'caneta';
 echo "<br> Eu tenho 5 $objeto" . "s";
 echo "<br> eu tenho 5 {$objeto}s";
 echo "<br> Eu tinha 5 { $objeto}s mas perdi 3 {$objeto }s";

 /*
 Cuidar os espaços entre as chaves, espaço no inicio da chave 
 gera um problema. porem depois da chave não.
 */


?>