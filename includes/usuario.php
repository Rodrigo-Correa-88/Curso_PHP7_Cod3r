<?php
require('pessoa.php');

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

?>