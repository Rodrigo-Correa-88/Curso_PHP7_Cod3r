<div class="title">Desafio Switch</div>

<style>
    form > * {
        font-size: 1.6rem;
    }
</style>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km_milha">Km > Milha</option>
        <option value="milha_km">Milha > Km</option>
        <option value="metro_km">Metros > Km</option>
        <option value="km_metros">Km > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<?php

$param = $_POST['param'];
$conversao = $_POST['conversao'];
 
switch ($conversao) {
    case 'metro_km':
        $param /= 1000;
        echo "$param km";
        break;
    case 'km_metros':
        $param *= 1000;
        echo "$param mts";
        break;
    case 'km_milha':
        $param *= 0.621;
        echo "$param mi";
        break;
    case 'milha_km':
        $param /= 0.621;
        echo "$param km";
        break;    
    default:
       echo "Erro inserir somente números";
        break;
}




?>