<?php namespace Outro\Nome; ?>

<div class="title">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include ('use_as_arquivo.php');

function soma ($a,$b) {
    return $a.$b; // Erro proposital
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__  .'->'. __CLASS__ .'->'. __METHOD__ .'<br>';
    }
}

echo \Nome\Bem\Grande\constante . '<br>';
use const Nome\Bem\Grande\constante ; 
echo constante . '<br>';

use Nome\Bem\Grande as ctx; // apelidando arquivo Nome\Bem\Grande como ctx
echo soma(1,2) . '<br>'; // utilizando a função do Outro\Nome
echo ctx\soma(1,2).'<br>'; // acessando a função de outro arquivo por apelido

/*
Resolvendo conflito de nomes iguais de namespaces diferentes
*/

// a função de mesno nome recebe um apelido e iss acaba com o conflito de nomes
use function Nome\Bem\Grande\soma as somareal; 

echo somareal(1,2).'<br>';

/*
Acessando a clasee do namespace Outro\Nome
*/

$a = new Classe();// Criando um objeto.
$a -> func(); // acessando o metodo do objeto.

$b = new \Nome\Bem\Grande\Classe(); // criando um objeto com a classe do outro namespace
$b -> func(); // como foi criado a patir no outro arquivo ele ja acessa o arquivo Nome\Bem\Grande\ 

$c = new ctx\Classe(); // criando o objeto usando o apelido da linha 26
$c ->func();// como foi criado a partir no outro arquivo ele ja acessa o arquivo Nome\Bem\Grande\ 

/*
Criando um apelido para o metodo ou classe de um namespace.
*/

use \Nome\Bem\Grande\Classe as D;

$d = new D; // criando o objeto usando o apelido da linha 56
$d -> func();// como foi criado a partir no outro arquivo ele ja acessa o arquivo Nome\Bem\Grande\


?>