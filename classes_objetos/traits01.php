<div class="title">Traits 01</div>

<?php
trait validacao {
    public $a = "Valor A";
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = "Valor B";
    private $c = "Valor C (privado)";
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;         // como as trits estão dentro da classe agora se tem acesso
        public function imprimirValorC(){   // pela classe  
            echo '<br>', $this->c;
        }                 

}                                   
    

$usuario = new Usuario();
var_dump($usuario->validarString(''));
echo $usuario->a, "<br>", $usuario->b;
echo $usuario->imprimirValorC();

?>