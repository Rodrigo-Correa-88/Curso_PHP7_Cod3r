<div class="title">Membros Estáticos</div>

<?php
class A {
    
    public $naoStatic = "Variável de instância";
    public static $static = "Variável de classe (Estática)";

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}\n<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>
        // Tentativa 2
        // echo "Estática = {self::$static}\n<br>";
        // Tentativa 3
        echo "Estática = " . self::$static . "\n<br>";
    }

    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>"
        // echo "Estática = {$static}\n<br>";
        echo "Estática = " . self::$static . "\n<br>";
    }

}

// $objetoA = new A();
// $objetoA->mostrarA();
// $objetoA->mostrarStaticA();
A::mostrarStaticA(); // Acessando função diretamente apartir da classe.
echo A::$static, "<\nbr>"; // acessando uma atributo de instância
?>