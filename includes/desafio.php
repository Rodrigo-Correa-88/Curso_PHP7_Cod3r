<div class="title">Desafio Include</div>

<?php
require_once('usuario.php');
ini_set('display_errors', 1);

$usuario = new Usuario('Gustavo', 21,"123");
$usuario->apresentar();


?>