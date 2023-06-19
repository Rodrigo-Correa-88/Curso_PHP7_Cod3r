<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
    $usuarios = [
        [
            "nome" => "Aluno Cod3r",
            "email" => "aluno@cod3r.com.br",
            "senha" => "123456",
        ],
        [
            "nome" => " outro Aluno Cod3r",
            "email" => "outroaluno@cod3r.com.br",
            "senha" => "654321",
        ]
    ];

    foreach ($usuarios as $usuario) {
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida) {
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }        
    }

    if (!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\login.css">
    <title>Curso PHP</title>
</head>

<body class="login">
    <header class="header">
        <h1>Curos de PHP</h1>
        <h2>Seja Bem Vindo</h2>
    </header>
     <main class="main">

     <div class="content">
        <h3>Identifique-se</h3>
        <?php if ($_SESSION['erros']) {?>
           
           <div class="erros">
            <?php foreach ($_SESSION['erros'] as $erros) {?>
                <p><?= $erros ?></p> 
            <?php }?>
           </div>
           
        <?php }?>
        <form action="#" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">        
            </div>
            <button>Entrar</button>
        </form>
    </div>    
    </main>
    <footer class="footer">
        COD3R & ALUNOS <?php
                        echo date('Y');
                        ?>
    </footer>
</body>

</html>