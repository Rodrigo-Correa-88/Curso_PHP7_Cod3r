<div class="title">Herança</div>

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

class Usuario extends Pessoa { // extends gera um herança da classe pai podendo se reaproveitar
                               // os atributos e métodos da classe pai.
    public $login;

    function __construct($nome, $idade, $login)
    {
        //$this->nome = $nome;
       // $this->idade = $idade;
       parent::__construct($nome, $idade); // parente:: chama funções e atributos da classe pai
        $this->login = $login;             //                  
        echo "Usuario Criado!";
    }

    function __destruct()
    {
        echo "Usuario diz tchau!";
    }

    public function apresentar()
    {
        echo "@{$this->login}:"; // sobreescrever ou agregar a função filho.
        parent::apresentar(); // parent:: serve para puxar um função da classe pai
    }

}

$usuario = new Usuario("Cloud", 28, "cloud_ff7");
$usuario ->apresentar();



?>