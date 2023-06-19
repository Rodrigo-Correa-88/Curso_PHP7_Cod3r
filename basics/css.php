<div class="title">Integração CSS</div>

<h1>
<?php
//integração de HTML e PHP
    echo'Olá';
    echo'<small>';
    echo' Mundo!';
    echo'</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me expressar</div>";?>

<br>
<div center><button dobro><?="Legal"?></button></div>

<style>

button {
    padding: 5px 20px;
    background-color: #4286f4;
    color: #EEE;
    font-weight: 10px;
    border-radius: 10px;
}

[center] {
    display: flex;
    justify-content: center;
}

[azul] {
    color: #4286f4;
}

[dobro] {
    font-size: 2rem;
}
</style>