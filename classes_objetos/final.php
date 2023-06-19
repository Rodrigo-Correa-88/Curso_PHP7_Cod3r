<div class="title">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2() {
        echo "Não vou mudar<br>";
    }
}

class Classe extends Abstrata {

    public function metodo1(){
        echo "Exectuanto método 1<br>";
    }

   // public function metodo2(){
   //     echo "Extendo método 2<br>";
   // }    
}

$classe  = new Classe("#");
$classe -> metodo1();

final class Unica {
    public $att = "Valor ùnico";
}

//class Duplicata extends Unica {
//    public $att2;
//}

$unica = new Unica();
echo $unica->att;

?>