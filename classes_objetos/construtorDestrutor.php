<div class="title">Construtor & Destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18)
    {
        echo "construtor Invocado \n<br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Apagado! \n<br>";
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos\n<br>";
    }

}
$pessoa1 = new Pessoa("José",40); 
$pessoa1 -> apresentar();
unset($pessoa1);
$pessoa2 = new Pessoa("Maria");
$pessoa2 -> apresentar();
$pessoa2 = null; // quando o null e atribuido a uma variável ele tem a mesma função do destrutor 

//$pessoa3 = new Pessoa(); / sempre gera uma problema não colocar os patametros do método


?>