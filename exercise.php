<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('location: login.php');
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
    <link rel="stylesheet" href="assets\css\exercise.css">
    <title>Exercício</title>
</head>
<body class="exercise">
    <header class="header">
        <h1>Curos de PHP</h1>
        <h2>Visualização do Exercícios</h2>
    </header>
    <nav class="navigation">
    <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
    <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="green">Sem formatação</a>
    <a href="index.php" class="red">voltar</a>
    <a href="logout.php">Sair</a>
    </nav>
    <main class="main">
        <div class="content">
        <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS <?php echo date('Y'); ?>
    </footer>    
</body>
</html>