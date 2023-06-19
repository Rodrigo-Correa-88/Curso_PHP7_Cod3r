<?php
session_start();
print_r($_SESSION);
?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome']?>
</p>
<p>
    <b>Email: </b> <?= $_SESSION['email']?>
</p>

<?php
$_SESSION['email'] = 'gabrielfilhoalterado@emailaz.com.br';
?>

<p>
    <a href="sessao_basico.php">Voltar</a>
</p>
<p>
    <a href="sessao_basico_limpar.php">Limpar Sessão</a>
</p>