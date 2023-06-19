<div class="title">Classes Abstratas</div>

<?php
abstract class Abstrata {
    abstract public function metodo1(); // método abstrato não tem corpo 
    abstract protected function metodo2($parametro); // métodos abstratos podem apresentar parâmetros
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1()
    {
        echo "Executando método 1<br>";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1()
    {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }
    public function metodo2($parametro)
    {
        echo "Executando método 2, com $parametro<br>";
    }
    public function metodo3()
    {
        echo "executando método 3<br>";
    }
    
}

$c=new Concreta;
$c->metodo1();
$c->metodo2("externo");
$c->metodo3();
echo "Fim"

?>