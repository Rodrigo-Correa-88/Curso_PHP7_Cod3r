<div class="title">Include vs Require</div>

<?php
ini_set('display_errors', 1);
echo "Usando include com arquivo inexistente... <br>";
include('arquivoInexistente.php');

echo "Usando require com arquivo inexistente... <br>";
require('arquivoInexistente.php');

echo "Não achou mesmo";
?>