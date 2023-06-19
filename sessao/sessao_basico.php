<div class="title">Sessão Básico</div>

<?php

session_start();

print_r($_SESSION);
echo '<br>';

if (!$_SESSION['nome']){
    $_SESSION['nome'] = 'Gabriel';
}

if (!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/sessao/sessao_basico_alterar.php">Alterar Sessão</a>
</p>