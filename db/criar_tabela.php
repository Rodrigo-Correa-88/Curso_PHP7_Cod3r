<div class="title">Criar Tabela</div>

<?php 
require_once "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS cadastros (
    id int(6) unsigned auto_increment PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    nascimento DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100)
    filhos INT,
    salario FLOAT
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "sucesso :)";
} else {
    echo "Erro: " . $conexao -> error;
}

$conexao->close();


?>