<div class="title">Interface</div>

<?php
interface Animal {
    function respirar ();
}

interface Canino extends Animal {
    function latir() : string; // interface por padrão e sempre público
}

class Cachorro implements Animal {

    function respirar()
    {
        echo "irei usar ixigênio\n<br>";
    }
    function latir (): string {
        return "au au";
    }
}
$animal1 = new Cachorro();
$animal1->respirar();
 echo $animal1->latir();
?>