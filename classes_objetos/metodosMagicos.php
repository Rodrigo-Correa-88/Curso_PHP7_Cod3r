<div class="title">Métodos Mágicos</div>

<?php

use Pessoa as GlobalPessoa;

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo "Construtor invocado<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct()
    {
        echo "Apagado!";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() 
    {
        echo $this . "<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo um atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor)
    {
        echo "alterando um atributo não declarado: {$atrib} / {$valor}";
    }

    public function __call($metodo, $parametros)
    {
        echo "tentando executar um metodo {$metodo}";
        echo "<br>, com os parametros";
        print_r($parametros);
    }
}

$pessoa = new Pessoa("Ricardo", 40); // chamando o __construct
$pessoa->apresentar(); // chamando __toString
$pessoa->nome="Reinaldo"; 
$pessoa->apresentar();

// chamando o metodo diretamente sem o __call
echo $pessoa->nome;

$pessoa->nomeCompleto = 'Muito legal!!!'; // __set
$pessoa->nomeCompleto; // __get

// acessa o atributo diretamente sem o __get
echo $pessoa->nome;

// call por que o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1,2,3]); // __call

$pessoa = null; // __detruct é chamado.

?>