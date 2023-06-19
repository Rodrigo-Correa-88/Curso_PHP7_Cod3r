<div class="title">Banco de Dados</div>

<?php

require "conexao.php";

$conexao = novaConexao(null);
$sql = 'CREATE DATABASE curso_php';

$resultado = $conexao->query($sql);

if($resultado){
    echo "sucesso :)";
} else {
    echo "Erro: " . $conexao -> error;
}

$conexao->close();