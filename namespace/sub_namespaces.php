<?php namespace App; ?>

<div class="title">Sub-Namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 345;

echo constante. "<br>";
echo constant('\\' . __NAMESPACE__ . '\constante' ) . "<br>"; // acesso a constante
echo \App\constante. '<br>'; // acesso a constante
echo \App\Principal\constante. '<br>'; // acesso a constante
echo \App\Principal\Especifico\constante. '<br>'; // acesso a constante
?>