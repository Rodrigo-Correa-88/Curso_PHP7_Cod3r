<div class="title">Desafio operadores Lógicos</div>


<!-- 

Dois Trabalhos => terça e quinta !

- Se os dois executados -> tv 50 e sorvete.
- Se apenas um for executado -> tv 32 e sorvete.
- Se nenhum for executado -> Fica em casa mais saudável.

-->

<style>
    button, select {
        font-size: 1.8rem;
    }

</style>

<form action="#" method="post">
<div>
<label for="t1">Trabalho 1</label>
<select name="t1" id="t1">
    <option value="1">Executado</option>
    <option value="0">Não executado</option>
</select>
</div>
<div>
<label for="t2">Trabalho 2</label>
<select name="t2" id="t2">
    <option value="1">Executado</option>
    <option value="0">Não executado</option>
</select>
</div>
<button>Executar</button>
</form>

<?php

$t1 = $_POST["t1"];
$t2 = $_POST["t2"];

if ($t1 == "1" && $t2 == "1"){
    
    echo "Compramos uma tv de 50 e tomamos sorvete!";
    
} elseif ($t1 == "1" && $t2 == "0" || $t1 == "0" && $t2 == "1" ) {

    echo "Compramos uma tv de 32 e tomamos sorvete!";
    
} else {

    echo "Ficamos em casa e mais saudável";

}














?>