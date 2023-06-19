<div class="title">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA () {
        echo "Class A) Publico = {$this->publico}\n<br>";
        echo "Class A) Protegido = {$this->protegido}\n<br>"; // atributos protegidos servem para serem repassados por herança
        echo "Class A) Privado = {$this->privado}\n<br>";
    }

    public function vaiPorHeranca() {
        echo 'Serei transmitido por herança!';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A {

    public function mostrarB()
    {
        echo "Class B) Publico = {$this->publico}\n<br>";
        echo "Class B) Protegido = {$this->protegido}\n<br>"; // atributos protegidos servem para serem repassados por herança
        //echo "Class B) Privado = {$this->privado}\n<br>";
        parent::vaiPorHeranca();
    }
   
}

echo "\n<br>";
$b = new B();
$b->mostrarB();
echo "\n<br>";
$b->mostrarA();
echo "\n<br>";
$b->vaiPorHeranca();
?>