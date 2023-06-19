<div class="title">Inserir Dados #1</div>

<?php 

require_once "conexao.php";

$sql = "INSERT INTO cadastros (
    nome, nascimento, email, site,filhos,salario
) VALUES ('Marieta','1989-10-29','marieta123@email.com.br','http://marieta123.sites.br',2,13000.87 )";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "sucesso :)";
} else {
    echo "Erro: " . $conexao -> error;
}

$conexao->close();

?>