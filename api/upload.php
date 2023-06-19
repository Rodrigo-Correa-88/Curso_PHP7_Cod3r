<div class="title">Upload</div>

<style>
    input, button{
        font-size: 1,5rem;
    }
</style>

<?php
print_r($_FILES);
if ($_FILES && $_FILES['arquivo']){
    $pastaupload = '/Users/rodri/Desktop/';
    $nomeDoArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaupload . $nomeDoArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];
}
if (move_uploaded_file($tmp, $arquivo)) {
    echo "Arquivo válido e enviado com sucesso.";
} else {
    echo "Erro no envio do arquivo!";
}
?>