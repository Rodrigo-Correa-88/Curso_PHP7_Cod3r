<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Excluir Registro #2</div>

<?php
require_once "conexao.php";

$conexao = novaConexao();
$registros  = [];

if($_GET['excluir']) {
    $excluirsql = "DELETE FROM cadastros WHERE id = ?";
    $stmt = $conexao->prepare($excluirsql);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

$sql = "SELECT * FROM cadastros";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado -> fetch_assoc()){
        $registros[] = $row;
    }
} elseif ( $conexao -> error){
    echo "Erro: " . $conexao -> error;
}

$conexao->close();

?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ações</th>        
    </thead>
    <tbody>
        <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?= $registro['id']?></td>
                <td><?= $registro['nome']?></td>
                <td><?= $registro['email']?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento']))?></td>
                <td>
                    <a href="/exercise.php?dir=db&file=excluir_2&excluir=<?= $registro['id']?>" class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table  *{
        font-size: 1.2rem;
    }
</style>