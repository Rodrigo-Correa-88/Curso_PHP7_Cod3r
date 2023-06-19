<div class="title">Desafio Sorteio</div>

<style>

[center] {
    display: flex;
    justify-content: center;
}

</style>

<?php 

$nomes = [ "Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$sorteio = array_rand($nomes);
echo "<div center><h1>$nomes[$sorteio]</h1></div>";

?>
