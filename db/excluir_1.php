<div class="title">Excluir Registro #1</div>

<?php
require_once "conexao.php";

$sql = "DELETE FROM cadastros WHERE id = 5";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "sucesso :)";
} else {
    echo "Erro: " . $conexao -> error;
}

$conexao->close();

?>