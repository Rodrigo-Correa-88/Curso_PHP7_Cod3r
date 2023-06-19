<div class="title">Traits 02</div>

<?php

trait Validacao
{
    public function validarString($str)
    {
        return isset($str) && $str !== "";
    }
}


trait validacaoMelhor
{
    public function validarString($str)
    {
        return isset($str) && trim($str);
    }    
}

class Usuario 
{
    use Validacao, validacaoMelhor
    {
        validacaoMelhor::validarString insteadof Validacao;

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));
?>