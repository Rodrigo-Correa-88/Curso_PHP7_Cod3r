<div class="totle">Método $_POST</div>

<style>

form > * {
    font-size: 1.8rem;
}

</style>

<form action="#" method="post">

<input type="text" name="nome">
<input type="text" name="sobrenome">
<button>Enviar</button>

</form>

<?php

print_r($_GET);
echo "\n <br>";
print_r($_POST);
?>