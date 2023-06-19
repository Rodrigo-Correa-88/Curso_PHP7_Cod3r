<?php
class Pessoa {

    public $nome;
    public $idade;
    
    function __construct($novoNome, $idade)
    {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo "Pessoa Criada! \n<br>";
    }
    
    function __destruct()
    {
        echo "Pessoa diz tchau!!";
    }
    
    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos \n<br>";
    }
    }
?>