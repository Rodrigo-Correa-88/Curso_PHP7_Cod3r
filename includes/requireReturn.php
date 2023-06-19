<div class="title">Require & Return</div>

<?php

$valorRetorno = require('returnUsado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . "<br>";
$valorRetorno2 = require(__DIR__. '/returnNaoUsado.php');
echo "$valorretorno2<br>";
echo "$variavelDeclarada<br>";
?>