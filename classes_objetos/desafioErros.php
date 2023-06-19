<div class="title">Desafio 7 Erros</div>

<?php

interface Template {
    function metodo1();
    function metodo2 ($parametros);
}

abstract class ClasseAbstrata implements Template {
    
    public function metodo3() {
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {

    function metodo1(){}

    function metodo2 ($parametros){}

    function __construct($parametros)
    {
        
    }
}

$exp = new Classe('...');
$exp->metodo3();

?>