<div class="title">Error Handler</div>

<?php
// DEU TUDO ERRADO !!!!!!!!!!!!!!!!

ini_set('display_errors',1);
//echo 4/0 .'<br>';

error_reporting(E_ERROR);
//echo 4/0 .'<br>';

error_reporting(E_ALL);
//echo 4/0 .'<br>';

error_reporting(~E_ALL);
//echo 4 / 0 .'<br>';

include 'Arquivo_inexistente.php';

function filtrarMensagens ($errno,$errstring) {
    $text = 'include';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagens', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';

include 'Arquivo_inexistente';

?>