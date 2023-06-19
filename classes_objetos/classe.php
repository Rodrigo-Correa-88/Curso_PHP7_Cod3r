<div class="title">Primeira Classe</div>

<?php

class Cliente
{
    // atributos
    public $nome = 'Anônimo'; // propriedade da classe / atributo do Objeto
    public $idade = 18;       // propriedade da classe / atributo do Objeto
    // public e utilizado para deixar a propriedade visivel para os metodos(funções)
    public function apresentar()
    { // metodo da classe (função)
        echo "Nome: {$this->nome} \nIdade: {$this->idade}"; // this e utilizado para acessar as propriedades do objeto
    }
}

$cliente1 = new Cliente();      // criando um novo objeto
$cliente1->nome = 'Ana Silva'; // acessando uma propriedade do objeto para modificar
$cliente1->idade = 22.5;        // acessando uma propriedade do objeto para modificar
$cliente1->apresentar();
echo "\n";
$cliente2 = new cliente();     //criando um segundo objeto
$cliente2 ->nome = 'Gabriel';
$cliente2 ->idade = 15;
$cliente2 ->apresentar();

?>