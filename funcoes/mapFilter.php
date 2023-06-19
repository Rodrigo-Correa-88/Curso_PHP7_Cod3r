<div class="title">Map & Filter</div>

<?php

// cuidar que a ordem dos parametros de map e filter são diferentes
// MAP ("função", variável)
// FILTER (variável, "função")

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];
foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}
print_r($notasFinais1);
echo "\n<br><hr>";

$notasFinais2 = array_map ("round" , $notas); // se tiver necessidade de colacar uma função da API
print_r($notasFinais2);                       // tem que colocar entre aspas                          

$apenasOsAprovados1 = [];
foreach($notas as $nota){
    if($nota >= 7){
        $apenasOsAprovados1[] = $nota;
    }
}
echo "\n<br><hr>";
print_r($apenasOsAprovados1);

function aprovados($nota){
    return $nota >= 7;
}
$apenasOsAprovados2 = array_filter($notas , "aprovados"); // funções criadas tambem devem ser colocadas
echo "\n<br><hr>";                                        // entre aspas
print_r($apenasOsAprovados2);

function calculoLegal($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo "\n<br><hr>";
$notasFinais3 = array_map("calculoLegal", $notas);
print_r($notasFinais3);

?>