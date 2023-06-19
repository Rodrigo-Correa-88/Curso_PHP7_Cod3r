<div class="title">Try & Catch</div>

<?php

//echo 7 / 0 ; // forçando um erro
//echo intdiv(7,0) 

/*
try e utilizado quando pode se ter possiveis erros
vindo de formularios preenchidos por terceiros. 
*/

try { //try utilizando catch
    echo intdiv(7,0);
} catch (Error $e) {  // o tipo no cath e obrigatorio colocar
    echo 'teve um erro aqui!<br>'; // como o erro deve ser tratado
}

try { // try utilizando exception que e utilizado para criar excessões
    throw new Exception("Um erro aconteceu");
    echo intdiv(7,0);        
} catch (DivisionByZeroError $e) { // DivisionByZeroError método de erro específico do php
    echo 'divisão por zero!';
} catch (throwable $e) { // tratamento de erro mais genérico
    echo 'Erro encontrado: ' . $e -> getMessage() . '<br>';
} finally {
    echo 'Sempre executado!<br>';
}

echo 'Sempre Continua depois do erro tratado.';

?>